<?php
header('Content-Type: text/html; charset=utf-8');
//require_once(DIR_SYSTEM . 'soconfig/classes/soconfig.php');
//if(isset($registry)){$this->soconfig = new Soconfig($registry);}

?>

<?php
//Select Type Of Footer
/*if(isset($typefooter)){
    $footer_alert = '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Pleases Create Position Footer</div>';
    switch ($typefooter) {
    case "1":
        $footer1 = DIR_TEMPLATE.$theme.'/template/footer/footer1.tpl';
        if (file_exists($footer1)) include($footer1);
        else echo $footer_alert;
        break;
        include(DIR_TEMPLATE.$theme.'/template/footer/footer1.tpl');break;
    case "2":
        $footer2 = DIR_TEMPLATE.$theme.'/template/footer/footer2.tpl';
        if (file_exists($footer2)) include($footer2);
        else echo $footer_alert;
        break;
    case "3":
        $footer3 = DIR_TEMPLATE.$theme.'/template/footer/footer3.tpl';
        if (file_exists($footer3)) include($footer3);
        else echo $footer_alert;
        break;
    case "4":
        $footer4 = DIR_TEMPLATE.$theme.'/template/footer/footer4.tpl';
        if (file_exists($footer4)) include($footer4);
        else echo $footer_alert;
        break;
    case "5":
        $footer5 = DIR_TEMPLATE.$theme.'/template/footer/footer5.tpl';
        if (file_exists($footer5)) include($footer5);
        else echo $footer_alert;
        break;
    case "6":
        $footer5 = DIR_TEMPLATE.$theme.'/template/footer/footer6.tpl';
        if (file_exists($footer5)) include($footer5);
        else echo $footer_alert;
        break;
    case "7":
        $footer5 = DIR_TEMPLATE.$theme.'/template/footer/footer7.tpl';
        if (file_exists($footer5)) include($footer5);
        else echo $footer_alert;
        break;
    case "8":
        $footer5 = DIR_TEMPLATE.$theme.'/template/footer/footer8.tpl';
        if (file_exists($footer5)) include($footer5);
        else echo $footer_alert;
        break;
                
    }
}else{
    include(DIR_TEMPLATE.$theme.'/template/footer/footer1.tpl');
}*/
?>


<footer class="footer">
    <div class="container">
        <div class="footer_block">
            <div class="footer_brand">
                <a class="" href="#"><img class="logo" src="image/catalog/talan_img/talan-white.png" alt="Logo"></a>
                <div class="social_networks">
                    <a target="_blank" title="facebook"
                       href="https://www.facebook.com/talansafety">
                        <img src="image/catalog/talan_img/facebook1.svg" alt="">
                    </a>
                    <a target="_blank" title="youtube" href="https://www.youtube.com/channel/UCDtnwGxrf0-VVwvtSkhNeGQ/videos" rel="nofollow">
                        <img src="image/catalog/talan_img/youtube1.svg" alt="">
                    </a>
					<a target="_blank" title="instagram" href="https://www.instagram.com/talan_shoes/">
                        <img src="image/catalog/talan_img/icons8-instagram-100-2.png" alt="" style="height: 37px;">
                    </a>
                </div>
            </div>
            <div class="footer_block_nav">
                <div class="footer_nav">
                    <ul class="footer_nav__ul">
                        <li class="footer_nav__li">
                            <a href="#"><?php echo $footer_for_clients; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="terms-of-payment-and-delivery"><?php echo $footer_shipping_payment; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="technologies"><?php echo $footer_technologies; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="public-offer-agreement"><?php echo $footer_public_agreement; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="anti-corruption-program"><?php echo $footer_corruption_program; ?></a>
                        </li>
                    </ul>
                    <ul class="footer_nav__ul">
                        <li class="footer_nav__li">
                            <a href="#"><?php echo $text_information; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="about-us"><?php echo $footer_about_us; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="annual-report"><?php echo $footer_annual_report; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="warranty-care-instructions"><?php echo $footer_warranty_obligations; ?></a>
                        </li>
                    </ul>
                    <ul class="footer_nav__ul">
                        <li class="footer_nav__li">
                            <a href="#"><?php echo $footer_support; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="contact-us"><?php echo $text_contact; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="sitemap"><?php echo $text_sitemap; ?></a>
                        </li>
                    </ul>
                    <ul class="footer_nav__ul">
                        <li class="footer_nav__li">
                            <a href="#"><?php echo $text_information; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="">
                                <img class="svg-maps" src="image/catalog/talan_img/Vector-maps_f.svg" alt=""><?php echo $footer_adress; ?>
                            </a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="">
                                <img src="image/catalog/talan_img/vector-email_f.svg" alt="">Store@talan.ua</a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="tel:+380672536909">
                                <img src="image/catalog/vector-phone_f.svg" alt="">+38 (067) 253-69-09 <?php echo $footer_retail; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="tel:+380951901004">
                                <img src="image/catalog/vector-phone_f.svg" alt="">+38 (095) 190-10-04 <?php echo $footer_retail; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="tel:+380672200385">
                                <img src="image/catalog/vector-phone_f.svg" alt="">+38 ( 067) 220-03-85 <?php echo $footer_wholesale; ?></a>
                        </li>
                        <li class="footer_nav__li">
                            <a href="">
                                <img src="image/catalog/talan_img/vector-time_f.svg" alt=""><?php echo $footer_time; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php if (isset($backtop) && $backtop == 1): ?>
    <!-- MENU ON TOP CUSTOM -->
    <!--<div class="back-to-top"><i class="fa fa-angle-up"></i></div>-->
    <div class="back-to-top"><img src="image/catalog/talan_img/vector-btn_up.svg" alt=""></div>
    <!-- END-->
<?php endif; ?>


</div>

				<style type="text/css">
					#cookie_consent_notification,
					#cookie_consent_notification *,
					#cookie_consent_notification *:before,
					#cookie_consent_notification *:after {
						font-family: inherit;
						font-weight: 300;
						font-size: 14px;
						line-height: 1.6;
						color: #fff;
						-webkit-box-sizing: border-box;
						-moz-box-sizing: border-box;
						box-sizing: border-box;
					}
					#cookie_consent_notification {
						position: fixed;
						top: auto;
						left: 0;
						right: auto;
						bottom: 0;
						margin: 0;
						padding: 8px 24px;
						color: white;
						background: rgb(12 12 12 / 95%);
						z-index: 999999;
						width: 100%;
						text-align: center;
						-webkit-transition: all ease-out 0.3s;  
						-moz-transition: all ease-out 0.3s;
						-ms-transition: all ease-out 0.3s; 
						-o-transition: all ease-out 0.3s;
						transition: all ease-out 0.3s;  
						-webkit-transform: translate3d(0,100%,0);
						-moz-transform: translate3d(0,100%,0);
						-ms-transform: translate3d(0,100%,0);
						-o-transform: translate3d(0,100%,0);
						transform: translate3d(0,100%,0);
						-webkit-backface-visibility: hidden; /* Chrome, Safari, Opera */
						backface-visibility: hidden;
					}
					#cookie_consent_notification.active {
						-webkit-transform: translate3d(0,0,0);
						-moz-transform: translate3d(0,0,0);
						-ms-transform: translate3d(0,0,0);
						-o-transform: translate3d(0,0,0);
						transform: translate3d(0,0,0);
					}
					#cookie_consent_notification .disable_cookie_consent_notification {
						display: inline-block;
						text-decoration: none;
						text-align: center;
						font-weight: bold;
						margin: 0 10px;
						padding: 0 6px;
						color: #229ac8;
					}
				</style>
				<script type="text/javascript">
				(function($) {
					(function(g,f){"use strict";var h=function(e){if("object"!==typeof e.document)throw Error("Cookies.js requires a `window` with a `document` object");var b=function(a,d,c){return 1===arguments.length?b.get(a):b.set(a,d,c)};b._document=e.document;b._cacheKeyPrefix="cookey.";b._maxExpireDate=new Date("Fri, 31 Dec 9999 23:59:59 UTC");b.defaults={path:"/",secure:!1};b.get=function(a){b._cachedDocumentCookie!==b._document.cookie&&b._renewCache();return b._cache[b._cacheKeyPrefix+a]};b.set=function(a,d,c){c=b._getExtendedOptions(c); c.expires=b._getExpiresDate(d===f?-1:c.expires);b._document.cookie=b._generateCookieString(a,d,c);return b};b.expire=function(a,d){return b.set(a,f,d)};b._getExtendedOptions=function(a){return{path:a&&a.path||b.defaults.path,domain:a&&a.domain||b.defaults.domain,expires:a&&a.expires||b.defaults.expires,secure:a&&a.secure!==f?a.secure:b.defaults.secure}};b._isValidDate=function(a){return"[object Date]"===Object.prototype.toString.call(a)&&!isNaN(a.getTime())};b._getExpiresDate=function(a,d){d=d||new Date; "number"===typeof a?a=Infinity===a?b._maxExpireDate:new Date(d.getTime()+1E3*a):"string"===typeof a&&(a=new Date(a));if(a&&!b._isValidDate(a))throw Error("`expires` parameter cannot be converted to a valid Date instance");return a};b._generateCookieString=function(a,b,c){a=a.replace(/[^#$&+\^`|]/g,encodeURIComponent);a=a.replace(/\(/g,"%28").replace(/\)/g,"%29");b=(b+"").replace(/[^!#$&-+\--:<-\[\]-~]/g,encodeURIComponent);c=c||{};a=a+"="+b+(c.path?";path="+c.path:"");a+=c.domain?";domain="+c.domain: "";a+=c.expires?";expires="+c.expires.toUTCString():"";return a+=c.secure?";secure":""};b._getCacheFromString=function(a){var d={};a=a?a.split("; "):[];for(var c=0;c<a.length;c++){var e=b._getKeyValuePairFromCookieString(a[c]);d[b._cacheKeyPrefix+e.key]===f&&(d[b._cacheKeyPrefix+e.key]=e.value)}return d};b._getKeyValuePairFromCookieString=function(a){var b=a.indexOf("="),b=0>b?a.length:b;return{key:decodeURIComponent(a.substr(0,b)),value:decodeURIComponent(a.substr(b+1))}};b._renewCache=function(){b._cache= b._getCacheFromString(b._document.cookie);b._cachedDocumentCookie=b._document.cookie};b._areEnabled=function(){var a="1"===b.set("cookies.js",1).get("cookies.js");b.expire("cookies.js");return a};b.enabled=b._areEnabled();return b},e="object"===typeof g.document?h(g):h;"function"===typeof define&&define.amd?define(function(){return e}):"object"===typeof exports?("object"===typeof module&&"object"===typeof module.exports&&(exports=module.exports=e),exports.Cookies=e):g.Cookies=e})("undefined"===typeof window? this:window);
					$(document).ready(function($) {
						var show_notification = true;
						var html = '<div id="cookie_consent_notification">';
								html += 'Этот сайт использует файлы <b>Cookies</b> для более комфортной работы пользователя.';
								html += '<a href="javascript:void(0);" class="disable_cookie_consent_notification">';
								html += '<button type="button" class="btn btn-primary btn-sm">Принимаю</button>';
							html += '</a><a href="https://support.google.com/accounts/answer/61416?hl=ru" target="_blank" class="disable_cookie">Отключить</a></div>';
						if (typeof Cookies == "undefined" || typeof Cookies != "function") {
							show_notification = false;
						} else if (typeof Cookies.get('disable_cookie_consent_notification') != "undefined" && Cookies.get('disable_cookie_consent_notification') == 'true') {
							show_notification = false;
						}
						if (show_notification) {
							$('body').append(html);
							$('#cookie_consent_notification').addClass('active');
							$('.disable_cookie_consent_notification').on('click', function(event) {
								event.preventDefault();
								$('#cookie_consent_notification').removeClass('active');
								Cookies.set('disable_cookie_consent_notification', 'true');
							});
						}
					});
				})(jQuery);
				</script>
			

    <script>
      function showForm(data){
        $.ajax({
          url: 'index.php?route=product/fastorder/getForm',
          type: 'post',
          data: {product_name: data['product_name'], price: data['price'] ,product_id: data['product_id'], product_link: data['product_link']},

          beforeSend: function() {
          },
          complete: function() {
          },
          success: function(result) {
            $('#fastorder-form-container'+data['product_id']).html(result);
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
        });
    };
    </script>
      
</body>
</html>
