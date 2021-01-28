<?php

/* default/template/extension/quickcheckout/shipping_address.twig */
class __TwigTemplate_146194aadfca73b13f1ddf528658231949fedb979e3ec7938383d23fc54942ad extends Twig_Template
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
            // line 2
            echo "<div class=\"radio\">
  <label><input type=\"radio\" name=\"shipping_address\" value=\"existing\" id=\"shipping-address-existing\" checked=\"checked\" />
  ";
            // line 4
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "</label>
</div>
<div id=\"shipping-existing\">
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
  <label><input type=\"radio\" name=\"shipping_address\" value=\"new\" id=\"shipping-address-new\" />
  ";
            // line 19
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
</div>
";
        } else {
            // line 21
            echo "   
<input type=\"radio\" name=\"shipping_address\" value=\"new\" id=\"shipping-address-new\" class=\"hide\" checked=\"checked\" />
";
        }
        // line 24
        echo "<div id=\"shipping-new\" style=\"display: ";
        echo (((isset($context["addresses"]) ? $context["addresses"] : null)) ? ("none") : ("block"));
        echo ";\">
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
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-shipping-country\">
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
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-shipping-zone\"></select>
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
\t<select name=\"city\" id=\"input-shipping-city\" size=\"7\" class=\"form-control\">
\t";
                    // line 61
                    echo (isset($context["cities"]) ? $context["cities"] : null);
                    echo "
\t  </select>
\t</div>
\t
\t";
                } else {
                    // line 65
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 68
                echo "  ";
            } else {
                echo "   
    ";
                // line 69
                if ($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "display", array())) {
                    // line 70
                    echo "\t<div";
                    echo ((($context["field"] == "postcode")) ? (" id=\"shipping-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo (($this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "required", array())) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-";
                    // line 71
                    echo twig_replace_filter($context["field"], array("_" => "-"));
                    echo "\">";
                    echo $this->getAttribute($context, ("entry_" . $context["field"]));
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 72
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "placeholder", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "default", array());
                    echo "\" class=\"form-control\"  id=\"input-shipping-";
                    echo twig_replace_filter($context["field"], array("_" => "-"));
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 74
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 75
                    echo $context["field"];
                    echo "\" value=\"";
                    echo $this->getAttribute($this->getAttribute($context, ("field_" . $context["field"])), "default", array());
                    echo "\" class=\"hide\" />
\t";
                }
                // line 76
                echo " 
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-shipping\">
  ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 82
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 83
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\" id=\"shipping-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-custom-field";
                // line 84
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t  ";
                // line 85
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 86
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 87
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t  ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 89
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            echo " 
\t\t  <option value=\"";
                            // line 90
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t  ";
                        } else {
                            // line 91
                            echo "   
\t\t  <option value=\"";
                            // line 92
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
\t\t  ";
                        }
                        // line 94
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "\t\t</select>
\t  ";
                }
                // line 97
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    echo " 
\t\t";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 100
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 102
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 103
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        } else {
                            // line 104
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 106
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
\t\t\t  ";
                            // line 107
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        }
                        // line 109
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "\t  ";
                }
                // line 112
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    echo " 
\t\t";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 115
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 116
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 117
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 118
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        } else {
                            // line 119
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 121
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
\t\t\t  ";
                            // line 122
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
\t\t\t";
                        }
                        // line 123
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    echo "\t  ";
                }
                // line 127
                echo "\t  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 128
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 129
                echo " 
\t  ";
                // line 130
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 131
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
\t  ";
                }
                // line 132
                echo " 
\t  ";
                // line 133
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-shipping-custom-field";
                    // line 135
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 136
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" />
\t  ";
                }
                // line 137
                echo " 
\t  ";
                // line 138
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 139
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 140
                echo " 
\t  ";
                // line 141
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 142
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 143
                echo " 
\t  ";
                // line 144
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 145
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 146
                echo " 
    </div>
  ";
            }
            // line 149
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "</div>
</div><!-- CLOSE WRAPPING BOX -->
<script type=\"text/javascript\"><!--
// Shipping address form functions
\$(document).ready(function() {
\t\$('#shipping-address input[name=\\'shipping_address\\']').on('change', function() {
\t\tif (this.value == 'new') {
\t\t\t\$('#shipping-existing').slideUp();
\t\t\t\$('#shipping-new').slideDown();
\t\t\t
\t\t\tsetTimeout(function() {
\t\t\t\t\$('#shipping-address select[name=\\'country_id\\']').trigger('change');
\t\t\t}, 200);
\t\t} else {
\t\t\t\$('#shipping-existing').slideDown();
\t\t\t\$('#shipping-new').slideUp();

\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t}
\t});
\t
\t\$('#shipping-address input[name=\\'shipping_address\\']:checked').trigger('change');

\t// Sort the custom fields
\t\$('#custom-field-shipping .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
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

\t\$('#shipping-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadShippingMethod('shipping');
\t});

\t\$('#shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#shipping-address select[name=\\'country_id\\']').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#shipping-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#shipping-postcode-required').removeClass('required');
\t\t\t\t}

\t\t\t\thtml = '';

\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 264
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo " ') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 271
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t\$('#shipping-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 276
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 280
        echo " 
\t\t});
\t});

\t\$('#shipping-address select[name=\\'address_id\\']').on('change', function() {
\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\treloadShippingMethod('shipping');
\t\t} else {
\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  773 => 280,  765 => 276,  757 => 271,  747 => 264,  631 => 150,  625 => 149,  620 => 146,  607 => 145,  603 => 144,  600 => 143,  587 => 142,  583 => 141,  580 => 140,  567 => 139,  563 => 138,  560 => 137,  551 => 136,  543 => 135,  538 => 133,  535 => 132,  522 => 131,  518 => 130,  515 => 129,  502 => 128,  497 => 127,  494 => 126,  486 => 123,  481 => 122,  473 => 121,  469 => 119,  464 => 118,  456 => 117,  453 => 116,  451 => 115,  444 => 113,  439 => 112,  436 => 111,  429 => 109,  424 => 107,  416 => 106,  412 => 104,  407 => 103,  399 => 102,  394 => 100,  387 => 98,  382 => 97,  378 => 95,  372 => 94,  365 => 92,  362 => 91,  355 => 90,  351 => 89,  345 => 88,  341 => 87,  333 => 86,  329 => 85,  323 => 84,  317 => 83,  313 => 82,  307 => 81,  303 => 79,  295 => 76,  288 => 75,  285 => 74,  273 => 72,  267 => 71,  260 => 70,  258 => 69,  253 => 68,  248 => 65,  240 => 61,  235 => 59,  231 => 58,  224 => 54,  219 => 53,  216 => 52,  213 => 51,  209 => 49,  203 => 48,  196 => 46,  193 => 45,  186 => 44,  182 => 43,  176 => 42,  172 => 40,  167 => 38,  161 => 37,  154 => 35,  151 => 34,  144 => 33,  140 => 32,  134 => 31,  129 => 29,  124 => 28,  122 => 27,  118 => 26,  112 => 25,  107 => 24,  102 => 21,  96 => 19,  90 => 15,  83 => 13,  64 => 12,  61 => 11,  42 => 10,  38 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if addresses %}*/
/* <div class="radio">*/
/*   <label><input type="radio" name="shipping_address" value="existing" id="shipping-address-existing" checked="checked" />*/
/*   {{ text_address_existing }}</label>*/
/* </div>*/
/* <div id="shipping-existing">*/
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
/*   <label><input type="radio" name="shipping_address" value="new" id="shipping-address-new" />*/
/*   {{ text_address_new }}</label>*/
/* </div>*/
/* {% else %}   */
/* <input type="radio" name="shipping_address" value="new" id="shipping-address-new" class="hide" checked="checked" />*/
/* {% endif %}*/
/* <div id="shipping-new" style="display: {{ addresses ? 'none' : 'block' }};">*/
/* {% for field in fields %} */
/*   {% if field == 'country' %} */
/*     {% if attribute(_context, 'field_' ~ field).display %}*/
/* 	<div class="col-sm-6{{ attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	  <label class="control-label">{{ entry_country }}</label>*/
/* 	  <select name="country_id" class="form-control" id="input-shipping-country">*/
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
/* 	  <select name="zone_id" class="form-control" id="input-shipping-zone"></select>*/
/* 	</div>*/
/* 	*/
/* 	<div class="col-sm-12{{ attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	<label class="control-label">{{ entry_city }}</label>*/
/* 	<select name="city" id="input-shipping-city" size="7" class="form-control">*/
/* 	{{ cities }}*/
/* 	  </select>*/
/* 	</div>*/
/* 	*/
/* 	{% else %}   */
/* 	  <select name="zone_id" class="hide"></select>*/
/* 	{% endif %}*/
/*   {% else %}   */
/*     {% if attribute(_context, 'field_' ~ field).display %}*/
/* 	<div{{ field == 'postcode' ? ' id="shipping-postcode-required"' }} class="col-sm-6{{ attribute(_context, 'field_' ~ field).required ? ' required' }}">*/
/* 	  <label class="control-label" for="input-shipping-{{ field|replace({'_' : '-'}) }}">{{ attribute(_context, 'entry_' ~ field) }}</label>*/
/* 	  <input type="text" name="{{ field }}" placeholder="{{ attribute(_context, 'field_' ~ field).placeholder }}" value="{{ attribute(_context, 'field_' ~ field).default }}" class="form-control"  id="input-shipping-{{ field|replace({'_' : '-'}) }}" />*/
/* 	</div>*/
/* 	{% else %}   */
/* 	<input type="text" name="{{ field }}" value="{{ attribute(_context, 'field_' ~ field).default }}" class="hide" />*/
/* 	{% endif %} */
/*   {% endif %}*/
/* {% endfor %}*/
/* <!-- CUSTOM FIELDS -->*/
/* <div id="custom-field-shipping">*/
/*   {% for custom_field in custom_fields %} */
/*   {% if custom_field.location == 'address' %} */
/* 	<div class="col-sm-6 custom-field" data-sort="{{ custom_field.sort_order }}" id="shipping-custom-field{{ custom_field.custom_field_id }}">*/
/* 	  <label class="control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 	  {% if custom_field.type == 'select' %} */
/* 		<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
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
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'textarea' %} */
/* 		<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'file' %} */
/* 		<br />*/
/* 		<button type="button" id="button-shipping-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i>{{ button_upload }}</button>*/
/* 		<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] }}" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'date' %} */
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control date" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'time' %} */
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control time" />*/
/* 	  {% endif %} */
/* 	  {% if custom_field.type == 'datetime' %} */
/* 		<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ guest_custom_field[custom_field.custom_field_id] ? guest_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control datetime" />*/
/* 	  {% endif %} */
/*     </div>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* </div><!-- CLOSE WRAPPING BOX -->*/
/* <script type="text/javascript"><!--*/
/* // Shipping address form functions*/
/* $(document).ready(function() {*/
/* 	$('#shipping-address input[name=\'shipping_address\']').on('change', function() {*/
/* 		if (this.value == 'new') {*/
/* 			$('#shipping-existing').slideUp();*/
/* 			$('#shipping-new').slideDown();*/
/* 			*/
/* 			setTimeout(function() {*/
/* 				$('#shipping-address select[name=\'country_id\']').trigger('change');*/
/* 			}, 200);*/
/* 		} else {*/
/* 			$('#shipping-existing').slideDown();*/
/* 			$('#shipping-new').slideUp();*/
/* */
/* 			reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	$('#shipping-address input[name=\'shipping_address\']:checked').trigger('change');*/
/* */
/* 	// Sort the custom fields*/
/* 	$('#custom-field-shipping .custom-field[data-sort]').detach().each(function() {*/
/* 		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#shipping-new .col-sm-6').length) {*/
/* 			$('#shipping-new .col-sm-6').eq($(this).attr('data-sort')).before(this);*/
/* 		} */
/* 		*/
/* 		if ($(this).attr('data-sort') > $('#shipping-new .col-sm-6').length) {*/
/* 			$('#shipping-new .col-sm-6:last').after(this);*/
/* 		}*/
/* 			*/
/* 		if ($(this).attr('data-sort') < -$('#shipping-new .col-sm-6').length) {*/
/* 			$('#shipping-new .col-sm-6:first').before(this);*/
/* 		}*/
/* 	});*/
/* */
/* 	$('#shipping-address button[id^=\'button-shipping-custom-field\']').on('click', function() {*/
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
/* 	$('#shipping-address select[name=\'zone_id\']').on('change', function() {*/
/* 		reloadShippingMethod('shipping');*/
/* 	});*/
/* */
/* 	$('#shipping-address select[name=\'country_id\']').on('change', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				$('#shipping-address select[name=\'country_id\']').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('.fa-spinner').remove();*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['postcode_required'] == '1') {*/
/* 					$('#shipping-postcode-required').addClass('required');*/
/* 				} else {*/
/* 					$('#shipping-postcode-required').removeClass('required');*/
/* 				}*/
/* */
/* 				html = '';*/
/* */
/* 				if (json['zone'] != '') {*/
/* 					for (i = 0; i < json['zone'].length; i++) {*/
/* 						html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 						if (json['zone'][i]['zone_id'] == '{{ zone_id }} ') {*/
/* 							html += ' selected="selected"';*/
/* 						}*/
/* */
/* 						html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 					}*/
/* 				} else {*/
/* 					html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 				}*/
/* */
/* 				$('#shipping-address select[name=\'zone_id\']').html(html).trigger('change');*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* */
/* 	$('#shipping-address select[name=\'address_id\']').on('change', function() {*/
/* 		if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 			reloadShippingMethod('shipping');*/
/* 		} else {*/
/* 			reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
