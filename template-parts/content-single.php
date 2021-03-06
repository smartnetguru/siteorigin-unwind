<?php
/**
 * Template part for displaying single posts.
 *
 * @package siteorigin-unwind
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

	<header class="entry-header">
		<div class="entry-meta">
			<?php siteorigin_unwind_post_meta(); ?>
		</div><!-- .entry-meta -->

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if( has_post_thumbnail() && siteorigin_setting('blog_featured_single') ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail() ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'siteorigin-unwind' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php siteorigin_unwind_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
