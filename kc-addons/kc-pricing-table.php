<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_pricing' => array(
            'name' => esc_html__('Pricing Table', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for pricing table.', 'jalil-toolkit' ),
            'icon' => 'sl-menu',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'style',
                        'label' => esc_html__('Pricing Style', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('Select pricing style from here.', 'jalil-toolkit'),
                        'options' => array( 
                            'default'    =>  esc_html__('Default', 'jalil-toolkit'),
                            'active'     =>  esc_html__('Active', 'jalil-toolkit'),
                        ),
                        'value' => 'active',
                    ),
                    array(
                        'name' => 'title',
                        'label' => esc_html__('Pricing Title', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type pricing title from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'description',
                        'label' => esc_html__('Pricing Description', 'jalil-toolkit'),
                        'type' => 'textarea',
                        'description' => esc_html__('Type pricing description from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'amount',
                        'label' => esc_html__('Pricing Amount', 'jalil-toolkit'),
                        'type' => 'text-area',
                        'description' => esc_html__('Type pricing amount from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'type'          => 'group',
                        'label'         => esc_html__('Features', 'jalil-toolkit'),
                        'name'          => 'options',
                        'description'   => esc_html__( 'Type pricing table features from here.', 'jalil-toolkit' ),
                        'options'       => array('add_text' => esc_html__('Add new feature', 'jalil-toolkit')),
                        'params' => array(
                            array(
                                'type' => 'text',
                                'label' => esc_html__( 'Feature Title', 'jalil-toolkit' ),
                                'name' => 'feature',
                                'description' => esc_html__( 'Type feature title from here.', 'jalil-toolkit' ),
                                'admin_label' => true,
                            ),
                        ),
                    ),
                    array(
                        'name' => 'button_link',
                        'label' => esc_html__('Pricing Button Link', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type pricing button link from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'button_text',
                        'label' => esc_html__('Pricing Button Text', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type pricing button text from here.', 'jalil-toolkit'),
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map




