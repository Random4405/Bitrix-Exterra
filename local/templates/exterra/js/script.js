$(window).scroll(function(){
  var sticky = $('.js-header'),
  scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('header-fixed');
  else sticky.removeClass('header-fixed');
});

