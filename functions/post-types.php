<?php
//Add Options Pages
if(function_exists('acf_add_options_page')){
	acf_add_options_page(array(
		'page_title' 	=> 'Linux Options',
		'menu_title'	=> 'Linux Options',
		'menu_slug' 	=> 'linux_options',
		'position'		=> 50,
		'capability'	=> 'administrator',
		'redirect'		=> false
	));
}


// Register TEAM
/*function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Team', 'text_domain' ),
		'name_admin_bar'        => __( 'Team', 'text_domain' ),
		'archives'              => __( 'Team Archives', 'text_domain' ),
		'attributes'            => __( 'Team Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Team Member:', 'text_domain' ),
		'all_items'             => __( 'All Team', 'text_domain' ),
		'add_new_item'          => __( 'Add New Team Member', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Member', 'text_domain' ),
		'edit_item'             => __( 'Edit Team Member', 'text_domain' ),
		'update_item'           => __( 'Update Team Member', 'text_domain' ),
		'view_item'             => __( 'View Team Member', 'text_domain' ),
		'view_items'            => __( 'View Team Member', 'text_domain' ),
		'search_items'          => __( 'Search Team', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Team Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set team image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove team image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as team image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into team member', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team member', 'text_domain' ),
		'items_list'            => __( 'Team list', 'text_domain' ),
		'items_list_navigation' => __( 'Team list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter team list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'text_domain' ),
		'description'           => __( 'GBLF Team Members', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'menu_icon' => 'dashicons-groups',
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
	);
	register_post_type( 'Team', $args );

}
add_action( 'init', 'custom_post_type', 0 );
*/


  // Register Custom Post Type


function projects_post_type() {

		$labels = array(
		'name'                  => _x( 'projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Project', 'text_domain' ),
		'archives'              => __( 'Project Archives', 'text_domain' ),
		'attributes'            => __( 'Project Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent project:', 'text_domain' ),
		'all_items'             => __( 'All Project', 'text_domain' ),
		'add_new_item'          => __( 'Add New project', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Member', 'text_domain' ),
		'edit_item'             => __( 'Edit project', 'text_domain' ),
		'update_item'           => __( 'Update project', 'text_domain' ),
		'view_item'             => __( 'View project', 'text_domain' ),
		'view_items'            => __( 'View project', 'text_domain' ),
		'search_items'          => __( 'Search Project', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Project Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Project image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Project image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Project image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into project', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'text_domain' ),
		'items_list'            => __( 'Project list', 'text_domain' ),
		'items_list_navigation' => __( 'Project list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Project list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'project', 'text_domain' ),
		'description'           => __( 'projects', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'menu_icon' => 'dashicons-admin-page',
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
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'projects_post_type', 0 );
