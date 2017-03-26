<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дилерам");
?>



<?$APPLICATION->IncludeComponent(
  "bitrix:breadcrumb",
  "",
  Array(
    "PATH" => "",
    "SITE_ID" => "s1",
    "START_FROM" => "0"
  )
);?>

<div class="about-wrapper">
  <div class="l-wrapper"></div>
  <div class="r-wrapper">
    <h4 style="font-family: Arial; font-weight: 400; line-height: 32px; color: #87270d; font-size: 18px; position: relative;">Компания Exterra Group является прямым поставщиком клинкерных материалов на строительный рынок Республики Крым.</h4>
    <p>Мы работаем с лучшими Европейскими производителями и стремимся предложить нашу продукцию наибольшему количеству потребителей.<b> Мы ищем новых дилеров в нашу сеть и предлагаем привлекательные условия сотрудничества:</b></p>

    <ul>
      <li>
        <span class="dillers-why dillers-info">Качественное визуальное сопровождение товара</span>
      <p>
        Мы предоставляем Вам все необходимые выставочные материалы. Благодаря большому опыту работы и высокой компетенции наших экспозиторов, мы сможем предоставить Вам выставочные продукты, подходящие именно для Вашей торговой зоны.
        Мы предоставляем выставочные каталоги высочайшего качества. В каталогах представлена вся продукция, с максимально реалистичной передачей цвета. Помимо полноцветных каталогов мы так же поставляем раздаточный материал. Все каталоги русскоязычные.
      </p>
      <p>
        Мы предоставляем обширный каталог электронных материалов. Помимо коллекции всех наших товаров, так же предоставляются схемы монтажа, таблицы характеристик материалов, фото готовых объектов. Используя все эти материалы, Вы сможете показать клиенту не только выставочные образцы, но и фото готовых объектов в различных климатических зонах и странах.
      </p>
      </li>
      <li>
        <span class="dillers-how dillers-study">Обучение сотрудников</span>
        <p>
          Одним из главных аспектов успешной работы нашей компании является высокий профессионализм наших сотрудников. Нашим дилерам мы предлагаем содействие в обучении сотрудников. Обучение включает в себя все необходимые основы, в том числе способы и особенности монтажа, особенности продукции, тонкости и преимущества в реализации и рекламе клинкерных материалов и сопутствующих товаров.
        </p>
      </li>
      <li>
        <span class="dillers-because dillers-protect">Система защиты каждого диллера</span>
        <p>
          Компания Exterra Group заинтересована в развитии и расширении дилерской сети, а значит, нам важен каждый дилер и для сохранения плодотворного сотрудничества в компании действует система «защиты объекта», по которой за каждым заказчиком закрепляется определенный партнер, что позволяет минимизировать риски.
        </p>
        <p>
          <div class="dillers-last">
            Мы станем Вашим надёжным партнёром на рынке качественных строительных материалов
          </div>
        </p>
      </li>
    </ul>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
