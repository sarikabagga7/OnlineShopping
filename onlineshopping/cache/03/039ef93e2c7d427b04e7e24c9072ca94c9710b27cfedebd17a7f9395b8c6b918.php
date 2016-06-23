<?php

/* base.html.twig */
class __TwigTemplate_7a190f3385d3e5c9d69a2d617a5b14e07a78ee8ecb18bc39e1ce52424270e218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/default.css\" title=\"default\">     
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

                                <div id=\"loginInfo\">
                                    ";
        // line 28
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 29
            echo "
                                        <div id=\"signin\">

                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;<a class=\"log-in\" href=\"/logout\">Logout</a><br>
                                            <p class=\"log-in\" style=\"margin-top: 1px;\"><b> Hello ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nameFirst", array()), "html", null, true);
            echo ",<b></p>
                                                        </div>

                                                    ";
        } else {
            // line 37
            echo "
                                                        <div id=\"signin\">
                                                            <a class=\"registration\" href=\"/register\"><b>Create Account<b></a> <a class=\"log-in\" href=\"/login\">Sign In</a>
                                                                        </div>
                                                                    ";
        }
        // line 41
        echo " 



                                                                    </div>
                                                                    </div>
                                                                    <div id=\"Top_menu\"> <a class=\"cart\" href=\"/home\"><span></span></a> <a class=\"orders\" href=\"#\"><span>Order Status</span></a>
                                                                        <a class=\"contact\" href=\"/contact\"><span>Contact</span></a>
                                                                        <a class=\"help\" href=\"/about\"><span>About Us      </span></a>
                                                                        <a class=\"home\" href=\"/home\"><span>Home</span></a>
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


                                                                                        <h5>&nbsp;</h5>
                                                                                          <a class=\"menu_item\" href=\"/search/LACK Side table\"><span>Search</span></a><br>
                                                                                        <input width=\"100\" style=\"width: 125px; height: 25px;\" type=\"text\" name=\"search\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["search"]) ? $context["search"] : null), "productName", array()), "html", null, true);
        echo "\" onfocus=
                                                                                               \"if (this.value == 'search')
                                                                                                       {
                                                                                                           this.value = '';
                                                                                                       }
                                                                                               \"
                                                                                               onBlur=
                                                                                               \"if (this.value == '')
                                                                                                       {
                                                                                                           this.value = 'search';
                                                                                                       }
                                                                                               \"/>
                                                                          

                                                                                      



                                                                                        <h5>&nbsp;</h5>
                                                                                        <!--</form>-->


                                                                                        <!-- End of Page Search --></span></a><br>
                                                                                    </div>
                                                                                    <div class=\"menu_header_left\"> <span class=\"menu_text\">Category</span>
                                                                                    </div>
                                                                                    <div class=\"menu_header_right\"> </div>
                                                                                </div>
                                                                                <div id=\"Menu_content\"> 
                                                                                    <a class=\"menu_item\" href=\"/category/Table\"><span>Table</span></a><br>
                                                                                    <a class=\"menu_item\" href=\"/category/Sofa\"><span>Sofa</span></a><br>
                                                                                    <a class=\"menu_item\" href=\"/category/Chair\"><span>Chair</span></a><br>
                                                                                    <a class=\"menu_item\" href=\"/category/Storage\"><span>Storage</span></a><br>
                                                                                    <a class=\"menu_item\" href=\"/category/Textil\"><span>Textiles</span></a><br>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div id=\"RightPart\">
                                                                            <div id=\"Page\">
                                                                                <form name=\"f1\">
                                                                                    <input type=\"hidden\" name=\"h1\" value=\"0\" />
                                                                                </form>

                                                                                <div id=\"Page_center\">

                                                                                ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        echo " 


                                                                            </div>
                                                                        </div></div>

                                                                    <div id=\"Page_top\">
                                                                        <p> <marquee behavior=\"scroll\" direction=\"left\" onmouseover=\"stop()\" onmouseout=\"start()\"><font color=\"#FFFF99\"><h3>25% off on all summer...Hurry!!!</h3></font><font color=\"#99d566\"><h4>Enjoy the pleasure of shopping...</h4></font></marquee><br>

                                                                        </p>


                                                                    </div>
                                                                    <div class=\"cleaner\"></div>
                                                                </div>

                                                                <div id=\"Bottom\">
                                                                    <p class=\"down\">Copyright © , Design by:Sarika & Alireza</p>

                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </body></html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 113,  182 => 5,  152 => 113,  102 => 66,  75 => 41,  68 => 37,  61 => 33,  55 => 29,  53 => 28,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="/css/default.css" title="default">     */
/*     </head>*/
/* */
/*     <body>*/
/*         <div id="WholePage">*/
/*             <div id="Inner">*/
/*                 <div id="Container" style="border:groove;border-color:#7B5B25">*/
/*                     <div id="Head">*/
/* */
/*                         <div id="Head_left">*/
/* */
/* */
/*                             <div id="Leaf_top"><img src="/images/furniture1.png" width="324" height="211" /></div>*/
/* */
/*                             <div id="Leaf_bottom">  </div>*/
/*                         </div>*/
/*                         <div id="Head_right">*/
/*                             <div id="Logo">*/
/*                                 <div id="Name"><span>Furniture</span>&nbsp;</span><span>Shop</span> </div>*/
/*                                 <div id="Informations">Fine Furniture & Décor</div>*/
/* */
/*                                 <div id="loginInfo">*/
/*                                     {% if user %}*/
/* */
/*                                         <div id="signin">*/
/* */
/*                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;<a class="log-in" href="/logout">Logout</a><br>*/
/*                                             <p class="log-in" style="margin-top: 1px;"><b> Hello {{user.nameFirst}},<b></p>*/
/*                                                         </div>*/
/* */
/*                                                     {%  else %}*/
/* */
/*                                                         <div id="signin">*/
/*                                                             <a class="registration" href="/register"><b>Create Account<b></a> <a class="log-in" href="/login">Sign In</a>*/
/*                                                                         </div>*/
/*                                                                     {% endif %} */
/* */
/* */
/* */
/*                                                                     </div>*/
/*                                                                     </div>*/
/*                                                                     <div id="Top_menu"> <a class="cart" href="/home"><span></span></a> <a class="orders" href="#"><span>Order Status</span></a>*/
/*                                                                         <a class="contact" href="/contact"><span>Contact</span></a>*/
/*                                                                         <a class="help" href="/about"><span>About Us      </span></a>*/
/*                                                                         <a class="home" href="/home"><span>Home</span></a>*/
/*                                                                     </div>*/
/*                                                                     </div>*/
/*                                                                     </div>*/
/*                                                                     <div id="CentralPart">*/
/*                                                                         <div id="LeftPart">*/
/*                                                                             <div id="Menu">*/
/*                                                                                 <div id="Menu_header">*/
/*                                                                                     <div class="menu_header_left"> <span class="menu_text"><font face="Georgia, Times New Roman, Times, serif">Search</font></span>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="menu_header_right"> </div>*/
/*                                                                                     <div id="Menu_content"> <!--<a class="menu_item" href="?page=home"><span>--><!-- Start of Page Search -->*/
/* */
/* */
/*                                                                                         <h5>&nbsp;</h5>*/
/*                                                                                           <a class="menu_item" href="/search/LACK Side table"><span>Search</span></a><br>*/
/*                                                                                         <input width="100" style="width: 125px; height: 25px;" type="text" name="search" value="{{search.productName}}" onfocus=*/
/*                                                                                                "if (this.value == 'search')*/
/*                                                                                                        {*/
/*                                                                                                            this.value = '';*/
/*                                                                                                        }*/
/*                                                                                                "*/
/*                                                                                                onBlur=*/
/*                                                                                                "if (this.value == '')*/
/*                                                                                                        {*/
/*                                                                                                            this.value = 'search';*/
/*                                                                                                        }*/
/*                                                                                                "/>*/
/*                                                                           */
/* */
/*                                                                                       */
/* */
/* */
/* */
/*                                                                                         <h5>&nbsp;</h5>*/
/*                                                                                         <!--</form>-->*/
/* */
/* */
/*                                                                                         <!-- End of Page Search --></span></a><br>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="menu_header_left"> <span class="menu_text">Category</span>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="menu_header_right"> </div>*/
/*                                                                                 </div>*/
/*                                                                                 <div id="Menu_content"> */
/*                                                                                     <a class="menu_item" href="/category/Table"><span>Table</span></a><br>*/
/*                                                                                     <a class="menu_item" href="/category/Sofa"><span>Sofa</span></a><br>*/
/*                                                                                     <a class="menu_item" href="/category/Chair"><span>Chair</span></a><br>*/
/*                                                                                     <a class="menu_item" href="/category/Storage"><span>Storage</span></a><br>*/
/*                                                                                     <a class="menu_item" href="/category/Textil"><span>Textiles</span></a><br>*/
/* */
/*                                                                                 </div>*/
/* */
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div id="RightPart">*/
/*                                                                             <div id="Page">*/
/*                                                                                 <form name="f1">*/
/*                                                                                     <input type="hidden" name="h1" value="0" />*/
/*                                                                                 </form>*/
/* */
/*                                                                                 <div id="Page_center">*/
/* */
/*                                                                                 {% block body %}{% endblock %} */
/* */
/* */
/*                                                                             </div>*/
/*                                                                         </div></div>*/
/* */
/*                                                                     <div id="Page_top">*/
/*                                                                         <p> <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()"><font color="#FFFF99"><h3>25% off on all summer...Hurry!!!</h3></font><font color="#99d566"><h4>Enjoy the pleasure of shopping...</h4></font></marquee><br>*/
/* */
/*                                                                         </p>*/
/* */
/* */
/*                                                                     </div>*/
/*                                                                     <div class="cleaner"></div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div id="Bottom">*/
/*                                                                     <p class="down">Copyright © , Design by:Sarika & Alireza</p>*/
/* */
/*                                                                 </div>*/
/*                                                                 </div>*/
/*                                                                 </div>*/
/*                                                                 </div>*/
/*                                                                 </div>*/
/*                                                                 </body></html>*/
/* */
