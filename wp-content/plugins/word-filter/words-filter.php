<?php
/*
Plugin Name: فیلتر سازی کلمات
Plugin URI: https://mahdiehahmadi.ir/
Description:  یک افزونه ساده برای فیلتر سازی کلمات در وردپرس.
Version: 1.0.0
Author: mahdieh ahmadi
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: filter-words
*/



define('WF_DIR',plugin_dir_path(__FILE__));

define('WF_URL',plugin_dir_url(__FILE__));
define('WF_INC',WF_DIR.'/inc');

function wf_filter_words($content){
    $word ='WordPress';
    $rep ='<b style="color: red;font-size: 22px;">wp</b>';
    $content= preg_replace("/{$word}/",$rep,$content);

    return $content;
}

add_filter('the_content','wf_filter_words');