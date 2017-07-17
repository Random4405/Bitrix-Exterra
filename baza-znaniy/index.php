<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ООО 'Экстерра Групп' | БАЗА ЗНАНИЙ");
?><div class="container">
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
<div class="row gutter-bottom">
 <h1>База знаний</h1>
            <div class="paragraph">
<div style="float: left; display: block; width: 50%;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/rbKYtfB3GsU" frameborder="0" allowfullscreen></iframe>
</div>
<div style="float: left; display: block; width: 50%;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/kmvFmteu70c" frameborder="0" allowfullscreen></iframe>
</div>
				<div style="float: left; display: block; width: 100%;">&nbsp;</div>
<div style="float: left; display: block; width: 50%;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/8Kyc9bNpSA8" frameborder="0" allowfullscreen></iframe>
</div>
<div style="float: left; display: block; width: 50%;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/TGDr675SbQ0" frameborder="0" allowfullscreen></iframe>
</div>

</div>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>