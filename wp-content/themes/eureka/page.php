<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="content shadow">
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
