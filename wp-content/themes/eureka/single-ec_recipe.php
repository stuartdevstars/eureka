<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php $recipe_meta = get_post_custom(); ?>
		<?php $dietary_information = unserialize($recipe_meta['dietary_information'][0]); ?>
		<?php $image = get_field('recipe_image'); ?>
		<?php $featured = get_field('featured_recipe'); ?>
		
		<div class="recipe" itemscope="" itemtype="http://schema.org/Recipe">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="recipe-overview">
							<?php if($featured): ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/featured-recipe-stamp.png" class="stamp">
							<?php endif; ?>
							
							<header>
								<h2 itemprop="name"><?php the_title(); ?></h2>
								<div itemprop="description" class="sr-only"><?php the_content(); ?></div>
								<hr />
								<ul>
									<?php if(!empty($recipe_meta['recipe_type'])): ?>
										<li><?php echo $recipe_meta['recipe_type'][0]; ?></li>
									<?php endif; ?>
									<?php if(!empty($recipe_meta['recipe_serves'])): ?>
										<li>Serves: <?php echo $recipe_meta['recipe_serves'][0]; ?></li>
									<?php endif; ?>
									<?php if(!empty($recipe_meta['recipe_prep_time'])): ?>
										<li>Prep-time: <time datetime="PT<?php echo strtoupper($recipe_meta['recipe_prep_time'][0]); ?>" itemprop="prepTime"><?php echo $recipe_meta['recipe_prep_time'][0]; ?></time></li>
									<?php endif; ?>
									<?php if(!empty($recipe_meta['recipe_cooking_time'])): ?>
										<li>Cooking time: <time datetime="PT<?php echo strtoupper($recipe_meta['recipe_prep_time'][0]); ?>" itemprop="cookTime"><?php echo $recipe_meta['recipe_cooking_time'][0]; ?></time></li>
									<?php endif; ?>
								</ul>
							</header>
							<img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" itemprop="image">
						</div>
					</div>
					<div class="col-sm-4">
						<article class="recipe-detail shadow">
							<section>
								<header>
									<h3 class="clearfix">Dietary <a href="">-</a></h3>
								</header>
								<div class="content">
									<ul>
										<li<?php if(!empty($dietary_information) && !in_array('Gluten free', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Gluten free</li>
										<li<?php if(!empty($dietary_information) && !in_array('Vegan', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Vegan</li>
										<li<?php if(!empty($dietary_information) && !in_array('Vegetarian', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Vegetarian</li>
										<li<?php if(!empty($dietary_information) && !in_array('Kosher', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Kosher</li>
										<li<?php if(!empty($dietary_information) && !in_array('Halal', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Halal</li>
										<li<?php if(!empty($dietary_information) && !in_array('Diary free', $dietary_information) || empty($dietary_information)): ?> class="disabled"<?php endif; ?>>Diary free</li>
									</ul>
								</div>
							</section>
							<section>
								<header>
									<h3 class="clearfix">Ingredients <a href="">+</a></h3>
								</header>
								<div class="content">
									<?php echo str_replace('<li', '<li itemprop="ingredients"', $recipe_meta['recipe_ingredients'][0]); ?>
								</div>
							</section>
							<section>
								<header>
									<h3 class="clearfix">Method <a href="">+</a></h3>
								</header>
								<div class="content" itemprop="recipeInstructions">
									<?php echo $recipe_meta['recipe_method'][0]; ?>
								</div>
							</section>
						</article>
					</div>
					<div class="col-sm-2">
						<a href="" title="See our fish products" style="display: block; margin-bottom: 20px;">
							<img src="<?php echo get_template_directory_uri(); ?>/img/fish-products-sidebar.jpg" alt="See our fish products" class="img-responsive">
						</a>
						<article class="recipe-box text-center shadow">
							<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/fish-recipe-small.png" alt="Recipe image" class="img-responsive">
							<h4>Lorem Ipsum Dolor Sit Conecteur Alleur</h4>
							<a href="" class="btn btn-primary" title="View full recipe">Full recipe</a>
						</article>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>