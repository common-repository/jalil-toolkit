<?php
if(!defined('ABSPATH')) die ('-1');
function jalil_post_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => -1,
        'loop' => true,
        'dots' => true,
        'autoplay' => false,
        'autoplayTimeout' => 5000,
        'num_words' => 21,
    ), $atts) );
    $args = new WP_Query(
        array(
            'posts_per_page' => esc_attr( $count ),
            'post_type' => 'post'
        )
    ); 
    $post_random_number = rand(6982887, 74634636); 
    $jalil_post_markup = '
        <script>
            jQuery(document).ready(function(){
                jQuery(".blog-main-'.esc_attr( $post_random_number ).'").owlCarousel({
                    loop:'.esc_attr( $loop ).',
                    autoplay:'.esc_attr($autoplay).',
                    smartSpeed: 600,
                    autoplayTimeout:'.esc_attr( $autoplayTimeout ).',
                    margin: 15,
                    nav:false,
                    dots:'.esc_attr( $dots ).',
                    navText:["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                    responsive:{
                        300: {
                            items: 1,
                        },
                        480: {
                            items: 1,
                        },
                        768: {
                            items: 2,
                        },
                        1170: {
                            items: 3,
                        },
                    }
                });
            });
        </script>
    ';  

    $jalil_post_markup .= '<div class="blog-main-'.esc_attr( $post_random_number ).'">';

    while($args->have_posts()) : $args->the_post();
        $post_id = get_the_ID();
        $post_content = get_the_excerpt();
        $shortexcerpt = wp_trim_words( $post_content, $num_words, $more = ' […]' );
        $jalil_post_markup .= '  
            <div class="single-blog">
                <div class="blog-head">
                    <img src="'.esc_url(get_the_post_thumbnail_url($post_id, 'large')).'" alt="'.esc_html( get_the_title( $post_id ) ).'" class="img-responsive">
                    <span><i class="fa fa-calendar"></i>'.esc_html(get_the_date()).'</span>
                    <a class="icon" href="'.esc_url( get_permalink() ).'"><i class="fa fa-link"></i></a>
                </div>
                <div class="blog-info">
                    <h4><a href="'.esc_url( get_permalink() ).'">'.esc_html( get_the_title(  $post_id ) ).'</a></h4>
                    <div class="meta">
                        <span><i class="fa fa-user"></i>'.esc_html(get_the_author()).'</span>
                        <span><i class="fa fa-comments"></i>'.esc_html(get_comments_number()).' '.esc_html__('comments', 'jalil-toolkit').'</span>
                    </div>
                    '.wpautop( $shortexcerpt ).'
                    <a href="'.esc_url( get_permalink() ).'" class="button">'.esc_html__('Read More','jalil-toolkit').'<i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>  
        ';    
    endwhile;
    $jalil_post_markup.= '</div>';
    wp_reset_query();
    return $jalil_post_markup;
}
add_shortcode('jalil_posts', 'jalil_post_shortcode');    