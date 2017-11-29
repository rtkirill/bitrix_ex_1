<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/bitrix/templates/.default/favicon.ico">
	<?
	$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-1.8.2.min.js');
	$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/slides.min.jquery.js');
	$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js');
	$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/functions.js');
	$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/template_style.css");
	?>
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/.default/top.php");?> <!-- Подключение общих элементов шапки -->