<?php

/* default/template/extension/module/ocfilter/value_item.twig */
class __TwigTemplate_1f8cf4db2c1d03eb6a73766ab7d4237889c7fc8de21207e2a03fb31b98f6e605 extends Twig_Template
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
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "color", array())) {
            // line 2
            echo "<div class=\"ocf-color\" style=\"background-color: #";
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "color", array());
            echo ";\"></div>
";
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "image", array())) {
            // line 6
            echo "<div class=\"ocf-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "image", array());
            echo ");\"></div>
";
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "selected", array())) {
            // line 10
            echo "<label id=\"v-";
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id", array());
            echo "\" class=\"ocf-selected\" data-option-id=\"";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "\">
  <input type=\"";
            // line 11
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array());
            echo "\" name=\"ocf[";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "params", array());
            echo "\" checked=\"checked\" class=\"ocf-target\" autocomplete=\"off\" />
  ";
            // line 12
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name", array());
            echo "
  ";
            // line 13
            if ((isset($context["show_counter"]) ? $context["show_counter"] : null)) {
                // line 14
                echo "  <small class=\"badge\"></small>
  ";
            }
            // line 16
            echo "</label>
";
        } elseif ($this->getAttribute(        // line 17
(isset($context["value"]) ? $context["value"] : null), "count", array())) {
            // line 18
            echo "<label id=\"v-";
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id", array());
            echo "\" data-option-id=\"";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "\">
  <input type=\"";
            // line 19
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array());
            echo "\" name=\"ocf[";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "params", array());
            echo "\" class=\"ocf-target\" autocomplete=\"off\" />
  ";
            // line 20
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name", array());
            echo "
  ";
            // line 21
            if ((isset($context["show_counter"]) ? $context["show_counter"] : null)) {
                // line 22
                echo "  <small class=\"badge\">";
                echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "count", array());
                echo "</small>
  ";
            }
            // line 24
            echo "</label>
";
        } else {
            // line 26
            echo "<label id=\"v-";
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id", array());
            echo "\" class=\"disabled\" data-option-id=\"";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "\">
  <input type=\"";
            // line 27
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "type", array());
            echo "\" name=\"ocf[";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "]\" value=\"\" disabled=\"disabled\" class=\"ocf-target\" autocomplete=\"off\" />
  ";
            // line 28
            echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name", array());
            echo "
  ";
            // line 29
            if ((isset($context["show_counter"]) ? $context["show_counter"] : null)) {
                // line 30
                echo "  <small class=\"badge\">0</small>
  ";
            }
            // line 32
            echo "</label>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter/value_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  123 => 30,  121 => 29,  117 => 28,  111 => 27,  104 => 26,  100 => 24,  94 => 22,  92 => 21,  88 => 20,  80 => 19,  73 => 18,  71 => 17,  68 => 16,  64 => 14,  62 => 13,  58 => 12,  50 => 11,  43 => 10,  41 => 9,  38 => 8,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if option.color %}*/
/* <div class="ocf-color" style="background-color: #{{ value.color }};"></div>*/
/* {% endif %}*/
/* */
/* {% if option.image %}*/
/* <div class="ocf-image" style="background-image: url({{ value.image }});"></div>*/
/* {% endif %}*/
/* */
/* {% if value.selected %}*/
/* <label id="v-{{ value.id }}" class="ocf-selected" data-option-id="{{ option.option_id }}">*/
/*   <input type="{{ option.type }}" name="ocf[{{ option.option_id }}]" value="{{ value.params }}" checked="checked" class="ocf-target" autocomplete="off" />*/
/*   {{ value.name }}*/
/*   {% if show_counter %}*/
/*   <small class="badge"></small>*/
/*   {% endif %}*/
/* </label>*/
/* {% elseif value.count %}*/
/* <label id="v-{{ value.id }}" data-option-id="{{ option.option_id }}">*/
/*   <input type="{{ option.type }}" name="ocf[{{ option.option_id }}]" value="{{ value.params }}" class="ocf-target" autocomplete="off" />*/
/*   {{ value.name }}*/
/*   {% if show_counter %}*/
/*   <small class="badge">{{ value.count }}</small>*/
/*   {% endif %}*/
/* </label>*/
/* {% else %}*/
/* <label id="v-{{ value.id }}" class="disabled" data-option-id="{{ option.option_id }}">*/
/*   <input type="{{ option.type }}" name="ocf[{{ option.option_id }}]" value="" disabled="disabled" class="ocf-target" autocomplete="off" />*/
/*   {{ value.name }}*/
/*   {% if show_counter %}*/
/*   <small class="badge">0</small>*/
/*   {% endif %}*/
/* </label>*/
/* {% endif %}*/
