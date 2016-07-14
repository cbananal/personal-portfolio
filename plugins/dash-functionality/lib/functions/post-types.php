<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function dash_register_portfolio_cpt() {

	$labels = array(
		'name'                  => 'Portfolio',
		'singular_name'         => 'Portfolio',
		'menu_name'             => 'Portfolio',
		'name_admin_bar'        => 'Portfolio',
		'archives'              => 'Portfolio Archive',
		'parent_item_colon'     => 'Parent Work:',
		'all_items'             => 'All Works',
		'add_new_item'          => 'Add New Work',
		'add_new'               => 'Add Work',
		'new_item'              => 'New Work',
		'edit_item'             => 'Edit Work',
		'update_item'           => 'Update Work',
		'view_item'             => 'View Work',
		'search_items'          => 'Search Work',
		'not_found'             => 'Not Found',
		'not_found_in_trash'    => 'Not Found in Trash',
		'featured_image'        => 'Featured Work',
		'set_featured_image'    => 'Set featured work image',
		'remove_featured_image' => 'Remove featured work image',
		'use_featured_image'    => 'Use as featured work image',
		'insert_into_item'      => 'Insert into portfolio',
		'uploaded_to_this_item' => 'Uploaded to this portfolio',
		'items_list'            => 'Portfolio List',
		'items_list_navigation' => 'Portfolio List Navigation',
		'filter_items_list'     => 'Filter portfolio list',
	);
	$args = array(
		'label'                 => 'Portfolio',
		'description'           => 'A showcase of selected works in design, development and more',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'portfolio',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'dash_register_portfolio_cpt', 0 );
