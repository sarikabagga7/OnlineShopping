<?php

/* master.html.twig */
class __TwigTemplate_531123e6568a70d238ce1d9d48b42fe8a92ca2dc1f23eb78f2257cb0f1635bf8 extends Twig_Template
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
        // line 2
        echo "

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/reset.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/styles.css\">

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    </head>
    <body>

        <div id=\"pageContent\">

            <div id=\"loginInfo\">
                ";
        // line 19
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 20
            echo "                    <p>
                        You are logged in as ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nameFirst", array()), "html", null, true);
            echo ".
                        You may <a href=\"/logout\">Logout</a>
                        or <a href=\"/article/add\">post new article</a>
                    </p>
                ";
        } else {
            // line 26
            echo "
                    <p>
                        Not logged in as 
                        <a href=\"/register\">Register</a>
                        or <a href=\"/login\">Login Now</a>                        
                    </p>
                ";
        }
        // line 33
        echo "            </div>


            <div id=\"body\">
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>

</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  81 => 8,  73 => 38,  71 => 37,  65 => 33,  56 => 26,  48 => 21,  45 => 20,  43 => 19,  29 => 8,  21 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="/reset.css">*/
/*         <link rel="stylesheet" type="text/css" href="/styles.css">*/
/* */
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*     </head>*/
/*     <body>*/
/* */
/*         <div id="pageContent">*/
/* */
/*             <div id="loginInfo">*/
/*                 {% if user %}*/
/*                     <p>*/
/*                         You are logged in as {{user.nameFirst}}.*/
/*                         You may <a href="/logout">Logout</a>*/
/*                         or <a href="/article/add">post new article</a>*/
/*                     </p>*/
/*                 {% else %}*/
/* */
/*                     <p>*/
/*                         Not logged in as */
/*                         <a href="/register">Register</a>*/
/*                         or <a href="/login">Login Now</a>                        */
/*                     </p>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/* */
/*             <div id="body">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
