<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dash
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

      <div class="contact-container">
        <img src="<?php echo CFS()->get ( 'contact_image' ); ?>">
        <?php echo CFS()->get ( 'contact_form' ); ?>
      </div>

      <div class="connect-container">
        <h4>Connect with Me</h4>
        <div class="social">
    			<a href="http://www.linkedin.com/in/cbananal" target="_blank"><i class="fa fa-linkedin-square"></i></a>
    			<a href="http://www.github.com/cbananal" target="_blank"><i class="fa fa-github"></i></a>
    			<a href="http://www.codepen.io/cbananal" target="_blank"><i class="fa fa-codepen"></i></a>
    			<a href="http://www.twitter.com/unfinished_art" target="_blank"><i class="fa fa-twitter"></i></a>
    		</div>
        <!--end social-->
      </div>
      <!--end connect-container-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
