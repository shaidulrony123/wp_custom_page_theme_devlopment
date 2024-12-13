$(function () {
  "use strict"

  new WOW().init();
  // cursor start
  var cursor = document.getElementById("cursor");

  document.onmousemove = function (e) {
    cursor.style.left = (e.pageX - 25) + "px";
    cursor.style.top = (e.pageY - 25) + "px";
    cursor.style.display = "block";
  }
  // cursor end


  // menu fix start
  var mapping = $('.main_menu').offset().top;

  $(window).scroll(function () {
    var scrolling = $(this).scrollTop();

    if (scrolling > mapping) {
      $('.main_menu').addClass('menu_fix');
    } else {
      $('.main_menu').removeClass('menu_fix');
    }

  });



  // menu fix start


  // top-bottom-btn fix start




  $('.btn_top_bottom').click(function () {
    $('html').animate({
      scrollTop: 0,
    }, 2000);
  });

  $(window).scroll(function () {
    var scrolling = $(this).scrollTop();

    if (scrolling > 200) {
      $('.btn_top_bottom').fadeIn();
    } else {
      $('.btn_top_bottom').fadeOut();
    }
  });

  // top-bottom-btn fix end


   // preloader start
   $(window).on('load', function () {
    $('.pre_loader').delay(2000).fadeOut();
  });
  // preloader end

  // banner slider start
  $('#banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    fade: true,
  });

  // banner slider end


  // blog slider start
  $('.blog_main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 767.98,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 575.98,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // blog slider end


  // >>>>>Mixit up js start

  var containerEl = document.querySelector('.filter_img');
  var mixer = mixitup(containerEl);

  // >>>>>Mixit up js end


  // aos
  AOS.init();
  // aos


  // venobox
  $('.venobox').venobox({
    spinner: 'wave',
    spinColor: '#cf1211',
    arrowsColor: '#cf1211',
    closeColor: '#cf1211',
  });

  // venobox


});