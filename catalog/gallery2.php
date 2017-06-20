
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
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
<div class="row flex-row flex-row__images">
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
<a href="/images/sand.png" data-lightbox="page1" alt=""><img src="/images/sand.png" alt=""></a>
</div>
</div>

<div class="mb70"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
