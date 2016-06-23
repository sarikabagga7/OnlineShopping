<?php

session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}
date_default_timezone_set('America/Toronto');
require_once '../vendor/autoload.php';

DB::$dbName = 'cp4686_eshopping';
//DB::$dbName = 'eshopping';
DB::$user = 'cp4686_eshopping';
//DB::$user = 'eshopping';
DB::$password = 'j4G2UP6rXPaw3azx'; //desktop and remote
DB::$error_handler = 'sql_error_handler';
DB::$host='ipd7.com';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('default');
$log->pushHandler(new StreamHandler('../logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('../logs/errors.log', Logger::ERROR));

function sql_error_handler($params) {
    global $log;
    $log->error("SQL Error: " . $params['error']);
    $log->error("SQL Error: " . $params['query']);
    header("HTTP/1.1 500 Internal Server Error");
    echo json_encode("500:intrenal server error");
    die; 
}

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig() 
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(dirname(__FILE__)) . '/cache' 
);
$view->setTemplatesDirectory(dirname(dirname(__FILE__)) . '/templates');
\Slim\Route::setDefaultConditions(array('atrID' => '\d+'));  

\Slim\Route::setDefaultConditions(array(
    'ID' => '\d+' 
));

//Login Page
$app->get('/login', function() use ($app) {
    $app->render('login.html.twig');
});

$app->post('/login', function() use ($app) { //submit
    $email = $app->request()->post('email');
    $pass1 = $app->request()->post('password');
    $valueList = array('email' => $email);
    $errorList = array();

    if ($errorList) {

        $app->render('login.html.twig', array('errorList' => $errorList, 'v' => $valueList, 'firstName' => $firstname, 'lastName' => $lastname, 'email' => $email, 'pass1' => $pass1, 'pass2' => $pass2, 'usersList' => $usersList));
    } else {      
        $user = DB::queryOneRow("SELECT * FROM users WHERE email=%s and password=%s", $email, md5($pass1));
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            $app->render('login_suc.html.twig', array('user' => $_SESSION['user']));
        } else {
            echo "test";
            $app->render('login.html.twig', array(
                'failed' => true,
                'email' => $email
            ));
        }
    }
});


$app->get('/search/:searchlist', function($searchlist) use ($app) {
    $querysearch = DB::query("SELECT * FROM products WHERE productName=%s ", $searchlist);
    if ($querysearch) {

        $app->render('category.html.twig', array('productList' => $querysearch));
        echo 'found';
    } else {   
        echo "search not found";
    }
});


$app->get('/delete/:ID', function($ID) use ($app) {

    DB::delete('cartitems', 'ID=%i AND sessionID=%s', $ID, session_id());
    $cartItems = DB::query("select cartitems.ID,products.productName,products.ProductPrice,cartitems.quantity from cartitems,products  where products.id=cartitems.productid and sessionID=%s", session_id()); 
    $app->render('cart.html.twig', array("cartItems" => $cartItems, 'user' => $_SESSION['user']));
});


$app->get('/about', function() use ($app) {      
    $app->render('about.html.twig', array('user' => $_SESSION['user']));
});

$app->get('/contact', function() use ($app) {  
    $app->render('contact.html.twig', array('user' => $_SESSION['user']));
});

$app->get('/logout', function() use ($app) { 
    $app->render('logout.html.twig', array('user' => ""));
});


$app->get('/category/:categoryName', function($categoryName) use ($app) {

    $productList = DB::query("SELECT * from  products,category where categoryName=%s and products.categoryID=category.ID ORDER BY ProductPrice  ", $categoryName);
    header("Content-type: image/jpeg");
    $app->render('category.html.twig', array('productList' => $productList, 'user' => $_SESSION['user']));
});

//cart
$app->map('/cart', function()use ($app) {
    //handle incoming post
    if ($app->request()->post()) {
        $productID = $app->request()->post('productID');
        $quantity = $app->request()->post('quantity');
        $item = DB::queryOneRow("select * from cartitems where sessionID=%s and productid=%i", session_id(), $productID);

        if ($item) {
            DB::update('cartitems', array('quantity' => $item['quantity'] + $quantity), 'ID=%i', $item['ID']);
        } else {
            DB::insert('cartitems', array(
                'productID' => $productID,
                'quantity' => $quantity,
                'sessionID' => session_id()
            ));
            $_SESSION['sessionID'] = session_id();
            // echo DB::affectedRows()==1;
        }
    }
    //display cart contents
    $cartItems = DB::query("select cartitems.ID,products.productName,products.ProductPrice,cartitems.quantity from cartitems,products  where products.id=cartitems.productid and sessionID=%s", session_id());
    $app->render('cart.html.twig', array("cartItems" => $cartItems, 'user' => $_SESSION['user']));
})->via('GET', 'POST');

$app->post('/checkout', function() use ($app) { //submit
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        //echo "Access denied";
        $app->render('checkuser.html.twig');
        return;
    }
    //print_r($_SESSION['user']);
    $items = DB::query("select cartitems.ID,products.productName,products.ProductPrice,cartitems.quantity from cartitems,products  where products.id=cartitems.productid and sessionID=%s", session_id());

    $userID = $_SESSION['user']['ID'];
    $date = date("Y-m-d H:i:s");
    $totalAmount = 0;

    foreach ($items as $row) {
        $totalAmount+= $row['quantity'] * $row['ProductPrice'];
    }

    $gst = .05 * $totalAmount;
    $qst = .05 * $totalAmount;
    
             // Email Code
           $to =$_SESSION['user']['email'] ;           
            $subject = "Confirmation shipment";
            $txt = "your shipment has successfully done";
            $headers = "From: ipd7@gmail.com" ;
            mail($to,$subject,$txt,$headers);          

    DB::insert('orders', array(
        'userID' => $userID,
        'totalAmount' => $totalAmount,
        'gst' => $gst,
        'qst' => $qst,
        'totalPayable' => $totalAmount + $gst + $qst,
        'status' => 'delieverd',
        'shippingAddress' => 'test',
        'orderDate' => $date,
        'sessionID' => session_id()
    ));

    $orderItems = DB::queryOneRow("select * from orders where  sessionID=%s and userID=%i", session_id(), $userID);
    //print_r($cartItems);    
    $app->render('confirmorder.html.twig', array("orderItems" => $orderItems, 'user' => $_SESSION['user']));
});

//continue

$app->get('/continue', function() use ($app) {
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        //echo "Access denied";
        $app->render('checkuser.html.twig');
        return;
    }
    $app->render('addshipping.html.twig', array('user' => $_SESSION['user']));
});

$app->post('/continueDelivery', function() use ($app) {
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        //echo "Access denied";
        $app->render('checkuser.html.twig');
        return;
    }
    $userID = $_SESSION['user']['ID'];
    $address = $app->request()->post('address');
    $city = $app->request()->post('city');
    $postaLCode = $app->request()->post('postalCode');
    $province = $app->request()->post('province');
    $phoneNumber = $app->request()->post('phoneNumber');

    $valueList = array(
        'userID' => $userID,
        'address' => $address,
        'city' => $city,
        'postalCode' => $postaLCode,
        'province' => $province,
        'phoneNumber' => $phoneNumber
    );
    $errorList = array();

    if (strlen($address) < 2) {
        array_push($errorList, "Address must have atleast 2 characters.");
        $valueList['address'] = $address;
    }
    if (strlen($city) < 2) {
        array_push($errorList, "City must have atleast 2 characters.");
        $valueList['city'] = $city;
    }
    if (preg_match('/^[A-Z][0-9][A-Z][0-9][A-Z][0-9]$/', $postaLCode) != 1) {
        array_push($errorList, "Postal code is invalid");
        $valueList['postaLCode'] = $postaLCode;
    }
    if ($errorList) {
        $app->render('addshipping.html.twig', array(
            'errorList' => $errorList,
            'value' => $valueList
        ));
    } else {
        // insert user into database
        DB::insert('shippingaddress', array(
            'userID' => $userID,
            'Address' => $address,
            'City' => $city,
            'province' => $province,
            'postalCode' => $postaLCode,
            'phoneNumber' => $phoneNumber
        ));
        $items = DB::query("select cartitems.ID,products.productName,products.ProductPrice,cartitems.quantity from cartitems,products  where products.id=cartitems.productid and sessionID=%s", session_id());

        $userID = $_SESSION['user']['ID'];
        $date = date("Y-m-d H:i:s");
        $totalAmount = 0;
        $productName = array();
        foreach ($items as $row) {
            $totalAmount+= $row['quantity'] * $row['ProductPrice'];
        }

        $gst = .05 * $totalAmount;
        $qst = .05 * $totalAmount;
        $app->render('payment.html.twig', array('items' => $items, 'totalAmount' => $totalAmount, 'gst' => $gst, 'qst' => $qst, 'user' => $_SESSION['user']));
    }
});


//home
$app->get('/home', function() use ($app) {
    $promotionList = DB::query("SELECT * from  products where promotion=1 ORDER BY ProductPrice  ");
    header("Content-type: image/jpeg");
    $app->render('promotion.html.twig', array('promotionList' => $promotionList, 'user' => $_SESSION['user']));
});



$app->get('/register', function() use ($app) {
    $app->render('createaccount.html.twig', array(
        'user' => $_SESSION['user']));
});

//index page
$app->get('/', function() use ($app) {
    $promotionList = DB::query("SELECT * from  products where promotion=1 ORDER BY ProductPrice  ");
    header("Content-type: image/jpeg");
    $app->render('promotion.html.twig', array('promotionList' => $promotionList, 'user' => $_SESSION['user']));
});

$app->get('/emailused/:email', function($email) use ($app) {
    if (DB::queryOneRow("SELECT * FROM users WHERE email=%s", $email)) {
        echo "Email already in use";
    } else {
        echo "";
    }
});

$app->post('/register', function() use ($app) { //submit
    $firstname = $app->request()->post('firstName');
    $lastname = $app->request()->post('lastName');
    $email = $app->request()->post('email');
    $pass1 = $app->request()->post('pass1');
    $pass2 = $app->request()->post('pass2');
    $gender = $app->request()->post('gender');

    $valueList = array('firstName' => $firstname, 'lastName' => $lastname, 'email' => $email, 'gender' => $gender);

    $errorList = array();
    if (strlen($firstname) < 2) {
        array_push($errorList, "first name must be atleast 2 characters long.");
        $valueList['firstName'] = '';
    }
    if (strlen($lastname) < 2) {
        array_push($errorList, "last name must be atleast 2 characters long.");
        $valueList['lastName'] = '';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errorList, "Email is not valid");
        $valueList['email'] = '';
    } else {
        $row = DB::queryFirstRow('SELECT *FROM users where email=%s', $email); //meekrodb automatically escape %s     
        if ($row) {
            array_push($errorList, "Email already registered.");
            $valueList['email'] = '';
        }
    }
    if (empty($_POST["gender"])) {
        array_push($errorList, "Select gender.");
    } else {
        $gender = $_POST['gender'];
        $genderMaleSelected = ($gender == 'Male') ? "checked" : "";
        $genderFemaleSelected = ($gender == 'Female') ? "checked" : "";
        $valueList['genderMaleSelected'] = $genderMaleSelected;
        $valueList['genderFemaleSelected'] = $genderFemaleSelected;
    }
    if ($pass1 != $pass2) {
        array_push($errorList, "Password dont match");
    }
    if ($errorList) {
        $usersList = DB::query("SELECT * FROM users ORDER BY ID DESC LIMIT 5");

        $app->render('createaccount.html.twig', array('errorList' => $errorList, 'v' => $valueList, 'firstName' => $firstname, 'lastName' => $lastname, 'email' => $email, 'pass1' => $pass1, 'pass2' => $pass2, 'usersList' => null, 'gender' => $gender));
    } else {
        if ($gender == 'Male')
            $gender = 'm';
        else {
            $gender = 'f';
        }
        //TODO: Insert record into database.
        DB::insert('users', array('ID' => NULL, 'nameFirst' => $firstname, 'nameLast' => $lastname, 'email' => $email, 'password' => md5($pass1), 'gender' => $gender));     
        $app->render('register_suc.html.twig', array(
            'user' => $_SESSION['user']));
    }
});


$app->run();


