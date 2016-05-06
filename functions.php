<?php
include 'wp_bootstrap_navwalker.php';
include 'calendarTheme.php';

register_nav_menu( 'primary', 'Main menu' );

function page_styles() {
    wp_enqueue_style( 'page-styles', get_template_directory_uri() . '/style.css' ); 
}
add_action( 'wp_enqueue_scripts', 'page_styles' );

function redirect_user() {
  if ( ! is_user_logged_in() && ! is_page( 'login' ) ) {
    $return_url = esc_url( home_url( '/wp-login.php' ) );
    wp_redirect( $return_url );
    exit;
  }
}
add_action( 'template_redirect', 'redirect_user' );

function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );