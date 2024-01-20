<?php 

/* Adding css & JS */
function woocommerce_custome_theme(){
    wp_register_style('custom_css' , get_template_directory_uri() . '/css/output.css' , false , '1.0.0');
    wp_enqueue_style('custom_css');
}

function add_google_font() { 
    wp_enqueue_style( 'almarai_font', 'https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800' ); 
}

add_action( 'wp_enqueue_scripts', 'add_google_font' );

add_action('wp_enqueue_scripts' , 'woocommerce_custome_theme');

/* Creating custom Menu */ 
function woocommerce_custom_menu() {
    register_nav_menu('top-menu' , __('joileve Custom Menue' , 'joileveCustomMenue'));
}
function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['div.header-cart-count'] = '<div class="header-cart-count absolute -top-3 -right-1 h-5 w-5 bg-pink-brand rounded-full align-middle text-white text-[12px]">' . WC()->cart->get_cart_contents_count() . '</div>';
    
    return $fragments;
    
}

add_action('init' , 'woocommerce_custom_menu');

/* Woocommerce support for the theme */
if(class_exists('wooCommerce')){

    /*WooCommerce Support */
    function joileve_add_woocommerce_support() {
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme' , 'joileve_add_woocommerce_support');

    //Remove Woocommerce Styles 
    add_filter('woocommerce_enqueue_styles', '__return_false');
    //Remove shop title
    add_filter('woocommerce_show_page_title', '__return_false');

    add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );
    
    //add support
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    
}

?>