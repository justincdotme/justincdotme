$(document).ready(function(){

    $window = $(window);

    //Set page's min-height to 100% window height
    winHeight = $window.height();
    $('.pages').each(function()
    {
        elementHeight = $(this).height();
        if(elementHeight < winHeight) {
            $(this).height(winHeight);
        }
    });

    //Parallax scrolling
    $('section[data-type="background"]').each(function(){
        var $jThis = $(this);
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $jThis.data('speed'));
            var coords = '50% '+ yPos + 'px';
            $jThis.css({
                backgroundPosition: coords
            });
        });
    });


    //Smooth Scrolling
    $('a.scroll').on('click', function(e) {
        var a = $(this);
        $('html, body').stop().animate({
            scrollTop: $(a.attr('href')).offset().top
        }, 1000, 'easeInOutExpo');
        e.preventDefault();
    });
});