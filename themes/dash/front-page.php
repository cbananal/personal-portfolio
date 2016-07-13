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
 * @package Dash
 * Template Name: Front Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php echo CFS()->get( 'flickity_slider' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php
							the_title( '<h1 class="entry-title">', '</h1>' );

						if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php dash_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
						endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content container">
						<?php
							the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dash' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dash' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php dash_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		<!-- end loop -->

		<div class="passion-grid container">
			<div>
				<i class="fa fa-paint-brush fa-2x"></i>
				<a href="#"><h2>Print &#47; User<br> Interface Design</h2></a>
			</div>
			<div>
				<a href="#"><h2>Front-End Web<br> Development</h2></a>
				<i class="fa fa-code fa-2x"></i>
			</div>
			<div>
				<i class="fa fa-camera-retro fa-2x"></i>
				<a href="#"><h2>Photography</h2></a>
			</div>
			<div>
				<a href="#"><h2>Creative Writing</h2></a>
				<i class="fa fa-pencil fa-2x"></i>
			</div>
			<div>
				<i class="fa fa-scissors fa-2x"></i>
				<a href="#"><h2>Arts &amp; Crafts</h2></a>
			</div>
		</div>
		<!--end passion-grid-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
