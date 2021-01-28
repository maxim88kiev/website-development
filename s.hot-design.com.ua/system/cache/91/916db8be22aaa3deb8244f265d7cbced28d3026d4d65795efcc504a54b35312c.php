<?php

/* default/template/extension/module/ocfilter/filter_item.twig */
class __TwigTemplate_e6fc311f267e7bcec0ba1f6b6f03984905beb355ac622a76c05838151a627687 extends Twig_Template
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
        echo "<div class=\"list-group-item ocfilter-option\" id=\"option-";
        echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
        echo "\">
  <div class=\"ocf-option-name\">
    ";
        // line 3
        echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "name", array());
        echo "

\t\t";
        // line 5
        if ((($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array()) == "slide") || ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array()) == "slide_dual"))) {
            // line 6
            echo "    <span id=\"left-value-";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "\">";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "slide_value_min_get", array());
            echo "</span>
\t\t";
            // line 7
            if (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array()) == "slide_dual")) {
                // line 8
                echo "\t\t-&nbsp;<span id=\"right-value-";
                echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
                echo "\">";
                echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "slide_value_max_get", array());
                echo "</span>
\t\t";
            }
            // line 10
            echo "    ";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "postfix", array());
            echo "
    ";
        }
        // line 12
        echo "  </div>

  <div class=\"ocf-option-values\">
    ";
        // line 15
        if ((($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array()) == "slide") || ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array()) == "slide_dual"))) {
            // line 16
            echo "    ";
            $this->loadTemplate("default/template/extension/module/ocfilter/filter_slider_item.twig", "default/template/extension/module/ocfilter/filter_item.twig", 16)->display($context);
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "
    ";
            // line 19
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "selectbox", array())) {
                // line 20
                echo "    <div class=\"dropdown\">
      <button class=\"btn btn-block btn-";
                // line 21
                echo (($this->getAttribute((isset($context["selecteds"]) ? $context["selecteds"] : null), $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array()), array(), "array", true, true)) ? ("warning") : ("default"));
                echo " dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"pull-right fa fa-angle-down\"></i>
        <span class=\"pull-left text-left\">
        \t";
                // line 24
                if ($this->getAttribute((isset($context["selecteds"]) ? $context["selecteds"] : null), $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array()), array(), "array", true, true)) {
                    // line 25
                    echo "
          ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["selecteds"]) ? $context["selecteds"] : null), $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array()), array(), "array"), "values", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 27
                        echo "          ";
                        echo $this->getAttribute($context["value"], "name", array());
                        echo "<br />
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "
        \t";
                } else {
                    // line 31
                    echo "        \t";
                    echo (isset($context["text_any"]) ? $context["text_any"] : null);
                    echo "
          ";
                }
                // line 33
                echo "        </span>
      </button>
      <div class=\"dropdown-menu\">
        ";
                // line 36
                $this->loadTemplate("default/template/extension/module/ocfilter/value_list.twig", "default/template/extension/module/ocfilter/filter_item.twig", 36)->display($context);
                // line 37
                echo "      </div>
    </div>
    ";
            } else {
                // line 40
                echo "    ";
                $this->loadTemplate("default/template/extension/module/ocfilter/value_list.twig", "default/template/extension/module/ocfilter/filter_item.twig", 40)->display($context);
                // line 41
                echo "    ";
            }
            // line 42
            echo "
    ";
        }
        // line 44
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter/filter_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  128 => 42,  125 => 41,  122 => 40,  117 => 37,  115 => 36,  110 => 33,  104 => 31,  100 => 29,  91 => 27,  87 => 26,  84 => 25,  82 => 24,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  60 => 15,  55 => 12,  49 => 10,  41 => 8,  39 => 7,  32 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* <div class="list-group-item ocfilter-option" id="option-{{ option.option_id }}">*/
/*   <div class="ocf-option-name">*/
/*     {{ option.name }}*/
/* */
/* 		{% if option.type == 'slide' or option.type == 'slide_dual' %}*/
/*     <span id="left-value-{{ option.option_id }}">{{ option.slide_value_min_get }}</span>*/
/* 		{% if option.type == 'slide_dual' %}*/
/* 		-&nbsp;<span id="right-value-{{ option.option_id }}">{{ option.slide_value_max_get }}</span>*/
/* 		{% endif %}*/
/*     {{ option.postfix }}*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <div class="ocf-option-values">*/
/*     {% if option.type == 'slide' or option.type == 'slide_dual' %}*/
/*     {% include 'default/template/extension/module/ocfilter/filter_slider_item.twig' %}*/
/*     {% else %}*/
/* */
/*     {% if option.selectbox %}*/
/*     <div class="dropdown">*/
/*       <button class="btn btn-block btn-{{ (selecteds[option.option_id] is defined) ? 'warning' : 'default' }} dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">*/
/*         <i class="pull-right fa fa-angle-down"></i>*/
/*         <span class="pull-left text-left">*/
/*         	{% if selecteds[option.option_id] is defined %}*/
/* */
/*           {% for value in selecteds[option.option_id].values %}*/
/*           {{ value.name }}<br />*/
/* 					{% endfor %}*/
/* */
/*         	{% else %}*/
/*         	{{ text_any }}*/
/*           {% endif %}*/
/*         </span>*/
/*       </button>*/
/*       <div class="dropdown-menu">*/
/*         {% include 'default/template/extension/module/ocfilter/value_list.twig' %}*/
/*       </div>*/
/*     </div>*/
/*     {% else %}*/
/*     {% include 'default/template/extension/module/ocfilter/value_list.twig' %}*/
/*     {% endif %}*/
/* */
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
