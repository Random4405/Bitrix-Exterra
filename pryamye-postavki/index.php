<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Прямые поставки");
?>
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
</div>


<div class="container">
  <div class="row">
            <h1 class="is-no-top-margin">Прямые поставки</h1>
             <p>"Экстерра Групп" - компания, чётко ориентированная на продажу потребителям только качественных строительных материалов.</p>
            </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>