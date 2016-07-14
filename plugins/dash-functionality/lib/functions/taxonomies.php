<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom Taxonomy
 function dash_register_portfolio_tax() {

 	$labels = array(
 		'name'                       => 'Work Types',
 		'singular_name'              => 'Work Type',
 		'menu_name'                  => 'Work Type',
 		'all_items'                  => 'All Work Types',
 		'parent_item'                => 'Parent Work Type',
 		'parent_item_colon'          => 'Parent Work Type:',
 		'new_item_name'              => 'New Work Type Name',
 		'add_new_item'               => 'Add New Work Type',
 		'edit_item'                  => 'Edit Work Type',
 		'update_item'                => 'Update Work Type',
 		'view_item'                  => 'View Work Type',
 		'separate_items_with_commas' => 'Separate work types with commas',
 		'add_or_remove_items'        => 'Add or remove work types',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Work Types',
 		'search_items'               => 'Search Work Types',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No Work Types',
 		'items_list'                 => 'Work Type List',
 		'items_list_navigation'      => 'Work Type List Navigation',
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
 	register_taxonomy( 'work-type', array( 'portfolio' ), $args );

 }
 add_action( 'init', 'dash_register_portfolio_tax', 0 );
