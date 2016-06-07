<?php get_header(); ?>

<?php $recipe_meta = get_post_custom(); ?>
<?php $dietary_information = unserialize($recipe_meta['dietary_information'][0]); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="recipe" itemscope="" itemtype="http://schema.org/Recipe">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="recipe-overview">
							<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/featured-recipe-stamp.png" class="stamp">
							<header>
								<h2 itemprop="name"><?php the_title(); ?></h2>
								<div itemprop="description" class="sr-only"><?php the_content(); ?></div>
								<hr />
								<ul>
									<li>Fish</li>
									<li>Serves: <?php echo $recipe_meta['recipe_serves'][0]; ?></li>
									<li>Prep-time: <time datetime="PT30M" itemprop="prepTime"><?php echo $recipe_meta['recipe_prep_time'][0]; ?></time></li>
									<li>Cooking time: <time datetime="PT2H" itemprop="cookTime"><?php echo $recipe_meta['recipe_cooking_time'][0]; ?></time></li>
								</ul>
							</header>
							<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/fish-recipe-large.png" class="img-responsive" itemprop="image">
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
										<li<?php if(!in_array('Gluten free', $dietary_information)): ?> class="disabled"<?php endif; ?>>Gluten free</li>
										<li<?php if(!in_array('Vegan', $dietary_information)): ?> class="disabled"<?php endif; ?>>Vegan</li>
										<li<?php if(!in_array('Vegetarian', $dietary_information)): ?> class="disabled"<?php endif; ?>>Vegetarian</li>
										<li<?php if(!in_array('Kosher', $dietary_information)): ?> class="disabled"<?php endif; ?>>Kosher</li>
										<li<?php if(!in_array('Halal', $dietary_information)): ?> class="disabled"<?php endif; ?>>Halal</li>
										<li<?php if(!in_array('Diary free', $dietary_information)): ?> class="disabled"<?php endif; ?>>Diary free</li>
									</ul>
								</div>
							</section>
							<section>
								<header>
									<h3 class="clearfix">Ingredients <a href="">+</a></h3>
								</header>
								<div class="content">
									<ul>
										<li itemprop="ingredients">XXXg Lorem ipsum dolor sit amet</li>
										<li itemprop="ingredients">2 Consectetur</li>
										<li itemprop="ingredients">XXg Eiusmod tempor incididunt ut labore</li>
										<li itemprop="ingredients">XXXg Lorem ipsum dolor sit amet</li>
										<li itemprop="ingredients">1 Consectetur</li>
										<li itemprop="ingredients">XXg Eiusmod tempor incididunt ut labore</li>
										<li itemprop="ingredients">XXXg Lorem ipsum dolor sit amet</li>
										<li itemprop="ingredients">3 Consectetur</li>
										<li itemprop="ingredients">XXg Eiusmod tempor incididunt ut labore</li>
										<li itemprop="ingredients">XXXg Lorem ipsum dolor sit amet</li>
										<li itemprop="ingredients">4 Consectetur</li>
									</ul>
								</div>
							</section>
							<section>
								<header>
									<h3 class="clearfix">Method <a href="">+</a></h3>
								</header>
								<div class="content" itemprop="recipeInstructions">
									<ol>
										<li>XXXg Lorem ipsum dolor sit amet</li>
										<li>2 Consectetur</li>
										<li>XXg Eiusmod tempor incididunt ut labore</li>
										<li>XXXg Lorem ipsum dolor sit amet</li>
										<li>1 Consectetur</li>
										<li>XXg Eiusmod tempor incididunt ut labore</li>
										<li>XXXg Lorem ipsum dolor sit amet</li>
										<li>3 Consectetur</li>
										<li>XXg Eiusmod tempor incididunt ut labore</li>
										<li>XXXg Lorem ipsum dolor sit amet</li>
										<li>4 Consectetur</li>
									</ol>
								</div>
							</section>
						</article>
					</div>
					<div class="col-sm-2">
						<a href="" title="See our fish products">
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