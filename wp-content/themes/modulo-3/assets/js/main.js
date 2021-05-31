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
  //slider 1
    $('.main-slider-content').slick({
        dots: false,
        infinite: true,
        speed: 800,
        fade: true,
        cssEase: 'linear',
        prevArrow: $('.main-slider-prev'),
        nextArrow: $('.main-slider-next')
    });
    

    //slider 2
    $('.especialidades-header-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-especialidades-slides'
      });
    $('.slider-especialidades-slides').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: true,
        asNavFor: '.especialidades-header-wrapper',
        prevArrow: $('#slider-especialidades-prev'),
        nextArrow: $('#slider-especialidades-next'),
        responsive: [
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
              breakpoint: 1000,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
          ]
    });

    //estados do brasil
    const estadosUrl = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome';
    fetch(estadosUrl)
      .then(response => response.json())
      .then(data => {
        data.map(estado => {
          const op = $("<option class='estado-opcao'></option>")
          op.text(estado.nome)
          $('#estado').append(op)
        })
      })
      .catch(err => console.log(err));

    $('.encontre-vagas-form').validate();
}

function integra(){
  var baseUrl = 'http://localhost/mod3/';
  $(".integra-socials").jsSocials({
    showCount: true,
    showLabel: false,
    shares: [{
      share: "facebook",
      logo: baseUrl+'wp-content/uploads/2021/05/facebook.png'
    }, {
      share: "linkedin",
      logo: baseUrl+'wp-content/uploads/2021/05/linkedin.png'
    }, {
      share: "whatsapp",
      logo: baseUrl+'wp-content/uploads/2021/05/whatsapp.png'
    }
    ]
});
}