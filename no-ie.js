/*
 * No IE
 *
 * Copyright (c) 2009 Luis Montero
 * BSD Revised License
 *
 * Date: 2009-10-07
 */

// Once the document is ready we check browser and proceed accordingly
$(document).ready(function() {
	if ($.browser.msie && $.browser.version.substr(0,3) < "8.0") {
	    // Replace body's content and display loading...
	    $('body').html('Loading...');
	
	    // Load content via AJAX
	    $('body').load('wp-content/plugins/no-ie/message.php');
	}
});
