<?php

function kjeld_script_enqueue () {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/kjeld.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/kjeld.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'kjeld_script_enqueue');

function kjeld_theme_setup() {
add_theme_support('menus');

register_nav_menu('primary', 'Primary Header Navigation');
register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'kjeld_theme_setup');

add_filter( 'woocommerce_is_purchasable', '__return_false');

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Kjelds Cykler
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function kjeldscykler_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'kjeldscykler_front_page_template' );


// Start of Woo Commerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_theme_support( 'woocommerce' );

// End of Woo Commerce



?>
