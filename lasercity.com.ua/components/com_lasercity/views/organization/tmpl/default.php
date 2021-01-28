<?php defined('_JEXEC') or die;
ContentLoader::addScript('salons');

ContentLoader::addPopup('clinics-popup');
ContentLoader::addPopup('popup-question');
ContentLoader::addPopup('popup-recording');
ContentLoader::addPopup('map-popup');
?>
<div class="wrapper" style="max-width: 1170px; min-width: 320px; width: 100%; margin: 0 auto 20px">
    <ul class="salons_salon-list">
        <li class="salons__salon salons__salon--network salons__salon--gray">
            <div class="salons__main-wrapper">
                <p class="salons__overview-wrapper">
                    <picture>
                        <img src="/<?= $this->item['organization']->logo ?>" alt="">
                    </picture>
                </p>
                <div class="salons__information">
                    <div class="salons__information-wrapper">
                        <div class="salons__title-description">
                            <h3 class="salons__name"><a><?= $this->item['organization']->title ?></a></h3>
                            <p class="salons__about"><?= $this->item['organization']->type ?></p>
                            <p class="salons__aparat">Аппараты: <?php
								$apparatus = [];
								foreach ($this->item['apparatus'] as $o)
								{
									$apparatus[] = $o->title;
								}
								echo implode(', ', $apparatus);
								?></p>
                        </div>
                        <div class="salons__advantages">
                            <a class="salons__rating rating-salon">
                                <div class="rating-salon__point-wrapper">
                                <span class="rating-salon__point">
	                                    <?php
	                                    $raiting_array = ContentLoader::getRaiting($this->item['organization']->id, 'organization_id');
	                                    echo $raiting_array['raiting'];
	                                    ?>            </span>
                                    <ul class="rating-salon-stars">
	                                    <?php for ($r=0;$r<5;$r++): ?>
		                                    <?php if($r<floor($raiting_array['raiting'])): ?>
                                                <li class="rating-salon__star rating-salon__star--silver">
                                                    <svg fill="#adadad" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.207 482.207" aria-hidden="true">
                                                        <polygon points="482.207,186.973 322.508,153.269 241.104,11.803 159.699,153.269 0,186.973 109.388,308.108 92.094,470.404 241.104,403.803 390.113,470.404 372.818,308.108 "></polygon>
                                                    </svg>
                                                    <span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_RAITING_GOOD')?></span>
                                                </li>
		                                    <?php else:?>
                                                <li class="rating-salon__star rating-salon__star--transparent">
                                                    <svg fill="#cacaca" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487.222 487.222" aria-hidden="true">
                                                        <g>
                                                            <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6 l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2 c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5 c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911 c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9 l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"></path>
                                                        </g>
                                                    </svg>
                                                    <span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_RAITING_NO_GOOD')?></span>
                                                </li>
		                                    <?php endif;?>
	                                    <?php endfor;?>
                                    </ul>
                                </div>
                                <p class="rating-salon__reviews">
	                                <?=$raiting_array['count_raiting']?> <?=ContentLoader::replaceSuffix($raiting_array['count_raiting'],'review')?></p>
                            </a>
                            <ul class="salons__services-list services-list">
                                <?php foreach ($this->item['comforts'] as $comfort): ?>
                                <li class="services-list-item services-list-item--<?= $comfort['icon'] ?>" title="<?= $comfort['title'] ?>">
                                    <span><?= $comfort['title'] ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="salons__description">
                            <p class="salons__description-text"
                               style="max-height: 100%; overflow: auto"><?= strip_tags($this->item['organization']->description) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="salons__branches branches-list">
                <?php foreach ($this->item['affiliates'] as $affiliate): ?>
                <li class="branches-list__branch" data-main_image="/images/placehold.jpg">
                    <div class="branches-list__information">
                        <div class="branches-list__contacts">
                            <h4 class="branches-list__title"><a href="/clinics/<?= $affiliate->alias ?>"><?= $affiliate->title ?></a></h4>
                            <div class="branches-list__address salon-address">
                                <p class="salon-address__underground">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="<?= $affiliate->metro_line ?>"
                                         viewBox="337.5 232.3 125 85.9" aria-hidden="true">
                                        <polygon
                                                points="453.9,306.2 424.7,232.3 400,275.5 375.4,232.3 346.1,306.2 337.5,306.2 337.5,317.4 381.7,317.4 381.7,306.2 375.1,306.2 381.5,287.8 400,318.2 418.5,287.8 424.9,306.2 418.3,306.2 418.3,317.4 462.5,317.4 462.5,306.2 "></polygon>
                                    </svg><?= $affiliate->metro ?>
                                </p>
                                <p class="salon-address__street"><?= $affiliate->location ?></p>
                            </div>
                            <div class="branches-list__schedule">
                                <div class="branches-list__workdays workdays">
                                    <button class="workdays__button-open" type="button" title="Открыть график работы"
                                            aria-label="Открыть график работы"><span class="visually-hidden">Открыть график работы</span>
                                    </button>
                                    <p class="workdays__title">График работы</p>
                                    <div class="workdays__list-wrapper">
                                        <ul class="workdays__list">
                                            <?php foreach ($affiliate->schedule as $schedule): ?>
                                            <li class="workday__item">
                                                <?= $schedule['days'] ?> <span><?= $schedule['time'] ?></span>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <button class="workday__button-close button-cross" type="button"
                                                title="Закрыть список дней работы"
                                                aria-label="Закрыть список дней работы"><span class="visually-hidden">Закрыть список дней работы</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="branches-list__aside">
                            <a class="branches-list__rating rating-salon"
                               href="/clinics/<?= $affiliate->alias ?>#SalonRation">
                                <div class="rating-salon__point-wrapper">
                                    <output class="rating-salon__point">
	                                    <?php
	                                    $raiting_array = ContentLoader::getRaiting($affiliate->id);
	                                    echo $raiting_array['raiting'];
	                                    ?>
                                    </output>
                                    <ul class="rating-salon-stars">
	                                    <?php for ($r=0;$r<5;$r++): ?>
		                                    <?php if($r<floor($raiting_array['raiting'])): ?>
                                                <li class="rating-salon__star rating-salon__star--silver">
                                                    <svg fill="#adadad" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.207 482.207" aria-hidden="true">
                                                        <polygon points="482.207,186.973 322.508,153.269 241.104,11.803 159.699,153.269 0,186.973 109.388,308.108 92.094,470.404 241.104,403.803 390.113,470.404 372.818,308.108 "></polygon>
                                                    </svg>
                                                    <span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_RAITING_GOOD')?></span>
                                                </li>
		                                    <?php else:?>
                                                <li class="rating-salon__star rating-salon__star--transparent">
                                                    <svg fill="#cacaca" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487.222 487.222" aria-hidden="true">
                                                        <g>
                                                            <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6 l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2 c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5 c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911 c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9 l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"></path>
                                                        </g>
                                                    </svg>
                                                    <span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_RAITING_NO_GOOD')?></span>
                                                </li>
		                                    <?php endif;?>
	                                    <?php endfor;?>
                                    </ul>
                                </div>
                                <p class="rating-salon__reviews">
	                                <?=$raiting_array['count_raiting']?> <?=ContentLoader::replaceSuffix($raiting_array['count_raiting'],'review')?>
                                </p>
                            </a>
                            <a class="branches-list__map button-onmap" href="<?= $affiliate->coordinate ?>"
                               data-affiliate="118" href="javascript:void(0);" target="_blank"
                               title="на карте Google">
                                на карте Google </a>

                            <button class="branches-list__question" data-set-modal-value="question"
                                    data-affiliate="118">Задать вопрос
                            </button>
                        </div>
                    </div>
                    <button class="branches-list__button button" data-set-modal-value="recording" data-affiliate="118">
                        Записаться
                    </button>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
	<?php
	$page_pagination = JFactory::$application->input->getInt('page', 1);
	$page_pagination = $page_pagination < 1 ? 1 : $page_pagination;

	$language = JFactory::$language->getTag();
	$db       = JFactory::getDbo();
	$db->setQuery("SELECT r.id,r.name,r.avatar,r.foto,r.koment,r.date_added,r.date_visit,r.place,r.relationship,r.purity,r.quality,r.price,r.confirm,r.rank,r.likes,
                                    r.user_id,t.value,  
                                    
                                    (SELECT COUNT(*) FROM `#__lasercity_reviews` WHERE user_id=r.user_id AND r.user_id!=0) as count_review,
                                    (SELECT COUNT(*) FROM `#__lasercity_question` WHERE user_id=r.user_id AND r.user_id!=0) as count_question,
                                    (SELECT COUNT(*) FROM `#__lasercity_answer` WHERE user_id=r.user_id AND r.user_id!=0) as count_answer, 
                                    
                                    (SELECT CONCAT_WS(',',TO_DAYS(NOW())-TO_DAYS(u.registerDate), u.name, d.avatar, d.rank)
                                            FROM `#__users` u 
                                            LEFT JOIN `#__users_description` as d ON (u.id=d.user_id) 
                                            WHERE u.id=r.user_id AND r.user_id!=0) as mas_for_user 
                                    
                                    FROM `#__lasercity_reviews` as r 
                                    LEFT JOIN `#__lasercity_cities` as c ON (r.city_id=c.id) 
                                    LEFT JOIN `#__lasercity_translations_" . $language . "` as t ON (c.id = t.object_id) 
                                    WHERE r.published='1' 
                                    AND r.affiliate_id IN (SELECT id FROM #__lasercity_affiliates WHERE organization='{$this->item['organization']->id}') 
                                    AND t.object_name='citie' 
                                    AND t.object_column='title' 
                                    ORDER BY r.id DESC");
	$reviews = $db->loadObjectList();

	$count_reviews = count($reviews);
	$limit_reviews = 5;
	$pages = ceil($count_reviews / $limit_reviews);
	$reviews = array_slice($reviews, ($page_pagination - 1) * $limit_reviews, $limit_reviews);

	?>

    <section id="reviews" class="salon-reviews" aria-labelledby="SalonReviews">
        <div class="salon-reviews__title-wrapper">
            <h3 class="salon-reviews-title"
                id="SalonReviews"><?= JText::_('COM_LASERCITY_ALL_SALON_MESS_REVIEW') ?></h3>
            <p class="salon-reviews__place" itemprop="name"><?= $this->item['organization']->title ?></p>
        </div>
		<?php if (is_array($reviews)): ?>
            <ul class="salon-reviews__comments comments">
				<?php foreach ($reviews as $review):

					// $review->avatar = '/' . deleteFormat($review->avatar);
					$mas_reiting = array($review->place, $review->relationship, $review->purity, $review->quality, $review->price);
					$averageRating = array_sum($mas_reiting) / count($mas_reiting);

					// дней,имя,аватар,ранг
					$mas_for_user = explode(',', $review->mas_for_user);

					//имя автора
					$review->name = (!empty($mas_for_user[1]) ? $mas_for_user[1] : $review->name);
					//аватар
					//$review->avatar = (!empty($mas_for_user[2]) ? '/' . deleteFormat($mas_for_user[2]) : $review->avatar);
					//ранг
					$review->rank = ((isset($mas_for_user[3]) && $mas_for_user[3] != "") ? $mas_for_user[3] : $review->rank);
					?>
                    <li class="commemts__item" itemprop="review" itemscope
                        itemtype="https://schema.org/Review">
                        <meta itemprop="author" content="<?= $review->name ?>"/>
                        <meta itemprop="datePublished"
                              content="<?= date('d/m/Y', strtotime($review->date_added)) ?>"/>
                        <article class="commemts__comment">
                            <h4 class="visually-hidden"><?= JText::_('COM_LASERCITY_FORM_REVIEW_COMENT') ?>
                                - <?= $review->name ?></h4>
                            <div class="comments__autor">
                                <div class="comments__autor-wrapper">
                                    <div class="comments__autor-popup-wrapper comment__autor-image--open-popup">
                                        <p class="comments__autor-img-wrapper">
                                            <picture>
                                                <img width="90px" height="90px" class="comments__autor-image comments__autor-image--open-popup"
                                                     src="<?= $review->avatar ?>"
                                                     srcset="<?= $review->avatar ?>"
                                                     loading="lazy"
                                                     alt="<?= JText::_('COM_LASERCITY_ALL_SALON_FOTO_AVTOR') ?>"
                                                     title="<?= JText::_('COM_LASERCITY_ALL_SALON_FOTO_AVTOR') ?>">
                                            </picture>
                                        </p>
                                        <div class="comments__autor-popup">
                                            <div class="comments__autor-wrapper">
                                                <p class="comments__autor-img-wrapper">
                                                    <picture>
                                                        <source srcset="<?= $review->avatar ?>_90x90.webp 1x, <?= $review->avatar ?>_180x180.webp 2x"
                                                                type="image/webp">
                                                        <img class="comments__autor-image"
                                                             src="<?= $review->avatar ?>_90x90.jpg"
                                                             srcset="<?= $review->avatar ?>_180x180.jpg 2x"
                                                             loading="lazy"
                                                             alt="<?= JText::_('COM_LASERCITY_ALL_SALON_FOTO_AVTOR') ?>"
                                                             title="<?= JText::_('COM_LASERCITY_ALL_SALON_FOTO_AVTOR') ?>">
                                                    </picture>
                                                </p>
                                                <div class="comments__autor-fact">
                                                    <cite class="comments__autor-name"><?= $review->name ?></cite>
                                                    <p class="comments__autor-city"><?= JText::_('COM_LASERCITY_ALL_SALON_TOWN_REVIEW') ?> <?= $review->value ?></p>
                                                    <p class="comments__autor-rank">
														<?php
														switch ($review->rank)
														{
															case 0:
																echo JText::_('COM_LASERCITY_ALL_SALON_NOVICHECK');
																break;
															case 1:
																echo JText::_('COM_LASERCITY_ALL_SALON_BUVALUI');
																break;
															case 2:
																echo JText::_('COM_LASERCITY_ALL_SALON_EXPERT');
																break;
														}
														?>
                                                    </p>
                                                </div>
                                            </div>
											<?php
											//если пользователь не зарегистрирован танем данные из таблицы отзывов
											$review->count_user_day = (!empty($review->count_user_day) ? $review->count_user_day : 1);

											//если пользователь зарегистрирован тянем данные из таблицы пользователей
											$review->count_user_day = (!empty($mas_for_user[0]) ? $mas_for_user[0] : $review->count_user_day);
											?>
                                            <p class="comments__autor-experience"><?= JText::_('COM_LASERCITY_ALL_SALON_S_LASERCISY') . " " . $review->count_user_day . " " . ContentLoader::replaceSuffix($review->count_user_day, 'day') ?></p>
                                            <ul class="comments__autor-list">
                                                <li class="comments__autor-itme">
                                                    <span><?= $review->count_review ?></span> <?= ContentLoader::replaceSuffix($review->count_review, 'review', true) ?>
                                                </li>
                                                <li class="comments__autor-itme">
                                                    <span><?= $review->count_question ?></span> <?= ContentLoader::replaceSuffix($review->count_review, 'question', true) ?>
                                                </li>
                                                <li class="comments__autor-itme">
                                                    <span><?= $review->count_answer ?></span> <?= ContentLoader::replaceSuffix($review->count_review, 'answer', true) ?>
                                                </li>
                                            </ul>
                                            <button class="comments__autor-popup-button button-cross"
                                                    type="button"
                                                    title="<?= JText::_('COM_LASERCITY_ALL_FORM_CLOSE_MODAL') ?>"
                                                    aria-label="<?= JText::_('COM_LASERCITY_ALL_FORM_CLOSE_MODAL') ?>">
                                                <span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_FORM_CLOSE_MODAL') ?></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="comments__autor-fact">
                                        <cite class="comments__autor-name"><?= $review->name ?></cite>
                                        <p class="comments__autor-rank">
											<?php
											switch ($review->rank)
											{
												case 0:
													echo JText::_('COM_LASERCITY_ALL_SALON_NOVICHECK');
													break;
												case 1:
													echo JText::_('COM_LASERCITY_ALL_SALON_BUVALUI');
													break;
												case 2:
													echo JText::_('COM_LASERCITY_ALL_SALON_EXPERT');
													break;
											}
											?>
                                        </p>
                                        <time class="comments__autor-time"><?= date('d/m/Y', strtotime($review->date_added)) ?></time>
                                    </div>
                                </div>
                                <div class="comments__rate">
                                    <div class="comments__rating rating-salon">
                                        <div class="rating-salon__point-wrapper">
                                            <output class="rating-salon__point"><?= number_format((float) $averageRating, 1, ',', '') ?></output>
                                            <ul class="rating-salon-stars">
												<?php for ($r = 0; $r < 5; $r++): ?>
													<?php if ($r < floor($averageRating)): ?>
                                                        <li class="rating-salon__star rating-salon__star--silver">
                                                            <svg fill="#adadad" width="15" height="15"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 482.207 482.207"
                                                                 aria-hidden="true">
                                                                <polygon
                                                                        points="482.207,186.973 322.508,153.269 241.104,11.803 159.699,153.269 0,186.973 109.388,308.108 92.094,470.404 241.104,403.803 390.113,470.404 372.818,308.108 "></polygon>
                                                            </svg>
                                                            <span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_RAITING_GOOD') ?></span>
                                                        </li>
													<?php else: ?>
                                                        <li class="rating-salon__star rating-salon__star--transparent">
                                                            <svg fill="#cacaca" width="15" height="15"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 487.222 487.222"
                                                                 aria-hidden="true">
                                                                <g>
                                                                    <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6 l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2 c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5 c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911 c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9 l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"></path>
                                                                </g>
                                                            </svg>
                                                            <span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_RAITING_NO_GOOD') ?></span>
                                                        </li>
													<?php endif; ?>
												<?php endfor; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="comments__button-functions" type="button"
                                            title="<?= JText::_('COM_LASERCITY_ALL_SALON_OPEN_FUNC_MENU') ?>"
                                            aria-label="<?= JText::_('COM_LASERCITY_ALL_SALON_OPEN_FUNC_MENU') ?>">
                                        <span class="visually-hidden"><?= JText::_('COM_LASERCITY_ALL_SALON_OPEN_FUNC_MENU') ?></span>
                                    </button>
                                    <ul class="comments__buttons-list">
                                        <li class="comments__buttons-item">
                                            <button class="comment__button"><?= JText::_('COM_LASERCITY_ALL_SALON_CHECK_NEPRIEM') ?></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                <meta itemprop="worstRating" content="1"/>
                                <meta itemprop="ratingValue" content="<?= floor($averageRating) ?>"/>
                                <meta itemprop="bestRating" content="5"/>
                            </div>
                            <meta itemprop="description" content="<?= $review->koment ?>"/>

                            <div class="comments__blockquote">
                                <p class="comments__text"><?= $review->koment ?></p>
								<?php $fotos = json_decode($review->foto, true);
								if (is_array($fotos)): ?>

                                    <p class="comments__photos">
										<?php foreach ($fotos as $foto): $foto = '/' . deleteFormat($foto); ?>
                                            <picture>
                                                <source srcset="<?= $foto ?>_105x80.webp 1x, <?= $foto ?>_210x160.webp 2x"
                                                        media="(min-width: 1200px)" type="image/webp">
                                                <source srcset="<?= $foto ?>_82x63.webp 1x, <?= $foto ?>_164x126.webp 2x"
                                                        type="image/webp">
                                                <source srcset="<?= $foto ?>_105x80.webp 1x, <?= $foto ?>_210x160.webp 2x"
                                                        media="(min-width: 1200px)">
                                                <img class="comments__photo"
                                                     src="<?= $foto ?>_82x63.jpg"
                                                     srcset="<?= $foto ?>_164x126.jpg 2x" loading="lazy"
                                                     alt="" title="">
                                            </picture>
										<?php endforeach; ?>
                                    </p>

								<?php endif; ?>
                                <div class="comments__feedback">
                                    <p class="comments__feedback-visit"><?= JText::_('COM_LASERCITY_ALL_SALON_PERIOD_VISIT') ?> <?= (!preg_match('/[1-9]/', $review->date_visit) ? JText::_('COM_LASERCITY_ALL_SALON_NO_UKAZAN') : date('d/m/Y', strtotime($review->date_visit))) ?>
                                        <br>
										<?php
										switch ($review->confirm)
										{
											case 0:
												echo '<span class="comments__feedback-visit--false">' . JText::_('COM_LASERCITY_ALL_SALON_NO_CONFIRM') . '</span>';
												break;
											case 1:
												echo '<span class="comments__feedback-visit--true">' . JText::_('COM_LASERCITY_ALL_SALON_CONFIRM') . '</span>';
												break;
										}
										?>
                                    </p>
                                    <button class="comments__feedback-like"
                                            data-review="<?= $review->id ?>">
                                        <output><?= $review->likes ?></output>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>

		<?php
		$start_pagination = $page_pagination - 2 > 0 ? $page_pagination - 2 : 1;
		$end_pagination = $page_pagination + 2 <= $pages ? $page_pagination + 2 : $pages;

		if ($start_pagination <= $end_pagination):
		?>

        <nav class="salons__pagination pagination">
			<?php $blank_url_page = mb_substr(JUri::current(), 0, -1) . '?page='; ?>
			<?php if ($page_pagination > 1): ?>
                <a class="pagination__button pagination__button--prev button-corner" href='<?= $blank_url_page . ($page_pagination - 1) . '#reviews' ?>'><span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_PAGE_BUTTON_PREV')?></span></a>
			<?php endif; ?>
            <ul class="pagination__page-list">
				<?php for ($i = $start_pagination; $i <= $end_pagination; $i++): ?>
                    <li class="pagination__page-item <?= $i == $page_pagination ? 'pagination__page-item--current' : '' ?>"><a <?php if ($i != $page_pagination): ?>href='<?= $blank_url_page . $i . '#reviews' ?>'<?php endif; ?>><?= $i ?></a></li>
				<?php endfor; ?>
            </ul>
			<?php if ($page_pagination < $pages): ?><a class="pagination__button pagination__button--next button-corner" href='<?= $blank_url_page . ($page_pagination + 1) . '#reviews' ?>'><span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_PAGE_BUTTON_NEXT')?></span></a><?php endif; ?>
        </nav>
        <?php endif; ?>
    </section>
</div>