<?php

/* default/template/product/category.twig */
class __TwigTemplate_f76fd0de3c07d1af66299ba01ab26d945e52087010181b8609b03c37826d3020 extends Twig_Template
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
<div id=\"product-category\" class=\"container\">
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
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 18
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 19
            echo "      <div class=\"row\">
        ";
            // line 20
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 21
                echo "        <div class=\"col-sm-12\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 22
            echo "</div>
      <hr>
      ";
        }
        // line 25
        echo "
      ";
        // line 26
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 27
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 30
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 31
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
<button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
            // line 32
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "\" onclick=\"window.open('index.php?route=product/compare','_self');\"><i class=\"fa fa-balance-scale\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 40
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 46
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 47
                    echo "              
              
              
              <option value=\"";
                    // line 50
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 55
                    echo "              
              
              
              <option value=\"";
                    // line 58
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 63
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            
            
            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 72
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 78
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 79
                    echo "              
              
              
              <option value=\"";
                    // line 82
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 87
                    echo "              
              
              
              <option value=\"";
                    // line 90
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 95
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            
            
            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 104
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">

\t\t\t\t<div id=\"";
                // line 107
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\" class=\"modal fade\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\"><button class=\"close\" type=\"button\" data-dismiss=\"modal\">×</button>
\t\t\t\t<h4 class=\"modal-title\">";
                // line 111
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">\t
\t\t\t\t<div class=\"images\"><a href=\"";
                // line 115
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" /></a></div>\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t<ul class=\"list-unstyled\"> 
\t\t\t\t";
                // line 119
                if ($this->getAttribute($context["product"], "manufacturer", array(), "array")) {
                    echo " 
\t\t\t\t\t<li>";
                    // line 120
                    echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "manufacturers", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["product"], "manufacturer", array(), "array");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 121
                echo " 
\t\t\t\t<li>";
                // line 122
                echo (isset($context["text_model"]) ? $context["text_model"] : null);
                echo " ";
                echo $this->getAttribute($context["product"], "model", array(), "array");
                echo "</li>
\t\t\t\t";
                // line 123
                if ($this->getAttribute($context["product"], "reward", array(), "array")) {
                    echo " 
\t\t\t\t\t<li>";
                    // line 124
                    echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "reward", array(), "array");
                    echo "</li>
\t\t\t\t";
                }
                // line 125
                echo " 
\t\t\t\t<li>";
                // line 126
                echo $this->getAttribute($context["product"], "stock", array(), "array");
                echo "</li>
\t\t\t\t</ul>
\t\t\t\t";
                // line 128
                if ($this->getAttribute($context["product"], "price", array(), "array")) {
                    echo " 
\t\t\t\t\t<!--<ul class=\"list-unstyled\">
\t\t\t\t\t";
                    // line 130
                    if ( !$this->getAttribute($context["product"], "special", array(), "array")) {
                        echo " 
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<h2>";
                        // line 132
                        echo $this->getAttribute($context["product"], "price", array(), "array");
                        echo "</h2>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    } else {
                        // line 134
                        echo " 
\t\t\t\t\t\t<li><span style=\"text-decoration: line-through;\">";
                        // line 135
                        echo $this->getAttribute($context["product"], "price", array(), "array");
                        echo "</span></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<h2>";
                        // line 137
                        echo $this->getAttribute($context["product"], "special", array(), "array");
                        echo "</h2>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 139
                    echo " 
\t\t\t\t\t";
                    // line 140
                    if ($this->getAttribute($context["product"], "tax", array(), "array")) {
                        echo " 
\t\t\t\t\t\t<li>";
                        // line 141
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array(), "array");
                        echo "</li>
\t\t\t\t\t";
                    }
                    // line 142
                    echo " 
\t\t\t\t\t";
                    // line 143
                    if ($this->getAttribute($context["product"], "points", array(), "array")) {
                        echo " 
\t\t\t\t\t\t<li>";
                        // line 144
                        echo (isset($context["text_catpoints"]) ? $context["text_catpoints"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "points", array(), "array");
                        echo "</li>
\t\t\t\t\t";
                    }
                    // line 145
                    echo " 
\t\t\t\t\t";
                    // line 146
                    if ($this->getAttribute($context["product"], "discounts", array(), "array")) {
                        echo " 
\t\t\t\t\t\t";
                        // line 147
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "discounts", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                            echo " 
\t\t\t\t\t\t\t<li>";
                            // line 148
                            echo $this->getAttribute($context["discount"], "quantity", array(), "array");
                            echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                            echo $this->getAttribute($context["discount"], "price", array(), "array");
                            echo "</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 149
                        echo " 
\t\t\t\t\t";
                    }
                    // line 150
                    echo " 
\t\t\t\t\t</ul>-->
\t\t\t\t";
                }
                // line 152
                echo " 
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
                // line 157
                echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
                echo "</a></li>
\t\t\t\t";
                // line 158
                if ($this->getAttribute($context["product"], "attribute_groups", array(), "array")) {
                    echo " 
\t\t\t\t\t<li><a href=\"#tab-specification\" data-toggle=\"tab\">";
                    // line 159
                    echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
                    echo "</a></li>
\t\t\t\t";
                }
                // line 160
                echo " 
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
                // line 163
                echo $this->getAttribute($context["product"], "catdescription", array(), "array");
                echo "</div>
\t\t\t\t";
                // line 164
                if ($this->getAttribute($context["product"], "attribute_groups", array(), "array")) {
                    echo " 
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "attribute_groups", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        echo " 
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\"><strong>";
                        // line 170
                        echo $this->getAttribute($context["attribute_group"], "name", array(), "array");
                        echo "</strong></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
                        // line 174
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            echo " 
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                            // line 176
                            echo $this->getAttribute($context["attribute"], "name", array(), "array");
                            echo "</td>
\t\t\t\t\t\t\t<td>";
                            // line 177
                            echo $this->getAttribute($context["attribute"], "text", array(), "array");
                            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 179
                        echo " 
\t\t\t\t\t\t</tbody>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo " 
\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 184
                echo " 
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"";
                // line 190
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\"><button class=\"btn btn-default\" type=\"button\">Подробнее</button></a>
\t\t\t\t<button class=\"btn btn-default\" type=\"button\" data-dismiss=\"modal\">Закрыть</button></div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t

\t\t\t";
                // line 197
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 198
                    echo "\t\t\t\t<!--  -->
\t\t\t";
                } else {
                    // line 200
                    echo "\t\t\t\t<div class=\"triangle-topleft\"><span class=\"save-discount\" onclick=\"location.href='";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "'\">";
                    echo (($this->getAttribute($context["product"], "specialSavings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "specialSavings", array()))) : (""));
                    echo "% off</span></div>
\t\t\t";
                }
                // line 202
                echo "            
            
\t\t\t\t";
                // line 204
                $context["flip"] = "";
                // line 205
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "rthumbs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rthumb"]) {
                    // line 206
                    echo "\t\t\t\t\t";
                    $context["flip"] = ((((isset($context["flip"]) ? $context["flip"] : null) . "\"") . $this->getAttribute($context["rthumb"], "flipimage", array())) . "\",");
                    // line 207
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rthumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "\t\t\t\t
\t\t\t\t";
                // line 209
                $context["flipimages"] = trim((isset($context["flip"]) ? $context["flip"] : null), ",");
                // line 210
                echo "\t\t\t\t
\t\t\t\t<div class=\"image\" data-images='[\"";
                // line 211
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\",";
                echo (isset($context["flipimages"]) ? $context["flipimages"] : null);
                echo "]'><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
<i class=\"icon-left-circle\"></i><i class=\"icon-right-circle\"></i><img src=\"";
                // line 212
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t
            <div>
\t\t\t
\t\t\t ";
                // line 216
                if (((isset($context["category_id_statji"]) ? $context["category_id_statji"] : null) == "68")) {
                    // line 217
                    echo "\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4><a href=\"";
                    // line 218
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></h4>
\t\t\t\t\t<p>";
                    // line 219
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<style>
\t\t\t\t.product-thumb:hover .btn-modal {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t\t</style>
\t\t\t";
                } else {
                    // line 228
                    echo "\t\t\t
              <div class=\"caption\">
                <h4><a href=\"";
                    // line 230
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></h4>
                <p>";
                    // line 231
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</p>
                ";
                    // line 232
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 233
                        echo "                <p class=\"price\"> ";
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 234
                            echo "                  ";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
                  ";
                        } else {
                            // line 235
                            echo " <span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span> ";
                        }
                        // line 236
                        echo "                  ";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            echo " <span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span> ";
                        }
                        // line 237
                        echo "                </p>
                ";
                    }
                    // line 239
                    echo "                ";
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 240
                        echo "                <div class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 241
                            echo "                  ";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            }
                            // line 242
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " </div>
                ";
                    }
                    // line 243
                    echo " </div>
              <div class=\"button-group\">
                
\t\t\t\t";
                    // line 246
                    if (($this->getAttribute($context["product"], "quantity", array()) < 1)) {
                        // line 247
                        echo "<button type=\"button\" disabled=\"disabled\"><i class=\"fa fa-exclamation-triangle\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                        echo $this->getAttribute($context["product"], "text_out_of_stock", array());
                        echo "</span></button>
                ";
                    } else {
                        // line 248
                        echo " 
<button type=\"button\" onclick=\"cart.add('";
                        // line 249
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "', '";
                        echo $this->getAttribute($context["product"], "minimum", array());
                        echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "</span></button>
                ";
                    }
                    // line 251
                    echo "\t\t\t
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 252
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 253
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
\t\t\t  ";
                }
                // line 256
                echo "            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 261
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 262
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 265
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 266
            echo "      <!--<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 268
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>-->
      ";
        }
        // line 271
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 272
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>

\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\$('.image').imagesRotation();
\t\t\t//--></script>
\t\t\t
";
        // line 279
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 279,  753 => 272,  748 => 271,  740 => 268,  734 => 266,  731 => 265,  725 => 262,  721 => 261,  717 => 259,  708 => 256,  700 => 253,  694 => 252,  691 => 251,  682 => 249,  679 => 248,  673 => 247,  671 => 246,  666 => 243,  657 => 242,  650 => 241,  645 => 240,  642 => 239,  638 => 237,  629 => 236,  622 => 235,  616 => 234,  613 => 233,  611 => 232,  607 => 231,  601 => 230,  597 => 228,  585 => 219,  579 => 218,  576 => 217,  574 => 216,  563 => 212,  555 => 211,  552 => 210,  550 => 209,  547 => 208,  541 => 207,  538 => 206,  533 => 205,  531 => 204,  527 => 202,  519 => 200,  515 => 198,  513 => 197,  503 => 190,  495 => 184,  489 => 181,  481 => 179,  472 => 177,  468 => 176,  461 => 174,  454 => 170,  446 => 167,  440 => 164,  436 => 163,  431 => 160,  426 => 159,  422 => 158,  418 => 157,  411 => 152,  406 => 150,  402 => 149,  392 => 148,  386 => 147,  382 => 146,  379 => 145,  372 => 144,  368 => 143,  365 => 142,  358 => 141,  354 => 140,  351 => 139,  345 => 137,  340 => 135,  337 => 134,  331 => 132,  326 => 130,  321 => 128,  316 => 126,  313 => 125,  306 => 124,  302 => 123,  296 => 122,  293 => 121,  284 => 120,  280 => 119,  269 => 115,  262 => 111,  255 => 107,  250 => 104,  246 => 103,  237 => 96,  231 => 95,  221 => 90,  216 => 87,  206 => 82,  201 => 79,  198 => 78,  194 => 77,  186 => 72,  176 => 64,  170 => 63,  160 => 58,  155 => 55,  145 => 50,  140 => 47,  137 => 46,  133 => 45,  125 => 40,  114 => 32,  110 => 31,  106 => 30,  101 => 27,  99 => 26,  96 => 25,  91 => 22,  85 => 21,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
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
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ heading_title }}</h2>*/
/*       {% if thumb or description %}*/
/*       <div class="row">*/
/*         {% if description %}*/
/*         <div class="col-sm-12">{{ description }}</div>*/
/*         {% endif %}</div>*/
/*       <hr>*/
/*       {% endif %}*/
/* */
/*       {% if products %}*/
/*       <div class="row">*/
/*         <div class="col-md-2 col-sm-6 hidden-xs">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/* <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ text_compare }}" onclick="window.open('index.php?route=product/compare','_self');"><i class="fa fa-balance-scale"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*           */
/*         </div>*/
/*         <div class="col-md-4 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row"> {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb">*/
/* */
/* 				<div id="{{ product['product_id'] }}" class="modal fade">*/
/* 				<div class="modal-dialog">*/
/* 				<div class="modal-content">*/
/* 				<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>*/
/* 				<h4 class="modal-title">{{ product['name'] }}</h4>*/
/* 				</div>*/
/* 				<div class="modal-body">*/
/* 				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	*/
/* 				<div class="images"><a href="{{ product['href'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" /></a></div>		*/
/* 				</div>*/
/* 				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">*/
/* 				<ul class="list-unstyled"> */
/* 				{% if (product['manufacturer']) %} */
/* 					<li>{{ text_manufacturer }} <a href="{{ product['manufacturers'] }}">{{ product['manufacturer'] }}</a></li>*/
/* 				{% endif %} */
/* 				<li>{{ text_model }} {{ product['model'] }}</li>*/
/* 				{% if (product['reward']) %} */
/* 					<li>{{ text_reward }} {{ product['reward'] }}</li>*/
/* 				{% endif %} */
/* 				<li>{{ product['stock'] }}</li>*/
/* 				</ul>*/
/* 				{% if (product['price']) %} */
/* 					<!--<ul class="list-unstyled">*/
/* 					{% if (not product['special']) %} */
/* 						<li>*/
/* 						<h2>{{ product['price'] }}</h2>*/
/* 						</li>*/
/* 						{% else %} */
/* 						<li><span style="text-decoration: line-through;">{{ product['price'] }}</span></li>*/
/* 						<li>*/
/* 						<h2>{{ product['special'] }}</h2>*/
/* 						</li>*/
/* 					{% endif %} */
/* 					{% if (product['tax']) %} */
/* 						<li>{{ text_tax }} {{ product['tax'] }}</li>*/
/* 					{% endif %} */
/* 					{% if (product['points']) %} */
/* 						<li>{{ text_catpoints }} {{ product['points'] }}</li>*/
/* 					{% endif %} */
/* 					{% if (product['discounts']) %} */
/* 						{% for discount in product['discounts'] %} */
/* 							<li>{{ discount['quantity'] }}{{ text_discount }}{{ discount['price'] }}</li>*/
/* 						{% endfor %} */
/* 					{% endif %} */
/* 					</ul>-->*/
/* 				{% endif %} */
/* 				</div>*/
/* 				<div class="row">*/
/* 				<div class="col-xs-12">*/
/* 				<ul class="nav nav-tabs">*/
/* 				<li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/* 				{% if (product['attribute_groups']) %} */
/* 					<li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/* 				{% endif %} */
/* 				</ul>*/
/* 				<div class="tab-content">*/
/* 				<div class="tab-pane active" id="tab-description">{{ product['catdescription'] }}</div>*/
/* 				{% if (product['attribute_groups']) %} */
/* 					<div class="tab-pane" id="tab-specification">*/
/* 					<table class="table table-bordered">*/
/* 					{% for attribute_group in product['attribute_groups'] %} */
/* 						<thead>*/
/* 						<tr>*/
/* 						<td colspan="2"><strong>{{ attribute_group['name'] }}</strong></td>*/
/* 						</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 						{% for attribute in attribute_group['attribute'] %} */
/* 							<tr>*/
/* 							<td>{{ attribute['name'] }}</td>*/
/* 							<td>{{ attribute['text'] }}</td>*/
/* 							</tr>*/
/* 						{% endfor %} */
/* 						</tbody>*/
/* 					{% endfor %} */
/* 					</table>*/
/* 					</div>*/
/* 				{% endif %} */
/* 				</div>*/
/* 				</div>*/
/* 				</div>*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 				<a href="{{ product['href'] }}"><button class="btn btn-default" type="button">Подробнее</button></a>*/
/* 				<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>*/
/* 				</div>*/
/* 				</div>*/
/* 				</div>*/
/* 			*/
/* */
/* 			{% if not product.special %}*/
/* 				<!--  -->*/
/* 			{% else %}*/
/* 				<div class="triangle-topleft"><span class="save-discount" onclick="location.href='{{ product.href }}'">{{ product.specialSavings|default }}% off</span></div>*/
/* 			{% endif %}*/
/*             */
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
/*             <div>*/
/* 			*/
/* 			 {% if category_id_statji == '68' %}*/
/* 				<div class="caption">*/
/* 					<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 					<p>{{ product.description }}</p>*/
/* 				</div>*/
/* 				*/
/* 				<style>*/
/* 				.product-thumb:hover .btn-modal {*/
/* 					display: none !important;*/
/* 				}*/
/* 				</style>*/
/* 			{% else %}*/
/* 			*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p>{{ product.description }}</p>*/
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{product.price}}*/
/*                   {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %}*/
/*                 </p>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                 <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %} </div>*/
/*                 {% endif %} </div>*/
/*               <div class="button-group">*/
/*                 */
/* 				{% if product.quantity < 1 %}*/
/* <button type="button" disabled="disabled"><i class="fa fa-exclamation-triangle"></i> <span class="hidden-xs hidden-sm hidden-md">{{ product.text_out_of_stock }}</span></button>*/
/*                 {% else %} */
/* <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 {% endif %}*/
/* 			*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/* 			  {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %} </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <!--<p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>-->*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* */
/* 			<script type="text/javascript"><!--*/
/* 			$('.image').imagesRotation();*/
/* 			//--></script>*/
/* 			*/
/* {{ footer }} */
