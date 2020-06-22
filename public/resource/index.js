$(function(){
    $('.slider > .side-bar > div').click(function(){
        var $clickedBtn = $(this);
        var $slider = $clickedBtn.closest('.slider');

        var isLeft = $clickedBtn.index() == 0;
    
        var $currnet = $slider.find('.slides > .active');
        var $post = null;
    
        if ( isLeft ) {
            $post = $currnet.prev();
        }
        else {
            $post = $currnet.next();
        }

        if ( $post.length == 0 ) {
            if ( isLeft ){
                $post = $slider.find('.slides > div:last-child');
            }
            else {
                $post = $slider.find('.slides > div:first-child');
            }
        }
        

        $currnet.removeClass('active');
        $post.addClass('active');
    });
});

$(function(){
    function a() {
    $('.slider .side-bar > div:last-child').click();
}

setInterval(a,5000);
});
