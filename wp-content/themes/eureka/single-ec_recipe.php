<?php get_header(); ?>

<?php $recipe_meta = get_post_custom(); ?>

<div class="recipe" itemscope="" itemtype="http://schema.org/Recipe">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="recipe-overview">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recipes/featured-recipe-stamp.png" class="stamp">
					<header>
						<h2 itemprop="name">Lorem ipsum dolor sit second line possible</h2>
						<!--<p itemprop="description">Recipe description goes here</p>-->
						<hr />
						<ul>
							<li>Fish</li>
							<li>Serves: <?php echo $recipe_meta['recioe_serves'][0]; ?></li>
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
								<li>Gluten free</li>
								<li class="disabled">Vegan</li>
								<li class="disabled">Vegetarian</li>
								<li>Kosher</li>
								<li>Halal</li>
								<li class="disabled">Diary-free</li>
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

<?php get_footer(); ?>