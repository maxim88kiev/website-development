<?php

/* default/template/extension/quickcheckout/checkout.twig */
class __TwigTemplate_fa4d277d09d9a85b05de70cf3dc80caefad1ecc6dd41b42cfba7bb223e2b9857 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            echo "   
    ";
            // line 14
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"category-head\">
        <h1 class=\"main-underline\">";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      </div>
\t  ";
        // line 20
        if (false) {
            // line 21
            echo "\t  <!-- FontAwesome for themes that require it -->
\t  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t  ";
        }
        // line 24
        echo "\t  <div id=\"warning-messages\">
\t  \t";
        // line 25
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 26
            echo "\t\t  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t  </div>
\t\t";
        }
        // line 30
        echo "\t  </div>
\t  <div id=\"success-messages\"></div>
\t  ";
        // line 32
        if ((isset($context["mobile_stylesheet"]) ? $context["mobile_stylesheet"] : null)) {
            // line 33
            echo "\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 701px) and (max-width: 99999px)\" href=\"";
            echo (isset($context["stylesheet"]) ? $context["stylesheet"] : null);
            echo "\" />
\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 1px) and (max-width: 700px)\" href=\"";
            // line 34
            echo (isset($context["mobile_stylesheet"]) ? $context["mobile_stylesheet"] : null);
            echo "\" />
\t  ";
        } else {
            // line 35
            echo "   
\t  <link rel=\"stylesheet\" href=\"";
            // line 36
            echo (isset($context["stylesheet"]) ? $context["stylesheet"] : null);
            echo "\" />
\t  ";
        }
        // line 38
        echo "
\t  ";
        // line 39
        if ((isset($context["html_header"]) ? $context["html_header"] : null)) {
            echo " 
\t  ";
            // line 40
            echo (isset($context["html_header"]) ? $context["html_header"] : null);
            echo " 
\t  ";
        }
        // line 41
        echo " 
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/default/stylesheet/socnetauth2.css\">
\t\t<div class=\"content account_socnetauth2_bline_content\" style=\"min-height: 0px;\">
\t\t\t<style>
\t\t\ta.socnetauth2_buttons:hover img
\t\t\t{
\t\t\t\topacity: 0.8;
\t\t\t}
\t\t\t</style>\t
\t\t\t<div class=\"account_socnetauth2__header\">Авторизация/Регистрация через соц.сети: </div>\t
\t\t\t<div class=\"account_socnetauth2_bline_links\">
\t\t\t\t<table>
\t\t\t\t\t<tbody><tr>
\t\t\t\t\t\t<td style=\"padding-right: 10px; padding-top: 10px;\"><a class=\"socnetauth2_buttons\" href=\"/index.php?route=extension/module/socnetauth2/facebook&amp;first=1\"><img src=\"/image/icon-social/fb45.png\"></a></td>\t\t\t\t
\t\t\t\t\t\t<td style=\"padding-right: 10px; padding-top: 10px;\"><a class=\"socnetauth2_buttons\" href=\"/index.php?route=extension/module/socnetauth2/gmail&amp;first=1\"><img src=\"/image/icon-social/gm45.png\"></a></td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t</tbody></table>
\t\t\t</div>
\t\t</div>

\t  <div id=\"quickcheckoutconfirm\">
\t  \t";
        // line 61
        if (((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "4")) {
            echo " 
\t\t\t<div class=\"qc-col-0\">
\t\t\t\t";
            // line 63
            if (( !(isset($context["logged"]) ? $context["logged"] : null) && (isset($context["login_module"]) ? $context["login_module"] : null))) {
                echo " 
\t\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 64
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "login", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "login", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t  <div id=\"login-box\">
\t\t\t\t\t\t<div id=\"checkout\">
\t\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 67
                echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
                echo "</div>
\t\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 68
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"or\">";
                // line 70
                echo (isset($context["text_or"]) ? $context["text_or"] : null);
                echo "</div>
\t\t\t\t\t </div>
\t\t\t\t\t </div>
\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t<div class=\"qc-step\" data-col=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_address", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_address", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"payment-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 76
            echo (( !(isset($context["logged"]) ? $context["logged"] : null)) ? ((isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null)) : ((isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null)));
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">
\t\t\t\t\t  ";
            // line 78
            echo (((isset($context["guest"]) ? $context["guest"] : null)) ? ((isset($context["guest"]) ? $context["guest"] : null)) : ((isset($context["payment_address"]) ? $context["payment_address"] : null)));
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 82
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 83
                if ( !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_address", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_address", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t<div id=\"shipping-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 85
                echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 86
                echo (((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) ? ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) : (""));
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 89
            echo " 

\t\t\t\t";
            // line 91
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 92
                if ( !(isset($context["shipping_module"]) ? $context["shipping_module"] : null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_method", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_method", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t<div id=\"shipping-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 94
                echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 99
            echo "
\t\t\t\t<div class=\"qc-step ";
            // line 100
            if ( !(isset($context["payment_module"]) ? $context["payment_module"] : null)) {
                echo "hidden";
            }
            echo "\" data-col=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_method", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_method", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"payment-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 102
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 107
            if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 108
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "cart", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "cart", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t</div> 
\t\t\t\t";
            }
            // line 114
            echo "
\t\t\t\t";
            // line 115
            if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 116
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "coupons", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "coupons", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                // line 118
                echo (isset($context["voucher"]) ? $context["voucher"] : null);
                echo "</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t
\t\t\t\t<div class=\"qc-step\" data-col=\"";
            // line 123
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "confirm", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "confirm", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"terms\">
\t\t\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 125
            echo (isset($context["terms"]) ? $context["terms"] : null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"qc-col-1 col-md-";
            // line 130
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 1, array(), "array");
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-";
            // line 132
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array");
            echo "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"qc-col-2 col-md-";
            // line 134
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) {
                echo twig_round((($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 2, array(), "array") / $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) * 12), 0, "floor");
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"qc-col-3 col-md-";
            // line 136
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) {
                echo (12 - twig_round((($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 2, array(), "array") / $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) * 12), 0, "floor"));
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t\t\t\t\t<div class=\"qc-col-4 col-md-12\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script>
\t\t\t\$(function() {
\t\t\t\t\$('.qc-step').each(function(){
\t\t\t\t\t\$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));\t
\t\t\t\t})
\t\t\t\t\$('.qc-step').tsort({attr:'data-row'});
\t\t\t})
\t\t\t</script>

\t\t";
        } else {
            // line 154
            echo "
\t\t\t<div id=\"quickcheckout-disable\">
\t\t\t  ";
            // line 156
            if (( !(isset($context["logged"]) ? $context["logged"] : null) && (isset($context["login_module"]) ? $context["login_module"] : null))) {
                echo " 
\t\t\t  <div class=\"quickcheckoutmid\" id=\"login-box\">
\t\t\t\t<div id=\"checkout\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 159
                echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 160
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"or\">";
                // line 162
                echo (isset($context["text_or"]) ? $context["text_or"] : null);
                echo "</div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 164
            echo " 
\t\t\t  <div class=\"quickcheckoutleft\">
\t\t\t\t<div id=\"payment-address\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 167
            echo (( !(isset($context["logged"]) ? $context["logged"] : null)) ? ((isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null)) : ((isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null)));
            echo "</div>
\t\t\t\t <div class=\"quickcheckout-content\">
\t\t\t\t  ";
            // line 169
            echo (((isset($context["guest"]) ? $context["guest"] : null)) ? ((isset($context["guest"]) ? $context["guest"] : null)) : ((isset($context["payment_address"]) ? $context["payment_address"] : null)));
            echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 171
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div id=\"shipping-address\" ";
                // line 172
                if ( !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 173
                echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 174
                echo (((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) ? ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) : (""));
                echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 176
            echo " 
\t\t\t  </div>
\t\t\t  <div class=\"quickcheckoutright\">
\t\t\t\t";
            // line 179
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div id=\"shipping-method\" ";
                // line 180
                if ( !(isset($context["shipping_module"]) ? $context["shipping_module"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 181
                echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 185
            echo "\t\t\t\t<div id=\"payment-method\" ";
            if ( !(isset($context["payment_module"]) ? $context["payment_module"] : null)) {
                echo "class=\"hidden\"";
            }
            echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 186
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  ";
            // line 190
            if (((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "2")) {
                echo " 
\t\t\t\t<div class=\"quickcheckoutleft\">
\t\t\t\t  ";
                // line 192
                if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                    echo " 
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 197
                echo "\t\t\t\t</div>
\t\t\t\t<div style=\"clear:right;\"></div>
\t\t\t\t<div class=\"quickcheckoutright\">
\t\t\t\t  ";
                // line 200
                if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                    echo " 
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                    // line 202
                    echo (isset($context["voucher"]) ? $context["voucher"] : null);
                    echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 205
                echo "\t\t\t\t</div>
\t\t\t  ";
            } elseif (((            // line 206
(isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "1") || ((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "3"))) {
                // line 207
                echo "\t\t\t\t";
                if (((((isset($context["cart_module"]) ? $context["cart_module"] : null) || (isset($context["voucher_module"]) ? $context["voucher_module"] : null)) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                    // line 208
                    echo "\t\t\t\t<div class=\"quickcheckoutleft extra-width\">
\t\t\t\t  ";
                    // line 209
                    if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                        // line 210
                        echo "\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 214
                    echo "\t\t\t\t  ";
                    if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                        // line 215
                        echo "\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                        // line 216
                        echo (isset($context["voucher"]) ? $context["voucher"] : null);
                        echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 219
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 220
                echo " 
\t\t\t  ";
            }
            // line 222
            echo "\t\t\t  <div style=\"clear: both;\"></div>
\t\t\t</div>

\t\t\t<div class=\"quickcheckoutmid\">
\t\t\t  <div id=\"terms\">
\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 227
            echo (isset($context["terms"]) ? $context["terms"] : null);
            echo "</div>
\t\t\t  </div>
\t\t\t</div>

\t\t";
        }
        // line 232
        echo "
\t  </div>

\t  ";
        // line 235
        if ((isset($context["html_footer"]) ? $context["html_footer"] : null)) {
            // line 236
            echo "\t  ";
            echo (isset($context["html_footer"]) ? $context["html_footer"] : null);
            echo "
\t  ";
        }
        // line 238
        echo "
\t";
        // line 239
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  ";
        // line 240
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>

";
        // line 243
        if ((isset($context["custom_css"]) ? $context["custom_css"] : null)) {
            // line 244
            echo "<style type=\"text/css\">
";
            // line 245
            echo (isset($context["custom_css"]) ? $context["custom_css"] : null);
            echo "
</style>
";
        }
        // line 247
        echo " 
<script type=\"text/javascript\"><!--
";
        // line 249
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\$(window).load(function() {
    \$.blockUI({
\t\tmessage: '<h1 style=\"color:#ffffff;\">";
            // line 252
            echo (isset($context["text_please_wait"]) ? $context["text_please_wait"] : null);
            echo "</h1>',
\t\tcss: {
\t\t\tborder: 'none',
\t\t\tpadding: '15px',
\t\t\tbackgroundColor: '#000000',
\t\t\t'-webkit-border-radius': '10px',
\t\t\t'-moz-border-radius': '10px',
\t\t\t'-khtml-border-radius': '10px',
\t\t\t'border-radius': '10px',
\t\t\topacity: .8,
\t\t\tcolor: '#ffffff'
\t\t}
\t});
\t
\tsetTimeout(function() {
\t\t\$.unblockUI();
\t}, 2000);
});
";
        }
        // line 270
        echo " 

";
        // line 272
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 273
            echo "\t";
            if ((isset($context["save_data"]) ? $context["save_data"] : null)) {
                // line 274
                echo "\t// Save form data
\t\$(document).on('change', '#payment-address input[type=\\'text\\'], #payment-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 285
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 289
                echo " 
\t\t});
\t});

\t\$(document).on('change', '#shipping-address input[type=\\'text\\'], #shipping-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 303
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 307
                echo " 
\t\t});
\t});
\t";
            }
            // line 310
            echo " 
\t
\t";
            // line 312
            if ((isset($context["login_module"]) ? $context["login_module"] : null)) {
                echo " 
\t// Login Form Clicked
\t\$(document).on('click', '#button-login', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/login/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#checkout #login :input'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-login').prop('disabled', true);
\t\t\t\t\$('#button-login').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-login').prop('disabled', false);
\t\t\t\t\$('#button-login').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t},
\t\t\t";
                // line 342
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 346
                echo " 
\t\t});
\t});
\t";
            }
            // line 349
            echo " 

// Validate Register
function validateRegister() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/register/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 379
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').after('<div class=\"text-danger\">' + json['error']['password'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').after('<div class=\"text-danger\">' + json['error']['confirm'] + '</div>');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 387
            echo " 
\t\t\t\t";
            // line 388
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 396
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 398
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (shipping_address) {
\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t} else {
\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 406
                echo "  
\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 408
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 411
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 415
            echo " 
\t});
}

// Validate Guest Payment Address
function validateGuestAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {\t\t
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 447
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 457
            echo " 
\t\t\t\t";
            // line 458
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 464
            echo " 
\t\t\t} else {
\t\t\t\tvar create_account = \$('#payment-address input[name=\\'create_account\\']:checked').val();

\t\t\t\t";
            // line 468
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 480
                echo "   
\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t\t";
            }
            // line 487
            echo "\t\t\t}
\t\t},
\t\t";
            // line 489
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 493
            echo " 
\t});
}

// Validate Guest Shipping Address
function validateGuestShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 525
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 535
            echo " 
\t\t\t\t";
            // line 536
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 542
            echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
            // line 547
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 551
            echo " 
\t});
}

// Confirm Payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidateGuestAddress();
});
";
        } else {
            // line 564
            echo "   
// Validate Payment Address
function validatePaymentAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 593
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 603
            echo " 
\t\t\t\t";
            // line 604
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 610
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 612
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t\tvalidateShippingAddress();
\t\t\t\t";
            } else {
                // line 614
                echo "   
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 617
            echo "\t\t\t}
\t\t},
\t\t";
            // line 619
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 623
            echo " 
\t});
}

";
            // line 627
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
// Validate Shipping Address
function validateShippingAddress() {
\tvar payment_mode = \$('input[name=\"payment_address\"]:checked').val();
\tif (payment_mode == 'new') {
\t\t";
                // line 632
                if (((isset($context["logged"]) ? $context["logged"] : null) &&  !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null))) {
                    // line 633
                    echo "\t\t\tvar addressType = '#payment-address';
\t\t\tvar shipping_mode = 'input[name=\"shipping_address\"]:checked, ';
\t\t";
                } else {
                    // line 636
                    echo "\t\t\tvar addressType = '#shipping-address';
\t\t\tvar shipping_mode = '';
\t\t";
                }
                // line 639
                echo "\t} else {
\t\tvar addressType = '#shipping-address';
\t\tvar shipping_mode = '';
\t}
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/shipping_address/validate',
\t\ttype: 'post',
\t\tdata: \$(shipping_mode + addressType +' input[type=\\'text\\'], '+addressType +' input[type=\\'password\\'], '+addressType +' input[type=\\'checkbox\\']:checked, '+addressType +' input[type=\\'radio\\']:checked, '+addressType +' select, '+addressType +' textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
                // line 669
                if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 679
                echo " 
\t\t\t\t";
                // line 680
                if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 686
                echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
                // line 691
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
                }
                // line 695
                echo " 
\t});
}
";
            }
            // line 698
            echo " 

// Confirm payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidatePaymentAddress();
});
";
        }
        // line 709
        echo "// Close if logged php

// Payment Method
function reloadPaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 720
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 723
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 727
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 729
        echo " 
\t\t},
\t\t";
        // line 731
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 735
        echo " 
\t});
}

function reloadPaymentMethodById(address_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,
\t\ttype: 'post',
\t\tdata: \$('#payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 747
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 750
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 754
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 756
        echo " 
\t\t},
\t\t";
        // line 758
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 762
        echo " 
\t});
}

// Validate Payment Method
function validatePaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-method select, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'checkbox\\']:checked, #payment-method textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalidateTerms();
\t\t\t}
\t\t},
\t\t";
        // line 797
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 801
        echo " 
\t});
}

// Shipping Method
";
        // line 806
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\tfunction reloadShippingMethod(type) {
\t\tif (type == 'payment') {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 821
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 824
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 828
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 832
            echo " 
\t\t});
\t}

\tfunction reloadShippingMethodById(address_id) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 844
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 847
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 851
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 855
            echo " 
\t\t});
\t}

\t// Validate Shipping Method
\tfunction validateShippingMethod() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method select, #shipping-method input[type=\\'radio\\']:checked, #shipping-method textarea, #shipping-method input[type=\\'text\\']'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t\t
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t},
\t\t\t";
            // line 890
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 894
            echo " 
\t\t});
\t}
";
        }
        // line 897
        echo " 

// Validate confirm button
function validateTerms() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/terms/validate',
\t\ttype: 'post',
\t\tdata: \$('#terms input[type=\\'checkbox\\']:checked'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tloadConfirm();
\t\t\t}
\t\t},
\t\t";
        // line 930
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 934
        echo " 
\t});
}

// Load confirm
function loadConfirm() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/confirm',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t";
        // line 945
        if ((isset($context["confirmation_page"]) ? $context["confirmation_page"] : null)) {
            echo " 
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\t";
            // line 948
            if ((isset($context["slide_effect"]) ? $context["slide_effect"] : null)) {
                echo " 
\t\t\t\t\$('#quickcheckoutconfirm').slideUp('slow');
\t\t\t\t";
            } else {
                // line 950
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').html('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 952
            echo " 
\t\t\t
\t\t\t\t";
            // line 954
            if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
                echo " 
\t\t\t\t\$.blockUI({
\t\t\t\t\tmessage: '<h1 style=\"color:#ffffff;\">";
                // line 956
                echo (isset($context["text_please_wait"]) ? $context["text_please_wait"] : null);
                echo "</h1>',
\t\t\t\t\tcss: {
\t\t\t\t\t\tborder: 'none',
\t\t\t\t\t\tpadding: '15px',
\t\t\t\t\t\tbackgroundColor: '#000000',
\t\t\t\t\t\t'-webkit-border-radius': '10px',
\t\t\t\t\t\t'-moz-border-radius': '10px',
\t\t\t\t\t\t'-khtml-border-radius': '10px',
\t\t\t\t\t\t'border-radius': '10px',
\t\t\t\t\t\topacity: .8,
\t\t\t\t\t\tcolor: '#ffffff'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t";
            }
            // line 969
            echo " 
\t\t\t";
        }
        // line 971
        echo "\t\t},
\t\tsuccess: function(html) {
\t\t\t";
        // line 973
        if ((isset($context["confirmation_page"]) ? $context["confirmation_page"] : null)) {
            echo " 
\t\t\t\t";
            // line 974
            if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
                echo " 
\t\t\t\t\$.unblockUI();
\t\t\t\t";
            }
            // line 976
            echo " 
\t\t\t\t
\t\t\t\t\$('#quickcheckoutconfirm').hide().html(html);
\t\t\t\t
\t\t\t\t";
            // line 980
            if ( !(isset($context["auto_submit"]) ? $context["auto_submit"] : null)) {
                echo " 
\t\t\t\t\t";
                // line 981
                if ((isset($context["slide_effect"]) ? $context["slide_effect"] : null)) {
                    echo " 
\t\t\t\t\t\$('#quickcheckoutconfirm').slideDown('slow');
\t\t\t\t\t";
                } else {
                    // line 983
                    echo "   
\t\t\t\t\t\$('#quickcheckoutconfirm').show();
\t\t\t\t\t";
                }
                // line 985
                echo " 
\t\t\t\t";
            } else {
                // line 986
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 989
            echo "\t\t\t";
        } else {
            echo "   
\t\t\t\t\$('#terms .terms').hide();
\t\t\t\t\$('#payment').html(html).slideDown('fast');
\t\t\t\t
\t\t\t\t";
            // line 993
            if ((isset($context["auto_submit"]) ? $context["auto_submit"] : null)) {
                echo " 
\t\t\t\t\$('#payment').hide().after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 995
            echo " 
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: \$('#terms').offset().top }, 'slow');
\t\t\t\t
\t\t\t\tdisableCheckout();
\t\t\t";
        }
        // line 1001
        echo "\t\t},
\t\t";
        // line 1002
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 1006
        echo " 
\t});
}

// Load cart
";
        // line 1011
        if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
            echo " 
function loadCart() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('.tooltip').remove();
\t\t\t
\t\t\tmoduleLoad(\$('#cart1'), ";
            // line 1020
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#cart1'), ";
            // line 1023
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t
\t\t\t\$('#cart1 .quickcheckout-content').html(html);
\t\t},
\t\t";
            // line 1027
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1031
            echo " 
\t});
}

\t";
            // line 1035
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\$(document).ready(function(){
\t\tloadCart();
\t});
\t";
            }
            // line 1039
            echo " 
";
        }
        // line 1040
        echo " 

";
        // line 1042
        if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
            echo " 
// Validate Coupon
\$(document).on('click', '#button-coupon', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',
\t\ttype: 'post',
\t\tdata: \$('#coupon-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').prop('disabled', true);
\t\t\t\$('#button-coupon').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').prop('disabled', false);
\t\t\t\$('#coupon-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1074
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1078
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1080
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1084
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1086
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1088
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1095
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1101
                echo " 
\t\t\t";
            }
            // line 1102
            echo " 
\t\t\t
\t\t\t";
            // line 1104
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1106
            echo " 
\t\t},
\t\t";
            // line 1108
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1112
            echo " 
\t});
});

\$(document).on('click', '#button-voucher', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',
\t\ttype: 'post',
\t\tdata: \$('#voucher-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').prop('disabled', true);
\t\t\t\$('#button-voucher').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').prop('disabled', false);
\t\t\t\$('#voucher-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1146
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1150
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1152
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1156
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1158
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1160
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1167
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1173
                echo " 
\t\t\t";
            }
            // line 1175
            echo "\t\t\t
\t\t\t";
            // line 1176
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1178
            echo " 
\t\t},
\t\t";
            // line 1180
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1184
            echo " 
\t});
});

\$(document).on('click', '#button-reward', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateReward',
\t\ttype: 'post',
\t\tdata: \$('#reward-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').prop('disabled', true);
\t\t\t\$('#button-reward').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').prop('disabled', false);
\t\t\t\$('#reward-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1218
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1222
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1224
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1228
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1230
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1232
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1239
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1245
                echo " 
\t\t\t";
            }
            // line 1247
            echo "\t\t\t
\t\t\t";
            // line 1248
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1250
            echo " 
\t\t},
\t\t";
            // line 1252
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1256
            echo " 
\t});
});
";
        }
        // line 1260
        echo "
";
        // line 1261
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\$(document).on('focusout', 'input[name=\\'postcode\\']', function() {
\t";
            // line 1263
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\treloadShippingMethod('payment');
\t} else {
\t\treloadShippingMethod('shipping');
\t}
\t";
            } else {
                // line 1269
                echo "   
\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\treloadShippingMethod('shipping');
\t} else {
\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t}
\t";
            }
            // line 1275
            echo " 
});
";
        }
        // line 1278
        echo "
";
        // line 1279
        if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
            echo " 
\t\$(document).on('keydown', 'input', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
\t\$(document).on('change', 'select', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
";
        }
        // line 1290
        echo " 

";
        // line 1292
        if ((isset($context["edit_cart"]) ? $context["edit_cart"] : null)) {
            echo " 
\$(document).on('click', '.button-update', function() {

\tvar quantity = \$(this).parents('.quantity').find('input.qc-product-qantity');
\tif (quantity.length){
\t\tif (\$(this).data('type')=='increase') {
\t\t\tquantity.val(parseInt(quantity.val())+1);
\t\t} else if (\$(this).data('type')=='decrease') {
\t\t\tquantity.val(parseInt(quantity.val())-1);
\t\t}
\t}
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update',
\t\ttype: 'post',
\t\tdata: \$('#cart1 :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t//\$('#cart1 .button-update').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else if (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').html('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else {
\t\t\t\t\t\$('#warning-messages').html('');
\t\t\t\t\t\$('#button-payment-method').removeAttr(\"disabled\");
\t\t\t\t}

\t\t\t\t";
            // line 1328
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1332
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1334
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1338
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1340
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1342
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1349
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1355
                echo " 
\t\t\t\t";
            }
            // line 1356
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 1358
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1360
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1363
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1367
            echo " 
\t});
});

\$(document).on('click', '.button-remove', function() {
\tvar remove_id = \$(this).attr('data-remove');

\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-remove').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\t";
            // line 1386
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1390
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1392
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1396
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1398
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1400
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1407
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1413
                echo " 
\t\t\t\t";
            }
            // line 1415
            echo "\t\t\t\t
\t\t\t\t";
            // line 1416
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1418
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1421
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1425
            echo " 
\t});

\treturn false;
});
";
        }
        // line 1431
        echo "
\$('.date').datetimepicker({
\tformat: 'YYYY-MM-DD',
\tlocale: 'ru'
});

\$('.time').datetimepicker({
\tformat: 'HH:mm',
\tlocale: 'ru'
});

\$('.datetime').datetimepicker({
\tlocale: 'ru'
});
//--></script>
";
        // line 1446
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 1447
            echo "\t<script type=\"text/javascript\"><!--
\t\t  \t\$('#button-payment-method').attr(\"disabled\", true);
\t//--></script>
";
        }
        // line 1451
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2382 => 1451,  2376 => 1447,  2374 => 1446,  2357 => 1431,  2349 => 1425,  2341 => 1421,  2336 => 1418,  2330 => 1416,  2327 => 1415,  2323 => 1413,  2313 => 1407,  2304 => 1400,  2299 => 1398,  2293 => 1396,  2287 => 1392,  2281 => 1390,  2274 => 1386,  2253 => 1367,  2245 => 1363,  2240 => 1360,  2234 => 1358,  2230 => 1356,  2226 => 1355,  2216 => 1349,  2207 => 1342,  2202 => 1340,  2196 => 1338,  2190 => 1334,  2184 => 1332,  2177 => 1328,  2138 => 1292,  2134 => 1290,  2119 => 1279,  2116 => 1278,  2111 => 1275,  2102 => 1269,  2092 => 1263,  2087 => 1261,  2084 => 1260,  2078 => 1256,  2070 => 1252,  2066 => 1250,  2060 => 1248,  2057 => 1247,  2053 => 1245,  2043 => 1239,  2034 => 1232,  2029 => 1230,  2023 => 1228,  2017 => 1224,  2011 => 1222,  2004 => 1218,  1968 => 1184,  1960 => 1180,  1956 => 1178,  1950 => 1176,  1947 => 1175,  1943 => 1173,  1933 => 1167,  1924 => 1160,  1919 => 1158,  1913 => 1156,  1907 => 1152,  1901 => 1150,  1894 => 1146,  1858 => 1112,  1850 => 1108,  1846 => 1106,  1840 => 1104,  1836 => 1102,  1832 => 1101,  1822 => 1095,  1813 => 1088,  1808 => 1086,  1802 => 1084,  1796 => 1080,  1790 => 1078,  1783 => 1074,  1748 => 1042,  1744 => 1040,  1740 => 1039,  1732 => 1035,  1726 => 1031,  1718 => 1027,  1711 => 1023,  1705 => 1020,  1693 => 1011,  1686 => 1006,  1678 => 1002,  1675 => 1001,  1667 => 995,  1661 => 993,  1653 => 989,  1648 => 986,  1644 => 985,  1639 => 983,  1633 => 981,  1629 => 980,  1623 => 976,  1617 => 974,  1613 => 973,  1609 => 971,  1605 => 969,  1588 => 956,  1583 => 954,  1579 => 952,  1574 => 950,  1568 => 948,  1562 => 945,  1549 => 934,  1541 => 930,  1506 => 897,  1500 => 894,  1492 => 890,  1455 => 855,  1447 => 851,  1440 => 847,  1434 => 844,  1420 => 832,  1412 => 828,  1405 => 824,  1399 => 821,  1381 => 806,  1374 => 801,  1366 => 797,  1329 => 762,  1321 => 758,  1317 => 756,  1311 => 754,  1304 => 750,  1298 => 747,  1284 => 735,  1276 => 731,  1272 => 729,  1266 => 727,  1259 => 723,  1253 => 720,  1240 => 709,  1226 => 698,  1220 => 695,  1212 => 691,  1205 => 686,  1195 => 680,  1192 => 679,  1178 => 669,  1146 => 639,  1141 => 636,  1136 => 633,  1134 => 632,  1126 => 627,  1120 => 623,  1112 => 619,  1108 => 617,  1103 => 614,  1097 => 612,  1093 => 610,  1083 => 604,  1080 => 603,  1066 => 593,  1035 => 564,  1019 => 551,  1011 => 547,  1004 => 542,  994 => 536,  991 => 535,  977 => 525,  943 => 493,  935 => 489,  931 => 487,  922 => 480,  906 => 468,  900 => 464,  890 => 458,  887 => 457,  873 => 447,  839 => 415,  831 => 411,  826 => 408,  821 => 406,  809 => 398,  805 => 396,  793 => 388,  790 => 387,  778 => 379,  746 => 349,  740 => 346,  732 => 342,  699 => 312,  695 => 310,  689 => 307,  681 => 303,  665 => 289,  657 => 285,  644 => 274,  641 => 273,  639 => 272,  635 => 270,  613 => 252,  607 => 249,  603 => 247,  597 => 245,  594 => 244,  592 => 243,  586 => 240,  582 => 239,  579 => 238,  573 => 236,  571 => 235,  566 => 232,  558 => 227,  551 => 222,  547 => 220,  543 => 219,  537 => 216,  534 => 215,  531 => 214,  525 => 210,  523 => 209,  520 => 208,  517 => 207,  515 => 206,  512 => 205,  506 => 202,  501 => 200,  496 => 197,  488 => 192,  483 => 190,  476 => 186,  469 => 185,  462 => 181,  456 => 180,  452 => 179,  447 => 176,  441 => 174,  437 => 173,  431 => 172,  427 => 171,  422 => 169,  417 => 167,  412 => 164,  406 => 162,  401 => 160,  397 => 159,  391 => 156,  387 => 154,  362 => 136,  353 => 134,  348 => 132,  343 => 130,  335 => 125,  328 => 123,  325 => 122,  318 => 118,  311 => 116,  307 => 115,  304 => 114,  293 => 108,  289 => 107,  281 => 102,  270 => 100,  267 => 99,  259 => 94,  248 => 92,  244 => 91,  240 => 89,  233 => 86,  229 => 85,  218 => 83,  214 => 82,  207 => 78,  202 => 76,  194 => 74,  187 => 70,  182 => 68,  178 => 67,  170 => 64,  166 => 63,  161 => 61,  139 => 41,  134 => 40,  130 => 39,  127 => 38,  122 => 36,  119 => 35,  114 => 34,  109 => 33,  107 => 32,  103 => 30,  95 => 26,  93 => 25,  90 => 24,  85 => 21,  83 => 20,  78 => 18,  70 => 16,  67 => 15,  65 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  49 => 9,  45 => 8,  41 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %} */
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %} */
/*   </ul>*/
/*   <div class="row">{{ column_left }} */
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}   */
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="category-head">*/
/*         <h1 class="main-underline">{{ heading_title }}</h1>*/
/*       </div>*/
/* 	  {% if false %}*/
/* 	  <!-- FontAwesome for themes that require it -->*/
/* 	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/* 	  {% endif %}*/
/* 	  <div id="warning-messages">*/
/* 	  	{% if error_warning %}*/
/* 		  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 		    <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		  </div>*/
/* 		{% endif %}*/
/* 	  </div>*/
/* 	  <div id="success-messages"></div>*/
/* 	  {% if mobile_stylesheet %}*/
/* 	  <link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 99999px)" href="{{ stylesheet }}" />*/
/* 	  <link rel="stylesheet" media="screen and (min-width: 1px) and (max-width: 700px)" href="{{ mobile_stylesheet }}" />*/
/* 	  {% else %}   */
/* 	  <link rel="stylesheet" href="{{ stylesheet }}" />*/
/* 	  {% endif %}*/
/* */
/* 	  {% if html_header %} */
/* 	  {{ html_header }} */
/* 	  {% endif %} */
/* 	    <link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/socnetauth2.css">*/
/* 		<div class="content account_socnetauth2_bline_content" style="min-height: 0px;">*/
/* 			<style>*/
/* 			a.socnetauth2_buttons:hover img*/
/* 			{*/
/* 				opacity: 0.8;*/
/* 			}*/
/* 			</style>	*/
/* 			<div class="account_socnetauth2__header">Авторизация/Регистрация через соц.сети: </div>	*/
/* 			<div class="account_socnetauth2_bline_links">*/
/* 				<table>*/
/* 					<tbody><tr>*/
/* 						<td style="padding-right: 10px; padding-top: 10px;"><a class="socnetauth2_buttons" href="/index.php?route=extension/module/socnetauth2/facebook&amp;first=1"><img src="/image/icon-social/fb45.png"></a></td>				*/
/* 						<td style="padding-right: 10px; padding-top: 10px;"><a class="socnetauth2_buttons" href="/index.php?route=extension/module/socnetauth2/gmail&amp;first=1"><img src="/image/icon-social/gm45.png"></a></td>																			</tr>*/
/* 				</tbody></table>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	  <div id="quickcheckoutconfirm">*/
/* 	  	{% if quickcheckout_layout == '4' %} */
/* 			<div class="qc-col-0">*/
/* 				{% if not logged and login_module %} */
/* 					<div class="qc-step" data-col="{{ step['login']['column'] }}" data-row="{{ step['login']['row'] }}">*/
/* 					  <div id="login-box">*/
/* 						<div id="checkout">*/
/* 						  <div class="quickcheckout-heading"><i class="fa fa-sign-in"></i> {{ text_checkout_option }}</div>*/
/* 						  <div class="quickcheckout-content">{{ login }}</div>*/
/* 						</div>*/
/* 						<div class="or">{{ text_or }}</div>*/
/* 					 </div>*/
/* 					 </div>*/
/* 				{% endif %}*/
/* 				<div class="qc-step" data-col="{{ step['payment_address']['column'] }}" data-row="{{ step['payment_address']['row'] }}">*/
/* 					<div id="payment-address">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ not logged ? text_checkout_account : text_checkout_payment_address }}</div>*/
/* 					  <div class="quickcheckout-content">*/
/* 					  {{ guest ? guest : payment_address }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% if shipping_required %} */
/* 				<div class="qc-step {% if not show_shipping_address %}{{ 'hidden' }}{% endif %}" data-col="{{ step['shipping_address']['column'] }}" data-row="{{ step['shipping_address']['row'] }}">*/
/* 					<div id="shipping-address">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ text_checkout_shipping_address }}</div>*/
/* 					  <div class="quickcheckout-content">{{ shipping_address ? shipping_address }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %} */
/* */
/* 				{% if shipping_required %} */
/* 				<div class="qc-step {% if not shipping_module %}{{ 'hidden' }}{% endif %}" data-col="{{ step['shipping_method']['column'] }}" data-row="{{ step['shipping_method']['row'] }}">*/
/* 					<div id="shipping-method">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-truck"></i> {{ text_checkout_shipping_method }}</div>*/
/* 					  <div class="quickcheckout-content"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				<div class="qc-step {% if not payment_module %}{{ 'hidden' }}{% endif %}" data-col="{{ step['payment_method']['column'] }}" data-row="{{ step['payment_method']['row'] }}">*/
/* 					<div id="payment-method">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-credit-card"></i> {{ text_checkout_payment_method }}</div>*/
/* 					  <div class="quickcheckout-content"></div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% if cart_module %} */
/* 				<div class="qc-step" data-col="{{ step['cart']['column'] }}" data-row="{{ step['cart']['row'] }}">*/
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				</div> */
/* 				{% endif %}*/
/* */
/* 				{% if voucher_module or coupon_module or reward_module %} */
/* 				<div class="qc-step" data-col="{{ step['coupons']['column'] }}" data-row="{{ step['coupons']['row'] }}">*/
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				<div class="qc-step" data-col="{{ step['confirm']['column'] }}" data-row="{{ step['confirm']['row'] }}">*/
/* 					<div id="terms">*/
/* 						<div class="quickcheckout-content text-right">{{ terms }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="qc-col-1 col-md-{{ column[1] }}">*/
/* 				</div>*/
/* 				<div class="col-md-{{ column[4] }}">*/
/* 					<div class="row">*/
/* 						<div class="qc-col-2 col-md-{% if column[4] %}{{ ((column[2] / column[4])*12)|round(0, 'floor') }}{% else %}{{ '0' }}{% endif %}">*/
/* 		    			</div>*/
/* 		    			<div class="qc-col-3 col-md-{% if column[4] %}{{ 12 - ((column[2] / column[4])*12)|round(0, 'floor') }}{% else %}{{ '0' }}{% endif %}">*/
/* 		    			</div>*/
/* 						<div class="qc-col-4 col-md-12">*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<script>*/
/* 			$(function() {*/
/* 				$('.qc-step').each(function(){*/
/* 					$(this).appendTo('.qc-col-' + $(this).attr('data-col'));	*/
/* 				})*/
/* 				$('.qc-step').tsort({attr:'data-row'});*/
/* 			})*/
/* 			</script>*/
/* */
/* 		{% else %}*/
/* */
/* 			<div id="quickcheckout-disable">*/
/* 			  {% if not logged and login_module %} */
/* 			  <div class="quickcheckoutmid" id="login-box">*/
/* 				<div id="checkout">*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-sign-in"></i> {{ text_checkout_option }}</div>*/
/* 				  <div class="quickcheckout-content">{{ login }}</div>*/
/* 				</div>*/
/* 				<div class="or">{{ text_or }}</div>*/
/* 			  </div>*/
/* 			  {% endif %} */
/* 			  <div class="quickcheckoutleft">*/
/* 				<div id="payment-address">*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ not logged ? text_checkout_account : text_checkout_payment_address }}</div>*/
/* 				 <div class="quickcheckout-content">*/
/* 				  {{ guest ? guest : payment_address }}</div>*/
/* 				</div>*/
/* 				{% if shipping_required %} */
/* 				<div id="shipping-address" {% if not show_shipping_address %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ text_checkout_shipping_address }}</div>*/
/* 				  <div class="quickcheckout-content">{{ shipping_address ? shipping_address }}</div>*/
/* 				</div>*/
/* 				{% endif %} */
/* 			  </div>*/
/* 			  <div class="quickcheckoutright">*/
/* 				{% if shipping_required %} */
/* 				<div id="shipping-method" {% if not shipping_module %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-truck"></i> {{ text_checkout_shipping_method }}</div>*/
/* 				  <div class="quickcheckout-content"></div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				<div id="payment-method" {% if not payment_module %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-credit-card"></i> {{ text_checkout_payment_method }}</div>*/
/* 				  <div class="quickcheckout-content"></div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  {% if quickcheckout_layout == '2' %} */
/* 				<div class="quickcheckoutleft">*/
/* 				  {% if cart_module %} */
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 				<div style="clear:right;"></div>*/
/* 				<div class="quickcheckoutright">*/
/* 				  {% if voucher_module or coupon_module or reward_module %} */
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 			  {% elseif quickcheckout_layout == '1' or quickcheckout_layout == '3' %}*/
/* 				{% if cart_module or voucher_module or coupon_module or reward_module %}*/
/* 				<div class="quickcheckoutleft extra-width">*/
/* 				  {% if cart_module %}*/
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				  {% if voucher_module or coupon_module or reward_module %}*/
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 				{% endif %} */
/* 			  {% endif %}*/
/* 			  <div style="clear: both;"></div>*/
/* 			</div>*/
/* */
/* 			<div class="quickcheckoutmid">*/
/* 			  <div id="terms">*/
/* 				<div class="quickcheckout-content text-right">{{ terms }}</div>*/
/* 			  </div>*/
/* 			</div>*/
/* */
/* 		{% endif %}*/
/* */
/* 	  </div>*/
/* */
/* 	  {% if html_footer %}*/
/* 	  {{ html_footer }}*/
/* 	  {% endif %}*/
/* */
/* 	{{ content_bottom }}</div>*/
/*   {{ column_right }}</div>*/
/* </div>*/
/* */
/* {% if custom_css %}*/
/* <style type="text/css">*/
/* {{ custom_css }}*/
/* </style>*/
/* {% endif %} */
/* <script type="text/javascript"><!--*/
/* {% if load_screen %} */
/* $(window).load(function() {*/
/*     $.blockUI({*/
/* 		message: '<h1 style="color:#ffffff;">{{ text_please_wait }}</h1>',*/
/* 		css: {*/
/* 			border: 'none',*/
/* 			padding: '15px',*/
/* 			backgroundColor: '#000000',*/
/* 			'-webkit-border-radius': '10px',*/
/* 			'-moz-border-radius': '10px',*/
/* 			'-khtml-border-radius': '10px',*/
/* 			'border-radius': '10px',*/
/* 			opacity: .8,*/
/* 			color: '#ffffff'*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	setTimeout(function() {*/
/* 		$.unblockUI();*/
/* 	}, 2000);*/
/* });*/
/* {% endif %} */
/* */
/* {% if not logged %}*/
/* 	{% if save_data %}*/
/* 	// Save form data*/
/* 	$(document).on('change', '#payment-address input[type=\'text\'], #payment-address select', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',*/
/* 			type: 'post',*/
/* 			data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				// No action needed*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* */
/* 	$(document).on('change', '#shipping-address input[type=\'text\'], #shipping-address select', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',*/
/* 			type: 'post',*/
/* 			data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				// No action needed*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* 	{% endif %} */
/* 	*/
/* 	{% if login_module %} */
/* 	// Login Form Clicked*/
/* 	$(document).on('click', '#button-login', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/login/validate',*/
/* 			type: 'post',*/
/* 			data: $('#checkout #login :input'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				$('#button-login').prop('disabled', true);*/
/* 				$('#button-login').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-login').prop('disabled', false);*/
/* 				$('#button-login').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$('.alert').remove();*/
/* */
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* 	{% endif %} */
/* */
/* // Validate Register*/
/* function validateRegister() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/register/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 							*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					if (json['error']['password']) {*/
/* 						$('#payment-address input[name=\'password\']').after('<div class="text-danger">' + json['error']['password'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['error']['confirm']) {*/
/* 						$('#payment-address input[name=\'confirm\']').after('<div class="text-danger">' + json['error']['confirm'] + '</div>');*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					if (json['error']['password']) {*/
/* 						$('#payment-address input[name=\'password\']').css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* */
/* 					if (json['error']['confirm']) {*/
/* 						$('#payment-address input[name=\'confirm\']').css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				{% if shipping_required %} */
/* 				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();*/
/* */
/* 				if (shipping_address) {*/
/* 					validateShippingMethod();*/
/* 				} else {*/
/* 					validateGuestShippingAddress();*/
/* 				}*/
/* 				{% else %}  */
/* 				validatePaymentMethod();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Guest Payment Address*/
/* function validateGuestAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/guest/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {		*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				var create_account = $('#payment-address input[name=\'create_account\']:checked').val();*/
/* */
/* 				{% if shipping_required %} */
/* 				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();*/
/* */
/* 				if (create_account) {*/
/* 					validateRegister();*/
/* 				} else {*/
/* 					if (shipping_address) {*/
/* 						validateShippingMethod();*/
/* 					} else {*/
/* 						validateGuestShippingAddress();*/
/* 					}*/
/* 				}*/
/* 				{% else %}   */
/* 				if (create_account) {*/
/* 					validateRegister();*/
/* 				} else {*/
/* 					validatePaymentMethod();*/
/* 				}*/
/* 				{% endif %}*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Guest Shipping Address*/
/* function validateGuestShippingAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/guest_shipping/validate',*/
/* 		type: 'post',*/
/* 		data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select, #shipping-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				validateShippingMethod();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Confirm Payment*/
/* $(document).on('click', '#button-payment-method', function() {*/
/* 	$('#button-payment-method').prop('disabled', true);*/
/* 	$('#button-payment-method').button('loading');*/
/* 	*/
/* 	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 	*/
/* 	validateGuestAddress();*/
/* });*/
/* {% else %}   */
/* // Validate Payment Address*/
/* function validatePaymentAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_address/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				{% if shipping_required %} */
/* 					validateShippingAddress();*/
/* 				{% else %}   */
/* 					validatePaymentMethod();*/
/* 				{% endif %}*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* {% if shipping_required %} */
/* // Validate Shipping Address*/
/* function validateShippingAddress() {*/
/* 	var payment_mode = $('input[name="payment_address"]:checked').val();*/
/* 	if (payment_mode == 'new') {*/
/* 		{% if logged and not show_shipping_address %}*/
/* 			var addressType = '#payment-address';*/
/* 			var shipping_mode = 'input[name="shipping_address"]:checked, ';*/
/* 		{% else %}*/
/* 			var addressType = '#shipping-address';*/
/* 			var shipping_mode = '';*/
/* 		{% endif %}*/
/* 	} else {*/
/* 		var addressType = '#shipping-address';*/
/* 		var shipping_mode = '';*/
/* 	}*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/shipping_address/validate',*/
/* 		type: 'post',*/
/* 		data: $(shipping_mode + addressType +' input[type=\'text\'], '+addressType +' input[type=\'password\'], '+addressType +' input[type=\'checkbox\']:checked, '+addressType +' input[type=\'radio\']:checked, '+addressType +' select, '+addressType +' textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				validateShippingMethod();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* {% endif %} */
/* */
/* // Confirm payment*/
/* $(document).on('click', '#button-payment-method', function() {*/
/* 	$('#button-payment-method').prop('disabled', true);*/
/* 	$('#button-payment-method').button('loading');*/
/* 	*/
/* 	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 	*/
/* 	validatePaymentAddress();*/
/* });*/
/* {% endif %}// Close if logged php*/
/* */
/* // Payment Method*/
/* function reloadPaymentMethod() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			moduleLoad($('#payment-method'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#payment-method'), {{ loading_display }} );*/
/* 			*/
/* 			$('#payment-method .quickcheckout-content').html(html);*/
/* 			*/
/* 			{% if load_screen %} */
/* 			$.unblockUI();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* function reloadPaymentMethodById(address_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,*/
/* 		type: 'post',*/
/* 		data: $('#payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			moduleLoad($('#payment-method'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#payment-method'), {{ loading_display }} );*/
/* 			*/
/* 			$('#payment-method .quickcheckout-content').html(html);*/
/* 			*/
/* 			{% if load_screen %} */
/* 			$.unblockUI();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Payment Method*/
/* function validatePaymentMethod() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-method select, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'checkbox\']:checked, #payment-method textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			} else {*/
/* 				validateTerms();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Shipping Method*/
/* {% if shipping_required %} */
/* 	function reloadShippingMethod(type) {*/
/* 		if (type == 'payment') {*/
/* 			var post_data = $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		} else {*/
/* 			var post_data = $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		}*/
/* 		*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method',*/
/* 			type: 'post',*/
/* 			data: post_data,*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				moduleLoad($('#shipping-method'), {{ loading_display }} );*/
/* 			},*/
/* 			success: function(html) {*/
/* 				moduleLoaded($('#shipping-method'), {{ loading_display }} );*/
/* 				*/
/* 				$('#shipping-method .quickcheckout-content').html(html);*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* */
/* 	function reloadShippingMethodById(address_id) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,*/
/* 			type: 'post',*/
/* 			data: $('#shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea'),*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				moduleLoad($('#shipping-method'), {{ loading_display }} );*/
/* 			},*/
/* 			success: function(html) {*/
/* 				moduleLoaded($('#shipping-method'), {{ loading_display }} );*/
/* 				*/
/* 				$('#shipping-method .quickcheckout-content').html(html);*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* */
/* 	// Validate Shipping Method*/
/* 	function validateShippingMethod() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method/validate',*/
/* 			type: 'post',*/
/* 			data: $('#shipping-method select, #shipping-method input[type=\'radio\']:checked, #shipping-method textarea, #shipping-method input[type=\'text\']'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* */
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					$('#button-payment-method').prop('disabled', false);*/
/* 					$('#button-payment-method').button('reset');*/
/* 					$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 					*/
/* 					$('.fa-spinner').remove();*/
/* 					*/
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 					if (json['error']['warning']) {*/
/* 						$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 						$('.alert-danger').fadeIn('slow');*/
/* 					}*/
/* 				} else {*/
/* 					validatePaymentMethod();*/
/* 				}*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* {% endif %} */
/* */
/* // Validate confirm button*/
/* function validateTerms() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/terms/validate',*/
/* 		type: 'post',*/
/* 		data: $('#terms input[type=\'checkbox\']:checked'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			}*/
/* 		*/
/* 			if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			} else {*/
/* 				loadConfirm();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Load confirm*/
/* function loadConfirm() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/confirm',*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			{% if confirmation_page %} */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			*/
/* 				{% if slide_effect %} */
/* 				$('#quickcheckoutconfirm').slideUp('slow');*/
/* 				{% else %}   */
/* 				$('#quickcheckoutconfirm').html('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %} */
/* 			*/
/* 				{% if load_screen %} */
/* 				$.blockUI({*/
/* 					message: '<h1 style="color:#ffffff;">{{ text_please_wait }}</h1>',*/
/* 					css: {*/
/* 						border: 'none',*/
/* 						padding: '15px',*/
/* 						backgroundColor: '#000000',*/
/* 						'-webkit-border-radius': '10px',*/
/* 						'-moz-border-radius': '10px',*/
/* 						'-khtml-border-radius': '10px',*/
/* 						'border-radius': '10px',*/
/* 						opacity: .8,*/
/* 						color: '#ffffff'*/
/* 					}*/
/* 				});*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 		},*/
/* 		success: function(html) {*/
/* 			{% if confirmation_page %} */
/* 				{% if load_screen %} */
/* 				$.unblockUI();*/
/* 				{% endif %} */
/* 				*/
/* 				$('#quickcheckoutconfirm').hide().html(html);*/
/* 				*/
/* 				{% if not auto_submit %} */
/* 					{% if slide_effect %} */
/* 					$('#quickcheckoutconfirm').slideDown('slow');*/
/* 					{% else %}   */
/* 					$('#quickcheckoutconfirm').show();*/
/* 					{% endif %} */
/* 				{% else %}   */
/* 				$('#quickcheckoutconfirm').after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %}*/
/* 			{% else %}   */
/* 				$('#terms .terms').hide();*/
/* 				$('#payment').html(html).slideDown('fast');*/
/* 				*/
/* 				{% if auto_submit %} */
/* 				$('#payment').hide().after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %} */
/* 				*/
/* 				$('html, body').animate({ scrollTop: $('#terms').offset().top }, 'slow');*/
/* 				*/
/* 				disableCheckout();*/
/* 			{% endif %}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Load cart*/
/* {% if cart_module %} */
/* function loadCart() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart',*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('.tooltip').remove();*/
/* 			*/
/* 			moduleLoad($('#cart1'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#cart1'), {{ loading_display }} );*/
/* 			*/
/* 			$('#cart1 .quickcheckout-content').html(html);*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* 	{% if not shipping_required %} */
/* 	$(document).ready(function(){*/
/* 		loadCart();*/
/* 	});*/
/* 	{% endif %} */
/* {% endif %} */
/* */
/* {% if voucher_module or coupon_module or reward_module %} */
/* // Validate Coupon*/
/* $(document).on('click', '#button-coupon', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',*/
/* 		type: 'post',*/
/* 		data: $('#coupon-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').prop('disabled', true);*/
/* 			$('#button-coupon').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').prop('disabled', false);*/
/* 			$('#coupon-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %} */
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-voucher', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',*/
/* 		type: 'post',*/
/* 		data: $('#voucher-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').prop('disabled', true);*/
/* 			$('#button-voucher').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').prop('disabled', false);*/
/* 			$('#voucher-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-reward', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateReward',*/
/* 		type: 'post',*/
/* 		data: $('#reward-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward').prop('disabled', true);*/
/* 			$('#button-reward').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward').prop('disabled', false);*/
/* 			$('#reward-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* {% endif %}*/
/* */
/* {% if shipping_required %} */
/* $(document).on('focusout', 'input[name=\'postcode\']', function() {*/
/* 	{% if not logged %} */
/* 	if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 		reloadShippingMethod('payment');*/
/* 	} else {*/
/* 		reloadShippingMethod('shipping');*/
/* 	}*/
/* 	{% else %}   */
/* 	if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 		reloadShippingMethod('shipping');*/
/* 	} else {*/
/* 		reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 	}*/
/* 	{% endif %} */
/* });*/
/* {% endif %}*/
/* */
/* {% if highlight_error %} */
/* 	$(document).on('keydown', 'input', function() {*/
/* 		$(this).css('background', '').css('border', '');*/
/* 		*/
/* 		$(this).siblings('.text-danger').remove();*/
/* 	});*/
/* 	$(document).on('change', 'select', function() {*/
/* 		$(this).css('background', '').css('border', '');*/
/* 		*/
/* 		$(this).siblings('.text-danger').remove();*/
/* 	});*/
/* {% endif %} */
/* */
/* {% if edit_cart %} */
/* $(document).on('click', '.button-update', function() {*/
/* */
/* 	var quantity = $(this).parents('.quantity').find('input.qc-product-qantity');*/
/* 	if (quantity.length){*/
/* 		if ($(this).data('type')=='increase') {*/
/* 			quantity.val(parseInt(quantity.val())+1);*/
/* 		} else if ($(this).data('type')=='decrease') {*/
/* 			quantity.val(parseInt(quantity.val())-1);*/
/* 		}*/
/* 	}*/
/* 	*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart/update',*/
/* 		type: 'post',*/
/* 		data: $('#cart1 :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			//$('#cart1 .button-update').prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else {*/
/* 				if (json['error']['stock']) {*/
/* 					$('#button-payment-method').attr("disabled", true);*/
/* 				} else if (json['error']['warning']) {*/
/* 						$('#warning-messages').html('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 						$('.alert-danger').fadeIn('slow');*/
/* 						$('#button-payment-method').attr("disabled", true);*/
/* 				} else {*/
/* 					$('#warning-messages').html('');*/
/* 					$('#button-payment-method').removeAttr("disabled");*/
/* 				}*/
/* */
/* 				{% if not logged %} */
/* 					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('payment');*/
/* 						{% endif %} */
/* 					} else {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('shipping');*/
/* 						{% endif %} */
/* 					}*/
/* 				{% else %}   */
/* 					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 						reloadPaymentMethod();*/
/* 					} else {*/
/* 						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 						reloadShippingMethod('shipping');*/
/* 					} else {*/
/* 						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					{% endif %} */
/* 				{% endif %} */
/* 				*/
/* 				{% if not shipping_required %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '.button-remove', function() {*/
/* 	var remove_id = $(this).attr('data-remove');*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,*/
/* 		type: 'get',*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#cart1 .button-remove').prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else {*/
/* 				{% if not logged %} */
/* 					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('payment');*/
/* 						{% endif %} */
/* 					} else {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('shipping');*/
/* 						{% endif %} */
/* 					}*/
/* 				{% else %}   */
/* 					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 						reloadPaymentMethod();*/
/* 					} else {*/
/* 						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 						reloadShippingMethod('shipping');*/
/* 					} else {*/
/* 						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					{% endif %} */
/* 				{% endif %}*/
/* 				*/
/* 				{% if not shipping_required %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* */
/* 	return false;*/
/* });*/
/* {% endif %}*/
/* */
/* $('.date').datetimepicker({*/
/* 	format: 'YYYY-MM-DD',*/
/* 	locale: 'ru'*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	format: 'HH:mm',*/
/* 	locale: 'ru'*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	locale: 'ru'*/
/* });*/
/* //--></script>*/
/* {% if error_warning %}*/
/* 	<script type="text/javascript"><!--*/
/* 		  	$('#button-payment-method').attr("disabled", true);*/
/* 	//--></script>*/
/* {% endif %}*/
/* {{ footer }}*/
