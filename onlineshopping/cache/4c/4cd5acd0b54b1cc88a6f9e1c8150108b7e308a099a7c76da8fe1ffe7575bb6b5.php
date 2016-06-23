<?php

/* category.html.twig */
class __TwigTemplate_d6c7d09f5659cf99700afba3005920afece5bb10eaaa34f868b3086e9aa08407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "category.html.twig", 4);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productList"]) ? $context["productList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 14
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "productName", array()), "html", null, true);
            echo "</td><br>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "ProductPrice", array()), "html", null, true);
            echo "</td><br>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "rating", array()), "html", null, true);
            echo "</td><br>

            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["a"], "description", array()), 0, 50), "html", null, true);
            echo "...</td><br>

            <td><img width=100 src=\"/images/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "image", array()), "html", null, true);
            echo "\"> </td<br>
            <form method=\"post\" action=\"/cart\">
                <input type=\"hidden\" name=\"productID\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "ID", array()), "html", null, true);
            echo "\">
                <input type=\"number\" name=\"quantity\" value=\"1\">

                <input class=\"button\" type=\"submit\" value=\"Add To Cart\"><br>
            </form>
            <tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>



";
    }

    public function getTemplateName()
    {
        return "category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  70 => 22,  65 => 20,  60 => 18,  55 => 16,  51 => 15,  46 => 14,  42 => 13,  38 => 11,  35 => 10,  29 => 6,  11 => 4,);
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
/*         {% for a in productList %}*/
/*             <tr><td>{{a.productName}}</td><br>*/
/*             <td>{{a.ProductPrice}}</td><br>*/
/*             <td>{{a.rating}}</td><br>*/
/* */
/*             <td>{{a.description | slice(0,50)}}...</td><br>*/
/* */
/*             <td><img width=100 src="/images/{{a.image}}"> </td<br>*/
/*             <form method="post" action="/cart">*/
/*                 <input type="hidden" name="productID" value="{{a.ID}}">*/
/*                 <input type="number" name="quantity" value="1">*/
/* */
/*                 <input class="button" type="submit" value="Add To Cart"><br>*/
/*             </form>*/
/*             <tr>*/
/*             {% endfor %}*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
