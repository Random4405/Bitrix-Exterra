<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<div class="sell">
  <div class="container">
    <div class="row">
      <div class="left-wrapper">
        <h1>Продажа строительных материалов</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur aliquid quia, et harum maiores voluptates dignissimos vero magni tempore. Eaque totam, et incidunt sit, excepturi aperiam ipsam repellat ad dolores nulla quae placeat iusto consectetur magni repellendus, eos id exercitationem ipsum tempora consequatur quas? Aspernatur harum maxime distinctio recusandae quasi?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur aliquid quia, et harum maiores voluptates dignissimos vero magni tempore. Eaque totam, et incidunt sit, excepturi aperiam ipsam repellat ad dolores nulla quae placeat iusto consectetur magni repellendus, eos id exercitationem ipsum tempora consequatur quas? Aspernatur harum maxime distinctio recusandae quasi?</p>
      </div>
      <div class="right-wrapper">
        <?$APPLICATION->IncludeComponent("bitrix:news", "main-news-infoblock", Array(
        	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
        		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
        		"AJAX_MODE" => "Y",	// Включить режим AJAX
        		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
        		"AJAX_OPTION_HISTORY" => "Y",	// Включить эмуляцию навигации браузера
        		"AJAX_OPTION_JUMP" => "Y",	// Включить прокрутку к началу компонента
        		"AJAX_OPTION_SHADOW" => "N",
        		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
        		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
        		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
        		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
        		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        		"CACHE_TYPE" => "A",	// Тип кеширования
        		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
        		"COMPONENT_TEMPLATE" => ".default",
        		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
        		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
        		"DETAIL_FIELD_CODE" => array(	// Поля
        			0 => "",
        			1 => "",
        		),
        		"DETAIL_PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        		"DETAIL_PAGER_TEMPLATE" => "arrows",	// Название шаблона
        		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
        		"DETAIL_PROPERTY_CODE" => array(	// Свойства
        			0 => "",
        			1 => "",
        		),
        		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
        		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
        		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
        		"DISPLAY_NAME" => "Y",	// Выводить название элемента
        		"DISPLAY_PANEL" => "N",
        		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
        		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
        		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
        		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",	// Скрывать ссылку, если нет детального описания
        		"IBLOCK_ID" => "5",	// Инфоблок
        		"IBLOCK_TYPE" => "news",	// Тип инфоблока
        		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
        		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        		"LIST_FIELD_CODE" => array(	// Поля
        			0 => "",
        			1 => "",
        		),
        		"LIST_PROPERTY_CODE" => array(	// Свойства
        			0 => "",
        			1 => "",
        		),
        		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
        		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
        		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
        		"NEWS_COUNT" => "5",	// Количество новостей на странице
        		"NUM_DAYS" => "30",
        		"NUM_NEWS" => "20",
        		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
        		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
        		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",	// Время кеширования страниц для обратной навигации
        		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
        		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
        		"PAGER_TITLE" => "Новости",	// Название категорий
        		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
        		"SEF_FOLDER" => "/news/",	// Каталог ЧПУ (относительно корня сайта)
        		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
        		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
        		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
        		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
        		"SHOW_404" => "N",	// Показ специальной страницы
        		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
        		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
        		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
        		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
        		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
        		"USE_FILTER" => "N",	// Показывать фильтр
        		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
        		"USE_RATING" => "N",	// Разрешить голосование
        		"USE_RSS" => "N",	// Разрешить RSS
        		"USE_SEARCH" => "N",	// Разрешить поиск
        		"USE_SHARE" => "N",	// Отображать панель соц. закладок
        		"YANDEX" => "N",
        		"SEF_URL_TEMPLATES" => array(
        			"news" => "",
        			"section" => "",
        			"detail" => "#ELEMENT_ID#/",
        		)
        	),
        	false
        );?>
      </div>
    </div>
  </div>
</div>

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