<?php echo $header; ?>
<!--<div class="breadcrumbs">
    <div class="container">
        <div class="current-name">
            <?php
            //$last = count($breadcrumbs);
            //$i = 0;
            //foreach ($breadcrumbs as $breadcrumb => $crumbInfo) :
                //$i++;
                ?>
                <?php //if ($i == $last) : ?>
                <?php //echo $crumbInfo['text']; ?>
            <?php //endif; ?>
            <?php //endforeach; ?>
        </div>
        <? //require('catalog/view/theme/so-destino/template/common/breadcrumb.tpl'); ?>
    </div>
</div>-->


<div class="container_bg_cont">
	<div class="container contacts content-main">
            <div class="row">
                <div id="content" class="col-sm-12">
                    <h3 class="contacts_title"><?php echo $text_title; ?></h3>
                        <div class="row">
                            <div class="col-md-6 order-1 col-lg-4 pb-1">
                                <div class="talan-contact">
                                    <a class="contact_brand" href="#"><img class="logo mb-3" src="image/catalog/talan_img/talan.png" alt="Logo" height="25"></a>
                                    <h3 class="contact_talan_h3"><?php echo $text_contact_talan; ?></h3>
                                    <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-home.svg" alt=""><?php echo $text_contact; ?></p>
                                    <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380672536909">(067) 253-69-09</a>
                                    </p>
                                    <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380951901004">(095) 190-10-04</a>
                                    </p>
                                    <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-email.svg" alt="">store@talan.ua
                                    </p>
                                    <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt="">опт:   <a href="tel:+38067
                                        2200385">(067)
                                            220-03-85</a></p>
                                    <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-time.svg" alt="">09:00–17:30</p>
                                </div>
                            </div>
                            <div class="col-md-6 order-2 order-md-2 order-lg-3 col-lg-4 pb-2">
                                <div class="contact_numbers">
                                    <div class="mr-lg-2 contact_numb-1">
                                        <h3 class="contact_talan_h3"><?php echo $text_romny; ?></h3>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635611">(067) 463-56-11</a></p>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380544832161">(05448)-3-21-61</a></p>
                                        <h3 class="contact_talan_h3"><?php echo $text_kiev; ?></h3>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635603">(067) 463-56-03</a></p>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380442894427">(044) 289-44-27</a></p>
                                        <h3 class="contact_talan_h3"><?php echo $text_kharkov; ?></h3>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380679410705">(067) 941-07-05</a></p>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380675027406">(067) 502-74-06</a></p>
                                    </div>
                                    <div>
                                        <h3 class="contact_talan_h3"><?php echo $text_dnieper; ?></h3>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635604">(067) 463-56-04</a></p>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380567324095">(056)-732-40-95</a></p>
                                        <h3 class="contact_talan_h3"><?php echo $text_nikolaev; ?></h3>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635602">(067) 463-56-02</a></p>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380512581192">(0512) 58-11-92</a></p>
                                        <h3 class="contact_talan_h3"><?php echo $text_ternopil; ?></h3>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674013748">(067) 401-37-48</a></p>
                                        <p class="contact_talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380352520406">(0352) 52-04-06</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 order-3 order-md-3 col-lg-4 pb-3">
							
								<form action="<?php echo $action; ?>" class="form-cont" method="post" enctype="multipart/form-data"
									  class="form-horizontal">
										<h2 class="form-cont-title"><?php echo $text_feedback; ?></h2>
										<div class="form-group required group-cont">
											<label class="control-label form-cont-text"
												   for="input-name"><?php echo $text_name; ?></label>
												<input type="text" name="name" value="<?php echo $name; ?>" id="input-name"
													   class="form-control"/>
												<?php if ($error_name) { ?>
													<div class="text-danger"><?php echo $error_name; ?></div>
												<?php } ?>
										</div>
										<div class="form-group required group-cont">
											<label class="control-label form-cont-text"
												   for="input-email"><?php echo $text_email; ?></label>
												<input type="text" name="email" value="<?php echo $email; ?>" id="input-email"
													   class="form-control"/>
												<?php if ($error_email) { ?>
													<div class="text-danger"><?php echo $error_email; ?></div>
												<?php } ?>
										</div>
										<div class="form-group required group-cont">
											<label class="control-label form-cont-text"
												   for="input-enquiry"><?php echo $text_message; ?></label>
												<textarea name="enquiry" rows="2" id="input-enquiry"
														  class="form-control"><?php echo $enquiry; ?></textarea>
												<?php if ($error_enquiry) { ?>
													<div class="text-danger"><?php echo $error_enquiry; ?></div>
												<?php } ?>
										</div>
										<?php echo $captcha; ?>
									<div class="buttons">
										<div class="btn-center">
											<button class="btn cont-btn" type="submit"><?php echo $text_send; ?></button>
										</div>
									</div>
								</form>
							
                                
								
                            </div>
							
                        </div>
                        <div class="row">
                            <div class="col p-0">
                                <div class="talan-maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.1681952945883!2d30.501331414495898!3d50.437967696147155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cef074dd2e61%3A0x6d69d7009e508a06!2z0YPQuy4g0KHQsNC60YHQsNCz0LDQvdGB0LrQvtCz0L4sIDc3LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1606406434714!5m2!1sru!2sua" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="450" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	<!--<div class="main">

        <div class="row"><?php echo $column_left; ?>
            <?php if ($column_left && $column_right) { ?>
                <?php $class = 'col-sm-6'; ?>
            <?php } elseif ($column_left || $column_right) { ?>
                <?php $class = 'col-sm-9'; ?>
            <?php } else { ?>
                <?php $class = 'col-sm-12'; ?>
            <?php } ?>
            <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>

                <?php if ($image) { ?>
                    <div id="map-canvas"><img src="<?php echo $image; ?>" alt="<?php echo $store; ?>" title="<?php echo $store; ?>" /></div>
                <?php } ?>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeH5H6F0ZlT46Y0TmM-OLuE6McgLveC0U"></script>
                <?php if ($geocode) { ?>
                    <script>
                        function initialize() {
                            var myLatlng = new google.maps.LatLng(<?php echo $geocode;?>);
                            var mapOptions = {
                                zoom: 16,
                                zoomControl: false,
                                scaleControl: false,
                                scrollwheel: false,
                                disableDoubleClickZoom: true,
                                center: myLatlng
                            }
                            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                map: map,
                                title: 'Furnicom!'
                            });
                        }

                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <div id="map-canvas"></div>
                <?php } ?>

                <div class="info-contact row" itemscope itemtype="http://schema.org/Organization">
                    <div class="col-sm-4 col-xs-12 info-store">
                        <div class="name-store"><h3 itemprop="name"><?php echo $store; ?></h3></div>
                        <?php if ($comment) { ?>
                            <div class="comment">
                                <?php echo $comment; ?></div>
                        <?php } ?>
                        <address>
                            <div class="address clearfix form-group">
                                <div class="pull-left"><i class="fa fa-home"></i></div>
                                <div class="text" itemprop="address"><?php echo $address; ?></div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-phone"></i></div>
                                <div class="text" itemprop="telephone"><?php echo $telephone; ?></div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                                <div class="text" itemprop="email"><?php echo $email2; ?></div>
                            </div>
                            <?php if ($fax) { ?>
                                <div class="form-group">
                                    <div class="pull-left"><i class="fa fa-fax"></i></div>
                                    <div class="text"><?php echo $fax; ?></div>
                                </div>
                            <?php } ?>
                            <?php if ($open) { ?>
                                <div class="form-group">
                                    <div class="pull-left"><i class="fa fa-clock-o"></i></div>
                                    <div class="text"><?php echo $text_open; ?><?php echo $open; ?></div>
                                </div>
                            <?php } ?>
                            <?php if ($geocode) { ?>
                                <a href="https://maps.google.com/maps?q=<?php echo urlencode($geocode); ?>&hl=<?php echo $geocode_hl; ?>&t=m&z=15"
                                   target="_blank" class="btn btn-info"><i
                                            class="fa fa-map-marker"></i> <?php echo $button_map; ?></a>
                            <?php } ?>
                        </address>

                        <address style="float: left; width: 50%;">
                            <div class="address clearfix form-group">
                                <div class="pull-left"><i class="fa fa-home"></i></div>
                                <div class="text">м. Київ</div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-phone"></i></div>
                                <div class="text">
                                    (067) 463-56-03<br>
                                    (044) 289-44-27
                                </div>
                            </div>
                        </address>

                        <address style="float: left; width: 50%;">
                            <div class="address clearfix form-group">
                                <div class="pull-left"><i class="fa fa-home"></i></div>
                                <div class="text">м. Харків</div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-phone"></i></div>
                                <div class="text">
                                    (067) 941-07-05<br>
                                    (067) 502-74-06
                                </div>
                            </div>
                        </address>

                        <address style="float: left; width: 50%;">
                            <div class="address clearfix form-group">
                                <div class="pull-left"><i class="fa fa-home"></i></div>
                                <div class="text">м. Дніпро</div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-phone"></i></div>
                                <div class="text">
                                    (067) 463-56-04<br>
                                    (056)-732-40-95
                                </div>
                            </div>
                        </address>

                        <address style="float: left; width: 50%;">
                            <div class="address clearfix form-group">
                                <div class="pull-left"><i class="fa fa-home"></i></div>
                                <div class="text">м. Миколаїв</div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-phone"></i></div>
                                <div class="text">
                                    (067) 463-56-02<br>
                                    (0512) 58-11-92
                                </div>
                            </div>
                        </address>

                        <address style="float: left; width: 50%;">
                            <div class="address clearfix form-group">
                                <div class="pull-left"><i class="fa fa-home"></i></div>
                                <div class="text">м. Тернопіль</div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-phone"></i></div>
                                <div class="text">
                                    (067) 401-37-48<br>
                                    (0352) 52-04-06
                                </div>
                            </div>
                        </address>

                        <address style="float: left; width: 50%;">
                            <div class="address clearfix form-group">
                                <div class="pull-left"><i class="fa fa-home"></i></div>
                                <div class="text">м.Ромни (Сумська обл.)</div>
                            </div>
                            <div class="form-group">
                                <div class="pull-left"><i class="fa fa-phone"></i></div>
                                <div class="text">
                                    (067) 463-56-11<br>
                                    (05448)-3-21-61
                                </div>
                            </div>
                        </address>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data"
                              class="form-horizontal">
                            <fieldset>
                                <legend><h2><?php echo $text_contact; ?></h2></legend>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label"
                                           for="input-name"><?php echo $entry_name; ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="<?php echo $name; ?>" id="input-name"
                                               class="form-control"/>
                                        <?php if ($error_name) { ?>
                                            <div class="text-danger"><?php echo $error_name; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label"
                                           for="input-email"><?php echo $entry_email; ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" value="<?php echo $email; ?>" id="input-email"
                                               class="form-control"/>
                                        <?php if ($error_email) { ?>
                                            <div class="text-danger"><?php echo $error_email; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label"
                                           for="input-enquiry"><?php echo $entry_enquiry; ?></label>
                                    <div class="col-sm-10">
                                        <textarea name="enquiry" rows="10" id="input-enquiry"
                                                  class="form-control"><?php echo $enquiry; ?></textarea>
                                        <?php if ($error_enquiry) { ?>
                                            <div class="text-danger"><?php echo $error_enquiry; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php echo $captcha; ?>
                            </fieldset>
                            <div class="buttons">
                                <div class="pull-right">
                                    <button class="btn btn-info" type="submit">
                                        <span><?php echo $button_submit; ?></span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <?php echo $content_bottom; ?></div>
        <?php echo $column_right; ?></div>-->
	
	
	
	
	
	
	
	
	
	
	
<?php echo $footer; ?>
