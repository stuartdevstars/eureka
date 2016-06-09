<?php get_header(); ?>

<?php

$args = array('post_type' => 'ec_recipe');
if(isset($_GET['type']) && $_GET['type']) {
	$args = array_merge($args, array('meta_key' => 'recipe_type', 'meta_value' => $_GET['type']));
}

?>

<div class="recipes">
	<div class="container">
		<?php $loop = new WP_Query($args); ?>
		<?php $column_count = 0; ?>
		<?php $recipe_count = 0; ?>

		<?php while ($loop->have_posts() ) : $loop->the_post(); ?>

			<?php $image = get_field('recipe_image'); ?>
			<?php $featured = get_field('featured_recipe'); ?>

			<?php if($featured && $column_count > 2): ?>
					</div>
				</div>
				<?php $column_count = 0; ?>
			<?php endif; ?>

			<?php if($column_count == 0): ?>
				<div class="row">
					<div class="col-sm-12 clearfix">
			<?php endif; ?>

			<article class="recipe-box <?php if($featured):?>featured<?php else: ?>text-center<?php endif; ?> shadow">
				<?php if($featured):?>
					<div class="pull-left">
						<a href="<?php echo get_permalink(); ?>" title="View full recipe">
							<img src="<?php echo $image['sizes']['medium']; ?>" class="img-responsive">
						</a>
					</div>
					<div>
						<header class="text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/featured-recipe-text.png" alt="Featured recipe">
						</header>
						<div class="content">
							<h4><a href="<?php echo get_permalink(); ?>" title="View full recipe"><?php the_title(); ?></a></h4>
							<ul class="pull-left">
								<?php if(!empty($recipe_meta['recipe_serves'])): ?>
									<li>Serves: <?php echo $recipe_meta['recipe_serves'][0]; ?></li>
								<?php endif;?>
								<?php if(!empty($recipe_meta['recipe_prep_time'])): ?>
									<li>Prep-time: <?php echo $recipe_meta['recipe_prep_time'][0]; ?></li>
								<?php endif; ?>
								<?php if(!empty($recipe_meta['recipe_cooking_time'])): ?>
									<li>Cooking time: <?php echo $recipe_meta['recipe_cooking_time'][0]; ?></li>
								<?php endif; ?>
							</ul>
							<table class="pull-right">
								<tr>
									<td<?php if(!empty($dietary_information) && !in_array('Gluten free', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Gluten Free</td>
									<td<?php if(!empty($dietary_information) && !in_array('Kosher', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Kosher</td>
								</tr>
								<tr>
									<td<?php if(!empty($dietary_information) && !in_array('Vegan', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Vegan</td>
									<td<?php if(!empty($dietary_information) && !in_array('Halal', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Halal</td>
								</tr>
								<tr>
									<td<?php if(!empty($dietary_information) && !in_array('Vegetarian', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Vegetarian</td>
									<td<?php if(!empty($dietary_information) && !in_array('Diary free', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Diary free</td>
								</tr>
							</table>
						</div>
						<div class="text-right">
							<a href="<?php echo get_permalink(); ?>" class="btn btn-primary" title="View full recipe">Full recipe</a>
						</div>
					</div>
				<?php else: ?>
					<a href="<?php echo get_permalink(); ?>" title="View full recipe">
						<img src="<?php echo $image['sizes']['medium']; ?>" alt="Recipe image" class="img-responsive">
					</a>
					<h4><a href="<?php echo get_permalink(); ?>" title="View full recipe"><?php the_title();?></a></h4>
					<a href="<?php echo get_permalink(); ?>" class="btn btn-primary" title="View full recipe">Full recipe</a>
				<?php endif; ?>
			</article>
				

			<?php $column_count++; ?>
			<?php $recipe_count++; ?>

			<?php if($column_count == 5 || $recipe_count == $loop->post_count): ?>
					</div>
				</div>
				<?php $column_count = 0; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>