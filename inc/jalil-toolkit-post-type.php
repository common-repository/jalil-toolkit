<?php
if(!defined('ABSPATH')) die ('-1');
// Custom post register
function jalil_toolkit_custom_post() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => esc_html__( 'Slides', 'jalil-toolkit' ),
                'singular_name' => esc_html__( 'Slide', 'jalil-toolkit' ),
                'add_new' => esc_html__( 'Add New', 'jalil-toolkit'  ),
                'add_new_item' => esc_html__( 'Add New Slide', 'jalil-toolkit'  ),
                'edit_item' => esc_html__( 'Edit Slide', 'jalil-toolkit'  ),
                'new_item' => esc_html__( 'New Slide', 'jalil-toolkit'  ),
                'view_item' => esc_html__( 'View Slide', 'jalil-toolkit'  ),
                'not_found' => esc_html__( 'Sorry, we couldn\'t find the Slide you are looking for.', 'jalil-toolkit'  )
            ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-images-alt',
        'menu_position' => 14,
        'has_archive' => false,
        'hierarchical' => false,
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'slide' ),
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );

    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => esc_html__( 'Teams', 'jalil-toolkit' ),
                'singular_name' => esc_html__( 'Team', 'jalil-toolkit' ),
                'add_new' => esc_html__( 'Add New', 'jalil-toolkit'  ),
                'add_new_item' => esc_html__( 'Add New Team', 'jalil-toolkit'  ),
                'edit_item' => esc_html__( 'Edit Team', 'jalil-toolkit'  ),
                'new_item' => esc_html__( 'New Team', 'jalil-toolkit'  ),
                'view_item' => esc_html__( 'View Team', 'jalil-toolkit'  ),
                'not_found' => esc_html__( 'Sorry, we couldn\'t find the Team you are looking for.', 'jalil-toolkit'  )
            ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-images-alt',
        'menu_position' => 14,
        'has_archive' => false,
        'hierarchical' => false,
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'project' ),
        'supports' => array('title', 'thumbnail'),
        )
    );

    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => esc_html__( 'Projects', 'jalil-toolkit' ),
                'singular_name' => esc_html__( 'Project', 'jalil-toolkit' ),
                'add_new' => esc_html__( 'Add New', 'jalil-toolkit'  ),
                'add_new_item' => esc_html__( 'Add New Project', 'jalil-toolkit'  ),
                'edit_item' => esc_html__( 'Edit Project', 'jalil-toolkit'  ),
                'new_item' => esc_html__( 'New Project', 'jalil-toolkit'  ),
                'view_item' => esc_html__( 'View Project', 'jalil-toolkit'  ),
                'not_found' => esc_html__( 'Sorry, we couldn\'t find the Project you are looking for.', 'jalil-toolkit'  )
            ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-images-alt',
        'menu_position' => 14,
        'has_archive' => false,
        'hierarchical' => false,
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'project' ),
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );

	register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => esc_html__( 'Testimonials', 'jalil-toolkit' ),
                'singular_name' => esc_html__( 'Testimonial', 'jalil-toolkit' ),
                'add_new' => esc_html__( 'Add New', 'jalil-toolkit'  ),
                'add_new_item' => esc_html__( 'Add New Testimonial', 'jalil-toolkit'  ),
                'edit_item' => esc_html__( 'Edit Testimonial', 'jalil-toolkit'  ),
                'new_item' => esc_html__( 'New Testimonial', 'jalil-toolkit'  ),
                'view_item' => esc_html__( 'View Testimonial', 'jalil-toolkit'  ),
                'not_found' => esc_html__( 'Sorry, we couldn\'t find the Testimonial you are looking for.', 'jalil-toolkit'  )
            ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-images-alt',
        'menu_position' => 14,
        'has_archive' => false,
        'hierarchical' => false,
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'testimonial' ),
        'supports' => array('title', 'editor', 'thumbnail'),
        )
	);
}
add_action( 'init', 'jalil_toolkit_custom_post' );

// Post message update
function jalil_toolkit_custom_post_message( $messages ) {
	$post             = get_post();
	$post_type        = get_post_type( $post );
	$post_type_object = get_post_type_object( $post_type );

    $messages['slide'] = array(
        0  => '', // Unused. Messages start at index 1.
        1  => esc_html__( 'Slide updated.', 'jalil-toolkit'  ),
        2  => esc_html__( 'Slide updated.', 'jalil-toolkit'  ),
        3  => esc_html__( 'Slide deleted.', 'jalil-toolkit'  ),
        4  => esc_html__( 'Slide updated.', 'jalil-toolkit'  ),
        /* translators: %s: date and time of the revision */
        5  => isset( $_GET['revision'] ) ? sprintf( esc_html__( 'Slide restored to revision from %s', 'jalil-toolkit'  ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => esc_html__( 'Slide published.', 'jalil-toolkit'  ),
        7  => esc_html__( 'Slide saved.', 'jalil-toolkit'  ),
        8  => esc_html__( 'Slide submitted.', 'jalil-toolkit' ),
        9  => sprintf(
            esc_html__( 'Slide scheduled for: <strong>%1$s</strong>.', 'jalil-toolkit' ),
            // translators: Publish box date format, see http://php.net/date
            date_i18n( esc_html__( 'M j, Y @ G:i', 'jalil-toolkit' ), strtotime( $post->post_date ) )
        ),
        10 => esc_html__( 'Slide draft updated.', 'jalil-toolkit' )
    );

    $messages['team'] = array(
        0  => '', // Unused. Messages start at index 1.
        1  => esc_html__( 'Team updated.', 'jalil-toolkit'  ),
        2  => esc_html__( 'Team updated.', 'jalil-toolkit'  ),
        3  => esc_html__( 'Team deleted.', 'jalil-toolkit'  ),
        4  => esc_html__( 'Team updated.', 'jalil-toolkit'  ),
        /* translators: %s: date and time of the revision */
        5  => isset( $_GET['revision'] ) ? sprintf( esc_html__( 'Team restored to revision from %s', 'jalil-toolkit'  ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => esc_html__( 'Team published.', 'jalil-toolkit'  ),
        7  => esc_html__( 'Team saved.', 'jalil-toolkit'  ),
        8  => esc_html__( 'Team submitted.', 'jalil-toolkit' ),
        9  => sprintf(
            esc_html__( 'Team scheduled for: <strong>%1$s</strong>.', 'jalil-toolkit' ),
            // translators: Publish box date format, see http://php.net/date
            date_i18n( esc_html__( 'M j, Y @ G:i', 'jalil-toolkit' ), strtotime( $post->post_date ) )
        ),
        10 => esc_html__( 'Team draft updated.', 'jalil-toolkit' )
    );

    $messages['project'] = array(
        0  => '', // Unused. Messages start at index 1.
        1  => esc_html__( 'Project updated.', 'jalil-toolkit'  ),
        2  => esc_html__( 'Project updated.', 'jalil-toolkit'  ),
        3  => esc_html__( 'Project deleted.', 'jalil-toolkit'  ),
        4  => esc_html__( 'Project updated.', 'jalil-toolkit'  ),
        /* translators: %s: date and time of the revision */
        5  => isset( $_GET['revision'] ) ? sprintf( esc_html__( 'Project restored to revision from %s', 'jalil-toolkit'  ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => esc_html__( 'Project published.', 'jalil-toolkit'  ),
        7  => esc_html__( 'Project saved.', 'jalil-toolkit'  ),
        8  => esc_html__( 'Project submitted.', 'jalil-toolkit' ),
        9  => sprintf(
            esc_html__( 'Project scheduled for: <strong>%1$s</strong>.', 'jalil-toolkit' ),
            // translators: Publish box date format, see http://php.net/date
            date_i18n( esc_html__( 'M j, Y @ G:i', 'jalil-toolkit' ), strtotime( $post->post_date ) )
        ),
        10 => esc_html__( 'Project draft updated.', 'jalil-toolkit' )
    );

    $messages['testimonial'] = array(
        0  => '', // Unused. Messages start at index 1.
        1  => esc_html__( 'Testimonial updated.', 'jalil-toolkit'  ),
        2  => esc_html__( 'Testimonial updated.', 'jalil-toolkit'  ),
        3  => esc_html__( 'Testimonial deleted.', 'jalil-toolkit'  ),
        4  => esc_html__( 'Testimonial updated.', 'jalil-toolkit'  ),
        /* translators: %s: date and time of the revision */
        5  => isset( $_GET['revision'] ) ? sprintf( esc_html__( 'Testimonial restored to revision from %s', 'jalil-toolkit'  ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => esc_html__( 'Testimonial published.', 'jalil-toolkit'  ),
        7  => esc_html__( 'Testimonial saved.', 'jalil-toolkit'  ),
        8  => esc_html__( 'Testimonial submitted.', 'jalil-toolkit' ),
        9  => sprintf(
            esc_html__( 'Testimonial scheduled for: <strong>%1$s</strong>.', 'jalil-toolkit' ),
            // translators: Publish box date format, see http://php.net/date
            date_i18n( esc_html__( 'M j, Y @ G:i', 'jalil-toolkit' ), strtotime( $post->post_date ) )
        ),
        10 => esc_html__( 'Testimonial draft updated.', 'jalil-toolkit' )
    );

	return $messages;
}
add_filter( 'post_updated_messages', 'jalil_toolkit_custom_post_message' );