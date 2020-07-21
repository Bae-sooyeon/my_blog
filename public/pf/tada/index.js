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
    var $post;
    
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
    
    $actSlide.removeClass('active');
    $post.addClass('active');
}


function slider__init(){
    $('.btn-slide > div').click(slider);
}


$(function() {
    dotSlide__init();
    slider__init();
});
   