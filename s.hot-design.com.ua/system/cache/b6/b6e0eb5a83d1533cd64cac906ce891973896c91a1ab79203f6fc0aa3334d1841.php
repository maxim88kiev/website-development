<?php

/* default/template/extension/quickcheckout/guest.twig */
class __TwigTemplate_146057bdd92a74e618c1ce6f8dcf0fa5219197dda9dc01aa8f4bfd00c985b842 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
  ";
            // line 2
            if (($context["field"] == "country")) {
                // line 3
                echo "    ";
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    echo "  
\t<div class=\"col-sm-6";
                    // line 4
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 5
                    echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
                    echo "</label>
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-payment-country\">
\t  ";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t\t";
                        // line 8
                        if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                            echo " 
\t\t<option value=\"";
                            // line 9
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t\t";
                        } else {
                            // line 10
                            echo "   
\t\t<option value=\"";
                            // line 11
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t\t";
                        }
                        // line 13
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "\t  </select>
\t</div>
\t";
                } else {
                    // line 16
                    echo "   
\t<select name=\"country_id\" class=\"hide\">
\t";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t  ";
                        // line 19
                        if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                            echo " 
\t  <option value=\"";
                            // line 20
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t  ";
                        } else {
                            // line 21
                            echo "   
\t  <option value=\"";
                            // line 22
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t  ";
                        }
                        // line 24
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t</select>
\t";
                }
                // line 27
                echo "  ";
            } elseif (($context["field"] == "zone")) {
                echo " 
    ";
                // line 28
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    echo "  
\t<div class=\"col-sm-6";
                    // line 29
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 30
                    echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
                    echo "</label>
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-payment-zone\"></select>
\t</div>
\t
\t<div class=\"col-sm-12";
                    // line 34
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t<label class=\"control-label\">";
                    // line 35
                    echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
                    echo "</label>
\t<select name=\"city\" id=\"input-payment-city\" size=\"7\" class=\"form-control\">
\t";
                    // line 37
                    echo (isset($context["cities"]) ? $context["cities"] : null);
                    echo "
\t  </select>
\t</div>
\t
\t
\t
\t";
                } else {
                    // line 43
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 45
                echo " 
  ";
            } elseif ((            // line 46
$context["field"] == "customer_group")) {
                echo " 
    ";
                // line 47
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    echo "  
\t<div class=\"col-sm-6 required\"";
                    // line 48
                    echo (((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) <= 1)) ? (" style=\"display:none !important\"") : (""));
                    echo ">
\t  <label class=\"control-label\">";
                    // line 49
                    echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
                    echo "</label>
\t  <select name=\"customer_group_id\" class=\"form-control\" id=\"input-payment-customer-group\">
\t\t";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                        echo " 
\t\t<option value=\"";
                        // line 52
                        echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                        echo "\"";
                        echo ((($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo $this->getAttribute($context["customer_group"], "name", array());
                        echo "</option>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo " 
\t  </select>
\t</div>
\t";
                } else {
                    // line 56
                    echo "   
\t  <select name=\"customer_group_id\" class=\"hide\">
\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                        echo " 
\t\t<option value=\"";
                        // line 59
                        echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                        echo "\"";
                        echo ((($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo $this->getAttribute($context["customer_group"], "name", array());
                        echo "</option>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo " 
\t  </select>
\t";
                }
                // line 63
                echo "  ";
            } else {
                echo "   
    ";
                // line 64
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    echo "  
\t<div";
                    // line 65
                    echo ((($context["field"] == "postcode")) ? (" id=\"payment-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-payment-";
                    // line 66
                    echo twig_replace_filter($context["field"], array("_" => "-"));
                    echo "\">";
                    echo $this->getAttribute($context, ("entry_" . $context["field"]));
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 67
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "placeholder", array());
                    echo "\" value=\"";
                    echo (($this->getAttribute($context, $context["field"])) ? ($this->getAttribute($context, $context["field"])) : ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "default", array())));
                    echo "\" class=\"form-control\"  id=\"input-payment-";
                    echo twig_replace_filter($context["field"], array("_" => "-"));
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 69
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 70
                    echo $context["field"];
                    echo "\" value=\"";
                    echo (($this->getAttribute($context, $context["field"])) ? ($this->getAttribute($context, $context["field"])) : ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "default", array())));
                    echo "\" class=\"hide\" />
\t";
                }
                // line 72
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-payment\">
  ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 77
            if ((($this->getAttribute($context["custom_field"], "location", array()) == "account") || ($this->getAttribute($context["custom_field"], "location", array()) == "address"))) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 78
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\" id=\"payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t  <label class=\"control-label\" for=\"input-payment-custom-field";
                // line 79
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t  ";
                // line 80
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 81
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 82
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t  ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 84
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            echo " 
\t\t  <option value=\"";
                            // line 85
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t  ";
                        } else {
                            // line 86
                            echo "   
\t\t  <option value=\"";
                            // line 87
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t  ";
                        }
                        // line 89
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "\t\t</select>
\t  ";
                }
                // line 92
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    echo " 
\t\t";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 95
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 97
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 98
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        } else {
                            // line 99
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 101
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
\t\t\t  ";
                            // line 102
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        }
                        // line 104
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "\t  ";
                }
                // line 107
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    echo " 
\t\t";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 110
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 111
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 112
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 113
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        } else {
                            // line 114
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 116
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
\t\t\t  ";
                            // line 117
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        }
                        // line 118
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "\t  ";
                }
                // line 122
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 123
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 124
                echo " 
\t  ";
                // line 125
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
\t  ";
                }
                // line 127
                echo " 
\t  ";
                // line 128
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-payment-custom-field";
                    // line 130
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 131
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" />
\t  ";
                }
                // line 132
                echo " 
\t  ";
                // line 133
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 134
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 135
                echo " 
\t  ";
                // line 136
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 137
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 138
                echo " 
\t  ";
                // line 139
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 140
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 141
                echo " 
    </div>
  ";
            }
            // line 144
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "</div>
<div id=\"captcha-checkout\">
";
        // line 147
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
</div>
<div style=\"clear:both; ";
        // line 149
        if (( !$this->getAttribute((isset($context["shipping_checkbox"]) ? $context["shipping_checkbox"] : null), "display", array()) &&  !$this->getAttribute((isset($context["field_register"]) ? $context["field_register"] : null), "display", array()))) {
            echo "margin-bottom:15px;";
        }
        echo "\"></div>
<div ";
        // line 150
        if (($this->getAttribute((isset($context["shipping_checkbox"]) ? $context["shipping_checkbox"] : null), "display", array()) || $this->getAttribute((isset($context["field_register"]) ? $context["field_register"] : null), "display", array()))) {
            echo " style=\"clear:both;margin-top:20px;padding-top:15px;border-top:1px solid #DDDDDD;\" ";
        }
        echo ">
  ";
        // line 151
        if ($this->getAttribute((isset($context["field_register"]) ? $context["field_register"] : null), "display", array())) {
            echo " 
\t";
            // line 152
            if (( !(isset($context["guest_checkout"]) ? $context["guest_checkout"] : null) || $this->getAttribute((isset($context["field_register"]) ? $context["field_register"] : null), "required", array()))) {
                echo " 
\t  <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\" class=\"hide\" checked=\"checked\" />
\t";
            } else {
                // line 155
                echo "\t  <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\"";
                echo (((isset($context["create_account"]) ? $context["create_account"] : null)) ? (" checked=\"checked\"") : (""));
                echo " />
\t  <label for=\"create\">";
                // line 156
                echo (isset($context["text_create_account"]) ? $context["text_create_account"] : null);
                echo "</label><br />
\t";
            }
            // line 157
            echo " 
\t<div id=\"create_account\">";
            // line 158
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "</div>
  ";
        } else {
            // line 160
            echo "    <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\" class=\"hide\" />
  ";
        }
        // line 162
        echo "  ";
        if ($this->getAttribute((isset($context["shipping_checkbox"]) ? $context["shipping_checkbox"] : null), "display", array())) {
            echo " 
    <label for=\"shipping\"><input type=\"checkbox\" name=\"shipping_address\" value=\"1\" id=\"shipping\"";
            // line 163
            echo (((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) ? (" checked=\"checked\"") : (""));
            echo " /> ";
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "</label>
  ";
        } else {
            // line 164
            echo "   
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" id=\"shipping\" checked=\"checked\" class=\"hide\" />
  ";
        }
        // line 167
        echo "</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t// Sort the custom fields
\t\$('#custom-field-payment .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#payment-address select[name=\\'customer_group_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#payment-address .custom-field').hide();
\t\t\t\t\$('#payment-address .custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
        // line 206
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\t\t\t\t\$('#shipping-address .custom-field').hide();
\t\t\t\t\$('#shipping-address .custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
        }
        // line 221
        echo " 
\t\t\t},
\t\t\t";
        // line 223
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 227
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'customer_group_id\\']').trigger('change');

\t\$('#payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);
\t\t
\t\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').attr('value', json['file']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});

\t\$('#payment-address select[name=\\'country_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#payment-address select[name=\\'country_id\\']').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#payment-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#payment-postcode-required').removeClass('required');
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar html = '';
\t\t\t\t
\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 305
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 312
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#payment-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 317
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 321
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'country_id\\']').trigger('change');

\t";
        // line 327
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\t\t// Guest Shipping Form
\t\t\$('#payment-address input[name=\\'shipping_address\\']').on('change', function() {
\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\$('#shipping-address').slideUp('slow');

\t\t\t\t";
            // line 333
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\treloadShippingMethod('payment');
\t\t\t\t";
            }
            // line 335
            echo " 
\t\t\t} else {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping&customer_group_id=' + \$('#payment-address select[name=\\'customer_group_id\\']').val(),
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcache: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t// Nothing at the moment
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#shipping-address .quickcheckout-content').html(html);
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#shipping-address').slideDown('slow');
\t\t\t\t\t},
\t\t\t\t\t";
            // line 349
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t\t";
            }
            // line 353
            echo " 
\t\t\t\t});
\t\t\t}
\t\t});
\t\t
\t\t";
            // line 358
            if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
                echo " 
\t\t\$('#shipping-address').hide();
\t\t";
            } else {
                // line 360
                echo "   
\t\t\$('#payment-address input[name=\\'shipping_address\\']').trigger('change');
\t\t";
            }
            // line 362
            echo " 
\t";
        }
        // line 364
        echo "
\t\$('#payment-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadPaymentMethod();
\t\t
\t\t";
        // line 368
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\treloadShippingMethod('payment');
\t\t}
\t\t";
        }
        // line 372
        echo " 
\t});

\t// Create account
\t\$('#payment-address input[name=\\'create_account\\']').on('change', function() {
\t\tif (\$('#payment-address input[name=\\'create_account\\']:checked').val()) {
\t\t\t\$('#create_account').slideDown('slow');
\t\t} else {
\t\t\t\$('#create_account').slideUp('slow');
\t\t}
\t});

\t";
        // line 384
        if ((((isset($context["create_account"]) ? $context["create_account"] : null) ||  !(isset($context["guest_checkout"]) ? $context["guest_checkout"] : null)) || $this->getAttribute((isset($context["field_register"]) ? $context["field_register"] : null), "required", array()))) {
            echo " 
\t\$('#create_account').show();
\t";
        } else {
            // line 386
            echo "   
\t\$('#create_account').hide();
\t";
        }
        // line 389
        echo "});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  969 => 389,  964 => 386,  958 => 384,  944 => 372,  936 => 368,  930 => 364,  926 => 362,  921 => 360,  915 => 358,  908 => 353,  900 => 349,  884 => 335,  878 => 333,  869 => 327,  861 => 321,  853 => 317,  845 => 312,  835 => 305,  755 => 227,  747 => 223,  743 => 221,  724 => 206,  683 => 167,  678 => 164,  671 => 163,  666 => 162,  662 => 160,  657 => 158,  654 => 157,  649 => 156,  644 => 155,  638 => 152,  634 => 151,  628 => 150,  622 => 149,  617 => 147,  613 => 145,  607 => 144,  602 => 141,  589 => 140,  585 => 139,  582 => 138,  569 => 137,  565 => 136,  562 => 135,  549 => 134,  545 => 133,  542 => 132,  533 => 131,  525 => 130,  520 => 128,  517 => 127,  504 => 126,  500 => 125,  497 => 124,  484 => 123,  479 => 122,  476 => 121,  468 => 118,  463 => 117,  455 => 116,  451 => 114,  446 => 113,  438 => 112,  435 => 111,  433 => 110,  426 => 108,  421 => 107,  418 => 106,  411 => 104,  406 => 102,  398 => 101,  394 => 99,  389 => 98,  381 => 97,  376 => 95,  369 => 93,  364 => 92,  360 => 90,  354 => 89,  347 => 87,  344 => 86,  337 => 85,  333 => 84,  327 => 83,  323 => 82,  315 => 81,  311 => 80,  305 => 79,  299 => 78,  295 => 77,  289 => 76,  285 => 74,  278 => 72,  271 => 70,  268 => 69,  256 => 67,  250 => 66,  244 => 65,  240 => 64,  235 => 63,  230 => 60,  218 => 59,  212 => 58,  208 => 56,  202 => 53,  190 => 52,  184 => 51,  179 => 49,  175 => 48,  171 => 47,  167 => 46,  164 => 45,  159 => 43,  149 => 37,  144 => 35,  140 => 34,  133 => 30,  129 => 29,  125 => 28,  120 => 27,  116 => 25,  110 => 24,  103 => 22,  100 => 21,  93 => 20,  89 => 19,  83 => 18,  79 => 16,  74 => 14,  68 => 13,  61 => 11,  58 => 10,  51 => 9,  47 => 8,  41 => 7,  36 => 5,  32 => 4,  27 => 3,  25 => 2,  19 => 1,);
    }
}
/* {% for field in fields %} */
/*   {% if field == 'country' %}*/
/*     {% if attribute(_context, 'field_' ~ field).display %}  */
/* 	<div class="col-sm-6{{ attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	  <label class="control-label">{{ entry_country }}</label>*/
/* 	  <select name="country_id" class="form-control" id="input-payment-country">*/
/* 	  {% for country in countries %} */
/* 		{% if country.country_id == country_id %} */
/* 		<option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* 		{% else %}   */
/* 		<option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 		{% endif %}*/
/* 	  {% endfor %}*/
/* 	  </select>*/
/* 	</div>*/
/* 	{% else %}   */
/* 	<select name="country_id" class="hide">*/
/* 	{% for country in countries %} */
/* 	  {% if country.country_id == country_id %} */
/* 	  <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* 	  {% else %}   */
/* 	  <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* 	  {% endif %}*/
/* 	{% endfor %}*/
/* 	</select>*/
/* 	{% endif %}*/
/*   {% elseif  field == 'zone' %} */
/*     {% if attribute(_context, 'field_' ~ field).display %}  */
/* 	<div class="col-sm-6{{ attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	  <label class="control-label">{{ entry_zone }}</label>*/
/* 	  <select name="zone_id" class="form-control" id="input-payment-zone"></select>*/
/* 	</div>*/
/* 	*/
/* 	<div class="col-sm-12{{ attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	<label class="control-label">{{ entry_city }}</label>*/
/* 	<select name="city" id="input-payment-city" size="7" class="form-control">*/
/* 	{{ cities }}*/
/* 	  </select>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	{% else %}   */
/* 	  <select name="zone_id" class="hide"></select>*/
/* 	{% endif %} */
/*   {% elseif field == 'customer_group' %} */
/*     {% if attribute(_context, 'field_' ~ field).display %}  */
/* 	<div class="col-sm-6 required"{{ customer_groups|length <= 1 ? ' style="display:none !important"' }}>*/
/* 	  <label class="control-label">{{ entry_customer_group }}</label>*/
/* 	  <select name="customer_group_id" class="form-control" id="input-payment-customer-group">*/
/* 		{% for customer_group in customer_groups %} */
/* 		<option value="{{ customer_group.customer_group_id }}"{{ customer_group.customer_group_id == customer_group_id ? ' selected="selected"' }}>{{ customer_group.name }}</option>*/
/* 		{% endfor %} */
/* 	  </select>*/
/* 	</div>*/
/* 	{% else %}   */
/* 	  <select name="customer_group_id" class="hide">*/
/* 		{% for customer_group in customer_groups %} */
/* 		<option value="{{ customer_group.customer_group_id }}"{{ customer_group.customer_group_id == customer_group_id ? ' selected="selected"' }}>{{ customer_group.name }}</option>*/
/* 		{% endfor %} */
/* 	  </select>*/
/* 	{% endif %}*/
/*   {% else %}   */
/*     {% if attribute(_context, 'field_' ~ field).display %}  */
/* 	<div{{ field == 'postcode' ? ' id="payment-postcode-required"' }} class="col-sm-6{{attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	  <label class="control-label" for="input-payment-{{ field|replace({'_' : '-'}) }}">{{ attribute(_context, 'entry_' ~ field) }}</label>*/
/* 	  <input type="text" name="{{ field }}" placeholder="{{ attribute(_context, 'field_' ~ field).placeholder }}" value="{{ attribute(_context, field) ? attribute(_context, field) : attribute(_context, 'field_' ~ field).default }}" class="form-control"  id="input-payment-{{ field|replace({'_' : '-'}) }}" />*/
/* 	</div>*/
/* 	{% else %}   */
/* 	<input type="text" name="{{ field }}" value="{{ attribute(_context, field) ? attribute(_context, field) : attribute(_context, 'field_' ~ field).default }}" class="hide" />*/
/* 	{% endif %}*/
/*   {% endif %}*/
/* {% endfor %}*/
/* <!-- CUSTOM FIELDS -->*/
/* <div id="custom-field-payment">*/
/*   {% for custom_field in custom_fields %} */
/*   {% if custom_field.location == 'account' or custom_field.location == 'address' %} */
/* 	<div class="col-sm-6 custom-field" data-sort="{{ custom_field.sort_order }}" id="payment-custom-field{{ custom_field.custom_field_id }}">*/
/* 	  <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 	  {% if custom_field.type == 'select' %} */
/* 		<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/* 		  <option value="">{{ text_select }}</option>*/
/* 		  {% for custom_field_value in custom_field.custom_field_value %} */
/* 		  {% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == guest_custom_field[custom_field.custom_field_id] %} */
/* 		  <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* 		  {% else %}   */
/* 		  <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* 		  {% endif %}*/
/* 		  {% endfor %}*/
/* 		</select>*/
/* 	  {% endif %}*/
/* 	  {% if custom_field.type == 'radio' %} */
/* 		{% for custom_field_value in custom_field.custom_field_value %} */
/* 		  <div class="radio">*/
/* 			{% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == guest_custom_field[custom_field.custom_field_id] %} */
/* 			<label>*/
/* 			  <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/* 			  {{ custom_field_value.name }}</label>*/
/* 			{% else %}   */
/* 			<label>*/
/* 			  <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/* 			  {{ custom_field_value.name }}</label>*/
/* 			{% endif %}*/
/* 		  </div>*/
/* 		{% endfor %}*/
/* 	  {% endif %}*/
/* 	  {% if custom_field.type == 'checkbox' %} */
/* 		{% for custom_field_value in custom_field.custom_field_value %} */
/* 		  <div class="checkbox">*/
/* 			{% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in guest_custom_field[custom_field.custom_field_id] %}*/
/* 			<label>*/
/* 			  <input type="checkbox" name="custom_field[{{ custom_field.location}}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/* 			  {{ custom_field_value.name }}</label>*/
/* 			{% else %}   */
/* 			<label>*/
/* 			  <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/* 			  {{ custom_field_value.name }}</label>*/
/* 			{% endif %} */
/* 		  </div>*/
/* 		{% endfor %}*/
/* 	  {% endif %}*/
/* 	  {% if custom_field.type == 'text' %} */
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'textarea' %} */
/* 		<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'file' %} */
/* 		<br />*/
/* 		<button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i>{{ button_upload }}</button>*/
/* 		<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] }}" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'date' %} */
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control date" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'time' %} */
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control time" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'datetime' %} */
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control datetime" />*/
/* 	  {% endif %} */
/*     </div>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* <div id="captcha-checkout">*/
/* {{ captcha }}*/
/* </div>*/
/* <div style="clear:both; {% if not shipping_checkbox.display and not field_register.display %}{{ 'margin-bottom:15px;' }}{% endif %}"></div>*/
/* <div {% if shipping_checkbox.display or field_register.display %} style="clear:both;margin-top:20px;padding-top:15px;border-top:1px solid #DDDDDD;" {% endif %}>*/
/*   {% if field_register.display %} */
/* 	{% if not guest_checkout or field_register.required %} */
/* 	  <input type="checkbox" name="create_account" value="1" id="create" class="hide" checked="checked" />*/
/* 	{% else %}*/
/* 	  <input type="checkbox" name="create_account" value="1" id="create"{{ create_account ? ' checked="checked"' }} />*/
/* 	  <label for="create">{{ text_create_account }}</label><br />*/
/* 	{% endif %} */
/* 	<div id="create_account">{{ register }}</div>*/
/*   {% else %}*/
/*     <input type="checkbox" name="create_account" value="1" id="create" class="hide" />*/
/*   {% endif %}*/
/*   {% if shipping_checkbox.display %} */
/*     <label for="shipping"><input type="checkbox" name="shipping_address" value="1" id="shipping"{{ shipping_address ? ' checked="checked"' }} /> {{ entry_shipping }}</label>*/
/*   {% else %}   */
/*     <input type="checkbox" name="shipping_address" value="1" id="shipping" checked="checked" class="hide" />*/
/*   {% endif %}*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* $(document).ready(function() {*/
/* 	// Sort the custom fields*/
/* 	$('#custom-field-payment .custom-field[data-sort]').detach().each(function() {*/
/* 		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#payment-address .col-sm-6').length) {*/
/* 			$('#payment-address .col-sm-6').eq($(this).attr('data-sort')).before(this);*/
/* 		} */
/* 		*/
/* 		if ($(this).attr('data-sort') > $('#payment-address .col-sm-6').length) {*/
/* 			$('#payment-address .col-sm-6:last').after(this);*/
/* 		}*/
/* 			*/
/* 		if ($(this).attr('data-sort') < -$('#payment-address .col-sm-6').length) {*/
/* 			$('#payment-address .col-sm-6:first').before(this);*/
/* 		}*/
/* 	});*/
/* */
/* 	$('#payment-address select[name=\'customer_group_id\']').on('change', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('#payment-address .custom-field').hide();*/
/* 				$('#payment-address .custom-field').removeClass('required');*/
/* */
/* 				for (i = 0; i < json.length; i++) {*/
/* 					custom_field = json[i];*/
/* */
/* 					$('#payment-custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 					if (custom_field['required']) {*/
/* 						$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 					} else {*/
/* 						$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');*/
/* 					}*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				$('#shipping-address .custom-field').hide();*/
/* 				$('#shipping-address .custom-field').removeClass('required');*/
/* */
/* 				for (i = 0; i < json.length; i++) {*/
/* 					custom_field = json[i];*/
/* */
/* 					$('#shipping-custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 					if (custom_field['required']) {*/
/* 						$('#shipping-custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 					} else {*/
/* 						$('#shipping-custom-field' + custom_field['custom_field_id']).removeClass('required');*/
/* 					}*/
/* 				}*/
/* 				{% endif %} */
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* */
/* 	$('#payment-address select[name=\'customer_group_id\']').trigger('change');*/
/* */
/* 	$('#payment-address button[id^=\'button-payment-custom-field\']').on('click', function() {*/
/* 		var node = this;*/
/* */
/* 		$('#form-upload').remove();*/
/* */
/* 		$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 		$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 		timer = setInterval(function() {*/
/* 			if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 				clearInterval(timer);*/
/* 			*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=tool/upload',*/
/* 					type: 'post',*/
/* 					dataType: 'json',*/
/* 					data: new FormData($('#form-upload')[0]),*/
/* 					cache: false,*/
/* 					contentType: false,*/
/* 					processData: false,*/
/* 					beforeSend: function() {*/
/* 						$(node).button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 						$(node).button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 						$('.text-danger').remove();*/
/* 						*/
/* 						if (json['error']) {*/
/* 							$(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 						}*/
/* 		*/
/* 						if (json['success']) {*/
/* 							alert(json['success']);*/
/* 		*/
/* 							$(node).parent().find('input[name^=\'custom_field\']').attr('value', json['file']);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		}, 500);*/
/* 	});*/
/* */
/* 	$('#payment-address select[name=\'country_id\']').on('change', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				$('#payment-address select[name=\'country_id\']').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('.fa-spinner').remove();*/
/* 			},			*/
/* 			success: function(json) {*/
/* 				if (json['postcode_required'] == '1') {*/
/* 					$('#payment-postcode-required').addClass('required');*/
/* 				} else {*/
/* 					$('#payment-postcode-required').removeClass('required');*/
/* 				}*/
/* 				*/
/* 				var html = '';*/
/* 				*/
/* 				if (json['zone'] != '') {*/
/* 					for (i = 0; i < json['zone'].length; i++) {*/
/* 						html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* 						*/
/* 						if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 							html += ' selected="selected"';*/
/* 						}*/
/* 		*/
/* 						html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 					}*/
/* 				} else {*/
/* 					html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 				}*/
/* 				*/
/* 				$('#payment-address select[name=\'zone_id\']').html(html).trigger('change');*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* */
/* 	$('#payment-address select[name=\'country_id\']').trigger('change');*/
/* */
/* 	{% if shipping_required %} */
/* 		// Guest Shipping Form*/
/* 		$('#payment-address input[name=\'shipping_address\']').on('change', function() {*/
/* 			if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 				$('#shipping-address').slideUp('slow');*/
/* */
/* 				{% if shipping_required %} */
/* 				reloadShippingMethod('payment');*/
/* 				{% endif %} */
/* 			} else {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/quickcheckout/guest_shipping&customer_group_id=' + $('#payment-address select[name=\'customer_group_id\']').val(),*/
/* 					dataType: 'html',*/
/* 					cache: false,*/
/* 					beforeSend: function() {*/
/* 						// Nothing at the moment*/
/* 					},*/
/* 					success: function(html) {*/
/* 						$('#shipping-address .quickcheckout-content').html(html);*/
/* 						*/
/* 						$('#shipping-address').slideDown('slow');*/
/* 					},*/
/* 					{% if debug %} */
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 					{% endif %} */
/* 				});*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		{% if shipping_address %} */
/* 		$('#shipping-address').hide();*/
/* 		{% else %}   */
/* 		$('#payment-address input[name=\'shipping_address\']').trigger('change');*/
/* 		{% endif %} */
/* 	{% endif %}*/
/* */
/* 	$('#payment-address select[name=\'zone_id\']').on('change', function() {*/
/* 		reloadPaymentMethod();*/
/* 		*/
/* 		{% if shipping_required %} */
/* 		if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 			reloadShippingMethod('payment');*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* */
/* 	// Create account*/
/* 	$('#payment-address input[name=\'create_account\']').on('change', function() {*/
/* 		if ($('#payment-address input[name=\'create_account\']:checked').val()) {*/
/* 			$('#create_account').slideDown('slow');*/
/* 		} else {*/
/* 			$('#create_account').slideUp('slow');*/
/* 		}*/
/* 	});*/
/* */
/* 	{% if create_account or not guest_checkout or field_register.required %} */
/* 	$('#create_account').show();*/
/* 	{% else %}   */
/* 	$('#create_account').hide();*/
/* 	{% endif %}*/
/* });*/
/* //--></script>*/
