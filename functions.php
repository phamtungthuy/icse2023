<?php 


    function icse2023_theme_suppport() {
        add_theme_support('custom-logo');
        add_theme_support('custom-header');
        
    }
    add_action('after_setup_theme', 'icse2023_theme_suppport');

    function icse2023_navigation() {
        $locations = array(
            'attending' => 'attending',
            'tracks' => 'tracks',
            'organizations' => 'organizations',
            'sponsorship' => 'sponsorship',
            'program' => 'program',
            'search' => 'search',
            'series' => 'series',
            'sign in' => 'sign in',
            'sign up' => 'sign up'
        );

        register_nav_menus($locations);
    }

    add_action('init', icse2023_navigation());

    function custom_footer_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Custom Footer', 'text_domain' ),
            'id' => 'custom_footer',
            'description' => __( 'Widgets in this area will be shown in the footer.', 'text_domain' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ) );
    }
    add_action( 'widgets_init', 'custom_footer_widgets_init' );
    
?>