<?php
add_theme_support( 'post-thumbnails' );

// Function to change "posts" to "news" in the admin side menu
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Lexikon';
    $submenu['edit.php'][5][0] = 'Lexikon';
    $submenu['edit.php'][10][0] = 'Új lexikon cikk';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
// Function to change post object labels to "news"
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Lexikon';
    $labels->singular_name = 'Lexikon cikk';
    $labels->add_new = 'Új lexikon cikk';
    $labels->add_new_item = 'Új lexikon cikk';
    $labels->edit_item = 'Lexikon cikk szerkesztése';
    $labels->new_item = 'Lexikon cikk';
    $labels->view_item = 'Megtekintés';
    $labels->search_items = 'Lexikon keresés';
    $labels->not_found = 'Nincs lexikon cikk';
    $labels->not_found_in_trash = 'Nincs lexikon cikk a kukában';
}
add_action( 'init', 'change_post_object_label' );

// REGISTER MENU AREAS
function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu', 'kenderlanc' ));
}
add_action( 'init', 'register_header_menu' );
function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu', 'kenderlanc' ));
}
add_action( 'init', 'register_footer_menu' );

// COUNT POST VIEWS
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

//WOOCOMMERCE
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//replace title
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5 );
//replace images
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_images', 5);
//remove data tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');
//replace short descripiton
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
//remove price hook (added directly to thumbnails hook)
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
//remove product meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
//remove add to cart button from listing
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

//order on search result page
function order_search_by_posttype($orderby){
    if (!is_admin() && is_search()) :
        global $wpdb;
        $orderby =
            "
            CASE WHEN {$wpdb->prefix}posts.post_type = 'product' THEN '1' 
                 WHEN {$wpdb->prefix}posts.post_type = 'kenderlanc_cikkek' THEN '2' 
                 WHEN {$wpdb->prefix}posts.post_type = 'post' THEN '3' 
                 WHEN {$wpdb->prefix}posts.post_type = 'akademia_cikek' THEN '4' 
            ELSE {$wpdb->prefix}posts.post_type END ASC, 
            {$wpdb->prefix}posts.post_title ASC";
    endif;
    return $orderby;
}
// add_filter('posts_orderby', 'order_search_by_posttype');

//remove comments from admin bar
function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );

//custom taxonomy to custom post type
function themes_taxonomy() {
    register_taxonomy(
        'cikk_kategoriak',
        'kenderlanc_cikkek',
        array(
            'hierarchical' => true,
            'label' => 'Cikk kategória',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'kenderlanc_cikkek/kategoria',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'themes_taxonomy');