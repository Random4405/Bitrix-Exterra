<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");?>
  <?CJSCore::Init(array("jquery"));?>
  <?$APPLICATION->ShowHead();?>
  <link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
  <link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
  <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
  <div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <header>
    <div class="header-contacts">
      <div class="container">
        <div class="row">
          <ul class="clearfix">
            <li>Выбрать город:</li>
            <li>Телефон: 8 (920) 474-11-11</li>
            <li>Наш адрес</li>
            <li>Обратный звонок</li>
            <li>Поиск</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="container">
        <div class="row">
          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc_top_logo",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_RECURSIVE" => "Y"
	),
	false
);?>
          <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
          	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
          		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
          		"DELAY" => "N",	// Откладывать выполнение шаблона меню
          		"MAX_LEVEL" => "2",	// Уровень вложенности меню
          		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
          		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
          		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
          		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
          		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
          		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
          		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
          	),
          	false
          );?>
        </div>
      </div>
    </div>
  </header>

