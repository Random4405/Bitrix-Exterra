<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>





<footer>
  <div class="container">
    <div class="row">
      <h1>Адрес</h1>
      <div class="footer-contacts">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          ".default",
          array(
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "inc_bottom_logo",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_RECURSIVE" => "Y"
          ),
          false
        );?>
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
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>
    $(document).ready(function(){
      $('.slick').slick({
          infinite: true,
          centerMode: true,
          slidesToShow: 3,
          autoplay: true,
          autoplaySpeed: 2000,
          variableWidth: true,
      });
    });
</script>
<script>
    $(document).ready(function(){
      $('.slick-main').slick({
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
      });
    });
</script>
</body>
</html>