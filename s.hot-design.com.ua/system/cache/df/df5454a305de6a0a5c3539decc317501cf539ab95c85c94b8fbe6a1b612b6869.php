<?php

/* default/template/extension/module/tmdlatestblog.twig */
class __TwigTemplate_b7a370f787dcb44331d1c3284440a65333bfc8354e5135ef53e0235a75e60512 extends Twig_Template
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
        echo "<div class=\"swiper-viewport relatedb\">
<!--<h3>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>-->
<h3>Новости</h3>
<div id=\"latestblog\" class=\"swiper-container\">
<div class=\"swiper-wrapper\"> 
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestblogs"]) ? $context["latestblogs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 7
            echo "  <div class=\"swiper-slide\" style=\"margin-right:10px;\">
\t<div class=\"product-thumb\">
\t\t<div class=\"image\"><a href=\"";
            // line 9
            echo $this->getAttribute($context["blog"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["blog"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["blog"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["blog"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
\t\t<div class=\"caption\">
\t\t\t<h4><a href=\"";
            // line 11
            echo $this->getAttribute($context["blog"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["blog"], "name", array());
            echo "</a></h4>
\t\t\t<div class=\"description\"><p>";
            // line 12
            echo $this->getAttribute($context["blog"], "description", array());
            echo "</p></div>
\t\t\t<div class=\"icons1\">
\t\t\t\t<div class=\"share\">
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li><i class=\"fa fa-comment\"></i><span class=\"commentcount\">";
            // line 16
            echo $this->getAttribute($context["blog"], "comment", array());
            echo "</span></li>
\t\t\t\t\t<li><i class=\"fa fa-eye\"></i>";
            // line 17
            echo $this->getAttribute($context["blog"], "viewed", array());
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"dateadded\"><i>";
            // line 20
            echo $this->getAttribute($context["blog"], "date_added", array());
            echo " </i></div>
\t\t\t</div>
\t\t</div>
       </div>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
</div>
<div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>

</div>
<script type=\"text/javascript\"><!--

\$('#latestblog').swiper({
\tmode: 'horizontal',
\tslidesPerView: 4,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
\tautoplay: false,
\t\tloop: true,
\tspaceBetween: 20,
\tbreakpoints: {      
      768: {       
         slidesPerView: 1  
      } 
  
   }
});


--></script>

";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/tmdlatestblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  71 => 20,  65 => 17,  61 => 16,  54 => 12,  48 => 11,  37 => 9,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="swiper-viewport relatedb">*/
/* <!--<h3>{{ heading_title }}</h3>-->*/
/* <h3>Новости</h3>*/
/* <div id="latestblog" class="swiper-container">*/
/* <div class="swiper-wrapper"> */
/*   {% for blog in latestblogs %}*/
/*   <div class="swiper-slide" style="margin-right:10px;">*/
/* 	<div class="product-thumb">*/
/* 		<div class="image"><a href="{{ blog.href }}"><img src="{{ blog.thumb }}" alt="{{ blog.name }}" title="{{ blog.name }}" class="img-responsive" /></a></div>*/
/* 		<div class="caption">*/
/* 			<h4><a href="{{ blog.href }}">{{ blog.name }}</a></h4>*/
/* 			<div class="description"><p>{{ blog.description }}</p></div>*/
/* 			<div class="icons1">*/
/* 				<div class="share">*/
/* 					<ul class="list-inline">*/
/* 					<li><i class="fa fa-comment"></i><span class="commentcount">{{ blog.comment }}</span></li>*/
/* 					<li><i class="fa fa-eye"></i>{{ blog.viewed }}</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="dateadded"><i>{{ blog.date_added }} </i></div>*/
/* 			</div>*/
/* 		</div>*/
/*        </div>*/
/*   </div>*/
/* */
/*   {% endfor %}*/
/* </div>*/
/* </div>*/
/* <div class="swiper-pager">*/
/*     <div class="swiper-button-next"></div>*/
/*     <div class="swiper-button-prev"></div>*/
/*   </div>*/
/* */
/* </div>*/
/* <script type="text/javascript"><!--*/
/* */
/* $('#latestblog').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 4,*/
/* 	nextButton: '.swiper-button-next',*/
/*     prevButton: '.swiper-button-prev',*/
/* 	autoplay: false,*/
/* 		loop: true,*/
/* 	spaceBetween: 20,*/
/* 	breakpoints: {      */
/*       768: {       */
/*          slidesPerView: 1  */
/*       } */
/*   */
/*    }*/
/* });*/
/* */
/* */
/* --></script>*/
/* */
/* */
