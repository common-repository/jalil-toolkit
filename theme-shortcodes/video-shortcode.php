<?php
if(!defined('ABSPATH')) die ('-1');

function jalil_video_shortcode($atts , $content = null){

	extract( shortcode_atts( array(
        'video_link' => '',
        'img' => '',
    ), $atts) );

    $video_img_array = wp_get_attachment_image_src( $img, 'full' );
    $jalil_video_markup = '
        <div class="about-video">
            <div class="single-video">
    ';

    if(!empty($video_link)){
        $jalil_video_markup .= '
            <a href="'.esc_url( $video_link).'" class="video-play mfp-iframe">
            <i class="fa fa-play"></i></a>
        ';
    }

    if(!empty($img)){
	    $jalil_video_markup .= '
             <img src="'.esc_url($video_img_array[0]).'" alt=""/>
	    ';
	}

	$jalil_video_markup .= '</div></div>';
		
    return $jalil_video_markup;
}
add_shortcode( 'jalil_video', 'jalil_video_shortcode' );