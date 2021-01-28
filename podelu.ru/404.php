<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "404 Страница не найдена");
?>
<style>
	body,html {
		overflow: hidden;
	}
</style>

<div class="page404">
	<h1>
		Упс, <span style="color:#005559">404</span>
	</h1>

	<h2>
	К сожалению, страница, которую вы запросили, не была найдена.
	<br/>
	Вы можете перейти на главную страницу.
	</h2>

	<a href="/" class="btn">На главную</a>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>