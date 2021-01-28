<?php defined('_JEXEC') or die;

ContentLoader::addScript('records-salon');
// опеределяем язык страницы
$db = JFactory::getDbo();
$lang_tag = JFactory::getLanguage()->getTag();

//узнаем ссылку на язык
$current_sef = ContentLoader::getUriByLanguage();

$user_id = JFactory::getSession()->get('my_user_id');
$tip_user = JFactory::getSession()->get('tip_user');
$organization_id = JFactory::getSession()->get('organization_id');

$status = JFactory::getApplication()->input->getString('status');
$status = $status=='' ? 0 : $status;

if(empty($user_id) || empty($organization_id)){
    header("Location: ".$current_sef);
    exit();
}else{

    $query = "SELECT s.*,t.value,a.alias as affiliate_alias,

              (SELECT CONCAT_WS(',',u.name,d.phone) 
                    FROM `#__users` as u  
                    LEFT JOIN `#__users_description` as d ON u.id=d.user_id 
                    WHERE u.id=s.user_id) as users_data 
  
              FROM `#__lasercity_by_services` as s  
              LEFT JOIN `#__lasercity_affiliates` as a ON s.affiliate_id=a.id
              LEFT JOIN `#__lasercity_organizations` as o ON a.organization=o.id
              LEFT JOIN `#__lasercity_translations_" . $lang_tag . "` as t ON a.id=t.object_id 
              WHERE s.status='$status' 
              AND s.arhiv='0' 
              AND o.id='$organization_id'
              AND t.object_column='title' 
              AND t.object_name='affiliate' 
              ORDER BY date_added DESC";

    $db->setQuery($query);
    $result = $db->loadObjectList();

    $services = array();
    //узнаем прайсы филиала
    foreach ($result as $row) {
        $row->date_added = date('H:i', strtotime($row->date_added));

        $row->name = empty($row->name) ? explode(",",$row->users_data)[0] : $row->name;
        $row->phone = str_replace("+38 (0__) ___ __ __","",$row->phone);

        $kontakt = empty(explode(",",$row->users_data)[1]) ? $row->email : explode(",",$row->users_data)[1];
        $row->phone = empty($row->phone) ? $kontakt : $row->phone;

        $services[] = $row;

        //$affiliate_id[$row->affiliate_id] = ContentLoader::getRaiting($row->affiliate_id);

        //$raiting_affiliate_id[$row->affiliate_id] = ContentLoader::getRaiting($row->user_id,'user_id');

        //$apparat_id[] = implode(",",json_decode($row->apparat_id,true));
        //$service_id[] = implode(",",json_decode($row->service_id,true));
        //$prices_id[] = implode(",",json_decode($row->prices_id,true));

        //$service_count_values[] = implode(",",json_decode($row->service_id,true));
    }

    $query = "SELECT CONCAT_WS(',',MIN(s.date_agreed),MAX(s.date_agreed)) as date_nim_max 
                    FROM `#__lasercity_by_services` as s  
                    LEFT JOIN `#__lasercity_affiliates` as a ON s.affiliate_id=a.id
                    LEFT JOIN `#__lasercity_organizations` as o ON a.organization=o.id
                    WHERE s.status='1' 
                    AND s.arhiv='0'
                    AND o.id='$organization_id' ";

    $db->setQuery($query);
    $result = $db->loadObjectList();

    $date_nim_max = '';
    foreach ($result as $row) {
        $date_nim_max = $row->date_nim_max;
    }

    $query = "SELECT GROUP_CONCAT(CONCAT_WS(';',s.date_agreed,s.date_agreed_end) SEPARATOR ',') as date_visit_graph 
                    FROM `#__lasercity_by_services` as s  
                    LEFT JOIN `#__lasercity_affiliates` as a ON s.affiliate_id=a.id
                    LEFT JOIN `#__lasercity_organizations` as o ON a.organization=o.id
                    WHERE s.status='1' 
                    AND s.arhiv='0'
                    AND o.id='$organization_id' ";

    $db->setQuery($query);
    $result = $db->loadObjectList();

    $date_visit_graph = '';
    foreach ($result as $row) {
        $date_visit_graph = $row->date_visit_graph;
    }

    if(!empty($date_visit_graph)) {
        $date_visit_graph = explode(',', $date_visit_graph);
        $array_graph = array();
        for ($i = 0; $i < count($date_visit_graph); $i++) {
            $time = explode(";", $date_visit_graph[$i]);
            /*echo "<br>".$time[0];
            echo "<br>".$time[1];*/
            $array_graph[JText::_('COM_LASERCITY_ALL_DATE_DAY' . date('w', strtotime($time[0])))][date('j', strtotime($time[0]))][] = date('H:i', strtotime($time[0])) . '-' . date('H:i', strtotime($time[1]));
        }
    }

    /*echo "<pre>";
    print_r($array_graph);
    echo "</pre>";*/

//echo $date_visit_graph."<br>";
    //$service_count_values = array_count_values(explode(",",implode(",",$service_count_values)));
    //$apparat_id = array_unique(explode(",",implode(",",$apparat_id)));
    //$service_id = explode(",",implode(",",$service_id));
    //$prices_id = explode(",",implode(",",$prices_id));
    /*echo "<pre>";
    print_r(array_unique($apparat_id));
    echo "</pre>";*/

    //$services_dopol['apparat_name'] = ContentLoader::getAparatsByArray($apparat_id);
    /*$services_dopol['service_name'] = ContentLoader::getServisesByPriceAndSex($prices_id,$service_id);


    function array_icount_values($array)
    {
        $ret_array = array();
        if (!empty($array)) {
            foreach ($array as $value) {
                @$ret_array[$value['service_id']][$value['persones']]++;
            }
        }
        return $ret_array;
    }
    $service_count_values = array_icount_values($services_dopol['service_name']);

    $services_dopol['raiting_array'] = $affiliate_id;
    $services_dopol['raiting_array_by_user'] = $raiting_affiliate_id;*/

    /*echo "<pre>";
    print_r($services);
    echo "</pre>";*/

    $new_applications = ContentLoader::getApplicationByOrganization(0,$organization_id);
    $time_noreflex = ContentLoader::getTimeSalonNoreflex($organization_id);
    $name_organization = ContentLoader::getNameOrganizationById($organization_id);

    $set_message_status = JFactory::getSession()->get('set_message_status');
}
/***************STATUS*****************
 *
 * 0 - новые
 * 1 - согласованные
 * 2 - состоявшиеся
 * 3 - отмененные
 *
 *************************************/
/***************ARHIV******************
 *
 * 0 - не архивные
 * 1 - удаленный в архив(архивный)
 *
 *************************************/
?>
<main class="counter-by-held-salon">
    <section class="records-salon" aria-labelledby="applicationsOrganization">
        <h1 class="visually-hidden" id="applicationsOrganization">Заявки организации</h1>
        <?php if(!empty($set_message_status)): ?>
            <p class="records-salon__warning">
                <?php
                echo $set_message_status;
                JFactory::getSession()->clear('set_message_status');
                ?>
            </p>
        <?php endif; ?>
        <?php if(!empty($new_applications)): ?>
            <p class="records-salon__warning">
                <?=sprintf(JText::_('COM_LASERCITY_RECORDS_SALON_ATANTION'),$name_organization,$new_applications,ContentLoader::replaceSuffix($new_applications, 'application'),$time_noreflex,ContentLoader::replaceSuffix($time_noreflex, 'hour'))?>
            </p>
        <?php endif; ?>
        <section class="records-salon__filter" aria-labelledby="applicationsOrganizationFilter">
            <h2 class="visually-hidden" id="applicationsOrganizationFilter">Фильтр по заявкая организации</h2>
            <p class="records-salon__filter-header">Показать салоны
                <button class="records-salon__filter-button" title="Открыть список салонов" aria-label="Открыть список салонов" type="button" data-set-modal-value="recordsSalonPopup">
                    <span class="visually-hidden">Открыть список салонов</span>
                </button>
            </p>
            <ul class="records-salon__filter-results">
                <li class="records-salon__filter-result">
                    Люменис на м. Лукьяновская
                    <button class="records-salon__organization-item-button button-cross" title="Убрать эелемент из списка" aria-label="Убрать эелемент из списка"><span class="visually-hidden">Убрать эелемент из списка</span></button>
                </li>
                <li class="records-salon__filter-result">
                    Люменис на м. Лукьяновская
                    <button class="records-salon__organization-item-button button-cross" title="Убрать эелемент из списка" aria-label="Убрать эелемент из списка"><span class="visually-hidden">Убрать эелемент из списка</span></button>
                </li>
                <li class="records-salon__filter-result">
                    Люменис на м. Лукьяновская
                    <button class="records-salon__organization-item-button button-cross" title="Убрать эелемент из списка" aria-label="Убрать эелемент из списка"><span class="visually-hidden">Убрать эелемент из списка</span></button>
                </li>
            </ul>
            <button class="records-salon__filter-reset">Сбросить все фильтры</button>
        </section>
        <section class="records-salon__applications records-applications" aria-labelledby="allApplicationsOrganization">
            <h2 class="visually-hidden" id="allApplicationsOrganization">Заявки организации по фильтру</h2>
            <ul class="records-applications__list">
                <li class="records-applications__item <?=empty($status) ? 'records-applications__item--current' : ''?>">
                    <output class="new-applications"><?=$new_applications?></output>
                    <a href="<?=$current_sef."records-salon/?status=0"?>"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_NEW')?></a>
                </li>
                <li class="records-applications__item <?=$status==1 ? 'records-applications__item--current' : ''?>">
                    <output class="agreed-applications"><?=ContentLoader::getApplicationByOrganization(1,$organization_id)?></output>
                    <a href="<?=$current_sef."records-salon/?status=1"?>"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_APPROVE')?></a>
                </li>
                <li class="records-applications__item <?=$status==2 ? 'records-applications__item--current' : ''?>">
                    <a href="<?=$current_sef."records-salon/?status=2"?>"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_HELD')?></a>
                </li>
                <li class="records-applications__item <?=$status==3 ? 'records-applications__item--current' : ''?>">
                    <a href="<?=$current_sef."records-salon/?status=3"?>">Отмененные</a>
                </li>
            </ul>
            <ul class="records-applications__offers">
                <?php foreach ($services as $service): ?>
                    <input type="hidden" name="records_id[]" value="<?=$service->id?>">
                    <li class="records-applications__offer records-applications__offer--<?=(!empty($service->stock_id) ? 'byaction' : 'bysalon')?>">
                        <a href="<?=$current_sef."record-salon/?record=".$service->id?>">
                            <time datetime="<?=date('Y',strtotime($service->date_added))?>"><?=$service->date_added?></time>
                            <p class="records-applications__offer-wrapper">
                                <span class="records-applications__offer-name"><?=$service->name?></span>
                                <span class="records-applications__offer-number"><?=substr($service->phone,0,-3).'...'?></span>
                            </p>
                        </a>
                        <button class="records-applications__offer-contact" title="Написать клиенту" aria-label="Написать клиенту"><span class="visually-hidden">Написать клиенту</span><span>Написать клиенту</span></button>
                    </li>
                <?php endforeach; ?>
                <!--<li class="records-applications__offer records-applications__offer--bysalon">
                    <a href="#">
                        <time datetime="2018">8:35</time>
                        <p class="records-applications__offer-wrapper">
                            <span class="records-applications__offer-name">Сверлов Женя</span>
                            <span class="records-applications__offer-number">(063) 568-29-...</span>
                        </p>
                    </a>
                    <button class="records-applications__offer-contact" title="Написать клиенту" aria-label="Написать клиенту"><span class="visually-hidden">Написать клиенту</span><span>Написать клиенту</span></button>
                </li>-->
            </ul>
        </section>
        <section class="records-salon__calendar records-calendar" aria-labelledby="calendarApplicationsOrganization">
            <h2 class="visually-hidden" id="calendarApplicationsOrganization">Календарь дней приемов организации</h2>

            <div class="record-offer__slider slider">
            <div class="records-calendar__header">
                <p class="records-calendar__buttons">
                    <button class="records-calendar__button records-calendar__button--prev" title="Предыдущий слайд" aria-label="Предыдущий слайд" type="button"><span class="visually-hidden">Предыдущий слайд</span></button>
                    <button class="records-calendar__button records-calendar__button--next" title="Следующий слайд" aria-label="Следующий слайд" type="button"><span class="visually-hidden">Следующий слайд</span></button>
                </p>
                <b class="records-calendar__title">
                    <?php
                    if(!empty($date_nim_max)) {

                        $min_data = date('Y-m-d',strtotime(explode(",", $date_nim_max)[0]));
                        $max_data = date('Y-m-d',strtotime(explode(",", $date_nim_max)[1]));

                        $day_min = date('j', strtotime($min_data));
                        $day_max = date('j', strtotime($max_data));
                        $day_return = $day_min == $day_max ? $day_min : $day_min . '-' . $day_max;

                        $earlier = new DateTime($min_data);
                        $later = new DateTime($max_data);
                        $day_for_diff = $later->diff($earlier)->format("%a");

                        $month_min = date('n', strtotime(explode(",", $date_nim_max)[0]));
                        $month_max = date('n', strtotime(explode(",", $date_nim_max)[1]));
                        $month_return = $month_min == $month_max ? JText::_('COM_LASERCITY_ALL_DATE_MONTH' . $month_min) : JText::_('COM_LASERCITY_ALL_DATE_MONTH' . $month_min) . ' - ' . JText::_('COM_LASERCITY_ALL_DATE_MONTH' . $month_max);

                        $year_min = date('Y', strtotime(explode(",", $date_nim_max)[0]));
                        $year_max = date('Y', strtotime(explode(",", $date_nim_max)[1]));
                        $year_return = $year_min == $year_max ? $year_min : $year_min . '-' . $year_max;

                        echo $month_return . ' ' . $day_return . ', ' . $year_return;
                        //Май - Апрель 6-12, 2019
                    }
                    ?>
                </b>
            </div>
            <ul class="records-calendar__list slider__list">
                <?php if(!empty($date_visit_graph)): ?>
                    <?php for($i=0;$i<=$day_for_diff;$i++): ?>
                        <li class="records-calendar__item slider__item">
                            <?php
                                $day = date('j',strtotime("+$i day",strtotime($min_data)));
                                $day_week = date('w',strtotime("+$i day",strtotime($min_data)));
                                $day_week_name = JText::_('COM_LASERCITY_ALL_DATE_DAY'.$day_week);
                            ?>
                            <span class="records-calendar__item-weekday"><?=$day_week_name?></span>
                            <span class="records-calendar__item-day"><?=$day?></span>
                            <ul class="records-calendar__item-times">
                                <?php if(!empty($array_graph[$day_week_name][$day])): ?>
                                    <?php foreach($array_graph[$day_week_name][$day] as $item): ?>
                                        <li class="records-calendar__item-time">
                                            <output><?=explode("-",$item)[0]?></output>
                                            -
                                            <output><?=explode("-",$item)[1]?></output>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endfor; ?>
                <?php endif; ?>
                <!--<?php foreach($array_graph as $day_week => $mas_day): ?>
                    <li class="records-calendar__item">
                        <span class="records-calendar__item-weekday"><?=$day_week?></span>
                        <?php $i=0; foreach($mas_day as $day => $time): ?>
                            <span class="records-calendar__item-day"><?=$day?></span>
                            <ul class="records-calendar__item-times">
                               <?php foreach($time as $item): ?>
                                    <li class="records-calendar__item-time">
                                        <output><?=explode("-",$item)[0]?></output>
                                        -
                                        <output><?=explode("-",$item)[1]?></output>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php $i++; endforeach; ?>
                    </li>
                <?php endforeach; ?>-->

            </ul>
            </div>
        </section>
    </section>
</main>

<div class="records-salon-popup multi-popup">
    <div class="multi-popup__navigation-popup">
        <button class="multi-popup__navigation-popup-back button-corner" type="button" title="Закрыть модальное окно" aria-label="Закрыть модальное окно"><span class="visually-hidden">Назад к поиску</span></button>
        <h3 class="multi-popup__navigation-popup-title">Выберите салон</h3>
        <button class="multi-popup__navigation-popup-close button-cross" type="button" title="Закрыть модальное окно" aria-label="Закрыть модальное окно"><span class="visually-hidden">Закрыть фильтр</span></button>
    </div>
    <div class="multi-popup__popups-wrapper">
        <div class="multi-popup__popup popup-place">
            <ul class="popup-place__list">
                <li class="popup-place__item-location popup-place__item-location--area popup-place__item-location--active">
                    <div class="popup-place__location-wrapper popup-place__location-wrapper--area">
                        <ul class="popup-place__areas-list">
                            <li class="popup-place__areas-item">
                                <div class="popup-place__areas-header">
                                    <h5 class="popup-place__areas-title">
                                        <span class="records-salon-popup__client-count">1</span>
                                        Днепровский
                                    </h5>
                                    <button class="popup-place__areas-button button-corner" type="button" title="Открыть список микрорайонов" aria-label="Открыть список микрорайонов"><span class="visually-hidden">Открыть фильтр</span></button>
                                </div>
                                <ul class="popup-place__microareas-list">
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="2academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="3academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="4academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="5academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="popup-place__areas-item">
                                <div class="popup-place__areas-header">
                                    <h5 class="popup-place__areas-title">
                                        <span class="records-salon-popup__client-count">1</span>
                                        Днепровский
                                    </h5>
                                    <button class="popup-place__areas-button button-corner" type="button" title="Открыть список микрорайонов" aria-label="Открыть список микрорайонов"><span class="visually-hidden">Открыть фильтр</span></button>
                                </div>
                                <ul class="popup-place__microareas-list">
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="2academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="3academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="4academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                    <li class="popup-place__microareas-item">
                                        <label class="label">
                                            <input type="checkbox" data-filter="true" data-name="micro-disctrict" data-value="5academ">
                                            <span class="records-salon-popup__address">
                          Люменис в оболонском районе<span class="records-salon-popup__client-count">1</span><br>
                          <span class="records-salon-popup__street">ул. Мельникова 51б</span>
                        </span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>