<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dash
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php dash_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="project-content-container">

			<div class="project-details">
				<?php echo CFS()->get ( 'more_information' )?>
				<?php echo CFS()->get ( 'demo_link' )?>
			</div>
			<!--end project-details-->

			<div class="project-images">
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-content">
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

					<?php the_post_navigation(); ?>

					<!-- // If comments are open or we have at least one comment, load up the comment template. -->
					<?php if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

				<?php endwhile; ?>
			</div>
			<!--project-images-->

		</div>
		<!--end projec-content-container-->
		<a class="back-button" href="#" onClick="history.back(); return false;">&#10510; Back to Previous</a>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
