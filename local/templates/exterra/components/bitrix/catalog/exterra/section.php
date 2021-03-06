<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

if (!isset($arParams['FILTER_VIEW_MODE']) || (string)$arParams['FILTER_VIEW_MODE'] == '')
  $arParams['FILTER_VIEW_MODE'] = 'VERTICAL';
$arParams['USE_FILTER'] = (isset($arParams['USE_FILTER']) && $arParams['USE_FILTER'] == 'Y' ? 'Y' : 'N');

$res = CIBlockSection::GetByID($arResult["VARIABLES"]["SECTION_ID"]);

if($ar_section = $res->GetNext()){
  $depth = $ar_section['DEPTH_LEVEL'];
}
//print_r ($ar_section);
?>


<?if ($depth != 1)://вложенные разделы?>

<div class="container">
  <div class="row">
<?$APPLICATION->IncludeComponent(
  "bitrix:breadcrumb",
  "",
  Array(
    "PATH" => "",
    "SITE_ID" => "s1",
    "START_FROM" => "0"
  )
);?>
  </div>
  <div class="row">
    <div class="content-sidebar">
    <div class="select-category-wrapper">
<?
$res = CIBlockSection::GetByID($arResult['VARIABLES']['SECTION_ID']);
if($ar_res = $res->GetNext())
  $arSect = $ar_res;
?>
<span class="subcategory_name"><?=$arSect['NAME']?></span>
<h5>
  Выберите подкатегорию:
</h5>
<ul>
<?
$arFilter = Array('IBLOCK_ID'=>6, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID' => $arSect['IBLOCK_SECTION_ID']);
$db_list = CIBlockSection::GetList(Array('NAME'=>'ASC'), $arFilter, true);
while($ar_result = $db_list->GetNext())
{
  echo '<li><a href="'.$ar_result['SECTION_PAGE_URL'].'">'.$ar_result['NAME'].'</a></li>';
}
?>
</ul>
<a href="/promotions/" class="promo-link">Распродажа</a>
    </div>
<?

if ($arParams['USE_FILTER'] == 'Y')
{
  $arFilter = array(
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ACTIVE" => "Y",
    "GLOBAL_ACTIVE" => "Y",
  );
  if (0 < intval($arResult["VARIABLES"]["SECTION_ID"]))
  {
    $arFilter["ID"] = $arResult["VARIABLES"]["SECTION_ID"];
  }
  elseif ('' != $arResult["VARIABLES"]["SECTION_CODE"])
  {
    $arFilter["=CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];
  }

  $obCache = new CPHPCache();
  if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog"))
  {
    $arCurSection = $obCache->GetVars();
  }
  elseif ($obCache->StartDataCache())
  {
    $arCurSection = array();
    if (Loader::includeModule("iblock"))
    {
      $dbRes = CIBlockSection::GetList(array(), $arFilter, false, array("ID"));

      if(defined("BX_COMP_MANAGED_CACHE"))
      {
        global $CACHE_MANAGER;
        $CACHE_MANAGER->StartTagCache("/iblock/catalog");

        if ($arCurSection = $dbRes->Fetch())
        {
          $CACHE_MANAGER->RegisterTag("iblock_id_".$arParams["IBLOCK_ID"]);
        }
        $CACHE_MANAGER->EndTagCache();
      }
      else
      {
        if(!$arCurSection = $dbRes->Fetch())
          $arCurSection = array();
      }
    }
    $obCache->EndDataCache($arCurSection);
  }
  if (!isset($arCurSection))
  {
    $arCurSection = array();
  }
?>
<?$APPLICATION->IncludeComponent(
  "bitrix:catalog.smart.filter",
  "visual_vertical",
  array(
    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "SECTION_ID" => $arCurSection['ID'],
    "FILTER_NAME" => $arParams["FILTER_NAME"],
    "PRICE_CODE" => $arParams["PRICE_CODE"],
    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
    "CACHE_TIME" => $arParams["CACHE_TIME"],
    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
    "SAVE_IN_SESSION" => "N",
    "FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
    "XML_EXPORT" => "Y",
    "SECTION_TITLE" => "NAME",
    "SECTION_DESCRIPTION" => "DESCRIPTION",
    'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
    "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
    'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
    'CURRENCY_ID' => $arParams['CURRENCY_ID'],
    "SEF_MODE" => $arParams["SEF_MODE"],
    "SEF_RULE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["smart_filter"],
    "SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
  ),
  $component,
  array('HIDE_ICONS' => 'Y')
);?>
<?
}
?>


    </div>
    <div class="content-main">

<?
if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] == 'Y')
{
  $basketAction = (isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? $arParams['COMMON_ADD_TO_BASKET_ACTION'] : '');
}
else
{
  $basketAction = (isset($arParams['SECTION_ADD_TO_BASKET_ACTION']) ? $arParams['SECTION_ADD_TO_BASKET_ACTION'] : '');
}
$intSectionID = 0;
?><?$intSectionID = $APPLICATION->IncludeComponent(
  "bitrix:catalog.section",
  "",
  array(
    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
    "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
    "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
    "ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
    "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
    "META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
    "META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
    "BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
    "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
    "INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
    "BASKET_URL" => $arParams["BASKET_URL"],
    "ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
    "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
    "SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
    "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
    "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
    "FILTER_NAME" => $arParams["FILTER_NAME"],
    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
    "CACHE_TIME" => $arParams["CACHE_TIME"],
    "CACHE_FILTER" => $arParams["CACHE_FILTER"],
    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
    "SET_TITLE" => $arParams["SET_TITLE"],
    "MESSAGE_404" => $arParams["MESSAGE_404"],
    "SET_STATUS_404" => $arParams["SET_STATUS_404"],
    "SHOW_404" => $arParams["SHOW_404"],
    "FILE_404" => $arParams["FILE_404"],
    "DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
    "PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
    "LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
    "PRICE_CODE" => $arParams["PRICE_CODE"],
    "USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
    "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

    "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
    "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
    "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
    "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
    "PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],

    "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
    "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
    "PAGER_TITLE" => $arParams["PAGER_TITLE"],
    "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
    "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
    "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
    "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
    "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
    "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
    "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],

    "OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
    "OFFERS_FIELD_CODE" => $arParams["LIST_OFFERS_FIELD_CODE"],
    "OFFERS_PROPERTY_CODE" => $arParams["LIST_OFFERS_PROPERTY_CODE"],
    "OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
    "OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
    "OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
    "OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
    "OFFERS_LIMIT" => $arParams["LIST_OFFERS_LIMIT"],

    "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
    "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
    "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
    "USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
    'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
    'CURRENCY_ID' => $arParams['CURRENCY_ID'],
    'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],

    'LABEL_PROP' => $arParams['LABEL_PROP'],
    'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
    'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],

    'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
    'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
    'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
    'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
    'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
    'MESS_BTN_BUY' => $arParams['MESS_BTN_BUY'],
    'MESS_BTN_ADD_TO_BASKET' => $arParams['MESS_BTN_ADD_TO_BASKET'],
    'MESS_BTN_SUBSCRIBE' => $arParams['MESS_BTN_SUBSCRIBE'],
    'MESS_BTN_DETAIL' => $arParams['MESS_BTN_DETAIL'],
    'MESS_NOT_AVAILABLE' => $arParams['MESS_NOT_AVAILABLE'],

    'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
    "ADD_SECTIONS_CHAIN" => "Y",
    'ADD_TO_BASKET_ACTION' => $basketAction,
    'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
    'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare']
  ),
  $component
);?><?
$GLOBALS['CATALOG_CURRENT_SECTION_ID'] = $intSectionID;
unset($basketAction);
if (ModuleManager::isModuleInstalled("sale"))
{
  $arRecomData = array();
  $recomCacheID = array('IBLOCK_ID' => $arParams['IBLOCK_ID']);
  $obCache = new CPHPCache();
  if ($obCache->InitCache(36000, serialize($recomCacheID), "/sale/bestsellers"))
  {
    $arRecomData = $obCache->GetVars();
  }
  elseif ($obCache->StartDataCache())
  {
    if (Loader::includeModule("catalog"))
    {
      $arSKU = CCatalogSKU::GetInfoByProductIBlock($arParams['IBLOCK_ID']);
      $arRecomData['OFFER_IBLOCK_ID'] = (!empty($arSKU) ? $arSKU['IBLOCK_ID'] : 0);
    }
    $obCache->EndDataCache($arRecomData);
  }
  if (!empty($arRecomData))
  {
    if (!isset($arParams['USE_SALE_BESTSELLERS']) || $arParams['USE_SALE_BESTSELLERS'] != 'N')
    {
      ?><?$APPLICATION->IncludeComponent("bitrix:sale.bestsellers", "", array(
        "HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
        "PAGE_ELEMENT_COUNT" => "5",
        "SHOW_DISCOUNT_PERCENT" => $arParams['SHOW_DISCOUNT_PERCENT'],
        "PRODUCT_SUBSCRIPTION" => $arParams['PRODUCT_SUBSCRIPTION'],
        "SHOW_NAME" => "Y",
        "SHOW_IMAGE" => "Y",
        "MESS_BTN_BUY" => $arParams['MESS_BTN_BUY'],
        "MESS_BTN_DETAIL" => $arParams['MESS_BTN_DETAIL'],
        "MESS_NOT_AVAILABLE" => $arParams['MESS_NOT_AVAILABLE'],
        "MESS_BTN_SUBSCRIBE" => $arParams['MESS_BTN_SUBSCRIBE'],
        "LINE_ELEMENT_COUNT" => 5,
        "TEMPLATE_THEME" => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
        "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "BY" => array(
          0 => "AMOUNT",
        ),
        "PERIOD" => array(
          0 => "15",
        ),
        "FILTER" => array(
          0 => "CANCELED",
          1 => "ALLOW_DELIVERY",
          2 => "PAYED",
          3 => "DEDUCTED",
          4 => "N",
          5 => "P",
          6 => "F",
        ),
        "FILTER_NAME" => $arParams["FILTER_NAME"],
        "ORDER_FILTER_NAME" => "arOrderFilter",
        "DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
        "SHOW_OLD_PRICE" => $arParams['SHOW_OLD_PRICE'],
        "PRICE_CODE" => $arParams["PRICE_CODE"],
        "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
        "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
        "CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
        "CURRENCY_ID" => $arParams["CURRENCY_ID"],
        "BASKET_URL" => $arParams["BASKET_URL"],
        "ACTION_VARIABLE" => (!empty($arParams["ACTION_VARIABLE"]) ? $arParams["ACTION_VARIABLE"] : "action")."_slb",
        "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
        "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
        "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
        "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
        "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
        "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
        "SHOW_PRODUCTS_".$arParams["IBLOCK_ID"] => "Y",
        "OFFER_TREE_PROPS_".$arRecomData['OFFER_IBLOCK_ID'] => $arParams["OFFER_TREE_PROPS"],
        "ADDITIONAL_PICT_PROP_".$arParams['IBLOCK_ID'] => $arParams['ADD_PICT_PROP'],
        "ADDITIONAL_PICT_PROP_".$arRecomData['OFFER_IBLOCK_ID'] => $arParams['OFFER_ADD_PICT_PROP']
      ),
      $component,
      array("HIDE_ICONS" => "Y")
    );
    }
    if (!isset($arParams['USE_BIG_DATA']) || $arParams['USE_BIG_DATA'] != 'N')
    {
      ?><?$APPLICATION->IncludeComponent("bitrix:catalog.bigdata.products", "", array(
        "LINE_ELEMENT_COUNT" => 5,
        "TEMPLATE_THEME" => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
        "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
        "BASKET_URL" => $arParams["BASKET_URL"],
        "ACTION_VARIABLE" => (!empty($arParams["ACTION_VARIABLE"]) ? $arParams["ACTION_VARIABLE"] : "action")."_cbdp",
        "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
        "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
        "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
        "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
        "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
        "SHOW_OLD_PRICE" => $arParams['SHOW_OLD_PRICE'],
        "SHOW_DISCOUNT_PERCENT" => $arParams['SHOW_DISCOUNT_PERCENT'],
        "PRICE_CODE" => $arParams["PRICE_CODE"],
        "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
        "PRODUCT_SUBSCRIPTION" => $arParams['PRODUCT_SUBSCRIPTION'],
        "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
        "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
        "SHOW_NAME" => "Y",
        "SHOW_IMAGE" => "Y",
        "MESS_BTN_BUY" => $arParams['MESS_BTN_BUY'],
        "MESS_BTN_DETAIL" => $arParams['MESS_BTN_DETAIL'],
        "MESS_BTN_SUBSCRIBE" => $arParams['MESS_BTN_SUBSCRIBE'],
        "MESS_NOT_AVAILABLE" => $arParams['MESS_NOT_AVAILABLE'],
        "PAGE_ELEMENT_COUNT" => 5,
        "SHOW_FROM_SECTION" => "Y",
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "DEPTH" => "2",
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "SHOW_PRODUCTS_".$arParams["IBLOCK_ID"] => "Y",
        "HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
        "CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
        "CURRENCY_ID" => $arParams["CURRENCY_ID"],
        "SECTION_ID" => $intSectionID,
        "SECTION_CODE" => "",
        "SECTION_ELEMENT_ID" => "",
        "SECTION_ELEMENT_CODE" => "",
        "LABEL_PROP_".$arParams["IBLOCK_ID"] => $arParams['LABEL_PROP'],
        "PROPERTY_CODE_".$arParams["IBLOCK_ID"] => $arParams["LIST_PROPERTY_CODE"],
        "PROPERTY_CODE_".$arRecomData['OFFER_IBLOCK_ID'] => $arParams["LIST_OFFERS_PROPERTY_CODE"],
        "CART_PROPERTIES_".$arParams["IBLOCK_ID"] => $arParams["PRODUCT_PROPERTIES"],
        "CART_PROPERTIES_".$arRecomData['OFFER_IBLOCK_ID'] => $arParams["OFFERS_CART_PROPERTIES"],
        "ADDITIONAL_PICT_PROP_".$arParams["IBLOCK_ID"] => $arParams['ADD_PICT_PROP'],
        "ADDITIONAL_PICT_PROP_".$arRecomData['OFFER_IBLOCK_ID'] => $arParams['OFFER_ADD_PICT_PROP'],
        "OFFER_TREE_PROPS_".$arRecomData['OFFER_IBLOCK_ID'] => $arParams["OFFER_TREE_PROPS"],
        "RCM_TYPE" => (isset($arParams['BIG_DATA_RCM_TYPE']) ? $arParams['BIG_DATA_RCM_TYPE'] : '')
      ),
      $component,
      array("HIDE_ICONS" => "Y")
    );
    }
  }
}?>



  </div>
  </div>
  <div class="row">
    <p class="desc">
    <?=$ar_section['DESCRIPTION']?>
    </p>
  </div>
</div>

<?else: //главные разделы?>

<div class="container">
  <div class="row">
<?$APPLICATION->IncludeComponent(
  "bitrix:breadcrumb",
  "",
  Array(
    "PATH" => "",
    "SITE_ID" => "s1",
    "START_FROM" => "0"
  )
);?>
  </div>
  <div class="row">
    <div class="content-sidebar">

      <span class="subcategory_name"><?=$ar_section['NAME']?></span>

<?$APPLICATION->IncludeComponent(
  "bitrix:catalog.section.list",
  "subcategory-main",
  array(
    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
    "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
    "CACHE_TIME" => $arParams["CACHE_TIME"],
    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
    "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
    "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
    "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
    "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
    "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
    "ADD_SECTIONS_CHAIN" => 'N'
  ),
  $component,
  array("HIDE_ICONS" => "Y")
);?>
    </div>





    <div class="content-main">

<?$APPLICATION->IncludeComponent(
  "bitrix:catalog.section.list",
  "subcategory-second",
  array(
    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
    "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
    "CACHE_TIME" => $arParams["CACHE_TIME"],
    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
    "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
    "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
    "VIEW_MODE" => 'TILE',
    "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
    "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
    "ADD_SECTIONS_CHAIN" => 'Y'
  ),
  $component,
  array("HIDE_ICONS" => "Y")
);?>

    </div>
  </div>
</div>
<?if ($ar_section['DETAIL_PICTURE'] > 0):?>
<!-- <div class="jumbo"><img src="<?=CFile::GetPath($ar_section['DETAIL_PICTURE']);?>" alt=""></div> -->
<?endif;?>


  </div>
</div>

<div class="is-textured nill-class">
  <div class="container">
    <div class="row">
      <p class="desc">
      <?=$ar_section['DESCRIPTION']?>
      </p>
    </div>
    </div>
</div>
<div class="container">
  <div class="row">
    <h1>Популярные товары</h1>
  </div>
<?
global $arrFilter;
$arrFilter = array (
  "PROPERTY_popular"=>"138",
  "SECTION_ID" => $ar_section['ID'],
  "INCLUDE_SUBSECTIONS" => 'Y'
);?>
<?$APPLICATION->IncludeComponent(
  "bitrix:catalog.section", 
  "featured", 
  array(
    "ACTION_VARIABLE" => "action",
    "ADD_PICT_PROP" => "-",
    "ADD_PROPERTIES_TO_BASKET" => "Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "BACKGROUND_IMAGE" => "-",
    "BASKET_URL" => "/personal/basket.php",
    "BROWSER_TITLE" => "-",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "COMPATIBLE_MODE" => "Y",
    "DETAIL_URL" => "",
    "DISABLE_INIT_JS_IN_COMPONENT" => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_COMPARE" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "ELEMENT_SORT_FIELD" => "sort",
    "ELEMENT_SORT_FIELD2" => "id",
    "ELEMENT_SORT_ORDER" => "asc",
    "ELEMENT_SORT_ORDER2" => "desc",
    "ENLARGE_PRODUCT" => "STRICT",
    "FILTER_NAME" => "arrFilter",
    "IBLOCK_ID" => "6",
    "IBLOCK_TYPE" => "catalog",
    "INCLUDE_SUBSECTIONS" => "Y",
    "LABEL_PROP" => "-",
    "LAZY_LOAD" => "N",
    "LINE_ELEMENT_COUNT" => "4",
    "LOAD_ON_SCROLL" => "N",
    "MESSAGE_404" => "",
    "MESS_BTN_ADD_TO_BASKET" => "В корзину",
    "MESS_BTN_BUY" => "Купить",
    "MESS_BTN_COMPARE" => "Сравнить",
    "MESS_BTN_DETAIL" => "Подробнее",
    "MESS_BTN_SUBSCRIBE" => "Подписаться",
    "MESS_NOT_AVAILABLE" => "Нет в наличии",
    "META_DESCRIPTION" => "-",
    "META_KEYWORDS" => "-",
    "OFFERS_LIMIT" => "5",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Товары",
    "PAGE_ELEMENT_COUNT" => "8",
    "PARTIAL_PRODUCT_PROPERTIES" => "N",
    "PRICE_CODE" => array(
    ),
    "PRICE_VAT_INCLUDE" => "Y",
    "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
    "PRODUCT_ID_VARIABLE" => "id",
    "PRODUCT_PROPERTIES" => array(
    ),
    "PRODUCT_PROPS_VARIABLE" => "prop",
    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
    "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
    "PROPERTY_CODE" => array(
      0 => "nalichie",
      1 => "price_kvm",
      2 => "price_sht",
      3 => "",
    ),
    "PROPERTY_CODE_MOBILE" => "",
    "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
    "RCM_TYPE" => "personal",
    "SECTION_CODE" => "",
    "SECTION_ID" => "",
    "SECTION_ID_VARIABLE" => "SECTION_ID",
    "SECTION_URL" => "",
    "SECTION_USER_FIELDS" => array(
      0 => "",
      1 => "",
    ),
    "SEF_MODE" => "N",
    "SET_BROWSER_TITLE" => "Y",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "Y",
    "SET_META_KEYWORDS" => "Y",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "Y",
    "SHOW_404" => "N",
    "SHOW_ALL_WO_SECTION" => "Y",
    "SHOW_FROM_SECTION" => "N",
    "SHOW_PRICE_COUNT" => "1",
    "SHOW_SLIDER" => "Y",
    "SLIDER_INTERVAL" => "3000",
    "SLIDER_PROGRESS" => "N",
    "TEMPLATE_THEME" => "blue",
    "USE_ENHANCED_ECOMMERCE" => "N",
    "USE_MAIN_ELEMENT_SECTION" => "N",
    "USE_PRICE_COUNT" => "N",
    "USE_PRODUCT_QUANTITY" => "N",
    "COMPONENT_TEMPLATE" => "featured"
  ),
  false
);?>
</div>
<div class="mb70"></div>
<?endif;?>
