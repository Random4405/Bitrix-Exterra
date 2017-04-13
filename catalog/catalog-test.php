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
  <div class="row two-column-wrapper">
    <div class="left-wrapper">
      <div class="img-wrapper slider-for">
        <div><img src="/images/texture-1.png" alt=""></div>
        <div><img src="/images/texture-1.png" alt=""></div>
        <div><img src="/images/texture-1.png" alt=""></div>
        <div><img src="/images/texture-1.png" alt=""></div>
        <div><img src="/images/texture-1.png" alt=""></div>
        <div><img src="/images/texture-1.png" alt=""></div>
      </div>
    </div>
    <div class="right-wrapper">
      <div class="left-wrapper flex-col">
        <div class="information-wrapper">
          <h4>Кирпич облицовочный</h4>
          <h4>Giallo Macenato</h4>
          <p class="cost">Цена: <span class="cost-green">3 <sup>55</sup></span> за шт</p>
          <p class="cost">Цена: <span class="cost-green">3 <sup>55</sup></span> за м<sup>2</sup></p>
          <div class="sticker-new"></div>
          <div class="sticker-in"></div>
          <table>
            <tr>
              <td>Описание:</td>
              <td>Giallo Macehiato</td>
            </tr>
            <tr>
              <td>Артинкул:</td>
              <td>12409911</td>
            </tr>
            <tr>
              <td>Брэнд:</td>
              <td>Vandersanden</td>
            </tr>
            <tr>
              <td>Размеры:</td>
              <td>M50: 190x20x50мм</td>
            </tr>
            <tr>
              <td>Цвет:</td>
              <td>коричневый</td>
            </tr>
          </table>
        </div>
        <div class='catalog-button'>
          <div class="link-description">Понравился товар?</div>
          <a href="#">Заказать</a>
        </div>
      </div>
      <div class="right-wrapper flex-col">
        <div class="slider-nav">
          <div class="slick-vertical-wrapper">
            <div class="texture-name">Бежевый</div>
            <img src="/images/texture-2.png" alt="">
          </div>
          <div class="slick-vertical-wrapper">
            <div class="texture-name">Бежевый</div>
            <img src="/images/texture-3.png" alt="">
          </div>
          <div class="slick-vertical-wrapper">
            <div class="texture-name">Бежевый</div>
            <img src="/images/texture-3.png" alt="">
          </div>
          <div class="slick-vertical-wrapper">
            <div class="texture-name">Бежевый</div>
            <img src="/images/texture-3.png" alt="">
          </div>
          <div class="slick-vertical-wrapper">
            <div class="texture-name">Бежевый</div>
            <img src="/images/texture-3.png" alt="">
          </div>
        </div>
        <div class='catalog-button'>
          <div class="link-description">Узнать больше</div>
          <a class='green-button' href="#">Скачать текстуры в 1 клик</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="left-wrapper">
      <div class="slider-product" data-slick='{
      "slidesToShow": 3,
      "infinite": true,
      "centerMode": false,
      "focusOnSelect": true
      }'>
        <div><img src="/images/lorem-slider-1.png" alt=""></div>
        <div><img src="/images/lorem-slider-2.png" alt=""></div>
        <div><img src="/images/lorem-slider-3.png" alt=""></div>
        <div><img src="/images/lorem-slider-1.png" alt=""></div>
        <div><img src="/images/lorem-slider-2.png" alt=""></div>
        <div><img src="/images/lorem-slider-3.png" alt=""></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'Tab1')">tab1</button>
      <button class="tablinks" onclick="openCity(event, 'Tab2')">tab2</button>
      <button class="tablinks" onclick="openCity(event, 'Tab3')">tab3</button>
      <button class="tablinks" onclick="openCity(event, 'Tab4')">tab4</button>
      <button class="tablinks" onclick="openCity(event, 'Tab5')">tab5</button>
    </div>

    <div id="Tab1" class="tabcontent maintab">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eleifend diam vel turpis efficitur suscipit. Fusce posuere dapibus neque, vel vehicula nisi iaculis

      consequat.Duis feugiat risus dui, eget fermentum magna accumsan nec. Nulla laoreet commodo justo eu faucibus. Nunc tristique in ex nec mattis. Aenean

      malesuada ac erat auctor dictum. Praesent lectus ipsum, sollicitudin a ultrices ut, malesuada id eros. Aenean laoreet leo metus, quis ultrices nisl cursus ac.

      Vestibulum augue dolor, dignissim tincidunt magna vel, feugiat laoreet quam. Fusce eu velit rutrum, imperdiet quam a, egestas nisi. Quisque sit amet mi semper,

      iaculis mauris eget, venenatis orci. Sed quis felis risus. Nullam ut posuere lectus. Nulla lacinia dui in sapien rutrum fringilla. Vivamus et lobortis dolor. Proin sit amet

      elit efficitur velit vestibulum tristique.

      Donec vitae mi interdum, tempor erat quis, faucibus augue. Mauris sapien lorem, rhoncus eget pharetra et, pellentesque a justo. Cras vulputate erat ipsum, et

      fringilla nibh volutpat non. Donec tellus leo, suscipit sit amet varius eget, dictum in orci. Duis sapien risus, vestibulum vitae sodales quis, feugiat vel leo. Morbi

      pretium dolor id felis rhoncus dapibus. Morbi at volutpat eros. Quisque risus lorem, consectetur eget lectus et, semper mollis neque. Aliquam purus lectus, tempor.

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel suscipit neque. Nunc interdum lobortis vestibulum. Vivamus iaculis suscipit neque eget

      hendrerit. Donec lacinia in ipsum vel porttitor. Nulla ultricies cursus mauris nec gravida. Maecenas aliquam a diam eget feugiat. Nunc leo nibh, aliquet vel orci sit

      amet, ultrices fringilla nisl.

      Donec bibendum tincidunt erat id malesuada. Nunc varius velit lorem, rhoncus lacinia ligula tristique quis. Sed tortor dui, condimentum sit amet porta molestie,

      dictum condimentum lacus. Donec auctor nisl vel tortor feugiat iaculis. Fusce erat est, fringilla a condimentum id, posuere vel ligula. Integer augue velit, lobortis nec

      fermentum a, sodales ut libero. Aliquam eleifend mauris a vulputate accumsan. Nunc interdum urna at purus tincidunt molestie. Nullam viverra a nisi nec elementum

      Donec sempernisi sapien, at egestas quam efficitur sed.
      </p>


    </div>

    <div id="Tab2" class="tabcontent">
      <p>London is the capital city of England.</p>
    </div>

    <div id="Tab3" class="tabcontent">
      <p>London is the capital city of England.</p>
    </div>

    <div id="Tab4" class="tabcontent">
      <p>London is the capital city of England.</p>
    </div>

    <div id="Tab5" class="tabcontent">
      <p>London is the capital city of England.</p>
    </div>

  </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
