var $window = $(window);
var scrollTop = $window.scrollTop();

function TopBar__init() {
    var beforeSideBarActivedScrollTop = 0;

    $('.btn-toggle-side-bar').click(function () {
        if ( $('html').hasClass('side-bar-actived') ) {
            $('html').removeClass('side-bar-actived');
            $(window).scrollTop(beforeSideBarActivedScrollTop);
        } 
        else {
            $('html').addClass('side-bar-actived');
            beforeSideBarActivedScrollTop = scrollTop;
        }
    });

    $window.scroll(function() {
        scrollTop = $window.scrollTop();

        if ( scrollTop > 1000 ) {
            $('.top-bar').addClass('hide');
        }
        else {
            $('.top-bar').removeClass('hide');
        }
    });
}




$(function () {
    TopBar__init();
});