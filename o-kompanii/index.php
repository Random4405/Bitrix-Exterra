<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<?$APPLICATION->IncludeComponent(
  "bitrix:breadcrumb",
  "",
  Array(
    "PATH" => "",
    "SITE_ID" => "s1",
    "START_FROM" => "0"
  )
);?>

<h1 class="title title-50px">Только качественные строительные материалы</h1>

<div class="slick">
  <div><img src="/images/realize/1photo.jpg" alt=""></div>
  <div><img src="/images/realize/2photo.jpg" alt=""></div>
  <div><img src="/images/realize/3photo.jpg" alt=""></div>
  <div><img src="/images/realize/4photo.jpg" alt=""></div>
  <div><img src="/images/realize/5photo.jpg" alt=""></div>
  <div><img src="/images/realize/6photo.jpg" alt=""></div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>