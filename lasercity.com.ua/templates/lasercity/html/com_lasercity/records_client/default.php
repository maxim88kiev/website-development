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

if(empty($user_id) || !empty($organization_id)){
    header("Location: ".$current_sef);
    exit();
}else{

    $query = "SELECT s.*,t.value,a.alias as affiliate_alias

              FROM `#__lasercity_by_services` as s  
              LEFT JOIN `#__lasercity_affiliates` as a ON s.affiliate_id=a.id
              LEFT JOIN `#__lasercity_translations_" . $lang_tag . "` as t ON a.id=t.object_id 
              WHERE s.user_id='" . (int)$user_id . "' 
              AND s.status='$status' 
              AND s.arhiv='0' 
              AND t.object_column='title' 
              AND t.object_name='affiliate' 
              ORDER BY date_added DESC";

    $db->setQuery($query);
    $result = $db->loadObjectList();

    $services = array();

    //узнаем прайсы филиала
    foreach ($result as $row) {
        $row->date_added = date('H:i', strtotime($row->date_added));
        $services[] = $row;
    }


    $query = "SELECT s.*,t.value,a.alias as affiliate_alias

              FROM `#__lasercity_by_services` as s  
              LEFT JOIN `#__lasercity_affiliates` as a ON s.affiliate_id=a.id
              LEFT JOIN `#__lasercity_translations_" . $lang_tag . "` as t ON a.id=t.object_id 
              WHERE s.user_id='" . (int)$user_id . "'  
              AND s.arhiv='0' 
              AND t.object_column='title' 
              AND t.object_name='affiliate' 
              ORDER BY date_added DESC";

    $db->setQuery($query);
    $result = $db->loadObjectList();

    $service_count_values = array();
    $affiliate_id = array();
    $raiting_affiliate_id = array();
    $prices_id = array();
    $service_id = array();

    //узнаем прайсы филиала
    foreach ($result as $row) {

        $affiliate_id[$row->affiliate_id] = ContentLoader::getRaiting($row->affiliate_id);
        $raiting_affiliate_id[$row->affiliate_id] = ContentLoader::getRaiting($row->user_id,'user_id');

        $apparat_id[] = implode(",",json_decode($row->apparat_id,true));

        $service_id[] = implode(",",json_decode($row->service_id,true));
        $prices_id[] = implode(",",json_decode($row->prices_id,true));
        $service_count_values[] = implode(",",json_decode($row->service_id,true));
    }

    $services_dopol['apparat_name'] = array();
    if(!empty($apparat_id)) {
        $apparat_id = array_unique(explode(",", implode(",", $apparat_id)));

        $services_dopol['apparat_name'] = ContentLoader::getAparatsByArray($apparat_id);
    }

    $service_id = explode(",",implode(",",$service_id));
    $prices_id = explode(",",implode(",",$prices_id));
    $services_dopol['service_name'] = ContentLoader::getServisesByPriceAndSex($prices_id,$service_id);


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
    $services_dopol['raiting_array_by_user'] = $raiting_affiliate_id;


    $query = "SELECT CONCAT_WS(',',MIN(s.date_agreed),MAX(s.date_agreed)) as date_nim_max 
                    FROM `#__lasercity_by_services` as s  
                    LEFT JOIN `#__lasercity_affiliates` as a ON s.affiliate_id=a.id
                    LEFT JOIN `#__lasercity_organizations` as o ON a.organization=o.id
                    WHERE s.status='1' 
                    AND s.arhiv='0' 
                    AND s.user_id='" . (int)$user_id . "' ";

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
                    AND s.user_id='" . (int)$user_id . "' ";

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
    print_r($services_dopol['service_name']);
    //print_r(array_unique(explode(",",implode(",",$service_id))));
    print_r($service_count_values);
    echo "</pre>";*/

    $set_message_status = JFactory::getSession()->get('set_message_status');
}
?>
<main class="counter-by-held-client">
    <section class="records-client" aria-labelledby="applicationsClient">
        <h1 class="visually-hidden" id="applicationsClient"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_APPLICATION')?></h1>
        <?php if(!empty($set_message_status)): ?>
            <p class="records-salon__warning">
                <?php
                    echo $set_message_status;
                    JFactory::getSession()->clear('set_message_status');
                ?>
            </p>
        <?php endif; ?>
        <section class="records-client__applications records-applications" aria-labelledby="allApplicationsClient">
            <h2 class="visually-hidden" id="allApplicationsClient">Заявки клиента по фильтру</h2>
            <ul class="records-applications__list">
                <li class="records-applications__item <?=empty($status) ? 'records-applications__item--current' : ''?>">
                    <output class="new-applications"><?=ContentLoader::getApplications(0,$user_id)?></output>
                    <a href="<?=$current_sef."records-client/?status=0"?>"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_NEW')?></a>
                </li>
                <li class="records-applications__item <?=$status==1 ? 'records-applications__item--current' : ''?>">
                    <output class="agreed-applications"><?=ContentLoader::getApplications(1,$user_id)?></output>
                    <a href="<?=$current_sef."records-client/?status=1"?>"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_APPROVE')?></a>
                </li>
                <li class="records-applications__item <?=$status==2 ? 'records-applications__item--current' : ''?>">
                    <a href="<?=$current_sef."records-client/?status=2"?>"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_HELD')?></a>
                </li>
            </ul>
            <ul class="records-applications__offers records-applications__offers--held">
                <?php foreach ($services as $service): ?>
                <input type="hidden" name="records_id[]" value="<?=$service->id?>">
                <li class="records-applications__offer records-applications__offer--<?=(!empty($service->stock_id) ? 'byaction' : 'bysalon')?>">
                    <div class="records-applications__offer-link">
                        <a href="<?=$current_sef."record-client/?record=".$service->id?>">
                            <time datetime="<?=date('Y',strtotime($service->date_added))?>"><?=$service->date_added?></time>
                            <div class="records-applications__offer-wrapper">
                                <span class="records-applications__offer-name"><?=$service->value?></span>
                                <div class="records-applications__offer-rating rating-salon">
                                    <div class="rating-salon__point-wrapper">
                                        <output class="rating-salon__point"><?=$services_dopol['raiting_array'][$service->affiliate_id]['raiting']?></output>
                                        <ul class="rating-salon-stars">
                                            <li class="rating-salon__star rating-salon__star--silver">
                                                <svg fill="#adadad" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.207 482.207" aria-hidden="true">
                                                    <polygon points="482.207,186.973 322.508,153.269 241.104,11.803 159.699,153.269 0,186.973 109.388,308.108 92.094,470.404 241.104,403.803 390.113,470.404 372.818,308.108 "></polygon>
                                                </svg>
                                                <span class="visually-hidden">Хорошо</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <button class="records-applications__offer-contact" title="<?=JText::_('COM_LASERCITY_RECORDS_CLIENT_WRITE_SALON')?>" aria-label="<?=JText::_('COM_LASERCITY_RECORDS_CLIENT_WRITE_SALON')?>"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_WRITE_SALON')?></span><span><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_WRITE')?></span></button>
                    </div>
                    <?php  if(!empty((int)$services_dopol['raiting_array'][$service->affiliate_id]['raiting'])): ?>
                        <div class="records-applications__option">
                            <div class="records-applications__option-review"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_OCENENO')?>
                                <div class="records-applications__point rating-salon">
                                    <div class="rating-salon__point-wrapper">
                                        <output class="rating-salon__point"><?=$services_dopol['raiting_array'][$service->affiliate_id]['raiting']?></output>
                                        <ul class="rating-salon-stars">
                                            <li class="rating-salon__star rating-salon__star--silver">
                                                <svg fill="#adadad" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.207 482.207" aria-hidden="true">
                                                    <polygon points="482.207,186.973 322.508,153.269 241.104,11.803 159.699,153.269 0,186.973 109.388,308.108 92.094,470.404 241.104,403.803 390.113,470.404 372.818,308.108 "></polygon>
                                                </svg>
                                                <span class="visually-hidden">Хорошо</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button class="records-applications__salon-delete button button--gray delete-record" data-delete="<?=$service->id?>" title="<?=JText::_('COM_LASERCITY_RECORDS_CLIENT_DELETE')?>" aria-label="<?=JText::_('COM_LASERCITY_RECORDS_CLIENT_DELETE')?>"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_DELETE')?></span></button>
                        </div>
                    <?php else: ?>
                        <div class="records-applications__option">
                            <span class="records-applications__option-noreview"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_OZIDAE')?></span>
                        </div>
                    <?php endif; ?>
                </li>
                <?php endforeach;?>
            </ul>

        </section>
        <section class="records-client__calendar records-calendar" aria-labelledby="calendarApplicationsClient">
            <h2 class="records-client__title" id="calendarApplicationsClient"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_GRAFIK')?></h2>

            <div class="record-offer__slider slider">
            <div class="records-calendar__header">
                <p class="records-calendar__buttons">
                    <button class="records-calendar__button records-calendar__button--prev" title="<?=JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_PREV')?>" aria-label="<?=JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_PREV')?>" type="button"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_PREV')?></span></button>
                    <button class="records-calendar__button records-calendar__button--next" title="<?=JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_NEXT')?>" aria-label="<?=JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_NEXT')?>" type="button"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_SLIDER_BUTTON_NEXT')?></span></button>
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
        <section class="records-client__courses" aria-labelledby="courseApplicationsClient">
            <h2 class="records-client__courses-title" id="courseApplicationsClient"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_YOU_KURS')?></h2>
            <ul class="records-client__courses-list">
                <?php
                $mas_key = array();
                if(!empty($services_dopol['service_name'])):
                    foreach ($services_dopol['service_name'] as $service_name):
                        $sex = $service_name['persones']==0 ? '/templates/lasercity/img/woman.svg' : '/templates/lasercity/img/man.svg';

                        if(!array_key_exists($service_name['service_id'].'_'.$service_name['persones'],$mas_key)) :

                            $mas_key[$service_name['service_id'].'_'.$service_name['persones']] = 1;
                            ?>
                            <li class="records-client__courses-item" style="background: url('<?=$sex?>') no-repeat left center;background-size: 20px">
                                <span class="records-client__course-title"><?=$service_name['service']?></span>
                                <ul class="records-client__course-list">
                                    <?php for($i=1; $i<=8; $i++): ?>
                                        <?php
                                            if($service_count_values[$service_name['service_id']][$service_name['persones']]>$i){
                                                $class='done';
                                            }
                                            else if($service_count_values[$service_name['service_id']][$service_name['persones']]==$i){
                                                $class='process';
                                            }
                                            else{
                                                $class='none';
                                            }
                                        ?>
                                        <li class="records-client__course-item records-client__course-item--<?=$class?>">
                                            <output><?=$i?></output>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!--<li class="records-client__courses-item">
                    <span class="records-client__course-title">Верхняя губа</span>
                    <ul class="records-client__course-list">
                        <li class="records-client__course-item records-client__course-item--done">
                            <output>1</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--process">
                            <output>2</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>3</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>4</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>5</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>6</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>7</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>8</output>
                        </li>
                    </ul>
                </li>
                <li class="records-client__courses-item">
                    <span class="records-client__course-title">Верхняя губа</span>
                    <ul class="records-client__course-list">
                        <li class="records-client__course-item records-client__course-item--done">
                            <output>1</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--process">
                            <output>2</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>3</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>4</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>5</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>6</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>7</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>8</output>
                        </li>
                    </ul>
                </li>
                <li class="records-client__courses-item">
                    <span class="records-client__course-title">Верхняя губа</span>
                    <ul class="records-client__course-list">
                        <li class="records-client__course-item records-client__course-item--done">
                            <output>1</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--process">
                            <output>2</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>3</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>4</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>5</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>6</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>7</output>
                        </li>
                        <li class="records-client__course-item records-client__course-item--none">
                            <output>8</output>
                        </li>
                    </ul>
                </li>-->
            </ul>
        </section>
        <section class="records-client__apparatus" aria-labelledby="apparatusApplicationsClient">
            <h2 class="records-client__apparatus-title" id="apparatusApplicationsClient"><?=JText::_('COM_LASERCITY_RECORDS_CLIENT_YOU_APARAT')?></h2>
            <ul class="records-client__apparatus-list">
                <?php foreach ($services_dopol['apparat_name'] as $apparat_name): ?>
                    <li class="records-client__apparatus-item"><?=$apparat_name?></li>
                <?php endforeach;?>
            </ul>
        </section>
    </section>
</main>