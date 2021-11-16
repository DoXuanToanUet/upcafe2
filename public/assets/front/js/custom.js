$(function(){

  // banner slider 
  $('.banner_slider').slick({
    // slidesToShow: 1,
    // slidesToScroll: 1,
    // autoplay: true,
    // autoplaySpeed: 8000,
    // arrows:false,
    // // cssEase: 'ease-in-out',
    // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    // // draggable: true,
    // // arrows: false,
    // // dots: true,
    // // fade: true,
    // // speed: 900,
    // // infinite: true,
    // // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    // // touchThreshold: 100
    draggable: true,
    arrows: false,
    dots: false,
    fade: true,
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 8000,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100
  });
  // review slider 
  $('.review_silder').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    dots: false,
    autoplaySpeed: 5000,
    prevArrow: '<button class="slide-arrow prev-arrow fa fa-arrow-left "></button>',
    nextArrow: '<button class="slide-arrow next-arrow fa fa-arrow-right "></button>',
    arrows:true,
    responsive:[{
      breakpoint: 500,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplaySpeed: 8000,
              dots: true,
              arrows:false,
            }
    }, {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,

            }
          }]

  });

  // Cafe menu slider

  // review slider

  function sliderInit(){
    $('.manu_slider_items').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: false,
      dots: true,

      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
    });
  }
  sliderInit();













  // gall slider 
  $('.gal_silder_main').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
    prevArrow: $('.glb'),
    nextArrow: $('.grb'),
    arrows:true,
    responsive:[{
      breakpoint: 500,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerMode: true,
            }
    }, {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              centerMode: true,
      
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              centerMode: true,
      
            }
          }]
  });
  $('.slide22').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
    prevArrow: $('.glb'),
    nextArrow: $('.grb'),
    arrows:true,
  });
  // for animiton 
  new WOW().init();
  // venobox
  $('.venobox').venobox(); 
  // venobox 2
  $('.venobox2').venobox();
  $(document).ready(function(){
    $('.venobox4').venobox();
  });
});

// ---- gallery icon click active 
// First we detect the click event
$('.fa-heart-o').click(function () {
  // Using an if statement to check the class
  if ($(this).hasClass('fa-heart-o')) {
   
   $(this).addClass('fa-heart');
   $(this).removeClass('fa-heart-o');
  }
});

// -----back to top btn----
var btn = $('.back_up_bnt');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body, #header_area').animate({scrollTop:0}, '500');
});


jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww < 600) {
      $('.gal_silder_main ').removeClass('slide22');
    } else if (ww >= 601) {
      $('.gal_silder_main ').addClass('slide22');
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
});



function valueChanged1() {
  if($('.coupon_question').is(":checked"))   
    $(".answer").show();
  else
    $(".answer").hide();
};

function valueChanged11() {
  if($('.coupon_question').is(":checked"))   
    $(".cdshow").show();
  else
    $(".cdshow").hide();
};

function valueChangedtwo() {
  if($('.coupon_question').is(":checked"))   
    $(".cdshowtwo").show();
  else
    $(".cdshowtwo").hide();
};

function valueChangedtin() {
  if($('.coupon_question').is(":checked"))   
    $(".cdshowtin").show();
  else
    $(".cdshowtin").hide();
};

function valueChangedcar() {
  if($('.coupon_question').is(":checked"))   
    $(".cdshowcar").show();
  else
    $(".cdshowcar").hide();
};



// Back to top

// ===== Scroll to Top ====
$(window).scroll(function() {
  if ($(this).scrollTop() >= 4000) {        // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
    scrollTop : 0                       // Scroll to top of body
  }, 500);
});
