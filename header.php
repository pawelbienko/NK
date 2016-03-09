<?php
/*
 * The header for displaying menu, header-image and homepage-widgets.
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/virtual-school/css/style-calendar.css" rel="stylesheet" />
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/virtual-school/css/bootstrap.min.css" rel="stylesheet" />
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */  
	wp_head();
?>

</head>

<body <?php body_class(); ?> >
<div class="container">
    <div class="masthead">
        <nav>
            <?php
                    wp_nav_menu( array(
                    'menu'       => 'primary',
                    'depth'      => 2,
                    'container'  => false,
                    'menu_class' => 'nav nav-justified',
                    'walker'     => new wp_bootstrap_navwalker())
                );
            ?>
        </nav>
    </div>

