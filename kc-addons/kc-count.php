<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_count' => array(
            'name' => esc_html__('Count', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for single count', 'jalil-toolkit' ),
            'icon' => 'sl-paper-plane',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'style',
                        'label' => esc_html__('Count Style', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('Select count style from here.', 'jalil-toolkit'),
                        'options' => array( 
                            'default'    =>  esc_html__('Default', 'jalil-toolkit'),
                            'active'     =>  esc_html__('Active', 'jalil-toolkit'),
                        ),
                        'value' => 'default',
                    ),
                    array(
                        'name' => 'icon',
                        'label' => esc_html__('Count Icon', 'jalil-toolkit'),
                        'type' => 'icon_picker',
                        'description' => esc_html__('Select count icon from here.', 'jalil-toolkit'),
                    ),
            		array(
                        'name' => 'number',
                        'label' => esc_html__('Count Number', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type count number from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'description',
                        'label' => esc_html__('Count description', 'jalil-toolkit'),
                        'type' => 'textarea',
                        'description' => esc_html__('Type Count description from here.', 'jalil-toolkit'),
                    ),
            	),
                'CSS' => array(
                    array(
                        'name' => 'custom_css',
                        'label' => 'CSS',
                        'type' => 'css',
                        'options' => array(
                            array(
                                'screens' => "any,1024,999,767,479",
                                //Box group
                                'Box' => array(
                                    array('property' => 'border-radius', 'label' => 'Border Radius'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map
