<?php

/* default/template/product/product.twig */
class __TwigTemplate_6a3aee18518b1f4aec8b208a89bd78f6f29d7b31d10137ce2697b0966f63d0b2 extends Twig_Template
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
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
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
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "

      ";
        // line 18
        if (((isset($context["category_id_statji"]) ? $context["category_id_statji"] : null) == "68")) {
            // line 19
            echo "      <div id=\"content\" class=\"col-sm-12\">
              <h1>";
            // line 20
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
              ";
            // line 21
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
\t\t\t  </div></div></div>

      ";
        } else {
            // line 25
            echo "
    <div id=\"content\" class=\"";
            // line 26
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">
\t";
            // line 27
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo "
      <div class=\"row\"> ";
            // line 28
            if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 29
                echo "        ";
                $context["class"] = "col-sm-6";
                // line 30
                echo "        ";
            } else {
                // line 31
                echo "        ";
                $context["class"] = "col-sm-8";
                // line 32
                echo "        ";
            }
            // line 33
            echo "        <div class=\"";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\"> ";
            if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
                // line 34
                echo "          <ul class=\"thumbnails\">
            ";
                // line 35
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 36
                    echo "            <li><a class=\"thumbnail\" href=\"";
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"><img src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" id=\"zoom_01\" data-zoom-image=\"";
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\"  id=\"zoom_01\" data-zoom-image=\"";
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a></li>
            ";
                }
                // line 38
                echo "            ";
                if ((isset($context["images"]) ? $context["images"] : null)) {
                    // line 39
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 40
                        echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                        echo $this->getAttribute($context["image"], "popup", array());
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"> <img src=\"";
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" /></a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "            ";
                }
                // line 43
                echo "          </ul>
          ";
            }
            // line 45
            echo "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
            // line 46
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a></li>
            ";
            // line 47
            if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
                // line 48
                echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
                echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
                echo "</a></li>
            ";
            }
            // line 50
            echo "            ";
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 51
                echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
                echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
                echo "</a></li>
            ";
            }
            // line 53
            echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
            // line 55
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
            ";
            // line 56
            if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
                // line 57
                echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                    // line 60
                    echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                    // line 62
                    echo $this->getAttribute($context["attribute_group"], "name", array());
                    echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 67
                        echo "                <tr>
                  <td>";
                        // line 68
                        echo $this->getAttribute($context["attribute"], "name", array());
                        echo "</td>
                  <td>";
                        // line 69
                        echo $this->getAttribute($context["attribute"], "text", array());
                        echo "</td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                  </tbody>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "              </table>
            </div>
            ";
            }
            // line 77
            echo "            ";
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 78
                echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
                // line 81
                echo (isset($context["text_write"]) ? $context["text_write"] : null);
                echo "</h2>
                ";
                // line 82
                if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                    // line 83
                    echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                    // line 85
                    echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                    echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                    // line 86
                    echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                    echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                    // line 91
                    echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                    echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                    // line 93
                    echo (isset($context["text_note"]) ? $context["text_note"] : null);
                    echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                    // line 98
                    echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                    echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                    // line 99
                    echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                    echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                    // line 109
                    echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                    echo "</div>
                </div>
                ";
                    // line 111
                    echo (isset($context["captcha"]) ? $context["captcha"] : null);
                    echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                    // line 114
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-primary\">";
                    echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                    echo "</button>
                  </div>
                </div>
                ";
                } else {
                    // line 118
                    echo "                ";
                    echo (isset($context["text_login"]) ? $context["text_login"] : null);
                    echo "
                ";
                }
                // line 120
                echo "              </form>
            </div>
            ";
            }
            // line 122
            echo "</div>
        </div>
        ";
            // line 124
            if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 125
                echo "        ";
                $context["class"] = "col-sm-6";
                // line 126
                echo "        ";
            } else {
                // line 127
                echo "        ";
                $context["class"] = "col-sm-4";
                // line 128
                echo "        ";
            }
            // line 129
            echo "        <div class=\"";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">
          <div class=\"btn-group btn-group__block\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
            // line 131
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
            // line 132
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
<button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
            // line 133
            echo (isset($context["text_compareprod"]) ? $context["text_compareprod"] : null);
            echo "\" onclick=\"window.open('index.php?route=product/compare','_self');\"><i class=\"fa fa-balance-scale\"></i></button>
          </div>
          <h1 class=\"heading__block-11\">";
            // line 135
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
          <ul class=\"list-unstyled heading__block-list\">
            ";
            // line 137
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 138
                echo "            <li>";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo ": <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
            ";
            }
            // line 140
            echo "            <li>";
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo " ";
            echo (isset($context["model"]) ? $context["model"] : null);
            echo "</li>
            ";
            // line 141
            if ((isset($context["reward"]) ? $context["reward"] : null)) {
                // line 142
                echo "            <li>";
                echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
                echo " ";
                echo (isset($context["reward"]) ? $context["reward"] : null);
                echo "</li>
            ";
            }
            // line 144
            echo "            <li>";
            echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
            echo " <span class=\"stock__block\">";
            echo (isset($context["stock"]) ? $context["stock"] : null);
            echo "</span></li>
          </ul>
          ";
            // line 146
            if ((isset($context["price"]) ? $context["price"] : null)) {
                // line 147
                echo "          <ul class=\"list-unstyled\">
            ";
                // line 148
                if ( !(isset($context["special"]) ? $context["special"] : null)) {
                    // line 149
                    echo "            <li>
              <h2 class=\"stock__block-price\">";
                    // line 150
                    echo (isset($context["price"]) ? $context["price"] : null);
                    echo "</h2>
            </li>
            ";
                } else {
                    // line 153
                    echo "            <li><span style=\"text-decoration: line-through;\" class=\"stock__block-special-line\">";
                    echo (isset($context["price"]) ? $context["price"] : null);
                    echo "</span></li>
            <li>
              <h2 class=\"stock__block-special\">";
                    // line 155
                    echo (isset($context["special"]) ? $context["special"] : null);
                    echo "</h2>
\t\t\t   ";
                    // line 156
                    if ((isset($context["specialSavings"]) ? $context["specialSavings"] : null)) {
                        // line 157
                        echo "                <h3  class=\"stock__block-specialsavings\">Акция -";
                        echo ((array_key_exists("specialSavings", $context)) ? (_twig_default_filter((isset($context["specialSavings"]) ? $context["specialSavings"] : null))) : (""));
                        echo "%</h3>
                ";
                    }
                    // line 159
                    echo "            </li>
            ";
                }
                // line 161
                echo "            ";
                if ((isset($context["tax"]) ? $context["tax"] : null)) {
                    // line 162
                    echo "            <li>";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo (isset($context["tax"]) ? $context["tax"] : null);
                    echo "</li>
            ";
                }
                // line 164
                echo "            ";
                if ((isset($context["points"]) ? $context["points"] : null)) {
                    // line 165
                    echo "            <li>";
                    echo (isset($context["text_points"]) ? $context["text_points"] : null);
                    echo " ";
                    echo (isset($context["points"]) ? $context["points"] : null);
                    echo "</li>
            ";
                }
                // line 167
                echo "            ";
                if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                    // line 168
                    echo "            <li>
              <hr>
            </li>
            ";
                    // line 171
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                        // line 172
                        echo "            <li>";
                        echo $this->getAttribute($context["discount"], "quantity", array());
                        echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                        echo $this->getAttribute($context["discount"], "price", array());
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "            ";
                }
                // line 175
                echo "          </ul>
          ";
            }
            // line 177
            echo "          <div id=\"product\"> ";
            if ((isset($context["options"]) ? $context["options"] : null)) {
                // line 178
                echo "            <hr>
            <!--<h3>";
                // line 179
                echo (isset($context["text_option"]) ? $context["text_option"] : null);
                echo "</h3>-->
            ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 181
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                        // line 182
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 183
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <select name=\"option[";
                        // line 184
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" class=\"form-control\">
                <option value=\"\">";
                        // line 185
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>
                ";
                        // line 186
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 187
                            echo "                <option value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "
                ";
                            // line 188
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 189
                                echo "                (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")
                ";
                            }
                            // line 190
                            echo " </option>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 192
                        echo "              </select>
            </div>
            ";
                    }
                    // line 195
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                        // line 196
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\">";
                        // line 197
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <div id=\"input-option";
                        // line 198
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 199
                            echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                            // line 201
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" />
                    ";
                            // line 202
                            if ($this->getAttribute($context["option_value"], "image", array())) {
                                echo " <!--<img src=\"";
                                echo $this->getAttribute($context["option_value"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo " ";
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" />--> ";
                            }
                            echo "                  
                    ";
                            // line 203
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "
                    ";
                            // line 204
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 205
                                echo "                    (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")
                    ";
                            }
                            // line 206
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 208
                        echo " </div>
            </div>
            ";
                    }
                    // line 211
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                        // line 212
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\">";
                        // line 213
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <div id=\"input-option";
                        // line 214
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 215
                            echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                            // line 217
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" />
                    ";
                            // line 218
                            if ($this->getAttribute($context["option_value"], "image", array())) {
                                echo " <img src=\"";
                                echo $this->getAttribute($context["option_value"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo " ";
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 219
                            echo "                    ";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "
                    ";
                            // line 220
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 221
                                echo "                    (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")
                    ";
                            }
                            // line 222
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 224
                        echo " </div>
            </div>
            ";
                    }
                    // line 227
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                        // line 228
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 229
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <input type=\"text\" name=\"option[";
                        // line 230
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" class=\"form-control\" />
            </div>
            ";
                    }
                    // line 233
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                        // line 234
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 235
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <textarea name=\"option[";
                        // line 236
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" class=\"form-control\">";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</textarea>
            </div>
            ";
                    }
                    // line 239
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                        // line 240
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\">";
                        // line 241
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <button type=\"button\" id=\"button-upload";
                        // line 242
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" data-loading-text=\"";
                        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                        echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                        echo "</button>
              <input type=\"hidden\" name=\"option[";
                        // line 243
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" />
            </div>
            ";
                    }
                    // line 246
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                        // line 247
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 248
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                        // line 250
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                    }
                    // line 256
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                        // line 257
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 258
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                        // line 260
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                    }
                    // line 266
                    echo "            ";
                    if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                        // line 267
                        echo "            <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 268
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                        // line 270
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                    }
                    // line 276
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                echo "            ";
            }
            // line 278
            echo "            ";
            if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
                // line 279
                echo "            <hr>
            <h3>";
                // line 280
                echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
                echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
                // line 283
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                ";
                // line 284
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 285
                    echo "                <option value=\"";
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
            }
            // line 291
            echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
            // line 292
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
<div class=\"input-group number-spinner\">
\t\t\t      <span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" data-dir=\"dwn\"><i class=\"fa fa-minus\"></i></button>
\t\t\t      </span>
\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 297
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"form-control text-center\" />
\t\t\t\t  <span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" data-dir=\"up\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t  </span>
\t\t\t    </div>
              
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 303
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" />
              <br />

\t  <button type=\"button\" id=\"button-checkout\" data-loading-text=\"";
            // line 306
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo (isset($context["text_buy_now"]) ? $context["text_buy_now"] : null);
            echo "</button>
\t   
              
\t\t\t\t";
            // line 309
            if (((isset($context["stock_quantity"]) ? $context["stock_quantity"] : null) < 1)) {
                echo " 
\t\t\t\t\t<button type=\"button\" id=\"button-outstock\" disabled=\"disabled\" data-loading-text=\"";
                // line 310
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-warning btn-lg btn-block\"><i class=\"fa fa-exclamation-triangle\"></i> ";
                echo (isset($context["text_out_of_stock"]) ? $context["text_out_of_stock"] : null);
                echo "</button>
\t\t\t\t";
            } else {
                // line 312
                echo "\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary btn-lg btn-block\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</button>
\t\t\t\t";
            }
            // line 314
            echo "\t\t\t
            </div>
            ";
            // line 316
            if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
                // line 317
                echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
                echo "</div>
            ";
            }
            // line 318
            echo "</div>
          ";
            // line 319
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 320
                echo "          <div class=\"rating\">
\t\t\t  <p>";
                // line 321
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 322
                    echo "              ";
                    if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                        echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                    } else {
                        echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                    }
                    // line 323
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
                echo (isset($context["reviews"]) ? $context["reviews"] : null);
                echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
                echo (isset($context["text_write"]) ? $context["text_write"] : null);
                echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
                // line 326
                echo (isset($context["share"]) ? $context["share"] : null);
                echo "\">
                <a class=\"addthis_button_facebook\"></a>
                <a class=\"addthis_button_viber\"></a>
                <a class=\"addthis_button_telegram\"></a>
                <a class=\"addthis_button_gmail\"></a>
            </div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
            <!-- AddThis Button END --> 
          </div>
          ";
            }
            // line 335
            echo " </div>
      </div>
      ";
            // line 337
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 338
                echo "      <h3>";
                echo (isset($context["text_related"]) ? $context["text_related"] : null);
                echo "</h3>
      <div class=\"row\"> ";
                // line 339
                $context["i"] = 0;
                // line 340
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 341
                    echo "        ";
                    if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                        // line 342
                        echo "        ";
                        $context["class"] = "col-xs-8 col-sm-6";
                        // line 343
                        echo "        ";
                    } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                        // line 344
                        echo "        ";
                        $context["class"] = "col-xs-6 col-md-4";
                        // line 345
                        echo "        ";
                    } else {
                        // line 346
                        echo "        ";
                        $context["class"] = "col-xs-6 col-sm-3";
                        // line 347
                        echo "        ";
                    }
                    // line 348
                    echo "        <div class=\"";
                    echo (isset($context["class"]) ? $context["class"] : null);
                    echo "\">
          <div class=\"product-thumb transition\">
            
\t\t\t\t";
                    // line 351
                    $context["flip"] = "";
                    // line 352
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "rthumbs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["rthumb"]) {
                        // line 353
                        echo "\t\t\t\t\t";
                        $context["flip"] = ((((isset($context["flip"]) ? $context["flip"] : null) . "\"") . $this->getAttribute($context["rthumb"], "flipimage", array())) . "\",");
                        // line 354
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rthumb'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 355
                    echo "\t\t\t\t
\t\t\t\t";
                    // line 356
                    $context["flipimages"] = trim((isset($context["flip"]) ? $context["flip"] : null), ",");
                    // line 357
                    echo "\t\t\t\t
\t\t\t\t<div class=\"image\" data-images='[\"";
                    // line 358
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\",";
                    echo (isset($context["flipimages"]) ? $context["flipimages"] : null);
                    echo "]'><a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
<i class=\"icon-left-circle\"></i><i class=\"icon-right-circle\"></i><img src=\"";
                    // line 359
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t
            <div class=\"caption\">
              <h4><a href=\"";
                    // line 362
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></h4>
              <p>";
                    // line 363
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</p>
              ";
                    // line 364
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 365
                        echo "              <div class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 366
                            echo "                ";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                            }
                            // line 367
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " </div>
              ";
                    }
                    // line 369
                    echo "              ";
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 370
                        echo "              <p class=\"price\"> ";
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 371
                            echo "                ";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
                ";
                        } else {
                            // line 372
                            echo " <span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span> ";
                        }
                        // line 373
                        echo "                ";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            echo " <span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span> ";
                        }
                        echo " </p>
              ";
                    }
                    // line 374
                    echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                    // line 376
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 377
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 378
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                    // line 382
                    if ((((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null)) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 2) == 0))) {
                        // line 383
                        echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                    } elseif ((                    // line 384
(isset($context["column_left"]) ? $context["column_left"] : null) || ((isset($context["column_right"]) ? $context["column_right"] : null) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 3) == 0)))) {
                        // line 385
                        echo "        <div class=\"clearfix visible-md\"></div>
        ";
                    } elseif ((((                    // line 386
(isset($context["i"]) ? $context["i"] : null) + 1) % 4) == 0)) {
                        // line 387
                        echo "        <div class=\"clearfix visible-md\"></div>
        ";
                    }
                    // line 389
                    echo "        ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 390
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " </div>
        ";
            }
            // line 392
            echo "        ";
            if ((isset($context["tags"]) ? $context["tags"] : null)) {
                // line 393
                echo "        <p>";
                echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
                echo "
        ";
                // line 394
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 395
                    echo "        ";
                    if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                        echo " <a href=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                        echo "</a>,
        ";
                    } else {
                        // line 396
                        echo " <a href=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                        echo "</a> ";
                    }
                    // line 397
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " </p>
        ";
            }
            // line 399
            echo "      ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>
    ";
            // line 400
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>
</div>
";
        }
        // line 403
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--

\$('#button-checkout').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-checkout').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-checkout').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}
\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t window.location.href = \"index.php?route=checkout/checkout\";
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
\t\t\t
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 525
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 530
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 536
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 603
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 607
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 

\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\$('.image').imagesRotation();
\t\t\t//--></script>
\t\t\t
<script type=\"text/javascript\"><!--
\$(document).on('click', '.number-spinner button', function () {    
\tvar btn = \$(this),
\t\toldValue = btn.closest('.number-spinner').find('input').val().trim(),
\t\tnewVal = 1;
\t\t\t
\tif (btn.attr('data-dir') == 'up') {
\t\tnewVal = parseInt(oldValue) + 1;
\t} else {
\t\tif (oldValue > 1) {
\t\t\tnewVal = parseInt(oldValue) - 1;
\t\t} else {
\t\t\tnewVal = 1;
\t\t}
\t}
\tbtn.closest('.number-spinner').find('input').val(newVal);
});
//--></script>
";
        // line 668
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1611 => 668,  1547 => 607,  1540 => 603,  1470 => 536,  1461 => 530,  1453 => 525,  1329 => 403,  1323 => 400,  1318 => 399,  1309 => 397,  1302 => 396,  1292 => 395,  1288 => 394,  1283 => 393,  1280 => 392,  1271 => 390,  1268 => 389,  1264 => 387,  1262 => 386,  1259 => 385,  1257 => 384,  1254 => 383,  1252 => 382,  1243 => 378,  1237 => 377,  1229 => 376,  1225 => 374,  1213 => 373,  1206 => 372,  1200 => 371,  1197 => 370,  1194 => 369,  1185 => 367,  1178 => 366,  1173 => 365,  1171 => 364,  1167 => 363,  1161 => 362,  1151 => 359,  1143 => 358,  1140 => 357,  1138 => 356,  1135 => 355,  1129 => 354,  1126 => 353,  1121 => 352,  1119 => 351,  1112 => 348,  1109 => 347,  1106 => 346,  1103 => 345,  1100 => 344,  1097 => 343,  1094 => 342,  1091 => 341,  1086 => 340,  1084 => 339,  1079 => 338,  1077 => 337,  1073 => 335,  1060 => 326,  1046 => 323,  1039 => 322,  1035 => 321,  1032 => 320,  1030 => 319,  1027 => 318,  1021 => 317,  1019 => 316,  1015 => 314,  1007 => 312,  1000 => 310,  996 => 309,  988 => 306,  982 => 303,  973 => 297,  965 => 292,  962 => 291,  956 => 287,  945 => 285,  941 => 284,  937 => 283,  931 => 280,  928 => 279,  925 => 278,  922 => 277,  916 => 276,  903 => 270,  896 => 268,  889 => 267,  886 => 266,  873 => 260,  866 => 258,  859 => 257,  856 => 256,  843 => 250,  836 => 248,  829 => 247,  826 => 246,  818 => 243,  810 => 242,  806 => 241,  799 => 240,  796 => 239,  784 => 236,  778 => 235,  771 => 234,  768 => 233,  756 => 230,  750 => 229,  743 => 228,  740 => 227,  735 => 224,  727 => 222,  720 => 221,  718 => 220,  713 => 219,  697 => 218,  691 => 217,  687 => 215,  681 => 214,  677 => 213,  670 => 212,  667 => 211,  662 => 208,  654 => 206,  647 => 205,  645 => 204,  641 => 203,  623 => 202,  617 => 201,  613 => 199,  607 => 198,  603 => 197,  596 => 196,  593 => 195,  588 => 192,  581 => 190,  574 => 189,  572 => 188,  565 => 187,  561 => 186,  557 => 185,  551 => 184,  545 => 183,  538 => 182,  535 => 181,  531 => 180,  527 => 179,  524 => 178,  521 => 177,  517 => 175,  514 => 174,  503 => 172,  499 => 171,  494 => 168,  491 => 167,  483 => 165,  480 => 164,  472 => 162,  469 => 161,  465 => 159,  459 => 157,  457 => 156,  453 => 155,  447 => 153,  441 => 150,  438 => 149,  436 => 148,  433 => 147,  431 => 146,  423 => 144,  415 => 142,  413 => 141,  406 => 140,  396 => 138,  394 => 137,  389 => 135,  384 => 133,  378 => 132,  372 => 131,  366 => 129,  363 => 128,  360 => 127,  357 => 126,  354 => 125,  352 => 124,  348 => 122,  343 => 120,  337 => 118,  328 => 114,  322 => 111,  317 => 109,  304 => 99,  300 => 98,  292 => 93,  287 => 91,  279 => 86,  275 => 85,  271 => 83,  269 => 82,  265 => 81,  260 => 78,  257 => 77,  252 => 74,  245 => 72,  236 => 69,  232 => 68,  229 => 67,  225 => 66,  218 => 62,  214 => 60,  210 => 59,  206 => 57,  204 => 56,  200 => 55,  196 => 53,  190 => 51,  187 => 50,  181 => 48,  179 => 47,  175 => 46,  172 => 45,  168 => 43,  165 => 42,  148 => 40,  143 => 39,  140 => 38,  122 => 36,  120 => 35,  117 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  98 => 28,  94 => 27,  90 => 26,  87 => 25,  80 => 21,  76 => 20,  73 => 19,  71 => 18,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* */
/* */
/*       {% if category_id_statji == '68' %}*/
/*       <div id="content" class="col-sm-12">*/
/*               <h1>{{ heading_title }}</h1>*/
/*               {{ description }}*/
/* 			  </div></div></div>*/
/* */
/*       {% else %}*/
/* */
/*     <div id="content" class="{{ class }}">*/
/* 	{{ content_top }}*/
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-8' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> {% if thumb or images %}*/
/*           <ul class="thumbnails">*/
/*             {% if thumb %}*/
/*             <li><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" id="zoom_01" data-zoom-image="{{ popup }}"  id="zoom_01" data-zoom-image="{{ popup }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endif %}*/
/*             {% if images %}*/
/*             {% for image in images %}*/
/*             <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ heading_title }}"> <img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}</div>*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-4' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class="btn-group btn-group__block">*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i></button>*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ text_compareprod }}" onclick="window.open('index.php?route=product/compare','_self');"><i class="fa fa-balance-scale"></i></button>*/
/*           </div>*/
/*           <h1 class="heading__block-11">{{ heading_title }}</h1>*/
/*           <ul class="list-unstyled heading__block-list">*/
/*             {% if manufacturer %}*/
/*             <li>{{ text_manufacturer }}: <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li>{{ text_model }} {{ model }}</li>*/
/*             {% if reward %}*/
/*             <li>{{ text_reward }} {{ reward }}</li>*/
/*             {% endif %}*/
/*             <li>{{ text_stock }} <span class="stock__block">{{ stock }}</span></li>*/
/*           </ul>*/
/*           {% if price %}*/
/*           <ul class="list-unstyled">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h2 class="stock__block-price">{{ price }}</h2>*/
/*             </li>*/
/*             {% else %}*/
/*             <li><span style="text-decoration: line-through;" class="stock__block-special-line">{{ price }}</span></li>*/
/*             <li>*/
/*               <h2 class="stock__block-special">{{ special }}</h2>*/
/* 			   {% if specialSavings %}*/
/*                 <h3  class="stock__block-specialsavings">Акция -{{ specialSavings|default }}%</h3>*/
/*                 {% endif %}*/
/*             </li>*/
/*             {% endif %}*/
/*             {% if tax %}*/
/*             <li>{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li>{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             <li>*/
/*               <hr>*/
/*             </li>*/
/*             {% for discount in discounts %}*/
/*             <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <div id="product"> {% if options %}*/
/*             <hr>*/
/*             <!--<h3>{{ text_option }}</h3>-->*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <!--<img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" />--> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/* <div class="input-group number-spinner">*/
/* 			      <span class="input-group-btn">*/
/* 					<button class="btn btn-default" data-dir="dwn"><i class="fa fa-minus"></i></button>*/
/* 			      </span>*/
/* 				<input type="text" name="quantity" value="{{ minimum }}" id="input-quantity" class="form-control text-center" />*/
/* 				  <span class="input-group-btn">*/
/* 					<button class="btn btn-default" data-dir="up"><i class="fa fa-plus"></i></button>*/
/* 				  </span>*/
/* 			    </div>*/
/*               */
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               <br />*/
/* */
/* 	  <button type="button" id="button-checkout" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ text_buy_now }}</button>*/
/* 	   */
/*               */
/* 				{% if stock_quantity < 1 %} */
/* 					<button type="button" id="button-outstock" disabled="disabled" data-loading-text="{{ text_loading }}" class="btn btn-warning btn-lg btn-block"><i class="fa fa-exclamation-triangle"></i> {{ text_out_of_stock }}</button>*/
/* 				{% else %}*/
/* 					<button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/* 				{% endif %}*/
/* 			*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}</div>*/
/*           {% if review_status %}*/
/*           <div class="rating">*/
/* 			  <p>{% for i in 1..5 %}*/
/*               {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*               {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*             <hr>*/
/*             <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}">*/
/*                 <a class="addthis_button_facebook"></a>*/
/*                 <a class="addthis_button_viber"></a>*/
/*                 <a class="addthis_button_telegram"></a>*/
/*                 <a class="addthis_button_gmail"></a>*/
/*             </div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/*             <!-- AddThis Button END --> */
/*           </div>*/
/*           {% endif %} </div>*/
/*       </div>*/
/*       {% if products %}*/
/*       <h3>{{ text_related }}</h3>*/
/*       <div class="row"> {% set i = 0 %}*/
/*         {% for product in products %}*/
/*         {% if column_left and column_right %}*/
/*         {% set class = 'col-xs-8 col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-xs-6 col-md-4' %}*/
/*         {% else %}*/
/*         {% set class = 'col-xs-6 col-sm-3' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class="product-thumb transition">*/
/*             */
/* 				{% set flip = "" %}*/
/* 				{% for rthumb in product.rthumbs %}*/
/* 					{% set flip =  flip ~'"'~ rthumb.flipimage ~'",' %}*/
/* 				{% endfor %}*/
/* 				*/
/* 				{% set flipimages =  flip|trim(',') %}*/
/* 				*/
/* 				<div class="image" data-images='["{{ product.thumb }}",{{ flipimages }}]'><a href="{{ product.href }}">*/
/* <i class="icon-left-circle"></i><i class="icon-right-circle"></i><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/* 				*/
/*             <div class="caption">*/
/*               <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*               <p>{{ product.description }}</p>*/
/*               {% if product.rating %}*/
/*               <div class="rating"> {% for j in 1..5 %}*/
/*                 {% if product.rating < j %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> {% endif %}*/
/*                 {% endfor %} </div>*/
/*               {% endif %}*/
/*               {% if product.price %}*/
/*               <p class="price"> {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                 {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*               {% endif %} </div>*/
/*             <div class="button-group">*/
/*               <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span> <i class="fa fa-shopping-cart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% if column_left and column_right and (i + 1) % 2 == 0 %}*/
/*         <div class="clearfix visible-md visible-sm"></div>*/
/*         {% elseif column_left or column_right and (i + 1) % 3 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% elseif (i + 1) % 4 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% endif %}*/
/*         {% set i = i + 1 %}*/
/*         {% endfor %} </div>*/
/*         {% endif %}*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* */
/* $('#button-checkout').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-checkout').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-checkout').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* 			if (json['success']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				 window.location.href = "index.php?route=checkout/checkout";*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* 			*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* */
/* 			<script type="text/javascript"><!--*/
/* 			$('.image').imagesRotation();*/
/* 			//--></script>*/
/* 			*/
/* <script type="text/javascript"><!--*/
/* $(document).on('click', '.number-spinner button', function () {    */
/* 	var btn = $(this),*/
/* 		oldValue = btn.closest('.number-spinner').find('input').val().trim(),*/
/* 		newVal = 1;*/
/* 			*/
/* 	if (btn.attr('data-dir') == 'up') {*/
/* 		newVal = parseInt(oldValue) + 1;*/
/* 	} else {*/
/* 		if (oldValue > 1) {*/
/* 			newVal = parseInt(oldValue) - 1;*/
/* 		} else {*/
/* 			newVal = 1;*/
/* 		}*/
/* 	}*/
/* 	btn.closest('.number-spinner').find('input').val(newVal);*/
/* });*/
/* //--></script>*/
/* {{ footer }} */
/* */
