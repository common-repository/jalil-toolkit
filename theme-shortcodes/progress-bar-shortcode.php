<?php
if(!defined('ABSPATH')) die ('-1');

function jalil_progress_bar_shortcode($atts , $content = null){
    $jalil_progress_bar_markup = '<div class="skill-main">';

    foreach( $atts['options'] as $key => $item ){ 
        $jalil_progress_bar_markup .='
            <div class="single-skill">
                <div class="skill-info">
                    <h4>'.esc_html( $item->label ).'</h4>
                    <span>'.esc_html( $item->value ).'%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="'.esc_html( $item->value ).'" aria-valuemin="0" aria-valuemax="100" style="width: '.esc_html( $item->value ).'%;">
                    </div>
                </div>
            </div>
        ';
    }
    $jalil_progress_bar_markup .= '</div>';

    return $jalil_progress_bar_markup;
}
add_shortcode( 'jalil_progress_bar', 'jalil_progress_bar_shortcode' );