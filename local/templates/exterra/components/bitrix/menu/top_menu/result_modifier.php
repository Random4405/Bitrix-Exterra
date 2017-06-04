<?
if (CModule::IncludeModule("iblock")){
	foreach($arResult as $key => $arItem){
		if (substr_count($arItem['LINK'], '/catalog/')){
		
		
			$arFilter = array('IBLOCK_ID' => 6, 'NAME' => $arItem['TEXT']);
			$rsSect = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter, false, array('UF_MENU_PICTURE'));
			while ($arSect = $rsSect->GetNext())
			{
			   $arResult[$key]['PICTURE'] = CFile::GetPath($arSect['UF_MENU_PICTURE']);
			}
		}
	}
}
?>