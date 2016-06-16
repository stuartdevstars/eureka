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

			<?php $recipe_meta = get_post_custom(); ?>
			<?php $dietary_information = unserialize($recipe_meta['dietary_information'][0]); ?>

			<?php $type = get_field('recipe_type'); ?>
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
						<a href="<?php echo get_permalink(); ?>" title="View full recipe" class="img-holder">
							<?php if($type == 'Fish'):?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-tabs/fish-tab.png" alt="Fish product" class="tab">
							<?php endif; ?>
							<?php if($type == 'Meat'):?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-tabs/meat-tab.png" alt="Meat product" class="tab">
							<?php endif; ?>
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
							<?php if(!empty($dietary_information)): ?>
								<?php $count = 1; ?>
								<?php $information_count = 0; ?>

								<table class="pull-right">
									<?php foreach($dietary_information as $information): ?>
										<?php if($count == 0): ?>
											<tr>
										<?php endif; ?>

										<td><?php echo $information; ?></td>

										<?php $count++; ?>
										<?php $information_count++; ?>

										<?php if($column_count == 5 || $information_count == $loop->post_count): ?>
											</tr>
										<?php $column_count = 0; ?>
										<?php endif; ?>
									<?php endforeach; ?>
								</table>
							<?php endif; ?>
						</div>
						<div class="text-right">
							<a href="<?php echo get_permalink(); ?>" class="btn btn-primary" title="View full recipe">Full recipe</a>
						</div>
					</div>
				<?php else: ?>
					<a href="<?php echo get_permalink(); ?>" title="View full recipe" class="img-holder">
						<?php if($type == 'Fish'):?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-tabs/fish-tab.png" alt="Fish product" class="tab">
						<?php endif; ?>
						<?php if($type == 'Meat'):?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-tabs/meat-tab.png" alt="Meat product" class="tab">
						<?php endif; ?>
						<img src="<?php echo $image['sizes']['medium']; ?>" alt="Recipe image" class="img-responsive center-block">
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