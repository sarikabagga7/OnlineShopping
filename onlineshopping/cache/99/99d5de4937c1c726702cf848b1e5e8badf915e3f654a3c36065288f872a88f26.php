<?php

/* home.html.twig */
class __TwigTemplate_f4e94b16c8ee6ce04554f0e4d1a9e21f1fc0f207ac21763b6f5be505009487ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<head><title>Company name - title</title>

<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/default.css\" title=\"default\">
<script>
function abc()
{
var arr=new Array(\"usepics/neck.jpg\",\"usepics/ban7.jpg\",\"usepics/ban5.jpg\",\"usepics/ban1.jpg\",\"usepics/akkriti-banner.jpg\");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval(\"abc()\",3000);
</script>
</head>


<body>
<div id=\"WholePage\">
<div id=\"Inner\">
<div id=\"Container\" style=\"border:groove;border-color:#7B5B25\">
<div id=\"Head\">
    
<div id=\"Head_left\">
    
    
<div id=\"Leaf_top\"><img src=\"/images/furniture1.png\" width=\"324\" height=\"211\" /></div>

<div id=\"Leaf_bottom\">  </div>
</div>
<div id=\"Head_right\">
<div id=\"Logo\">
<div id=\"Name\"><span>Furniture</span>&nbsp;</span><span>Shop</span> </div>
<div id=\"Informations\">Fine Furniture & Décor</div>
<div id=\"signin\">
<a class=\"registration\" href=\"/register\">Create Account</a> <a class=\"log-in\" href=\"/index.php/login\">Sign In</a>
</div>
</div>
<div id=\"Top_menu\"> <a class=\"kart\" href=\"?page=home\"><span></span></a> <a class=\"orders\" href=\"?page=home\"><span>Orders</span></a>
<a class=\"contact\" href=\"?page=home\"><span>Contact</span></a>
<a class=\"help\" href=\"help.html\"><span>About Us      </span></a>
<a class=\"home\" href=\"?page=home\"><span>Home</span></a>
</div>
</div>
</div>
<div id=\"CentralPart\">
<div id=\"LeftPart\">
<div id=\"Menu\">
<div id=\"Menu_header\">
<div class=\"menu_header_left\"> <span class=\"menu_text\"><font face=\"Georgia, Times New Roman, Times, serif\">Search</font></span>
</div>
<div class=\"menu_header_right\"> </div>
<div id=\"Menu_content\"> <!--<a class=\"menu_item\" href=\"?page=home\"><span>--><!-- Start of Page Search -->

\t\t
\t\t    <h5>&nbsp;</h5>
\t\t    <input width=\"70\" type=\"text\" name=\"t1\" value=\"search\" onfocus=
\"if(this.value=='search')
{this.value='';}
\"
onBlur=
\"if(this.value=='')
{this.value='search';}
\"/>
            <input name=\"sub\" type=\"submit\" class=\"button\" id=\"sub\" value=\"Search\"  />

\t\t

\t\t  <h5>&nbsp;</h5>
\t\t  <!--</form>-->
\t\t

\t\t<!-- End of Page Search --></span></a><br>
</div>
<div class=\"menu_header_left\"> <span class=\"menu_text\">Category</span>
</div>
<div class=\"menu_header_right\"> </div>
</div>
<div id=\"Menu_content\"> <a class=\"menu_item\" href=\"mcasual.html\"><span>Living Room</span></a><br>
<a class=\"menu_item\" href=\"mjeans.html\"><span>Dining Room</span></a><br>
<a class=\"menu_item\" href=\"mtshirts.html\"><span>Bed Room
</span></a><br>
<a class=\"menu_item\" href=\"mshoe.html\"><span>Kids & Teens</span></a><br>
<a class=\"menu_item\" href=\"mshorts.html\"><span>Home Office</span></a><br>

</span></a><br>

</div>



</div>
</div>
<!--<div id=\"Poll\">
<div id=\"Poll_header\">
<div class=\"menu_header_left\"> <span class=\"menu_text\">WOMEN</span>
</div>
<div class=\"menu_header_right\"> </div>
</div>
<div id=\"Poll_content\"> <span class=\"poll_question\">Donec
at justo ac ipsum laoreet dapibus?</span><br>
<a class=\"poll_unswer\" href=\"?page=home\"><span>Lorem
ipsum</span></a><br>
<a class=\"poll_unswer\" href=\"?page=home\"><span>Nulla
facilisi</span></a><br>
<a class=\"poll_unswer\" href=\"?page=home\"><span>Suspendisse
ipsum</span></a><br>
</div>
</div>
<div id=\"Banner\"> <img src=\"/img/banner.jpg\" alt=\"illustration image\"> </div>
</div>-->
<div id=\"RightPart\">
  <div id=\"Page\"><img src=\"usepics/akkriti-banner.jpg\" alt=\"\" width=\"669\" height=\"210\" name=\"img\"/>
  <form name=\"f1\">
  <input type=\"hidden\" name=\"h1\" value=\"0\" />
  </form>
    <div id=\"Page_top\">
  <p> <marquee behavior=\"scroll\" direction=\"left\" onmouseover=\"stop()\" onmouseout=\"start()\"><font color=\"#FFFF99\"><h3>25%off on all summer...Hurry!!!</h3></font><font color=\"#99d566\"><h4>Enjoy the pleasure of shopping...</h4></font></marquee><br>

  </p>

 
  </div>
  <div id=\"Page_center\">
        ";
        // line 130
        $this->displayBlock('body', $context, $blocks);
        echo " 
  <!--<table>
  <tbody>
  <tr>
  <td width=\"29\" class=\"page_center_button\"><a class=\"page_center_buy\" href=\"?page=home\" title=\"buy\"><span>buy</span></a><a class=\"page_center_info\" href=\"?page=home\" title=\"more info\"><span>more-info</span></a></td>
  <td width=\"178\" class=\"page_center_content\">
  <div class=\"page_center_text\"> <span class=\"blue2\">Lorem ipsum dolor</span><br>
  <span class=\"gray\">Donec at: justo ac</span><br>
  <span class=\"gray\">Cras ut: ligula nec</span><br>
  <br>
  <span class=\"green\">Price: \$156</span><br>
  </div></td>
  <td width=\"144\" class=\"page_center_img\"> <img src=\"images/main1.jpg\" alt=\"illustration image\" width=\"126\" height=\"125\"  > </td>
  <td width=\"29\" class=\"page_center_button\"><a class=\"page_center_buy\" href=\"?page=home\" title=\"buy\"><span>buy</span></a><a class=\"page_center_info\" href=\"?page=home\" title=\"more info\"><span>more-info</span></a></td>
  <td width=\"178\" class=\"page_center_content\">
  <div class=\"page_center_text\"> <span class=\"blue2\">Lorem ipsum dolor</span><br>
  <span class=\"gray\">Donec at: justo ac</span><br>
  <span class=\"gray\">Cras ut: ligula nec</span><br>
  <br>
  <span class=\"green\">Price: \$156</span><br>
  </div></td>
  <td width=\"115\" class=\"page_center_img2\">&nbsp;</td>
  </tr>
  <tr>
  <td class=\"page_center_button\"><a class=\"page_center_buy\" href=\"?page=home\" title=\"buy\"><span>buy</span></a><a class=\"page_center_info\" href=\"?page=home\" title=\"more info\"><span>more-info</span></a></td>
  <td class=\"page_center_content\">
  <div class=\"page_center_text\"> <span class=\"blue2\">Free Gift</span><br>
  <span class=\"gray\">AND Casual Top</span><br>
  <span class=\"gray\">Item Number: 6112202_9100</span><br>
  <br>
  <span class=\"green\">
    MRP Rs.1299.00</span> <br/>
  <br>
  <span class=\"green\">Price: \$156</span><br>
  </div></td>
  <td class=\"page_center_img\"><span class=\"page_center_img2\"><img src=\"images/main2.jpg\" alt=\"illustration image\" width=\"126\" height=\"125\" /></span></td>
  <td class=\"page_center_button\"><a class=\"page_center_buy\" href=\"?page=home\" title=\"buy\"><span>buy</span></a><a class=\"page_center_info\" href=\"?page=home\" title=\"more info\"><span>more-info</span></a></td>
  <td class=\"page_center_content\">
  <div class=\"page_center_text\"> <span class=\"blue2\">Lorem ipsum dolor</span><br>
  <span class=\"gray\">Donec at: justo ac</span><br>
  <span class=\"gray\">Cras ut: ligula nec</span><br>
  <br>
  <span class=\"green\">Price: \$156</span><br>
  </div></td>
  <td class=\"page_center_img2\">&nbsp;</td>
  </tr>
  </tbody>
  </table>-->
  </div>
</div></div>
<div class=\"cleaner\"></div>
</div>
<div id=\"Bottom\">
<p class=\"down\">Copyright © , Design by:Sarika & Alireza</p>
<!--<p class=\"down\"><a href=\"http://www.sunlight.cz\">Supported by </a><a href=\"http://www.hosting24.com/\" target=\"_blank\">Hosting24.com</a>
</p>
<div class=\"down2\">
<p> <a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"http://www.w3.org/Icons/valid-xhtml11\" alt=\"Valid XHTML 1.1\" height=\"31\" width=\"88\"></a>
</p>-->
</div>
</div>
</div>
</div>
</div>
</body></html>";
    }

    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 130,  20 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <head><title>Company name - title</title>*/
/* */
/* <link rel="stylesheet" type="text/css" href="/css/default.css" title="default">*/
/* <script>*/
/* function abc()*/
/* {*/
/* var arr=new Array("usepics/neck.jpg","usepics/ban7.jpg","usepics/ban5.jpg","usepics/ban1.jpg","usepics/akkriti-banner.jpg");*/
/* var ind=eval(document.f1.h1.value);*/
/* document.img.src=arr[ind];*/
/* document.f1.h1.value=ind+1;*/
/* if(document.f1.h1.value==5)*/
/* {*/
/* document.f1.h1.value=0;*/
/* }*/
/* }*/
/* setInterval("abc()",3000);*/
/* </script>*/
/* </head>*/
/* */
/* */
/* <body>*/
/* <div id="WholePage">*/
/* <div id="Inner">*/
/* <div id="Container" style="border:groove;border-color:#7B5B25">*/
/* <div id="Head">*/
/*     */
/* <div id="Head_left">*/
/*     */
/*     */
/* <div id="Leaf_top"><img src="/images/furniture1.png" width="324" height="211" /></div>*/
/* */
/* <div id="Leaf_bottom">  </div>*/
/* </div>*/
/* <div id="Head_right">*/
/* <div id="Logo">*/
/* <div id="Name"><span>Furniture</span>&nbsp;</span><span>Shop</span> </div>*/
/* <div id="Informations">Fine Furniture & Décor</div>*/
/* <div id="signin">*/
/* <a class="registration" href="/register">Create Account</a> <a class="log-in" href="/index.php/login">Sign In</a>*/
/* </div>*/
/* </div>*/
/* <div id="Top_menu"> <a class="kart" href="?page=home"><span></span></a> <a class="orders" href="?page=home"><span>Orders</span></a>*/
/* <a class="contact" href="?page=home"><span>Contact</span></a>*/
/* <a class="help" href="help.html"><span>About Us      </span></a>*/
/* <a class="home" href="?page=home"><span>Home</span></a>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <div id="CentralPart">*/
/* <div id="LeftPart">*/
/* <div id="Menu">*/
/* <div id="Menu_header">*/
/* <div class="menu_header_left"> <span class="menu_text"><font face="Georgia, Times New Roman, Times, serif">Search</font></span>*/
/* </div>*/
/* <div class="menu_header_right"> </div>*/
/* <div id="Menu_content"> <!--<a class="menu_item" href="?page=home"><span>--><!-- Start of Page Search -->*/
/* */
/* 		*/
/* 		    <h5>&nbsp;</h5>*/
/* 		    <input width="70" type="text" name="t1" value="search" onfocus=*/
/* "if(this.value=='search')*/
/* {this.value='';}*/
/* "*/
/* onBlur=*/
/* "if(this.value=='')*/
/* {this.value='search';}*/
/* "/>*/
/*             <input name="sub" type="submit" class="button" id="sub" value="Search"  />*/
/* */
/* 		*/
/* */
/* 		  <h5>&nbsp;</h5>*/
/* 		  <!--</form>-->*/
/* 		*/
/* */
/* 		<!-- End of Page Search --></span></a><br>*/
/* </div>*/
/* <div class="menu_header_left"> <span class="menu_text">Category</span>*/
/* </div>*/
/* <div class="menu_header_right"> </div>*/
/* </div>*/
/* <div id="Menu_content"> <a class="menu_item" href="mcasual.html"><span>Living Room</span></a><br>*/
/* <a class="menu_item" href="mjeans.html"><span>Dining Room</span></a><br>*/
/* <a class="menu_item" href="mtshirts.html"><span>Bed Room*/
/* </span></a><br>*/
/* <a class="menu_item" href="mshoe.html"><span>Kids & Teens</span></a><br>*/
/* <a class="menu_item" href="mshorts.html"><span>Home Office</span></a><br>*/
/* */
/* </span></a><br>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* </div>*/
/* </div>*/
/* <!--<div id="Poll">*/
/* <div id="Poll_header">*/
/* <div class="menu_header_left"> <span class="menu_text">WOMEN</span>*/
/* </div>*/
/* <div class="menu_header_right"> </div>*/
/* </div>*/
/* <div id="Poll_content"> <span class="poll_question">Donec*/
/* at justo ac ipsum laoreet dapibus?</span><br>*/
/* <a class="poll_unswer" href="?page=home"><span>Lorem*/
/* ipsum</span></a><br>*/
/* <a class="poll_unswer" href="?page=home"><span>Nulla*/
/* facilisi</span></a><br>*/
/* <a class="poll_unswer" href="?page=home"><span>Suspendisse*/
/* ipsum</span></a><br>*/
/* </div>*/
/* </div>*/
/* <div id="Banner"> <img src="/img/banner.jpg" alt="illustration image"> </div>*/
/* </div>-->*/
/* <div id="RightPart">*/
/*   <div id="Page"><img src="usepics/akkriti-banner.jpg" alt="" width="669" height="210" name="img"/>*/
/*   <form name="f1">*/
/*   <input type="hidden" name="h1" value="0" />*/
/*   </form>*/
/*     <div id="Page_top">*/
/*   <p> <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"><font color="#FFFF99"><h3>25%off on all summer...Hurry!!!</h3></font><font color="#99d566"><h4>Enjoy the pleasure of shopping...</h4></font></marquee><br>*/
/* */
/*   </p>*/
/* */
/*  */
/*   </div>*/
/*   <div id="Page_center">*/
/*         {% block body %}{% endblock %} */
/*   <!--<table>*/
/*   <tbody>*/
/*   <tr>*/
/*   <td width="29" class="page_center_button"><a class="page_center_buy" href="?page=home" title="buy"><span>buy</span></a><a class="page_center_info" href="?page=home" title="more info"><span>more-info</span></a></td>*/
/*   <td width="178" class="page_center_content">*/
/*   <div class="page_center_text"> <span class="blue2">Lorem ipsum dolor</span><br>*/
/*   <span class="gray">Donec at: justo ac</span><br>*/
/*   <span class="gray">Cras ut: ligula nec</span><br>*/
/*   <br>*/
/*   <span class="green">Price: $156</span><br>*/
/*   </div></td>*/
/*   <td width="144" class="page_center_img"> <img src="images/main1.jpg" alt="illustration image" width="126" height="125"  > </td>*/
/*   <td width="29" class="page_center_button"><a class="page_center_buy" href="?page=home" title="buy"><span>buy</span></a><a class="page_center_info" href="?page=home" title="more info"><span>more-info</span></a></td>*/
/*   <td width="178" class="page_center_content">*/
/*   <div class="page_center_text"> <span class="blue2">Lorem ipsum dolor</span><br>*/
/*   <span class="gray">Donec at: justo ac</span><br>*/
/*   <span class="gray">Cras ut: ligula nec</span><br>*/
/*   <br>*/
/*   <span class="green">Price: $156</span><br>*/
/*   </div></td>*/
/*   <td width="115" class="page_center_img2">&nbsp;</td>*/
/*   </tr>*/
/*   <tr>*/
/*   <td class="page_center_button"><a class="page_center_buy" href="?page=home" title="buy"><span>buy</span></a><a class="page_center_info" href="?page=home" title="more info"><span>more-info</span></a></td>*/
/*   <td class="page_center_content">*/
/*   <div class="page_center_text"> <span class="blue2">Free Gift</span><br>*/
/*   <span class="gray">AND Casual Top</span><br>*/
/*   <span class="gray">Item Number: 6112202_9100</span><br>*/
/*   <br>*/
/*   <span class="green">*/
/*     MRP Rs.1299.00</span> <br/>*/
/*   <br>*/
/*   <span class="green">Price: $156</span><br>*/
/*   </div></td>*/
/*   <td class="page_center_img"><span class="page_center_img2"><img src="images/main2.jpg" alt="illustration image" width="126" height="125" /></span></td>*/
/*   <td class="page_center_button"><a class="page_center_buy" href="?page=home" title="buy"><span>buy</span></a><a class="page_center_info" href="?page=home" title="more info"><span>more-info</span></a></td>*/
/*   <td class="page_center_content">*/
/*   <div class="page_center_text"> <span class="blue2">Lorem ipsum dolor</span><br>*/
/*   <span class="gray">Donec at: justo ac</span><br>*/
/*   <span class="gray">Cras ut: ligula nec</span><br>*/
/*   <br>*/
/*   <span class="green">Price: $156</span><br>*/
/*   </div></td>*/
/*   <td class="page_center_img2">&nbsp;</td>*/
/*   </tr>*/
/*   </tbody>*/
/*   </table>-->*/
/*   </div>*/
/* </div></div>*/
/* <div class="cleaner"></div>*/
/* </div>*/
/* <div id="Bottom">*/
/* <p class="down">Copyright © , Design by:Sarika & Alireza</p>*/
/* <!--<p class="down"><a href="http://www.sunlight.cz">Supported by </a><a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a>*/
/* </p>*/
/* <div class="down2">*/
/* <p> <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>*/
/* </p>-->*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </body></html>*/
