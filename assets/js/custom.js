/**
 * File custom.js.
 *
 * cusomize
 */

/**
 * Add max-width & max-height to <iframe> elements, depending on their width & height props.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return {void}
 */
function customContent() {
	// var colophon = document.getElementById('colophon');
	// var temp = 0;
	// temp = window.innerHeight - colophon.clientHeight;
	// document.getElementById('content').style.height = temp + 'px';


    let width = $(window).width();

    if(width < 830) {
        
        $('.leftnav').css('left', '10%');
        $('.content-inner').css('margin-right', '10%');
    } 

    if(width < 470) {
        
        $('.leftnav').css('left', '5%');
        $('.content-inner').css('margin-right', '5%');
    } 

    var leftVal = $('.leftnav').offset().left + $('.leftnav').width()+20;
    var cssVal = leftVal + 'px';
    $('.content-inner').css('margin-left', cssVal);
    

    let height = $(window).height();
    $('.story').css('min-height', height+'px');
}

// Run on initial load.
customContent();

// Run on resize.
window.onresize = customContent;

