$(function() {
});

var startPos = 0,winScrollTop = 0;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if(winScrollTop >= 200){
        $('.mainnav').addClass('hide');
    } else {
        $('.mainnav').removeClass('hide');
    }
    startPos = winScrollTop;
});