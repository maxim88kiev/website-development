<?php

/* default/template/extension/quickcheckout/payment_method.twig */
class __TwigTemplate_fe0e4545c596f5581eb51ac1aeb05b822b6b05b495609dd62080e201e41f575e extends Twig_Template
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
        if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
            // line 5
            echo "<p>";
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</p>
";
            // line 6
            if ((isset($context["payment"]) ? $context["payment"] : null)) {
                // line 7
                echo "<table class=\"table\" style=\"margin-bottom:0\">
  ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    echo " 
  <tr>
    <td>";
                    // line 10
                    if (($this->getAttribute($context["payment_method"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                        echo " 
      <input type=\"radio\" name=\"payment_method\" value=\"";
                        // line 11
                        echo $this->getAttribute($context["payment_method"], "code", array());
                        echo "\" id=\"";
                        echo $this->getAttribute($context["payment_method"], "code", array());
                        echo "\" checked=\"checked\" />
      ";
                    } else {
                        // line 12
                        echo "   
      <input type=\"radio\" name=\"payment_method\" value=\"";
                        // line 13
                        echo $this->getAttribute($context["payment_method"], "code", array());
                        echo "\" id=\"";
                        echo $this->getAttribute($context["payment_method"], "code", array());
                        echo "\" />
      ";
                    }
                    // line 14
                    echo "</td>
    <td><label for=\"";
                    // line 15
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["payment_method"], "title", array());
                    echo "</label></td>
\t";
                    // line 16
                    if ($this->getAttribute((isset($context["payment_logo"]) ? $context["payment_logo"] : null), $this->getAttribute($context["payment_method"], "code", array()), array(), "array")) {
                        echo " 
\t<td style=\"padding:1px!important\"><img style=\"max-width: 45px;\" src=\"";
                        // line 17
                        echo $this->getAttribute((isset($context["payment_logo"]) ? $context["payment_logo"] : null), $this->getAttribute($context["payment_method"], "code", array()), array(), "array");
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["payment_method"], "title", array());
                        echo "\" /></td>
\t";
                    } else {
                        // line 19
                        echo "\t<td></td>
\t";
                    }
                    // line 20
                    echo " 
  </tr>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "</table>
";
            } else {
                // line 24
                echo "   
  <select name=\"payment_method\" class=\"form-control\">
  ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    echo " 
\t";
                    // line 27
                    if (($this->getAttribute($context["payment_method"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                        echo " 
      <option value=\"";
                        // line 28
                        echo $this->getAttribute($context["payment_method"], "code", array());
                        echo "\" selected=\"selected\">
      ";
                    } else {
                        // line 29
                        echo "   
      <option value=\"";
                        // line 30
                        echo $this->getAttribute($context["payment_method"], "code", array());
                        echo "\">
      ";
                    }
                    // line 31
                    echo " 
    ";
                    // line 32
                    echo $this->getAttribute($context["payment_method"], "title", array());
                    echo "</option>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "  </select><br />
";
            }
            // line 36
            echo "
";
        }
        // line 38
        if ((isset($context["survey_survey"]) ? $context["survey_survey"] : null)) {
            // line 39
            if ((isset($context["payment"]) ? $context["payment"] : null)) {
                // line 40
                echo "<hr>
";
            }
            // line 42
            echo "<div";
            echo (((isset($context["survey_required"]) ? $context["survey_required"] : null)) ? (" class=\"required\"") : (""));
            echo ">
  <label class=\"control-label\"><strong>";
            // line 43
            echo (isset($context["text_survey"]) ? $context["text_survey"] : null);
            echo "</strong></label>
  ";
            // line 44
            if ((isset($context["survey_type"]) ? $context["survey_type"] : null)) {
                echo " 
  <select name=\"survey\" class=\"form-control\">
    <option value=\"\"></option>
    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["survey_answers"]) ? $context["survey_answers"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["survey_answer"]) {
                    echo " 
    ";
                    // line 48
                    if ($this->getAttribute($context["survey_answer"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) {
                        echo " 
\t  ";
                        // line 49
                        if (((isset($context["survey"]) ? $context["survey"] : null) == $this->getAttribute($context["survey_answer"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array"))) {
                            echo " 
      <option value=\"";
                            // line 50
                            echo $this->getAttribute($context["survey_answer"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["survey_answer"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "</option>
      ";
                        } else {
                            // line 51
                            echo "   
\t  <option value=\"";
                            // line 52
                            echo $this->getAttribute($context["survey_answer"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "\">";
                            echo $this->getAttribute($context["survey_answer"], (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array");
                            echo "</option>
      ";
                        }
                        // line 53
                        echo " 
\t";
                    }
                    // line 54
                    echo " 
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey_answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "</select><br />
  ";
            } else {
                // line 56
                echo "   
  <textarea name=\"survey\" class=\"form-control\" rows=\"1\">";
                // line 57
                echo (isset($context["survey"]) ? $context["survey"] : null);
                echo "</textarea><br /><br />
  ";
            }
            // line 59
            echo "</div>
";
        } else {
            // line 60
            echo "   
<textarea name=\"survey\" class=\"hide\">";
            // line 61
            echo (isset($context["survey"]) ? $context["survey"] : null);
            echo "</textarea>
";
        }
        // line 63
        if ($this->getAttribute((isset($context["field_comment"]) ? $context["field_comment"] : null), "display", array())) {
            echo " 
<strong>";
            // line 64
            if ($this->getAttribute((isset($context["field_comment"]) ? $context["field_comment"] : null), "required", array())) {
                echo "<span class=\"required\">*</span> ";
            }
            echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
            echo "</strong>
<textarea name=\"comment\" rows=\"8\" class=\"form-control\" placeholder=\"";
            // line 65
            echo (($this->getAttribute((isset($context["field_comment"]) ? $context["field_comment"] : null), "placeholder", array())) ? ($this->getAttribute((isset($context["field_comment"]) ? $context["field_comment"] : null), "placeholder", array())) : (""));
            echo "\">";
            echo (((isset($context["comment"]) ? $context["comment"] : null)) ? ((isset($context["comment"]) ? $context["comment"] : null)) : ($this->getAttribute((isset($context["field_comment"]) ? $context["field_comment"] : null), "default", array())));
            echo "</textarea>
";
        } else {
            // line 66
            echo "   
<textarea name=\"comment\" class=\"hide\"></textarea>
";
        }
        // line 69
        echo "
<script type=\"text/javascript\"><!--
\$('#payment-method input[name=\\'payment_method\\'], #payment-method select[name=\\'payment_method\\']').on('change', function() {
\t";
        // line 72
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 73
            echo "\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/payment_method/set',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 80
            if (((isset($context["cart"]) ? $context["cart"] : null) && (isset($context["payment_reload"]) ? $context["payment_reload"] : null))) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 82
            echo " 
\t\t\t},
\t\t\t";
            // line 84
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 88
            echo " 
\t\t});
\t";
        } else {
            // line 90
            echo "   
\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/payment_method/set';
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea');
\t\t} else {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/payment_method/set&address_id=' + \$('#payment-address select[name=\\'address_id\\']').val();
\t\t\tvar post_data = \$('#payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea');
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
            // line 106
            if (((isset($context["cart"]) ? $context["cart"] : null) && (isset($context["payment_reload"]) ? $context["payment_reload"] : null))) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 108
            echo " 
\t\t\t},
\t\t\t";
            // line 110
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 114
            echo " 
\t\t});
\t";
        }
        // line 117
        echo "});

";
        // line 119
        if ((isset($context["payment_reload"]) ? $context["payment_reload"] : null)) {
            echo " 
\$(document).ready(function() {
\t\$('#payment-method input[name=\\'payment_method\\']:checked, #payment-method select[name=\\'payment_method\\']').trigger('change');
});
";
        }
        // line 123
        echo " 
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 123,  349 => 119,  345 => 117,  340 => 114,  332 => 110,  328 => 108,  322 => 106,  304 => 90,  299 => 88,  291 => 84,  287 => 82,  281 => 80,  272 => 73,  270 => 72,  265 => 69,  260 => 66,  253 => 65,  246 => 64,  242 => 63,  237 => 61,  234 => 60,  230 => 59,  225 => 57,  222 => 56,  218 => 55,  211 => 54,  207 => 53,  200 => 52,  197 => 51,  190 => 50,  186 => 49,  182 => 48,  176 => 47,  170 => 44,  166 => 43,  161 => 42,  157 => 40,  155 => 39,  153 => 38,  149 => 36,  145 => 34,  137 => 32,  134 => 31,  129 => 30,  126 => 29,  121 => 28,  117 => 27,  111 => 26,  107 => 24,  103 => 23,  95 => 20,  91 => 19,  84 => 17,  80 => 16,  74 => 15,  71 => 14,  64 => 13,  61 => 12,  54 => 11,  50 => 10,  43 => 8,  40 => 7,  38 => 6,  33 => 5,  31 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% if error_warning %} */
/* <div class="alert alert-danger">{{ error_warning }}</div>*/
/* {% endif %} */
/* {% if payment_methods %}*/
/* <p>{{ text_payment_method }}</p>*/
/* {% if payment %}*/
/* <table class="table" style="margin-bottom:0">*/
/*   {% for payment_method in payment_methods %} */
/*   <tr>*/
/*     <td>{% if payment_method.code == code %} */
/*       <input type="radio" name="payment_method" value="{{ payment_method.code }}" id="{{ payment_method.code }}" checked="checked" />*/
/*       {% else %}   */
/*       <input type="radio" name="payment_method" value="{{ payment_method.code }}" id="{{ payment_method.code }}" />*/
/*       {% endif %}</td>*/
/*     <td><label for="{{ payment_method.code }}">{{ payment_method.title }}</label></td>*/
/* 	{% if payment_logo[payment_method.code] %} */
/* 	<td style="padding:1px!important"><img style="max-width: 45px;" src="{{ payment_logo[payment_method.code] }}" alt="{{ payment_method.title }}" /></td>*/
/* 	{% else %}*/
/* 	<td></td>*/
/* 	{% endif %} */
/*   </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* {% else %}   */
/*   <select name="payment_method" class="form-control">*/
/*   {% for payment_method in payment_methods %} */
/* 	{% if payment_method.code == code %} */
/*       <option value="{{ payment_method.code }}" selected="selected">*/
/*       {% else %}   */
/*       <option value="{{ payment_method.code }}">*/
/*       {% endif %} */
/*     {{ payment_method.title }}</option>*/
/*   {% endfor %}*/
/*   </select><br />*/
/* {% endif %}*/
/* */
/* {% endif %}*/
/* {% if survey_survey %}*/
/* {% if payment %}*/
/* <hr>*/
/* {% endif %}*/
/* <div{{ survey_required ? ' class="required"' }}>*/
/*   <label class="control-label"><strong>{{ text_survey }}</strong></label>*/
/*   {% if survey_type %} */
/*   <select name="survey" class="form-control">*/
/*     <option value=""></option>*/
/*     {% for survey_answer in survey_answers %} */
/*     {% if survey_answer[language_id] %} */
/* 	  {% if survey == survey_answer[language_id] %} */
/*       <option value="{{ survey_answer[language_id] }}" selected="selected">{{ survey_answer[language_id] }}</option>*/
/*       {% else %}   */
/* 	  <option value="{{ survey_answer[language_id] }}">{{ survey_answer[language_id] }}</option>*/
/*       {% endif %} */
/* 	{% endif %} */
/*   {% endfor %}</select><br />*/
/*   {% else %}   */
/*   <textarea name="survey" class="form-control" rows="1">{{ survey }}</textarea><br /><br />*/
/*   {% endif %}*/
/* </div>*/
/* {% else %}   */
/* <textarea name="survey" class="hide">{{ survey }}</textarea>*/
/* {% endif %}*/
/* {% if field_comment.display %} */
/* <strong>{% if field_comment.required %}<span class="required">*</span> {% endif %}{{ text_comments }}</strong>*/
/* <textarea name="comment" rows="8" class="form-control" placeholder="{{ field_comment.placeholder ? field_comment.placeholder }}">{{ comment ? comment : field_comment.default }}</textarea>*/
/* {% else %}   */
/* <textarea name="comment" class="hide"></textarea>*/
/* {% endif %}*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#payment-method input[name=\'payment_method\'], #payment-method select[name=\'payment_method\']').on('change', function() {*/
/* 	{% if not logged %}*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/payment_method/set',*/
/* 			type: 'post',*/
/* 			data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			success: function(html) {*/
/* 				{% if cart and payment_reload %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	{% else %}   */
/* 		if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 			var url = 'index.php?route=extension/quickcheckout/payment_method/set';*/
/* 			var post_data = $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea');*/
/* 		} else {*/
/* 			var url = 'index.php?route=extension/quickcheckout/payment_method/set&address_id=' + $('#payment-address select[name=\'address_id\']').val();*/
/* 			var post_data = $('#payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea');*/
/* 		}*/
/* 		*/
/* 		$.ajax({*/
/* 			url: url,*/
/* 			type: 'post',*/
/* 			data: post_data,*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			success: function(html) {*/
/* 				{% if cart and payment_reload %} */
/* 				loadCart();*/
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
/* {% if payment_reload %} */
/* $(document).ready(function() {*/
/* 	$('#payment-method input[name=\'payment_method\']:checked, #payment-method select[name=\'payment_method\']').trigger('change');*/
/* });*/
/* {% endif %} */
/* //--></script>*/
