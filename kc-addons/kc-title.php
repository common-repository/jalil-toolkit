<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_title' => array(
            'name' => esc_html__('Section Titlte', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for section title.', 'jalil-toolkit' ),
            'icon' => 'sl-note',
            'category' => esc_html__('jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'text_align',
                        'label' => esc_html__('Text Align', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('Select text align from here.', 'jalil-toolkit'),
                        'options' => array( 
                            'left'      =>  esc_html__('Left', 'jalil-toolkit'),
                            'center'    =>  esc_html__('Center', 'jalil-toolkit'),
                            'right'     =>  esc_html__('Right', 'jalil-toolkit'),
                        ),
                        'value' => 'center',
                    ),
                    array(
                        'name' => 'title',
                        'label' => esc_html__('Section Titlte', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type section title from here.', 'jalil-toolkit'),
                    ),
            		array(
                        'name' => 'sub_title',
                        'label' => esc_html__('Highlighted Text', 'jalil-toolkit'),
                        'type' => 'text',
                        'description' => esc_html__('Type highlighted text from here.', 'jalil-toolkit'),
                    ),
                    array(
                        'name' => 'description',
                        'label' => esc_html__('Title description', 'jalil-toolkit'),
                        'type' => 'textarea',
                        'description' => esc_html__('Type title description from here.', 'jalil-toolkit'),
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map