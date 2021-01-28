<?php

/* default/template/extension/module/latest.twig */
class __TwigTemplate_90b68c64d796fcaa0939cd51fb2b6677677b25b29854ba9bf6bff4aa68d62cef extends Twig_Template
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
<div class=\"row\"> ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">

\t\t\t";
            // line 6
            if ( !$this->getAttribute($context["product"], "special", array())) {
                // line 7
                echo "\t\t\t\t<!--  -->
\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t<div class=\"triangle-topleft\"><span class=\"save-discount\" onclick=\"location.href='";
                echo $this->getAttribute($context["product"], "href", array());
                echo "'\">";
                echo (($this->getAttribute($context["product"], "specialSavings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "specialSavings", array()))) : (""));
                echo "% off</span></div>
\t\t\t";
            }
            // line 11
            echo "\t\t\t
      
\t\t\t\t";
            // line 13
            $context["flip"] = "";
            // line 14
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "rthumbs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rthumb"]) {
                // line 15
                echo "\t\t\t\t\t";
                $context["flip"] = ((((isset($context["flip"]) ? $context["flip"] : null) . "\"") . $this->getAttribute($context["rthumb"], "flipimage", array())) . "\",");
                // line 16
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rthumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t\t
\t\t\t\t";
            // line 18
            $context["flipimages"] = trim((isset($context["flip"]) ? $context["flip"] : null), ",");
            // line 19
            echo "\t\t\t\t
\t\t\t\t<div class=\"image\" data-images='[\"";
            // line 20
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\",";
            echo (isset($context["flipimages"]) ? $context["flipimages"] : null);
            echo "]'><a href=\"";
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
<i class=\"icon-left-circle\"></i><i class=\"icon-right-circle\"></i><img src=\"";
            // line 21
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive img-control\" /></a></div>
\t\t\t\t
      <div class=\"caption\">
        <h4><a href=\"";
            // line 24
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        <p>";
            // line 25
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
        ";
            // line 26
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 27
                echo "        <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 28
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 29
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
        ";
            }
            // line 31
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 32
                echo "        <p class=\"price\"> ";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 33
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 34
                    echo " <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> ";
                }
                // line 35
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    echo " <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span> ";
                }
                // line 36
                echo "        </p>
        ";
            }
            // line 37
            echo " </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 39
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i><span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 40
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 41
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</div>
\t\t\t</div>
<script type=\"text/javascript\"><!--
\t\t\t\$('.image').imagesRotation();
\t\t\t//--></script>
\t\t\t </div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 47,  174 => 41,  168 => 40,  162 => 39,  158 => 37,  154 => 36,  145 => 35,  138 => 34,  132 => 33,  129 => 32,  126 => 31,  117 => 29,  110 => 28,  105 => 27,  103 => 26,  99 => 25,  93 => 24,  83 => 21,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  61 => 16,  58 => 15,  53 => 14,  51 => 13,  47 => 11,  39 => 9,  35 => 7,  33 => 6,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <h3>{{ heading_title }}</h3>*/
/* <div class="row"> {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/* */
/* 			{% if not product.special %}*/
/* 				<!--  -->*/
/* 			{% else %}*/
/* 				<div class="triangle-topleft"><span class="save-discount" onclick="location.href='{{ product.href }}'">{{ product.specialSavings|default }}% off</span></div>*/
/* 			{% endif %}*/
/* 			*/
/*       */
/* 				{% set flip = "" %}*/
/* 				{% for rthumb in product.rthumbs %}*/
/* 					{% set flip =  flip ~'"'~ rthumb.flipimage ~'",' %}*/
/* 				{% endfor %}*/
/* 				*/
/* 				{% set flipimages =  flip|trim(',') %}*/
/* 				*/
/* 				<div class="image" data-images='["{{ product.thumb }}",{{ flipimages }}]'><a href="{{ product.href }}">*/
/* <i class="icon-left-circle"></i><i class="icon-right-circle"></i><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-control" /></a></div>*/
/* 				*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <p>{{ product.description }}</p>*/
/*         {% if product.rating %}*/
/*         <div class="rating">{% for i in 1..5 %}*/
/*           {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*           {% endfor %}</div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price"> {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*           {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %}*/
/*         </p>*/
/*         {% endif %} </div>*/
/*       <div class="button-group">*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/* 			{% endfor %}*/
/* 			</div>*/
/* 			</div>*/
/* <script type="text/javascript"><!--*/
/* 			$('.image').imagesRotation();*/
/* 			//--></script>*/
/* 			 </div>*/
