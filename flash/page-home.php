<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flash
 */

get_header(); ?>

	<?php
	/**
	 * flash_before_body_content hook
	 */
	do_action( 'flash_before_body_content' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" style="margin-bottom:50px">

		<?php 
		/*  ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;*/

			/* Start the Loop */
			/*while ( have_posts() ) : the_post(); */

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				/* get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

        endif; */ 
        
        ?>

        <div style="background-color:#d3d3d34f; padding-bottom:20px">
            <div style="text-align:center; padding-top:20px;">
                <button style="font-size:15px; font-weight:bold; margin-right:20px; background-color:#42b9bf; ">
                    FREE BUSINESS VALUATION <i class="fas fa-angle-double-right" ></i>
                </button>
                <button style="font-size:15px; font-weight:bold; background-color:#42b9bf">FREE BUYERS CONSULTATION <i class="fas fa-angle-double-right"></i></button>
            </div>
            <div style="width:85%;margin-top:40px; background-color:#fff">
                <h3 style="text-align:center">WE ARE SO VERY DIFFERENT</h3>

                <div style="margin:15px 30px 15px 30px;">
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">Lorem ipsum dolor sit amet, consectetur</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                    </div>
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">Lorem ipsum dolor sit amet, consectetur</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                    </div>
                    <div style="background-color:#42b9bf; padding:10px 20px 10px 20px; margin:0px 0px 20px 0px">
                        <p style="font-weight:bold; color:white; font-size:17px">Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur</p> 
                        <div>
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            </p> 
                        </div>   
                    </div>
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">Lorem ipsum dolor sit amet, consectetur</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                    </div>
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">Lorem ipsum dolor sit amet, consectetur</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                    </div>
                </div>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * flash_after_body_content hook
	 */
	do_action( 'flash_after_body_content' ); ?>

<?php
get_sidebar();
get_sidebar('left');
get_footer();
