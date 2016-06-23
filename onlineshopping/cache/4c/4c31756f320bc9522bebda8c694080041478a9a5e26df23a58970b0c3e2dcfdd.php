<?php

/* about.html.twig */
class __TwigTemplate_d82e3ec068a904939d4bc99e13a904d433e15863cca2da7cf883be61d49d575a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 3);
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
<p>A better way to shop online for furniture and so much more! 
Furniture.com Canada is more than just an online furniture store. 
</p><br>
<p>
We hand pick and curate the best in quality and style for you and your home. Why spend days driving from store to store trying to find that perfect look or unique piece. 
</p>
<p><br>
Find everything you’re looking for and more from the comfort of your own home.
</p>
<br>
<p >
    OUR PROMISE <br>
- All Canadian Pricing + No custom fees.<br>
- Professional and reliable delivery service.<br>
- A vast selection of products. <br>
- Personalized customer service.<br>
- Satisfaction guarantee.<br>
    </p>

";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
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
/* <p>A better way to shop online for furniture and so much more! */
/* Furniture.com Canada is more than just an online furniture store. */
/* </p><br>*/
/* <p>*/
/* We hand pick and curate the best in quality and style for you and your home. Why spend days driving from store to store trying to find that perfect look or unique piece. */
/* </p>*/
/* <p><br>*/
/* Find everything you’re looking for and more from the comfort of your own home.*/
/* </p>*/
/* <br>*/
/* <p >*/
/*     OUR PROMISE <br>*/
/* - All Canadian Pricing + No custom fees.<br>*/
/* - Professional and reliable delivery service.<br>*/
/* - A vast selection of products. <br>*/
/* - Personalized customer service.<br>*/
/* - Satisfaction guarantee.<br>*/
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
