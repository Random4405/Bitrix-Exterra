
jQuery( document ).ready(function( $ ) {
  $('.custom-preview, .news-item__prewiew-text').each(function(index, element) {$clamp(element, { clamp: 5, useNativeClamp: false });});
  $(window).scroll(function(){
    var sticky = $('.js-header'),
    scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('is-header-fixed');
    else sticky.removeClass('is-header-fixed');
  });
});

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// jQuery( document ).ready(function( $ ) {
//   $('.tab-main').click();
// });

jQuery( document ).ready(function( $ ) {
  $('button.tablinks').first().addClass('active');
  $("header #horizontal-multilevel-menu > li:nth-child(n+2):nth-child(-n+3) > a ").click(function(e){
    $(this).toggleClass("open");
    $('body').click(function () {
      $("header #horizontal-multilevel-menu > li:nth-child(n+2):nth-child(-n+3) > a ").removeClass("open");
    });
    return false;
  });

  $('.bx-filter-parameters-box-container').mouseover(function() {
    $('#set_filter').removeAttr('disabled');
  })


  // Фикс высоты текстуры на страницах 'О компании' и 'Дилерам'
  var leftWrapperHeight = $('.about-wrapper').height(); $('.l-wrapper').height(leftWrapperHeight);
});
