var $html =  $('html');

function MenuBar_init() {
    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop();
      if ( scrollTop > 80 ) {
        $html.addClass('menu-bar-hidden');
      }
      else {
        $html.removeClass('menu-bar-hidden');
      }
    });
  }


function dotSlide() {
    var $this = $(this);
    var $slider = $this.closest('.slider');
    var $dotActived = $slider.find('.dots > ul > li.active');
    var $slideActived = $slider.find('.slides > div.active');
    var $dotIndex = $this.index();
    var $slides = $slider.find('.slides > div');
    var $slideIndex = $slides.eq($dotIndex);

    $dotActived.removeClass('active');
    $slideActived.removeClass('active');
    $slideIndex.addClass('active');
    $this.addClass('active');
}

function dotSlide__init(){
    $('.dots > ul > li').click(dotSlide);
}

function dotsClick(){
    var $actived = $('.dots > ul > li.active');
    var $post = $actived.next();

    if ( $post.length == 0 ) {
        $('.dots > ul > li:first-child').click();
    }
    else {
        $post.click();
    }
}



function slider(){
    var $this = $(this);
    var $parent = $this.closest('.slider');
    var $actSlide = $parent.find(' > .slides > .active');
    var $dot = $parent.find(' > .dots > ul > li');
    var $actDot = $parent.find(' > .dots > ul > li.active');
    var $post;
    var postIndex;
    
    if ( $this.index() == 0 ) {
        $post = $actSlide.prev();
        if ( $post.length == 0 ) {
            $post = $('.slider > .slides > div:last-child');
        }
    }
    else {
        $post = $actSlide.next();
        if ( $post.length == 0 ) {
            $post = $('.slider > .slides > div:first-child');
        }
    }
    
    postIndex = $post.index();
    
    
    $actSlide.removeClass('active');
    $post.addClass('active');
    $actDot.removeClass('active');
    $dot.eq(postIndex).addClass('active');
}


function slider__init(){
    $('.btn-slide > div').click(slider);
}


$(function() {
    dotSlide__init();
    slider__init();
    MenuBar_init();
});
   