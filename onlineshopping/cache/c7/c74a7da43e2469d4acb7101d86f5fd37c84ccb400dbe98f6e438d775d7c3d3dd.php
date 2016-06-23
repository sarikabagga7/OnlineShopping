<?php

/* payment.html.twig */
class __TwigTemplate_99d8039e272d5a87a80696006e91e52b5a7c6689ec13c473502f67f3c67b2850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "payment.html.twig", 3);
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
        echo " Payment ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 10
            echo "
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                // line 12
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "productName", array()), "html", null, true);
                echo " , Price:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "ProductPrice", array()), "html", null, true);
                echo " , Quantity:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "quantity", array()), "html", null, true);
                echo "<br>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
    ";
        }
        // line 16
        echo "    <br>
     <tr>
     <td>GST:";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["gst"]) ? $context["gst"] : null), "html", null, true);
        echo "</td><br>
     <td>PST:";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["qst"]) ? $context["qst"] : null), "html", null, true);
        echo "</td><br>
     Total Amount:<td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["totalAmount"]) ? $context["totalAmount"] : null), "html", null, true);
        echo "</td><br>
                </tr><br>

<form method=\"POST\" action=\"/checkout\">

    <a href=\"payment.html.twig\"></a>
    <label for=\"cardtype\">Card Type:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select id=\"cardtype\" name=\"cardtype\">
            <option value=\"American Express\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "highschoolChecked", array()), "html", null, true);
        echo " >American Express</option>
            <option value=\"Master Card\" ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "collegeChecked", array()), "html", null, true);
        echo ">Master Card</option>
            <option value=\"Visa\" ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "universityChecked", array()), "html", null, true);
        echo " >Visa</option>

            </select><br><br>

            <label for=\"cardno\">Card Number: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input id=\"cardno \" type=\"text\" name=\"cardno\" value=";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "cardno", array()), "html", null, true);
        echo "><br>  <br>

             <label for=\"cardhoder\">Cardholder Name: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input id=\"cardholder\" type=\"text\" name=\"cardholder\" value=";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "cardholder", array()), "html", null, true);
        echo "><br>  <br>

            <label for=\"expdate\">Expiration Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select id=\"expdate\" name=\"expdate\">
            <option value=\"Jan-01\" >Jan-01</option>
            <option value=\"Feb-02\" >Feb-02</option>
            <option value=\"Mar-03\" >Mar-03</option>
            <option value=\"Apr-04\" >Apr-04</option>
            <option value=\"May-05\" >May-05</option>
            <option value=\"Jun-06\" >Jun-06</option>
            <option value=\"Jul-07\" >Jul-07</option>
            <option value=\"Aug-08\" >Aug-08</option>
            <option value=\"Sep-09\" >Jan-09</option>
            <option value=\"Oct-10\" >Oct-10</option>
            <option value=\"Nov-11\" >Nov-11</option>
            <option value=\"Dec-12\" >Dec-12</option>

            </select><br><br>

            <label for=\"expyear\">Expiration Year:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select id=\"expyear\" name=\"expyear\">
            <option value=\"2016\" >2016</option>
            <option value=\"2017\" >2017</option>
            <option value=\"2018\" >2018</option>
            <option value=\"2019\" >2019</option>
            <option value=\"2020\" >2020</option>
            <option value=\"2021\" >2021</option>
            <option value=\"2022\" >2022</option>
            <option value=\"2023\" >2023</option>
            <option value=\"2024\" >2024</option>
            <option value=\"2025\" >2025</option>
            <option value=\"2026\" >2026</option>
            <option value=\"2027\" >2027</option>
            <option value=\"2028\" >2028</option>


            </select><br><br>



        <input class=\"button\" id=\"btnsubmit\" type=\"submit\" value=\"Payment\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  129 => 35,  121 => 30,  117 => 29,  113 => 28,  102 => 20,  98 => 19,  94 => 18,  90 => 16,  86 => 14,  63 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %} Payment {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if items %}*/
/* */
/*             {% for pr in items %}*/
/*                 {{loop.index}}. {{pr.productName}} , Price:{{pr.ProductPrice}} , Quantity:{{pr.quantity}}<br>*/
/*                 {% endfor %}*/
/* */
/*     {% endif %}*/
/*     <br>*/
/*      <tr>*/
/*      <td>GST:{{gst}}</td><br>*/
/*      <td>PST:{{qst}}</td><br>*/
/*      Total Amount:<td>{{totalAmount}}</td><br>*/
/*                 </tr><br>*/
/* */
/* <form method="POST" action="/checkout">*/
/* */
/*     <a href="payment.html.twig"></a>*/
/*     <label for="cardtype">Card Type:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*             <select id="cardtype" name="cardtype">*/
/*             <option value="American Express" {{value.highschoolChecked}} >American Express</option>*/
/*             <option value="Master Card" {{value.collegeChecked}}>Master Card</option>*/
/*             <option value="Visa" {{value.universityChecked}} >Visa</option>*/
/* */
/*             </select><br><br>*/
/* */
/*             <label for="cardno">Card Number: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*            <input id="cardno " type="text" name="cardno" value={{value.cardno}}><br>  <br>*/
/* */
/*              <label for="cardhoder">Cardholder Name: </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*            <input id="cardholder" type="text" name="cardholder" value={{value.cardholder}}><br>  <br>*/
/* */
/*             <label for="expdate">Expiration Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*             <select id="expdate" name="expdate">*/
/*             <option value="Jan-01" >Jan-01</option>*/
/*             <option value="Feb-02" >Feb-02</option>*/
/*             <option value="Mar-03" >Mar-03</option>*/
/*             <option value="Apr-04" >Apr-04</option>*/
/*             <option value="May-05" >May-05</option>*/
/*             <option value="Jun-06" >Jun-06</option>*/
/*             <option value="Jul-07" >Jul-07</option>*/
/*             <option value="Aug-08" >Aug-08</option>*/
/*             <option value="Sep-09" >Jan-09</option>*/
/*             <option value="Oct-10" >Oct-10</option>*/
/*             <option value="Nov-11" >Nov-11</option>*/
/*             <option value="Dec-12" >Dec-12</option>*/
/* */
/*             </select><br><br>*/
/* */
/*             <label for="expyear">Expiration Year:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*             <select id="expyear" name="expyear">*/
/*             <option value="2016" >2016</option>*/
/*             <option value="2017" >2017</option>*/
/*             <option value="2018" >2018</option>*/
/*             <option value="2019" >2019</option>*/
/*             <option value="2020" >2020</option>*/
/*             <option value="2021" >2021</option>*/
/*             <option value="2022" >2022</option>*/
/*             <option value="2023" >2023</option>*/
/*             <option value="2024" >2024</option>*/
/*             <option value="2025" >2025</option>*/
/*             <option value="2026" >2026</option>*/
/*             <option value="2027" >2027</option>*/
/*             <option value="2028" >2028</option>*/
/* */
/* */
/*             </select><br><br>*/
/* */
/* */
/* */
/*         <input class="button" id="btnsubmit" type="submit" value="Payment">*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
