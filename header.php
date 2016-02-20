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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/css/style-admin.css" rel="stylesheet" />
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/css/style-calendar.css" rel="stylesheet" />
<link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/css/bootstrap.min.css" rel="stylesheet" />
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
<div id="container">

<div class="container">
<div id="header">

	<div class="logo"> 
		<?php if ( get_theme_mod( 'onecolumn_logo' ) ) : ?> 
			<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'onecolumn_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a> 
		<?php else : ?> 
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h3><?php bloginfo('description'); ?></h3> 
		<?php endif; ?>
	</div>

	<?php if ( has_nav_menu( 'primary' ) ) : ?> 
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'nav-head' ) ); ?>
	<?php endif; ?>

	<?php if ( is_home() || is_front_page() ) {?> 
		<?php if ( get_header_image() ) {?> 
			<img src="<?php echo get_header_image(); ?>" class="header-img" alt="" /> 
		<?php } ?> 
	<?php } ?> 

</div>
</div>
