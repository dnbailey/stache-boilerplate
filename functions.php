<?php 
if (!function_exists('stache_boilerplate_setup')) :
    function stache_boilerplate_setup() {
        // Clean Up wp_head
        show_admin_bar( false ); // Disable admin bar on website front end
        remove_action('wp_head', 'wp_generator'); // Remove generator tag from wp_head
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        
        // Add feed links to head
        add_theme_support('automatic-feed-links');

        // Change search form to html5 output
        add_theme_support( 'html5', array(
            'search-form'
        ));

        // Add wp_nav_menu()
        register_nav_menus( array(
            'primary'   => __('Top menu', 'stache_boilerplate'),
            'footer'    => __('Footer menu', 'stache_boilerplate')
        ));
    }
endif; // stache_boilerplate_setup
add_action('after_setup_theme', 'stache_boilerplate_setup');
?>  