<?php
//標題
if (file_exists(DIR_APPLICATION . 'model/tool/seo_package.php')) {
  $_['heading_title']	= '<img src="view/seo_package/img/icon.png" style="vertical-align:top;padding-right:4px"/> <b style="color:#11b209">SEO Package</b> <b style="color:#555">Sitemap</b>';
} else {
  $_['heading_title'] = '<i class="fa fa-sitemap" style="color:#11b209"></i> <b>Advanced</b> <b style="color:#11b209">Sitemap Generator</b>';
}

//文本
$_['text_feed'] = '產品Feeds';
$_['text_add_feed'] = '新的Feed';
$_['text_success'] = '成功：選項已被保存';
$_['text_info'] = '如果在seo包選項中啟用，此站點地圖不包含重複內容並集成hreflang標記。';
$_['text_minute'] = '分鐘';
$_['text_hour'] = '小時（s）';
$_['text_day'] = '天（s）';
$_['entry_data_feed'] = 'Full Feed：<span class="help">包含使用hreflang標記的所有語言的提要（如果使用多種語言，將顯示hreflang）</span>';
$_['entry_lang_feed'] = '基於語言的提要：<span class="help">如果您偏好單獨的語言版本，請使用這些語言</span>';
$_['entry_grid_feed'] = '網格產品供稿：<span class="help">產品縮略圖網格</span>';

//標籤
$_['text_tab_0'] = '網站地圖';
$_['tab_opt_1'] = 'Feed配置';
$_['tab_opt_2'] = '高級選項';
$_['entry_feed_title'] = '姓名：';
$_['entry_cache_delay'] = '高速緩存延遲';
$_['entry_cache_delay_help'] = '多少次顯示生成的文件，直到重新生成？';
$_['entry_language'] = '語言：<span class="help"> </span>';
$_['entry_feed_url'] = '網站地圖 Url：<span class="help">給這個網址谷歌或bing </span>';

$_['text_tab_1'] = '自定義鏈接';

//配置
$_['text_tab_2'] = '配置';

$_['text_link_type'] = '鏈接類型';
$_['text_type_product'] = '產品';
$_['text_type_category'] = '類別';
$_['text_type_manufacturer'] = '品牌';
$_['text_type_information'] = '信息';
$_['text_type_custom'] = '自定義鏈接';
$_['text_type_journal'] = '期刊博客';

$_['entry_status'] = '狀態';
$_['entry_priority'] = '優先';
$_['entry_freq'] = '改變頻率';
$_['entry_in_stock'] = '僅包含在庫存產品中：<span class="help">如果禁用了所有產品，只有產品的數量> = 1 </span>';
$_['entry_item_no'] = '每個xml的項目數量：<span class="help">每個xml文件要顯示多少個url，默認值為500';
$_['entry_friendly_url'] = '友善網址：<span class="help">在http://example.com/sitemap.xml中顯示此網站地圖，而不是默認的opencart網站地圖</span>。';
$_['entry_display_img'] = '在Feed中顯示圖片縮略圖：<span class="help">這僅用於查看，圖片仍然包含在搜索引擎中</span>';
$_['entry_include_img'] = '將主圖片添加到Feed中：<span class="help">將主要產品圖片添加到Feed中？如果你想通過谷歌圖片搜索</span>發現，這會更好。';
$_['entry_additional_img'] = '包含其他圖片：<span class="help">在您的Feed中包含其他產品圖片？如果你想通過谷歌圖片搜索</span>發現，這會更好。';

$_['text_freq_always'] = '一直';
$_['text_freq_hourly'] = '小時';
$_['text_freq_daily'] = '每日';
$_['text_freq_weekly'] = '每週';
$_['text_freq_monthly'] = '每月';
$_['text_freq_yearly'] = '每年';
$_['text_freq_never'] = '永不';

$_['text_tab_about'] = '關於';

//條目

//錯誤
$_['error_permission'] = '警告：您無權修改搜索引擎優化包站點地圖Feed！';
?>