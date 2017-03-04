<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<div class="form-wrapper">
  <?$APPLICATION->IncludeComponent("custom:main.feedback", "feedback_main", Array(
    "EMAIL_TO" => "dvsiteminsk@gmail.com",  // E-mail, на который будет отправлено письмо
      "EVENT_MESSAGE_ID" => array(  // Почтовые шаблоны для отправки письма
        0 => "7",
      ),
      "OK_TEXT" => "Спасибо, ваше сообщение принято.",  // Сообщение, выводимое пользователю после отправки
      "REQUIRED_FIELDS" => array( // Обязательные поля для заполнения
        0 => "NONE",
      ),
      "USE_CAPTCHA" => "N", // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
      "COMPONENT_TEMPLATE" => ".default",
      "EXT_FIELDS" => array(  // Дополнительные поля
        0 => "Телефон",
        1 => "",
      )
    ),
    false
  );?>
</div>

<footer>
  <div class="container">
    <div class="row">
      <h1>Адрес</h1>
      <div class="footer-contacts">
        <a class="footer-logo clearfix" href="/"><img src="/images/logo-terra.png" alt="" class="img-responsive" /></a>
        <p>ООО «Экстерра групп»</p>
        <p>Адрес: 350059, г. Краснодар, ул.Уральская, д.114, помещение 3</p>
        <p>Е-mail: info@exterragroup.ru</p>
        <p>Телефоны: 8 (920) 474 11 11     8 (920) 474 11 11</p>
      </div>
      <div class="footer-menu">
        <?$APPLICATION->IncludeComponent(
        	"bitrix:menu",
        	"bottom_menu",
        	array(
        		"ALLOW_MULTI_SELECT" => "N",
        		"CHILD_MENU_TYPE" => "left",
        		"DELAY" => "N",
        		"MAX_LEVEL" => "2",
        		"MENU_CACHE_GET_VARS" => array(
        		),
        		"MENU_CACHE_TIME" => "3600",
        		"MENU_CACHE_TYPE" => "A",
        		"MENU_CACHE_USE_GROUPS" => "Y",
        		"ROOT_MENU_TYPE" => "bottom",
        		"USE_EXT" => "N",
        		"COMPONENT_TEMPLATE" => "bottom_menu"
        	),
        	false
        );?>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <p>2016 FenixITGroup: Разработка и продвижение сайтов.</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>