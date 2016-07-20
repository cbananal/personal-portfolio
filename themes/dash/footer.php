<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dash
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="social">
			<a href="http://www.linkedin.com/in/cbananal" target="_blank"><i class="fa fa-linkedin-square"></i></a>
			<a href="http://www.github.com/cbananal" target="_blank"><i class="fa fa-github"></i></a>
			<a href="http://www.codepen.io/cbananal" target="_blank"><i class="fa fa-codepen"></i></a>
			<a href="http://www.twitter.com/unfinished_art" target="_blank"><i class="fa fa-twitter"></i></a>
		</div>
		<p>Copyright <?php the_date('Y'); ?> <span class="slash-style">&#47;</span> Claudine Bananal<br>Built, as always, with love.</p>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dash' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dash' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'dash' ), 'dash', '<a href="http://www.claudinebananal.com" rel="designer">Claudine Bananal</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
