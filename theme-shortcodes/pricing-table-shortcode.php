<?php
if(!defined('ABSPATH')) die ('-1');

function jalil_pricing_shortcode($atts , $content = null){

	extract( shortcode_atts( array(
        'style' => 'active',
        'title' => '',
        'description' => '',
        'amount' => '',
        'button_link' => '',
        'button_text' => '',
    ), $atts) );

    $jalil_pricing_markup = '
        <div class="single-table mp-default '.esc_attr( $style ).'">
            <div class="table-head">
                <h2 class="table-title">'.esc_html( $title ).'</h2>
                <p class="text">'.esc_html( $description ).'</p>
                <div class="price">
                    <div class="ammount">$<span>'.esc_html( $amount ).'</span></div>
                </div>
            </div>
            <ul class="table-list">
    ';

    foreach( $atts['options'] as $key => $item ){ 
        $jalil_pricing_markup .='
            <li>'.esc_html( $item->feature ).'</li>
        ';
    }

    $jalil_pricing_markup .= '
            </ul>
            <div class="table-bottom">
                <a class="button" href="'.esc_url( $button_link ).'"><i class="fa fa-cart-arrow-down"></i>'.esc_html( $button_text ).'</a>
            </div>
        </div>
    ';
    return $jalil_pricing_markup;
}
add_shortcode( 'jalil_pricing', 'jalil_pricing_shortcode' );