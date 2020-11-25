$(document).ready(function () {
  //вариант с пропадающей кнопкой "ввекрх"
/*! SCROLL TO TOP
------------------------------------------------->*/

  var o = jQuery("#mkdf-back-to-top");
  console.log('scroll'+o);
  jQuery(window).on("scroll", function () {
    if (jQuery(this).scrollTop() > 200) {
      o.addClass("is-visible")
    } else {
      o.removeClass("is-visible")
    }
  });
  o.on("click", function (s) {
    s.preventDefault();
    jQuery("html, body").animate({
      scrollTop: 0
    }, 500)
  });




  /**** SLIDERS */
  $('.trips-page__slider').slick({
    dots: false,
    prevArrow: $(".trips-page__slider-arrow-right"),
    nextArrow: $(".trips-page__slider-arrow-left"),
    infinite: true,
    speed: 500,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,

    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
         
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
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
    //variableWidth: true
    //adaptiveHeight: true
    // fade: true,
    // cssEase: 'linear'
  });


  $('.we-know-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    prevArrow: $(".we-know-slider__arrows_arrow-left"),
      nextArrow: $(".we-know-slider__arrows_arrow-right"),
  });


  $('.reviews-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: $(".reviews-slider__arrows_arrow-left"),
      nextArrow: $(".reviews-slider__arrows_arrow-right"),
      
      responsive: [
        // {
        //   breakpoint: 1024,
        //   settings: {
        //     slidesToShow: 2,
        //     slidesToScroll: 2,
        //     infinite: true,
          
        //   }
        // },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        // {
        //   breakpoint: 480,
        //   settings: {
        //     slidesToShow: 1,
        //     slidesToScroll: 1
        //   }
        // }
      ]
  });


  $('.shop-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $(".shop-slider__arrows_arrow-left"),
      nextArrow: $(".shop-slider__arrows_arrow-right"),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
          
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
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


  /**** LOADER */

  $(".loading").addClass("loading-end").slideUp(1000);





});