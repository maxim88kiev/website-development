<?php

/* default/template/extension/quickcheckout/cart.twig */
class __TwigTemplate_50b73ce8e64a0cd484432a24d35cbeeaedf8748f183ade4d34ce7868ffb80312 extends Twig_Template
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
        echo "<div id=\"stock_warning\">
";
        // line 2
        if ((isset($context["error_warning_stock"]) ? $context["error_warning_stock"] : null)) {
            // line 3
            echo "\t<div class=\"alert alert-danger\" style=\"\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_stock"]) ? $context["error_stock"] : null);
            echo "</div>
";
        }
        // line 5
        echo "</div>
<table class=\"table quickcheckout-cart\">
  <thead>
\t<tr>
\t  <td class=\"image\">";
        // line 9
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
\t  <td class=\"name\">";
        // line 10
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
\t  <td class=\"quantity\">";
        // line 11
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
\t  <td class=\"price1 hidden-xs\">";
        // line 12
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
\t  <td class=\"total hidden-xs\">";
        // line 13
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
\t</tr>
  </thead>
  ";
        // line 16
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 17
            echo "\t<tbody>
      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "        <tr ";
                if ( !$this->getAttribute($context["product"], "stock", array())) {
                    echo " class=\"warning\" ";
                }
                echo ">
          <td class=\"image\">";
                // line 20
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " 
            <a href=\"";
                    // line 21
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /></a>
            ";
                }
                // line 22
                echo "</td>
          <td class=\"name\"><a href=\"";
                // line 23
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ( !$this->getAttribute($context["product"], "stock", array())) {
                    echo " <span class=\"text-danger\">***</span> ";
                }
                // line 24
                echo "            <div>
              ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
              <small>";
                    // line 26
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small><br />
\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t  ";
                if ($this->getAttribute($context["product"], "reward", array())) {
                    echo " 
\t\t\t  <br />
\t\t\t  <small>";
                    // line 30
                    echo $this->getAttribute($context["product"], "reward", array());
                    echo "</small>
\t\t\t  ";
                }
                // line 32
                echo "\t\t\t  ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " 
\t\t\t  <br />
\t\t\t  <span class=\"label label-info\">";
                    // line 34
                    echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                    echo "</span> <small>";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small>
\t\t\t  ";
                }
                // line 36
                echo "            </div></td>
          <td class=\"quantity\">";
                // line 37
                if ((isset($context["edit_cart"]) ? $context["edit_cart"] : null)) {
                    echo " 
\t\t    <div class=\"input-group input-group-sm\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-primary button-update\" data-type=\"decrease\" data-product=\"";
                    // line 40
                    echo $this->getAttribute($context["product"], "key", array());
                    echo "\">-</button>
\t\t\t\t</span>            
\t\t\t\t<input type=\"text\" data-mask=\"9?999999999999999\" value=\"";
                    // line 42
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "\" class=\"qc-product-qantity form-control text-center\" name=\"quantity[";
                    echo $this->getAttribute($context["product"], "key", array());
                    echo "]\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-primary button-update\" data-type=\"increase\" data-product=\"";
                    // line 44
                    echo $this->getAttribute($context["product"], "key", array());
                    echo "\">+</button>
\t\t\t\t\t<button class=\"btn btn-danger button-remove\" data-product=\"";
                    // line 45
                    echo $this->getAttribute($context["product"], "key", array());
                    echo "\" data-remove=\"";
                    echo $this->getAttribute($context["product"], "key", array());
                    echo "\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\"><i class=\"glyph-icon icon-cancel\">&#10006;</i></button>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\tx&nbsp;";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo " 
\t\t\t";
                }
                // line 50
                echo "</td>
\t\t  <td class=\"price1 hidden-xs\">";
                // line 51
                echo $this->getAttribute($context["product"], "price", array());
                echo "</td>
          <td class=\"total hidden-xs\">";
                // line 52
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                echo " 
        <tr>
          <td class=\"image\"></td>
          <td class=\"name\">";
                // line 58
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"quantity\">x&nbsp;1</td>
\t\t  <td class=\"price1\">";
                // line 60
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"total\">";
                // line 61
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo " 
\t</tbody>
  ";
        }
        // line 66
        echo "</table>
<div id=\"totals-wrap\">
\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            echo " 
\t<div class=\"total-wrap\">
\t  <div class=\"text-right\"><b>";
            // line 70
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</b> <span>";
            echo $this->getAttribute($context["total"], "text", array());
            echo "</span></div>
\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div> ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 73,  244 => 70,  237 => 68,  233 => 66,  228 => 63,  219 => 61,  215 => 60,  210 => 58,  201 => 55,  192 => 52,  188 => 51,  185 => 50,  179 => 49,  168 => 45,  164 => 44,  157 => 42,  152 => 40,  146 => 37,  143 => 36,  136 => 34,  130 => 32,  125 => 30,  119 => 28,  109 => 26,  103 => 25,  100 => 24,  92 => 23,  89 => 22,  78 => 21,  74 => 20,  67 => 19,  63 => 18,  60 => 17,  58 => 16,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="stock_warning">*/
/* {% if error_warning_stock %}*/
/* 	<div class="alert alert-danger" style=""><i class="fa fa-exclamation-circle"></i> {{ error_stock }}</div>*/
/* {% endif %}*/
/* </div>*/
/* <table class="table quickcheckout-cart">*/
/*   <thead>*/
/* 	<tr>*/
/* 	  <td class="image">{{ column_image }}</td>*/
/* 	  <td class="name">{{ column_name }}</td>*/
/* 	  <td class="quantity">{{ column_quantity }}</td>*/
/* 	  <td class="price1 hidden-xs">{{ column_price }}</td>*/
/* 	  <td class="total hidden-xs">{{ column_total }}</td>*/
/* 	</tr>*/
/*   </thead>*/
/*   {% if products or vouchers %}*/
/* 	<tbody>*/
/*       {% for product in products %}*/
/*         <tr {% if not product.stock %} class="warning" {% endif %}>*/
/*           <td class="image">{% if product.thumb %} */
/*             <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a>*/
/*             {% endif %}</td>*/
/*           <td class="name"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*             <div>*/
/*               {% for option in product.option %} */
/*               <small>{{ option.name }}: {{ option.value }}</small><br />*/
/* 			  {% endfor %}*/
/* 			  {% if product.reward %} */
/* 			  <br />*/
/* 			  <small>{{ product.reward }}</small>*/
/* 			  {% endif %}*/
/* 			  {% if product.recurring %} */
/* 			  <br />*/
/* 			  <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small>*/
/* 			  {% endif %}*/
/*             </div></td>*/
/*           <td class="quantity">{% if edit_cart %} */
/* 		    <div class="input-group input-group-sm">*/
/* 				<span class="input-group-btn">*/
/* 					<button class="btn btn-primary button-update" data-type="decrease" data-product="{{ product.key }}">-</button>*/
/* 				</span>            */
/* 				<input type="text" data-mask="9?999999999999999" value="{{ product.quantity }}" class="qc-product-qantity form-control text-center" name="quantity[{{ product.key }}]">*/
/* 				<span class="input-group-btn">*/
/* 					<button class="btn btn-primary button-update" data-type="increase" data-product="{{ product.key }}">+</button>*/
/* 					<button class="btn btn-danger button-remove" data-product="{{ product.key }}" data-remove="{{ product.key }}" title="{{ button_remove }}"><i class="glyph-icon icon-cancel">&#10006;</i></button>*/
/* 				</span>*/
/* 			</div>*/
/* 			{% else %}*/
/* 			x&nbsp;{{ product.quantity }} */
/* 			{% endif %}</td>*/
/* 		  <td class="price1 hidden-xs">{{ product.price }}</td>*/
/*           <td class="total hidden-xs">{{ product.total }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %} */
/*         <tr>*/
/*           <td class="image"></td>*/
/*           <td class="name">{{ voucher.description }}</td>*/
/*           <td class="quantity">x&nbsp;1</td>*/
/* 		  <td class="price1">{{ voucher.amount }}</td>*/
/*           <td class="total">{{ voucher.amount }}</td>*/
/*         </tr>*/
/*         {% endfor %} */
/* 	</tbody>*/
/*   {% endif %}*/
/* </table>*/
/* <div id="totals-wrap">*/
/* 	{% for total in totals %} */
/* 	<div class="total-wrap">*/
/* 	  <div class="text-right"><b>{{ total.title }}:</b> <span>{{ total.text }}</span></div>*/
/* 	</div>*/
/*     {% endfor %}*/
/* </div> */
