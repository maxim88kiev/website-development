<footer>

    <div class="block_footer">
      <div class="block_footer__col">
        <div class="block_footer__col_txt1"><?php echo $text_contacts_foot; ?></div>
        <div class="block_footer__col_line1"></div>
        <div class="block_footer__col_line2"></div>
        <div class="block-footer__number number_first">
          <span class="txt_footer_left"><a href="tel:0445923106">+38 (044) 592 31 06</a></span>
        </div>
        <div class="block-footer__number number_next">
          <span class="txt_footer_left"><a href="tel:+3809613014">+38 (096) 961 30 14</a></span>
        </div>
        <div class="block-footer__number time">
          <span class="txt_footer_left">Пн - Пт 9:00 - 19:00</span>
        </div>
        <div class="block-footer__number email">
          <span class="txt_footer_left">info@garden-stones.com.ua</span>
        </div>
      </div>
      <div class="block_footer__col">
        <div class="block_footer__col_txt1"><?php echo $text_menu_foot; ?></div>
        <div class="block_footer__col_line1"></div>
        <div class="block_footer__col_line2"></div>
        <div class="block_footer__col_cat">
          <div class="block_footer__col_cat1">
            <ul>
              <li><a href="about_us1" class=""><?php echo $text_about_foot; ?></a></li>
              <li><a href="dostavka-i-oplata" class=""><?php echo $text_delivery_foot; ?></a></li>
              <li><a href="index.php?route=information/news" class=""><?php echo $text_blog_foot; ?></a></li>
              <li><a href="photo_gallery" class=""><?php echo $text_gallery_foot; ?></a></li>
              <li><a href="contacts" class=""><?php echo $text_contacts2_foot; ?></a></li>
            </ul>
          </div>
          <div class="block_footer__col_cat2">
            <ul>
              <li><a href="pebble" class=""><?php echo $text_pebbles_foot; ?></a></li>
              <li><a href="mramornaya-kroshka" class=""><?php echo $text_marble_foot; ?></a></li>
              <li><a href="dekorativnyie-kamni" class=""><?php echo $text_exclusive_foot; ?></a></li>
              <li><a href="dekorativnoe-steklo" class=""><?php echo $text_glass_foot; ?></a></li>
              <li><a href="fontany" class=""><?php echo $text_fountains_foot; ?></a></li>
              <li><a href="gravelfix" class=""><?php echo $text_gravel_fix_foot; ?></a></li>
              <li><a href="bordyur-sadoviy" class=""><?php echo $text_border_foot; ?></a></li>
              <li><a href="stones_aquariums" class=""><?php echo $text_aquarium_stones; ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="block_footer__col">
        <div class="block_footer__col_txt1"><?php echo $text_adress_foot; ?></div>
        <div class="block_footer__col_line1"></div>
        <div class="block_footer__col_line2"></div>
        <div class="block-footer__txt txt_offis">
          <span class="txt_top"><?php echo $text_warehouse3_foot; ?>:</span>
          <br>
          <span class="txt_footer_right"><?php echo $text_warehouse1_foot; ?></span>
          <br>
          <span class="txt_footer_bot"><a href="https://www.google.com/maps/place/%D0%9A%D0%B0%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+Blue+Barbus/@50.4683306,30.4599304,18z/data=!4m5!3m4!1s0x0:0xe070eff1956e914!8m2!3d50.4685972!4d30.4605734?hl=ru" class="" target="_blank"><?php echo $text_get_foot; ?></a></span>
        </div>
        <div class="block-footer__txt txt_email">
          <span class="txt_top"><?php echo $text_office_foot; ?>:</span>
          <br>
          <span class="txt_footer_right"><?php echo $text_warehouse2_foot; ?></span>
          <br>
          <span class="txt_footer_bot"><a href="https://goo.gl/maps/RdHrmx9xrRZQXEEW6" class="" target="_blank"><?php echo $text_get_foot; ?></a></span>
        </div>
      </div>
    </div>
    <div class="bottom_footer">
      <div class="bottom_footer_img">
		  <a href="https://www.facebook.com/gardenstones.com.ua" class=""><div class="bottom_footer_img_f"></div></a>
		  <a href="https://www.instagram.com/garden.stones/?hl=uk" class=""><div class="bottom_footer_img_i"></div></a>
      </div>
	  <div class="bottom_footer_txt">© garden-stones.com.ua</div>
	  <div class="bottom_footer_txt">Раскрутка сайта — <a target="_blank" href="http://aleksandrvasiuk.com/seo/" rel="nofollow">aleksandrvasiuk.com</a></div>
    </div>
















  <!--<div class="container">
    <div class="row">
      <?php if ($informations) { ?>
      <div class="col-sm-3">
        <h5><?php echo $text_information; ?></h5>
        <ul class="list-unstyled">
          <?php foreach ($informations as $information) { ?>
          <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <?php } ?>
      <div class="col-sm-3">
        <h5><?php echo $text_service; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
          <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
          <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo $text_extra; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
          <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
          <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
          <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo $text_account; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
          <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
          <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
          <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p><?php echo $powered; ?></p>
  </div>-->
</footer>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->

</body></html>