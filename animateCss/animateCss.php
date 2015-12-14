<?php

// HOW TO USE
// <div data-animate-css="fadeIn" data-animate-css-delay=".5s"></div>

function spark_animate_css_scripts(){

	if (!is_admin()) {

        wp_enqueue_style(  'animateCss-css', MODDIR.'/animateCss/css/animateCss.css', false,   '1.0' );
        wp_enqueue_script( 'animateCss-js',    MODDIR.'/animateCss/js/animateCss.js',   array(), '1.0', true );

    }

}

add_action('wp_enqueue_scripts','spark_animate_css_scripts');
