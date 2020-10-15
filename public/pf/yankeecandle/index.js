function SlickSlider__init() {
    $('.slide').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        appendDots: $('.main-slide-box .dots'),
        appendArrows: $('.main-slide-box .arrows'),
        nextArrow: '<div class="next"></div>',
        prevArrow: '<div class="prev"></div>',
        customPaging : function(slider, i) {
            return '';
        }
    });
}

function MySlider1__init() {
    $('.my-slider-1 > .owl-carousel').owlCarousel({
      responsive:{
        0:{
          items:4
        }
      },
      loop:true,
      dots:false,
      nav:true,
      navText: ['<img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/bn-prev-bt.png" alt="">','<img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/bn-next-bt.png" alt="">']
    });
  }

  function fr_slider__init() {
    $('.fr-slick').slick({
      infinite: true,
      dots:false,
      variableWidth: true,
      speed: 250,
      slidesToShow: 3,
      appendArrows: $('.fr-slider-arrows'),
      nextArrow: '<div class="next"><img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/bn-next-bt.png" alt=""></div>',
      prevArrow: '<div class="prev"><img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/bn-prev-bt.png" alt=""></div>'
    });
    // $('.fr-slider > .owl-carousel').owlCarousel({
    //   autoWidth:true,
    //   loop:true,
    //   dots:false,
    //   nav:true,
    //   navText: ['<', '>'],
    //   callbacks: true,
      
    // });
  }

  function TabBox__init() {
    $('[data-tab-head-item-name]').click(function() {
      var $this = $(this);
      var tabName = $this.attr('data-tab-name');
      var itemName = $this.attr('data-tab-head-item-name');
      // [for]
      // 모든 것을 숨기고
      $('[data-tab-name="' + tabName + '"]').removeClass('active');
      
      $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
      $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');
    });
  }

  function PrSlider__init() {
    $('.pr-slider > .owl-carousel').owlCarousel({
      responsive:{
        0:{
          items:1
        }
      },
      loop:true,
      dots:false,
      autoplay:true,
      autoplayTimeout:5000
    });
  }
  

$(function () {
    SlickSlider__init();
    MySlider1__init();
    fr_slider__init();
    TabBox__init();
    PrSlider__init()
});