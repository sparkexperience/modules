
$(window).scroll(function(){
    doAnimateCss();
});

doAnimateCss();

function doAnimateCss(){
    $('[data-animate-css]').each(function(){
        if($(this).is(':in-viewport')) {
            animateCss($(this));
        }
    })
}

function animateCss( elements ) {
    elements.each(function(){
        $(this).css('animation-delay', $(this).attr('data-animate-css-delay') );
        $(this).addClass('animated ' + $(this).attr('data-animate-css'));
        $(this).css('visibility', 'visible');
    })

}

function animateCss_reset( elements ) {
    // elements.each(function(){
    //     $(this).removeClass('animated');
    // });
}
