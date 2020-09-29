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
  

$(function () {
    SlickSlider__init();
    MySlider1__init();
});