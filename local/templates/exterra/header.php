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
            "",
            Array(
              "AREA_FILE_SHOW" => "page",
              "AREA_FILE_SUFFIX" => "inc_top_logo",
              "EDIT_TEMPLATE" => ""
            )
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
  <section class="content">
    <div class="main-img-wrapper">
      <img src="/images/main-image.png" class="img-responsive" alt="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="plates">
          <ul>
            <li><img class="plate-1" alt="" /></li>
            <li><img class="plate-2" alt="" /></li>
            <li><img class="plate-3" alt="" /></li>
            <li><img class="plate-4" alt="" /></li>
            <li><img class="plate-5" alt="" /></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <h1 class="title">Популярные товары</h1>
        .custom-product-wrapper*4>img.product-main-image+.about-product>h4{Кирпич керамический пустотелый
AP-Adriatico 240-70}+.cost-wrapper+.status-wrapper
      </div>
    </div>
  </section>
