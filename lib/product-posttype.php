<?php 
/*
* Creating a function to create Product
*/
 
function matchatea_product_post() {
 
// Set UI labels for Product
    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'matchatea' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'matchatea' ),
        'menu_name'           => __( 'Products', 'matchatea' ),
        'all_items'           => __( 'All Products', 'matchatea' ),
        'view_item'           => __( 'View Product', 'matchatea' ),
        'add_new_item'        => __( 'Add New Product', 'matchatea' ),
        'add_new'             => __( 'Add New', 'matchatea' ),
        'edit_item'           => __( 'Edit Product', 'matchatea' ),
        'update_item'         => __( 'Update Product', 'matchatea' ),
        'search_items'        => __( 'Search Product', 'matchatea' ),
        'not_found'           => __( 'Not Found', 'matchatea' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'matchatea' ),
    );
     
// Set other options for Product
     
    $args = array(
        'label'               => __( 'products', 'matchatea' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title','editor','thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'menu_icon'           => 'dashicons-admin-generic',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'products', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'matchatea_product_post');
 ?>