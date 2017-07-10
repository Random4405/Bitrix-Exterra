<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script> <script type="text/javascript">
// Создает обработчик события window.onLoad
YMaps.jQuery(function () {
  // Создает экземпляр карты и привязывает его к созданному контейнеру
  var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

  // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
  map.setCenter(new YMaps.GeoPoint( 34.09968554, 44.94498676), 18);
  var s = new YMaps.Style();

  // Создает стиль значка метки
  s.iconStyle = new YMaps.IconStyle();
  s.iconStyle.href = "/images/map-marker.png";
  s.iconStyle.size = new YMaps.Point(71, 94);
  s.iconStyle.offset = new YMaps.Point(-35, -94);

  var placemark = new YMaps.Placemark(new YMaps.GeoPoint( 34.09968554, 44.94498676), {style: s});
  // Создает стиль
  // Добавляет метку на карту
  map.addOverlay(placemark);
})
</script>
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
		<h1 class="is-top-margin-disabled">Контакты</h1>
	</div>
	<div class="row">
		<div class="l-double-row">
			<div class="text-wrapper text-wrapper--small">
				<h3>ШОУ-РУМ</h3>
				<p>
					 Адрес шоу-рума:
				</p>
				<p>
					 Республика Крым
				</p>
				<p>
					 г. Симферополь, ул.Турецкая 29
				</p>
				<p>
					 295011
				</p>
 <br>
				<p>
					 Тел.: +7 (978) 111-70-73 
                                <p>
    					 Андрей Швырев
				</p>
			</div>
			<div class="text-wrapper text-wrapper--large">
				 <?$APPLICATION->IncludeComponent(
	"custom:main.feedback",
	"feedback_contacts",
	Array(
		"COMPONENT_TEMPLATE" => "feedback_contacts",
		"EMAIL_TO" => "dvsiteminsk@gmail.com",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"EXT_FIELDS" => array(0=>"Телефон",1=>"",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NONE",),
		"USE_CAPTCHA" => "N"
	)
);?>
			</div>
		</div>
	</div>
</div>
<div class="fullwidth-wrapper" id="YMapsID" style="width: 100%; height: 500px;">
</div>
<div class="fullwidth-wrapper hero--slick hero--slick--nofilter">
 <img src="/images/contacts-build.jpg" alt="">
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>