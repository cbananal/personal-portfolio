<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dash
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<header class="entry-header">
				<!-- Shows taxonomy name as page title -->
				<h1 class="entry-title"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1></a>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="project-grid-container">
						<?php while ( have_posts() ) : the_post(); ?>
							
							<div class="project-box">
								<div class="project-image">
									<?php the_post_thumbnail(); ?>
									<a href="<?php echo get_permalink(); ?>">
										<div class="project-hovered">
											<p class="animated flipInY">&#10511;</p>
										</div>
									</a>
								</div>
								<div class="project-info">
									<?php the_title( '<h4>', '</h4>' ); ?>
									<div><?php echo CFS()-> get( 'work_description' ); ?></div>
								</div>
								<!--end project-info-->
							</div>
							<!--end project-box-->

							<!-- <?php wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dash' ),
									'after'  => '</div>',
								) ); ?> -->

							<!-- If comments are open or we have at least one comment, load up the comment template. -->
							<!-- <?php if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif; ?> -->

						<?php endwhile; ?>
						<!--end loop-->

					</div>
					<!--end project-grid-->
				</article><!-- #post-## -->
			</div>
			<!-- end entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
