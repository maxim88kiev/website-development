<?php defined('_JEXEC') or die;

lastVisit('home');

$input         = JFactory::$application->input;
$language_list = LangHelper::getList();

//sef по умолчанию
//$default_sef = ContentLoader::getDefaultSef();
//узнаем ссылку на язык
$current_sef = ContentLoader::getUriByLanguage();

$city_list          = CityHelper::getList();
$current_city_alias = CityHelper::getCurrent();

/*JFactory::$language->setDefault($current_city_alias->default_language);
echo '<pre>';
print_r($current_city_alias);
echo '</pre>';*/
JFactory::$session->set('current_city_alias', $current_city_alias->alias);

JHtml::_('stylesheet', 'templates/lasercity/css/style.min.css');
JHtml::_('stylesheet', 'templates/lasercity/css/style_dopol_MAX_potom_perezaliet.css');
JHtml::_('stylesheet', 'templates/lasercity/css/style-articles.min.css');
ContentLoader::addScript('jquery-3.3.1.min', true);
ContentLoader::addScript('jquery.mask.min', true);
ContentLoader::addScript('jquery.form', true);
ContentLoader::addScript('ajaxupload.3.5.min', true);
ContentLoader::addScript('dtime', true);
ContentLoader::addScript('popups', true);
ContentLoader::addScript('lazysizes.min', true);
ContentLoader::addScript('util', true);
ContentLoader::addScript('plugins', true);
ContentLoader::addScript('similar', true);

ContentLoader::addPopup('singup-popup');
ContentLoader::addPopup('popup-forgot');
ContentLoader::addPopup('addSalonPopup');
/*JHtml::_('script', 'templates/lasercity/js/page-header.js', array(), array('defer' => 'defer'));
JHtml::_('script', 'templates/lasercity/js/page-footer.js', array(), array('defer' => 'defer'));
JHtml::_('script', 'templates/lasercity/js/singup.js', array(), array('defer' => 'defer'));*/

$explode_url = explode('/', JUri::current());
$url_comps   = array_splice($explode_url, 3);

$language_sef = $_SERVER['REQUEST_URI'];

foreach ($language_list as $lang)
{
	foreach ($url_comps as $key => $comp)
	{
		if ($comp == $lang->sef)
		{
			unset($url_comps[$key]);
		}
	}
	$language_sef = str_ireplace("/$lang->sef/", "", $language_sef);
}

foreach ($url_comps as $key => $comp)
{
	if ($comp == '')
	{
		unset($url_comps[$key]);
	}
}

$url_comps = array_values($url_comps);

$current_page = 'home';

if (count($url_comps))
{
	$cities = array();
	foreach ($city_list as $city)
	{
		$cities[] = $city->alias;
	}
	$test_url     = $url_comps[0];
	$current_page = in_array($test_url, $cities) ? 'home' : $test_url;
}

$to_footer_current_page = $current_page;

$clinics_popup = $input->get('to_template_unload_affiliate_popup', true);
if (!$clinics_popup && $current_page == 'clinics' || $input->get('unset_active_menu_current', false))
{
	$current_page = null;
}

?>
<!doctype html>
<html lang="<?= $this->language; ?>" dir="<?= $this->direction; ?>">
<head>
    <meta charset="UTF-8">
    <!--<meta name="description" content="LaserCity">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/templates/lasercity/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/lasercity/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/lasercity/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/lasercity/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/templates/lasercity/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="canonical" href="<?= JUri::current() ?>"/>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <jdoc:include type="head"/>
</head>
<body data-current-value>
<header class="page-header">
    <div class="page-header__top-navigation">
        <div class="page-header__tuning">
            <a class="page-header__logo"
			   <?php if ($current_page != 'home'): ?>href="<?= $current_sef . $current_city_alias->alias ?>"
               aria-label="<?= JText::_('COM_LASERCITY_A_HEADER') ?> LaserCity"<?php endif; ?>>
                Laser<span class="page-header__logo--light">City</span><span class="page-header__logo--ua">ua</span>
            </a>
            <div class="page-header__settings">
				<?php if (ContentLoader::hideBlockForCabinet()): ?>
                    <div class="page-header__setting-city">
                        <button class="page-header__setting-city-button" type="button"
                                title="<?= JText::_('COM_LASERCITY_BUTTON_1_HEADER') ?>"
                                aria-label="<?= JText::_('COM_LASERCITY_BUTTON_1_HEADER') ?>">
                            <span class="visually-hidden"><?= JText::_('COM_LASERCITY_BUTTON_1_HEADER') ?></span>
                            <svg width="13" height="6" aria-hidden="true">
                                <path d="M1069.01,43l6.49,1.074L1081.99,43,1075.5,49Z"
                                      transform="translate(-1069 -43)"></path>
                            </svg>
                        </button>
                        <ul class="page-header__setting-city-list" aria-expanded="false">
							<?php foreach ($city_list as $city): ?>
                                <li class="page-header__setting-city-item">
                                    <a <?php if (!isset($city->current)): ?>href="<?= $current_sef ?><?= $to_footer_current_page != 'home' ? "{$to_footer_current_page}/" : '' ?><?= $city->alias ?>"<?php endif; ?>><?= $city->title ?></a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                    <button class="page-header__search-button" type="button"
                            title="<?= JText::_('COM_LASERCITY_BUTTON_2_HEADER') ?>"
                            aria-label="<?= JText::_('COM_LASERCITY_BUTTON_2_HEADER') ?>"><span
                                class="visually-hidden"><?= JText::_('COM_LASERCITY_BUTTON_2_HEADER') ?></span></button>
				<?php endif; ?>

                <div class="page-header__setting-languages--block">
					<?php
					foreach ($language_list as $lang)
					{
						if ($lang->sef !== LangHelper::getCurrentSef())
						{ ?>
                            <a href="<?= "/$lang->sef/" . $language_sef ?>"><?= $lang->sef ?></a>
						<?php }
					}
					?>
                </div>

				<?php if (!ContentLoader::hideBlockForCabinet()): ?>

					<?php
					$affiliate_list = array();
					if (!empty(JFactory::getSession()->get('cabinet_organization_id')))
					{
						$cabinet_id     = (int) JFactory::getSession()->get('cabinet_organization_id');
						$affiliate_list = ContentLoader::getAffiliatesByOrganizationId($cabinet_id);
					}
					else if (!empty(JFactory::getSession()->get('cabinet_affiliate_id')))
					{
						$cabinet_id     = (int) JFactory::getSession()->get('cabinet_affiliate_id');
						$affiliate_list = ContentLoader::getAffiliatesById($cabinet_id);
					}
					?>

                    <div class="page-header__setting-city">
                        <button class="page-header__setting-city-button" type="button"
                                title="<?= JText::_('COM_LASERCITY_BUTTON_1_HEADER') ?>"
                                aria-label="<?= JText::_('COM_LASERCITY_BUTTON_1_HEADER') ?>">
                            <span class="visually-hidden"><?= JText::_('COM_LASERCITY_BUTTON_1_HEADER') ?></span>
                            <svg width="13" height="6" aria-hidden="true">
                                <path d="M1069.01,43l6.49,1.074L1081.99,43,1075.5,49Z"
                                      transform="translate(-1069 -43)"></path>
                            </svg>
                        </button>
                        <ul class="page-header__setting-city-list" aria-expanded="false">
							<?php foreach ($affiliate_list as $affiliate): ?>
                                <li class="page-header__setting-city-item">
                                    <a <?php if ($affiliate->id != $cabinet_id): ?>href="<?= $current_sef . "cabinet-edit-affiliate/" . $affiliate->alias ?>"<?php endif; ?>><?= $affiliate->title ?></a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
				<?php endif; ?>

                <!--        <div class="page-header__setting-languages">-->
                <!--          <button class="page-header__setting-languages-button" type="button" title="-->
				<? //=JText::_('COM_LASERCITY_BUTTON_3_HEADER')?><!--" aria-label="-->
				<? //=JText::_('COM_LASERCITY_BUTTON_3_HEADER')?><!--">-->
                <!--            <span class="visually-hidden">-->
				<? //=JText::_('COM_LASERCITY_BUTTON_3_HEADER')?><!--</span>-->
                <!--            <svg width="13" height="6" aria-hidden="true">-->
                <!--              <path d="M1069.01,43l6.49,1.074L1081.99,43,1075.5,49Z" transform="translate(-1069 -43)"></path>-->
                <!--            </svg>-->
                <!--          </button>-->
                <!--          <ul class="page-header__setting-languages-list" aria-expanded="false">-->
                <!--              --><?php //foreach ($language_list as $lang): ?>
                <!--                <li class="page-header__setting-languages-item">-->
                <!--                  <a href="-->
				<? //=($lang->sef !== LangHelper::getCurrentSef()) ? str_replace(array("//"), "/","/$lang->sef/".$language_sef) : 'javascript:void(0);' ?><!--">-->
				<? //= $lang->sef ?><!--</a>-->
                <!--                </li>-->
                <!--              --><?php //endforeach; ?>
                <!--          </ul>-->
                <!--        </div>-->
            </div>
        </div>
		<?php /*false стоит специально*/
		if (false && ContentLoader::hideBlockForCabinet()): ?>
            <ul class="page-header__user-list user-list">
                <li class="user-list__item">
                    <button class="user-list__link user-list__link--basket user-list__link--none" type="button"
                            title="<?= JText::_('COM_LASERCITY_BUTTON_4_HEADER') ?>"
                            aria-label="<?= JText::_('COM_LASERCITY_BUTTON_4_HEADER') ?>">
                        <svg class="basket" width="30" height="30" fill="#999999" viewBox="0 0 321.2 321.2"
                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <g>
                                <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6 v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4 C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4 C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4 L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2 V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2 H270l22.4,209.2H30z"></path>
                            </g>
                        </svg>
						<?= JText::_('COM_LASERCITY_BUTTON_5_HEADER') ?>
                        <span class="items">
            <output class="items-count">12</output>
            <svg class="heart" fill="#dc025e" width="19" height="17" viewBox="0 0 176.104 176.104"
                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <g>
                <path d="M150.383,18.301c-7.13-3.928-15.308-6.187-24.033-6.187c-15.394,0-29.18,7.015-38.283,18.015 c-9.146-11-22.919-18.015-38.334-18.015c-8.704,0-16.867,2.259-24.013,6.187C10.388,26.792,0,43.117,0,61.878 C0,67.249,0.874,72.4,2.457,77.219c8.537,38.374,85.61,86.771,85.61,86.771s77.022-48.396,85.571-86.771 c1.583-4.819,2.466-9.977,2.466-15.341C176.104,43.124,165.716,26.804,150.383,18.301z"></path>
              </g>
            </svg>
          </span>
                    </button>
                </li>
                <li class="user-list__item">
                    <button class="user-list__link user-list__link--login" data-set-modal-value="singup" type="button"
                            title="<?= JText::_('COM_LASERCITY_BUTTON_6_HEADER') ?>"
                            aria-label="<?= JText::_('COM_LASERCITY_BUTTON_6_HEADER') ?>">
                        <svg width="30" height="30" fill="#999999" viewBox="0 0 482.9 482.9"
                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <g>
                                <path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5 c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6 c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4 c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0 c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"></path>
                                <path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3 c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7 c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41 c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56 c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8 c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3 c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3 C447,415.5,446.9,388.8,446.8,383.6z"></path>
                            </g>
                        </svg>
						<?= JText::_('COM_LASERCITY_BUTTON_7_HEADER') ?>
                    </button>
                </li>
            </ul>
		<?php endif; ?>
    </div>
	<?php if (ContentLoader::hideBlockForCabinet()): ?>
        <nav class="page-header__navigation main-navigation">
            <div class="main-navigation__wrapper">
                <div class="main-navigation__list-wrapper">
                    <ul class="main-navigation__list">
                        <li class="main-navigation__item">
                            <a <?php if ($current_page != 'clinics'): ?>href="<?= $current_sef ?>clinics/<?= $current_city_alias->alias ?>"<?php endif; ?>
                               class="main-navigation__link main-navigation__link--salons">
                                <svg width="30" height="30" fill="#999999" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512" aria-hidden="true">
                                    <path d="M506.555,208.064L263.859,30.367c-4.68-3.426-11.038-3.426-15.716,0L5.445,208.064 c-5.928,4.341-7.216,12.665-2.875,18.593s12.666,7.214,18.593,2.875L256,57.588l234.837,171.943c2.368,1.735,5.12,2.57,7.848,2.57 c4.096,0,8.138-1.885,10.744-5.445C513.771,220.729,512.483,212.405,506.555,208.064z"></path>
                                    <path d="M442.246,232.543c-7.346,0-13.303,5.956-13.303,13.303v211.749H322.521V342.009c0-36.68-29.842-66.52-66.52-66.52 s-66.52,29.842-66.52,66.52v115.587H83.058V245.847c0-7.347-5.957-13.303-13.303-13.303s-13.303,5.956-13.303,13.303v225.053 c0,7.347,5.957,13.303,13.303,13.303h133.029c6.996,0,12.721-5.405,13.251-12.267c0.032-0.311,0.052-0.651,0.052-1.036v-128.89 c0-22.009,17.905-39.914,39.914-39.914s39.914,17.906,39.914,39.914v128.89c0,0.383,0.02,0.717,0.052,1.024 c0.524,6.867,6.251,12.279,13.251,12.279h133.029c7.347,0,13.303-5.956,13.303-13.303V245.847 C455.549,238.499,449.593,232.543,442.246,232.543z"></path>
                                </svg>
								<?= JText::_('COM_LASERCITY_A_1_HEADER') ?>
                            </a>
                        </li>
                        <!--<li class="main-navigation__item main-navigation__item--sale">
                            <a class="main-navigation__link main-navigation__link--sale"
                               href="<? /*= $current_sef */ ?>stocks/"><? /*= JText::_('COM_LASERCITY_A_2_HEADER') */ ?></a>
                        </li>-->
                        <li class="main-navigation__item">
                            <a class="main-navigation__link main-navigation__link--articles"
							   <?php if ($current_page != 'articles'): ?>href="<?= $current_sef ?>articles/"<?php endif; ?>>
                                <svg width="30" height="30" fill="#999999" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512" aria-hidden="true">
                                    <path d="M362.937,0h-294c-16.542,0-30,13.458-30,30v102c0,5.523,4.478,10,10,10s10-4.477,10-10V30c0-5.514,4.486-10,10-10h294 c5.514,0,10,4.486,10,10v372c0,5.514-4.486,10-10,10h-294c-5.514,0-10-4.486-10-10V216.333c0-5.523-4.478-10-10-10 s-10,4.477-10,10V402c0,16.542,13.458,30,30,30h294c16.542,0,30-13.458,30-30V30C392.937,13.458,379.479,0,362.937,0z"></path>
                                    <path d="M56.006,169.7c-1.859-1.86-4.439-2.92-7.069-2.92s-5.21,1.06-7.07,2.92c-1.861,1.87-2.93,4.45-2.93,7.07 c0,2.64,1.07,5.21,2.93,7.08c1.86,1.86,4.44,2.93,7.07,2.93c2.629,0,5.209-1.07,7.069-2.93c1.861-1.86,2.931-4.44,2.931-7.08 C58.937,174.14,57.866,171.57,56.006,169.7z"></path>
                                    <path d="M96.066,454.99c-1.86-1.86-4.429-2.93-7.07-2.93c-2.63,0-5.21,1.07-7.069,2.93c-1.861,1.86-2.931,4.44-2.931,7.07 c0,2.64,1.071,5.21,2.931,7.07c1.859,1.87,4.439,2.93,7.069,2.93c2.641,0,5.21-1.06,7.07-2.93c1.861-1.86,2.93-4.43,2.93-7.07 C98.996,459.43,97.926,456.85,96.066,454.99z"></path>
                                    <path d="M423,40.063c-5.522,0-10,4.477-10,10v392c0,5.514-4.486,10-10,10H129c-5.522,0-10,4.477-10,10s4.478,10,10,10h274 c16.542,0,30-13.458,30-30v-392C433,44.54,428.522,40.063,423,40.063z"></path>
                                    <path d="M463.063,80c-5.522,0-10,4.477-10,10v392c0,5.514-4.486,10-10,10h-314c-5.522,0-10,4.477-10,10s4.478,10,10,10h314 c16.542,0,30-13.458,30-30V90C473.063,84.477,468.585,80,463.063,80z"></path>
                                    <path d="M200.937,74h-96c-5.522,0-10,4.477-10,10v96c0,5.523,4.478,10,10,10h96c5.522,0,10-4.477,10-10V84 C210.937,78.477,206.459,74,200.937,74z M190.937,170h-76V94h76V170z"></path>
                                    <path d="M168.761,235.402c-3.906-3.904-10.236-3.905-14.143,0l-26.583,26.583l-12.36-12.361c-3.905-3.905-10.235-3.904-14.143,0 c-3.905,3.905-3.905,10.237,0,14.142l19.432,19.432c1.876,1.875,4.419,2.929,7.071,2.929c2.653,0,5.195-1.054,7.072-2.929 l33.654-33.654C172.666,245.639,172.666,239.307,168.761,235.402z"></path>
                                    <path d="M332.604,249H215.937c-5.522,0-10,4.477-10,10s4.478,10,10,10h116.667c5.522,0,10-4.477,10-10S338.126,249,332.604,249z"></path>
                                    <path d="M326.937,74h-70c-5.522,0-10,4.477-10,10s4.478,10,10,10h70c5.522,0,10-4.477,10-10S332.459,74,326.937,74z"></path>
                                    <path d="M326.937,122h-70c-5.522,0-10,4.477-10,10s4.478,10,10,10h70c5.522,0,10-4.477,10-10S332.459,122,326.937,122z"></path>
                                    <path d="M326.937,170h-70c-5.522,0-10,4.477-10,10s4.478,10,10,10h70c5.522,0,10-4.477,10-10S332.459,170,326.937,170z"></path>
                                    <path d="M168.761,311.769c-3.906-3.904-10.236-3.905-14.143,0l-26.583,26.583l-12.36-12.361c-3.905-3.905-10.235-3.904-14.143,0 c-3.905,3.905-3.905,10.237,0,14.142l19.432,19.432c1.876,1.875,4.419,2.929,7.071,2.929c2.653,0,5.195-1.054,7.072-2.929 l33.654-33.654C172.666,322.006,172.666,315.674,168.761,311.769z"></path>
                                    <path d="M332.604,325H215.937c-5.522,0-10,4.477-10,10s4.478,10,10,10h116.667c5.522,0,10-4.477,10-10S338.126,325,332.604,325z"></path>
                                </svg>
                                <span class="pc"><?= JText::_('COM_LASERCITY_A_3_HEADER') ?></span><span
                                        class="mob"><?= JText::_('COM_LASERCITY_A_4_HEADER') ?></span>
                            </a>
                        </li>
                        <li class="main-navigation__item">
                            <a class="main-navigation__link main-navigation__link--faq"
							   <?php if ($current_page != 'faq'): ?>href="<?= $current_sef ?>faq/"<?php endif; ?>>
                                <svg width="30" height="30" fill="#999999" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 60 60" aria-hidden="true">
                                    <path d="M42.5,22h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,22,42.5,22z"></path>
                                    <path d="M17.5,16h10c0.552,0,1-0.447,1-1s-0.448-1-1-1h-10c-0.552,0-1,0.447-1,1S16.948,16,17.5,16z"></path>
                                    <path d="M42.5,30h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,30,42.5,30z"></path>
                                    <path d="M42.5,38h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,38,42.5,38z"></path>
                                    <path d="M42.5,46h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,46,42.5,46z"></path>
                                    <path d="M38.914,0H6.5v60h47V14.586L38.914,0z M39.5,3.414L50.086,14H39.5V3.414z M8.5,58V2h29v14h14v42H8.5z"></path>
                                </svg>
                                <span class="pc"><?= JText::_('COM_LASERCITY_A_5_HEADER') ?></span><span
                                        class="mob">FAQ</span>
                            </a>
                        </li>
                        <li class="main-navigation__item">
                            <a data-set-modal-value="addSalon" style="cursor: pointer"
                               class="main-navigation__link main-navigation__link--add-salon"
                            <span class="pc">+ Добавить салон</span>
                            <!--<span class="mob">+</span>-->
                            </a>
                        </li>
                    </ul>
                </div>
                <form class="main-navigation__search-from">
                    <input class="main-navigation__search" type="search"
                           aria-label="<?= JText::_('COM_LASERCITY_INPUT_1_HEADER') ?>"
                           placeholder="<?= JText::_('COM_LASERCITY_INPUT_1_HEADER') ?>">
                    <div class="main-navigation__search-autocomplete autocomplete">
                        <ul class="autocomplete__list">
                        </ul>
                        <p class="autocomplete__results">
                            <output></output>
                        </p>
                    </div>
                    <button class="main-navigation__search-button-closed button-cross" type="button"
                            title="<?= JText::_('COM_LASERCITY_BUTTON_8_HEADER') ?>"
                            aria-label="<?= JText::_('COM_LASERCITY_BUTTON_8_HEADER') ?>"><span
                                class="visually-hidden"><?= JText::_('COM_LASERCITY_BUTTON_8_HEADER') ?></span></button>
                </form>
            </div>
        </nav>
	<?php endif; ?>
</header>

<?php //<jdoc:include type="message"/> ?>
<jdoc:include type="component"/>

<footer class="page-footer">
    <div class="page-footer__wrapper">
        <ul class="page-footer__navigation-list">
            <li class="page-footer__navigation-item"><a href="#"><?= JText::_('COM_LASERCITY_A_1_FOOTER') ?></a></li>
            <li class="page-footer__navigation-item"><a href="#"><?= JText::_('COM_LASERCITY_A_2_FOOTER') ?></a></li>
            <li class="page-footer__navigation-item"><a href="#"><?= JText::_('COM_LASERCITY_A_3_FOOTER') ?></a></li>
            <li class="page-footer__navigation-item"><a href="#"><?= JText::_('COM_LASERCITY_A_4_FOOTER') ?></a></li>
            <li class="page-footer__navigation-item"><a
                        href="<?= $current_sef ?>privacy/"><?= JText::_('COM_LASERCITY_A_5_FOOTER') ?></a></li>
            <li class="page-footer__navigation-item"><a href="#"><?= JText::_('COM_LASERCITY_A_6_FOOTER') ?></a></li>
        </ul>
        <ul class="page-footer__aside-list">
            <li class="page-footer__aside-item"><a
                        href="<?= $current_sef ?>articles/"><?= JText::_('COM_LASERCITY_A_7_FOOTER') ?></a></li>
            <li class="page-footer__aside-item page-footer__aside-item--sale"><a
                        href="<?= $current_sef ?>stocks/"><?= JText::_('COM_LASERCITY_A_8_FOOTER') ?></a></li>
            <li class="page-footer__aside-item"><a
                        href="<?= $current_sef ?>clinics/"><?= JText::_('COM_LASERCITY_A_9_FOOTER') ?></a></li>
            <li class="page-footer__aside-item"><a
                        href="<?= $current_sef ?>faq/"><?= JText::_('COM_LASERCITY_A_10_FOOTER') ?></a></li>
        </ul>
        <div class="page-footer__support-wrapper">
            <!--<div class="page-footer__support">
                <div class="page-footer__support-header">
                    <b class="page-footer__support-title"><? /*= JText::_('COM_LASERCITY_B_1_FOOTER') */ ?></b>
                    <button class="page-footer__support-button button-corner" type="button"
                            title="<? /*= JText::_('COM_LASERCITY_BUTTON_1_FOOTER') */ ?>"
                            aria-label="<? /*= JText::_('COM_LASERCITY_BUTTON_1_FOOTER') */ ?>"><span
                                class="visually-hidden"><? /*= JText::_('COM_LASERCITY_BUTTON_1_FOOTER') */ ?></span>
                    </button>
                </div>
                <div class="page-footer__contacts">
                    <p class="page-footer__contacts-number"><? /*= JText::_('COM_LASERCITY_P_1_FOOTER') */ ?>: <a
                                href="tel:0992235388">(099) 223-53-88</a></p>
                    <p class="page-footer__workdays">Пн-Пт, 09:00 - 18:00</p>
                    <p class="page-footer__email">E-mail: <a href="mailto:laserciti@gmail.com">lasercity.ua@gmail.com</a>
                    </p>
                </div>
            </div>-->
            <!--<ul class="page-footer__social-list">
                <li class="page-footer__social-item">
                    <a class="page-footer__social-item-link page-footer__social-item-link--facebook" href="#">
                        <svg fill="#dc025e" width="46" height="46" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512" aria-hidden="true">
                            <path d="M222.892,388h51.491c4.418,0,8-3.582,8-8V264.093h26.751c4.101,0,7.538-3.101,7.958-7.18l4.51-43.772 c0.232-2.252-0.501-4.498-2.019-6.179c-1.517-1.682-3.675-2.641-5.939-2.641h-31.261v-17.73c0-3.662,1.159-3.936,2.928-3.936 h27.682c4.418,0,8-3.582,8-8v-42.5c0-4.406-3.562-7.982-7.968-8L274.848,124c-26.752,0-41.029,11.77-48.295,21.643 c-10.146,13.787-11.661,29.941-11.661,38.343v20.334h-16.489c-4.418,0-8,3.582-8,8v43.772c0,4.418,3.582,8,8,8h16.489V380 C214.892,384.418,218.473,388,222.892,388z M206.402,248.093v-27.772h16.489c4.418,0,8-3.582,8-8v-28.334 c0-5.185,0.833-18.376,8.547-28.86c7.386-10.037,19.3-15.126,35.376-15.126l30.177,0.122v26.533h-19.682 c-9.421,0-18.928,6.164-18.928,19.936v25.73c0,4.418,3.582,8,8,8h30.395l-2.862,27.772h-27.533c-4.418,0-8,3.582-8,8V372h-35.491 V256.093c0-4.418-3.582-8-8-8H206.402z"></path>
                            <path d="M437.022,74.984C388.67,26.63,324.381,0,256,0C187.624,0,123.338,26.63,74.984,74.984S0,187.624,0,256 c0,68.388,26.63,132.678,74.984,181.028C123.335,485.375,187.621,512,256,512c68.385,0,132.673-26.625,181.021-74.972 C485.372,388.679,512,324.389,512,256C512,187.622,485.372,123.336,437.022,74.984z M425.708,425.714 C380.381,471.039,320.111,496,256,496c-64.106,0-124.374-24.961-169.703-70.286C40.965,380.386,16,320.113,16,256 c0-64.102,24.965-124.37,70.297-169.702C131.63,40.965,191.898,16,256,16c64.108,0,124.378,24.965,169.708,70.297 C471.037,131.628,496,191.896,496,256C496,320.115,471.037,380.387,425.708,425.714z"></path>
                            <path d="M430.038,114.969c-2.784-3.432-7.821-3.957-11.253-1.172c-3.431,2.784-3.956,7.822-1.172,11.252 C447.526,161.919,464,208.425,464,256c0,55.567-21.635,107.803-60.919,147.086C363.797,442.367,311.563,464,256,464 c-51.26,0-100.505-18.807-138.663-52.956c-3.292-2.946-8.35-2.666-11.296,0.626c-2.946,3.292-2.666,8.35,0.626,11.296 C147.763,459.745,200.797,480,256,480c59.837,0,116.089-23.297,158.394-65.601C456.701,372.094,480,315.84,480,256 C480,204.766,462.256,154.681,430.038,114.969z"></path>
                            <path d="M48,256c0-114.691,93.309-208,208-208c51.26,0,100.504,18.808,138.662,52.959c3.293,2.948,8.351,2.666,11.296-0.625 c2.947-3.292,2.667-8.35-0.625-11.296C364.237,52.256,311.203,32,256,32c-59.829,0-116.079,23.301-158.389,65.611 C55.301,139.92,32,196.171,32,256c0,51.24,17.744,101.328,49.963,141.038c1.581,1.949,3.889,2.96,6.217,2.96 c1.771,0,3.553-0.585,5.036-1.788c3.431-2.784,3.956-7.822,1.172-11.253C64.474,350.088,48,303.58,48,256z"></path>
                        </svg>
                        <span class="visually-hidden">Facebook</span>
                    </a>
                </li>
                <li class="page-footer__social-item">
                    <a class="page-footer__social-item-link page-footer__social-item-link--youtube" href="#">
                        <svg fill="#dc025e" width="46" height="46" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512" aria-hidden="true">
                            <path d="M437.022,74.984C388.67,26.63,324.381,0,256,0C187.624,0,123.338,26.63,74.984,74.984S0,187.624,0,256 c0,68.388,26.63,132.678,74.984,181.028C123.335,485.375,187.621,512,256,512c68.385,0,132.673-26.625,181.021-74.972 C485.372,388.679,512,324.389,512,256C512,187.623,485.372,123.336,437.022,74.984z M425.708,425.714 C380.381,471.039,320.111,496,256,496c-64.106,0-124.374-24.961-169.703-70.286C40.965,380.386,16,320.113,16,256 c0-64.102,24.965-124.37,70.297-169.703C131.63,40.965,191.898,16,256,16c64.108,0,124.378,24.965,169.708,70.297 C471.037,131.628,496,191.896,496,256C496,320.115,471.037,380.387,425.708,425.714z"></path>
                            <path d="M430.038,114.969c-2.784-3.432-7.821-3.957-11.253-1.172c-3.431,2.784-3.956,7.822-1.172,11.252 C447.526,161.919,464,208.426,464,256c0,55.567-21.635,107.803-60.919,147.085C363.797,442.367,311.563,464,256,464 c-51.26,0-100.505-18.807-138.663-52.956c-3.292-2.946-8.35-2.666-11.296,0.626s-2.666,8.35,0.626,11.296 C147.763,459.745,200.797,480,256,480c59.837,0,116.089-23.297,158.394-65.601C456.701,372.095,480,315.84,480,256 C480,204.767,462.256,154.681,430.038,114.969z"></path>
                            <path d="M48,256c0-114.691,93.309-208,208-208c51.26,0,100.504,18.808,138.662,52.959c3.293,2.948,8.351,2.666,11.296-0.625 c2.947-3.292,2.667-8.35-0.625-11.296C364.237,52.256,311.203,32,256,32c-59.829,0-116.08,23.301-158.389,65.611 C55.301,139.921,32,196.171,32,256c0,51.239,17.744,101.328,49.963,141.038c1.581,1.949,3.889,2.96,6.217,2.96 c1.771,0,3.553-0.585,5.036-1.788c3.431-2.784,3.956-7.822,1.172-11.253C64.474,350.088,48,303.58,48,256z"></path>
                            <path
                                    d="M393.81,199.21c-0.297-2.237-3.165-22.123-12.481-32.244c-11.127-12.384-23.789-13.666-29.877-14.283 c-0.531-0.054-1.019-0.103-1.458-0.156c-0.12-0.015-0.239-0.027-0.359-0.036c-36.754-2.849-92.235-2.882-92.792-2.882h-0.124 c-0.556,0-56.038,0.033-92.784,2.882c-0.12,0.009-0.24,0.021-0.359,0.036c-0.438,0.054-0.926,0.103-1.458,0.156 c-6.086,0.616-18.742,1.897-29.876,14.282c-9.308,10.117-12.184,30.004-12.481,32.242c-0.006,0.044-0.011,0.089-0.017,0.133 c-0.11,0.947-2.689,23.462-2.689,46.399v21.314c0,22.953,2.579,45.46,2.689,46.407c0.005,0.043,0.011,0.087,0.016,0.131 c0.297,2.237,3.166,22.118,12.486,32.224c10.304,11.453,23.351,13.129,30.365,14.031c1.235,0.159,2.302,0.296,3.029,0.441 c0.248,0.049,0.498,0.087,0.75,0.113c21.2,2.171,87.505,2.839,90.409,2.867c0.557-0.001,56.085-0.132,92.828-2.947 c0.136-0.01,0.271-0.024,0.405-0.042c0.452-0.058,0.957-0.109,1.507-0.167c6.074-0.635,18.705-1.955,29.789-14.292 c9.309-10.104,12.184-29.979,12.481-32.216c0.006-0.044,0.011-0.089,0.017-0.134c0.11-0.947,2.688-23.461,2.689-46.406v-21.315 c0-22.945-2.579-45.459-2.689-46.407C393.821,199.297,393.815,199.254,393.81,199.21z M380.514,267.063 c0,21.399-2.42,43.136-2.575,44.499c-0.602,4.445-3.392,18.033-8.397,23.436c-0.03,0.032-0.06,0.065-0.089,0.098 c-6.977,7.786-14.56,8.578-19.578,9.103c-0.6,0.063-1.155,0.122-1.661,0.184c-36.146,2.754-90.895,2.884-91.352,2.886 c-0.678-0.007-67.638-0.68-88.505-2.75c-1.154-0.212-2.398-0.372-3.707-0.541c-5.992-0.77-14.199-1.825-20.538-8.893 c-0.03-0.033-0.06-0.066-0.09-0.099c-4.448-4.797-7.503-16.895-8.394-23.436c-0.158-1.395-2.575-23.106-2.575-44.496V245.74 c0-21.4,2.422-43.145,2.575-44.493c0.602-4.449,3.394-18.048,8.401-23.464c0.027-0.03,0.055-0.06,0.082-0.09 c7.008-7.814,14.596-8.582,19.617-9.091c0.58-0.059,1.118-0.114,1.61-0.172c36.127-2.788,90.83-2.821,91.379-2.821h0.124 c0.549,0,55.252,0.033,91.387,2.821c0.491,0.058,1.03,0.113,1.61,0.172c5.023,0.508,12.614,1.277,19.614,9.088 c0.029,0.032,0.058,0.063,0.086,0.095c4.45,4.808,7.506,16.91,8.4,23.466c0.158,1.393,2.575,23.113,2.575,44.496L380.514,267.063z"></path>
                            <path d="M310.355,249.579l-82.356-49.415c-2.472-1.482-5.549-1.521-8.058-0.102c-2.508,1.42-4.059,4.079-4.059,6.961v98.829 c0,2.882,1.55,5.542,4.059,6.961c1.224,0.693,2.583,1.039,3.941,1.039c1.426,0,2.851-0.381,4.116-1.14l82.356-49.415 c2.409-1.446,3.884-4.05,3.884-6.86S312.765,251.024,310.355,249.579z M231.883,291.724v-70.57l58.808,35.285L231.883,291.724z"></path>
                        </svg>
                        <span class="visually-hidden">YouTube</span>
                    </a>
                </li>
                <li class="page-footer__social-item">
                    <a class="page-footer__social-item-link page-footer__social-item-link--twitter" href="#">
                        <svg fill="#dc025e" width="46" height="46" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512" aria-hidden="true">
                            <path d="M437.022,74.984C388.67,26.63,324.381,0,256,0C187.624,0,123.338,26.63,74.984,74.984S0,187.624,0,256 c0,68.388,26.63,132.678,74.984,181.028C123.335,485.375,187.621,512,256,512c68.385,0,132.673-26.625,181.021-74.972 C485.372,388.679,512,324.389,512,256C512,187.623,485.372,123.336,437.022,74.984z M425.708,425.714 C380.381,471.039,320.111,496,256,496c-64.106,0-124.374-24.961-169.703-70.286C40.965,380.386,16,320.113,16,256 c0-64.102,24.965-124.37,70.297-169.703C131.63,40.965,191.898,16,256,16c64.108,0,124.378,24.965,169.708,70.297 C471.037,131.628,496,191.896,496,256C496,320.115,471.037,380.387,425.708,425.714z"></path>
                            <path d="M430.038,114.969c-2.783-3.432-7.821-3.956-11.253-1.172c-3.431,2.784-3.956,7.822-1.172,11.252 C447.526,161.919,464,208.426,464,256c0,55.567-21.635,107.803-60.919,147.085C363.797,442.367,311.563,464,256,464 c-51.26,0-100.505-18.807-138.663-52.956c-3.292-2.946-8.35-2.666-11.296,0.626s-2.666,8.35,0.626,11.296 C147.763,459.745,200.797,480,256,480c59.837,0,116.089-23.297,158.394-65.601C456.701,372.095,480,315.84,480,256 C480,204.767,462.256,154.681,430.038,114.969z"></path>
                            <path d="M48,256c0-114.691,93.309-208,208-208c51.26,0,100.504,18.808,138.662,52.959c3.293,2.948,8.35,2.666,11.296-0.625 c2.947-3.292,2.667-8.35-0.625-11.296C364.237,52.256,311.203,32,256,32c-59.829,0-116.08,23.301-158.389,65.611 C55.301,139.921,32,196.171,32,256c0,51.239,17.744,101.328,49.963,141.038c1.581,1.949,3.889,2.96,6.217,2.96 c1.771,0,3.553-0.585,5.036-1.788c3.431-2.784,3.956-7.822,1.172-11.253C64.474,350.088,48,303.58,48,256z"></path>
                            <path
                                    d="M398.655,194.764c1.975-2.959,1.757-6.867-0.533-9.59c-2.29-2.722-6.102-3.604-9.357-2.167 c-0.204,0.09-0.408,0.18-0.612,0.268c1.881-3.375,3.437-6.949,4.63-10.676c1.014-3.166-0.035-6.628-2.635-8.698 c-2.6-2.071-6.209-2.317-9.067-0.622c-8.072,4.792-16.708,8.314-25.726,10.498c-10.798-9.778-25.002-15.307-39.646-15.307 c-32.47,0-58.887,26.402-58.887,58.855c0,0.928,0.021,1.854,0.063,2.776c-34.859-4.249-67.035-21.913-89.417-49.384 c-1.658-2.035-4.206-3.128-6.826-2.922c-2.617,0.205-4.967,1.68-6.288,3.948c-5.214,8.949-7.97,19.185-7.97,29.602 c0,9.952,2.486,19.542,7.052,28.008c-1.225,0.081-2.435,0.444-3.528,1.088c-2.443,1.438-3.942,4.06-3.942,6.895v0.636 c0,17.624,7.908,33.796,20.616,44.719c-0.275,0.237-0.536,0.495-0.78,0.772c-1.859,2.112-2.473,5.045-1.615,7.725 c5.467,17.082,18.25,30.333,34.264,36.714c-13.001,6.537-27.355,9.933-42.315,9.933c-3.772,0-7.544-0.216-11.211-0.643 c-3.698-0.431-7.206,1.748-8.458,5.255c-1.253,3.507,0.08,7.414,3.214,9.425C164.291,367.657,192.755,376,221.996,376 c57.454,0,93.424-27.125,113.482-49.88c24.968-28.326,39.288-65.827,39.288-102.89c0-0.914-0.007-1.804-0.022-2.676 C384.046,213.282,392.077,204.623,398.655,194.764z M361.931,210.17c-2.198,1.585-3.444,4.176-3.311,6.883 c0.097,1.97,0.145,3.99,0.145,6.177c0,33.221-12.863,66.866-35.29,92.31C305.597,335.822,273.479,360,221.996,360 c-15.75,0-31.25-2.705-45.896-7.938c17.51-3.161,33.891-10.506,48.153-21.695c2.662-2.088,3.723-5.626,2.648-8.835 c-1.075-3.208-4.052-5.394-7.436-5.458c-14.083-0.265-26.831-7.364-34.527-18.535c4.015-0.244,8.006-0.896,11.91-1.951 c3.583-0.967,6.029-4.272,5.91-7.981c-0.119-3.709-2.774-6.849-6.411-7.584c-15.937-3.219-28.377-15.183-32.716-30.254 c4.279,1.13,8.688,1.784,13.119,1.932c3.577,0.122,6.79-2.146,7.883-5.548c1.094-3.402-0.203-7.118-3.175-9.102 c-11.942-7.97-19.071-21.318-19.071-35.707c0-3.646,0.462-7.259,1.363-10.751c26.808,27.682,63.308,44.387,101.994,46.315 c2.526,0.125,4.93-0.936,6.54-2.863c1.609-1.928,2.22-4.5,1.649-6.946c-0.735-3.149-1.108-6.438-1.108-9.775 c0-23.63,19.239-42.855,42.887-42.855c11.804,0,23.217,4.931,31.314,13.527c1.884,2,4.664,2.894,7.358,2.367 c3.031-0.593,6.028-1.312,8.986-2.156c-1.483,1.179-3.052,2.266-4.696,3.25c-3.236,1.938-4.679,5.872-3.463,9.442 c1.216,3.571,4.757,5.809,8.506,5.367c1.303-0.153,2.602-0.329,3.897-0.529C365.78,207.282,363.885,208.76,361.931,210.17z"></path>
                        </svg>
                        <span class="visually-hidden">Twitter</span>
                    </a>
                </li>
                <li class="page-footer__social-item">
                    <a class="page-footer__social-item-link page-footer__social-item-link--instagramm" href="#">
                        <svg fill="#dc025e" width="46" height="46" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 409.602 409.602" aria-hidden="true">
                            <path d="M349.617,59.988C310.938,21.305,259.504,0,204.801,0S98.672,21.305,59.988,59.988C21.305,98.672,0,150.098,0,204.801 c0,54.711,21.305,106.14,59.988,144.82c38.68,38.68,90.11,59.981,144.813,59.981c54.707,0,106.137-21.301,144.816-59.981 c38.68-38.68,59.985-90.109,59.985-144.82C409.602,150.098,388.297,98.668,349.617,59.988L349.617,59.988z M340.566,340.57 c-36.261,36.262-84.476,56.231-135.765,56.231c-51.285,0-99.5-19.969-135.762-56.231c-36.266-36.261-56.238-84.48-56.238-135.769 c0-51.281,19.972-99.496,56.238-135.762s84.481-56.238,135.762-56.238c51.285,0,99.5,19.972,135.765,56.238 c36.262,36.262,56.235,84.477,56.235,135.762C396.801,256.094,376.828,304.309,340.566,340.57L340.566,340.57z M340.566,340.57"></path>
                            <path d="M344.031,91.977c-2.226-2.747-6.258-3.168-9.004-0.938c-2.746,2.227-3.164,6.258-0.937,9 c23.93,29.496,37.109,66.699,37.109,104.762c0,44.453-17.308,86.242-48.734,117.668c-31.426,31.426-73.215,48.73-117.664,48.73 c-41.008,0-80.406-15.043-110.93-42.363c-2.637-2.359-6.68-2.133-9.039,0.5c-2.355,2.633-2.133,6.68,0.5,9.035 C118.211,367.797,160.637,384,204.801,384c47.867,0,92.871-18.637,126.715-52.48C365.359,297.676,384,252.672,384,204.801 C384,163.812,369.805,123.746,344.031,91.977L344.031,91.977z M344.031,91.977"></path>
                            <path d="M38.398,204.801c0-91.754,74.649-166.403,166.403-166.403c41.008,0,80.402,15.047,110.929,42.368 c2.633,2.359,6.68,2.132,9.036-0.5c2.359-2.633,2.132-6.68-0.5-9.036c-32.875-29.425-75.305-45.628-119.465-45.628 c-47.863,0-92.863,18.64-126.711,52.488c-33.848,33.847-52.488,78.847-52.488,126.711c0,40.992,14.195,81.062,39.968,112.828 c1.266,1.562,3.11,2.371,4.973,2.371c1.418,0,2.844-0.469,4.031-1.434c2.742-2.226,3.164-6.257,0.938-9 C51.578,280.07,38.398,242.863,38.398,204.801L38.398,204.801z M38.398,204.801"></path>
                            <path d="M258.59,102.125h-107.18c-27.176,0-49.285,22.11-49.285,49.286v107.179c0,27.177,22.109,49.286,49.285,49.286h107.18 c27.176,0,49.284-22.109,49.284-49.286V151.411C307.874,124.235,285.766,102.125,258.59,102.125z M294.898,258.589 c0,20.02-16.288,36.309-36.308,36.309h-107.18c-20.019,0-36.305-16.289-36.305-36.309V151.411 c0-20.019,16.287-36.305,36.305-36.305h107.18c20.02,0,36.308,16.287,36.308,36.305V258.589z"></path>
                            <path d="M262.503,139.728c-4.358,0-7.904,3.545-7.904,7.901c0,4.356,3.546,7.9,7.904,7.9c4.356,0,7.9-3.544,7.9-7.9 C270.403,143.273,266.859,139.728,262.503,139.728z"></path>
                            <path d="M204.998,154.57c-27.806,0-50.428,22.622-50.428,50.428c0,27.808,22.622,50.432,50.428,50.432 c27.808,0,50.432-22.624,50.432-50.432C255.43,177.192,232.806,154.57,204.998,154.57z M204.998,242.454 c-20.652,0-37.453-16.803-37.453-37.456c0-20.648,16.801-37.446,37.453-37.446c20.65,0,37.449,16.798,37.449,37.446 C242.448,225.651,225.648,242.454,204.998,242.454z"></path>
                        </svg>
                        <span class="visually-hidden">Instagram</span>
                    </a>
                </li>
                <li class="page-footer__social-item">
                    <a class="page-footer__social-item-link page-footer__social-item-link--telegram" href="#">
                        <svg fill="#dc025e" width="46" height="46" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 46 46">
                            <path d="M39.3,6.7C34.9,2.4,29.1,0,23,0S11.1,2.4,6.7,6.7S0,16.9,0,23s2.4,11.9,6.7,16.3C11.1,43.6,16.9,46,23,46 s11.9-2.4,16.3-6.7C43.6,34.9,46,29.1,46,23S43.6,11.1,39.3,6.7z M38.2,38.2c-4.1,4.1-9.5,6.3-15.2,6.3c-5.8,0-11.2-2.2-15.2-6.3 c-4.1-4-6.4-9.4-6.4-15.2S3.6,11.8,7.7,7.8c4.1-4.1,9.5-6.3,15.2-6.3c5.8,0,11.2,2.2,15.2,6.3c4.1,4.1,6.3,9.5,6.3,15.2 C44.6,28.8,42.3,34.2,38.2,38.2z"></path>
                            <path d="M38.6,10.3c-0.3-0.3-0.7-0.4-1-0.1c-0.3,0.3-0.4,0.7-0.1,1c2.7,3.3,4.2,7.5,4.2,11.8c0,5-1.9,9.7-5.5,13.2 c-3.5,3.5-8.2,5.5-13.2,5.5c-4.6,0-9-1.7-12.5-4.8c-0.3-0.3-0.8-0.2-1,0.1c-0.3,0.3-0.2,0.8,0.1,1c3.7,3.3,8.5,5.1,13.4,5.1 c5.4,0,10.4-2.1,14.2-5.9c3.8-3.8,5.9-8.9,5.9-14.2C43.1,18.4,41.5,13.9,38.6,10.3z"></path>
                            <path d="M4.3,23C4.3,12.7,12.7,4.3,23,4.3c4.6,0,9,1.7,12.5,4.8c0.3,0.3,0.8,0.2,1-0.1c0.3-0.3,0.2-0.8-0.1-1 C32.7,4.7,28,2.9,23,2.9C17.6,2.9,12.6,5,8.8,8.8S2.9,17.6,2.9,23c0,4.6,1.6,9.1,4.5,12.7C7.5,35.9,7.7,36,8,36 c0.2,0,0.3-0.1,0.5-0.2c0.3-0.3,0.4-0.7,0.1-1C5.8,31.5,4.3,27.3,4.3,23z"></path>
                            <path d="M32.8,9.5L19,16c-0.4,0.2-0.5,0.6-0.3,1c0.2,0.4,0.6,0.5,1,0.3l8.5-4L24,16.7l-9.5,7.7l-5.2-2.3l7.3-3.4 c0.4-0.2,0.5-0.6,0.3-1c-0.2-0.4-0.6-0.5-1-0.3l-7.9,3.7c-0.4,0.2-0.7,0.6-0.7,1.1c0,0.5,0.3,0.9,0.7,1l5.8,2.5l1.7,10.2 c0.1,0.6,1,0.8,1.3,0.3l4.8-7.4l9.1,4.3c0.7,0.3,1.6-0.2,1.7-1l1.3-21.9c0,0,0,0,0-0.1C33.8,9.6,33.3,9.3,32.8,9.5z M16.4,32.2 l-1.1-6.7l11.4-9.2L18,26.1c-0.1,0.1-0.1,0.2-0.2,0.3L16.4,32.2z M18,32l1.1-4.4l1.4,0.7L18,32z M21.2,27l-1.5-0.7l7.5-8.4l-1.1,1.7L21.2,27z M31.1,31.6l-8.6-4l9.7-14.8L31.1,31.6z"></path>
                        </svg>
                        <span class="visually-hidden">Telegram</span>
                    </a>
                </li>
            </ul>-->
        </div>
    </div>
    <p class="page-footer__copyright">© Laserciti 2019<span><?= JText::_('COM_LASERCITY_P_2_FOOTER') ?></span></p>
</footer>

<div class="modal">
	<?php ContentLoader::drawModals() ?>
	<?php /*switch ($to_footer_current_page) {
        case 'clinics':
            if ($clinics_popup) {
                include JPATH_BASE . '/templates/lasercity/crutch/clinics-popup.php';
            } else {
                include JPATH_BASE . '/templates/lasercity/crutch/clinic-popup.php';
                include JPATH_BASE . '/templates/lasercity/crutch/gallery.php';
            }
            include JPATH_BASE . '/templates/lasercity/crutch/popup-question.php';
            include JPATH_BASE . '/templates/lasercity/crutch/popup-recording.php';
            break;
        case 'faq':
            include JPATH_BASE . '/templates/lasercity/crutch/faq-item_popup.php';
          break;
    }
    include JPATH_BASE . '/templates/lasercity/crutch/singup-popup.php';*/ ?>
</div>

<jdoc:include type="modules" name="debug"/>

<?php ContentLoader::drawScripts() ?>

<?php switch ($to_footer_current_page)
{
	case 'home':
		//case 'clinics':
		include JPATH_BASE . '/templates/lasercity/crutch/map.php';
		break;
} ?>
</body>
</html>