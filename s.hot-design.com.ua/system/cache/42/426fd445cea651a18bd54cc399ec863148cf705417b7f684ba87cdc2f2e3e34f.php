<?php

/* default/template/extension/module/ocfilter/selected_filter.twig */
class __TwigTemplate_6af82ef5370a03859d55e5b2b63380afa0ba6bdeb7b668bc5b881565d305c889 extends Twig_Template
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
        if ((isset($context["selecteds"]) ? $context["selecteds"] : null)) {
            // line 2
            echo "<div class=\"list-group-item selected-options\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selecteds"]) ? $context["selecteds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 4
                echo "  <div class=\"ocfilter-option\">
    <span>";
                // line 5
                echo $this->getAttribute($context["option"], "name", array());
                echo ":</span>
    ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "values", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 7
                    echo "    <button type=\"button\" onclick=\"location = '";
                    echo $this->getAttribute($context["value"], "href", array());
                    echo "';\" class=\"btn btn-xs btn-danger\" style=\"padding: 1px 4px;\"><i class=\"fa fa-times\"></i> ";
                    echo $this->getAttribute($context["value"], "name", array());
                    echo "</button>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
  ";
            // line 12
            if (((twig_length_filter($this->env, (isset($context["selecteds"]) ? $context["selecteds"] : null)) > 1) || (twig_length_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["selecteds"]) ? $context["selecteds"] : null)), "values", array())) > 1))) {
                // line 13
                echo "  <button type=\"button\" onclick=\"location = '";
                echo (isset($context["link"]) ? $context["link"] : null);
                echo "';\" class=\"btn btn-block btn-danger\" style=\"border-radius: 0;\"><i class=\"fa fa-times-circle\"></i> ";
                echo (isset($context["text_cancel_all"]) ? $context["text_cancel_all"] : null);
                echo "</button>
  ";
            }
            // line 15
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter/selected_filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  62 => 13,  60 => 12,  57 => 11,  50 => 9,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if selecteds %}*/
/* <div class="list-group-item selected-options">*/
/*   {% for option in selecteds %}*/
/*   <div class="ocfilter-option">*/
/*     <span>{{ option.name }}:</span>*/
/*     {% for value in option.values %}*/
/*     <button type="button" onclick="location = '{{ value.href }}';" class="btn btn-xs btn-danger" style="padding: 1px 4px;"><i class="fa fa-times"></i> {{ value.name }}</button>*/
/*     {% endfor %}*/
/*   </div>*/
/*   {% endfor %}*/
/* */
/*   {% if selecteds|length > 1 or selecteds|first.values|length > 1 %}*/
/*   <button type="button" onclick="location = '{{ link}}';" class="btn btn-block btn-danger" style="border-radius: 0;"><i class="fa fa-times-circle"></i> {{ text_cancel_all }}</button>*/
/*   {% endif %}*/
/* </div>*/
/* {% endif %}*/
