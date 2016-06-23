<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../vendor/autoload.php';// api is in sub directory so we have to put ..

session_start();

DB::$dbName = 'cp4686_eshopping';
//DB::$dbName = 'eshopping';
DB::$user = 'cp4686_eshopping';
//DB::$user = 'eshopping';
DB::$password = 'j4G2UP6rXPaw3azx'; //desktop and remote
DB::$host='ipd7.com';
DB::$error_handler='sql_error_handler';
//donot enable in production environment
DB::$success_handler='sql_success_handler';

//TODO: MOnolog is library for creating logs, ccan be sent by email and text message, write log to files
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('default');
//$log->pushHandler(new StreamHandler('../logs/everything.log', Logger::WARNING)); //if its debugging information it will not write https://github.com/Seldaek/monolog
$log->pushHandler(new StreamHandler('../logs/everything.log', Logger::DEBUG)); //debug is lower severity it will write everything

$log->pushHandler(new StreamHandler('../logs/errors.log', Logger::ERROR)); //error is only write errors

//TODO: sql error handler : http://meekro.com/docs.php#anchor_error_handler
//http://localhost:8010/todo.html
function sql_error_handler($params) {
    global $log;
    $log-> error("SQL Error: ".$params['error']);
    $log-> error("SQL Error: ".$params['query']);   
    header("HTTP/1.1 500 Internal Server Error");
    echo json_encode("500:intrenal server error");
    
    die; // don't want to keep going if a query broke
}


function sql_success_handler($param)
{
    global $log;
       $log->debug("SQL query: " . $param['query']);
}

$app = new Slim\Slim();
\Slim\Route::setDefaultConditions(array(
    'ID' => '\d+' // one or more digits, same as '[0-9]+'
));
$app->response->header('Content-type', 'application/json');  //by default its a html,so we have to write the header as json 


//restful

$app->put('/cartitems/:ID',function($ID)use ($app)
{
   $json=$app->request()->getBody();
   $data=  json_decode($json,true);
   $quantity=$data['quantity'];
   //only expect
   //if((count($data)!==1))
           if($quantity<0)
           {
               $app->response()->status(400);
               echo json_encode("400: quantity invalid");
               return;
           }
           DB::update('cartitems',array('quantity'=>$quantity),
                   "ID=%i AND sessionID=%s",$ID,  session_id());
                   echo json_encode(DB::affectedRows()==1);
});




$app->run();