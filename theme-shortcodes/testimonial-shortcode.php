<?php
if(!defined('ABSPATH')) die ('-1');
function jalil_testimonial_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 4,
        'loop' => true,
        'dots' => true,
        'autoplay' => true,
        'autoplayTimeout' => 5000,
    ), $atts) );

    $args = new WP_Query(
        array(
            'posts_per_page' => esc_attr( $count ),
            'post_type' => 'testimonial'
        )
    ); 

    $testimonial_random_number = rand(6982887, 74634636); 

    $jalil_testimonial_markup = '
        <script>
            jQuery(document).ready(function(){
                jQuery(".testimonial-carousel-'.esc_attr( $testimonial_random_number ).'").owlCarousel({
                    loop:'.esc_attr( $loop ).',
                    autoplay:'.esc_attr( $autoplay ).',
                    autoplayTimeout:'.esc_attr($autoplayTimeout).',
                    nav:false,
                    dots:'.esc_attr($dots).',
                    navText:["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                    smartSpeed: 700,
                    center:true,
                    margin:15,
                    dots:true,
                    responsive:{
                        300: {
                            items: 1,
                            center:false,
                        },
                        480: {
                            items: 1,
                            center:false,
                        },
                        768: {
                            items: 2,
                            center:false,
                        },
                        970: {
                            items: 3,
                        },
                        1170: {
                            items: 3,
                        },
                    }
                });
            });
        </script>
    ';  

    $jalil_testimonial_markup .= '
        <div class="testimonial-carousel-'.esc_attr( $testimonial_random_number ).'">
    ';

    while($args->have_posts()) : $args->the_post();
        $post_id = get_the_ID();

        if(get_post_meta( $post_id, 'jalil_testimonial_options', true )){
            $testimonial_meta = get_post_meta( $post_id, 'jalil_testimonial_options', true );
        }else{
            $testimonial_meta = array();
        }
        
        if(array_key_exists('jalil_testimonial_postion', $testimonial_meta)){
            $jalil_testimonial_postion = $testimonial_meta['jalil_testimonial_postion'];
        }else{
            $jalil_testimonial_postion =  esc_html__( 'CEO CODEGLIM', 'jalil-toolkit' );
        }
        
        $jalil_testimonial_markup .= '
            <div class="single-testimonial">
                <div class="testimonial-content">
                    '.wpautop( esc_html( get_the_content($post_id) ) ).'
                </div>
                <div class="testimonial-info">
                    <span class="arrow"></span>
                    <img src="'.esc_url(get_the_post_thumbnail_url($post_id, 'large')).'" class="img-circle" alt="'.esc_html( get_the_title( $post_id ) ).'">
                    <h6>'.esc_html( get_the_title(  $post_id ) ).'<span>'.esc_html( $jalil_testimonial_postion ).'</span></h6>
                </div>          
            </div>
        ';
            
    endwhile;
    $jalil_testimonial_markup.= '</div>';
    wp_reset_query();
    return $jalil_testimonial_markup;
}
add_shortcode('jalil_testimonials', 'jalil_testimonial_shortcode');