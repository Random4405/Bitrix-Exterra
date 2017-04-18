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
$this->setFrameMode(true);
$templateLibrary = array('popup');
$currencyList = '';
if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}
$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);

$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
	'ID' => $strMainID,
	'PICT' => $strMainID.'_pict',
	'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
	'STICKER_ID' => $strMainID.'_sticker',
	'BIG_SLIDER_ID' => $strMainID.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
	'SLIDER_LIST' => $strMainID.'_slider_list',
	'SLIDER_LEFT' => $strMainID.'_slider_left',
	'SLIDER_RIGHT' => $strMainID.'_slider_right',
	'OLD_PRICE' => $strMainID.'_old_price',
	'PRICE' => $strMainID.'_price',
	'DISCOUNT_PRICE' => $strMainID.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
	'QUANTITY' => $strMainID.'_quantity',
	'QUANTITY_DOWN' => $strMainID.'_quant_down',
	'QUANTITY_UP' => $strMainID.'_quant_up',
	'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
	'BASIS_PRICE' => $strMainID.'_basis_price',
	'BUY_LINK' => $strMainID.'_buy_link',
	'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
	'BASKET_ACTIONS' => $strMainID.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
	'COMPARE_LINK' => $strMainID.'_compare_link',
	'PROP' => $strMainID.'_prop_',
	'PROP_DIV' => $strMainID.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
	'OFFER_GROUP' => $strMainID.'_set_group_',
	'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
);
$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);
$templateData['JS_OBJ'] = $strObName;

$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);
$arFirstPhoto = current($arResult['MORE_PHOTO']);
?>
  <div class="row two-column-wrapper" id="<? echo $arItemIDs['ID']; ?>">
    <div class="left-wrapper">
      <div class="img-wrapper slider-for">
		<?foreach ($arResult['PROPERTIES']['photo']['VALUE'] as $photo):?>
			<div><img src="<?=CFile::GetPath($photo)?>" alt=""></div>
		<?endforeach;?>
      </div>
    </div>
    <div class="right-wrapper">
      <div class="left-wrapper flex-col">
        <div class="information-wrapper">
          <h4><?
			echo (
				isset($arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"] != ''
				? $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"]
				: $arResult["NAME"]
			); ?>
		  </h4>
          <br>
          <p class="cost">Цена: <span class="cost-green"><?=$arResult['DISPLAY_PROPERTIES']['price_sht']['VALUE']?></span></p>
          <p class="cost">Цена: <span class="cost-green"><?=$arResult['DISPLAY_PROPERTIES']['price_kvm']['VALUE']?></p>
          <?if ($arResult['DISPLAY_PROPERTIES']['new']['VALUE']):?>
			<div class="sticker-new"></div>
		  <?endif;?>
		  <?if ($arResult['DISPLAY_PROPERTIES']['nalichie']['VALUE']):?>
			<div class="sticker-in"></div>
		  <?endif;?>
		  <table>
		  <?foreach ($arResult['DISPLAY_PROPERTIES'] as $key => &$arOneProp)
		{
			if ($key == 'price_sht' || $key == 'price_kvm' || $key == 'nalichie' || $key == 'new' || $key == 'additional_products') continue;
			?>
		<tr><td><? echo $arOneProp['NAME'];?></td><td><?
			echo (
				is_array($arOneProp['DISPLAY_VALUE'])
				? implode(' / ', $arOneProp['DISPLAY_VALUE'])
				: $arOneProp['DISPLAY_VALUE']
			); ?></td></tr><?
		}
		unset($arOneProp);?>
		</table>
          
        </div>
        <div class='catalog-button'>
          <div class="link-description">Понравился товар?</div>
          <a href="#">Заказать</a>
        </div>
      </div>
      <div class="right-wrapper flex-col">
        <div class="slider-nav">
		<?foreach ($arResult['PROPERTIES']['photo']['VALUE'] as $key => $photo2):
			$file = CFile::ResizeImageGet($photo2, array('width'=>300, 'height'=>70), BX_RESIZE_IMAGE_EXACT , true); 
               
		?>
		 <div class="slick-vertical-wrapper">
			<?if ($arResult['PROPERTIES']['photo']['DESCRIPTION'][$key]):?>
            <div class="texture-name"><?=$arResult['PROPERTIES']['photo']['DESCRIPTION'][$key]?></div>
			<?endif;?>
            <img src="<?=$file['src']?>" alt="">
          </div>
		<?endforeach;?>
        </div>
		
		<?if ($arResult['PROPERTIES']['archive']['VALUE']):?>
			<div class='catalog-button'>
			  <div class="link-description">Узнать больше</div>
				<a class='green-button' href="<?=CFile::GetPath($arResult['PROPERTIES']['archive']['VALUE'])?>">Скачать текстуры в 1 клик</a>
			</div>
		<?endif;?>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="left-wrapper">
      <div class="slider-product" data-slick='{
      "slidesToShow": 3,
      "infinite": true,
      "centerMode": false,
      "focusOnSelect": true
      }'>
	    <?foreach ($arResult['PROPERTIES']['photo_obj']['VALUE'] as $photo3):?>
			<div><img src="<?=CFile::GetPath($photo3)?>" alt=""></div>
		<?endforeach;?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'Tab1')">Описание</button>
      <button class="tablinks" onclick="openCity(event, 'Tab2')">Документация</button>
      <button class="tablinks" onclick="openCity(event, 'Tab3')">3D текстуры</button>
      <button class="tablinks" onclick="openCity(event, 'Tab4')">Проекты</button>
      <button class="tablinks" onclick="openCity(event, 'Tab5')">Каталоги</button>
    </div>

    <div id="Tab1" class="tabcontent maintab">
      <p>
		<?=$arResult['DETAIL_TEXT']?$arResult['DETAIL_TEXT']:$arResult['PREVIEW_TEXT']?>
      </p>
    </div>

    <div id="Tab2" class="tabcontent">
      <p>2</p>
    </div>

    <div id="Tab3" class="tabcontent">
      <p>3</p>
    </div>

    <div id="Tab4" class="tabcontent">
      <p>4</p>
    </div>

    <div id="Tab5" class="tabcontent">
      <p>5</p>
    </div>

  </div>
  
 
<?if ($arResult['PROPERTIES']['additional_products']['VALUE']):?>

<?
foreach ($arResult['PROPERTIES']['additional_products']['VALUE'] as $additional) {
	$arAdditional[] = $additional;
}
?>

<div class="row">
	<h1 class="title">С этим товаром покупают</h1>
</div>
 <?
  global $arrFilter2;
  $arrFilter2 = array (
	"ID" => $arAdditional
  );?>
  <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"featured",
	Array(
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
		"FILTER_NAME" => "arrFilter2",
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
		"PAGE_ELEMENT_COUNT" => "4",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PROPERTY_CODE" => array("nalichie", "price_kvm", "price_sht", ""),
		"PROPERTY_CODE_MOBILE" => array(),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("", ""),
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
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
<?endif;?>