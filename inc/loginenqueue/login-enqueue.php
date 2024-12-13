<?php 

// css file
    function login_enqueue_register(){
        wp_enqueue_style(
            'login_enqueue', 
            get_stylesheet_directory_uri() . '/assets/css/loginenqueue.css', 
            array(), 
            '1.0', 
            'all'
        );
        
    }
add_action('login_enqueue_scripts', 'login_enqueue_register');

// changing logo
function  change_login_logo(){
    ?>
        <style>
            #login h1 a,
            .login h1 a {
                background-image: url('<?php echo get_stylesheet_directory_uri() . "/assets/images/alogo.png"; ?>' ) !important;

                /* Adjust height as needed */
            }
        </style>

    <?php 
}
add_action('login_enqueue_scripts', 'change_login_logo');

// login logo url
function change_login_logo_url(){
    return home_url();
}
add_filter('login_headerurl', 'change_login_logo_url');