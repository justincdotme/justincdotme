require('./bootstrap');

var justinc = window.justinc || {};
justinc.contactForm = {};

//Cache the window object
var $window = $(window);

/**
 * Set home page's height to 100% window height
 */
justinc.setHomeHeight = function() {
    winHeight = $window.height();
    $('section#home').height(winHeight);
};

/**
 * Reset home page's height to 100% on orientation change
 */
window.addEventListener("orientationchange", function() {
    //Fire homeHeight method
    justinc.setHomeHeight();
    //Fire parallax scrolling method
    justinc.parallaxScrolling();
});

/**
 * Reset home page's height to 100% on window resize
 */
window.addEventListener("resize", function() {
    //Fire homeHeight method
    justinc.setHomeHeight();
    //Fire parallax scrolling method
    justinc.parallaxScrolling();
});

/**
 * Auto close mobile nav when link is clicked
 */
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});

/**
 * Auto hyphenate the Phone Number field using a regex.
 */
justinc.contactForm.autoHyphenate = function() {
    $("input[name='phone']").keyup(function(){
        //Remove hyphens that the user enters.
        var phoneNum = $(this).val().split("-").join("");
        if($(this).val().length > 3){
            phoneNum = phoneNum.match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");
            $(this).val(phoneNum);
        }
    });
};

/**
 * Handle display of validation messages.
 */
justinc.contactForm.showErrors = function(errors) {
    $(':input.has-error').removeClass('has-error');
    $('span.error').remove();
    for (let field in errors) {
        if (errors.hasOwnProperty(field)) {
            //Show the error
            if ('g-recaptcha-response' == field) {
                //TODO - Show recaptcha message
                jQuery('div.g-recaptcha').before('<span class="error">' + errors[field][0] + '</span>');
            } else {
                $(':input[name="' + field + '"]').before('<span class="error">' + errors[field][0] + '</span>');
            }
        }
    }
};

justinc.contactForm.resetButton = function (submitBtn) {
    submitBtn.text('Contact');
};

/**
 * Handle form submission.
 */
$('form#contact-form').submit(function(e) {
    let submitBtn = $(this).find('button[type="submit"]');
    submitBtn.text('Sending...');
    var url = $(this).attr('action');
    var data = $(this).serialize();

    $.post(url, data, function(d) {
        if ('error' == d.status) {
            justinc.contactForm.resetButton(submitBtn);
            justinc.contactForm.showErrors(response.errors);
        }
        $('form#contact-form').slideUp().after('<h1>Thank you, I will contact you soon!</h1>');
    }, 'json').fail(function (d) {
        justinc.contactForm.resetButton(submitBtn);
        justinc.contactForm.showErrors(d.responseJSON.errors);
    });

    e.preventDefault();
});

/**
 * Hide scroll down icon when not on homepage.
 */
$(window).scroll(function() {
    $downArrow = $("a#scroll-down");
    $downArrow.css({
        display: 'inline'
    });
    if ($(this).scrollTop() > $('section#home').height()) {
        $downArrow.css({
            'display': 'none'
        });
    }
});

/**
 * Use jQuery easing plugin for smooth scrolling.
 */
$('a.scroll').click(function(e) {

    var $jThis = $(this);

    $('html, body').stop().animate({
        scrollTop: $($jThis.attr('href')).offset().top
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
});

/**
 * Reset the background position
 */
justinc.resetBackground = function(c) {
    c.css('background-position', '0px 0px');
    if($window.width() >= 760) {
        c.css('background-position', '50% 0px');
    }
};
/**
 * Activate parallax scrolling.
 */
justinc.parallaxScrolling = function() {
    $('section[data-type="background"]').each(function(){
        //Cache $(this)
        var $jThis = $(this);
        justinc.resetBackground($jThis);
        $window.scroll(function() {
            if($(window).width() >= 760) {
                var yPos = -($window.scrollTop() / $jThis.data('speed'));
                var coords = '50% '+ yPos + 'px';
                $jThis.css({
                    backgroundPosition: coords
                });
            }
        });
    });
};

$(document).ready(function(){

    //Set homepage height to 100% of window height
    justinc.setHomeHeight();

    //Fire autoHyphenate method
    justinc.contactForm.autoHyphenate();

    //Fire parallax scrolling method
    justinc.parallaxScrolling();
});