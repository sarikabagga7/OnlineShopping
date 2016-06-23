<?php

/* logout.html.twig */
class __TwigTemplate_3d966149687a517addf25f0731f5412e72a870c44b6bf7ac4a09f85d2dc14c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "logout.html.twig", 3);
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
        echo " Successfully logged out. ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<p>User logout successfully.</p>

";
    }

    public function getTemplateName()
    {
        return "logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %} Successfully logged out. {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <p>User logout successfully.</p>*/
/* */
/* {% endblock %}*/
/* */
