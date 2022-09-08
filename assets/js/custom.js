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
	var colophon = document.getElementById('colophon');
	var temp = 0;
	temp = window.innerHeight - colophon.clientHeight;
	document.getElementById('content').style.height = temp + 'px';
}

// Run on initial load.
customContent();

// Run on resize.
window.onresize = customContent;

