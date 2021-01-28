<?php

/* default/template/extension/module/ocfilter/module.twig */
class __TwigTemplate_eee800b84a652b126d51fd75f6a845a465c04ccfcfd556190a453e302cd36afa extends Twig_Template
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
        if (((isset($context["options"]) ? $context["options"] : null) || (isset($context["show_price"]) ? $context["show_price"] : null))) {
            // line 2
            echo "<div class=\"ocf-offcanvas ocfilter-mobile hidden-sm hidden-md hidden-lg\">
  <div class=\"ocfilter-mobile-handle\">
    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"offcanvas\"><i class=\"fa fa-filter\"></i></button>
  </div>
  <div class=\"ocf-offcanvas-body\"></div>
</div>

<div class=\"panel ocfilter panel-default\" id=\"ocfilter\">
  <div class=\"panel-heading\">";
            // line 10
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
  <div class=\"hidden\" id=\"ocfilter-button\">
    <button class=\"btn btn-primary disabled\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> Загрузка..\"></button>
  </div>
  <div class=\"list-group\">
    ";
            // line 15
            $this->loadTemplate("default/template/extension/module/ocfilter/selected_filter.twig", "default/template/extension/module/ocfilter/module.twig", 15)->display($context);
            // line 16
            echo "
    ";
            // line 17
            $this->loadTemplate("default/template/extension/module/ocfilter/filter_price.twig", "default/template/extension/module/ocfilter/module.twig", 17)->display($context);
            // line 18
            echo "
    ";
            // line 19
            $this->loadTemplate("default/template/extension/module/ocfilter/filter_list.twig", "default/template/extension/module/ocfilter/module.twig", 19)->display($context);
            // line 20
            echo "  </div>
</div>
<script type=\"text/javascript\"><!--
\$(function() {
  \$('body').append(\$('.ocfilter-mobile').remove().get(0).outerHTML);

\tvar options = {
    mobile: \$('.ocfilter-mobile').is(':visible'),
    php: {
      searchButton : ";
            // line 29
            echo (((isset($context["search_button"]) ? $context["search_button"] : null)) ? ("true") : ("false"));
            echo ",
      showPrice    : ";
            // line 30
            echo (((isset($context["show_price"]) ? $context["show_price"] : null)) ? ("true") : ("false"));
            echo ",
\t    showCounter  : ";
            // line 31
            echo (((isset($context["show_counter"]) ? $context["show_counter"] : null)) ? ("true") : ("false"));
            echo ",
\t\t\tmanualPrice  : ";
            // line 32
            echo (((isset($context["manual_price"]) ? $context["manual_price"] : null)) ? ("true") : ("false"));
            echo ",
      link         : '";
            // line 33
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "',
\t    path         : '";
            // line 34
            echo (isset($context["path"]) ? $context["path"] : null);
            echo "',
\t    params       : '";
            // line 35
            echo (isset($context["params"]) ? $context["params"] : null);
            echo "',
\t    index        : '";
            // line 36
            echo (isset($context["index"]) ? $context["index"] : null);
            echo "'
\t  },
    text: {
\t    show_all: '";
            // line 39
            echo (isset($context["text_show_all"]) ? $context["text_show_all"] : null);
            echo "',
\t    hide    : '";
            // line 40
            echo (isset($context["text_hide"]) ? $context["text_hide"] : null);
            echo "',
\t    load    : '";
            // line 41
            echo (isset($context["text_load"]) ? $context["text_load"] : null);
            echo "',
\t\t\tany     : '";
            // line 42
            echo (isset($context["text_any"]) ? $context["text_any"] : null);
            echo "',
\t    select  : '";
            // line 43
            echo (isset($context["button_select"]) ? $context["button_select"] : null);
            echo "'
\t  }
\t};

  if (options.mobile) {
    \$('.ocf-offcanvas-body').html(\$('#ocfilter').remove().get(0).outerHTML);
  }

  \$('[data-toggle=\"offcanvas\"]').on('click', function(e) {
    \$(this).toggleClass('active');
    \$('body').toggleClass('modal-open');
    \$('.ocfilter-mobile').toggleClass('active');
  });

  setTimeout(function() {
    \$('#ocfilter').ocfilter(options);
  }, 1);
});
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  70 => 31,  66 => 30,  62 => 29,  51 => 20,  49 => 19,  46 => 18,  44 => 17,  41 => 16,  39 => 15,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% if options or show_price %}*/
/* <div class="ocf-offcanvas ocfilter-mobile hidden-sm hidden-md hidden-lg">*/
/*   <div class="ocfilter-mobile-handle">*/
/*     <button type="button" class="btn btn-primary" data-toggle="offcanvas"><i class="fa fa-filter"></i></button>*/
/*   </div>*/
/*   <div class="ocf-offcanvas-body"></div>*/
/* </div>*/
/* */
/* <div class="panel ocfilter panel-default" id="ocfilter">*/
/*   <div class="panel-heading">{{ heading_title }}</div>*/
/*   <div class="hidden" id="ocfilter-button">*/
/*     <button class="btn btn-primary disabled" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Загрузка.."></button>*/
/*   </div>*/
/*   <div class="list-group">*/
/*     {% include 'default/template/extension/module/ocfilter/selected_filter.twig' %}*/
/* */
/*     {% include 'default/template/extension/module/ocfilter/filter_price.twig' %}*/
/* */
/*     {% include 'default/template/extension/module/ocfilter/filter_list.twig' %}*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $(function() {*/
/*   $('body').append($('.ocfilter-mobile').remove().get(0).outerHTML);*/
/* */
/* 	var options = {*/
/*     mobile: $('.ocfilter-mobile').is(':visible'),*/
/*     php: {*/
/*       searchButton : {{ search_button ? 'true' : 'false' }},*/
/*       showPrice    : {{ show_price ? 'true' : 'false' }},*/
/* 	    showCounter  : {{ show_counter ? 'true' : 'false' }},*/
/* 			manualPrice  : {{ manual_price ? 'true' : 'false' }},*/
/*       link         : '{{ link }}',*/
/* 	    path         : '{{ path }}',*/
/* 	    params       : '{{ params }}',*/
/* 	    index        : '{{ index }}'*/
/* 	  },*/
/*     text: {*/
/* 	    show_all: '{{ text_show_all }}',*/
/* 	    hide    : '{{ text_hide }}',*/
/* 	    load    : '{{ text_load }}',*/
/* 			any     : '{{ text_any }}',*/
/* 	    select  : '{{ button_select }}'*/
/* 	  }*/
/* 	};*/
/* */
/*   if (options.mobile) {*/
/*     $('.ocf-offcanvas-body').html($('#ocfilter').remove().get(0).outerHTML);*/
/*   }*/
/* */
/*   $('[data-toggle="offcanvas"]').on('click', function(e) {*/
/*     $(this).toggleClass('active');*/
/*     $('body').toggleClass('modal-open');*/
/*     $('.ocfilter-mobile').toggleClass('active');*/
/*   });*/
/* */
/*   setTimeout(function() {*/
/*     $('#ocfilter').ocfilter(options);*/
/*   }, 1);*/
/* });*/
/* //--></script>*/
/* {% endif %}*/
