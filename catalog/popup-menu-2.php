
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>

<!-- САМА ФОРМА ТУТ -->


    <div class="popup-form">
      <div class="popup-form-wrapper">
        <form>
            <i class="fa fa-close"></i>
          <legend>Заказать звонок</legend>
          <fieldset>
            <input required type="text" placeholder="Имя:*">
            <input required type="text" placeholder="Телефон:*">
            <input type="text" placeholder="Время:">
            <input class="submit" type="submit" value="ОТПРАВИТЬ">
          </fieldset>
        </form>
      </div>
      <div class="popup-background"></div>
    </div>


<!-- САМА ФОРМА ТУТ -->

<?$APPLICATION->IncludeComponent(
  "bitrix:catalog",
  "exterra",
  array(
    "ACTION_VARIABLE" => "action",
    "ADD_ELEMENT_CHAIN" => "Y",
    "ADD_PICT_PROP" => "-",
    "ADD_PROPERTIES_TO_BASKET" => "Y",
    "ADD_SECTIONS_CHAIN" => "Y",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "BASKET_URL" => "/personal/basket.php",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
    "DETAIL_BACKGROUND_IMAGE" => "-",
    "DETAIL_BRAND_USE" => "N",
    "DETAIL_BROWSER_TITLE" => "-",
    "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
    "DETAIL_DETAIL_PICTURE_MODE" => "IMG",
    "DETAIL_DISPLAY_NAME" => "Y",
    "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
    "DETAIL_META_DESCRIPTION" => "-",
    "DETAIL_META_KEYWORDS" => "-",
    "DETAIL_PROPERTY_CODE" => array(
      0 => "brend",
      1 => "nalichie",
      2 => "new",
      3 => "ottenok",
      4 => "pokrytie",
      5 => "profil",
      6 => "razmer",
      7 => "additional_products",
      8 => "country_prod",
      9 => "tolchina",
      10 => "ton",
      11 => "faska",
      12 => "format",
      13 => "price_kvm",
      14 => "price_sht",
      15 => "photo",
      16 => "photo_obj",
      17 => "archive",
      18 => "",
    ),
    "DETAIL_SET_CANONICAL_URL" => "N",
    "DETAIL_USE_COMMENTS" => "N",
    "DETAIL_USE_VOTE_RATING" => "N",
    "DISABLE_INIT_JS_IN_COMPONENT" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "ELEMENT_SORT_FIELD" => "sort",
    "ELEMENT_SORT_FIELD2" => "id",
    "ELEMENT_SORT_ORDER" => "asc",
    "ELEMENT_SORT_ORDER2" => "desc",
    "FILTER_VIEW_MODE" => "VERTICAL",
    "IBLOCK_ID" => "6",
    "IBLOCK_TYPE" => "catalog",
    "INCLUDE_SUBSECTIONS" => "Y",
    "INSTANT_RELOAD" => "N",
    "LABEL_PROP" => "-",
    "LINE_ELEMENT_COUNT" => "3",
    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
    "LINK_IBLOCK_ID" => "",
    "LINK_IBLOCK_TYPE" => "",
    "LINK_PROPERTY_SID" => "",
    "LIST_BROWSER_TITLE" => "-",
    "LIST_META_DESCRIPTION" => "-",
    "LIST_META_KEYWORDS" => "-",
    "LIST_PROPERTY_CODE" => array(
      0 => "nalichie",
      1 => "price_kvm",
      2 => "price_sht",
      3 => "",
    ),
    "MESSAGE_404" => "",
    "MESS_BTN_ADD_TO_BASKET" => "В корзину",
    "MESS_BTN_BUY" => "Купить",
    "MESS_BTN_COMPARE" => "Сравнение",
    "MESS_BTN_DETAIL" => "Подробнее",
    "MESS_NOT_AVAILABLE" => "Нет в наличии",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Товары",
    "PAGE_ELEMENT_COUNT" => "30",
    "PARTIAL_PRODUCT_PROPERTIES" => "N",
    "PRICE_CODE" => array(
    ),
    "PRICE_VAT_INCLUDE" => "Y",
    "PRICE_VAT_SHOW_VALUE" => "N",
    "PRODUCT_ID_VARIABLE" => "id",
    "PRODUCT_PROPERTIES" => array(
    ),
    "PRODUCT_PROPS_VARIABLE" => "prop",
    "PRODUCT_QUANTITY_VARIABLE" => "",
    "SECTIONS_SHOW_PARENT_NAME" => "Y",
    "SECTIONS_VIEW_MODE" => "LIST",
    "SECTION_BACKGROUND_IMAGE" => "-",
    "SECTION_COUNT_ELEMENTS" => "Y",
    "SECTION_ID_VARIABLE" => "SECTION_ID",
    "SECTION_TOP_DEPTH" => "2",
    "SEF_FOLDER" => "/catalog/",
    "SEF_MODE" => "Y",
    "SET_LAST_MODIFIED" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "Y",
    "SHOW_404" => "N",
    "SHOW_DEACTIVATED" => "N",
    "SHOW_PRICE_COUNT" => "1",
    "SHOW_TOP_ELEMENTS" => "Y",
    "SIDEBAR_DETAIL_SHOW" => "Y",
    "SIDEBAR_PATH" => "",
    "SIDEBAR_SECTION_SHOW" => "Y",
    "TEMPLATE_THEME" => "blue",
    "TOP_ELEMENT_COUNT" => "9",
    "TOP_ELEMENT_SORT_FIELD" => "sort",
    "TOP_ELEMENT_SORT_FIELD2" => "id",
    "TOP_ELEMENT_SORT_ORDER" => "asc",
    "TOP_ELEMENT_SORT_ORDER2" => "desc",
    "TOP_LINE_ELEMENT_COUNT" => "3",
    "TOP_PROPERTY_CODE" => array(
      0 => "",
      1 => "",
    ),
    "TOP_VIEW_MODE" => "SECTION",
    "USE_COMPARE" => "N",
    "USE_ELEMENT_COUNTER" => "Y",
    "USE_FILTER" => "Y",
    "USE_MAIN_ELEMENT_SECTION" => "N",
    "USE_PRICE_COUNT" => "N",
    "USE_PRODUCT_QUANTITY" => "N",
    "USE_STORE" => "N",
    "COMPONENT_TEMPLATE" => "exterra",
    "DETAIL_STRICT_SECTION_CHECK" => "N",
    "COMPATIBLE_MODE" => "Y",
    "FILTER_NAME" => "arrFilter",
    "FILTER_FIELD_CODE" => array(
      0 => "",
      1 => "",
    ),
    "FILTER_PROPERTY_CODE" => array(
      0 => "brend",
      1 => "nalichie",
      2 => "oblast_prim",
      3 => "ottenok",
      4 => "pokrytie",
      5 => "profil",
      6 => "razmer",
      7 => "additional_products",
      8 => "country_prod",
      9 => "tolchina",
      10 => "ton",
      11 => "faska",
      12 => "format",
      13 => "price_kvm",
      14 => "price_sht",
      15 => "",
    ),
    "FILTER_PRICE_CODE" => array(
      0 => "price_kvm",
      1 => "price_sht",
    ),
    "SEF_URL_TEMPLATES" => array(
      "sections" => "",
      "section" => "#SECTION_CODE_PATH#/",
      "element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
      "compare" => "compare.php?action=#ACTION_CODE#",
      "smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
    ),
    "VARIABLE_ALIASES" => array(
      "compare" => array(
        "ACTION_CODE" => "action",
      ),
    )
  ),
  false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
