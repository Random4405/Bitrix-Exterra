$(window).scroll(function(){
  var sticky = $('.js-header'),
  scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('header-fixed');
  else sticky.removeClass('header-fixed');
});

jQuery( document ).ready(function( $ ) {
  $('.custom-preview').each(function(index, element) {$clamp(element, { clamp: 6, useNativeClamp: false });});
});
