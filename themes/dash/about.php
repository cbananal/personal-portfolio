<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dash
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="skills-container">
						<div class="skill-set">
							<h3>Skill Set</h3>
							<?php echo CFS()->get ('design_skills'); ?>
							<?php echo CFS()->get ('development_skills'); ?>
							<?php echo CFS()->get ('other_skills'); ?>
						</div>
						<!--end skill-set-->
						<div class="tools-languages">
							<h3>Tools &#47; Languages</h3>
							<?php echo CFS()->get ('development_tools'); ?>
							<?php echo CFS()->get ('design_tools'); ?>
						</div>
						<!--end tools-languages-->
					</div>
					<!--end skill-set-->

					<div class="entry-content">
						<h3 class="her-story"><span class="word-play">Her</span>Story</h3>
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dash' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
								edit_post_link(
									sprintf(
										/* translators: %s: Name of current post */
										esc_html__( 'Edit %s', 'dash' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									),
									'<span class="edit-link">',
									'</span>'
								);
							?>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				</article><!-- #post-## -->

				<!-- If comments are open or we have at least one comment, load up the comment template. -->
				<?php if ( comments_open() || get_comments_number() ) : ?>
					comments_template();
				<?php endif; ?>

			<?php endwhile; ?>
			<!-- end loop -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
