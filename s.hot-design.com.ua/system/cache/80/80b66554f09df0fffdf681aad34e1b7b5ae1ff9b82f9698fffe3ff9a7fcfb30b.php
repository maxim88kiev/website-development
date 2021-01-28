<?php

/* default/template/extension/module/ocfilter/filter_list.twig */
class __TwigTemplate_82c82dae0deb86dc89bd54c71b76bca4f6d4d8e6c499331abf82262868a57a1c extends Twig_Template
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
        if ((((isset($context["show_options_limit"]) ? $context["show_options_limit"] : null) > 0) && (twig_length_filter($this->env, (isset($context["options"]) ? $context["options"] : null)) > (isset($context["show_options_limit"]) ? $context["show_options_limit"] : null)))) {
            // line 2
            $context["hidden_options"] = twig_slice($this->env, (isset($context["options"]) ? $context["options"] : null), (isset($context["show_options_limit"]) ? $context["show_options_limit"] : null), null);
            // line 3
            $context["visibled_options"] = twig_slice($this->env, (isset($context["options"]) ? $context["options"] : null), 0, (isset($context["show_options_limit"]) ? $context["show_options_limit"] : null));
        } else {
            // line 5
            $context["hidden_options"] = array();
            // line 6
            $context["visibled_options"] = (isset($context["options"]) ? $context["options"] : null);
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visibled_options"]) ? $context["visibled_options"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 10
            $this->loadTemplate("default/template/extension/module/ocfilter/filter_item.twig", "default/template/extension/module/ocfilter/filter_list.twig", 10)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["hidden_options"]) ? $context["hidden_options"] : null)) > 0)) {
            // line 14
            echo "
";
            // line 15
            if ((isset($context["show_options"]) ? $context["show_options"] : null)) {
                // line 16
                $context["class"] = "collapse in";
            } else {
                // line 18
                $context["class"] = "collapse";
            }
            // line 20
            echo "
<div class=\"";
            // line 21
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\" id=\"ocfilter-hidden-options\">
  ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hidden_options"]) ? $context["hidden_options"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 23
                echo "  ";
                $this->loadTemplate("default/template/extension/module/ocfilter/filter_item.twig", "default/template/extension/module/ocfilter/filter_list.twig", 23)->display($context);
                // line 24
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
<button type=\"button\" class=\"btn btn-default btn-block\" data-toggle=\"collapse\" data-target=\"#ocfilter-hidden-options\" aria-expanded=\"false\"><i class=\"fa\"></i></button>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter/filter_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 25,  108 => 24,  105 => 23,  88 => 22,  84 => 21,  81 => 20,  78 => 18,  75 => 16,  73 => 15,  70 => 14,  68 => 13,  65 => 12,  51 => 10,  34 => 9,  31 => 8,  28 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if show_options_limit > 0 and options|length > show_options_limit %}*/
/* {% set hidden_options = options[show_options_limit:] %}*/
/* {% set visibled_options = options[:show_options_limit] %}*/
/* {% else %}*/
/* {% set hidden_options = [] %}*/
/* {% set visibled_options = options %}*/
/* {% endif %}*/
/* */
/* {% for option in visibled_options %}*/
/* {% include 'default/template/extension/module/ocfilter/filter_item.twig' %}*/
/* {% endfor %}*/
/* */
/* {% if hidden_options|length > 0 %}*/
/* */
/* {% if show_options %}*/
/* {% set class = 'collapse in' %}*/
/* {% else %}*/
/* {% set class = 'collapse' %}*/
/* {% endif %}*/
/* */
/* <div class="{{ class }}" id="ocfilter-hidden-options">*/
/*   {% for option in hidden_options %}*/
/*   {% include 'default/template/extension/module/ocfilter/filter_item.twig' %}*/
/*   {% endfor %}*/
/* </div>*/
/* <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#ocfilter-hidden-options" aria-expanded="false"><i class="fa"></i></button>*/
/* {% endif %}*/
