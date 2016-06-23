<?php

/* contact.html.twig */
class __TwigTemplate_d4ffb3fad33c67b0a2d9d93aed2c6c1baab95f250b0766b9bf879e06f60871cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 3);
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
        echo " About Us ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<p><b>Email us at:  
</p><b><br>
<p>
customercareca@furniture.com 
</p>
<p><br>
<b>Call us at:</b>
</p>
<br>
<p>
    1-416-243-4754 
    </p>
<br>
<br>
<p >
    Your call or email will be answered within 1 business day.
    </p>

";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
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
/* {% block title %} About Us {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <p><b>Email us at:  */
/* </p><b><br>*/
/* <p>*/
/* customercareca@furniture.com */
/* </p>*/
/* <p><br>*/
/* <b>Call us at:</b>*/
/* </p>*/
/* <br>*/
/* <p>*/
/*     1-416-243-4754 */
/*     </p>*/
/* <br>*/
/* <br>*/
/* <p >*/
/*     Your call or email will be answered within 1 business day.*/
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
