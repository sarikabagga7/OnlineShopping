<?php

/* addshipping.html.twig */
class __TwigTemplate_11279a5f9b97287287fd2aee82489391f240bd8ac428fadc65e0c4dffef13821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "addshipping.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Shipping Address ";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "

    ";
        // line 15
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 16
            echo "        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
        // line 22
        echo "
    <b>Shipping Address:</b><br><br>
    <form method=\"POST\" action=\"/continueDelivery\">
            <label for=\"address\">Address: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
           <input id=\"address \" type=\"text\" name=\"address\" value=";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "address", array()), "html", null, true);
        echo "><br>  <br>               
           
             <label for=\"city\">City: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
           <input id=\"City\" type=\"text\" name=\"city\" value=";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "city", array()), "html", null, true);
        echo "><br>  <br> 
                                                
            <label for=\"province\">Province:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
            <select id=\"province\" name=\"province\">
            <option value=\"Alberta\" ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "highschoolChecked", array()), "html", null, true);
        echo " >Alberta</option>
            <option value=\"Manitoba\" ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "collegeChecked", array()), "html", null, true);
        echo ">Manitoba</option>  
            <option value=\"Ontario\" ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "universityChecked", array()), "html", null, true);
        echo " >Ontario</option>                     
            <option value=\"Quebec\" ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "universityChecked", array()), "html", null, true);
        echo " >Quebec</option>                     
            </select><br><br> 
            
             <label for=\"postalCode\"> Postal Code:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          
           <input id=\"postalCode\" type=\"text\" name=\"postalCode\" value=";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "postalCode", array()), "html", null, true);
        echo "><br><br> 
            
            <label for=\"phoneNumber\"> Phone Number:</label> &nbsp;&nbsp;          
           <input id=\"phoneNumber\" type=\"text\" name=\"phoneNumber\" value=";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "phoneNumber", array()), "html", null, true);
        echo "><br><br> 
           
        <input class=\"button\" id=\"btnsubmit\" type=\"submit\" value=\"Continue\">
    </form>



    ";
        // line 50
        if ((isset($context["usersList"]) ? $context["usersList"] : null)) {
            // line 51
            echo "        <ul>
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersList"]) ? $context["usersList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 53
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameFirst", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameLast", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</li>
                    ";
                // line 55
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </ul>
    ";
        }
        // line 57
        echo "  


";
    }

    public function getTemplateName()
    {
        return "addshipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 57,  151 => 56,  145 => 55,  136 => 53,  132 => 52,  129 => 51,  127 => 50,  117 => 43,  111 => 40,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  85 => 29,  79 => 26,  73 => 22,  69 => 20,  60 => 18,  56 => 17,  53 => 16,  51 => 15,  47 => 13,  44 => 12,  39 => 9,  36 => 8,  30 => 6,  11 => 4,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Shipping Address {% endblock %}*/
/* */
/* {% block head %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     {% if errorList %}*/
/*         <ul>*/
/*             {% for error in errorList %}*/
/*                 <li>{{error}}</li>*/
/*                 {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* */
/*     <b>Shipping Address:</b><br><br>*/
/*     <form method="POST" action="/continueDelivery">*/
/*             <label for="address">Address: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         */
/*            <input id="address " type="text" name="address" value={{value.address}}><br>  <br>               */
/*            */
/*              <label for="city">City: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         */
/*            <input id="City" type="text" name="city" value={{value.city}}><br>  <br> */
/*                                                 */
/*             <label for="province">Province:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         */
/*             <select id="province" name="province">*/
/*             <option value="Alberta" {{value.highschoolChecked}} >Alberta</option>*/
/*             <option value="Manitoba" {{value.collegeChecked}}>Manitoba</option>  */
/*             <option value="Ontario" {{value.universityChecked}} >Ontario</option>                     */
/*             <option value="Quebec" {{value.universityChecked}} >Quebec</option>                     */
/*             </select><br><br> */
/*             */
/*              <label for="postalCode"> Postal Code:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          */
/*            <input id="postalCode" type="text" name="postalCode" value={{value.postalCode}}><br><br> */
/*             */
/*             <label for="phoneNumber"> Phone Number:</label> &nbsp;&nbsp;          */
/*            <input id="phoneNumber" type="text" name="phoneNumber" value={{value.phoneNumber}}><br><br> */
/*            */
/*         <input class="button" id="btnsubmit" type="submit" value="Continue">*/
/*     </form>*/
/* */
/* */
/* */
/*     {% if usersList %}*/
/*         <ul>*/
/*             {% for user in usersList %}*/
/*                 <li>{{user.nameFirst}}:{{user.nameLast}}:{{user.email}}</li>*/
/*                     {# shout.name shout.message #}*/
/*                 {% endfor %}*/
/*         </ul>*/
/*     {% endif %}  */
/* */
/* */
/* {% endblock %}*/
