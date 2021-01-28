<?php

/* default/template/extension/module/ocfilter/filter_price.twig */
class __TwigTemplate_8c398cbd3f1dfd1eb7b615a3f8e641c592f0c7faa603102c8ba99e36984f6436 extends Twig_Template
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
        if ((isset($context["show_price"]) ? $context["show_price"] : null)) {
            // line 2
            echo "<div class=\"list-group-item ocfilter-option\" data-toggle=\"popover-price\">
  <div class=\"ocf-option-name\">
\t\t";
            // line 4
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "&nbsp;";
            echo (isset($context["symbol_left"]) ? $context["symbol_left"] : null);
            echo "
    <span id=\"price-from\">";
            // line 5
            echo (isset($context["min_price_get"]) ? $context["min_price_get"] : null);
            echo "</span>&nbsp;-&nbsp;<span id=\"price-to\">";
            echo (isset($context["max_price_get"]) ? $context["max_price_get"] : null);
            echo "</span>";
            echo (isset($context["symbol_right"]) ? $context["symbol_right"] : null);
            echo "
\t</div>

  <div class=\"ocf-option-values\">
\t\t<div id=\"scale-price\" class=\"scale ocf-target\" data-option-id=\"p\"
      data-start-min=\"";
            // line 10
            echo (isset($context["min_price_get"]) ? $context["min_price_get"] : null);
            echo "\"
      data-start-max=\"";
            // line 11
            echo (isset($context["max_price_get"]) ? $context["max_price_get"] : null);
            echo "\"
      data-range-min=\"";
            // line 12
            echo (isset($context["min_price"]) ? $context["min_price"] : null);
            echo "\"
      data-range-max=\"";
            // line 13
            echo (isset($context["max_price"]) ? $context["max_price"] : null);
            echo "\"
      data-element-min=\"#price-from\"
      data-element-max=\"#price-to\"
      data-control-min=\"#min-price-value\"
      data-control-max=\"#max-price-value\"
    ></div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter/filter_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  51 => 12,  47 => 11,  43 => 10,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if show_price %}*/
/* <div class="list-group-item ocfilter-option" data-toggle="popover-price">*/
/*   <div class="ocf-option-name">*/
/* 		{{ text_price }}&nbsp;{{ symbol_left }}*/
/*     <span id="price-from">{{ min_price_get }}</span>&nbsp;-&nbsp;<span id="price-to">{{ max_price_get }}</span>{{ symbol_right }}*/
/* 	</div>*/
/* */
/*   <div class="ocf-option-values">*/
/* 		<div id="scale-price" class="scale ocf-target" data-option-id="p"*/
/*       data-start-min="{{ min_price_get }}"*/
/*       data-start-max="{{ max_price_get }}"*/
/*       data-range-min="{{ min_price }}"*/
/*       data-range-max="{{ max_price }}"*/
/*       data-element-min="#price-from"*/
/*       data-element-max="#price-to"*/
/*       data-control-min="#min-price-value"*/
/*       data-control-max="#max-price-value"*/
/*     ></div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
