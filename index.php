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
 * @package clearstream_spac
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div id="test-id">sdfsdf</div>

	<!-- Full width column -->
<div class="flex mb-4">
  <div class="w-full bg-gray-300 h-12"></div>
</div>

<!-- Two columns -->
<div class="flex mb-4">
  <div class="w-1/2 bg-gray-500 h-12"></div>
  <div class="w-1/2 bg-gray-300 h-12"></div>
</div>

<!-- Three columns -->
<div class="flex mb-4">
  <div class="w-1/3 bg-gray-500 h-12"></div>
  <div class="w-1/3 bg-gray-300 h-12"></div>
  <div class="w-1/3 bg-gray-500 h-12"></div>
</div>

<!-- Four columns -->
<div class="flex mb-4">
  <div class="w-1/4 bg-gray-300 h-12"></div>
  <div class="w-1/4 bg-gray-500 h-12"></div>
  <div class="w-1/4 bg-gray-300 h-12"></div>
  <div class="w-1/4 bg-gray-500 h-12"></div>
</div>

<!-- Five columns -->
<div class="flex mb-4">
  <div class="w-1/5 bg-gray-300 h-12"></div>
  <div class="w-1/5 bg-gray-500 h-12"></div>
  <div class="w-1/5 bg-gray-300 h-12"></div>
  <div class="w-1/5 bg-gray-500 h-12"></div>
  <div class="w-1/5 bg-gray-300 h-12"></div>
</div>

<!-- Six columns -->
<div class="flex">
  <div class="w-1/6 bg-gray-500 h-12"></div>
  <div class="w-1/6 bg-gray-300 h-12"></div>
  <div class="w-1/6 bg-gray-500 h-12"></div>
  <div class="w-1/6 bg-gray-300 h-12"></div>
  <div class="w-1/6 bg-gray-500 h-12"></div>
  <div class="w-1/6 bg-gray-300 h-12"></div>
</div>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
