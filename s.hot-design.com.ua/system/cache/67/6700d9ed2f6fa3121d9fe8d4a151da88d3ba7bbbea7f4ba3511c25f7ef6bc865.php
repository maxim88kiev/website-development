<?php

/* default/template/extension/quickcheckout/voucher.twig */
class __TwigTemplate_8cd389442ce7ba9c05d2d1e9b0d97c2ca8db7aa53f11560b078d27a935f87a2f extends Twig_Template
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
        if ((isset($context["coupon_module"]) ? $context["coupon_module"] : null)) {
            // line 2
            echo "<div id=\"coupon-heading\"><i class=\"fa fa-ticket\"></i> ";
            echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
            echo "</div>
<div id=\"coupon-content\">
  <div class=\"input-group\">
\t<input type=\"text\" name=\"coupon\" value=\"\" class=\"form-control\" />
\t<span class=\"input-group-btn\">
\t  <button type=\"button\" id=\"button-coupon\" class=\"btn btn-primary\">";
            // line 7
            echo (isset($context["text_use_coupon"]) ? $context["text_use_coupon"] : null);
            echo "</button>
\t</span>
  </div>
</div>
";
        }
        // line 12
        if ((isset($context["voucher_module"]) ? $context["voucher_module"] : null)) {
            echo " 
<div id=\"voucher-heading\"><i class=\"fa fa-gift\"></i> ";
            // line 13
            echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
            echo "</div>
<div id=\"voucher-content\">
  <div class=\"input-group\">
\t<input type=\"text\" name=\"voucher\" value=\"\" class=\"form-control\" />
\t<span class=\"input-group-btn\">
\t  <button type=\"button\" id=\"button-voucher\" class=\"btn btn-primary\">";
            // line 18
            echo (isset($context["text_use_voucher"]) ? $context["text_use_voucher"] : null);
            echo "</button>
\t</span>
  </div>
</div>
";
        }
        // line 23
        if (((isset($context["reward_module"]) ? $context["reward_module"] : null) && (isset($context["reward"]) ? $context["reward"] : null))) {
            echo " 
<div id=\"reward-heading\"><i class=\"fa fa-star\"></i> ";
            // line 24
            echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
            echo "</div>
<div id=\"reward-content\">
  <div class=\"input-group\">
\t<input type=\"text\" name=\"reward\" value=\"\" class=\"form-control\" />
\t<span class=\"input-group-btn\">
\t  <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\">";
            // line 29
            echo (isset($context["text_use_reward"]) ? $context["text_use_reward"] : null);
            echo "</button>
\t</span>
  </div>
</div>
";
        }
        // line 33
        echo " 

<script type=\"text/javascript\"><!--
\$('#coupon-heading').on('click', function() {
    if(\$('#coupon-content').is(':visible')){
      \$('#coupon-content').slideUp('slow');
    } else {
      \$('#coupon-content').slideDown('slow');
    };
});

\$('#voucher-heading').on('click', function() {
    if(\$('#voucher-content').is(':visible')){
      \$('#voucher-content').slideUp('slow');
    } else {
      \$('#voucher-content').slideDown('slow');
    };
});

\$('#reward-heading').on('click', function() {
    if(\$('#reward-content').is(':visible')){
      \$('#reward-content').slideUp('slow');
    } else {
      \$('#reward-content').slideDown('slow');
    };
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  70 => 29,  62 => 24,  58 => 23,  50 => 18,  42 => 13,  38 => 12,  30 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if coupon_module %}*/
/* <div id="coupon-heading"><i class="fa fa-ticket"></i> {{ entry_coupon }}</div>*/
/* <div id="coupon-content">*/
/*   <div class="input-group">*/
/* 	<input type="text" name="coupon" value="" class="form-control" />*/
/* 	<span class="input-group-btn">*/
/* 	  <button type="button" id="button-coupon" class="btn btn-primary">{{ text_use_coupon }}</button>*/
/* 	</span>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* {% if voucher_module %} */
/* <div id="voucher-heading"><i class="fa fa-gift"></i> {{ entry_voucher }}</div>*/
/* <div id="voucher-content">*/
/*   <div class="input-group">*/
/* 	<input type="text" name="voucher" value="" class="form-control" />*/
/* 	<span class="input-group-btn">*/
/* 	  <button type="button" id="button-voucher" class="btn btn-primary">{{ text_use_voucher }}</button>*/
/* 	</span>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* {% if reward_module and reward %} */
/* <div id="reward-heading"><i class="fa fa-star"></i> {{ entry_reward }}</div>*/
/* <div id="reward-content">*/
/*   <div class="input-group">*/
/* 	<input type="text" name="reward" value="" class="form-control" />*/
/* 	<span class="input-group-btn">*/
/* 	  <button type="button" id="button-reward" class="btn btn-primary">{{ text_use_reward }}</button>*/
/* 	</span>*/
/*   </div>*/
/* </div>*/
/* {% endif %} */
/* */
/* <script type="text/javascript"><!--*/
/* $('#coupon-heading').on('click', function() {*/
/*     if($('#coupon-content').is(':visible')){*/
/*       $('#coupon-content').slideUp('slow');*/
/*     } else {*/
/*       $('#coupon-content').slideDown('slow');*/
/*     };*/
/* });*/
/* */
/* $('#voucher-heading').on('click', function() {*/
/*     if($('#voucher-content').is(':visible')){*/
/*       $('#voucher-content').slideUp('slow');*/
/*     } else {*/
/*       $('#voucher-content').slideDown('slow');*/
/*     };*/
/* });*/
/* */
/* $('#reward-heading').on('click', function() {*/
/*     if($('#reward-content').is(':visible')){*/
/*       $('#reward-content').slideUp('slow');*/
/*     } else {*/
/*       $('#reward-content').slideDown('slow');*/
/*     };*/
/* });*/
/* //--></script>*/
