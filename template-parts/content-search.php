<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package charis-2020
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php charis_2020_post_thumbnail(); ?>

	<?php the_title( sprintf( '<h2 class="title is-5 entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
