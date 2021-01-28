<?php

/* default/template/extension/module/ocfilter/value_list.twig */
class __TwigTemplate_53b6ee4738ac38b54c708f64f6d885bcdff61aa7f27f4bd333b8f49efb7e3d1c extends Twig_Template
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
        if ((((isset($context["show_values_limit"]) ? $context["show_values_limit"] : null) > 0) && (twig_length_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array())) > (isset($context["show_values_limit"]) ? $context["show_values_limit"] : null)))) {
            // line 2
            $context["hidden_values"] = twig_slice($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()), (isset($context["show_values_limit"]) ? $context["show_values_limit"] : null), null);
            // line 3
            $context["values"] = twig_slice($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()), 0, (isset($context["show_values_limit"]) ? $context["show_values_limit"] : null));
        } else {
            // line 5
            $context["hidden_values"] = array();
            // line 6
            $context["values"] = $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array());
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 10
            $this->loadTemplate("default/template/extension/module/ocfilter/value_item.twig", "default/template/extension/module/ocfilter/value_list.twig", 10)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["hidden_values"]) ? $context["hidden_values"] : null)) > 0)) {
            // line 14
            echo "<div class=\"collapse\" id=\"ocfilter-hidden-values-";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "\">
  <hr style=\"margin:0 0 10px;\" />
  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hidden_values"]) ? $context["hidden_values"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 17
                echo "  ";
                $this->loadTemplate("default/template/extension/module/ocfilter/value_item.twig", "default/template/extension/module/ocfilter/value_list.twig", 17)->display($context);
                // line 18
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</div>
<div class=\"collapse-value\">
  <button type=\"button\" data-target=\"#ocfilter-hidden-values-";
            // line 21
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "option_id", array());
            echo "\" data-toggle=\"collapse\" class=\"btn btn-block\">";
            echo (isset($context["text_show_all"]) ? $context["text_show_all"] : null);
            echo " <i class=\"fa fa-fw\"></i></button>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter/value_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  110 => 19,  96 => 18,  93 => 17,  76 => 16,  70 => 14,  68 => 13,  65 => 12,  51 => 10,  34 => 9,  31 => 8,  28 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if show_values_limit > 0 and option.values|length > show_values_limit %}*/
/* {% set hidden_values = option.values[show_values_limit:] %}*/
/* {% set values = option.values[:show_values_limit] %}*/
/* {% else %}*/
/* {% set hidden_values = [] %}*/
/* {% set values = option.values %}*/
/* {% endif %}*/
/* */
/* {% for value in values %}*/
/* {% include 'default/template/extension/module/ocfilter/value_item.twig' %}*/
/* {% endfor %}*/
/* */
/* {% if hidden_values|length > 0 %}*/
/* <div class="collapse" id="ocfilter-hidden-values-{{ option.option_id }}">*/
/*   <hr style="margin:0 0 10px;" />*/
/*   {% for value in hidden_values %}*/
/*   {% include 'default/template/extension/module/ocfilter/value_item.twig' %}*/
/*   {% endfor %}*/
/* </div>*/
/* <div class="collapse-value">*/
/*   <button type="button" data-target="#ocfilter-hidden-values-{{ option.option_id }}" data-toggle="collapse" class="btn btn-block">{{ text_show_all }} <i class="fa fa-fw"></i></button>*/
/* </div>*/
/* {% endif %}*/
