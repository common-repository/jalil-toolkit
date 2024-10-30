<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_btn' => array(
            'name' => esc_html__('Button', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for button.', 'jalil-toolkit' ),
            'icon' => 'sl-mouse',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'style',
                        'label' => esc_html__('Button Style', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('Select button style from here.', 'jalil-toolkit'),
                        'options' => array( 
                            '1'      =>  esc_html__('Button Style 1', 'jalil-toolkit'),
                            '2'      =>  esc_html__('Button Style 2', 'jalil-toolkit'),
                        ),
                        'value' => '1',
                    ),
                    array(
                        'name' => 'link_url',
                        'label' => esc_html__('Link Url', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type link url from here.', 'jalil-toolkit'),
                        'value' => 'http://facebook.com',
                    ),
            		array(
                        'name' => 'link_text',
                        'label' => esc_html__('Link Text', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type link text from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'icon',
                        'label' => esc_html__('Link Icon', 'jalil-toolkit'),
                        'type' => 'icon_picker',
                        'description' => esc_html__('Select your link icon from here.', 'jalil-toolkit'),
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map