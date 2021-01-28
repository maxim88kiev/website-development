<?php
$subquery = "select VALUE from b_iblock_element_property where IBLOCK_PROPERTY_ID = 46 and IBLOCK_ELEMENT_ID = $ElementID";
$sql = "
select ID, NAME
from b_iblock_element
where ID in ($subquery)
order by SORT, ID
limit 2";
$res = $DB->Query($sql);
?>
<?if ($res->SelectedRowsCount()):?>
    <div class="anchor-list">
        <?while($anchor = $res->Fetch()):?>
            <span class="anchor-list__item" data-faq="<?=$anchor['ID']?>"><?=$anchor['NAME']?></span>
        <?endwhile?>
    </div>
<?endif?>