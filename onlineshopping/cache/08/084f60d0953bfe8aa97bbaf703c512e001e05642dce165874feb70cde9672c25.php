<?php

/* login.html.twig */
class __TwigTemplate_3c1813bea50cca25b79049abf23ce77b2ab41f63f70b1fe705dc95f0496d5970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Sign In";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 6
            echo "        <ul>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    ";
        }
        // line 12
        echo "
    <b style=\"font-size: 17px\">Sign in to your Furniture shop.com account:<b><br><br>

            <form method=\"post\">

                Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type=\"text\" name=\"email\" ><br><br>
                Password: &nbsp;&nbsp; <input type=\"password\" name=\"password\"><br><br>
                <input class=\"button\" type=\"submit\" value=\"Login\">
                <br>
                <br>
                <br>
                <br>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 10,  50 => 8,  46 => 7,  43 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block title %}Sign In{% endblock %}*/
/* {% block body %}*/
/* */
/*     {% if errorList %}*/
/*         <ul>*/
/*             {% for error in errorList %}*/
/*                 <li>{{error}}</li>*/
/*                 {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* */
/*     <b style="font-size: 17px">Sign in to your Furniture shop.com account:<b><br><br>*/
/* */
/*             <form method="post">*/
/* */
/*                 Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" ><br><br>*/
/*                 Password: &nbsp;&nbsp; <input type="password" name="password"><br><br>*/
/*                 <input class="button" type="submit" value="Login">*/
/*                 <br>*/
/*                 <br>*/
/*                 <br>*/
/*                 <br>*/
/*             </form>*/
/*         {% endblock %}*/
