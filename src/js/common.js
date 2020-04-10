$(function () {
  $('.header__trigger').on('click', function () {
    $(this).toggleClass('on');
    $('.header__nav').stop().fadeToggle();
  });
});
