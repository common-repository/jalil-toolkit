<?php
if(!defined('ABSPATH')) die ('-1');

function jalil_title_shortcode($atts , $content = null){

	extract( shortcode_atts( array(
        'text_align' => 'center',
        'title' => '',
        'sub_title' => '',
        'description' => '',
    ), $atts) );

    $jalil_title_markup = '
    	<div class="section-title text-'.esc_attr( $text_align ).'">
    ';

    if(!empty($title || $sub_title)){
	    $jalil_title_markup .= '
			<h2>'.esc_html( $title ).'<span> '.esc_html( $sub_title ).'</span></h2>
	    ';
	}


    if(!empty($description)){
	    $jalil_title_markup .= ''.wpautop(esc_html($description)).'';
	}

	$jalil_title_markup .= '</div>';
		
    return $jalil_title_markup;
}
add_shortcode( 'jalil_title', 'jalil_title_shortcode' );