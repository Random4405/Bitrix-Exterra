<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");?>
  <?$APPLICATION->ShowHead();?>
  <link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
  <link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />
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
          <div class="logo"><a href="/"><img src="/images/logo-white.png" alt="" class="img-responsive" /></a></div>
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
  <section class="content">
    <div class="main-img-wrapper">
      <img src="/images/main-image.png" class="img-responsive" alt="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="plates">
          <ul>
            <li><img src="/images/icons/Icon-1.jpg" alt="" /></li>
            <li><img src="/images/icons/Icon-2.jpg" alt="" /></li>
            <li><img src="/images/icons/Icon-3.jpg" alt="" /></li>
            <li><img src="/images/icons/Icon-4.jpg" alt="" /></li>
            <li><img src="/images/icons/Icon-5.jpg" alt="" /></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

