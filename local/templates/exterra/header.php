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
<?
global $USER;
if ($USER->IsAdmin()):
?>
<style>
.js-header {
  top: auto;
}
</style>
<?endif;?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/lightbox.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
<?$APPLICATION->AddHeadScript("/local/templates/exterra/js/clamp.min.js");?>
<?$APPLICATION->AddHeadScript("/local/templates/exterra/js/script.js");?>
<?$APPLICATION->AddHeadScript("/local/templates/exterra/js/lightbox.js");?>
<title><?$APPLICATION->ShowTitle()?></title>
  </head>
  <body class="<? if ($_SERVER['REQUEST_URI'] == '/contacts/') echo "no-white-fix"?>">
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div id="results" class="alert alert-success alert-dismissable">
      <i class="fa fa-close close" onclick="$('#results').hide()"></i>
      <strong>Success!</strong>
    </div>


    <header class="js-header <? if ($_SERVER['REQUEST_URI'] != '/') echo "header-underline"?>">
      <div class="header-contacts">
        <div class="container">
          <div class="row">
            <ul class="clearfix">
              <li>Выбрать город:</li>
              <li>Телефон: 8 (920) 474-11-11</li>
              <li>Наш адрес</li>
              <li onclick="callFormShow()">Обратный звонок</li>
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
<?$APPLICATION->IncludeComponent(
  "bitrix:menu",
  "top_menu",
  array(
    "ALLOW_MULTI_SELECT" => "N",
    "CHILD_MENU_TYPE" => "left",
    "DELAY" => "N",
    "MAX_LEVEL" => "2",
    "MENU_CACHE_GET_VARS" => array(
    ),
    "MENU_CACHE_TIME" => "3600",
    "MENU_CACHE_TYPE" => "A",
    "MENU_CACHE_USE_GROUPS" => "Y",
    "ROOT_MENU_TYPE" => "top",
    "USE_EXT" => "Y",
    "COMPONENT_TEMPLATE" => "top_menu"
  ),
  false
);?>
          </div>
        </div>
      </div>
    </header>

