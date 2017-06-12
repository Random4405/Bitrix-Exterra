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
      );?> </div> </div>

  <div class="container">
    <div class="row">
      <h1 class="is-top-margin-disabled">Контакты</h1>
    </div>
    <div class="row">
      <div class="l-double-row">
        <div class="text-wrapper text-wrapper--small">
          <h3>ШОУ-РУМ</h3>
          <p><span>Адрес шоу-рума:</span></p>
          <p>Республика Крым</p>
          <p>г. Симферополь, ул.Турецкая 29</p>
          <p>295011</p>
          <br>
          <p>Тел.: +7 (920) 474-11-11</p>
        </div>
        <div class="text-wrapper text-wrapper--large">
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
  </div>
  <div class="fullwidth-wrapper"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4d2a404448fb4e06a091d07f272cb27e1eee102051d1ae1339e80007bda67f1a&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script> </div>
  <div class="fullwidth-wrapper hero--slick hero--slick--nofilter"><img src="/images/contacts-build.png" alt=""></div>

  <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
