<?php

/* confirmorder.html.twig */
class __TwigTemplate_04d634adc5e6062ac50b053116ad739e757a83a071b21e243ef45bf2ad55dac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "confirmorder.html.twig", 3);
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Successfully logged in ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nameFirst", array()), "html", null, true);
        echo ", Your order is confirmed and soon you will receieve confirmation e-mail in your email id ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo ".</p>

";
    }

    public function getTemplateName()
    {
        return "confirmorder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %} Successfully logged in {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <p>{{user.nameFirst}}, Your order is confirmed and soon you will receieve confirmation e-mail in your email id {{user.email}}.</p>*/
/* */
/* {% endblock %}*/
/* */
