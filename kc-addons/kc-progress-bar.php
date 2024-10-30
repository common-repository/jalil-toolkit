<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_progress_bar' => array(
            'name' => esc_html__('Progress Bar', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for progress bar.', 'jalil-toolkit' ),
            'icon' => 'sl-menu',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'type'          => 'group',
                        'label'         => esc_html__('Progress Bar', 'jalil-toolkit'),
                        'name'          => 'options',
                        'description'   => esc_html__( 'Type progress bar from here.', 'jalil-toolkit' ),
                        'options'       => array('add_text' => esc_html__('Add new progress bar', 'jalil-toolkit')),
                        'params' => array(
                            array(
                                'type' => 'text',
                                'label' => esc_html__( 'Progress Bar Title', 'jalil-toolkit' ),
                                'name' => 'label',
                                'description' => esc_html__( 'Type progress bar title from here.', 'jalil-toolkit' ),
                                'admin_label' => true,
                            ),
                            array(
                                'type' => 'text',
                                'label' => esc_html__( 'Progress Bar Value', 'jalil-toolkit' ),
                                'name' => 'value',
                                'description' => esc_html__( 'Type progress bar value from here.', 'jalil-toolkit' ),
                                'admin_label' => true,
                            ),
                        ),
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map




