<?php
// Register Custom Post Type
function demo_post_type() {

	$labels = array(
		'name'                  => 'Demos',
		'singular_name'         => 'Demo',
		'menu_name'             => 'Demos',
		'name_admin_bar'        => 'Demo',
		'archives'              => 'Demo Archives',
		'attributes'            => 'Demo Attributes',
		'parent_item_colon'     => 'Parent Demo:',
		'all_items'             => 'All Demos',
		'add_new_item'          => 'Add New Demo',
		'add_new'               => 'Add New',
		'new_item'              => 'New Demo',
		'edit_item'             => 'Edit Demo',
		'update_item'           => 'Update Demo',
		'view_item'             => 'View Demo',
		'view_items'            => 'View Demos',
		'search_items'          => 'Search Demos',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Demo',
		'description'           => 'Demos',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'demo', $args );

}
add_action( 'init', 'demo_post_type', 0 );
