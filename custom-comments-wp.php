<?php
/**
 * Plugin Name: استایل سفارشی دیدگاه
 * Description: یک افرونه ساده برای سفارشی سازی ظاهر بخش دیدگاه وردپرس
 * Version: 1.0
 * Author: عبدالرحمان مهدوی
 */

 
 if(!defined('ABSPATH')){
    exit;
 }
 define('CCSCSS', plugin_dir_url(__FILE__) . 'style.css');
function ccsstyle() {
 wp_enqueue_style('ccscss', CCSCSS, array());
}

add_action('wp_enqueue_scripts', 'ccsstyle');
