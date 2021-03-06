<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package siteorigin-unwind
 */

get_header(); ?>

	<?php siteorigin_unwind_archive_title(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'loops/loop', 'blog' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
