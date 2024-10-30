<?php
if(!defined('ABSPATH')) die ('-1');

function jalil_btn_shortcode($atts , $content = null){

	extract( shortcode_atts( array(
        'style' => '1',
        'link_url' => '',
        'link_text' => '',
        'icon' => '',
    ), $atts) );


    if($style == 1){
        $jalil_btn_markup = '
            <a class="button primary" href="'.esc_url( $link_url ).'">'.esc_html( $link_text ).'<i class="'.esc_attr( $icon ).'"></i></a>
        ';
    }else{
        $jalil_btn_markup = '
            <a href="'.esc_url( $link_url ).'" class="button call-to-action"><i class="'.esc_attr( $icon ).'"></i>'.esc_html( $link_text ).'</a>
        ';
    }
		
    return $jalil_btn_markup;
}
add_shortcode( 'jalil_btn', 'jalil_btn_shortcode' );