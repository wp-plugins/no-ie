<?php
/*
Plugin Name: No IE
Plugin URI: http://www.e-noise.com/joomla-extensions/no-ie-wordpress-plugin.html
Description: Block IE7 and earlier and display friendly message
Author: lupomontero, svnlto
Version: 0.1
Author URI: http://www.e-noise.com
*/

function no_ie_append_head()
{
    $array      = array();
    $no_ie_css  = get_bloginfo('url');
    $no_ie_css .= "/wp-content/plugins/no-ie/assets/styles.css";
    
    $array[] = "<!-- No IE styles -->";
    $array[] = "<!--[if lte IE 7]>";
    $array[] = "  <link href=\"$no_ie_css\""; 
    $array[] = "    rel=\"stylesheet\""; 
    $array[] = "    type=\"text/css\" />";
    $array[] = "<![endif]-->";
    
    echo "\n".implode("\n", $array)."\n\n";
}

function no_ie_append_footer()
{
    $array = array();
    
    // Add No IE script
    $path     = get_bloginfo('url')."/wp-content/plugins/no-ie";
    $jq_js    = $path."/load-jquery-if-not-loaded.js";
    $no_ie_js = $path."/no-ie.js";
    $array[]  = "<!-- No IE -->";
    $array[]  = "<script type=\"text/javascript\" src=\"$jq_js\"></script>";
    $array[]  = "<script type=\"text/javascript\" src=\"$no_ie_js\"></script>";
    
    echo "\n".implode("\n", $array)."\n\n";
}

add_action('wp_head', 'no_ie_append_head');
add_action('wp_footer', 'no_ie_append_footer');
