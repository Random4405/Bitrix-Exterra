<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/gallery/([a-zA-Z0-9\\.\\-_]+)/?.*#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/gallery/detail.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/products/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/products/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/catalog/index.php",
	),
);

?>