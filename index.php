<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package info@fores-tone.co.jp
 */

get_header(); ?>

<div class="grid grid--center f-color--red-500">
  <div class="3/5 1/2--tablet grid__cell grid__cell--order-2 flex flex--row-righ-phone">
		<div>3</div>
		<div>3</div>
		<div>3</div>
	</div>
  <div class="1/5 1/2--tablet grid__cell grid__cell--order-1 flex flex--row-left">
  	<div>1</div>
		<div>1</div>
		<div>1</div>
  </div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
