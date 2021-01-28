<?php

/* __string_template__c402a8cd1c2a949bbe64ac41f9d854023e5f8d1269d9210b024c96311f9960a1 */
class __TwigTemplate_2a518d20225aeebd6ac53a45901d1e8f17879e71bccf34a7df9c57d5ae37398a extends Twig_Template
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
<script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
<div class=\"elfsight-app-26564b8d-7d2b-4fa8-be32-84e794ffc19e\"></div>
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 5
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 6
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 8
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 14
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 16
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__c402a8cd1c2a949bbe64ac41f9d854023e5f8d1269d9210b024c96311f9960a1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  50 => 13,  47 => 12,  44 => 11,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <script src="https://apps.elfsight.com/p/platform.js" defer></script>*/
/* <div class="elfsight-app-26564b8d-7d2b-4fa8-be32-84e794ffc19e"></div>*/
/* <div id="common-home" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
