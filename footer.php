<?php
/*
 * The footer for displaying site-info.
 */
?>
<div class="container">
   <div id="footer">
	
	<div class="site-info col-md-12">
		<?php _e('Copyright', 'onecolumn'); ?> <?php echo date('Y'); ?>  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php _e('OneColumn WordPress Theme', 'onecolumn'); ?>  
	</div>

   </div>
</div><!-- #container -->
</div>
<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>

</body>
</html>

