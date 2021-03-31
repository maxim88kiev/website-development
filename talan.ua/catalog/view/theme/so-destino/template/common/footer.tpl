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
</body>
</html>
