<?php
if(!defined('ABSPATH')) die ('-1');
function jalil_team_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 1,
        'loop' => true,
        'nav' => true,
        'autoplay' => true,
        'autoplayTimeout' => 5000,
    ), $atts) );

    $args = new WP_Query(
        array(
            'posts_per_page' => esc_attr( $count ),
            'post_type' => 'team'
        )
    ); 

    $team_random_number = rand(6982887, 74634636); 

    $jalil_team_markup = '
        <script>
            jQuery(document).ready(function(){
                jQuery(".team-main-'.esc_attr( $team_random_number ).'").owlCarousel({
                    loop:'.esc_attr($loop).',
                    autoplay:'.esc_attr($autoplay).',
                    smartSpeed: 700,
                    autoplayTimeout:'.esc_attr($autoplayTimeout).',
                    center:false,
                    margin: 30,
                    items:4,
                    nav:'.esc_attr($nav).',
                    dots:false,
                    navText:["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
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
                            items: 4,
                        },
                    }
                });
            });
        </script>
    ';  

    $jalil_team_markup .= '
        <section id="team" class="clearfix">
            <div class="team-main-'.esc_attr( $team_random_number ).'">
    ';

    while($args->have_posts()) : $args->the_post();
        $post_id = get_the_ID();

        if(get_post_meta( $post_id, 'jalil_team_options', true )){
            $team_meta = get_post_meta( $post_id, 'jalil_team_options', true );
        }else{
            $team_meta = array();
        }
        
        if(array_key_exists('team_sub_title', $team_meta)){
            $team_sub_title = $team_meta['team_sub_title'];
        }else{
            $team_sub_title = esc_html__( 'CEO/FOUNDER', 'jalil-toolkit' );
        }
        
        $jalil_team_markup .= '
            <div class="single-team">
                <div class="team-head">
                    <img src="'.esc_url(get_the_post_thumbnail_url($post_id, 'large')).'" alt="'.esc_html( get_the_title( $post_id ) ).'"/>';

                    if(!empty($team_meta['jalil_social_profiles'])){
                        $jalil_team_markup .= '<ul class="team-social">';

                            foreach ($team_meta['jalil_social_profiles'] as $button) {

                            $jalil_team_markup .= '<li><a href="'.esc_url( $button['link'] ).'"><i class="'.esc_attr( $button['icon'] ).'"></i></a></li>';
                            } 
                        $jalil_team_markup .= '</ul>';
                    }

        $jalil_team_markup .= '
                </div>
                <div class="team-info">
                    <div class="name">
                        <h4>'.esc_html( get_the_title(  $post_id ) ).'</h4>
                    </div>
                    <p>'.esc_html( $team_sub_title ).'</p>
                </div>
            </div>
        ';
            
    endwhile;
    $jalil_team_markup.= '</div></section>';
    wp_reset_query();
    return $jalil_team_markup;
}
add_shortcode('jalil_teams', 'jalil_team_shortcode');