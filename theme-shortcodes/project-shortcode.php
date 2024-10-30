<?php
if(!defined('ABSPATH')) die ('-1');
function jalil_project_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 6,
        'order' => 'DASC',
    ), $atts) );

    $args = new WP_Query(
        array(
            'posts_per_page' => $count,
            'post_type' => 'project',
            'order' => $order
        )
    ); 
  

    $jalil_project_markup = '
        <section id="project" class="clearfix">
            <div class="no-margin">
    ';

    while($args->have_posts()) : $args->the_post();
        $post_id = get_the_ID();

        $jalil_project_markup .= '
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="project-single">
                    <div class="project-head">
                        <img src="'.esc_url(get_the_post_thumbnail_url($post_id, 'large')).'" alt="'.esc_html( get_the_title( $post_id ) ).'"/>
                    </div>
                    <div class="project-hover">
                        <h4><a href="'.esc_url( get_permalink() ).'">'.esc_html( get_the_title(  $post_id ) ).'</a></h4>
                        '.wpautop( esc_html( get_the_content($post_id) ) ).'
                    </div>
                </div>
            </div>
        ';
            
    endwhile;
    $jalil_project_markup.= '</div></section>';
    wp_reset_query();
    return $jalil_project_markup;
}
add_shortcode('jalil_projects', 'jalil_project_shortcode');