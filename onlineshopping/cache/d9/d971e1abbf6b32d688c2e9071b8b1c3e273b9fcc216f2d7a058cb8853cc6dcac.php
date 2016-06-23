<?php

/* promotion.html.twig */
class __TwigTemplate_6d6e1dc77a8dc38aa4e531aa7a2b64c57fa90174a41173a05e6523b637c955db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "promotion.html.twig", 4);
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Category";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    <div>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotionList"]) ? $context["promotionList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 14
            echo "
            <div style=\"float: left;margin: 2px\">
                <img width=100 src=\"/images/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "image", array()), "html", null, true);
            echo "\"> </td<br><br>
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["a"], "productName", array()), 0, 20), "html", null, true);
            echo "<br>
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "ProductPrice", array()), "html", null, true);
            echo "<br>
            </div>

            <input type=\"hidden\" name=\"productID\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "ID", array()), "html", null, true);
            echo "\">

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>



";
    }

    public function getTemplateName()
    {
        return "promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  64 => 21,  58 => 18,  54 => 17,  50 => 16,  46 => 14,  42 => 13,  38 => 11,  35 => 10,  29 => 6,  11 => 4,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Category{% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*     <div>*/
/*         {% for a in promotionList %}*/
/* */
/*             <div style="float: left;margin: 2px">*/
/*                 <img width=100 src="/images/{{a.image}}"> </td<br><br>*/
/*                 {{a.productName| slice(0,20)}}<br>*/
/*                 {{a.ProductPrice}}<br>*/
/*             </div>*/
/* */
/*             <input type="hidden" name="productID" value="{{product.ID}}">*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
