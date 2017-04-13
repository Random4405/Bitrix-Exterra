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
          <a href="#">Скачать текстуры в 1 клик</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="slider-product" data-slick='{ "slidesToShow": 3, "infinite": true, "centerMode": false, "focusOnSelect": true }'>
      <div><img src="/images/realize/1photo.jpg" alt=""></div>
      <div><img src="/images/realize/2photo.jpg" alt=""></div>
      <div><img src="/images/realize/3photo.jpg" alt=""></div>
      <div><img src="/images/realize/4photo.jpg" alt=""></div>
      <div><img src="/images/realize/5photo.jpg" alt=""></div>
      <div><img src="/images/realize/6photo.jpg" alt=""></div>
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
      <p>London is the capital city of England. 1</p>
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
