<?php

/* default/template/extension/quickcheckout/login.twig */
class __TwigTemplate_a3ecb2e6028e53e7579422181d3471d410100c02cea1e1aa51568cf0aacd97d4 extends Twig_Template
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
        echo "<div id=\"login\">
  <div class=\"col-sm-6 text-left\">
\t<label class=\"col-sm-3\" for=\"input-login-email\">";
        // line 3
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t  <input type=\"text\" name=\"email\" value=\"\" class=\"form-control\" id=\"input-login-email\" />
\t</div>
  </div>
  <div class=\"col-sm-6 text-left\">
\t<label class=\"col-sm-3\" for=\"input-login-password\">";
        // line 9
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo " <a href=\"";
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\" title=\"";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "\" data-toggle=\"tooltip\"><i class=\"fa fa-question-circle\"></i></a></label>
\t<div class=\"col-sm-9\">
\t  <div class=\"input-group\">
\t\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
\t\t<span class=\"input-group-btn\">
\t\t  <button type=\"button\" id=\"button-login\" data-loading-text=\"";
        // line 14
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
\t\t</span>
\t  </div>
\t</div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#login input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-login').click();
\t}
});
//--></script>   ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  32 => 9,  23 => 3,  19 => 1,);
    }
}
/* <div id="login">*/
/*   <div class="col-sm-6 text-left">*/
/* 	<label class="col-sm-3" for="input-login-email">{{ entry_email }}</label>*/
/* 	<div class="col-sm-9">*/
/* 	  <input type="text" name="email" value="" class="form-control" id="input-login-email" />*/
/* 	</div>*/
/*   </div>*/
/*   <div class="col-sm-6 text-left">*/
/* 	<label class="col-sm-3" for="input-login-password">{{ entry_password }} <a href="{{ forgotten }}" title="{{ text_forgotten }}" data-toggle="tooltip"><i class="fa fa-question-circle"></i></a></label>*/
/* 	<div class="col-sm-9">*/
/* 	  <div class="input-group">*/
/* 		<input type="password" name="password" value="" class="form-control" />*/
/* 		<span class="input-group-btn">*/
/* 		  <button type="button" id="button-login" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_login }}</button>*/
/* 		</span>*/
/* 	  </div>*/
/* 	</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#login input').keydown(function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-login').click();*/
/* 	}*/
/* });*/
/* //--></script>   */
