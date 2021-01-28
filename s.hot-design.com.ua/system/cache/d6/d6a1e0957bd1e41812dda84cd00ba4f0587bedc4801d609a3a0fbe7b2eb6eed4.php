<?php

/* default/template/extension/quickcheckout/payment_address.twig */
class __TwigTemplate_14787dc2fc1ea068a33716a77d84a649df131fab59ed767c6b00bf6e8d1dcea5 extends Twig_Template
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
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            echo " 
<div class=\"radio\">
  <label><input type=\"radio\" name=\"payment_address\" value=\"existing\" id=\"payment-address-existing\" />
  ";
            // line 4
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "</label>
</div>
<div id=\"payment-existing\">
  <select name=\"address_id\" class=\"form-control\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                echo " 
    ";
                // line 9
                if (($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null))) {
                    echo " 
    <option value=\"";
                    // line 10
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "postcode", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
    ";
                } else {
                    // line 11
                    echo "   
    <option value=\"";
                    // line 12
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "postcode", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo " , ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
    ";
                }
                // line 13
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </select>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"payment_address\" value=\"new\" id=\"payment-address-new\"  checked=\"checked\" />
  ";
            // line 19
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
</div>
";
        } else {
            // line 21
            echo "   
  <input type=\"radio\" name=\"payment_address\" value=\"new\" id=\"payment-address-new\" class=\"hide\" checked=\"checked\" />
";
        }
        // line 24
        echo "<div id=\"payment-new\" style=\"display: block<!--";
        echo (((isset($context["addresses"]) ? $context["addresses"] : null)) ? ("none") : ("block"));
        echo "-->;\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
  ";
            // line 26
            if (($context["field"] == "country")) {
                echo " 
    ";
                // line 27
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    // line 28
                    echo "\t<div class=\"col-sm-6";
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 29
                    echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
                    echo "</label>
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-payment-country\">
\t  ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t\t";
                        // line 32
                        if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                            echo " 
\t\t<option value=\"";
                            // line 33
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t\t";
                        } else {
                            // line 34
                            echo "   
\t\t<option value=\"";
                            // line 35
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t\t";
                        }
                        // line 37
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "\t  </select>
\t</div>
\t";
                } else {
                    // line 40
                    echo "   
\t<select name=\"country_id\" class=\"hide\">
\t";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t  ";
                        // line 43
                        if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                            echo " 
\t  <option value=\"";
                            // line 44
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t  ";
                        } else {
                            // line 45
                            echo "   
\t  <option value=\"";
                            // line 46
                            echo $this->getAttribute($context["country"], "country_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["country"], "name", array());
                            echo "</option>
\t  ";
                        }
                        // line 48
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "\t</select>
\t";
                }
                // line 51
                echo "  ";
            } elseif (($context["field"] == "zone")) {
                // line 52
                echo "    ";
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    // line 53
                    echo "\t<div class=\"col-sm-6";
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 54
                    echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
                    echo "</label>
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-payment-zone\"></select>
\t</div>
\t
\t<div class=\"col-sm-12";
                    // line 58
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t<label class=\"control-label\">";
                    // line 59
                    echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
                    echo "</label>
\t<select name=\"city\" id=\"input-payment-city\" size=\"7\" class=\"form-control\">
\t";
                    // line 61
                    echo (isset($context["cities"]) ? $context["cities"] : null);
                    echo "
\t  </select>
\t</div>
\t
\t
\t";
                } else {
                    // line 66
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 69
                echo "  ";
            } else {
                echo "   
    ";
                // line 70
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    // line 71
                    echo "\t<div";
                    echo ((($context["field"] == "postcode")) ? (" id=\"payment-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-payment-";
                    // line 72
                    echo twig_replace_filter($context["field"], array("_" => "-"));
                    echo "\">";
                    echo $this->getAttribute($context, ("entry_" . $context["field"]));
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 73
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "placeholder", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "default", array());
                    echo "\" class=\"form-control\"  id=\"input-payment-";
                    echo twig_replace_filter($context["field"], array("_" => "-"));
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 75
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 76
                    echo $context["field"];
                    echo "\" value=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "default", array());
                    echo "\" class=\"hide\" />
\t";
                }
                // line 77
                echo " 
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-payment\">
  ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 83
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 84
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\" id=\"payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t  <label class=\"control-label\" for=\"input-payment-custom-field";
                // line 85
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t  ";
                // line 86
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 87
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 88
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t  ";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 90
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            echo " 
\t\t  <option value=\"";
                            // line 91
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t  ";
                        } else {
                            // line 92
                            echo "   
\t\t  <option value=\"";
                            // line 93
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t  ";
                        }
                        // line 95
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "\t\t</select>
\t  ";
                }
                // line 98
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    echo " 
\t\t";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 101
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 103
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 104
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        } else {
                            // line 105
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 107
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
\t\t\t  ";
                            // line 108
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        }
                        // line 110
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "\t  ";
                }
                // line 113
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    echo " 
\t\t";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 116
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 117
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 118
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 119
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        } else {
                            // line 120
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 122
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
\t\t\t  ";
                            // line 123
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        }
                        // line 124
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "\t  ";
                }
                // line 128
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 129
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
                // line 130
                echo " 
\t  ";
                // line 131
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 132
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
                // line 133
                echo " 
\t  ";
                // line 134
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-payment-custom-field";
                    // line 136
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 137
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" />
\t  ";
                }
                // line 138
                echo " 
\t  ";
                // line 139
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
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
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 141
                echo " 
\t  ";
                // line 142
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 143
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
                // line 144
                echo " 
\t  ";
                // line 145
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 146
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
                // line 147
                echo " 
    </div>
  ";
            }
            // line 150
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "</div>
</div>

<script type=\"text/javascript\"><!--
// Payment address form function
\$(document).ready(function() {
\t\$('#payment-address input[name=\\'payment_address\\']').on('change', function() {
\t\tif (this.value == 'new') {
\t\t\t\$('#payment-existing').slideUp();
\t\t\t\$('#payment-new').slideDown();

\t\t\tsetTimeout(function() {
\t\t\t\t\$('#payment-address select[name=\\'country_id\\']').trigger('change');
\t\t\t}, 200);
\t\t} else {
\t\t\t\$('#payment-existing').slideDown();
\t\t\t\$('#payment-new').slideUp();
\t\t\t
\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t}
\t});
\t
\t\$('#payment-address input[name=\\'payment_address\\']:checked').trigger('change');

\t// Sort the custom fields
\t\$('#custom-field-payment .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#payment-new .col-sm-6').length) {
\t\t\t\$('#payment-new .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#payment-new .col-sm-6').length) {
\t\t\t\$('#payment-new .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#payment-new .col-sm-6').length) {
\t\t\t\$('#payment-new .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t\t
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

\t\$('#payment-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadPaymentMethod();
\t\treloadShippingMethod('payment');
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
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#payment-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#payment-postcode-required').removeClass('required');
\t\t\t\t}

\t\t\t\thtml = '';

\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 267
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 274
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t\$('#payment-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 279
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 283
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'address_id\\']').on('change', function() {
\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\treloadPaymentMethod();
\t\t} else {
\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 283,  768 => 279,  760 => 274,  750 => 267,  632 => 151,  626 => 150,  621 => 147,  608 => 146,  604 => 145,  601 => 144,  588 => 143,  584 => 142,  581 => 141,  568 => 140,  564 => 139,  561 => 138,  552 => 137,  544 => 136,  539 => 134,  536 => 133,  523 => 132,  519 => 131,  516 => 130,  503 => 129,  498 => 128,  495 => 127,  487 => 124,  482 => 123,  474 => 122,  470 => 120,  465 => 119,  457 => 118,  454 => 117,  452 => 116,  445 => 114,  440 => 113,  437 => 112,  430 => 110,  425 => 108,  417 => 107,  413 => 105,  408 => 104,  400 => 103,  395 => 101,  388 => 99,  383 => 98,  379 => 96,  373 => 95,  366 => 93,  363 => 92,  356 => 91,  352 => 90,  346 => 89,  342 => 88,  334 => 87,  330 => 86,  324 => 85,  318 => 84,  314 => 83,  308 => 82,  304 => 80,  296 => 77,  289 => 76,  286 => 75,  274 => 73,  268 => 72,  261 => 71,  259 => 70,  254 => 69,  249 => 66,  240 => 61,  235 => 59,  231 => 58,  224 => 54,  219 => 53,  216 => 52,  213 => 51,  209 => 49,  203 => 48,  196 => 46,  193 => 45,  186 => 44,  182 => 43,  176 => 42,  172 => 40,  167 => 38,  161 => 37,  154 => 35,  151 => 34,  144 => 33,  140 => 32,  134 => 31,  129 => 29,  124 => 28,  122 => 27,  118 => 26,  112 => 25,  107 => 24,  102 => 21,  96 => 19,  90 => 15,  83 => 13,  64 => 12,  61 => 11,  42 => 10,  38 => 9,  32 => 8,  25 => 4,  19 => 1,);
    }
}
/* {% if addresses %} */
/* <div class="radio">*/
/*   <label><input type="radio" name="payment_address" value="existing" id="payment-address-existing" />*/
/*   {{ text_address_existing }}</label>*/
/* </div>*/
/* <div id="payment-existing">*/
/*   <select name="address_id" class="form-control">*/
/*     {% for address in addresses %} */
/*     {% if address.address_id == address_id %} */
/*     <option value="{{ address.address_id }}" selected="selected">{{ address.firstname }} {{ address.lastname }} , {{ address.address_1 }} , {{ address.city }} , {{ address.postcode }} , {{ address.zone }} , {{ address.country }}</option>*/
/*     {% else %}   */
/*     <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }} , {{ address.address_1 }} , {{ address.city }} , {{ address.postcode }} , {{ address.zone }} , {{ address.country }}</option>*/
/*     {% endif %} */
/*     {% endfor %}*/
/*   </select>*/
/* </div>*/
/* <div class="radio">*/
/*   <label><input type="radio" name="payment_address" value="new" id="payment-address-new"  checked="checked" />*/
/*   {{ text_address_new }}</label>*/
/* </div>*/
/* {% else %}   */
/*   <input type="radio" name="payment_address" value="new" id="payment-address-new" class="hide" checked="checked" />*/
/* {% endif %}*/
/* <div id="payment-new" style="display: block<!--{{ addresses ? 'none' : 'block' }}-->;">*/
/* {% for field in fields %} */
/*   {% if field == 'country' %} */
/*     {% if attribute(_context, 'field_' ~ field).display %}*/
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
/*   {% elseif field == 'zone' %}*/
/*     {% if attribute(_context, 'field_' ~ field).display %}*/
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
/* 	{% else %}   */
/* 	  <select name="zone_id" class="hide"></select>*/
/* 	{% endif %}*/
/*   {% else %}   */
/*     {% if attribute(_context, 'field_' ~ field).display %}*/
/* 	<div{{ field == 'postcode' ? ' id="payment-postcode-required"' }} class="col-sm-6{{ attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	  <label class="control-label" for="input-payment-{{ field|replace({'_' : '-'}) }}">{{ attribute(_context, 'entry_' ~ field) }}</label>*/
/* 	  <input type="text" name="{{ field }}" placeholder="{{ attribute(_context, 'field_' ~ field).placeholder }}" value="{{ attribute(_context, 'field_' ~ field).default }}" class="form-control"  id="input-payment-{{ field|replace({'_' : '-'}) }}" />*/
/* 	</div>*/
/* 	{% else %}   */
/* 	<input type="text" name="{{ field }}" value="{{ attribute(_context, 'field_' ~ field).default }}" class="hide" />*/
/* 	{% endif %} */
/*   {% endif %}*/
/* {% endfor %}*/
/* <!-- CUSTOM FIELDS -->*/
/* <div id="custom-field-payment">*/
/*   {% for custom_field in custom_fields %} */
/*   {% if custom_field.location == 'address' %} */
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
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* // Payment address form function*/
/* $(document).ready(function() {*/
/* 	$('#payment-address input[name=\'payment_address\']').on('change', function() {*/
/* 		if (this.value == 'new') {*/
/* 			$('#payment-existing').slideUp();*/
/* 			$('#payment-new').slideDown();*/
/* */
/* 			setTimeout(function() {*/
/* 				$('#payment-address select[name=\'country_id\']').trigger('change');*/
/* 			}, 200);*/
/* 		} else {*/
/* 			$('#payment-existing').slideDown();*/
/* 			$('#payment-new').slideUp();*/
/* 			*/
/* 			reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	$('#payment-address input[name=\'payment_address\']:checked').trigger('change');*/
/* */
/* 	// Sort the custom fields*/
/* 	$('#custom-field-payment .custom-field[data-sort]').detach().each(function() {*/
/* 		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#payment-new .col-sm-6').length) {*/
/* 			$('#payment-new .col-sm-6').eq($(this).attr('data-sort')).before(this);*/
/* 		} */
/* 		*/
/* 		if ($(this).attr('data-sort') > $('#payment-new .col-sm-6').length) {*/
/* 			$('#payment-new .col-sm-6:last').after(this);*/
/* 		}*/
/* 			*/
/* 		if ($(this).attr('data-sort') < -$('#payment-new .col-sm-6').length) {*/
/* 			$('#payment-new .col-sm-6:first').before(this);*/
/* 		}*/
/* 	});*/
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
/* 				*/
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
/* 	$('#payment-address select[name=\'zone_id\']').on('change', function() {*/
/* 		reloadPaymentMethod();*/
/* 		reloadShippingMethod('payment');*/
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
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['postcode_required'] == '1') {*/
/* 					$('#payment-postcode-required').addClass('required');*/
/* 				} else {*/
/* 					$('#payment-postcode-required').removeClass('required');*/
/* 				}*/
/* */
/* 				html = '';*/
/* */
/* 				if (json['zone'] != '') {*/
/* 					for (i = 0; i < json['zone'].length; i++) {*/
/* 						html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 						if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 							html += ' selected="selected"';*/
/* 						}*/
/* */
/* 						html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 					}*/
/* 				} else {*/
/* 					html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 				}*/
/* */
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
/* 	$('#payment-address select[name=\'address_id\']').on('change', function() {*/
/* 		if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 			reloadPaymentMethod();*/
/* 		} else {*/
/* 			reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
