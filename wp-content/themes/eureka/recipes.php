<?php
/*
Template Name: Recipes
*/
?>

<?php get_header(); ?>

<div class="recipes">
	<div class="container">
		<?php $args = array('post_type' => 'ec_recipe', 'posts_per_page' => 10); ?>
		<?php $loop = new WP_Query($args); ?>
		<?php $column_count = 0; ?>
		<?php $recipe_count = 0; ?>

		<?php if($column_count == 0): ?>
			<div class="row">
				<div class="col-sm-12 clearfix">
		<?php endif; ?>

		<?php while ($loop->have_posts() ) : $loop->the_post(); ?>
			<article class="recipe-box text-center shadow">
				<img src="img/recipes/fish-recipe-small.png" alt="Recipe image" class="img-responsive">
				<h4><?php the_title();?></h4>
				<a href="" class="btn btn-primary" title="View full recipe">Full recipe</a>
			</article>
			<?php $column_count++; ?>
			<?php $recipe_count++; ?>
		<?php endwhile; ?>

		<?php if($column_count == 4 || $recipe_count == $loop->post_count): ?>
				</div>
			</div>
			<?php $column_count = 0; ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>