<?php 

/* 
    here we are using theme functions from wordpress library
    to add thubmnails with featured images for custom posts

*/

    function mytheme_post_thumbnails(){
        add_theme_support('post-thumbnails');
        add_post_type_support('page', 'excerpt');
        add_post_type_support('post', 'excerpt');
        add_filter( 'excerpt_length', function($length) {
            return 20;
        } );
    }


    // after the theme is set up we want the thubmnail function to run
    add_action('after_setup_theme','mytheme_post_thumbnails');


    // here we are regestering a sidebar so users can drag and drop custom html we define here
    function myportfolio_widgets_init(){
        register_sidebar(array(
            'name' => __('right-sidebar','myportfolio'),
            'id'=> 'sidebar-1',
            'before_widget' => '<div id="%1$s class="widget-box %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => __('Login Form','myportfolio'),
            'id'=> 'login-form-1',
            'before_widget' => '<div id="%1$s class="widget-box %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => __('group-register','myportfolio'),
            'id'=> 'group-register-1',
            'before_widget' => '<div id="%1$s class="widget-box %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => __('practice-test','myportfolio'),
            'id'=> 'practice-test-1',
            'before_widget' => '<div id="%1$s class="widget-box %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));


    }

    // initialize sidebar widget we defined
    add_action('widgets_init','myportfolio_widgets_init');

    // increase max upload size
    // didnt work delete for now 
    @ini_set( 'upload_max_size' , '64M' );
    @ini_set( 'post_max_size', '64M');
    @ini_set( 'max_execution_time', '300' );


?>

