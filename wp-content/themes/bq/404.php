<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package palermo
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<div class="container">
					<h1 class="page-title"><?php esc_html_e( 'Oops! 404  Page not found, vuelve a la home.', 'palermo' ); ?></h1>
				</div>
			</header><!-- .page-header -->

			
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
