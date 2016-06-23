<?php

/* checkuser.html.twig */
class __TwigTemplate_c877acfaa2d3c6beee5311af29f792cfe4b254bd62a006172051e3e9a3299f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "checkuser.html.twig", 3);
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
<p>Please login to proceed further.</p>

";
    }

    public function getTemplateName()
    {
        return "checkuser.html.twig";
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
/* {% block title %} Successfully logged in {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <p>Please login to proceed further.</p>*/
/* */
/* {% endblock %}*/
/* */
