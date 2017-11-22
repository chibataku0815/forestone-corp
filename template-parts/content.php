<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package info@fores-tone.co.jp
 */

?>
<div class="wrapper flex flex--column-center flex--space-around">
<h2 id="topics" class="">New Topcis</h3>
<div class="grid flex flex--center">
	<article class="7-10 1-1--tablet 1-1--phone grid__cell">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php the_date("Y.n.j"); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'infofores-tone-co-jp' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'infofores-tone-co-jp' ),
					'after'  => '</div>',
				) );
			?>

		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
<div class="flex flex--center">
	<a href="#page" class="flex flex--column-center">
		<i class="icon material-icons">keyboard_arrow_up</i>
	</a>
</div>
</div>
