<?php


add_action('after_setup_theme', 'mytheme_setup');
if(!function_exists('mytheme_setup')){
    function mytheme_setup(){
        //01. show post thumbnails in all posts and pages
        // add_theme_support('post-thumbnails');

        //02. show post thumbnails in specific post types
        // add_theme_support('post-thumbnails', array('post', 'page')); //for specific post types
        add_theme_support('post-thumbnails'); //for all post types
        /*03. including css and js files
            css: 1. frontend 2. inline 3. editor 4. block
        */
        add_action('wp_enqueue_scripts', 'my_wp_enqueue_scripts');

        if(!function_exists('my_wp_enqueue_scripts')){
            function my_wp_enqueue_scripts(){
                
                wp_enqueue_style("unque_id", get_stylesheet_uri());

                // include assets bootstrap
                wp_enqueue_style("bootstrap_css",
                get_parent_theme_file_uri('assets/css/bootstrap.min.css'),
                array(),
                // show version number
                wp_get_theme()->get('Version'),
                // media all
                'all',
                );

                // include assets slick
                wp_enqueue_style("slick_css",
                get_parent_theme_file_uri('assets/css/slick.css'),
                array(),
                // show version number
                wp_get_theme()->get('Version'),
                // media all
                'all',
                );

                // include assets venobox
                wp_enqueue_style("venobox_css",
                get_parent_theme_file_uri('assets/css/venobox.min.css'),
                array(),
                // show version number
                wp_get_theme()->get('Version'),
                // media all
                'all',
                );

                // include assets scroll
                wp_enqueue_style("scroll_css",
                get_parent_theme_file_uri('assets/css/scroll.css'),
                array(),
                // show version number
                wp_get_theme()->get('Version'),
                // media all
                'all',
                );

                // include assets all
                wp_enqueue_style("all_css",
                get_parent_theme_file_uri('assets/css/all.min.css'),
                array(),
                // show version number
                wp_get_theme()->get('Version'),
                // media all
                'all',
                );
                // include assets style
                wp_enqueue_style("style_css",
                get_parent_theme_file_uri('assets/css/style.css'),
                array(),
                // show version number
                wp_get_theme()->get('Version'),
                // media all
                'all',
                );
                // include assets responsive
                wp_enqueue_style("responsive_css",
                get_parent_theme_file_uri('assets/css/responsive.css'),
                array(),
                // show version number
                wp_get_theme()->get('Version'),
                // media all
                'all',
                );
                // include inline css
                // wp_add_inline_style(
                //     'unque_id',
                //     'h1{color: red;}'
                // );


                 // include js file
                 wp_enqueue_script(
                    "jquery_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/jquery-1.12.4.min.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );
                // include js file
                wp_enqueue_script(
                    "bootstrap_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );
                // include js file
                wp_enqueue_script(
                    "mixitup_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/mixitup.min.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );
                // include js file
                wp_enqueue_script(
                    "aos_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/aos.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );
                // include js file
                wp_enqueue_script(
                    "venobox_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/venobox.min.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );
                // include js file
                wp_enqueue_script(
                    "slick_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/slick.min.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );
                // include js file
                wp_enqueue_script(
                    "wow_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/wow.min.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );
               
                  // include js file
                wp_enqueue_script(
                    "main_script_js", // Unique handle
                    get_template_directory_uri() . "/assets/js/script.js", // File URL
                    array(), // Dependencies (empty if none)
                    wp_get_theme()->get('Version'), // Version (theme version for cache busting)
                    true // Load in footer
                );

                // include inline js
                // wp_add_inline_script(
                //     'main_js',
                //     'console.log("hello world");'
                // );
            }
        }

           /* js: 1. frontend 2. inline 3. editor 4. wordpress default script
            * including image
            *including fonts
        */ 
        if(!function_exists('my_custom_meta_box')){
            function my_custom_meta_box(){
                // add_meta_box( 'id', 'title', 'callback', 'post type', 'context', 'priority', 'callback args');
                add_meta_box(
                'my_custom_meta_box',
                 'Add Icon',
                  'myinputhtml',
                  'MySlider'
                   );
            }
        }

        if(!function_exists('myinputhtml')){
            function myinputhtml($post){
                $icon = get_post_meta($post->ID, 'add_icon_service', true);
                ?>
                <label for="add_icon">Add Icon</label><br>
                <input type="text" name="add_icon" id="add_icon" class="form-control" value="<?php echo $icon; ?>">
                <?php
            }
        }
        add_action('add_meta_boxes', 'my_custom_meta_box');

        if(!function_exists('mymetasave')){
            function mymetasave($post_id){
                update_post_meta(
                    $post_id,
                 'add_icon_service', 
                 $_POST['add_icon']);
            }
        }
        add_action('save_post', 'mymetasave');
        
    }
}

function custom_login_customize_register($wp_customize) {
    // Add Section
    $wp_customize->add_section('custom_login', array(
        'title'       => __('Custom Login Form', 'wp_theme_development'),
        'description' => 'If you want to change login logo, you can do it here',
    ));

    // Add Setting
    $wp_customize->add_setting('customize_login_logo', array(
        'default'           => get_template_directory_uri() . '/assets/images/alogo.png',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'customize_login_logo', array(
        'label'       => 'Logo Upload',
        'description' => 'If you want to change the login logo, you can do it here.',
        'settings'    => 'customize_login_logo',
        'section'     => 'custom_login',
    )));
}
add_action('customize_register', 'custom_login_customize_register');

//theme custom login page style
function custom_color_login() {
    $custom_logo = get_theme_mod('customize_login_logo', get_template_directory_uri() . '/assets/images/alogo.png'); // Default fallback
    ?>
    <style>
        #login h1 a, .login h1 a {
            background-image: url('<?php echo esc_url($custom_logo); ?>') !important;
            background-size: contain;
            background-repeat: no-repeat;
            width: 100%;
            height: 100px; /* Adjust height as needed */
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_color_login');



//add custom post slider
require get_template_directory( ). '/inc/custompost/slider.php';
// require get_template_directory( ). '/inc/loginenqueue/login-enqueue.php';
include_once(get_template_directory( ). '/inc/loginenqueue/login-enqueue.php');