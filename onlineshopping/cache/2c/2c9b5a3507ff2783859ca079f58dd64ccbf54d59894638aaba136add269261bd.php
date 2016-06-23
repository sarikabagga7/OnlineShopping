<?php

/* cart.html.twig */
class __TwigTemplate_03f3b8a04c1bbefe9f052396a04c40516e89fba3c19b606c10628e8c230df467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "cart.html.twig", 2);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Cart";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <script src=\"/jquery.min.js\"></script>
    <script>

        \$(document).ready(function ()
        {
            \$(\".quanInput\").bind('input', function () {
                var quantity = \$(this).val();
                var itemID = \$(this).attr('itemID');
               // console.log(\"quantity changed:\" + quantity + \" of item \" + itemID);
                //console.log(\"quantity changed:\");
                if (quantity === \"\")
                    return;
                var data = {quantity: quantity};

                \$.ajax({
                    url: \"/api.php/cartitems/\" + itemID,
                    type: \"PUT\", //put is update
                    data: JSON.stringify(data), //i am sending the json like that '{\"title:\"++'\"}' //JSON.stringfy(data)//data send to server;,
                    contentType: 'application/json',
                    success: function (result) { // asynchromus acces that when the data is fetched call that method, anonomous function, this fuction will call by browser automatically, what you recieved by url

                        //loadTodoList();
                        console.log(result);
                        if (!result) {
                            alert(\"Error updaing quantity of the product\");
                        }

                    },
                    error: function () {
                        console.log(\"cart items update failed\");
                        alert(\"Error update the quantity of the product\");

                    }

                });

            });
        });

    </script>


    <table border=\"1\" class=\"table\">
        <tr><th>#</th><th>Item Name</th><th>Unit Price</th><th>Quantity</th><th>Delete</th></tr>

        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartItems"]) ? $context["cartItems"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "
            <tr><td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "productName", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ProductPrice", array()), "html", null, true);
            echo " </td>
                <td><input class=\"quanInput\" width=\"100\" type=\"number\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "\" itemPrice=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "\" itemID=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array()), "html", null, true);
            echo "\"> </td>
                <td><a class=\"contact\" href=\"/delete/";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array()), "html", null, true);
            echo "\"><span>Delete</span></a></td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
    </table>
    <br><br>
    <div id=\"rightfloat\">
        <form  action=\"/continue\">
            <input class=\"button\"  type=\"submit\" value=\"Checkout\"><br>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  125 => 58,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  102 => 53,  85 => 52,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Cart{% endblock %}*/
/* */
/* {% block body %}*/
/*     <script src="/jquery.min.js"></script>*/
/*     <script>*/
/* */
/*         $(document).ready(function ()*/
/*         {*/
/*             $(".quanInput").bind('input', function () {*/
/*                 var quantity = $(this).val();*/
/*                 var itemID = $(this).attr('itemID');*/
/*                // console.log("quantity changed:" + quantity + " of item " + itemID);*/
/*                 //console.log("quantity changed:");*/
/*                 if (quantity === "")*/
/*                     return;*/
/*                 var data = {quantity: quantity};*/
/* */
/*                 $.ajax({*/
/*                     url: "/api.php/cartitems/" + itemID,*/
/*                     type: "PUT", //put is update*/
/*                     data: JSON.stringify(data), //i am sending the json like that '{"title:"++'"}' //JSON.stringfy(data)//data send to server;,*/
/*                     contentType: 'application/json',*/
/*                     success: function (result) { // asynchromus acces that when the data is fetched call that method, anonomous function, this fuction will call by browser automatically, what you recieved by url*/
/* */
/*                         //loadTodoList();*/
/*                         console.log(result);*/
/*                         if (!result) {*/
/*                             alert("Error updaing quantity of the product");*/
/*                         }*/
/* */
/*                     },*/
/*                     error: function () {*/
/*                         console.log("cart items update failed");*/
/*                         alert("Error update the quantity of the product");*/
/* */
/*                     }*/
/* */
/*                 });*/
/* */
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* */
/* */
/*     <table border="1" class="table">*/
/*         <tr><th>#</th><th>Item Name</th><th>Unit Price</th><th>Quantity</th><th>Delete</th></tr>*/
/* */
/*         {% for item in cartItems %}*/
/* */
/*             <tr><td>{{loop.index}} </td>*/
/*                 <td>{{item.productName}} </td>*/
/*                 <td>{{item.ProductPrice}} </td>*/
/*                 <td><input class="quanInput" width="100" type="number" value="{{item.quantity}}" itemPrice="{{item.price}}" itemID="{{item.ID}}"> </td>*/
/*                 <td><a class="contact" href="/delete/{{item.ID}}"><span>Delete</span></a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/* */
/*     </table>*/
/*     <br><br>*/
/*     <div id="rightfloat">*/
/*         <form  action="/continue">*/
/*             <input class="button"  type="submit" value="Checkout"><br>*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
