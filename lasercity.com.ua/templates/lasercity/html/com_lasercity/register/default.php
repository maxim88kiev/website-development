<?php defined('_JEXEC') or die;
ContentLoader::addScript('register');
$current_sef = ContentLoader::getUriByLanguage();
?>
<main>
    <section class="register" aria-labelledby="Register">
        <h1 class="register__title" id="Register"><?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_ZAGOL')?></h1>
        <section class="register__who" aria-labelledby="RegisterForClientOrPartner">
            <h2 class="register__who-title title-lines" id="RegisterForClientOrPartner"><?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_WHO_YOU')?></h2>
            <form class="register__who-form send-account-form" method="post">
                <p class="register__who-choices type-choices">
                    <label class="type-choices__choice type-choices__choice--client">
                        <input type="radio" name="register_for" value="user">
                        <span><?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_KAK_USER')?></span>
                    </label>
                    <label class="type-choices__choice type-choices__choice--partner">
                        <input type="radio" name="register_for" value="organization">
                        <span><?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_KAK_ORGANIZATION')?></span>
                    </label>
                </p>

                <p class="register__either-description"><?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_WHO_ENTER')?></p>
                <p class="register__either-links login-social">
                    <a class="login-social__link login-social__link--google google-button" href="#">Google</a>
                    <a class="login-social__link login-social__link--facebook facebook-button" href="#">Facebook</a>
                </p>
                <p class="register__who-inputs-wrapper">
                    <span class="error-tip"></span>
                </p>

                <p class="register__who-inputs-wrapper">
                    <label>
                        <?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_FOR_EMAIL')?>
                    </label>
                    <label>
                        <input name="name" type="text" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_NAME')?>" placeholder="<?=JText::_('COM_LASERCITY_ALL_FORM_NAME')?>">
                    </label>
                    <label>
                        <input name="email" type="text" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_EMAIL')?>" placeholder="<?=JText::_('COM_LASERCITY_ALL_FORM_EMAIL')?>">
                    </label>
                    <label>
                        <input name="phone" type="text" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_PHONE')?>" placeholder="+38 (___) __-__-__">
                    </label>
                    <label>
                        <input name="password" class="register__who-input register__who-input--password" type="password" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_PASSWORD')?>" placeholder="<?=JText::_('COM_LASERCITY_ALL_FORM_PASSWORD')?>">
                        <button class="register__who-password-btn button-password" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_PASSWORD_SEE')?>" title="<?=JText::_('COM_LASERCITY_ALL_FORM_PASSWORD_SEE')?>" type="button"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_FORM_PASSWORD_SEE')?></span></button>
                    </label>
                </p>
                <section class="register__either" aria-label="RegisterEitherOption">
                    <div class="register__either-rules accept-rules">
                        <label>
                            <input name="ruls" type="checkbox">
                        </label>
                        <p class="accept-rules__rule"><?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_WHO_ANGREE')?> <a href="<?=$current_sef?>">Lasercity.com.ua</a></p>
                    </div>
                </section>
                <p class="register__who-inputs-wrapper">
                    <span class="error-ruls"></span>
                </p>
                <!--<div class="status for-register"></div>-->
                <button class="register__sent-button button btn-register"><?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_BUTTON')?></button>
            </form>
        </section>
    </section>
</main>