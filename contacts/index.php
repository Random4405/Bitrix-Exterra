<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
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

	<div class="container bg-white">
  <div class="row">
    <h1 class="title">Контакты</h1>
  </div>
    <div class="row">
      <div class="contacts-flex-wrapper">
        <div class="contacts-left">
          <h1 class='show-room'>ШОУ-РУМ</h1>
          <p><span>Адрес шоу-рума:</span></p>
          <p>Республика Крым</p>
          <p>г. Симферополь, ул.Турецкая 29</p>
          <p>295011</p>
          <p>Тел.: +7 (920) 474-11-11</p>
        </div>
        <div class="contacts-right">
          <?$APPLICATION->IncludeComponent(
            "custom:main.feedback",
            "feedback_contacts",
            array(
              "COMPONENT_TEMPLATE" => "feedback_contacts",
              "EMAIL_TO" => "dvsiteminsk@gmail.com",
              "EVENT_MESSAGE_ID" => array(
                0 => "7",
              ),
              "EXT_FIELDS" => array(
                0 => "Телефон",
                1 => "",
              ),
              "OK_TEXT" => "Спасибо, ваше сообщение принято.",
              "REQUIRED_FIELDS" => array(
                0 => "NONE",
              ),
              "USE_CAPTCHA" => "N"
            ),
            false
          );?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="map-placeholder"><img src="/images/map-placeholder.png" alt=""></div>
    </div>
    <div class="row">
      <div class="contacts-building"><img src="/images/contacts-build.png" alt=""></div>
    </div>
    <div class="row">
      <h1 class="title title-50px">Только качественные строительные материалы</h1>
    </div>
  </div>
    <div class="slick f-no-bottom-margin constacts-slick">
      <div><img src="/images/realize/1photo.jpg" alt=""></div>
      <div><img src="/images/realize/2photo.jpg" alt=""></div>
      <div><img src="/images/realize/3photo.jpg" alt=""></div>
      <div><img src="/images/realize/4photo.jpg" alt=""></div>
      <div><img src="/images/realize/5photo.jpg" alt=""></div>
      <div><img src="/images/realize/6photo.jpg" alt=""></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
