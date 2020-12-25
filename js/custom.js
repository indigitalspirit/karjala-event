$(document).ready(function () {
  //вариант с пропадающей кнопкой "ввекрх"
  /*! SCROLL TO TOP ------------------------------------------------->*/

  var o = jQuery("#mkdf-back-to-top");
  ////console.log('scroll'+o);
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



  /**** MOBILE MENU  */
  $("header.mkdf-mobile-header .mkdf-mobile-menu-opener a").on("click", function(e){
    e.preventDefault();
    
    //console.log("click mobile menu");

    $("nav.mkdf-mobile-nav").toggleClass("active");

  });


  /**** SLIDERS */
  $('.celebrations-page__slider').slick({
    dots: false,
    prevArrow: $(".celebrations-page__slider-arrow-right"),
    nextArrow: $(".celebrations-page__slider-arrow-left"),
    infinite: true,
    speed: 500,
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,

    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
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


  $('.trips-page__slider').slick({
    dots: false,
    prevArrow: $(".trips-page__slider-arrow-right"),
    nextArrow: $(".trips-page__slider-arrow-left"),
    infinite: true,
    speed: 500,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,

    // responsive: [
    //   {
    //     breakpoint: 1024,
    //     settings: {
    //       slidesToShow: 4,
    //       slidesToScroll: 1,
    //       infinite: true,
         
    //     }
    //   },
    //   {
    //     breakpoint: 991,
    //     settings: {
    //       slidesToShow: 4,
    //       slidesToScroll: 1
    //     }
    //   },

    //   {
    //     breakpoint: 767,
    //     settings: {
    //       slidesToShow: 2,
    //       slidesToScroll: 1
    //     }
    //   },
    //   {
    //     breakpoint: 480,
    //     settings: {
    //       slidesToShow: 1,
    //       slidesToScroll: 1
    //     }
    //   }
    // ]
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

  $('.cases-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $(".cases-slider__arrows_arrow-left"),
      nextArrow: $(".cases-slider__arrows_arrow-right"),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
           
          }
        },
        {
          breakpoint: 767,
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


  $('.main-page__slider').slick({
    dots: false,
    prevArrow: $(".main-page__slider-arrow-right"),
    nextArrow: $(".main-page__slider-arrow-left"),
    infinite: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    //adaptiveHeight: true
    fade: true,
    cssEase: 'linear'
  });


  if( $('.trips-type-slider_1') ) {

    $('.trips-type-slider_1').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: $(".trips-type-slider_1__arrows_arrow-left"),
        nextArrow: $(".trips-type-slider_1__arrows_arrow-right"),
    });

  }

  if( $('.trips-type-slider_2') ) {

    $('.trips-type-slider_2').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: $(".trips-type-slider_2__arrows_arrow-left"),
        nextArrow: $(".trips-type-slider_2__arrows_arrow-right"),
    });

  }

  if( $('.trips-type-slider_3') ) {

    $('.trips-type-slider_3').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: $(".trips-type-slider_3__arrows_arrow-left"),
        nextArrow: $(".trips-type-slider_3__arrows_arrow-right"),
    });

  }

  if( $('.trips-type-slider_4') ) {

    $('.trips-type-slider_4').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: $(".trips-type-slider_4__arrows_arrow-left"),
        nextArrow: $(".trips-type-slider_4__arrows_arrow-right"),
    });

  }

  if( $('.trips-type-slider_5') ) {

    $('.trips-type-slider_5').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: $(".trips-type-slider_5__arrows_arrow-left"),
        nextArrow: $(".trips-type-slider_5__arrows_arrow-right"),
    });

  }

  if( $('.trips-type-slider_6') ) {

    $('.trips-type-slider_6').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: $(".trips-type-slider_6__arrows_arrow-left"),
        nextArrow: $(".trips-type-slider_6__arrows_arrow-right"),
    });

  }


  $('.filtering').on( 'click', 'span', function() {

    var filterValue = $(this).attr('data-filter');

    // $gallery.isotope({ filter: filterValue });
   

    if( $(this).hasClass('active') ) {
      $(this).removeClass('active');
    }
    else {
      $('.filtering > span.active').removeClass('active');
      $(this).addClass('active');
    }

    var targetDataFilter = $(this).attr('data-filter');

    if( targetDataFilter) {
      //console.log(targetDataFilter);

      //$( ".shop-tab__gallery-wrapper" ).removeClass('active');
      // $( ".shop-tab__gallery-wrapper" ).addClass('hidden');

      $( ".shop-tab__gallery-wrapper" ).each(function() {
        if ( $(this).hasClass('active') ) {

          //console.log( 'data-cat' + $(this).attr('data-cat'));
          if( targetDataFilter != 'all') {

            if ( $(this).attr('data-cat') != targetDataFilter ) {
              $(this).removeClass('active');
            }
          } 
          else {
            $(".shop-tab__gallery-wrapper").addClass('active');
          } 

        }
        
      });
      
      $( ".shop-tab__gallery-wrapper[data-cat='"+targetDataFilter+"']" ).addClass('active');
    }

});



  /**** LOADER */

  $(".loading").addClass("loading-end").slideUp(1000);


  /** Set animate.css params */

  /** home page */
  const mainPageHistoryTitle = document.querySelector('.main-page__history h1');
  
  if( mainPageHistoryTitle ) {
    mainPageHistoryTitle.classList.add('animate__animated', 'animate__bounceInDown');  
    mainPageHistoryTitle.style.setProperty('--animate-duration', '2.0s');
    mainPageHistoryTitle.style.setProperty('--animate-delay', '0.5s');
  
  }
  

  /** trips page */
  const tripsPageSliderTitle = document.querySelector('.slick-current.slick-active h2.trips-page__slider-title');

  if( tripsPageSliderTitle ) {
    tripsPageSliderTitle.classList.add('animate__animated', 'animate__bounceInDown');  
    tripsPageSliderTitle.style.setProperty('--animate-duration', '2.0s');
    tripsPageSliderTitle.style.setProperty('--animate-delay', '0.5s');
  }
  

  const tripsPageSliderDescr = document.querySelector('.slick-current.slick-active p.trips-page__slider-descr');

  if( tripsPageSliderDescr ) {
    
    tripsPageSliderDescr.classList.add('animate__animated', 'animate__bounceInDown');  
    tripsPageSliderDescr.style.setProperty('--animate-duration', '2.5s');
    tripsPageSliderDescr.style.setProperty('--animate-delay', '1.5s');
  
  }
  
  const tripsPageSliderIcons = document.querySelector('.slick-current.slick-active .trips-page__slider-icons');

  if( tripsPageSliderIcons ) {
    tripsPageSliderIcons.classList.add('animate__animated', 'animate__bounceInDown');  
    tripsPageSliderIcons.style.setProperty('--animate-duration', '3.0s');
    tripsPageSliderIcons.style.setProperty('--animate-delay', '2.5s');
  }


   /** celebrations page */
   const celebrationsPageSliderTitles = document.querySelectorAll('h2.celebrations-page__slider-title');

   if( celebrationsPageSliderTitles ) {
    celebrationsPageSliderTitles.forEach(function(celebItem) {
      celebItem.classList.add('animate__animated', 'animate__bounceInDown');  
      celebItem.style.setProperty('--animate-duration', '2.0s');
      celebItem.style.setProperty('--animate-delay', '0.5s');
    }); 
  
   }
   
 
   const celebrationsPageSliderDescrs = document.querySelectorAll('.celebrations-page__slider-subtitle');
 
   if( celebrationsPageSliderDescrs ) {

    celebrationsPageSliderDescrs.forEach(function(celebDescrItem) {
      celebDescrItem.classList.add('animate__animated', 'animate__bounceInDown');  
      celebDescrItem.style.setProperty('--animate-duration', '2.5s');
      celebDescrItem.style.setProperty('--animate-delay', '1.5s');
    }); 
     
   
   }
   
   const celebrationsPageSliderIcons = document.querySelectorAll('.celebrations-page__slider-btn');

   if( celebrationsPageSliderIcons ) {

    celebrationsPageSliderIcons.forEach(function(celebIconItem) {
      celebIconItem.classList.add('animate__animated', 'animate__bounceInDown');  
      celebIconItem.style.setProperty('--animate-duration', '3.0s');
      celebIconItem.style.setProperty('--animate-delay', '2.5s');
    }); 
     
   
   }



   /** marriage page */
  const marriagePageSliderTitle = document.querySelector('h1.marriage-page__top-title');

  if(marriagePageSliderTitle ) {
    marriagePageSliderTitle.classList.add('animate__animated', 'animate__bounceInDown');  
    marriagePageSliderTitle.style.setProperty('--animate-duration', '2.0s');
    marriagePageSliderTitle.style.setProperty('--animate-delay', '0.5s');
  }
  

  const marriagePageSliderDescr = document.querySelector('.marriage-page__top-icons-set');

  if( marriagePageSliderDescr ) {
    
    marriagePageSliderDescr.classList.add('animate__animated', 'animate__bounceInDown');  
    marriagePageSliderDescr.style.setProperty('--animate-duration', '2.5s');
    marriagePageSliderDescr.style.setProperty('--animate-delay', '1.5s');
  
  }
  
  const marriagePageSliderBtns = document.querySelector('.marriage-page__top-btns');

  if( marriagePageSliderBtns ) {
    marriagePageSliderBtns.classList.add('animate__animated', 'animate__bounceInDown');  
    marriagePageSliderBtns.style.setProperty('--animate-duration', '3.0s');
    marriagePageSliderBtns.style.setProperty('--animate-delay', '2.5s');
  }


  /** corporates page */
  const corporatesPageSliderTitle = document.querySelector('h1.corporate-page__top-title');

  if(corporatesPageSliderTitle ) {
    corporatesPageSliderTitle.classList.add('animate__animated', 'animate__bounceInDown');  
    corporatesPageSliderTitle.style.setProperty('--animate-duration', '1.5s');
    corporatesPageSliderTitle.style.setProperty('--animate-delay', '0.5s');
  }
  

  const corporatesPageSliderDescr = document.querySelector('.corporate-page__top-icons-set');

  if( corporatesPageSliderDescr ) {
    
    corporatesPageSliderDescr.classList.add('animate__animated', 'animate__bounceInDown');  
    corporatesPageSliderDescr.style.setProperty('--animate-duration', '1.5s');
    corporatesPageSliderDescr.style.setProperty('--animate-delay', '1.0s');
  
  }
  
  const corporatesPageSliderBtns = document.querySelector('.corporate-page__top-btns');

  if( corporatesPageSliderBtns ) {
    corporatesPageSliderBtns.classList.add('animate__animated', 'animate__bounceInDown');  
    corporatesPageSliderBtns.style.setProperty('--animate-duration', '2.5s');
    corporatesPageSliderBtns.style.setProperty('--animate-delay', '2.0s');
  }
 
  
  
  /***** MODALS */

  if( document.getElementById("cta-overlay") ) { 
    document.getElementById("cta-overlay").addEventListener("click",function() {
      document.getElementById("cta-modal").classList.remove("is-visible");
      document.getElementById("cta-overlay").classList.remove("is-visible");
      
    })
                      
  }
   

  var modalBtns = document.querySelectorAll('.mkdf-btn[href="#cta-modal-form__btn"]');;
  //console.log(modalBtns);

  if( modalBtns.length > 0 ) {
    //console.log("modalBtns length", modalBtns.length);

    //modalBtns.forEach(function(item, i, arr) {
    for (var i = 0; i < modalBtns.length; i++) {
      //console.log("i " + modalBtns[i]);
      //}
      //alert( i + ": " + item + " (массив:" + arr + ")" );
      modalBtns[i].addEventListener("click", function(event) {
        event.preventDefault();
        //console.log("click form cta ");
        document.getElementById("cta-overlay").classList.add("is-visible");
        document.getElementById("cta-modal-form").classList.add("is-visible") 
      });
      

    }
  }


  if( document.getElementById("cta-modal-form__close-btn") ) {
    document.getElementById("cta-modal-form__close-btn").addEventListener("click", function() { 	 					//
      setTimeout(() => document.getElementById("cta-modal-form").classList.remove("is-visible"), 200);
      setTimeout(() => document.getElementById("cta-overlay").classList.remove("is-visible"), 400);
    })
  }

  // if( document.getElementById("cta-modal-form__btn") ) {
    
  //   document.getElementById("cta-modal-form__btn").addEventListener("click", function() {
  //     event.preventDefault();
  //     //console.log("click form cta ");
  //     document.getElementById("cta-overlay").classList.add("is-visible");
  //     document.getElementById("cta-modal-form").classList.add("is-visible") 
  //   })
  // }

  

  ////////////////////////////

  var modalConsultBtns = document.querySelectorAll('.mkdf-btn[href="#cta-modal-consult__btn"]');//document.getElementsByClassName("cta-modal-consult__btn");
  //console.log('mc', modalConsultBtns);

  if( modalConsultBtns.length > 0 ) {
    //console.log("modalConsultBtns length", modalConsultBtns.length);

    //modalBtns.forEach(function(item, i, arr) {
    for (var j = 0; j < modalConsultBtns.length; j++) {
      //console.log("j " + modalConsultBtns[j]);
      //}
      //alert( j + ": " + jtem + " (массив:" + arr + ")" );
      modalConsultBtns[j].addEventListener("click", function(event) {
        event.preventDefault();
        //console.log("click consult form cta ");
        document.getElementById("cta-overlay").classList.add("is-visible");
        document.getElementById("cta-modal-consult").classList.add("is-visible") 
      });
      

    }
  }

  if( document.getElementById("cta-modal-consult__close-btn") ) {
    document.getElementById("cta-modal-consult__close-btn").addEventListener("click", function() { 	 					//
      setTimeout(() => document.getElementById("cta-modal-consult").classList.remove("is-visible"), 200);
      setTimeout(() => document.getElementById("cta-overlay").classList.remove("is-visible"), 400);
    })
  }
                      
  


  //////////////////////////////////////



  if( document.getElementById("widget-call") ) {
    
    document.getElementById("widget-call").addEventListener("click", function() {
      event.preventDefault();
      //console.log("click consult cta ");
      document.getElementById("cta-overlay").classList.add("is-visible");
      document.getElementById("cta-modal-consult").classList.add("is-visible") 
    })
  }

  ///////////////////////////

  // var modalConsultBtns = document.querySelector('.mkdf-btn[href="#cta-modal-consult__btn"]');//document.getElementsByClassName("cta-modal-consult__btn");
  // //console.log('mc', modalConsultBtns);

  // if( modalConsultBtns.length > 0 ) {
  //   //console.log("modalConsultBtns length", modalConsultBtns.length);

  //   //modalBtns.forEach(function(item, i, arr) {
  //   for (var j = 0; j < modalConsultBtns.length; j++) {
  //     //console.log("j " + modalConsultBtns[j]);
  //     //}
  //     //alert( j + ": " + jtem + " (массив:" + arr + ")" );
  //     modalConsultBtns[j].addEventListener("click", function(event) {
  //       event.preventDefault();
  //       //console.log("click consult form cta ");
  //       document.getElementById("cta-overlay").classList.add("is-visible");
  //       document.getElementById("cta-modal-consult").classList.add("is-visible") 
  //     });
      

  //   }
  // }

  // if( document.getElementById("cta-modal-consult__close-btn") ) {
  //   document.getElementById("cta-modal-consult__close-btn").addEventListener("click", function() { 	 					//
  //     setTimeout(() => document.getElementById("cta-modal-consult").classList.remove("is-visible"), 200);
  //     setTimeout(() => document.getElementById("cta-overlay").classList.remove("is-visible"), 400);
  //   })
  // }
                      
  // if( document.getElementById("cta-overlay") ) { 
  //   document.getElementById("cta-overlay").addEventListener("click",function() {
  //     document.getElementById("cta-modal").classList.remove("is-visible");
  //     document.getElementById("cta-overlay").classList.remove("is-visible");
      
  //   })
                      
  // }


  // STEAKY HEADER 

  // When the user scrolls the page, execute myFunction
  window.onscroll = function() {
    showSteakyHeader()
  };



  // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function showSteakyHeader() {
    //if( window.matchMedia('(max-width: 1024px)').matches ) {

      var header = document.querySelector('header.mkdf-page-header');
      if (header) {

      
        var sticky = header.offsetTop;
        
      //}
      //else {
        

      //}

        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
    
  }


  function makeImagesDragOnHover() {

    if( $(".image__animation-tranform") ) {

      var matWidth = $(".image__animation-tranform").width();
      var matHeight = $(".image__animation-tranform").height();
      var matHWidth = matWidth / 2;
      var matHHeight = matHeight / 2;


      $(".image__animation-tranform").wrap("<div class='image__animation-tranform-wrap'></div>").parent().css({
        // "height": matHeight,
        // "width": matWidth
      });

    }

    if( $(".image__animation-tranform-wrap") ) {

      $(".image__animation-tranform-wrap").mousemove(function(e) {
        $(this).find(".image__animation-tranform").css("-webkit-transform", "rotateX(" + (e.clientY - matHHeight) / matHHeight * -10 + "deg) rotateY(" + (e.clientX - matHWidth) / matHWidth * 20 + "deg)");
      });

      $(".image__animation-tranform-wrap").mouseout(function() {
        $(this).find(".image__animation-tranform").css("-webkit-transform", "rotateX(0) rotateY(0)");
        // $(".image__animation-tranform p").css("-webkit-transform", "translateZ(50px)");
      });

      $(".image__animation-tranform-wrap").hover(function() {
        $(".image__animation-tranform p").css("-webkit-transform", "translateZ(0px)");
      });

    }



  }

  makeImagesDragOnHover();



  /*** SOCIAL MEDIA SHARING  */

  // Share = {
  // 	vkontakte: function(purl, ptitle, pimg, text) {
  // 		url  = 'http://vkontakte.ru/share.php?';
  // 		url += 'url='          + encodeURIComponent(purl);
  // 		url += '&title='       + encodeURIComponent(ptitle);
  // 		url += '&description=' + encodeURIComponent(text);
  // 		url += '&image='       + encodeURIComponent(pimg);
  // 		url += '&noparse=true';
  // 		Share.popup(url);
  // 	},
  // 	odnoklassniki: function(purl, text) {
  // 		url  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
  // 		url += '&st.comments=' + encodeURIComponent(text);
  // 		url += '&st._surl='    + encodeURIComponent(purl);
  // 		Share.popup(url);
  // 	},
  // 	facebook: function(purl, ptitle, pimg, text) {
  // 		url  = 'http://www.facebook.com/sharer.php?s=100';
  // 		url += '&p[title]='     + encodeURIComponent(ptitle);
  // 		url += '&p[summary]='   + encodeURIComponent(text);
  // 		url += '&p[url]='       + encodeURIComponent(purl);
  // 		url += '&p[images][0]=' + encodeURIComponent(pimg);
  // 		Share.popup(url);
  // 	},
  // 	twitter: function(purl, ptitle) {
  // 		url  = 'http://twitter.com/share?';
  // 		url += 'text='      + encodeURIComponent(ptitle);
  // 		url += '&url='      + encodeURIComponent(purl);
  // 		url += '&counturl=' + encodeURIComponent(purl);
  // 		Share.popup(url);
  // 	},
  // 	mailru: function(purl, ptitle, pimg, text) {
  // 		url  = 'http://connect.mail.ru/share?';
  // 		url += 'url='          + encodeURIComponent(purl);
  // 		url += '&title='       + encodeURIComponent(ptitle);
  // 		url += '&description=' + encodeURIComponent(text);
  // 		url += '&imageurl='    + encodeURIComponent(pimg);
  // 		Share.popup(url)
  // 	},

  // 	popup: function(url) {
  // 		window.open(url,'','toolbar=0,status=0,width=626,height=436');
  // 	}
  // };
  




});