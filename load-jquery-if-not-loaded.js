/*
 * No IE
 *
 * Copyright (c) 2009 Luis Montero
 * BSD Revised License
 *
 * Date: 2009-10-07
 */

// Load jQuery if it hasn't been loaded yet
if ((typeof jQuery == 'undefined') || (jQuery == null)) { 
	var jq_url = "http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js";
	var jq_tag = "%3Cscript src='" + jq_url + "' type='text/javascript'%3E%3C/script%3E"
	document.write(unescape(jq_tag));
}
