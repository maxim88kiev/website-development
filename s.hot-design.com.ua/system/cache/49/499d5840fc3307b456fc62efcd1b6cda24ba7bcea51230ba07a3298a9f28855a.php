<?php

/* default/template/extension/module/featured.twig */
class __TwigTemplate_722154dddaca2b30f9975ec867e244a4e2f96e60e4b458bb600d9e802c4ddae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<div class=\"row\">
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">

\t\t\t";
            // line 7
            if ( !$this->getAttribute($context["product"], "special", array())) {
                // line 8
                echo "\t\t\t\t<!--  -->
\t\t\t";
            } else {
                // line 10
                echo "\t\t\t\t<div class=\"triangle-topleft\"><span class=\"save-discount\" onclick=\"location.href='";
                echo $this->getAttribute($context["product"], "href", array());
                echo "'\">";
                echo (($this->getAttribute($context["product"], "specialSavings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "specialSavings", array()))) : (""));
                echo "% off</span></div>
\t\t\t";
            }
            // line 12
            echo "\t\t\t
      <div class=\"image\"><a href=\"";
            // line 13
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 15
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        <p>";
            // line 16
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
        ";
            // line 17
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 18
                echo "        <div class=\"rating\">
          ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 20
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 21
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 23
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 25
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "        </div>
        ";
            }
            // line 28
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 29
                echo "        <p class=\"price\">
          ";
                // line 30
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 31
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 33
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 35
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 36
                    echo "          <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          ";
                }
                // line 38
                echo "        </p>
        ";
            }
            // line 40
            echo "      </div>
      <div class=\"button-group\">
        
\t\t\t\t";
            // line 43
            if (($this->getAttribute($context["product"], "quantity", array()) < 1)) {
                // line 44
                echo "<button type=\"button\" disabled=\"disabled\"><i class=\"fa fa-exclamation-triangle\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo $this->getAttribute($context["product"], "text_out_of_stock", array());
                echo "</span></button>
                ";
            } else {
                // line 45
                echo " 
<button type=\"button\" onclick=\"cart.add('";
                // line 46
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
                ";
            }
            // line 48
            echo "\t\t\t
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 49
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 50
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 55,  171 => 50,  165 => 49,  162 => 48,  155 => 46,  152 => 45,  146 => 44,  144 => 43,  139 => 40,  135 => 38,  127 => 36,  124 => 35,  116 => 33,  110 => 31,  108 => 30,  105 => 29,  102 => 28,  98 => 26,  92 => 25,  88 => 23,  84 => 21,  81 => 20,  77 => 19,  74 => 18,  72 => 17,  68 => 16,  62 => 15,  51 => 13,  48 => 12,  40 => 10,  36 => 8,  34 => 7,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h3>{{ heading_title }}</h3>*/
/* <div class="row">*/
/*  {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/* */
/* 			{% if not product.special %}*/
/* 				<!--  -->*/
/* 			{% else %}*/
/* 				<div class="triangle-topleft"><span class="save-discount" onclick="location.href='{{ product.href }}'">{{ product.specialSavings|default }}% off</span></div>*/
/* 			{% endif %}*/
/* 			*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <p>{{ product.description }}</p>*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="button-group">*/
/*         */
/* 				{% if product.quantity < 1 %}*/
/* <button type="button" disabled="disabled"><i class="fa fa-exclamation-triangle"></i> <span class="hidden-xs hidden-sm hidden-md">{{ product.text_out_of_stock }}</span></button>*/
/*                 {% else %} */
/* <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 {% endif %}*/
/* 			*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
