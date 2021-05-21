//script global - NAVBAR
$(document).ready(function(){
    $('#collapse-nav-button').click(function(){
        $('.nav-bar').slideToggle();
    })
});
$(window).resize(function(){
    var windowWidth = window.innerWidth;
    if(windowWidth >= 768){
        $('.nav-bar').css('display','flex')
    } else {
        $('.nav-bar').css('display','none');
    }
});

function home() {
    $('.main-slider-content').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        prevArrow: $('.main-slider-prev'),
        nextArrow: $('.main-slider-next')
    });
}