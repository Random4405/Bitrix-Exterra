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



<div class="container">
  <div class="row">
<h1 class="is-no-top-margin">Оплата и доставка</h1>
            <div class="paragraph">
              <h4 class="paragraph__title l-centered is-framed">СРОКИ ПОСТАВКИ</h4>
              <p>Сроки поставки заказанного товара: 30 (шестьдесят) рабочих дней.</p>
                  </div>
              <div class="paragraph">
                <h4 class="paragraph__title l-centered is-framed">ДОСТАВКА</h4>
                <p>Бесплатная доставка осуществляется по [регион] и в пределах 20 км от МКАД. Дата доставки согласовывается с менеджером-консультантом в салоне. Стоимость услуг доставки по другим регионам РФ оговаривается дополнительно.</p>
              </div>
              <div class="paragraph">
                <h4 class="paragraph__title l-centered is-framed">ПОРЯДОК ОПЛАТ</h4>
				  <p>Расчет за товар осуществляется путем предварительной оплаты. Минимальная предоплата за Товар составляет 50% стоимости заказа. Оплата производится в российских рублях по курсу ЦБРФ на день внесения суммы.</p>
				  <p> Произвести оплату можно тремя способами:</p>
                  <p>1. Наличный расчет;</p>
                  <p>2. Расчет с помощью пластиковой карты;</p>
                  <p>3. Безналичный расчет.</p>
              </div>
   
  </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
