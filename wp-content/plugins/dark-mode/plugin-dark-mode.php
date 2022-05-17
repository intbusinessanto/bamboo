<?php 

//Plugin name: Dark mode
//Description: Active the dark mode on your theme
//version: 1.0
//Author: Santiago Rodriguez
//Author Uri: http://github.com/intbusinessanto

function styles_plugin(){
    $styles_url = plugin_dir_url(__FILE__);


    wp_enqueue_style( 'dark_mode', $styles_url."/assets/css/style.css", '', '1.0','all');
}




add_action('wp_enqueue_scripts','styles_plugin');