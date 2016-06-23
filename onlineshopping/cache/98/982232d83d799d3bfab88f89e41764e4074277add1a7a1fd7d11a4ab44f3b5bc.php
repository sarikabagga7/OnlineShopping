<?php

/* createaccount.html.twig */
class __TwigTemplate_f0aafc5f59e959111b5e4996930dd38053c2860bbe4e5e6f433557d22c017e84 extends Twig_Template
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>

    <script>
        \$(document).ready(function () {
            \$(\"input[name=email]\").keyup(function () {
                // alert(\"key pressed\");
                var email = \$(\"input[name=email]\").val();
                //\$(\"#message\").load('/ipd7-new/blog/index.php/emailused');
                //\$(\"#message\").load('/ipd7-new/blog/index.php/emailused/' + email);
                \$(\"#message\").load('/ipd7/blog/index.php/emailused/' + email);
            });
        });
    </script>

";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "

    ";
        // line 29
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 30
            echo "        <ul>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 32
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </ul>
    ";
        }
        // line 36
        echo "
    <b>Register Below</b><br><br>
    <form method=\"POST\">

        
      <label for=\"email\"> Email Address
          :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"email\" type=\"text\" name=\"email\"  value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\"> <br><br>
        
        <label for=\"firstName\"> First Name:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"firstName\" type=\"text\" name=\"firstName\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "firstName", array()), "html", null, true);
        echo "\"><br> <br> 

        <label for=\"lastName\"> Last Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"lastName\" type=\"text\" name=\"lastName\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["lastName"]) ? $context["lastName"] : null), "html", null, true);
        echo "\"><br><br> 
        
        <label for=\"gender\">Gender:</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;
           <input type=\"radio\" name=\"gender\" value=\"Male\" ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "genderMaleSelected", array()), "html", null, true);
        echo "> Male
           <input type=\"radio\" name=\"gender\"  value=\"Female\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "genderFemaleSelected", array()), "html", null, true);
        echo "> Female<br><br>
           
          
        <label for=\"pass1\"> Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"pass1\" type=\"password\" name=\"pass1\"><br><br> 

        <label for=\"pass2\"> Confirm Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id=\"pass2\" type=\"password\" name=\"pass2\"><br><br> 
        <input class=\"button\" id=\"btnsubmit\" type=\"submit\" value=\"Create Account\">
    </form>



    ";
        // line 66
        if ((isset($context["usersList"]) ? $context["usersList"] : null)) {
            // line 67
            echo "        <ul>
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usersList"]) ? $context["usersList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 69
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameFirst", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameLast", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</li>
                    ";
                // line 71
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </ul>
    ";
        }
        // line 73
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
        return array (  162 => 73,  158 => 72,  152 => 71,  143 => 69,  139 => 68,  136 => 67,  134 => 66,  118 => 53,  114 => 52,  108 => 49,  102 => 46,  96 => 43,  87 => 36,  83 => 34,  74 => 32,  70 => 31,  67 => 30,  65 => 29,  61 => 27,  58 => 26,  39 => 9,  36 => 8,  30 => 6,  11 => 4,);
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
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $("input[name=email]").keyup(function () {*/
/*                 // alert("key pressed");*/
/*                 var email = $("input[name=email]").val();*/
/*                 //$("#message").load('/ipd7-new/blog/index.php/emailused');*/
/*                 //$("#message").load('/ipd7-new/blog/index.php/emailused/' + email);*/
/*                 $("#message").load('/ipd7/blog/index.php/emailused/' + email);*/
/*             });*/
/*         });*/
/*     </script>*/
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
/*     <b>Register Below</b><br><br>*/
/*     <form method="POST">*/
/* */
/*         */
/*       <label for="email"> Email Address*/
/*           :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="email" type="text" name="email"  value="{{email}}"> <br><br>*/
/*         */
/*         <label for="firstName"> First Name:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="firstName" type="text" name="firstName" value="{{v.firstName}}"><br> <br> */
/* */
/*         <label for="lastName"> Last Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*         <input id="lastName" type="text" name="lastName" value="{{lastName}}"><br><br> */
/*         */
/*         <label for="gender">Gender:</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;*/
/*            <input type="radio" name="gender" value="Male" {{value.genderMaleSelected}}> Male*/
/*            <input type="radio" name="gender"  value="Female"{{value.genderFemaleSelected}}> Female<br><br>*/
/*            */
/*           */
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
/*                 <li>{{user.nameFirst}}:{{user.nameLast}}:{{user.email}}</li>*/
/*                     {# shout.name shout.message #}*/
/*                 {% endfor %}*/
/*         </ul>*/
/*     {% endif %}  */
/* */
/* */
/* {% endblock %}*/
