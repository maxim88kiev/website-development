<?php

/* default/template/extension/quickcheckout/register.twig */
class __TwigTemplate_4012c83edf56dfb00b459003fc62e3fbb7f1251021183e55daddc7d4418428df extends Twig_Template
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
        echo "<div style=\"overflow:auto;\">
  <div class=\"col-sm-6 required\">
\t<label class=\"control-label\">";
        // line 3
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
  </div>
  <div class=\"col-sm-6 required\">
\t<label class=\"control-label\">";
        // line 7
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
\t<input type=\"password\" name=\"confirm\" value=\"\" class=\"form-control\" />
  </div>
  <div class=\"col-xs-12\" style=\"clear:both;border-bottom:1px solid #dddddd;margin:10px 0px;\">

\t";
        // line 12
        if (($this->getAttribute((isset($context["field_newsletter"]) ? $context["field_newsletter"] : null), "required", array()) &&  !$this->getAttribute((isset($context["field_newsletter"]) ? $context["field_newsletter"] : null), "display", array()))) {
            // line 13
            echo "\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" class=\"hide\" checked=\"checked\" />
\t";
        } elseif ($this->getAttribute(        // line 14
(isset($context["field_newsletter"]) ? $context["field_newsletter"] : null), "display", array())) {
            // line 15
            echo "\t  <label for=\"newsletter\">
\t  ";
            // line 16
            if ($this->getAttribute((isset($context["field_newsletter"]) ? $context["field_newsletter"] : null), "default", array())) {
                echo " 
\t  \t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" checked=\"checked\" />
\t  ";
            } else {
                // line 18
                echo "   
\t  \t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
\t  ";
            }
            // line 21
            echo "\t    ";
            echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
            echo "</label><br />
\t";
        } else {
            // line 22
            echo "   
    \t<input type=\"checkbox name=\"newsletter\" value=\"1\" id=\"newsletter\" class=\"hide\" />
\t";
        }
        // line 25
        echo "
\t";
        // line 26
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 27
            echo "    \t<label for=\"agree-reg\"><input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agree-reg\" />\t";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</label>
\t";
        }
        // line 28
        echo " 

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  75 => 27,  73 => 26,  70 => 25,  65 => 22,  59 => 21,  54 => 18,  48 => 16,  45 => 15,  43 => 14,  40 => 13,  38 => 12,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div style="overflow:auto;">*/
/*   <div class="col-sm-6 required">*/
/* 	<label class="control-label">{{ entry_password }}</label>*/
/* 	<input type="password" name="password" value="" class="form-control" />*/
/*   </div>*/
/*   <div class="col-sm-6 required">*/
/* 	<label class="control-label">{{ entry_confirm }}</label>*/
/* 	<input type="password" name="confirm" value="" class="form-control" />*/
/*   </div>*/
/*   <div class="col-xs-12" style="clear:both;border-bottom:1px solid #dddddd;margin:10px 0px;">*/
/* */
/* 	{% if field_newsletter.required and not field_newsletter.display %}*/
/* 		<input type="checkbox" name="newsletter" value="1" id="newsletter" class="hide" checked="checked" />*/
/* 	{% elseif field_newsletter.display %}*/
/* 	  <label for="newsletter">*/
/* 	  {% if field_newsletter.default %} */
/* 	  	<input type="checkbox" name="newsletter" value="1" id="newsletter" checked="checked" />*/
/* 	  {% else %}   */
/* 	  	<input type="checkbox" name="newsletter" value="1" id="newsletter" />*/
/* 	  {% endif %}*/
/* 	    {{ entry_newsletter }}</label><br />*/
/* 	{% else %}   */
/*     	<input type="checkbox name="newsletter" value="1" id="newsletter" class="hide" />*/
/* 	{% endif %}*/
/* */
/* 	{% if text_agree %}*/
/*     	<label for="agree-reg"><input type="checkbox" name="agree" value="1" id="agree-reg" />	{{ text_agree }}</label>*/
/* 	{% endif %} */
/* */
/*   </div>*/
/* </div>*/
