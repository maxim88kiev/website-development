<?php if(isset($registry)){$this->soconfig = new Soconfig($registry);} 

?>
		<div class="container footer-content">
		
		
		<?php 
		  $path = "common/home";
		  $url = $_SERVER['REQUEST_URI'];
		  if ($url == "/mob/" or strripos($url, $path)) {?>
			

			<div class="col-md-6 order-2 order-md-2 order-lg-3 col-lg-4 pb-2">
                                <div class="talan-numbers">
                                    <div class="mr-lg-2">
                                        <h3 class="talan_h3"><?php echo $text_romny; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635611">(067) 463-56-11</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380544832161">(05448)-3-21-61</a></p>
                                        <h3 class="talan_h3"><?php echo $text_kiev; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635603">(067) 463-56-03</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380442894427">(044) 289-44-27</a></p>
                                        <h3 class="talan_h3"><?php echo $text_kharkov; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380679410705">(067) 941-07-05</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380675027406">(067) 502-74-06</a></p>
                                    </div>
                                    <div>
                                        <h3 class="talan_h3"><?php echo $text_dnieper; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635604">(067) 463-56-04</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380567324095">(056)-732-40-95</a></p>
                                        <h3 class="talan_h3"><?php echo $text_nikolaev; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635602">(067) 463-56-02</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380512581192">(0512) 58-11-92</a></p>
                                        <h3 class="talan_h3"><?php echo $text_ternopil; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674013748">(067) 401-37-48</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380352520406">(0352) 52-04-06</a></p>
                                    </div>
                                </div>
                            </div>
			
			
		 <?php } ?>
			
			<?php if ($mobile['phone_status'] && $mobile['email_status']):?>
			<!--<div class="footernav-top">
				<div class="need-help">
					<p><?php echo $objlang->get('text_needhelp')?></p>
					<div class="nh-contact">
						<?php if ($mobile['phone_status']):?><a href="tel:<?php echo $mobile['phone_text'];?>"><i class="fa fa-phone"></i><?php echo $mobile['phone_text'];?></a> <?php endif;?>
						<?php if ($mobile['email_status']):?><a class="need-help-padding" href="mailto:<?php echo $mobile['email_text'];?>" target="_top"><i class="fa fa-envelope-o"></i> <?php echo $objlang->get('text_emailus')?></a> <?php endif;?>
					</div>
				</div>
			</div>-->
			<?php endif;?>
			
			<?php if ($mobile['customfooter_status']):?>
			<!--<div class="footernav-social">
				<?php echo  html_entity_decode($mobile['customfooter_text'], ENT_QUOTES, 'UTF-8');?>
			</div>-->
			<?php endif;?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			<?php if ($mobile['menufooter_status'] ):?>
			
			
			<div class="footernav-midde">
				<ul class="footer-link-list row">
				
					<li class="col-xs-6"><a href="technologies"><?php echo $footer_technologies; ?></a></li>
					<li class="col-xs-6"><a href="https://drive.google.com/file/d/1FNeTOgPBkABDpFW2SPiuDBBLVyG60wr7/view"><?php echo $text_catalog_left; ?></a></li>
					<li class="col-xs-6"><a href="certificates"><?php echo $text_sert_left; ?></a></li>
					<li class="col-xs-6"><a href="contact-us"><?php echo $text_contact_left; ?></a></li>
				
					<?php 
					/*if(isset($mobile['footermenus'])){
						foreach($mobile['footermenus'] as $nummber => $menuitem) {*/ ?>
						<!--<li class="col-xs-6"><a href="<?php //echo $menuitem['link'];?>"> <?php //echo $menuitem['name'];?> </a></li>-->
						<?php /*}
					}*/
					?>
					
				</ul>
			</div>
			
			<div align="center" class="social_img">
			<ul>
				<li><a href="https://www.facebook.com/talansafety" target="_blank"> <div class="facebook_img"></div> </a></li>
				<li><a href="https://www.instagram.com/talan_shoes/" target="_blank"> <div class="insta_img"></div> </a></li>
				<li><a href="https://www.youtube.com/channel/UCDtnwGxrf0-VVwvtSkhNeGQ/" target="_blank" rel="nofollow"> <div class="youtube_img"></div></a></li>
			</ul>	
			</div>
			<?php endif;?>
			
			<div class="footernav-bottom">
				<div class="text-center">
					<?php if ( !empty($mobile['imgpayment'] )) : ?>
						<p class="nomargin"><img alt="Footer Image" class="form-group" src="<?php echo 'image/'.$mobile['imgpayment'];?>"></p>
					<?php endif;?>
					
					<?php 
					$datetime = new DateTime();
					$cur_year	= $datetime->format('Y');
					$copyright = $mobile['copyright'];
					echo (!isset($copyright) || !is_string($copyright) ? $powered : str_replace('{year}', $cur_year,html_entity_decode($copyright, ENT_QUOTES, 'UTF-8')));
					?>
					
				</div>
			</div>
		</div>
		
	</div>
	<!-- End Main Content -->
	
	</div>
	<!-- End Main wrapper -->
	
    <?php 
		//Render Panel Left
		include(DIR_TEMPLATE.'so-mobile/template/soconfig/panel_left.tpl');
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

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
