<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array()
	);?>

	<div class="container">
    <div class="row">
      <div class="contacts-flex-wrapper">
        <div class="contacts-left col-sm-3">
          <h1 class='show-room'>ШОУ-РУМ</h1>
          <p><span>Адрес шоу-рума:</span></p>
          <p>Республика Крым</p>
          <p>г. Симферополь, ул.Турецкая 29</p>
          <p>295011</p>
          <p>Тел.: +7 (920) 474-11-11</p>
        </div>
        <div class="contacts-right col-sm-9">
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>