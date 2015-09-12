//Justinc.me code
var justinc = window.justinc || {};

justinc.contactForm = window.justinc.contactForm || {};

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
$('form#contact-form').submit(function(e)
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


/**
 * Display deferred images.
 */
justinc.loadDeferredImages = function()
{
    $('img.deferred').each(function()
    {
        var jThis = $(this);
        var realImage = jThis.attr('data-src');
        jThis.attr('src', realImage);
    });
};

/**
 * Enable smooth scrolling
 */
justinc.smoothScroll = function()
{
    $('a.scroll').on('click', function(e) {
        var a = $(this);
        $('html, body').stop().animate({
            scrollTop: $(a.attr('href')).offset().top
        }, 1000, 'easeInOutExpo');
        e.preventDefault();
    });
};

//Fire each method
justinc.loadDeferredImages();
justinc.smoothScroll();
justinc.contactForm.autoHyphenate();

$('body').vegas({
    slides: [
        { src: '/images/background.jpg' }
    ]
});

$('.filter-professional').click(function(e)
{
    e.preventDefault();
    $(this).css('color', '#fff');
    $('.filter-personal').css('color', '#337ab7');
    $('.professional').show();
    $('.personal').hide();
});

$('.filter-personal').click(function(e)
{
    e.preventDefault();
    $(this).css('color', '#fff');
    $('.filter-professional').css('color', '#337ab7');
    $('.personal').show();
    $('.professional').hide();
});

