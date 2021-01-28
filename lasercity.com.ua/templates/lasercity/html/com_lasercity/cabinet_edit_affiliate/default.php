<?php defined('_JEXEC') or die;

//ContentLoader::addScript('plugins');
JHtml::_('script', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCnqzpizVNCHvN4_d5m-5m2e1RULeN5JGU');
ContentLoader::addScript('drawMarker');
ContentLoader::addScript('salon');

ContentLoader::addPopup('clinic-popup');
ContentLoader::addPopup('popup-question');
ContentLoader::addPopup('popup-recording');
ContentLoader::addPopup('gallery');
ContentLoader::addPopup('map-popup');

$urNoHTTPS = str_replace('https://', '//', JUri::base());

$location = array();
$types_to_location = array('location', 'number_home', 'district', 'micro_district');

foreach ($types_to_location as $type) {
    if ($this->item->$type !== null) {
        $location[] = $this->item->$type;
    }
}

//$sef = LangHelper::getCurrentSef();
$city_list = CityHelper::getList();
$city_alias = CityHelper::getCurrent()->alias;
$city_title = null;

foreach ($city_list as $item) {
    if ($item->alias == $city_alias) {
        $city_title = $item->title;
        break;
    }
}

//узнаем ссылку на язык
$current_sef = $current_sef = ContentLoader::getUriByLanguage();

/*echo '<pre>';
print_r($this->item->prices);
echo '</pre>';*/

//echo var_dump($this->item);
?>

  <main>

    <section aria-labelledby="microData" itemscope itemtype="https://schema.org/Product">

      <section class="salon" aria-labelledby="SalonSection">
        <h1 class="salon__title" id="SalonSection"><?= $this->item->title ?></h1>
          <?php if (!empty($this->item->images)): ?>
            <div class="salon__slider slider">
              <ul class="slider__list" <?=$this->item->youtube_video?>>
                  <?php if(!empty($this->item->youtube_video)):?>
                      <li class="slider__item slider__item-wrapper wrapper-youtube-video">

                              <iframe width="560" height="315" class="iframe-youtube-video" src="<?=$this->item->youtube_video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     
                      </li>
                  <?php endif;?>
                  <?php foreach ($this->item->images as $image):
                      $image = '/' . deleteFormat($image);
                      ?>
                    <li class="slider__item">
                      <div class="slider__item-wrapper">
                        <picture>
                          <source data-srcset="<?= $image ?>_262x198.webp 1x, <?= $image ?>_524x396.webp 2x" type="image/webp">
                          <img data-original-name="<?= $image ?>" class="salons__img lazyload" data-src="<?= $image ?>_262x198.jpg" data-srcset="<?= $image ?>_524x396.jpg 2x" loading="lazy" title="<?= JText::_('COM_LASERCITY_IMG_TITLE_1_HOME') ?> <?= $this->item->title ?>" alt="<?= JText::_('COM_LASERCITY_IMG_TITLE_1_HOME') ?> <?= $this->item->title ?>">
                        </picture>
                      </div>
                    </li>
                  <?php endforeach; ?>
              </ul>
                <?php if (count($this->item->images) > 4): ?>
                  <button class="slider__button slider__button--prev" type="button" title="<?= JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_PREV') ?>" aria-label="<?= JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_PREV') ?>"><span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_PREV') ?></span>
                    <svg width="13" height="69" viewBox="0 0 20 103">
                      <path d="M1547.99,1052.01l16.24-51.51-16.24-51.515h3.78l16.24,51.515-16.24,51.51h-3.78Z" transform="translate(-1548 -949)"></path>
                    </svg>
                  </button>
                  <button class="slider__button slider__button--next" type="button" title="<?= JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_NEXT') ?>" aria-label="<?= JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_NEXT') ?>"><span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_NEXT') ?></span>
                    <svg width="13" height="69" viewBox="0 0 20 103">
                      <path d="M1547.99,1052.01l16.24-51.51-16.24-51.515h3.78l16.24,51.515-16.24,51.51h-3.78Z" transform="translate(-1548 -949)"></path>
                    </svg>
                  </button>
                <?php endif; ?>
            </div>
          <?php endif; ?>
        <div class="salon__wrapper">
          <div class="salon__description">
            <div class="salon__information-wrapper">
              <p class="salon__text"><?= $this->item->organization ? $this->item->type_organization : $this->item->type ?></p>

            </div>
            <div class="salon__affiliate">
              <div class="salon__address salon-address">
                  <?php if ($this->item->metro != null): ?>
                    <p class="salon-address__underground">
                      <svg fill="<?= $this->item->metro_line ?>" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="337.5 232.3 125 85.9" aria-hidden="true">
                        <polygon points="453.9,306.2 424.7,232.3 400,275.5 375.4,232.3 346.1,306.2 337.5,306.2 337.5,317.4 381.7,317.4 381.7,306.2 375.1,306.2 381.5,287.8 400,318.2 418.5,287.8 424.9,306.2 418.3,306.2 418.3,317.4 462.5,317.4 462.5,306.2 "></polygon>
                      </svg>
                        <?= $this->item->metro ?>
                    </p>
                  <?php endif; ?>
                <p class="salon-address__street"><?= implode(', ', $location) ?></p>
              </div>
                <a class="salon__affiliate-map button-onmap" data-set-modal-value="map-popup" href="javascript:void(0)" oncontextmenu="return false" rel="noreferrer noopener" title="<?= JText::_('COM_LASERCITY_ALL_TXT_MAP_GOOGLE') ?>">
                    <?= JText::_('COM_LASERCITY_ALL_TXT_MAP_GOOGLE') ?>
                </a>
            </div>
              <?php if (count($this->item->apparatus) || count($this->item->comforts)): ?>
                <div class="salon__apartments">
                    <?php if (count($this->item->apparatus)): ?>
                      <p class="salon__apartments-description"><?= JText::_('COM_LASERCITY_SPAN_4_HOME') ?>: <?= implode(', ', $this->item->apparatus) ?></p>
                    <?php endif; ?>
                    <?php if (count($this->item->comforts)): ?>
                      <ul class="salon__services-list services-list">
                          <?php foreach ($this->item->comforts as $comfort): ?>
                            <li class="services-list-item services-list-item--<?= $comfort->icon ?>" title="<?= $comfort->title ?>"><span><?= $comfort->title ?></span></li>
                          <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if (isset($this->item->description)): ?>
                <p class="salon__advice-description" itemprop="description"><?= strip_tags($this->item->description) ?></p>
              <?php endif; ?>
          </div>
          <div class="salon__contact">
            <p class="salon__contact-photo-wrapper">
              <picture>
                  <?php
                  $image = 'https://placehold.it/';
                  if ($this->item->organization == 0) {
                      if (mb_strlen($this->item->logo)) {
                          $image = '/' . $this->item->logo;
                      }
                  } else {
                      if (mb_strlen($this->item->main_image)) {
                          $image = '/' . $this->item->main_image;
                      }
                  }
                  $logo_micro = $image;
                  $image = deleteFormat($image);
                  ?>
                <source data-srcset="<?= $image ?>_262x198.webp 1x, <?= $image ?>_524x396.webp 2x" type="image/webp">
                <img itemprop="image" class="salon__contact-photo lazyload" src="<?= $image ?>_262x198.jpg" data-srcset="<?= $image ?>_524x396.jpg 2x" loading="lazy" title="<?= JText::_('COM_LASERCITY_IMG_TITLE_1_HOME') ?> <?= $this->item->title ?>" alt="<?= JText::_('COM_LASERCITY_IMG_TITLE_1_HOME') ?> <?= $this->item->title ?>">
              </picture>
            </p>
            <div class="salon__phones phonebook">
              <div class="phonebook__wrapper">
                <ul class="phonebook__list">
                    <?php foreach ($this->item->phones as $phone): ?>
                      <li class="phonebook__item">
                        <a><?= $phone ?></a>
                      </li>
                    <?php endforeach; ?>
                </ul>
                  <?php if (count($this->item->phones) > 1): ?>
                    <button class="phonebook__button button-corner" type="button" title="<?= JText::_('COM_LASERCITY_AFFILIALES_SEE_PHONES') ?>" aria-label="<?= JText::_('COM_LASERCITY_AFFILIALES_SEE_PHONES') ?>"><span class="visually-hidden"><?= JText::_('COM_LASERCITY_AFFILIALES_SEE_PHONES') ?></span></button>
                  <?php endif; ?>
                <div class="phonebook__popup">
                  <p class="phonebook__popup-text"><?= JText::_('COM_LASERCITY_STOCKS_SVIASI') ?></p>
                  <a class="phonebook__popup-link" href="#"><?= JText::_('COM_LASERCITY_STOCKS_RAITING') ?></a>
                  <ul class="phonebook__list">
                      <?php foreach ($this->item->phones as $phone): ?>
                        <li class="phonebook__popup-item">
                          <a href="tel:<?= $phone ?>"><?= $phone ?></a>
                          <button class="phonebook__popup-show-number" data-affiliate="<?= $this->item->id ?>"><?= JText::_('COM_LASERCITY_ALL_SHOW_ME') ?></button>
                        </li>
                      <?php endforeach; ?>
                  </ul>
                  <button class="phonebook__popup-close button-cross" type="button" title="<?= JText::_('COM_LASERCITY_ALL_CLOSE_PHONE') ?>" aria-label="<?= JText::_('COM_LASERCITY_ALL_CLOSE_PHONE') ?>"><span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_CLOSE_PHONE') ?></span></button>
                </div>
              </div>
            </div>
            <div class="salon__workdays workdays">
              <button class="workdays__button-open" type="button" title="<?= JText::_('COM_LASERCITY_ALL_OPEN_GRAPHIK') ?>" aria-label="<?= JText::_('COM_LASERCITY_ALL_OPEN_GRAPHIK') ?>"><span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_OPEN_GRAPHIK') ?></span></button>
              <p class="workdays__title"><?= JText::_('COM_LASERCITY_ALL_GRAPHIK_JOB') ?></p>
              <div class="workdays__list-wrapper">
                <ul class="workdays__list">
                    <?php foreach ($this->item->schedule as $schedule): ?>
                      <li class="workday__item">
                          <?= $schedule['days'] ?>: <span><?= $schedule['times'] ?></span>
                      </li>
                    <?php endforeach; ?>
                </ul>
                <button class="workday__button-close button-cross"><span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_CLOSE_GRAPHIK_JOB') ?></span></button>
              </div>
            </div>

              <?php if (count($this->item->social_networks)) : ?>
                <ul class="salon__social-list">
                    <?php foreach ($this->item->social_networks as $social_network): ?>
                      <li class="salon__social-item">
                        <a class="salon__social-link salon__social-link--<?= $social_network['modification'] ?>" target="_blank" rel="noreferrer noopener" href="<?= $social_network['link'] ?>">
                            <?= $social_network['svg'] ?>
                          <span class="visually-hidden"><?= $social_network['text'] ?></span>
                        </a>
                      </li>
                    <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            <a class="salon__contact-reach" href="<?= $this->item->site ?>" rel="nofollow" target="_blank"><?= JText::_('COM_LASERCITY_ALL_LINK_TO_SITE') ?></a>
            <button class="salon__contact-owner"><?= JText::_('COM_LASERCITY_ALL_YOU_VLADELEC_ORG') ?></button>
          </div>
          <div class="salon__information">
            <div class="salon__onmap salon-map">
              <div class="salon-map__title-wrapper">
                <h3 class="salon-map__title"><?= JText::_('COM_LASERCITY_ALL_SALON_ON_MAP') ?></h3>
                  <a class="salon-map__button" data-set-modal-value="map-popup" href="javascript:void(0)" oncontextmenu="return false" rel="noreferrer noopener" title="<?= JText::_('COM_LASERCITY_ALL_SALON_ON_MAP_GO') ?>">
                      <span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_SALON_ON_MAP_OPEN') ?></span>
                  </a>
              </div>
              <div class="salon-map__maps">
                <iframe class="salon-map__map-iframe" title="<?= JText::_('COM_LASERCITY_ALL_SALON_ADDRESS') ?>: <?= implode(', ', $location) ?>" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5083.339992641428!2d30.60359835124302!3d50.42861983394887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c57b4a855177%3A0xc055cd0c36be6d70!2z0J_QsNC8J9GP0YLQvdCwINC00L7RiNC60LAg0L3QsNGA0L7QtNC90ZbQuSDQsNGA0YLQuNGB0YLRhtGWINCj0LrRgNCw0ZfQvdC4INCc0LDRgNCz0LDRgNC40YLRliDQmtGA0LjQvdC40YbQuNC90ZbQuQ!5e0!3m2!1suk!2sua!4v1549883725531" allowfullscreen></iframe>
                <p class="salon-map__map-img-wrapper">
                  <img class="salon-map__map-img" src="https://placehold.it/260x232" title="<?= JText::_('COM_LASERCITY_ALL_SALON_ADDRESS') ?>: <?= implode(', ', $location) ?>" alt="<?= JText::_('COM_LASERCITY_ALL_SALON_ADDRESS') ?>: <?= implode(', ', $location) ?>">
                </p>
              </div>
            </div>

          </div>
        </div>
      </section>

    </section>
  </main>

  <script type="application/ld+json">
	{
		"@context": "schema.org",
		"@type": "Organization",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?= $city_title ?>",
			"postalCode": "<?= $this->item->city_index ?>",
			"streetAddress": "<?= implode(', ', $location) ?>"
		  },
		"email": "<?= $this->item->mail ?>",
		"name": "<?= $this->item->title ?>",
		"telephone" : ["<?= implode('", "', $this->item->phones) ?>"],
		"url": "<?= $urNoHTTPS . LangHelper::getCurrentSef() ?>/",
		"logo": "https://<?= $_SERVER['SERVER_NAME'] ?><?= $logo_micro ?>"
	}

  </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            <?php if(!empty($this->item->coordinate)): ?>
                plugins.ajaxJsonLoad({
                    url: '/?option=com_lasercity&task=getMainMapInfo&affiliate_id=<?=$this->item->id?>',
                    callback: function (obj) {
                        plugins.googleMap.init({
                            selector: '.map_box_popup',
                            center: {
                                lat: <?= trim(explode(",", $this->item->coordinate)[0]) ?>,
                                lng: <?= trim(explode(",", $this->item->coordinate)[1]) ?>
                            },
                            obj: obj,
                            callBackDraw: drawMarker
                        });
                    }
                });

                $('.salon-map__button,.button-onmap').on('click',function(){
                    $('.map-popup').show();
                    $('.map-popup__title').text($('.salon__title').text());
                    return false;
                });
            <?php endif;?>

        });
    </script>
<?php


/*echo '<pre>';
print_r($this->item);
echo '</pre>';*/
?>