/*
Theme Name: LOANLYtika - MULTIPURPOSE HTML5 Template.
Author: Metropolitantheme
Author URL: https://themeforest.net/user/metropolitantheme
Version: 1.0.0
*/
(function ($) {
  'use strict';
  // head-search
  $("li.search").on("click", function () {
    var $this = $(this).find('i');
    if ($this.hasClass('fa-search')) {
      $this.removeClass('fa-search').addClass('fa-times');
    } else {
      $this.removeClass('fa-times').addClass('fa-search');
    }
    $(".topbar-search").toggleClass('search-visible');
  });
  //fix header
  $(window).scroll(function () {
    var sticky = $('.main-navigation-style-1, .header-style-2'),
      scroll = $(window).scrollTop();
    if (scroll >= 100) sticky.addClass('sticky');
    else sticky.removeClass('sticky');
  });
  $(document).ready(function () {
    $('.datepickr').datepicker({
      timepicker: false,
      minDate: new Date()
    });
    $('.datepickrnew').datepicker({
      timepicker: false,
    });
    $('.timepickr').datepicker({
      timepicker: true,
      onlyTimepicker: true,
      range: true,
    });
  });
  // custom-select
  $(document).ready(function () {
    $('.custom-select').niceSelect();
  });

  // navigation
  $('.menu-item-has-children>a').append('<span class="arrow"></span>');
  $('.menu-item-has-megamenu>a').append('<span class="arrow"></span>');
  //mobile nav
  $(document).ready(function () {
    $(".hamburger-menu").on('click', function () {
      $(".menu-btn").toggleClass("active");
      $(".main-menu, .main-navigation-style-2").toggleClass("active");
      $("body").toggleClass("menu-open");
      $('html').toggleClass('overflow');
    });
  });
  $(document).ready(function () {
    $('.menu-item-has-children>a, .menu-item-has-megamenu>a').on('click', function () {
      $(this).removeAttr('href');
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul.sub-menu, .megamenu').slideUp();
      } else {
        element.addClass('open');
        element.children('ul.sub-menu, .megamenu').slideDown();
        element.siblings('li').children('ul.sub-menu, .megamenu').slideUp();
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul.sub-menu, .megamenu').slideUp();
      }
    });
  });
  // banner-slider
  $('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    speed: 400,
    focusOnSelect: true,
    cssEase: 'linear'
  });
  $('.banner-slider-2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: true,
    speed: 400,
    focusOnSelect: true,
    cssEase: 'linear'
  });
  $('.services-detail-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 400,
    focusOnSelect: true,
    cssEase: 'linear'
  });
  // services-slider
  $('.services-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    loop: true,
    autoplay: true,
    speed: 400,
    cssEase: 'linear',
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: true,
        slidesToShow: 2
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1
      }
    }]
  });
  // doctors-slider
  $('.doctors-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    loop: true,
    autoplay: true,
    speed: 400,
    cssEase: 'linear',
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: true,
        slidesToShow: 3
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 2
      }
    }, {
      breakpoint: 480,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1
      }
    }]
  });
  $('.doctors-slider-2').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    loop: true,
    autoplay: true,
    speed: 400,
    cssEase: 'linear',
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  // Blog-slider
  $('.blog-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    loop: true,
    autoplay: true,
    speed: 400,
    cssEase: 'linear',
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: true,
        slidesToShow: 2
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1
      }
    }]
  });
  $('.blog-slider-2').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    loop: true,
    autoplay: true,
    speed: 400,
    cssEase: 'linear',
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }]
  });

  // lw-billing-sliders

  $('.lw-billing-content-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade:true,
      speed: 1000,
      asNavFor: '.lw-billing-sliders'
  });
  $('.lw-billing-sliders').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.lw-billing-content-slider',
    dots: false,
    focusOnSelect: true,
    arrows: true,
    infinite: true,
    autoplay: false,
    speed: 1000,
    cssEase: 'linear',

    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: true,
        slidesToShow: 3
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 2
      }
    }, {
      breakpoint: 480,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1
      }
    }]
  });

  // testimonial slider
  $('.testimonial-nav').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: false,
      dots:false,
      centerMode: true,
      centerPadding: '0px',
      focusOnSelect: true,
      asNavFor: '.testimonial-for',
      responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 3,
        arrows:false,
      }
    }]
  });

     $('.testimonials-slider-2').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    speed: 500,
    cssEase: 'linear',
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 1
      }
    }]
  });
  $('.testimonial-for').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      draggable: false,
      dots:false,
      vertical:true,
      asNavFor: '.testimonial-nav'
  });

  // lw-Price-range-slider

$(function () {

var $range = $(".js-range-slider"),
    $inputFrom = $(".js-input-from"),
    instance,
    min = 0,
    max = 1000000,
    from = 0,
    to = 0;

$range.ionRangeSlider({
    min: min,
    max: max,
    from: 0,
    to: 500000,
    onStart: updateInputs,
    onChange: updateInputs,
    step: 2,
    prettify_enabled: true,
    prettify_separator: ".",
  force_edges: true
});

instance = $range.data("ionRangeSlider");

function updateInputs (data) {
    from = data.from;
    $inputFrom.prop("value", from);
}

$inputFrom.on("input", function () {
    var val = $(this).prop("value");

    instance.update({
        from: val
    });
});

    });

// lw-Equity-range-slider

$(function () {

var $range = $(".js-range-slider1"),
    $inputFrom = $(".js-input-equity"),
    instance,
    min = 0,
    max = 1000000,
    from = 0,
    to = 0;

$range.ionRangeSlider({
    min: min,
    max: max,
    from: 0,
    to: 500000,
    onStart: updateInputs,
    onChange: updateInputs,
     step: 0,
    prettify_enabled: true,
    prettify_separator: ".",
  force_edges: true
});

instance = $range.data("ionRangeSlider");

function updateInputs (data) {
    from = data.from;
    $inputFrom.prop("value", from);
}

$inputFrom.on("input", function () {
    var val = $(this).prop("value");

    instance.update({
        from: val
    });
});

    });

// lw-Period-range-slider

$(function () {

var $range = $(".js-range-slider2"),
    $inputFrom = $(".js-payback-period"),
    instance,
    min = 0,
    max = 100,
    from = 0,
    to = 0;

$range.ionRangeSlider({
    min: min,
    max: max,
    from: 0,
    to: 30,
    onStart: updateInputs,
    onChange: updateInputs,
    step: 0,
    prettify_enabled: true,
    prettify_separator: ".",
  force_edges: true
});

instance = $range.data("ionRangeSlider");

function updateInputs (data) {
    from = data.from;
    $inputFrom.prop("value", from);
}

$inputFrom.on("input", function () {
    var val = $(this).prop("value");

    instance.update({
        from: val
    });
});

    });
// Counter up
  $(function () {
  if ($('div').is('.counter-up')) {
    var a = 0;
    $(window).scroll(function() {
      var oTop = $('.counter-up').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },
            {
              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }
            });
        });
        a = 1;
      }
    });
       }
  });

  $('.gallery').magnificPopup({
    delegate: 'a.popup',
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-fade',
    gallery: {
      enabled: true
    }
  });
  // back to top
  var offset = 220;
  var duration = 500;
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > offset) {
      $('.back-top').fadeIn(duration);
    } else {
      $('.back-top').fadeOut(duration);
    }
  });
  $('.back-top').on('click', function (event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, "slow");
    return false;
  });
  if ($(window).scrollTop() > offset) {
    $('.back-top').fadeOut(0);
  }
  $('a[href="#"]').on('click', function (e) {
    e.preventDefault ? e.preventDefault() : e.returnValue = false;
  });
  // smooth scroll
  $.fn.smoothScroll = function (setting) {
    var _default = {
        duration: 1000,
        easing: 'swing',
        offset: 0,
        top: '100px'
      },
      _setting = $.extend(_default, setting),
      _handler = function () {
        var dest = 0,
          target = this.hash,
          $target = $(target);
        $(this).on('click', function (e) {
          e.preventDefault();
          if ($target.offset().top > ($(document).height() - $(window).height())) {
            dest = $(document).height() - $(window).height();
          } else {
            dest = $target.offset().top - _setting.offset;
          }
          $('html, body').animate({
            scrollTop: dest
          }, _setting.duration, _setting.easing);
        });
      };
    return this.each(_handler);
  };
  $('.scrollbtn').smoothScroll({
    duration: 1000, // animation speed
    easing: 'swing', // find more easing options on http://api.jqueryui.com/easings/
    offset: 0 // custom offset
  });
  // on click Video
  $(document).on('click', '.js-videoPoster', function (e) {
    e.preventDefault();
    var poster = $(this);
    var wrapper = poster.closest('.js-videoWrapper');
    videoPlay(wrapper);
  });

  function videoPlay(wrapper) {
    var iframe = wrapper.find('.js-videoIframe');
    var src = iframe.data('src');
    wrapper.addClass('videoWrapperActive');
    iframe.attr('src', src);
  }
  // filter gallery
  $(document).ready(function () {
    $('.gallery-grid').isotope(function () {
      itemSelector: '.filter-box'
    });
    $('.filter-gallery>ul>li').on('click', function () {
      $('.filter-gallery>ul>li').removeClass('active');
      $(this).addClass('active');
      var selector = $(this).attr('data-filter');
      $('.gallery-grid').isotope({
        filter: selector
      })
      return false;
    });
  });
  $('.gallery-grid').magnificPopup({
    delegate: 'a.popup',
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-fade',
    gallery: {
      enabled: true
    }
  });
  // banner animation
  $(function () {
    if ($('body').is('.animated-banner')) {
      particlesJS('banner-animation', {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      });
    }
  });

  // twitter slider
  $('.twitter-slider').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
      dots:false,
      vertical:true,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 3000,
      cssEase: 'linear',
      pauseOnHover: true
  });
  // time counter
  function makeTimer() {
    var endTime = new Date("01 January 2021 00:00:00 GMT+05:30");
    endTime = (Date.parse(endTime) / 1000);
    var now = new Date();
    now = (Date.parse(now) / 1000);
    var timeLeft = endTime - now;
    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
    if (hours < "10") {
      hours = "0" + hours;
    }
    if (minutes < "10") {
      minutes = "0" + minutes;
    }
    if (seconds < "10") {
      seconds = "0" + seconds;
    }
    $("#cvdays").html(days);
    $("#cvhours").html(hours);
    $("#cvminutes").html(minutes);
    $("#cvseconds").html(seconds);
  }
  setInterval(function () {
    makeTimer();
  }, 1000);
  //
  $(function () {
    if ($('div').is('.exp-cal2-loan')) {
      $(document).ready(function() {
      //this calculates values automatically
      sum();
          $("#calculate").on("click", function() {
              sum();
          });
      });
      function sum() {
              var num1 = document.getElementById('num1').value;
              var num2 = document.getElementById('num2').value;
        var result = parseInt(num1) / parseInt(num2);
              if (!isNaN(result)) {
                  document.getElementById('sum').value = result;
              }
          }
      }
  });

  // steps
  $('#add-user-tab').steps({});
  // quantity
  $('.minus-btn').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
    if (value > 50000) {
      value = value - 1000;
    } else {
      value = 0;
    }
    $input.val(value);
  });
  $('.plus-btn').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
    if (value < 100000) {
      value = value + 1000;
    } else {
      value = 100000;
    }
    $input.val(value);
  });

$(function () {
    if ($('section').is('.user-dashboard-sec')) {
      // small piechart
      var i = 0,
      prec;
      var degs = $(".precs").attr("class").split(' ')[1];
      var activeBorder = $(".activeBorder");
      setTimeout(function () {
        if ($(".circlestyle").is(":hover")) loopit("c");
        if ($(".circlestyle-big").is(":hover")) loopit("c");
        else loopit("nc");
      }, 1);

      function loopit(dir) {
        if (dir == "c") i++
          else i--;
        if (i < 0) i = 0;
        if (i > degs) i = degs;
        prec = (100 * i) / 360;
        $(".prec").html(Math.round(prec) + "%");
        if (i <= 180) {
          activeBorder.css('background-image', 'linear-gradient(' + (90 + i) + 'deg, transparent 50%, #0070ba 50%),linear-gradient(90deg, #0070ba 50%, transparent 50%)');
        } else {
          activeBorder.css('background-image', 'linear-gradient(' + (i - 90) + 'deg, transparent 50%, #11c391 50%),linear-gradient(90deg, #0070ba 50%, transparent 50%)');
        }
        setTimeout(function () {
          loopit("c");
        }, 1);
      }


      // small graph
      var ctx = document.getElementById('small-graph').getContext("2d");
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ["", "", "", "", "", "", "", "", "", "", ""],
              datasets: [{
                  label: "",
                  borderColor: "#0070ba",
                  pointBorderColor: "#0070ba",
                  pointBackgroundColor: "#0070ba",
                  pointHoverBackgroundColor: "#0070ba",
                  pointHoverBorderColor: "#0070ba",
                  pointBorderWidth: 0,
                  pointHoverRadius: 0,
                  pointHoverBorderWidth: 1,
                  pointRadius: 0,
                  fill: true,
                  options: false,
                  backgroundColor: "#0070ba",
                  borderWidth: 0,
                  data: [200, 175, 150, 125, 100, 75, 50, 25, 0]
              }]
          },
          options: {
              legend: {
                  display: false
              },
              scales: {
                  yAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          display: false
                      }
                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          display: false
                      }
                  }]
              }
          }
      });

      // Big Graph

      var ctx = document.getElementById('big-graph').getContext("2d");
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
              datasets: [{
                  label: "",
                  borderColor: "#0070ba",
                  pointBorderColor: "#0070ba",
                  pointBackgroundColor: "#0070ba",
                  pointHoverBackgroundColor: "#0070ba",
                  pointHoverBorderColor: "#0070ba",
                  pointBorderWidth: 0,
                  pointHoverRadius: 0,
                  pointHoverBorderWidth: 1,
                  pointRadius: 0,
                  fill: true,
                  options: false,
                  backgroundColor: "#0070ba",
                  borderWidth: 0,
                  data: [200, 175, 150, 125, 100, 75, 50, 25, 0]
              }]
          },
          options: {
              legend: {
                  display: false
              },
              scales: {
                  yAxes: [{
                      ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          maxTicksLimit: 5,
                          padding: 20
                      },
                      gridLines: {
                          drawTicks: false,
                          display: false
                      }

                  }],
                  xAxes: [{
                      gridLines: {
                          zeroLineColor: "transparent"
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold"
                      }
                  }]
              }
          }
      });

    }
});

  new WOW().init();
})(jQuery);
