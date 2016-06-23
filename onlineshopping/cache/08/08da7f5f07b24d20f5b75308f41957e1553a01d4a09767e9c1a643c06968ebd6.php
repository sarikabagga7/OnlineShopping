<?php

/* createaccount.html.twig */
class __TwigTemplate_aa94e14b039ab2e1f3080104b095179319cf633e7a7daa1d951cb360b35223a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "createaccount.html.twig", 4);
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
        echo "Register ";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "
    
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "      <script src=\"/jquery.min.js\"></script>

    <script>
        \$(document).ready(function () {
            \$(\"input[name=email]\").keyup(function () {  
               // alert(\"test\");
                var email = \$(\"input[name=email]\").val();          
                \$(\"#message\").load('/index.php/emailused/' + email);
            });
        });
    </script>



    ";
        // line 28
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 29
            echo "        <ul>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 31
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </ul>
    ";
        }
        // line 35
        echo "
    <b>Register Below:</b><br><br>
    <form method=\"POST\">


        <label for=\"email\"> Email Address
            :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"email\" type=\"text\" name=\"email\"  value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\"> <span id=\"message\"></span> <br><br>

        <label for=\"firstName\"> First Name:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"firstName\" type=\"text\" name=\"firstName\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "firstName", array()), "html", null, true);
        echo "\"><br> <br> 

        <label for=\"lastName\"> Last Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"lastName\" type=\"text\" name=\"lastName\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["lastName"]) ? $context["lastName"] : null), "html", null, true);
        echo "\"><br><br> 

        <label for=\"gender\">Gender:</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;
        <input type=\"radio\" name=\"gender\" value=\"Male\" ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "genderMaleSelected", array()), "html", null, true);
        echo "> Male
        <input type=\"radio\" name=\"gender\"  value=\"Female\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "genderFemaleSelected", array()), "html", null, true);
        echo "> Female<br><br>


        <label for=\"pass1\"> Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"pass1\" type=\"password\" name=\"pass1\"><br><br> 

        <label for=\"pass2\"> Confirm Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"pass2\" type=\"password\" name=\"pass2\"><br><br> 
        <input class=\"button\" id=\"btnsubmit\" type=\"submit\" value=\"Create Account\">
    </form>



    ";
        // line 65
        if ((isset($context["usersList"]) ? $context["usersList"] : null)) {
            // line 66
            echo "        <ul>
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersList"]) ? $context["usersList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 68
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameFirst", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameLast", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</li>               
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </ul>
    ";
        }
        // line 71
        echo "  


";
    }

    public function getTemplateName()
    {
        return "createaccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 71,  155 => 70,  142 => 68,  138 => 67,  135 => 66,  133 => 65,  117 => 52,  113 => 51,  107 => 48,  101 => 45,  95 => 42,  86 => 35,  82 => 33,  73 => 31,  69 => 30,  66 => 29,  64 => 28,  48 => 14,  45 => 13,  39 => 9,  36 => 8,  30 => 6,  11 => 4,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Register {% endblock %}*/
/* */
/* {% block head %}*/
/* */
/*     */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*       <script src="/jquery.min.js"></script>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $("input[name=email]").keyup(function () {  */
/*                // alert("test");*/
/*                 var email = $("input[name=email]").val();          */
/*                 $("#message").load('/index.php/emailused/' + email);*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
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
/*     <b>Register Below:</b><br><br>*/
/*     <form method="POST">*/
/* */
/* */
/*         <label for="email"> Email Address*/
/*             :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="email" type="text" name="email"  value="{{email}}"> <span id="message"></span> <br><br>*/
/* */
/*         <label for="firstName"> First Name:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="firstName" type="text" name="firstName" value="{{v.firstName}}"><br> <br> */
/* */
/*         <label for="lastName"> Last Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="lastName" type="text" name="lastName" value="{{lastName}}"><br><br> */
/* */
/*         <label for="gender">Gender:</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;*/
/*         <input type="radio" name="gender" value="Male" {{value.genderMaleSelected}}> Male*/
/*         <input type="radio" name="gender"  value="Female"{{value.genderFemaleSelected}}> Female<br><br>*/
/* */
/* */
/*         <label for="pass1"> Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="pass1" type="password" name="pass1"><br><br> */
/* */
/*         <label for="pass2"> Confirm Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="pass2" type="password" name="pass2"><br><br> */
/*         <input class="button" id="btnsubmit" type="submit" value="Create Account">*/
/*     </form>*/
/* */
/* */
/* */
/*     {% if usersList %}*/
/*         <ul>*/
/*             {% for user in usersList %}*/
/*                 <li>{{user.nameFirst}}:{{user.nameLast}}:{{user.email}}</li>               */
/*                 {% endfor %}*/
/*         </ul>*/
/*     {% endif %}  */
/* */
/* */
/* {% endblock %}*/
