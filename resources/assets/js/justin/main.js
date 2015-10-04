var justinc = window.justinc || {};
justinc.contactForm = window.justinc.contactForm || {};
//Cache the window object
var $window = $(window);

/**
 * Set home page's height to 100% window height
 */
justinc.setHomeHeight = function()
{
    winHeight = $window.height();
    $('section#home').height(winHeight);
};

/**
 * Reset home page's height to 100% on orientation change
 */
window.addEventListener("orientationchange", function() {
    justinc.setHomeHeight();
}, false);

/**
 * Reset home page's height to 100% on window resize
 */

window.addEventListener("resize", function() {
    justinc.setHomeHeight();
}, false);

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
justinc.contactForm.autoHyphenate = function()
{
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
 * Check that each required field has a value.
 *
 * @returns  {boolean}
 */
justinc.contactForm.checkRequiredFields = function()
{
    var passedValidation = true;
    $('.required').each(function()
    {
        var empty = (!!$(this).val() === 'undefined' || $(this).val() === '');

        if(empty)
        {
            $('li.validation-error').remove();
            $('.contact-errors').show().find('ul.messages').append('<li class="validation-error">Please fill out all required fields.</li>');
            $(this).addClass('contact-form-error');
            passedValidation = false;
        }else {
            $('li.validation-error').remove();
            $(this).removeClass('contact-form-error');
        }
    });
    return passedValidation;
};

/**
 * Handle form submission.
 */
$('form#contact-form1234').submit(function(e)
{
    var submitBtn = $(this).find('button[type="submit"]');
    if(justinc.contactForm.checkRequiredFields())
    {
        submitBtn.text('Sending...');
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function(d)
        {
            $('form#contact-form').slideUp().after('<h1>Thank you, I will contact you soon!</h1>');
        });
    }
    e.preventDefault();
});

$(document).ready(function(){

    //Fire setHomeHeight method
    justinc.setHomeHeight();

    //Fire autoHyphenate method
    justinc.contactForm.autoHyphenate();



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

    //Hide scroll down icon when not on homepage
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

    //Smooth Scrolling
    $('a.scroll').on('click', function(e) {
        var a = $(this);
        $('html, body').stop().animate({
            scrollTop: $(a.attr('href')).offset().top
        }, 1000, 'easeInOutExpo');
        e.preventDefault();
    });

    new WOW().init();
});