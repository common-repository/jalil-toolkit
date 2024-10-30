<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_projects' => array(
            'name' => esc_html__('Projects', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for projecta.', 'jalil-toolkit' ),
            'icon' => 'sl-picture',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'order',
                        'label' => esc_html__('Project order', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('Select project order from here.', 'jalil-toolkit'),
                        'options' => array( 
                            'ASC'    =>  esc_html__('Ascending Post', 'jalil-toolkit'),
                            'DESC'   =>  esc_html__('Descending Post', 'jalil-toolkit'),
                        ),
                        'value' => 'DESC',
                    ),
                    array(
                        'name' => 'count',
                        'label' => esc_html__('Project Count', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type section project count from here.', 'jalil-toolkit'),
                        'value' => '6',
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map