<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_video' => array(
            'name' => esc_html__('Video', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for showing video.', 'jalil-toolkit' ),
            'icon' => 'sl-film',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'video_link',
                        'label' => esc_html__('Video Link', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type video link from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'img',
                        'label' => esc_html__('Upload Preview Image', 'jalil-toolkit'),
                        'type' => 'attach_image',
                        'description' => esc_html__('Upload a preview image from here.', 'jalil-toolkit'),
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map