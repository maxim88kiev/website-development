<?php

/* default/template/extension/quickcheckout/terms.twig */
class __TwigTemplate_4b415a87b40703fdbc4094cc54e38b292a16db789099e3249964b6a6f35dba8c extends Twig_Template
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
        echo "<div id=\"payment\" class=\"text-left\" style=\"display:none;\"></div>
<div class=\"terms\">
  <label ";
        // line 3
        if ( !$this->getAttribute((isset($context["rules"]) ? $context["rules"] : null), "display", array())) {
            echo " style=\"display:none;\" ";
        }
        echo ">";
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 4
            echo "    ";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
    <input type=\"checkbox\" name=\"agree\" value=\"1\" ";
            // line 5
            if (($this->getAttribute((isset($context["rules"]) ? $context["rules"] : null), "default", array()) ||  !$this->getAttribute((isset($context["rules"]) ? $context["rules"] : null), "display", array()))) {
                echo " checked=\"checked\" ";
            }
            echo "/>
  ";
        }
        // line 6
        echo "</label> &nbsp;
  <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 7
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" ";
        if ((isset($context["disable_button"]) ? $context["disable_button"] : null)) {
            echo "disabled";
        }
        echo ">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/terms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  34 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="payment" class="text-left" style="display:none;"></div>*/
/* <div class="terms">*/
/*   <label {% if not rules.display %} style="display:none;" {% endif %}>{% if text_agree %}*/
/*     {{ text_agree }}*/
/*     <input type="checkbox" name="agree" value="1" {% if rules.default or not rules.display %} checked="checked" {% endif %}/>*/
/*   {% endif %}</label> &nbsp;*/
/*   <button type="button" id="button-payment-method" class="btn btn-primary" data-loading-text="{{ text_loading }}" {% if disable_button %}{{ 'disabled' }}{% endif %}>{{ button_continue }}</button>*/
/* </div>*/
