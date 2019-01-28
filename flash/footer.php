<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flash
 */

?>

		</div><!-- .tg-container -->
	</div><!-- #content -->

	<?php
	/**
	 * flash_after_main hook
	 */
	do_action( 'flash_after_main' ); ?>

	<?php
	/**
	 * flash_before_footer hook
	 */
	do_action( 'flash_before_footer' ); ?>

	<footer id="colophon" class="footer-layout site-footer" role="contentinfo">
	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'fallback_cb' => false, ) ); ?>
		<?php get_sidebar( 'footer' ); ?>

		
		<div style="clear:both;"></div>
		
		<div id="bottom-footer">
			<div class="tg-container">

				
				<span class="copyright-bottom" style="text-align-center">COPYRIGHT @ 2019 TOG. ALL RIGHTS RESERVED
					<span style="margin-left:200px; ">
						<i style="margin-right:10px" class="fab fa-facebook-f"></i>
						<i style="margin-right:10px" class="fab fa-twitter"></i>
						<i class="fab fa-instagram"></i>
					<span>
				</span>
				
				<?php //do_action( 'flash_copyright_area' ); ?>

			</div>
		</div>
		<div class="header-bottom">
			<div class="tg-container">

				<div class="logo" style="width:100%; ">
					<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
					<figure class="logo-image">
						<?php flash_the_custom_logo(); ?>
						<?php if( get_theme_mod( 'flash_transparent_logo', '') != '') : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="transparent-logo" src="<?php echo esc_url( get_theme_mod( 'flash_transparent_logo', '' ) ); ?>" />
						</a>
						<?php endif; ?>
					</figure>
					<?php endif; ?>

					
				</div>
				

				
			</div>
			
				<?php $logo_position = get_theme_mod( 'flash_logo_position' ); ?>
			
			
	</footer><!-- #colophon -->

	<?php
	/**
	 * flash_after_footer hook
	 */
	do_action( 'flash_after_footer' ); ?>

	<?php if ( get_theme_mod( 'flash_disable_back_to_top', '' ) != 1 ) : ?>
	<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	<?php endif; ?>
</div><!-- #page -->

<?php
/**
 * flash_after hook
 */
do_action( 'flash_after' ); ?>

<?php wp_footer(); ?>

</body>
</html>
