<?php
if(!defined('ABSPATH')) die ('-1');

function jalil_count_shortcode($atts , $content = null){

	extract( shortcode_atts( array(
        'style' => 'default',
        'icon' => '',
        'number' => '',
        'description' => '',
    ), $atts) );

    $master_class = apply_filters( 'kc-el-class', $atts );

    $jalil_count_markup = '<div class="static-single '.esc_attr( $style ).' '.esc_attr( implode(' ', $master_class) ).'">';

    if(!empty($icon)){
	    $jalil_count_markup .= '
			<div class="icon">
				<i class="'.esc_attr( $icon ).'"></i>
			</div>
	    ';
	}

	$jalil_count_markup .= '<div class="s-info">';

    if(!empty($number)){
	    $jalil_count_markup .= '
			<div class="number">
				<span class="counter">'.esc_html( $number ).'</span>
			</div>
	    ';
	}

    if(!empty($description)){
	    $jalil_count_markup .= ''.wpautop(esc_html($description)).'';
	}

	$jalil_count_markup .= '</div></div>';
		
    return $jalil_count_markup;
}
add_shortcode( 'jalil_count', 'jalil_count_shortcode' );