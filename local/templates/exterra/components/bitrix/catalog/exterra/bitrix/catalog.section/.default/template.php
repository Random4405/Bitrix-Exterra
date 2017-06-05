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
?>
<div class="category-pager"><?
	if ($arParams["DISPLAY_TOP_PAGER"])
	{
		echo $arResult["NAV_STRING"];
	}
?></div>
<?
if (!empty($arResult['ITEMS']))
{
$num = 0;
foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	$strMainID = $this->GetEditAreaId($arItem['ID']);

	$productTitle = (
		isset($arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])&& $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] != ''
		? $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
		: $arItem['NAME']
	);
	
	$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array('width'=>288, 'height'=>288), BX_RESIZE_IMAGE_EXACT , true);                
		
	if ($num == 0) echo '<div class="flex-row no-margin mb20">';
	?>	
      <div class="flex-product-wrapper" id="<? echo $strMainID; ?>">
      <?if ($arItem['DISPLAY_PROPERTIES']['nalichie']['VALUE']):?>
            <p class="green">В наличии</p>
      <?endif;?>
        <div class="img-product-wrapper"><a href="<? echo $arItem['DETAIL_PAGE_URL']; ?>"><img class="img-responsive" src="<?=$file['src']?>" alt=""></a></div>
        <h3><a href="<? echo $arItem['DETAIL_PAGE_URL']; ?>"><? echo $productTitle; ?></a></h3>
        <div class="product-desc">
          <div class="left-product-wrapper">
			<?if ($arItem['DISPLAY_PROPERTIES']['price_sht']['VALUE']):?>
            <div class="product-cost">
              <p><?=$arItem['DISPLAY_PROPERTIES']['price_sht']['VALUE']?></p>
            </div>
			<?endif;?>
      <?if ($arItem['DISPLAY_PROPERTIES']['price_kvm']['VALUE']):?>
            <div class="product-cost">
              <p><?=$arItem['DISPLAY_PROPERTIES']['price_kvm']['VALUE']?></p>
            </div>
      <?endif;?>
          </div>
          <div class="right-product-wrapper">
            <a class="product-button" href="#" onclick="event.preventDefault();buyForm('<?=$arItem['NAME']?>');">Купить сейчас</a>
          </div>
        </div>
      </div>


<?
$num++;
if ($num == 3) {
	$num = 0;
	echo '</div>';
}
}
if ($num > 0) echo '</div>';

}
?>
<div class="category-pager">
<?
	if ($arParams["DISPLAY_BOTTOM_PAGER"])
	{
		echo $arResult["NAV_STRING"];
	}
?>
</div>
