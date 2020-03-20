<?php

/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
// Register Custom Post Type
function inhabitent_cpt_product()
{

    $labels = array(
        'name'                  => _x('Jobs', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Job', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Jobs', 'text_domain'),
        'name_admin_bar'        => __('Job types', 'text_domain'),
        'archives'              => __('Shop', 'text_domain'),
        'attributes'            => __('Job Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Job', 'text_domain'),
        'all_items'             => __('All Jobs', 'text_domain'),
        'add_new_item'          => __('Add New Job', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Job', 'text_domain'),
        'edit_item'             => __('Edit Job', 'text_domain'),
        'update_item'           => __('Update Job', 'text_domain'),
        'view_item'             => __('View Job', 'text_domain'),
        'view_items'            => __('View Jobs', 'text_domain'),
        'search_items'          => __('Search Job', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into Job', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this Job', 'text_domain'),
        'items_list'            => __('Jobs list', 'text_domain'),
        'items_list_navigation' => __('Jobs list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter Jobs list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Job', 'text_domain'),
        'description'           => __('products for the shop section', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'template' => array(
            array('core/paragraph', array(
                'placeholder' => 'Add Job Description...',
            )),
        ),
        'template_lock'         => true,
        'show_in_rest'          => true,
    );
    register_post_type('product_type', $args);
}
add_action('init', 'inhabitent_cpt_product', 0);

// Register Custom Post Type
function scholarship() {

	$labels = array(
		'name'                  => _x( 'scholarships', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'scholarship', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Scholarship Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Scholarship Type', 'text_domain' ),
		'archives'              => __( 'Scholarship Archives', 'text_domain' ),
		'attributes'            => __( 'Scholarship Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Scholarship:', 'text_domain' ),
		'all_items'             => __( 'All Scholarship', 'text_domain' ),
		'add_new_item'          => __( 'Add New Scholarship', 'text_domain' ),
		'add_new'               => __( 'Add Scholarship', 'text_domain' ),
		'new_item'              => __( 'New Scholarship', 'text_domain' ),
		'edit_item'             => __( 'Edit Scholarship', 'text_domain' ),
		'update_item'           => __( 'Update Scholarship', 'text_domain' ),
		'view_item'             => __( 'View Scholarship', 'text_domain' ),
		'view_items'            => __( 'View Scholarship', 'text_domain' ),
		'search_items'          => __( 'Search Scholarship', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Scholarship', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Scholarship', 'text_domain' ),
		'items_list'            => __( 'Scholarships list', 'text_domain' ),
		'items_list_navigation' => __( 'Scholarships list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Scholarships list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'scholarship', 'text_domain' ),
		'description'           => __( 'post for scholarships', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'location', ' url', ' scholarship-category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'scholarship', $args );

}
add_action( 'init', 'scholarship', 0 );

// Register Custom Post Type for Training 
function training_posts() {

	$labels = array(
		'name'                  => _x( 'Opportunities', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Opportunity', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Opportunities', 'text_domain' ),
		'name_admin_bar'        => __( 'Opportunity', 'text_domain' ),
		'archives'              => __( 'Opportunity Archives', 'text_domain' ),
		'attributes'            => __( 'Opportunity Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Opportunity:', 'text_domain' ),
		'all_items'             => __( 'All Opportunities', 'text_domain' ),
		'add_new_item'          => __( 'Add New Opportunity', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Opportunity', 'text_domain' ),
		'edit_item'             => __( 'Edit Opportunity', 'text_domain' ),
		'update_item'           => __( 'Update Opportunity', 'text_domain' ),
		'view_item'             => __( 'View Opportunity', 'text_domain' ),
		'view_items'            => __( 'View Opportunities', 'text_domain' ),
		'search_items'          => __( 'Search Opportunity', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Opportunity', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Opportunity', 'text_domain' ),
		'items_list'            => __( 'Opportunities list', 'text_domain' ),
		'items_list_navigation' => __( 'Opportunities list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Opportunities list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Opportunity', 'text_domain' ),
		'description'           => __( 'Creates post for training opportunities', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'page-attributes' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'training_posts', $args );

}
add_action( 'init', 'training_posts', 0 );