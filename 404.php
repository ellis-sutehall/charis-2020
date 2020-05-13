<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package charis-2020
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
					<header class="page-header">
						<h1 class="title is-1 page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'charis-2020' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'charis-2020' ); ?></p>
						<a href="/" class="button is-secondary">Go to homepage</a>
						<a href="/shop" class="button is-secondary">Go to shop</a>
					</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
