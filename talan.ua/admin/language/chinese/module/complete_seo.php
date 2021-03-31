<?php
// Heading
$_['heading_title'] = '<img src ="view/seo_package/img/icon.png" style="vertical-align：top; padding-right：4px"/> <b style="color：＃555">完成</b> <b style="color：＃11b209">SEO包</b>';
$_['module_title'] = '完整SEO <span>套餐</span>';
  
$_['text_store_select'] = '存儲';

// 儀表板
$_['tab_seo_dashboard'] = '儀表板';
$_['text_seo_score'] = 'SEO Power';
$_['text_dashboard_config'] = 'SEO概述';

//多標籤
$_['tab_seo_multistore'] = 'Multistore';
$_['info_multistore_dashboard'] = '這裡你可以定義每個商店的具體參數。<br/> <br/>如果啟用Multistore SEO組件，你還可以為每個商店的產品/類別/信息和批量更新設置特定的URL選項卡在這裡可用。<br/> <br/>啟用Multistore組件將在你的數據庫中插入新的表格來處理多層url和seo數據（標題，元數據等）。';

// Tab seo編輯器
$_['tab_seo_editor'] = 'SEO編輯器';
$_['tab_seo_editor_product'] = '產品';
$_['tab_seo_editor_category'] = '類別';
$_['tab_seo_editor_information'] = '信息';
$_['tab_seo_editor_manufacturer'] = '製造商';
$_['tab_seo_editor_image'] = '圖片';
$_['tab_seo_editor_absolute'] = '絕對網址';
$_['tab_seo_editor_common'] = '通用網頁網址';
$_['tab_seo_editor_special'] = 'Param Url';
$_['tab_seo_editor_redirect'] = '網址重定向';
$_['tab_seo_editor_404'] = '404經理';
$_['text_multistore'] = 'Multistore SEO';
$_['info_multistore'] = '為每個商店的產品和類別提供不同的SEO信息（關鍵字，元數據等）';
$_['text_editor_count'] = '計數';
$_['text_editor_query'] = '查詢';
$_['text_editor_query_redirect'] = '查詢';
$_['text_editor_query_absolute'] = '完整查詢（路由後的值=）';
$_['text_editor_query_common'] = '查詢（路由後的值=）';
$_['text_editor_query_special'] = '查詢（例如：custom_id = 1）';
$_['text_editor_image'] = '圖片';
$_['text_editor_name'] = '名稱';
$_['text_editor_title'] = '標題';
$_['text_editor_meta_title'] = '元標題';
$_['text_editor_meta_keyword'] = 'Meta關鍵字';
$_['text_editor_meta_description'] = '元描述';
$_['text_editor_url'] = 'SEO網址';
$_['text_editor_url_absolute'] = '完整的SEO網址';
$_['text_editor_url_redirect'] = '重定向到';
$_['text_editor_tag'] = '標籤';
$_['text_editor_h1'] = 'Seo H1';
$_['text_editor_item_name'] = '產品名稱';
$_['text_editor_image_name'] = '名稱';
$_['text_editor_image_alt'] = 'Alt';
$_['text_editor_image_title'] = '標題';
$_['text_editor_related'] = '相關';
$_['text_seo_new_alias_title'] = '插入新的網址別名';
$_['text_seo_new_absolute_alias_info'] = '以絕對方式重寫網址，例如index.php？route = <b> blog/blog&post_id = 123 </b> <br/>在查詢字段中輸入<b> blog/blog&post_id = 123 </b>（只插入index.php？route =後的值）<br/>在SEO url字段中輸入你想要的url：<b> blog/this-is-a-blog-post </b>';
$_['text_seo_new_alias_info'] = '重寫使用路由參數的網址，例如index.php？route = <b>帳號/帳號</b> <br/>在查詢字段中輸入<b>帳號/帳號</b>（沒有必要插入路徑=）<br/>在SEO網址字段中輸入你想要的網址：<b> my-account </b>';
$_['text_seo_new_spec_alias_info'] = '重寫屬於任何自定義模塊的網址，即使它不是用於處理友好的網址。<br/>例如index.php？<b> blog_news_id = 123 </b> />在查詢字段中輸入<b> blog_news_id = 123 </b> <br/>在SEO網址字段中輸入你想要的網址：<b> a-great-url-for-my-great-news </b> ';
$_['text_seo_new_redirect'] = '這會生成一個301重定向，以指示搜索引擎當前的url已被永久移動到新的地址。 <br/> <br/>使用此功能修復來自谷歌網站管理員的抓取錯誤。<br/> <br/>在查詢中鍵入完整的URL <b> http://example.com/broken-url </b> <br/>在重定向字段中將新網址<b> http://example.com/fixed-url </b> <br/>或者沒有域名（不要忘記最初的/）在查詢中：<b>/broken-url </b> <br/>在重定向字段中：<b>/fixed-url </b> <br/>動態重定向<br/>如果你想製作它甚至可以在進一步的URL更新時以這種方式填充重定向字段：<b> product/product&product_id = 42 </b>（其中42是您的實際產品ID）';
$_['text_info_limits_tab'] = '元字段限制';
$_['text_info_limits_title'] = '元標題和描述限制';
$_['text_info_robots'] = '<h4>元機器人</h4>
<p>通過漫遊器元標記，您可以利用細粒度的頁面特定方法來控制應該如何將單個頁面編入索引並投放給搜索結果中的用戶。<br/>此處定義的設置將是所有頁面的默認設置，那麼您可以編輯特定產品，以僅更改此產品的機器人值（在數據標籤中）。<br/>元機器人參數將在頁面中作為元標記設置在頭部分中：&lt; meta name ="robots"/&gt; </p>
<table class="table table-bordered">
  <tbody><tr><th>Directive</th><th>Meaning</th></tr>
  <tr><td><code><span>all</span></code></td>
    <td>There are no restrictions for indexing or serving. Note: this
      directive is the default value and has no effect if explicitly
      listed, so when you choose this value the meta robots tag won\'t be displayed</td></tr>
  <tr><td><code><span>noindex</span></code></td>
    <td>Do not show this page in search results</td></tr>
  <tr><td><code><span>nofollow</span></code></td>
    <td>Do not follow the links on this page</td></tr>
  <tr><td><code><span>none</span></code></td>
    <td>Equivalent to <code><span>noindex,<br> nofollow</span></code></td></tr>
  <tr><td><code><span>noimageindex</span></code></td>
    <td>Do not index images on this page.</td></tr>
</tbody></table>
<h4>自動設置</h4>
<p>啟用後，您將能夠定義元機器人的默認值，並且該模塊將自動為某些特定頁面應用最佳參數，請參閱以下列表以了解哪些參數會自動設置到您的網站上：</p>
<table class="table table-bordered">
<tr> <th style ="width：220px">類型</ th> <th>元機器人值</ th> </tr>
<tr> <tr>分頁網頁</td> <tr> <code> noindex，關注</code> </td> </tr>
<tr> <tr>帶限制參數的頁面</td> <tr> <code> noindex，關注</code> </td> </tr>
<tr> <tr>搜索頁面</td> <tr> <code> none </code>（noindex，nofollow）</td> </tr>
</table>
';
$_['text_info_limits'] = '<h4>元標題和說明限制</h4>
元標題和描述非常重要，因為它們是用戶在搜索引擎發出請求時會看到的內容，標題是主要鏈接，並且描述了下面的小文本。</p>
<p> <img src ="view/seo_package/img/help/meta_title_desc.png"alt =""class="img-thumbnail"/> </p>
谷歌將在67個字符之後截斷你的頭銜，但將索引更多，為了讓這個變得容易可視化，標題字段在繞過67個字符時變為橙色，在繞過85個字符時變為紅色。限制的描述是〜300個字符的截斷和多一點的索引。</p>
<br /> <span style ="color：＃f23333">橙色</span>表示您的文字肯定會被截斷，但無論如何都會被完全索引。<br /> <span style ="color：＃f23333">紅色顏色</span>意味著文本末尾的某些詞不會被編入索引。</p>
<p> <b>重要提示：</b>用於元描述的opencart的默認數據庫字段限制為255個字符，因此如果您想要對300個字符進行元描述，則應更改實際限制。為此，請進入PHPMyAdmin>表oc_product_description>編輯meta_description字段，並將350設置為限製而不是255。</p>';
$_['entry_analytics_code'] = 'Google Analytics代碼：';
$_['text_info_analytics_tab'] = 'Google Analytics（分析）';
$_['text_info_analytics'] = '<h4>在Google Analytics上驗證您的網站</h4>
<p>您可以使用Google Analytics（分析）為您的網站提供詳細信息，以便連接到<a href="https://www.google.com/webmasters/"> https://www.google.com/webmasters/</a>並單擊ADD A PROPERTY，然後選擇HTML標記驗證方法，如下圖所示。</p>
<p> <img src ="view/seo_package/img/help/gg_analytics.png"alt =""class="img-thumbnail"/> </p>
<p>複製谷歌給出的代碼以激活您的網站驗證。現在您應該可以在Google頁面上進行驗證。</p>';

//標籤頁配置
$_['tab_seo_options'] = 'SEO配置';
$_['text_seo_package_status'] = 'SEO包狀態：';
$_['text_seo_components'] = '組件：';
$_['text_seo_tab_general_1'] = '組件';
$_['text_seo_tab_general_2'] = '語言標記';
$_['text_seo_tab_general_3'] = 'Hreflang';
$_['text_seo_tab_general_4'] = '關鍵字選項';
$_['text_seo_tab_general_5'] = '自動更新';
$_['text_seo_tab_general_6'] = '友好網址';
$_['text_seo_tab_general_7'] = '緩存';
$_['text_seo_tab_general_8'] = '規範鏈接';
$_['text_seo_tab_general_9'] = '';
$_['text_seo_tab_general_10'] = '評論';
$_['text_seo_tab_general_11'] = '請求標題';
$_['text_seo_tab_general_12'] = 'Sitemap';
$_['text_seo_tab_general_13'] = '元機器人';
$_['text_seo_tab_general_14'] = '重定向';
$_['text_seo_tab_general_16'] = '模塊SEO';
$_['text_info_general'] = '這些設置會影響SEO的全球運作，它們會立即生效，並且可以隨時更改。';
$_['text_info_general_3'] = 'Hreflang標籤允許搜索引擎知道當前頁面的其他語言的URL。<br/>一旦被激活，它將被包含在你網站的所有頁面中，並且也被包含在seo包站點地圖中feed> seo軟件包站點地圖）。<br/>詳細信息：<a href="https://support.google.com/webmasters/answer/189077?hl=zh-CN" target="new">此處</a> ';
$_['text_info_general_6'] = '重寫分頁鏈接SEO友好，例如website.com/category?page=3將成為website.com/category/page-3';
$_['text_info_general_7'] = '緩存功能會通過緩存所有url鏈接而不是每次計算它們來加速您的網站。<br/>警告：此功能是實驗性的，可能無法在所有配置上使用，如果你有與您的主題集成的另一個緩存模塊或緩存禁用此選項。';
$_['text_info_general_8'] = '規範鏈接告知搜索引擎，如果它在網站的其他地方找到相同的頁面，它只能考慮一個鏈接，這對於避免重複的內容處罰很重要。';
$_['text_info_general_10'] = '默認的opencart評論是由ajax動態加載的，這使得搜索引擎不能看到評論的內容，這對你的網站來說是有價值的內容，使這個選項能夠插入一個包含用戶在HTML中檢查以使搜索引擎能夠看到它們。<br /> <br />您必須手動將此代碼插入到您的product/product.tpl模板中：<b>&lt;？php echo $ seo_reviews; </b> <br /> <br />然後，您可以根據需要設置樣式，容器類是<b> .seo_reviews </b>，項目類是<b> .seo_review </b>' ;
$_['text_info_general_12'] = '必須將站點地圖配置為供稿部分，請點擊下面的按鈕進行配置。';
$_['text_seopackage_sitemap'] = 'SEO包站點';
$_['text_seo_pagination_fix'] = '上一個/下一個修正：<span class="help">修復opencart 2.2+問題，子類別為prev/next </span>';
$_['text_seo_pagination_canonical'] = 'Canonical with pagination：<span class="help">設置分頁頁面的規範鏈接以包含頁碼（不推薦）</span>';
$_['text_seo_canonical'] = '規範：<span class="help">為所有頁面啟用規範</span>';
$_['text_seo_absolute'] = '絕對類別路徑：';
$_['text_seo_absolute_help'] = '允許使用相同的關鍵字子類別和其他東西（例如：/ laptop/apple <br/>/desktop/apple <br/>/apple（manufacturer）） <br/>如果你給製造商的關鍵字，它不能用於頂級類別（/蘋果和/蘋果），只有子類別';
$_['text_seo_reviews'] = 'SEO評論：<span class="help">在HTML內容中插入評論</span>';
$_['text_seo_extension'] = '擴展名：<span class="help">在產品關鍵字（例如.html）</span>的末尾添加您選擇的擴展名。';
$_['text_seo_flag_tag'] = '域名後加標籤';
$_['text_seo_flag_store'] = '標記為子域';
$_['text_seo_flag'] = '語言標記模式：';
$_['text_seo_flag_short'] = '短標籤：';
$_['text_seo_flag_upper'] = '標記為大寫：';
$_['text_seo_flag_default'] = '默認沒有標籤：';
$_['text_seo_urlcache'] = '網址緩存：<span class="help">使用網址緩存加快頁面加載速度</span>';
$_['text_seo_redirect_dynamic'] = '重定向動態鏈接：<span class="help">動態鏈接（route = product/product&product_id = 32）會自動重定向到友好的url。重定向為301，因此搜索引擎將停止對其進行索引並僅以友好的url作為參考。</span>';
$_['text_seo_redirect_canonical'] = '重定向到規範：<span class="help">這是友好的URL，它檢查當前鏈接是否是規範鏈接，如果不是則重定向到規範鏈接。這樣可以避免為同一項目啟用多個網址。重定向是301。</span>';
$_['text_seo_redirect_canonical_1'] = '重定向除類別鏈接以外的所有鏈接';
$_['text_seo_redirect_canonical_2'] = '重定向所有鏈接，包括分類鏈接';
$_['text_seo_redirect_http'] = 'HTTP模式：<span class="help">使用此命令強制您的網站使用SSL或www，如果網址不正確，將進行301重定向。</span>' ;
$_['text_seo_redirect_ssl'] = '強制SSL值，不要改變WWW';
$_['text_seo_redirect_www'] = '強制WWW值，不要更改SSL';
$_['text_seo_redirect_sslwww'] = '強制SSL和WWW值';
$_['text_seo_redirect_http_1']	      	= 'No-SSL, no-WWW - http://example.com';
$_['text_seo_redirect_http_2']	      	= 'No-SSL, WWW - http://www.example.com';
$_['text_seo_redirect_http_3']	      	= 'SSL, no-WWW - https://example.com';
$_['text_seo_redirect_http_4']	      	= 'SSL, WWW - https://www.example.com';
$_['text_seo_redirect_http_5']	      	= 'SSL - https://(www.)example.com';
$_['text_seo_redirect_http_6']	      	= 'No-SSL - http://(www.)example.com';
$_['text_seo_redirect_http_7']	      	= 'WWW - http(s)://www.example.com';
$_['text_seo_redirect_http_8']	      	= 'No-WWW - http(s)://example.com';
$_['text_seo_special_group'] = '特殊價格組：<span class="help"> [price]標記可以計算特殊價格，在這裡定義您想要使用哪個客戶組進行計算，如果禁用，那麼只有默認價格將被顯示</span>';
$_['text_seo_format_tag'] = '標籤格式：<span class="help">在批量更新或自動更新中生成時，在每個單詞與產品標籤之間添加逗號</span>。';
$_['text_seo_banner'] = '橫幅鏈接重寫：<span class="help">動態生成橫幅上的seo鏈接（​​用於橫幅，輪播，幻燈片模塊）</span>';
$_['text_seo_banner_help'] = '在橫幅部分，不要輸入seo鏈接（​​/ category/product_name），而是輸入默認的opencart鏈接：<b> index.php？route = product/product&path = 10_21&product_id = 54 </b>。<br />您也可以去掉index.php，如下所示：<b> product/product&path = 23&product_id = 48 </b>';
$_['text_seo_hreflang'] = '啟用hreflang標記：';
$_['text_seo_substore'] = '啟用多商店重寫：';
$_['text_seo_substore_config'] = '實際配置：';
$_['text_no_language_defined'] = '沒有語言定義';
$_['text_info_transform'] = '所有這些設置定義了保存項目或使用批量更新時關鍵字的生成方式。';
$_['text_seo_whitespace'] = '空格：<span class="help">替換空格字符... </span>';
$_['text_seo_lowercase'] = '小寫：<span class="help"> QWERTY => qwerty </span>';
$_['text_seo_remove'] = '刪除單詞：<span class="help">刪除生成網址時的一些單詞，可用於刪除常用單詞，如"the，a，..."每一個</span>';
$_['text_seo_duplicate'] = '重複：<span class="help">允許將相同的關鍵字用於不同語言版本的項目</span>';
$_['text_seo_ascii'] = 'ASCII模式：<span class="help">使用ascii等效替換突出的字符<br/>"éàôï"=>"eaoi"<br/>支持的語言：全部拉丁語，意大利語，西班牙語，葡萄牙語等），阿拉伯語，保加利亞語，克羅地亞語，捷克語，格魯吉亞語，德語，希臘語，拉脫維亞語，立陶宛語，波蘭語，羅馬尼亞語，俄語，塞爾維亞語，斯洛伐克語，斯洛文尼亞語，土耳其語，烏克蘭語</span>';
$_['text_seo_autofill'] = '自動填充';
$_['text_seo_autofill_on'] = 'on：';
$_['text_seo_autofill_desc'] = '自動填充：<span class="help">如果在插入或編輯時將字段留空，則會根據批量更新選項卡中的模式自動創建一個值。<br/> <這適用於：<br/> <br/> - 產品<br/> - 類別<br/> - 信息</span> 如果在插入或編輯時留空，seo url關鍵字將自動使用"批量更新"選項卡中設置的參數生成。適用於產品，類別和信息</span>';
$_['text_seo_autotitle'] = '其他langs的自動標題和desc：<span class="help">如果在插入或編輯時留空，其他語言的標題和描述將復制默認語言標題和描述<br/>這適用於產品，類別和信息</span>';
$_['text_headers_lastmod'] = '上次修改時間：<span class="help">在標題中添加上次修改日期</span>';
$_['text_all'] = '全部';
$_['text_insert'] = '插入';
$_['text_edit'] = '編輯';
$_['text_fix_search'] = '修復搜索網址：';
$_['text_fix_search_help'] = '<span class="help">搜索網址對於頂部搜索欄不夠友好，因為url是在javascript中硬編碼的，如果希望重寫搜索網址，請啟用此選項。如果它不適合您的主題，請與我們聯繫。</span>';
$_['text_fix_cart'] = '修正購物車移除問題：';
$_['text_fix_cart_help'] = '<span class="help">當結賬/購物車有友好的網址時，刪除產品並不會更新當前屏幕，請啟用此功能來解決此問題。</span>' ;
$_['tab_friendly_pagination'] = '分頁';
$_['tab_friendly_sorting'] = '排序';
$_['tab_friendly_tag'] = '標籤';
$_['text_seo_pagination'] = '分頁友情鏈接：<span class="help">警告：這與ajax分頁不兼容，包括一些主題，如果它不工作，則必須禁用seo分頁或ajax主題分頁</span>';
$_['text_seo_sort'] = '啟用友好排序：<span class="help">？sort = p.name&order = asc將被轉換為/ sort-name-asc </span>';
$_['text_seo_tag'] = '啟用友好標記：';
$_['text_seo_pagination_keyword'] = '分頁關鍵字：<span class="help">？page = 2將被重寫為/ page-2 </span>';
$_['text_seo_sorting_keyword'] = '排序關鍵字：<span class="help">選擇關鍵字進行排序</span>';
$_['text_seo_order_keyword'] = '訂購關鍵字：<span class="help">選擇asc和desc的關鍵字，必須用| </span>分隔。';
$_['text_seo_sortname_keyword'] = '排序類型關鍵字：<span class="help">選擇排序類型（名稱，價格，評級，模式）的關鍵字，必須用|隔開，跨度>';
$_['text_seo_limit_keyword'] = '限制關鍵字：<span class="help">？limit = 25將被轉換為/ limit-25 </span>';
$_['text_seo_tag_keyword'] = '標籤關鍵字：<span class="help">對於標籤網址（route = product/search&tag = something）定義關鍵字以用於更好的url，例如，如果您設置"tag"結果網址將會是/ tag/something </span>';

//標籤存儲搜索引擎優化
$_['tab_seo_store'] = '存儲搜索引擎優化';
$_['text_info_store']				= '<h4>Store SEO</h4>
<p>In this section you can customize the meta title, h1, meta keywords and description on home page for each store and each language!</p><p>Anything entered here will bypass the values entered in opencart settings.</p>
<h4>Meta Title prefix and suffix</h4>
<p>Use this parameter to add some text before or after all your website meta titles, they can be defined for each store and each language.</p>
<p>For example if you want to have your title like <b>"Product title | My store"</b> just put <b>" | My store"</b> in suffix.</p>';
$_['text_info_seo_titles_tab'] = 'SEO標題（H1，H2，H3）';
$_['text_info_seo_titles']				= '<h4>SEO標題（H1，H2，H3）</h4>
<p> SEO標題不會自動應用到您的主題，因為這會改變您的設計，因此您必須手動將它們插入到您的主題板中。<br/>要修改的文件（.tpl或.twig）： <br/> <code style="padding:0">/catalog/view/theme/[theme]/template/common/home<br/>/catalog/view/theme/[theme]/template/product/product<br/>/catalog/view/theme/[theme]/template/product/category<br/>/catalog/view/theme/[theme]/template/product/information</code> <br/><br/> 無線電通信 為.tpl插入這些代碼（請不要$ heading_title自動包含$ seo_h1，因此通常不需要將seo h1，只是h2和h3）：<br/><code style="padding:0">&lt;h1&gt;&lt;?php echo $seo_h1; ?&gt;&lt;/h1&gt;<br/>&lt;h2&gt;&lt;?php echo $seo_h2; ?&gt;&lt;/h2&gt;<br/>&lt;h3&gt;&lt;?php echo $seo_h3; ?&gt;&lt;/h3&gt;</code> <br/><br/> 或者.twig的這些代碼（請勿{{heading_title}}自動包含{{seo_h1}}，因此通常不需要放置seo h1，只是h2和h3）：<br/><code style="padding:0">&lt;h1&gt;{{ seo_h1 }}&lt;/h1&gt;<br/>&lt;h2&gt;{{ seo_h2 }}&lt;/h2&gt;<br/>&lt;h3&gt;{{ seo_h3 }}&lt;/h3&gt;</code><br/></p>
<p>考慮到display：none的元素可能不會被搜索引擎考慮到，所以你可能只想插入其中的一些，這取決於你的模板（h1是最重要的）。</p>';
$_['entry_robots'] = '啟用元機器人';
$_['store_seo_global'] = '全局設置';
$_['store_seo_home'] = '僅限網站';
$_['entry_robots_default'] = '默認值';
$_['entry_store_seo_title'] = '元標題：';
$_['entry_store_seo_title_extra'] = '元標題前綴和後綴：';
$_['entry_store_title'] = '標題H1：';
$_['entry_store_h2'] = '標題H2：';
$_['entry_store_h3'] = '標題H3：';
$_['entry_store_desc'] = '元描述：';
$_['entry_store_keywords'] = '元關鍵詞：';
$_['info_store_heading'] = '查看以下信息以包含在您的主題中';

//標籤豐富的片段
$_['tab_seo_snippets'] = 'Rich Snippets';
$_['text_seo_tab_snippet_1'] = 'Google微數據（Rich Cards）';
$_['text_seo_tab_snippet_2'] = 'Facebook Open Graph';
$_['text_seo_tab_snippet_3'] = '推特卡';
$_['text_seo_tab_snippet_3'] = '推特卡';
$_['text_seo_tab_snippet_4'] = 'Google發布商';
$_['tab_microdata_1'] = '產品';
$_['tab_microdata_2'] = '組織';
$_['tab_microdata_3'] = '存儲';
$_['tab_microdata_4'] = '網站';
$_['tab_microdata_5'] = '地點';
$_['tab_microdata_6'] = '麵包屑';
$_['entry_snippet_pricerange'] = '價格範圍：';
$_['entry_snippet_same_as'] = '相同：';
$_['entry_enable_microdata'] = '啟用Google Microdata：';
$_['entry_microdata_search'] = '搜索框';
$_['entry_microdata_logo'] = 'Logo';
$_['entry_microdata_address'] = '地址';
$_['entry_snippet_contact'] = '聯繫人';
$_['entry_microdata_gps'] = 'GPS坐標';
$_['entry_gps_lat'] = '緯度';
$_['entry_gps_long'] = '經度';
$_['entry_address_street'] = '街道';
$_['entry_address_city'] = '地點';
$_['entry_address_region'] = '地區';
$_['entry_address_code'] = '郵政編碼';
$_['entry_address_country'] = '國家';
$_['entry_email'] = '電子郵件';
$_['entry_phone'] = '電話';
$_['entry_product_data'] = '包含產品數據：';
$_['entry_snippet_data'] = '包含數據：';
$_['entry_model'] = '模型';
$_['entry_description'] = '描述（基於元描述）';
$_['entry_reviews'] = '評論';
$_['entry_upc'] = 'UPC';
$_['entry_mpn'] = 'MPN';
$_['entry_ean'] = 'EAN';
$_['entry_isbn'] = 'ISBN';
$_['entry_rating'] = '平均評分';
$_['entry_manufacturer'] = '製造商';
$_['entry_brand'] = '製造商';
$_['entry_enable_opengraph'] = '啟用Facebook Open Graph：';
$_['entry_opengraph_id'] = 'Facebook應用程序ID：';
$_['entry_enable_tcard'] = '啟用Twitter卡：';
$_['entry_twitter_nick'] = 'Twitter暱稱（可選）：';
$_['entry_twitter_home_type'] = '主頁類型：';
$_['entry_twitter_summary'] = '摘要';
$_['entry_twitter_summary_large'] = '大圖片摘要';
$_['entry_enable_gpublisher'] = '啟用Google發布商：';
$_['entry_gpublisher_url'] = 'Google+網址：';


//標籤友好的網址
$_['tab_seo_friendly'] = '友善網址';
$_['text_seo_export_urls'] = '導出網址';
$_['text_seo_export_urls_tooltip'] = '導出友好URL並將它們發送給開發人員以便在官方包中集成';
$_['text_seo_reset_urls'] = '恢復默認網址';
$_['text_seo_reset_urls_tooltip'] = '如果當前語言沒有預定義的URL，模塊將加載英文版';
$_['text_info_friendly'] = '在這裡，您可以管理友好的網址，根據需要進行編輯。<br/>你也可以添加新的網址，例如你安裝的任何自定義模塊，只需填寫第一個字段的值為路由（？route = mymodule/action），第二個字段中包含要在url中顯示的關鍵字。';
$_['text_seo_friendly'] = '普通網址';
$_['info_seo_friendly'] = '啟用此組件以重寫常見頁面URL和參數網址的URL';
$_['info_seo_absolute'] = '啟用此組件以便使用絕對地址';
$_['info_seo_404'] = '啟用該組件激活404錯誤頁面的日誌記錄';
$_['info_seo_redirect'] = '啟用此組件以激活301重定向';
$_['text_seo_cat_slash'] = '類別的最後斜杠';
$_['text_seo_cat_slash_help'] = '在類別網址末尾插入最後一個斜杠';
$_['text_seo_redir_reviews'] = '重定向orhpan評論：<span class="help">如果沒有通過ajax請求訪問評論頁面index.php？route = product/product/review，則將301重定向到產品頁面。這可以防止這些評論摘錄被編入索引。</span>';
$_['text_seo_remove_urls'] = '刪除所有條目';
$_['text_seo_remove_redirected'] = '刪除重定向條目';
$_['text_seo_add_url'] = '添加新條目';

//選擇完整的產品路徑
$_['tab_seo_fpp'] = '路徑管理器';
//文本
$_['tab_fpp_product'] = '產品';
$_['tab_fpp_category'] = '類別';
$_['tab_fpp_manufacturer'] = '製造商';
$_['tab_fpp_search'] = '搜索/標記';
$_['tab_fpp_common'] = '普通';
$_['text_fpp_cat_canonical'] = '類別canonical：';
$_['text_fpp_cat_mode_0'] = '直接鏈接';
$_['text_fpp_cat_mode_1'] = '完整路徑';
$_['text_fpp_cat_canonical_help'] = '你想給搜索引擎提供什麼樣的鏈接？<b>直接鏈接</b>：/ category（默認）<br/> <b>完整路徑</b>：/ cat1/cat2/category <br/> <br/>使用直接鏈接路徑模式，規範也自動設置在directl鏈接上。';
$_['text_fpp_mode'] = '產品路徑模式：';
$_['text_fpp_mode_0'] = '直接鏈接';
$_['text_fpp_mode_1'] = '最短路徑';
$_['text_fpp_mode_2'] = '最大路徑';
$_['text_fpp_mode_3'] = '製造商路徑';
$_['text_fpp_mode_4'] = '最後一類';
$_['text_fpp_slash'] = '最終斜杠';
$_['text_fpp_slash_mode_0'] = '沒有最後的斜線';
$_['text_fpp_slash_mode_1'] = '類別上的最終斜杠';
$_['text_fpp_slash_mode_2'] = '所有網址上的最終斜杠';
$_['text_fpp_slash_help'] = '在網址上插入最後一個斜杠，這是首選問題，沒有SEO影響。';

$_['text_fpp_bc_mode'] = '麵包屑模式：';
$_['text_fpp_breadcrumbs_fix'] = '麵包屑生成器：';
$_['text_fpp_breadcrumbs_0'] = '默認';
$_['text_fpp_breadcrumbs_1'] = '生成空如果';
$_['text_fpp_breadcrumbs_2'] = '總是生成';

$_['text_fpp_mode_help'] = '<span class="help"> <b>直接鏈接：</b>直接鏈接到產品，不包含任何類別（例如：/ product_name），這是默認的opencart行為。 >
<b>最短路徑：</b>默認情況下的最短路徑，可以被禁止的類別改變（例如：/ category/product_name）<br/>
<b>最大路徑：</b>默認情況下最大路徑，可以通過禁止類別進行更改（例如：/ category/sub-category/product_name）<br/>
<b>上一個類別：</b>只顯示產品的最後一個類別，如果您的產品位於/ category/sub-category/product_name，則鏈接將為/ sub-category/product_name <br/>
<b>製造商路徑：</b>製造商路徑而不是類別（例如：/ manufacturer/product_name）</span>';
$_['text_fpp_breadcrumbs_help'] = '<span class="help"> <b>默認：</b>默認opencart行為：將顯示來自類別的麵包屑<br/> <br/>
<b>如果為空，則生成：</b>僅在尚未提供麵包屑時才生成麵包屑，因此保留類別麵包屑（推薦）。
<b>總是生成：</b>也會覆蓋類別麵包屑，因此您將獲得的唯一麵包屑是由模塊生成的麵包屑</span>。';
$_['text_fpp_bypasscat'] = '在類別中重寫產品路徑：';
$_['text_fpp_bypasscat_help'] = '<span class="help">如果禁用，類別中的產品鏈接保持不變，以保持正常行為和麵包屑。<br/>如果啟用，則類別中的產品鏈接是覆蓋模塊生成的路徑。<br>在任何情況下，規範鏈接都會更新為良好值，因此Google只會查看模塊為給定產品生成的網址。</span>';
$_['text_fpp_directcat'] = '類別路徑模式：';
$_['text_fpp_directcat_help'] = '你想在你的網站上顯示什麼樣的鏈接？<br/> <b>直接鏈接</b>：/ category <br/> <b>完整路徑</b> ：/ cat1/cat2/category（default）';
$_['text_fpp_homelink'] = '重寫主頁鏈接：';
$_['text_fpp_homelink_help'] = '<span class="help">將主頁鏈接設置為mystore.com而不是mystore.com/index.php?route=common/home </span>';
$_['text_fpp_depth'] = '最高等級：';
$_['text_fpp_depth_help'] = '<span class="help">成為/ cat/subcat/product <br/>這個選項適用於最大和最短路徑模式</span>';
$_['text_fpp_unlimited'] = '無限';
$_['text_fpp_brand_parent'] = '製造商家長：';
$_['text_fpp_brand_parent_help'] = '例如，如果您的製造商列表是/品牌，製造商蘋果將以這種方式出現/品牌/製造商/蘋果，而不是直接/蘋果</span>';
$_['text_fpp_remove_search'] = '刪除搜索/標籤參數：';
$_['text_fpp_remove_search_help'] = '<span class="help">從搜索結果中的產品網址中刪除搜索或標籤參數（？search = something，？tag = something） ）</跨度>';
$_['entry_category'] = '禁用類別：<span class="help">選擇在多個路徑中永遠不會顯示的類別</span>';

//標籤大量更新
$_['tab_seo_update'] = '批量更新';
$_['text_info_update'] = '使用此函數時要小心，因為它會覆蓋所有的關鍵字。<br/>你可以使用模擬函數在真正更新之前檢查結果。<br/>選擇語言標誌為只更新這些語言。';
$_['text_cleanup'] = '清理：<span class="help">在數據庫中刪除舊的網址，如果您在某些網址遇到問題，請進行清理</span>';
$_['text_cache'] = '網址緩存：<span class="help">生成或刪除網址緩存</span>';
$_['text_redirection'] = '動態重定向：<span class="help">保存所有實際的URL以進一步重定向，然後您可以更改seo關鍵字，Google會保留該軌道。</span>';
$_['text_cache_create_btn'] = '生成緩存';
$_['text_redirect_create_btn'] = '生成重定向';
$_['text_cache_delete_btn'] = '清除緩存';
$_['text_cleanup_btn'] = '清理';
$_['text_cleanup_duplicate_btn'] = '刪除重複的網址別名';
$_['text_cleanup_done'] = '清理完成，刪除％d個條目';
$_['text_seo_languages'] = '選擇語言';
$_['text_seo_simulate'] = '模擬：<span class="help">此按鈕處於打開狀態時不進行任何更改</span>';
$_['text_seo_empty_only'] = '僅更新空值：<span class="help">檢查以覆蓋所有值</span>';
$_['text_seo_redirect'] = '重定向';
$_['text_seo_redirect_mode'] = '網址重定向：<span class="help">自動為舊網址插入重定向</span>';
$_['text_image_name_lang'] = '圖像名稱只能用一種語言設置，請選擇一個並再次點擊生成';
$_['text_enable'] = '啟用';
$_['text_deleted'] = '已刪除';

// Tab cron
$_['tab_seo_cron'] = '克朗';
$_['text_seo_cron_update'] = '更新：';
$_['text_clear_logs'] = '清除日誌';
$_['text_tab_cron_1'] = '配置';
$_['text_tab_cron_2'] = '報告';
$_['text_cli_log_save'] = '保存日誌文件';
$_['text_cli_log_too_big'] = '您的日誌文件太大（％s）要在此處顯示 - 您可以使用下面的按鈕下載或清除它。';

// Tab關於
$_['tab_seo_about'] = '關於';

$_['text_nothing_changed'] = '零項';
$_['text_seo_no_language'] = '沒有語言選擇';
$_['text_seo_fullscreen'] = '全屏';
$_['text_seo_show_old'] = '顯示舊值';
$_['text_seo_change_count'] = '條目已更改';
$_['text_seo_old_value'] = '舊值';
$_['text_seo_new_value'] = '新值';
$_['text_seo_item'] = '物品';
$_['text_simulation'] = '模擬模式';
$_['text_write'] = '寫入模式';
$_['text_empty_only'] = '僅空值';
$_['text_all_values'] = '所有值';
$_['text_seo_update_info'] = '1。 <br/>啟用或禁用模擬模式<br/> 2。選擇是否只更新空白項目或所有項目<br/> <br/> 3。點擊您選擇的Generate按鈕4。結果將顯示在這裡';
$_['text_seo_simulation_mode'] = '<span>模擬模式</span>不會對數據庫做任何更改';
$_['text_seo_write_mode'] = '<span>寫模式</span>修改將被保存';
$_['text_seo_product'] = '產品';
$_['text_seo_category'] = '類別';
$_['text_seo_manufacturer'] = '製造商';
$_['text_seo_information'] = '信息';
$_['text_seo_cache'] = '名稱';
$_['text_seo_cleanup'] = 'Entry（url）';
$_['text_seo_type_product'] = '產品';
$_['text_seo_type_category'] = '類別';
$_['text_seo_type_manufacturer'] = '製造商';
$_['text_seo_type_information'] = '信息';
$_['text_seo_type_redirect'] = '動態重定向';
$_['text_seo_mode_product'] = '產品';
$_['text_seo_mode_category'] = '類別';
$_['text_seo_mode_manufacturer'] = '製造商';
$_['text_seo_mode_information'] = '信息';
$_['text_seo_mode_url_alias'] = '網址別名';
$_['text_seo_mode_duplicate'] = '刪除重複';
$_['text_seo_type_redirection'] = '動態重定向';
$_['text_seo_type_report'] = '報告';
$_['text_seo_type_cache'] = '緩存';
$_['text_seo_type_cleanup'] = '清理';
$_['text_seo_generator_product'] = '產品：';
$_['text_seo_generator_product_desc'] = '<span class="help">可用模式：<br/> <b> [name] </b>：產品名稱<br/> <b> [model] </b>：型號<br/><b> [category] ​​</b>：類別名稱<br/><b> [brand] </b>：品牌名稱<br/> <b> [desc] </b>：描述extract <br/><b> [desc_sentence] </b>：第一句<br/><b> [current] </b>：當前值<br/> <b> {aa | bb | cc} </b>：隨機值 <br/> <b> {en} .. {/ en} </b>：僅適用於lang <br/> <br/>其他：<b> [parent_category] ​​</b> <b> [upc] </b> <b> [sku] </b> <b> [ean] </b> <b> [jan] </b> <b> [isbn] </b> <b> [mpn] </b> <b> [location] </b> <b> [price] </b> <b> [lang] </b> <b> [lang_id] </b> <b> [prod_id] </b> <b> [cat_id] </b> <b> [attr] </b> </span>';
$_['text_seo_generator_category'] = '分類：';
$_['text_seo_generator_category_desc'] = '<span class="help">可用模式：<br/> <b> [name] </b>：分類名稱<br/> <b> [desc] </b>：說明<br/> <b> [current] </b>：當前值<br/> <b> {aa | bb | cc} </b>：隨機值<br/> <b> {en} .. {/ en} </b>：僅適用於 <br/><b> [parent] </b>：父類別名稱<br/><b> [lowest_price] </b>：最低產品價格<br/> <b> [highest_price] </b>：最高產品價格<br/> <br/>其他：<b> [lang] </b> <b> [lang_id] </b> <b> [cat_id]</b></span>';
$_['text_seo_generator_information'] = '信息頁面：';
$_['text_seo_generator_information_desc']= '<span class="help">信息標題<br/> <b> [desc] </b>：描述extract <br/><b> [current] </b>：當前值<br/><b> {aa | bb | cc} </b>：隨機值<br/> <b> { en} .. {/ en} </b>：僅適用於lang <br/> <br/>其他：<b> [lang] </b> <b> [lang_id] </b> </span> ';
$_['text_seo_generator_manufacturer'] = '製造商：';
$_['text_seo_generator_manufacturer_desc'] = '<span class="help">可用模式：<br/> <b> [name] </b>：製造商名稱<br/> <b> [current] </b>：當前值<br/><b> {aa | bb | cc} </b>：隨機值<br/><b> {en} .. {/ en} </b>：僅適用於lang </span>';
$_['text_seo_mode_url'] = 'SEO網址';
$_['text_seo_generator_redirect'] = '生成動態重定向';
$_['text_seo_mode_title'] = '元標題';
$_['seo_title_prefix'] = '前綴';
$_['seo_title_suffix'] = '後綴';
$_['text_seo_mode_h1'] = 'SEO H1';
$_['text_seo_mode_h2'] = 'SEO H2';
$_['text_seo_mode_h3'] = 'SEO H3';
$_['text_seo_mode_image_name'] = '圖片名稱';
$_['text_seo_mode_image_alt'] = '圖片alt';
$_['text_seo_mode_image_title'] = '圖片標題';
$_['text_seo_mode_keyword'] = '元關鍵詞';
$_['text_seo_mode_description'] = '元描述';
$_['text_seo_mode_related'] = '相關產品';
$_['text_seo_mode_tag'] = '標籤';
$_['text_seo_mode_create'] = '生成';
$_['text_seo_mode_delete'] = '刪除';
$_['text_seo_report'] = '報告';
$_['text_seo_generator_url'] = '生成網址';
$_['text_seo_generator_title'] = '生成元標題';
$_['text_seo_generator_keywords'] = '生成元關鍵詞';
$_['text_seo_generator_desc'] = '生成元描述';
$_['text_seo_generator_full_desc'] = '生成描述';
$_['text_seo_generator_store_copy_i'] = '從默認商店複製商店數據';
$_['text_seo_generator_store_copy'] = '複製商店SEO數據';
$_['text_seo_generator_tag'] = '生成標籤';
$_['text_seo_generator_h1'] = '生成SEO H1';
$_['text_seo_generator_h2'] = '生成SEO H2';
$_['text_seo_generator_h3'] = '生成SEO H3';
$_['text_seo_generator_imgalt'] = '生成圖像Alt';
$_['text_seo_generator_imgtitle'] = '生成圖像標題';
$_['text_seo_generator_imgname'] = '生成圖像名稱';
$_['text_seo_generator_related'] = '生成相關產品';
$_['text_seo_generator_related_no'] = '數量：';
$_['text_seo_generator_related_relevance'] = '相關性（0-10）：';
$_['text_seo_generator_related_samecat'] = '同一類別';
$_['text_query'] = '查詢';
$_['text_keyword'] = '關鍵字';
$_['text_status'] = '狀態';
$_['text_empty'] = '空';
$_['text_duplicate'] = '重複';
$_['text_report'] = '報告';
$_['text_url_alias_report_btn'] = '網址別名報告';

$_['text_seo_result'] = '結果：';

$_['text_module'] = '模塊';
$_['text_success'] = '成功：您已經修改了模塊SEO模塊！';

$_['text_man_ext'] = '製造商擴展';

$_['text_seo_confirm'] = '你確定嗎？';
$_['text_description'] = '描述';


//完整的產品路徑

//幫助部分

$_['tab_info_request'] = '請求標題';
$_['title_common_overview'] = '網址組件';

$_['text_info_common_overview'] = '
<p> <b>網址組件快速說明，請查看專門章節以獲取更多信息。</b> </p>
<h4>絕對網址</h4>
<p>使用此組件將友好的網址設置為任何自定義模塊，可使用完整網址而不是url關鍵字。</p>
<p> http://website.com/index.php？<b> route = blog/blog&path = 12&post = 32 </b>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; http://website.com/ <B>博客/博客貓/這-是-A-博客-交</b> </p>
<h4>常見網頁網址</h4>
<p>使用此組件將友好網址設置為默認的opencart頁面（帳戶，聯繫人，結帳等），僅處理route =參數。</p>
<p> http://website.com/index.php？<b>路線=帳戶/註冊表</b>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; http://website.com/ <b>我賬戶/註冊</b> </p>
<h4>參數網址</h4>
<p>該組件列出了自定義模塊的seo url參數，因此您可以快速檢查它們，您可以創建新參數，但它可能無法在某些模塊上工作，因此建議使用絕對url，因為它可以在任何情況下使用。</p>
<p> http://website.com/some-category?<b>super_filter=42</b>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; http://website.com/some-category/的<b>過濾器 - 藍</b> </p>';
$_['text_info_absolute'] = '
<h4>絕對網址 - 處理任何自定義模塊網址</h4>
<p>Opencart正在默認使用url關鍵字，例如<b>/desktop/pc/some-computer </b>，來自這個URL opencart在數據庫中搜索每個部分以確定它與之相關的內容（類別，產品，信息等），那麼它會計算這個鏈接到一個可以理解的鏈接，該鏈接看起來像<b> index.php？route = product/product&path = 12_31&product_id = 54 </b>。</p>
<p>使用絕對url組件，您可以定義不使用關鍵字部分的網址，而是使用完整的網址本身，這對產品/信息/類別等沒有用處，但可以非常方便地使用任何自定義模塊。 </p>
<p>它使用源url中的無限參數和seo url中的無限級別。</p>
<h4>建立一個新的絕對網址</h4>
<p>例如，將<b> http://website.com/index.php?route=blog/blog&post=32 </b>轉換為<b> http://website.com/blog/this-is-一個-博客-交</b> </p>
<ol>
<li>點擊<span class="gkd-badge"> <i class="fa fa-plus" style="color：＃4CBD35"></i>添加新條目</span> </li>
<li>插入查詢字段<b> blog/blog&post = 32 </b>（不要插入index.php？route =）</li>
<li>在完整網址字段<b>博客/此博客發布</b> </li>
</ol>';
$_['text_info_common'] = '
<h4>常見網頁網址 - 將友好的網址提供給默認的opencart網頁（帳戶，聯繫人，結帳，...）</h4>
<p>默認情況下，opencart不會重寫常見的頁面url，它們仍然以這種方式<b> index.php？route = account/login </b>。</p>
<p>使用常用網頁網址組件，您可以為所有這些網頁定義一個seo網址</p>
<p>例如，您可以將<b> index.php？route = account/register </b>重寫為<b> register </b>，只需將<b> account/register </b>不要插入index.php？route =），並在seo url字段中添加<b> register </b>。</p>
<p>在這裡你不能插入任何參數，例如<b> account/register&amp; param = value </b>不能工作，你必須使用絕對URL作為這樣的鏈接，或者將參數插入參數url </p>
<h4>獲取預定義的網址</h4>
完整的搜索引擎優化為所有常用的opencart頁面提供預定義的網址，並提供各種語言，如果存在，它們將自動檢索當前選定的語言，如果不存在，它將取代英文網址。</p>
<p>警告：使用恢復默認網址會替換為當前語言列出的所有現有常用網頁網址。</p>
<ol>
<li>點擊底部的按鈕上的<span class="gkd-badge"> <i class="fa fa-caret-down"></i> </span>以訪問高級選項。</li> >
<li>然後點擊<span class="gkd-badge"> <i class="fa fa-magic" style="color：＃FB7C00"></i>恢復默認網址</span> </li>
<li>如果關鍵字可用於當前語言，則會顯示它們，如果不顯示英語，則需要翻譯。</li>
<li>您翻譯了一種新語言，希望我們能夠整合到主包中？然後點擊<span class="gkd-badge"> <i class="fa fa-save" style="color：＃4276D2"></i>導出網址</span> geekodev.com </li>
</ol>
<h4>建立新的常見網頁網址</h4>
<p>例如，將<b> http://website.com/index.php?route=account/register </b>轉換為<b> http://website.com/my-account/register </b> </p>
<ol>
<li>點擊<span class="gkd-badge"> <i class="fa fa-plus" style="color：＃4CBD35"></i>添加新條目</span> </li>
<li>插入查詢字段<b> account/register </b>（不要插入route =）</li>
<li>在完整網址字段<b> my-account/register </b> </li>
</ol>';
$_['text_info_special'] = '
<h4>參數網址 - 管理網址中的參數seo關鍵字</h4>
<p>如果您有一個處理seo關鍵字的自定義模塊，其關鍵字通常會顯示在那裡，因此您可以輕鬆查看它們並根據需要進行更改。</p>
<p>如果您的自定義模塊不自動管理seo網址，那麼建議使用Absolute Url組件來處理網址。你也可以使用Common Page和Param url的組合來處理它，但絕對url更容易，所以這個組件只推薦用於視圖而不是URL創建。</p>
<h4>設置新的重定向</h4>
<p> <span class="gkd-badge"> <i class="fa fa-plus" style="color：＃4CBD35"></i>添加新條目</span>點擊此按鈕並按照指示您設置您的網址重定向。</p>';
$_['text_info_404'] = '
<h4>未找到（404）經理</h4>
<p>本部分列出您網站上訪問的所有網址，這些網址實際上並不存在，或者opencart系統無法轉發至任何內容。例如，當你到達這樣的頁面時：</p>
<p> <img class="img-thumbnail"src ="view/seo_package/img/help/not_found.png"alt =""/> </p>
<p>在這種情況下，完整的搜索引擎優化包會自動保存這個網址，這樣你就可以很容易地檢查這個表中所有未找到的網址以及他們被請求了多少次。</p>
<h4>從未找到的網址</h4>
<p>點擊按鈕<img src ="view/seo_package/img/help/btn_plus.png"/>輕鬆為該網址添加重定向，一旦添加您的重定向將出現在"Url重定向"選項卡中，並且這裡的網址將顯示在<span class="text-success">綠色</span>中，以表明該網址已有重定向。</p>
<h4>刪除實際的記錄</h4>
<p>這些條目僅供參考，刪除它們沒有任何影響，只需單擊下列其中一個按鈕即可：</p>
<ul class="list-unstyled">
<li style="margin-top:12px"><span class="gkd-badge"><i class="fa fa-minus" style="color:#ED5555"></i> 刪除重定向條目</span> 這將刪除標記為<span class =“text-success”> green </span>的所有網址，這意味著任何已設置了重定向設置的網址</li>
<li style="margin-top:12px"><span class="gkd-badge"><i class="fa fa-close" style="color:#ED5555"></i> 這將刪除此表中所有標記為綠色或不綠色的網址，請不要擔心這並不會刪除這些網址上的重定向</li>
</ul>';
$_['text_info_redirections'] = '
<h4>網址重定向</h4>
<p>在這裡您可以定義自己的網址重定向，這是使用重定向301，這意味著搜索引擎會將新網址視為有效網址。</p>
<p>如果您需要更改搜索引擎結果中顯示的網頁網址，我們建議您使用服務器端301重定向。這是確保用戶和搜索引擎定向到正確頁面的最佳方式。 301狀態碼意味著一個頁面已經永久移動到一個新的位置。</p>
<p>如果您的網站上沒有找到任何網址，301重定向特別有用。</p>
<h4>設置新的重定向</h4>
<p> <span class="gkd-badge"> <i class="fa fa-plus" style="color：＃4CBD35"></i>添加新條目</span>點擊此按鈕並按照指示設置你的URL重定向。</p>';
$_['text_info_request'] = '<h4>請求標題</h4>
<p>請求標頭是HTTP協議的一部分，它們會在每次向服務器發送請求時發送。<br/>這裡你可以更改與請求標頭相關的一些參數，這樣的優化可以提高最終用戶的性能也適用於搜索引擎爬行機器人。</p>
<H5>上次修改</ H5>
<p>包含實際項目的上次修改日期，提高用戶的性能（如果瀏覽器未更新，則會從緩存中抓取頁面）以及抓取機器人。對於產品，日期將是產品的最後一次編輯或最後一次檢查的日期之一（如果有的話）。強烈建議您激活此設置。</p> <p> <img class="img-thumbnail"src ="view/seo_package/img/help/headers-last-modified.png"alt =""/> </p>';
$_['help_fb_appid_tab'] = 'Facebook App ID';
$_['help_microdata'] = '
<h4> Google微數據</h4>
微數據被搜索引擎廣泛用於更好地設置搜索結果的格式，例如，產品可以在搜索結果中直接顯示價格和評級：</p>
<p> <img class="img-thumbnail"src ="view/seo_package/img/help/microdata-product.jpg"alt =""/> </p>
完整的SEO包使用最新的JSON-LD格式在您的網站上添加微數據。包括基本信息（類別，描述，圖片，價格，庫存），您可以選擇要顯示的額外數據。</p>
<h4>使用微數據的好處</h4>
<P> <UL>
  <li>引人注目的結果 - 從您的競爭對手和您自己的結果中吸引用戶關注。</li>
  <li>潛在的點擊率增加 - 可能會增加點擊率，並降低用戶反彈的機會，因為他們在點擊前擁有更多信息。</li>
  <li>提供高質量的結果 - 提供更接近用戶規範的結果。</li>
</ul> </p>
<h4>測試工具</h4>
<p>使用以下測試工具檢查您的實際微數據：<a href="https://search.google.com/structured-data/testing-tool" target="_blank"> Google結構化數據測試工具</p>一> </p>
';
$_['help_fb_appid'] = '
<h4> Facebook應用程序ID </h4>
<p>您必須填寫您的Facebook應用程序ID才能使此功能正常工作，您可以在開發者面板的設置中找到它：<a href="http://facebook.com/developers"> http：// facebook.com/developers </A>。</p>
<p> <img class="img-thumbnail"src ="view/seo_package/img/help/settings_app-id.gif"alt =""/> </p>
';
$_['help_fb_setup_tab'] = '如何使用Facebook Opengraph';
$_['help_fb_setup'] = '
<h4>安裝Facebook開發人員應用程序</h4>
<p>在Facebok中創建應用程序的第一步是安裝Facebook Developer應用程序。</p>
<p>為此，請登錄Facebook，然後訪問<a href="http://facebook.com/developers"> http://facebook.com/developers </a>。</p>
<p>如果這是您第一次安裝開發者應用程序，您將在下面看到"請求權限"對話框：</p>
<p> <img class="img-thumbnail"src ="view/seo_package/img/help/permission.jpg"alt =""/> </p>
<p>點擊<b>允許</b>按鈕繼續。</p>
<h4>為您的網站創建Facebook應用程序</h4>
<p>現在您已安裝了Developer App，請點擊<b> Create New App </b>按鈕。<br/> <img class="img-thumbnail"src ="view/seo_package/img/help /create-new-app.gif"alt =""/> </p>
<p>為您的應用程序提供"應用程序顯示名稱"（顯示給用戶的名稱）。</p>
<p>為了本教程的目的，您不需要有"命名空間"。</p>
<p>點擊"我同意Facebook平台政策"框;然後點擊<b>繼續</b>按鈕。<br/> <img class="img-thumbnail"src ="view/seo_package/img/help/dialog_new-app.gif"alt =""/>/p>
<p>在下一個屏幕上，輸入安全短語，然後點擊<b>提交</b>。</p>
<p> <img class="img-thumbnail"src ="view/seo_package/img/help/new-app_captcha.gif"alt =""/> </p>
有很多選項可以調整與您的應用程序有關。在這篇文章中，我們將重點介紹使用Facebook應用程序ID設置您的網站所需的基礎知識。</p>
<h4>設置標籤</h4>
<p>這是您為應用程序進行基本設置的地方</p>
<p> <img class="img-thumbnail"src ="view/seo_package/img/help/settings_app-id.gif"alt =""/> </p>
App ID現已設置。您的應用ID是您將用於將您的網站與Facebook API集成的價值，因此您可以添加社交插件（如按鈕，發送按鈕，評論框等）。</p>
<p>你不需要添加圖標。如果您的網站有一個圖標，它會顯示在您的網站在Facebook Insights中的URL旁邊。</p>
<p> <b>基本信息：</b> </p>
<P> <UL>
<li> <b>應用顯示名稱：</b>使其與您提供的原始值相同</li>
<li> <b>應用程序名稱空間：</b>保留空白</li>
<li> <b>聯繫電子郵件：</b>您希望Facebook發送與您的應用有關的電子郵件</li>
<li> <b>應用程序域名：</b>只需放置"mydomain.com"，其中"mydomain.com"是您網站的域名網址（TLD）</li>
<li> <b>類別：</b>從下拉列表（可選）中選擇一個類別</li>
</ul> </p>
<p>您的網站現在是Facebook Open Graph中的一個"對象"，擁有自己的App ID。</p>
';
$_['help_flag_mode'] = '
<h4>標記在域</h4>之後
<p>語言前綴模式允許在域名後添加語言代碼：</p>
<P> <代碼> http://example.com/的<b> EN </b>的</代碼> <BR/> <代碼> http://example.com/的<b> FR </b> < /代碼>
<p>在多語種網站中，每種語言之間有很好的分隔是有用的。</p>
<p>此參數可以隨時啟用並立即生效，無需重新生成網址。</p>
<h4>額外選項</h4>
<table class="table table-bordered">
<tr> <th style ="width：220px">選項</ th> <th>效果</ th> </tr>
<tr> <tr> <code>短標記</code> </td> <tr>如果您已滿，則顯示<b>/en </b>而不是<b>/en-gb </b>格式定義</td> </tr>
<tr> <tr> <code>默認沒有標籤</code> </td> <tr>默認語言不會顯示語言標籤</td> </tr>
<tr> <tr> <code>以大寫字母標記</code> </td> <tr>以大寫字母顯示標記<b>/EN，/ FR </b> </td> </tr>
</table>
';
$_['help_store_mode'] = '
<h4>標記為子域</h4>
<p>如果您希望根據語言將鏈接寫入特定商店，請啟用此選項。例如，如果您有兩個商店定義如下：</p>
<P> <代碼> HTTP：// <B> EN </b>的.domain.com </代碼> <BR/> <代碼> HTTP：// <B> FR </b> .domain.com < /代碼> </p>
<p>默認情況下，opencart允許更改語言，但保留在同一個域中，如果啟用此選項並更改語言，您將被重定向到其他域。此外，hreflang鏈接將正確更新相應的商店網址。</p>
<p>此設置使用您的商店配置，因此您必須正確配置商店以實現此功能，同時請注意，這不僅限於子域，還可以為每種語言使用單獨的域名稱：</p>
<P> <代碼> HTTP：// <B>英語店內</b> .COM </代碼> <BR/> <代碼> HTTP：// <B>法國店</b> .COM < /代碼> </p>
<p>如果您在設置>商店中對配置進行了任何修改，請返回此處並再次保存設置。</p>
<h5>實際配置</ h5>
<p>在本節中，您可以看到實際上您的商店是如何綁定到每種語言的，您必須每種語言只有一個商店才能使此選項正常工作，如果商店沒有定義的語言，您將收到消息" <span class="text-danger">沒有定義的語言</span>"，在這種情況下，您需要在設置>商店中為此商店定義一種語言。</p>
';
$_['help_cron_title'] = '克倫職位';
$_['help_cron_setup_title'] = '設置一個cron作業';
$_['help_cron'] = '
<h4>什麼是cron作業？</h4>
Cron是一個Linux實用程序，它可以調度服務器上的命令或腳本以在指定的時間和日期自動運行。定時任務本身就是定時任務。 Cron作業對於自動執行重複性任務非常有用。</p> <p>在完整的SEO包中，cron作業用於自動更新商店數據，就像手動使用批量更新程序一樣。</p>
<h4>時間間隔</h4>
</p> </p> </p> <p>創建cron作業時，必須設置此項目。</p> <p>在你的服務器上（例如在cPanel中）。</p>
<H4>限制</h4>
Cron作業可能無法生成無限制項目，具體取決於您的服務器限制以及您擁有的項目數量在使用cron時可能會面臨錯誤，建議使用"僅限空白"參數來限制項目數量使用cron進行更新。</p>
';
$_['help_cron_setup'] = '
<h4> Cron命令</h4>
<p>使用這個cron命令進行主存儲：<br/><code>/[path_to_php]/php '.str_replace('system/', '', DIR_SYSTEM).'seo_package_cli.php</code></p>
<p>或者這個用於子商店（用商店ID替換X）：<br/><code>/[path_to_php]/php '.str_replace('system/', '', DIR_SYSTEM).'seo_package_cli.php store=X</code></p>
<p>如果您將seo_package_cli.php文件放入您的根opencart目錄中，並在其他地方不忘記修改路徑以匹配正確的文件位置，請使用此路徑。</p>
<h4>如何使用cPanel設置cron作業</h4>
<ol>
<li>將文件seo_package_cli.php從模塊包> _extra文件複製到您的FTP（最好到web根目錄之外的目錄）</li>
<li>登錄您的cPanel並轉到<b> Cron Jobs </b>部分</li>
<li>選擇所需的時間間隔，例如<b>每天一次</b> </li>
<li>在<b>命令</b>中復製本節頂部顯示的 <i>命令</i> </li>
<li>調整[path_to_php]到你的服務器路徑到php，它通常寫在cPanel的cron部分裡</li>
<li>點擊添加新的cron作業。</li>
</ol>
這就是全部！現在您的服務器將在指定的時間調用更新腳本，並且您將能夠將結果看到報告部分。</p>
';

//錯誤
$_['error_permission'] = '警告：您無權修改此模塊！';
$_['error_module_disabled'] = '完整的SEO包當前被禁用，您可以在SEO配置選項卡中啟用它。';
$_['error_friendly_disabled'] = '警告：通用頁面URL組件被禁用，您可以編輯所有值，但只有當您在SEO配置中激活此組件時，它們才會在前面激活。';
$_['error_404_disabled'] = '警告：404 Manager組件被禁用，只有當您在SEO配置中激活此組件時，未找到頁面的記錄才會被激活。';
$_['error_absolute_disabled'] = '警告：絕對Url組件被禁用，您可以編輯所有值，但只有當您在SEO配置中激活此組件時，它們才會在前面激活。';
$_['error_redirect_disabled'] = '警告：Url重定向組件被禁用，您可以編輯所有值，但只有當您在SEO配置中激活此組件時，它們才會在前面激活。';

?>