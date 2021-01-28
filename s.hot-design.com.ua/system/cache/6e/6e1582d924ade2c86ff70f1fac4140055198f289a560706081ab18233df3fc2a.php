<?php

/* default/template/extension/quickcheckout/shipping_method.twig */
class __TwigTemplate_27a04d359ad345aa261dfc58529ab1a8825be9dc74554295db05be861d358c3a extends Twig_Template
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
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
<div class=\"alert alert-danger\">";
            // line 2
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
";
        }
        // line 3
        echo " 
";
        // line 4
        if ((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) {
            // line 5
            echo "<p>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</p>
";
            // line 6
            if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
                // line 7
                echo "<table class=\"table ";
                if ((isset($context["shipping_title_display"]) ? $context["shipping_title_display"] : null)) {
                    echo "table-striped";
                }
                echo "\" style=\"margin-bottom: 0\">
  ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["shipping_method"]) {
                    // line 9
                    echo "  ";
                    if ((isset($context["shipping_title_display"]) ? $context["shipping_title_display"] : null)) {
                        // line 10
                        echo "  <tr>
    <td colspan=\"4\">
\t  <b>";
                        // line 12
                        echo $this->getAttribute($context["shipping_method"], "title", array());
                        echo "</b>
\t</td>
  </tr>
  ";
                    }
                    // line 15
                    echo " 
  ";
                    // line 16
                    if ( !$this->getAttribute($context["shipping_method"], "error", array())) {
                        echo " 
  ";
                        // line 17
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            echo " 
  <tr>
    <td>";
                            // line 19
                            if (($this->getAttribute($context["quote"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                                echo " 
      <input type=\"radio\" name=\"shipping_method\" value=\"";
                                // line 20
                                echo $this->getAttribute($context["quote"], "code", array());
                                echo "\" id=\"";
                                echo $this->getAttribute($context["quote"], "code", array());
                                echo "\" checked=\"checked\" />
      ";
                            } else {
                                // line 21
                                echo "   
      <input type=\"radio\" name=\"shipping_method\" value=\"";
                                // line 22
                                echo $this->getAttribute($context["quote"], "code", array());
                                echo "\" id=\"";
                                echo $this->getAttribute($context["quote"], "code", array());
                                echo "\" />
      ";
                            }
                            // line 23
                            echo "</td>
    <td><label for=\"";
                            // line 24
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["quote"], "title", array());
                            echo "</label></td>
    <td style=\"padding:1px!important\">
    ";
                            // line 26
                            if (($this->getAttribute((isset($context["shipping_logo"]) ? $context["shipping_logo"] : null), $context["key"], array(), "array") &&  !(isset($context["shipping_title_display"]) ? $context["shipping_title_display"] : null))) {
                                echo " 
\t  <img style=\"max-width:100%\" src=\"";
                                // line 27
                                echo $this->getAttribute((isset($context["shipping_logo"]) ? $context["shipping_logo"] : null), $context["key"], array(), "array");
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["shipping_method"], "title", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["shipping_method"], "title", array());
                                echo "\" />
\t";
                            }
                            // line 29
                            echo "\t</td>
    <td class=\"table-price-shipping\" style=\"text-align:right;width: 22%;\"><label for=\"";
                            // line 30
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["quote"], "text", array());
                            echo "</label></td>
  </tr>
  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 33
                        echo "  ";
                    } else {
                        echo "   
  <tr>
    <td colspan=\"4\"><div class=\"error\">";
                        // line 35
                        echo $this->getAttribute($context["shipping_method"], "error", array());
                        echo "</div></td>
  </tr>
  ";
                    }
                    // line 38
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "</table>
";
            } else {
                // line 40
                echo "   
  <select class=\"form-control\" name=\"shipping_method\">
    ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    echo " 
      ";
                    // line 43
                    if ( !$this->getAttribute($context["shipping_method"], "error", array())) {
                        echo " 
\t\t";
                        // line 44
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            echo " 
\t\t  ";
                            // line 45
                            if (($this->getAttribute($context["quote"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                                echo " 
\t\t    ";
                                // line 46
                                $context["code"] = $this->getAttribute($context["quote"], "code", array());
                                // line 47
                                echo "\t\t\t";
                                $context["exists"] = true;
                                echo " 
\t\t\t<option value=\"";
                                // line 48
                                echo $this->getAttribute($context["quote"], "code", array());
                                echo "\" selected=\"selected\">
\t\t  ";
                            } else {
                                // line 49
                                echo "   
\t\t\t<option value=\"";
                                // line 50
                                echo $this->getAttribute($context["quote"], "code", array());
                                echo "\">
\t\t  ";
                            }
                            // line 51
                            echo " 
\t\t  ";
                            // line 52
                            echo $this->getAttribute($context["quote"], "title", array());
                            echo "&nbsp;&nbsp;(";
                            echo $this->getAttribute($context["quote"], "text", array());
                            echo ")</option>
\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "\t  ";
                    }
                    // line 55
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "  </select><br />
";
            }
            // line 58
            echo "
";
        }
        // line 60
        if (((isset($context["delivery"]) ? $context["delivery"] : null) && (( !(isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) || ((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "1")) || ((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "3")))) {
            echo " 
<hr>
<div";
            // line 62
            echo (((isset($context["delivery_required"]) ? $context["delivery_required"] : null)) ? (" class=\"required\"") : (""));
            echo ">
  <label class=\"control-label\"><strong>";
            // line 63
            echo (isset($context["text_delivery"]) ? $context["text_delivery"] : null);
            echo "</strong></label>
  ";
            // line 64
            if (((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "1")) {
                echo " 
  <input type=\"text\" name=\"delivery_date\" value=\"";
                // line 65
                echo (isset($context["delivery_date"]) ? $context["delivery_date"] : null);
                echo "\" class=\"form-control date\" readonly=\"true\" style=\"background:#ffffff;\" />
  ";
            } else {
                // line 66
                echo "  
  <input type=\"text\" name=\"delivery_date\" value=\"";
                // line 67
                echo (isset($context["delivery_date"]) ? $context["delivery_date"] : null);
                echo "\" class=\"form-control date\" readonly=\"true\" style=\"background:#ffffff;\" />
  ";
            }
            // line 68
            echo " 
  ";
            // line 69
            if (((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "3")) {
                echo "<br />
    <select name=\"delivery_time\" class=\"form-control\">";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["delivery_times"]) ? $context["delivery_times"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["quickcheckout_delivery_time"]) {
                    // line 71
                    echo "    ";
                    if ($this->getAttribute($context["quickcheckout_delivery_time"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) {
                        echo " 
      ";
                        // line 72
                        if (((isset($context["delivery_time"]) ? $context["delivery_time"] : null) == $this->getAttribute($context["quickcheckout_delivery_time"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array"))) {
                            echo " 
\t  <option value=\"";
                            // line 73
                            echo $this->getAttribute($context["quickcheckout_delivery_time"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["quickcheckout_delivery_time"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "</option>
\t  ";
                        } else {
                            // line 74
                            echo "   
\t  <option value=\"";
                            // line 75
                            echo $this->getAttribute($context["quickcheckout_delivery_time"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "\">";
                            echo $this->getAttribute($context["quickcheckout_delivery_time"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "</option>
      ";
                        }
                        // line 76
                        echo " 
\t";
                    }
                    // line 77
                    echo " 
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickcheckout_delivery_time'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "</select>
  ";
            }
            // line 80
            echo "</div>
";
        } elseif ((        // line 81
(isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) && ((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "2"))) {
            echo " 
  <input type=\"text\" name=\"delivery_date\" value=\"\" class=\"hide\" />
  <select name=\"delivery_time\" class=\"hide\"><option value=\"\"></option></select>
  <strong>";
            // line 84
            echo (isset($context["text_estimated_delivery"]) ? $context["text_estimated_delivery"] : null);
            echo "</strong><br />
  ";
            // line 85
            echo (isset($context["estimated_delivery"]) ? $context["estimated_delivery"] : null);
            echo "<br />
  ";
            // line 86
            echo (isset($context["estimated_delivery_time"]) ? $context["estimated_delivery_time"] : null);
            echo " 
";
        } else {
            // line 87
            echo "   
  <input type=\"text\" name=\"delivery_date\" value=\"\" class=\"hide\" />
  <select name=\"delivery_time\" class=\"hide\"><option value=\"\"></option></select>
";
        }
        // line 91
        echo "
<script type=\"text/javascript\"><!--
\$('#shipping-method input[name=\\'shipping_method\\'], #shipping-method select[name=\\'shipping_method\\']').on('change', function() {
\t";
        // line 94
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}

\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/set',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 108
            if ((isset($context["cart"]) ? $context["cart"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 110
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 112
            if ((isset($context["shipping_reload"]) ? $context["shipping_reload"] : null)) {
                echo " 
\t\t\t\treloadPaymentMethod();
\t\t\t\t";
            }
            // line 114
            echo " 
\t\t\t},
\t\t\t";
            // line 116
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 120
            echo " 
\t\t});
\t";
        } else {
            // line 122
            echo "   
\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/shipping_method/set';
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/shipping_method/set&address_id=' + \$('#shipping-address select[name=\\'address_id\\']').val();
\t\t\tvar post_data = \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: url,
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 138
            if ((isset($context["cart"]) ? $context["cart"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 140
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 142
            if ((isset($context["shipping_reload"]) ? $context["shipping_reload"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
            }
            // line 148
            echo " 
\t\t\t},
\t\t\t";
            // line 150
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 154
            echo " 
\t\t});
\t";
        }
        // line 157
        echo "});

\$(document).ready(function() {
\t\$('#shipping-method input[name=\\'shipping_method\\']:checked, #shipping-method select[name=\\'shipping_method\\']').trigger('change');
});

";
        // line 163
        if (((isset($context["delivery"]) ? $context["delivery"] : null) && ((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "1"))) {
            echo " 
\$(document).ready(function() {
\t\$('input[name=\\'delivery_date\\']').datetimepicker({
\t\tformat: 'DD.MM.YYYY HH:mm',
\t\tminDate: '";
            // line 167
            echo (isset($context["delivery_min"]) ? $context["delivery_min"] : null);
            echo "',
\t\tmaxDate: '";
            // line 168
            echo (isset($context["delivery_max"]) ? $context["delivery_max"] : null);
            echo "',
\t\tdisabledDates: [";
            // line 169
            echo (isset($context["delivery_unavailable"]) ? $context["delivery_unavailable"] : null);
            echo "],
\t\tenabledHours: [";
            // line 170
            echo (isset($context["hours"]) ? $context["hours"] : null);
            echo "],
\t\tignoreReadonly: true,
\t\tlocale: 'ru',
\t\twidgetPositioning: {
            horizontal: 'left',
            vertical: 'bottom'
        },
\t\t";
            // line 177
            if (((isset($context["delivery_days_of_week"]) ? $context["delivery_days_of_week"] : null) != "")) {
                echo " 
\t\tdaysOfWeekDisabled: [";
                // line 178
                echo (isset($context["delivery_days_of_week"]) ? $context["delivery_days_of_week"] : null);
                echo "]
\t\t";
            }
            // line 179
            echo " 
\t});
});
";
        } elseif ((        // line 182
(isset($context["delivery"]) ? $context["delivery"] : null) && (((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "3") || ((isset($context["delivery_delivery_time"]) ? $context["delivery_delivery_time"] : null) == "0")))) {
            echo " 
\t\$('input[name=\\'delivery_date\\']').datetimepicker({
\t\tformat: 'DD.MM.YYYY',
\t\tminDate: '";
            // line 185
            echo (isset($context["delivery_min"]) ? $context["delivery_min"] : null);
            echo "',
\t\tmaxDate: '";
            // line 186
            echo (isset($context["delivery_max"]) ? $context["delivery_max"] : null);
            echo "',
\t\tdisabledDates: [";
            // line 187
            echo (isset($context["delivery_unavailable"]) ? $context["delivery_unavailable"] : null);
            echo "],
\t\tignoreReadonly: true,
\t\tlocale: 'ru',
\t\twidgetPositioning: {
            horizontal: 'left',
            vertical: 'bottom'
        },
\t\t";
            // line 194
            if (((isset($context["delivery_days_of_week"]) ? $context["delivery_days_of_week"] : null) != "")) {
                echo " 
\t\tdaysOfWeekDisabled: [";
                // line 195
                echo (isset($context["delivery_days_of_week"]) ? $context["delivery_days_of_week"] : null);
                echo "]
\t\t";
            }
            // line 196
            echo " 
\t});
";
        }
        // line 199
        echo "//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 199,  537 => 196,  532 => 195,  528 => 194,  518 => 187,  514 => 186,  510 => 185,  504 => 182,  499 => 179,  494 => 178,  490 => 177,  480 => 170,  476 => 169,  472 => 168,  468 => 167,  461 => 163,  453 => 157,  448 => 154,  440 => 150,  436 => 148,  426 => 142,  422 => 140,  416 => 138,  398 => 122,  393 => 120,  385 => 116,  381 => 114,  375 => 112,  371 => 110,  365 => 108,  348 => 94,  343 => 91,  337 => 87,  332 => 86,  328 => 85,  324 => 84,  318 => 81,  315 => 80,  311 => 78,  304 => 77,  300 => 76,  293 => 75,  290 => 74,  283 => 73,  279 => 72,  274 => 71,  270 => 70,  266 => 69,  263 => 68,  258 => 67,  255 => 66,  250 => 65,  246 => 64,  242 => 63,  238 => 62,  233 => 60,  229 => 58,  225 => 56,  219 => 55,  216 => 54,  206 => 52,  203 => 51,  198 => 50,  195 => 49,  190 => 48,  185 => 47,  183 => 46,  179 => 45,  173 => 44,  169 => 43,  163 => 42,  159 => 40,  155 => 39,  149 => 38,  143 => 35,  137 => 33,  126 => 30,  123 => 29,  114 => 27,  110 => 26,  103 => 24,  100 => 23,  93 => 22,  90 => 21,  83 => 20,  79 => 19,  72 => 17,  68 => 16,  65 => 15,  58 => 12,  54 => 10,  51 => 9,  47 => 8,  40 => 7,  38 => 6,  33 => 5,  31 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% if error_warning %} */
/* <div class="alert alert-danger">{{ error_warning }}</div>*/
/* {% endif %} */
/* {% if shipping_methods %}*/
/* <p>{{ text_shipping_method }}</p>*/
/* {% if shipping %}*/
/* <table class="table {% if shipping_title_display %}{{ 'table-striped' }}{% endif %}" style="margin-bottom: 0">*/
/*   {% for key,shipping_method in shipping_methods %}*/
/*   {% if shipping_title_display %}*/
/*   <tr>*/
/*     <td colspan="4">*/
/* 	  <b>{{ shipping_method.title }}</b>*/
/* 	</td>*/
/*   </tr>*/
/*   {% endif %} */
/*   {% if not shipping_method.error %} */
/*   {% for quote in shipping_method.quote %} */
/*   <tr>*/
/*     <td>{% if quote.code == code %} */
/*       <input type="radio" name="shipping_method" value="{{ quote.code }}" id="{{ quote.code }}" checked="checked" />*/
/*       {% else %}   */
/*       <input type="radio" name="shipping_method" value="{{ quote.code }}" id="{{ quote.code }}" />*/
/*       {% endif %}</td>*/
/*     <td><label for="{{ quote.code }}">{{ quote.title }}</label></td>*/
/*     <td style="padding:1px!important">*/
/*     {% if shipping_logo[key] and not shipping_title_display %} */
/* 	  <img style="max-width:100%" src="{{ shipping_logo[key] }}" alt="{{ shipping_method.title }}" title="{{ shipping_method.title }}" />*/
/* 	{% endif %}*/
/* 	</td>*/
/*     <td class="table-price-shipping" style="text-align:right;width: 22%;"><label for="{{ quote.code }}">{{ quote.text }}</label></td>*/
/*   </tr>*/
/*   {% endfor %}*/
/*   {% else %}   */
/*   <tr>*/
/*     <td colspan="4"><div class="error">{{ shipping_method.error }}</div></td>*/
/*   </tr>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </table>*/
/* {% else %}   */
/*   <select class="form-control" name="shipping_method">*/
/*     {% for shipping_method in shipping_methods %} */
/*       {% if not shipping_method.error %} */
/* 		{% for quote in shipping_method.quote %} */
/* 		  {% if quote.code == code %} */
/* 		    {% set code = quote.code %}*/
/* 			{% set exists = true %} */
/* 			<option value="{{ quote.code }}" selected="selected">*/
/* 		  {% else %}   */
/* 			<option value="{{ quote.code }}">*/
/* 		  {% endif %} */
/* 		  {{ quote.title }}&nbsp;&nbsp;({{ quote.text }})</option>*/
/* 		{% endfor %}*/
/* 	  {% endif %}*/
/*     {% endfor %}*/
/*   </select><br />*/
/* {% endif %}*/
/* */
/* {% endif %}*/
/* {% if delivery and (not delivery_delivery_time or delivery_delivery_time == '1' or delivery_delivery_time == '3') %} */
/* <hr>*/
/* <div{{ delivery_required ? ' class="required"' }}>*/
/*   <label class="control-label"><strong>{{ text_delivery }}</strong></label>*/
/*   {% if delivery_delivery_time == '1' %} */
/*   <input type="text" name="delivery_date" value="{{ delivery_date }}" class="form-control date" readonly="true" style="background:#ffffff;" />*/
/*   {% else %}  */
/*   <input type="text" name="delivery_date" value="{{ delivery_date }}" class="form-control date" readonly="true" style="background:#ffffff;" />*/
/*   {% endif %} */
/*   {% if delivery_delivery_time == '3' %}<br />*/
/*     <select name="delivery_time" class="form-control">{% for quickcheckout_delivery_time in delivery_times %}*/
/*     {% if quickcheckout_delivery_time[language_id] %} */
/*       {% if delivery_time == quickcheckout_delivery_time[language_id] %} */
/* 	  <option value="{{ quickcheckout_delivery_time[language_id] }}" selected="selected">{{ quickcheckout_delivery_time[language_id] }}</option>*/
/* 	  {% else %}   */
/* 	  <option value="{{ quickcheckout_delivery_time[language_id] }}">{{ quickcheckout_delivery_time[language_id] }}</option>*/
/*       {% endif %} */
/* 	{% endif %} */
/*     {% endfor %}</select>*/
/*   {% endif %}*/
/* </div>*/
/* {% elseif delivery_delivery_time and delivery_delivery_time == '2' %} */
/*   <input type="text" name="delivery_date" value="" class="hide" />*/
/*   <select name="delivery_time" class="hide"><option value=""></option></select>*/
/*   <strong>{{ text_estimated_delivery }}</strong><br />*/
/*   {{ estimated_delivery }}<br />*/
/*   {{ estimated_delivery_time }} */
/* {% else %}   */
/*   <input type="text" name="delivery_date" value="" class="hide" />*/
/*   <select name="delivery_time" class="hide"><option value=""></option></select>*/
/* {% endif %}*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#shipping-method input[name=\'shipping_method\'], #shipping-method select[name=\'shipping_method\']').on('change', function() {*/
/* 	{% if not logged %} */
/* 		if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 			var post_data = $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		} else {*/
/* 			var post_data = $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		}*/
/* */
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method/set',*/
/* 			type: 'post',*/
/* 			data: post_data,*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			success: function(html) {*/
/* 				{% if cart %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 				*/
/* 				{% if shipping_reload %} */
/* 				reloadPaymentMethod();*/
/* 				{% endif %} */
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	{% else %}   */
/* 		if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 			var url = 'index.php?route=extension/quickcheckout/shipping_method/set';*/
/* 			var post_data = $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		} else {*/
/* 			var url = 'index.php?route=extension/quickcheckout/shipping_method/set&address_id=' + $('#shipping-address select[name=\'address_id\']').val();*/
/* 			var post_data = $('#shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		}*/
/* 		*/
/* 		$.ajax({*/
/* 			url: url,*/
/* 			type: 'post',*/
/* 			data: post_data,*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			success: function(html) {*/
/* 				{% if cart %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 				*/
/* 				{% if shipping_reload %} */
/* 				if ($('#payment-address input[name=\'payment_address\']').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	{% endif %}*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('#shipping-method input[name=\'shipping_method\']:checked, #shipping-method select[name=\'shipping_method\']').trigger('change');*/
/* });*/
/* */
/* {% if delivery and delivery_delivery_time == '1' %} */
/* $(document).ready(function() {*/
/* 	$('input[name=\'delivery_date\']').datetimepicker({*/
/* 		format: 'DD.MM.YYYY HH:mm',*/
/* 		minDate: '{{ delivery_min }}',*/
/* 		maxDate: '{{ delivery_max }}',*/
/* 		disabledDates: [{{ delivery_unavailable }}],*/
/* 		enabledHours: [{{ hours }}],*/
/* 		ignoreReadonly: true,*/
/* 		locale: 'ru',*/
/* 		widgetPositioning: {*/
/*             horizontal: 'left',*/
/*             vertical: 'bottom'*/
/*         },*/
/* 		{% if delivery_days_of_week != '' %} */
/* 		daysOfWeekDisabled: [{{ delivery_days_of_week }}]*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* {% elseif delivery and (delivery_delivery_time == '3' or delivery_delivery_time == '0') %} */
/* 	$('input[name=\'delivery_date\']').datetimepicker({*/
/* 		format: 'DD.MM.YYYY',*/
/* 		minDate: '{{ delivery_min }}',*/
/* 		maxDate: '{{ delivery_max }}',*/
/* 		disabledDates: [{{ delivery_unavailable }}],*/
/* 		ignoreReadonly: true,*/
/* 		locale: 'ru',*/
/* 		widgetPositioning: {*/
/*             horizontal: 'left',*/
/*             vertical: 'bottom'*/
/*         },*/
/* 		{% if delivery_days_of_week != '' %} */
/* 		daysOfWeekDisabled: [{{ delivery_days_of_week }}]*/
/* 		{% endif %} */
/* 	});*/
/* {% endif %}*/
/* //--></script>*/
