<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дилерам");
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


<div class="about-wrapper">
  <div class="l-wrapper"></div>
  <div class="r-wrapper">
    <ul>
      <li>
        <span class="dillers-why dillers-info">СРОКИ ПОСТАВКИ</span>
      <p>
        Сроки поставки заказанного товара: 30 (шестьдесят) рабочих дней.
      </p>
      </li>
      <li>
        <span class="dillers-how dillers-study">ДОСТАВКА</span>
        <p>
          Бесплатная доставка осуществляется по г. Минску (до квартиры) и в пределах 20 км от МКАД. Дата доставки согласовывается с дизайнером-консультантом в салоне. Стоимость услуг доставки по РБ оговаривается дополнительно.
        </p>
      </li>
      <li>
        <span class="dillers-because dillers-protect">ПОРЯДОК РАСЧЕТОВ И ОПЛАТА</span>
        <p>Расчет за товар осуществляется путем предварительной оплаты. Минимальная предоплата за Товар составляет 50% стоимости заказа. Оплата производится в белорусских рублях по курсу НБРБ на день внесения суммы.

<p> Произвести оплату можно тремя способами:

<p>1. Наличный расчет;
<p>2. Расчет с помощью пластиковой карты;
<p>3. Безналичный расчет.
        </p>
        <p>

        </p>
      </li>
    </ul>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
