<?php

/* default/template/extension/blog_right.twig */
class __TwigTemplate_ffda4a0cee4425748515f6eeacbee4e44cb67b3365362c38bd1eb96b0b099683 extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "<aside id=\"blog-right\" class=\"col-md-3 col-sm-4 paddleft hidden-xs\">
<div class=\"backcolor\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/blog_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* <aside id="blog-right" class="col-md-3 col-sm-4 paddleft hidden-xs">*/
/* <div class="backcolor">*/
/*   {% for module in modules %}*/
/*   {{ module }}*/
/*   {% endfor %}*/
/* </div>*/
/* </aside>*/
/* {% endif %}*/
/* */
