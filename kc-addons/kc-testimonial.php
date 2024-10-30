<?php 
if(!defined('ABSPATH')) die ('-1');
kc_add_map(
    array(
        'jalil_testimonials' => array(
            'name' => esc_html__('Testimonial', 'jalil-toolkit'),
            'description' => esc_html__( 'Use this addon for displaing testimonail', 'jalil-toolkit' ),
            'icon' => 'sl-picture',
            'category' => esc_html__('Jalil', 'jalil-toolkit'),
            'params' => array(
            	'General' => array(
                    array(
                        'name' => 'count',
                        'label' => esc_html__('Count', 'jalil-toolkit'),
                        'type'  => 'text',
                        'description' => esc_html__('If you want to show unlimited testimonail post, Please type -1 from here.', 'jalil-toolkit'),
                        'value' => '4',
                    ),
                    array(
                        'name' => 'loop',
                        'label' => esc_html__('Enable Loop?', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('If you want to show loop, Please select yes.', 'jalil-toolkit'),
                        'options' => array( 
                            'true'    =>  esc_html__('Yes', 'jalil-toolkit'),
                            'false'    =>  esc_html__('False', 'jalil-toolkit'),
                        ),
                        'value' => 'true',
                    ),
                    array(
                        'name' => 'dots',
                        'label' => esc_html__('Enable Dots?', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('If you want to show dots, Please select yes.', 'jalil-toolkit'),
                        'options' => array( 
                            'true'    =>  esc_html__('Yes', 'jalil-toolkit'),
                            'false'    =>  esc_html__('False', 'jalil-toolkit'),
                        ),
                        'value' => 'true',
                    ),
                    array(
                        'name' => 'autoplay',
                        'label' => esc_html__('Enable Autoplay?', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('If you want to show autoplay, Please select yes.', 'jalil-toolkit'),
                        'options' => array( 
                            'true'    =>  esc_html__('Yes', 'jalil-toolkit'),
                            'false'    =>  esc_html__('False', 'jalil-toolkit'),
                        ),
                        'value' => 'true',
                    ),
            		array(
                        'name' => 'autoplayTimeout',
                        'label' => esc_html__('Slide Time', 'jalil-toolkit'),
                        'type' => 'select',
                        'description' => esc_html__('Select slide time from here.', 'jalil-toolkit'),
                        'options' => array( 
                            '1000'    =>  esc_html__('1 Second', 'jalil-toolkit'),
                            '2000'    =>  esc_html__('2 Seconds', 'jalil-toolkit'),
                            '3000'    =>  esc_html__('3 Seconds', 'jalil-toolkit'),
                            '4000'    =>  esc_html__('4 Seconds', 'jalil-toolkit'),
                            '5000'    =>  esc_html__('5 Seconds', 'jalil-toolkit'),
                            '6000'    =>  esc_html__('6 Seconds', 'jalil-toolkit'),
                            '7000'    =>  esc_html__('7 Seconds', 'jalil-toolkit'),
                            '8000'    =>  esc_html__('8 Seconds', 'jalil-toolkit'),
                            '9000'    =>  esc_html__('9 Seconds', 'jalil-toolkit'),
                            '10000'    =>  esc_html__('10 Seconds', 'jalil-toolkit'),
                            '11000'    =>  esc_html__('11 Seconds', 'jalil-toolkit'),
                            '12000'    =>  esc_html__('12 Seconds', 'jalil-toolkit'),
                            '13000'    =>  esc_html__('13 Seconds', 'jalil-toolkit'),
                            '14000'    =>  esc_html__('14 Seconds', 'jalil-toolkit'),
                            '15000'    =>  esc_html__('15 Seconds', 'jalil-toolkit'),
                        ),
                        'value' => '5000',
                        'relation' => array(
                            'parent'    => 'autoplay',
                            'hide_when' => 'false'
                        )
                    ),
            	),
            ),
        ),  // End of elemnt kc_icon 
    )
); // End add map