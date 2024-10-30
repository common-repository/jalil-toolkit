<?php
if(!defined('ABSPATH')) die ('-1');

function jalil_service_shortcode($atts , $content = null){

	extract( shortcode_atts( array(
        'number' => '',
        'title' => '',
        'description' => '',
        'icon' => '',
    ), $atts) );

    $jalil_service_markup = '
        <div class="single-service">
    ';

    if(!empty($number)){
        $jalil_service_markup .= '
            <div class="number"><p>'.esc_html( $number ).'</p></div>
        ';
    }

    if(!empty($title)){
        $jalil_service_markup .= '
            <h4>'.esc_html( $title ).'</h4>
        ';
    }

    if(!empty($description)){
        $jalil_service_markup .= '
            '.wpautop(esc_html($description)).'
        ';
    }

    if(!empty($icon)){
        $jalil_service_markup .= '
            <i class="ico-bg '.esc_attr( $icon ).'"></i>
        ';
    }

	$jalil_service_markup .= '</div>';
		
    return $jalil_service_markup;
}
add_shortcode( 'jalil_service', 'jalil_service_shortcode' );