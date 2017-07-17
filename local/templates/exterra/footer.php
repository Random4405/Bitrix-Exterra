<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>





<footer>
  <div class="container">
    <div class="row">
      <div class="footer--menu">
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
		<div class="footer--contacts" style="line-height: 2.0 !important;">
		  <p>&copy; 2017 ООО «Экстерра групп» | Республика Крым г. Симферополь, ул.Турецкая 29 | Е-mail: info@exterragroup.ru | Телефон: +7 (978) 111-70-73 </p>
		  <p style="text-align: center;"> <a href="http://exterragroup.ru/pravovaya-informacia/">Правовая информация</a></p>
	  </div>

    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <p>Разработка сайта - FenixITGroup</p>
      </div>
    </div>
  </div>
</footer>

<!-- Форма звонка -->


<div class="popup-form-call" style="display: none;">
  <div class="popup-form-wrapper">
    <form id="form_call" action="javascript:void(null);" method="POST">
      <i class="fa fa-close" onclick="callFormClose();"></i>
      <legend>Заказать звонок</legend>
      <fieldset>
      <input type="hidden" name="form_name" value="call_form">
        <input name="name" id="name_call" required type="text" placeholder="Имя:*">
        <input name="phone" id="phone_call" required type="text" placeholder="Телефон:*">
        <input name="time" type="text" placeholder="Время:">
        <p class="confirm-text">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных<br></p>
        <input id="confirm_call" onclick="SendResult('call'); callFormClose();" class="submit" type="submit" value="ОТПРАВИТЬ">
      </fieldset>
    </form>
  </div>
  <div class="popup-background" onclick="callFormClose();"></div>
</div>


<!-- Форма звонка -->

<!-- САМА ФОРМА ТУТ -->

<div class="popup-form" style="display: none;">
  <div class="popup-form-wrapper">
  <form enctype="multipart/form-data" id="form_product" action="javascript:void(null);" method="POST">
    <i class="fa fa-close" onclick="buyFormClose();"></i>
    <legend>Заказ товара</legend>
    <fieldset>
      <input type="hidden" name="form_name" value="product_form">
      <input id="name" name="name" required type="text" placeholder="Имя:*">
      <input id="phone" name="phone" required id="phone" type="text" placeholder="Телефон:*">
      <input name="product" id="productname" type="text" placeholder="Название товара:">
      <input id="email" name="email" type="text" placeholder="E-mail:">
      <input id="col" name="col" type="text" placeholder="Количество:">
      <select id="units" name="units">
        <option>шт.</option>
        <option>кг.</option>
        <option>кв.м</option>
      </select>
      <input type="file" name="uploaded_file" id="uploaded_file" />
      <textarea name="message" placeholder="Комментарий:"></textarea>
        <p class="confirm-text">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных<br></p>
      <input id="confirm" onclick="SendResult('product'); buyFormClose();" class="submit" type="submit" value="ОТПРАВИТЬ">
    </fieldset>
  </form>
  </div>
  <div class="popup-background" onclick="buyFormClose();"></div>
</div>


<script>
$("#phone").mask("+7 861 (99) 999-99-99");
$("#phone_call").mask("+7 861 (99) 999-99-99");
</script>


<script type="text/javascript">

document.getElementById('confirm_call').disabled = true;
$('#confirm_call').css('background', 'grey')


  $(document).ready(function() {
    $("#name_call").keyup(function(){
      var name = $("#name_call").val();
      if(name != 0)
      {
        if(name)
        {
            $('#name_call').css('border', '1px solid transparent')
              isValidAllCall();
        } else {
            $('#name_call').css('border', '1px solid #e02222')
              isValidAllCall();
        }
      } else {
          $('#name_call').css('border', '1px solid #e02222')
          isValidAllCall();
      }
    });
  });


$(document).ready(function() {
  $("#phone_call").keyup(function(){

    var phone = $("#phone_call").val();

    if(phone != 0)
    {
      if(isValidPhone(phone))
      {
          $('#phone_call').css('border', '1px solid transparent')
            isValidAllCall();
      } else {
          $('#phone_call').css('border', '1px solid #e02222')
            isValidAllCall();
      }
    } else {
        $('#phone_call').css('border', '1px solid #e02222')
          isValidAllCall();
    }

  });

});

function isValidAllCall() {
  var name = $("#name_call").val();
  var phone = $("#phone_call").val();
  if ( isValidPhone(phone) && (name != 0) ) {
    document.getElementById('confirm_call').disabled = false;
    $('#confirm_call').css('background', '#882204');
  } else {
    document.getElementById('confirm_call').disabled = true;
    $('#confirm_call').css('background', 'grey');
  }
}


// ФОРМА ПРОДУКТА

document.getElementById('confirm').disabled = true;
$('#confirm').css('background', 'grey')


  $(document).ready(function() {
    $("#name").keyup(function(){
      var name = $("#name").val();
      if(name != 0)
      {
        if(name)
        {
            $('#name').css('border', '1px solid transparent')
              isValidAll();
        } else {
            $('#name').css('border', '1px solid #e02222')
              isValidAll();
        }
      } else {
          $('#name').css('border', '1px solid #e02222')
          isValidAll();
      }
    });
  });


$(document).ready(function() {
  $("#phone").keyup(function(){

    var phone = $("#phone").val();

    if(phone != 0)
    {
      if(isValidPhone(phone))
      {
          $('#phone').css('border', '1px solid transparent')
            isValidAll();
      } else {
          $('#phone').css('border', '1px solid #e02222')
            isValidAll();
      }
    } else {
        $('#phone').css('border', '1px solid #e02222')
          isValidAll();
    }

  });

});

$(document).ready(function() {
  $("#email").keyup(function(){

    var email = $("#email").val();

    if(email != 0)
    {
      if(isValidEmailAddress(email))
      {
          $('#email').css('border', '1px solid transparent')
          isValidAll();
      } else {
          $('#email').css('border', '1px solid #e02222')
            isValidAll();
      }
    } else {
        $('#email').css('border', '1px solid #e02222')
          isValidAll();
    }

  });

});



function isValidPhone(Phone) {
  var pattern = new RegExp(/\+7 861 \(\d{2}\) \d{3}-\d{2}-\d{2}/i);
  return pattern.test(Phone);
}

function isValidAll() {
  var name = $("#name").val();
  var phone = $("#phone").val();
  if ( isValidPhone(phone) && (name != 0) ) {
    document.getElementById('confirm').disabled = false;
    $('#confirm').css('background', '#882204');
  } else {
    document.getElementById('confirm').disabled = true;
    $('#confirm').css('background', 'grey');
  }
}

function isValidEmailAddress(emailAddress) {
  var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  return pattern.test(emailAddress);
}

function buyForm(name) {
	$('.popup-form').show();
  $('#productname').val(name);
}

function buyFormClose(name) {
	$('.popup-form').hide();
}


function callFormShow() {
  $('.popup-form-call').show();
}

function callFormClose() {
  $('.popup-form-call').hide();
}

</script>



<!-- САМА ФОРМА ТУТ -->

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<?$APPLICATION->AddHeadScript("/local/templates/exterra/js/jquery.maskedinput.min.js");?>
<script>
$(document).ready(function(){
  $('.slick-main').slick();
});
</script>
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
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    /* slidesToScroll: 1, */
    infinite: true,
    asNavFor: '.slider-for',
    /* centerMode: true, */
    vertical: true,
    focusOnSelect: true
  });
});
</script>
<script>
$('.hero--slick, .slider-product').slick();
$('.card-slider').slick({
slidesToShow: 4,
})


  function SendResult(form_name){
    if (form_name == 'call') {
      var form = $('#form_call')[0];
    }
    if (form_name == 'product') {
      /* msg = $('#form_product').serialize(); */
      var form = $('#form_product')[0];
    }
    var msg = new FormData(form);
    $.ajax({
      url: '/catalog/post.php',
      type: 'POST',
      data: msg,
      async: false,
      cache: false,
      contentType: false,
      processData: false,
      success: function(response) {
        /* alert('Отправлено'); // отправлено удачно */
        $('#results').show();
        $('#results strong').html('Ваш заказ принят. Мы свяжемся с Вами в ближайшее время');
        /* $('#results strong').html(response); */
      },
      error: function(response) {
        /* alert('Ошибка'); // ошибка */
      }
  });
}
</script>
</body>
</html>
