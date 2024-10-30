<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_service' => array(
            'name' => esc_html__('Service', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for showing service.', 'jalil-toolkit' ),
            'icon' => 'sl-menu',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'number',
                        'label' => esc_html__('Number', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type service number from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'title',
                        'label' => esc_html__('Service Title', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type service title from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'description',
                        'label' => esc_html__('Service Description', 'jalil-toolkit'),
                        'type' => 'textarea',
                        'description' => esc_html__('Type service description from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'icon',
                        'label' => esc_html__('Service Icon', 'jalil-toolkit'),
                        'type' => 'icon_picker',
                        'description' => esc_html__('Type service icon from here.', 'jalil-toolkit'),
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map