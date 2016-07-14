<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom Taxonomy
 function dash_register_portfolio_tax() {

 	$labels = array(
 		'name'                       => 'Works',
 		'singular_name'              => 'Work',
 		'menu_name'                  => 'Work',
 		'all_items'                  => 'All Works',
 		'parent_item'                => 'Parent Work',
 		'parent_item_colon'          => 'Parent Work:',
 		'new_item_name'              => 'New Work Name',
 		'add_new_item'               => 'Add New Work',
 		'edit_item'                  => 'Edit Work',
 		'update_item'                => 'Update Work',
 		'view_item'                  => 'View Work',
 		'separate_items_with_commas' => 'Separate works with commas',
 		'add_or_remove_items'        => 'Add or remove works',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Works',
 		'search_items'               => 'Search Works',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No Works',
 		'items_list'                 => 'Work List',
 		'items_list_navigation'      => 'Work List Navigation',
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => true,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => false,
 	);
 	register_taxonomy( 'work', array( 'portfolio' ), $args );

 }
 add_action( 'init', 'dash_register_portfolio_tax', 0 );
