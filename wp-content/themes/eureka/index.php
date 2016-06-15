<?php get_header(); ?>

<section id="story-hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/story-hero.png" alt="" class="img-responsive" />
				<div class="hero-text text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/hero-text.png" alt="" class="img-responsive" />
				</div>
			</div>
		</div>
	</div>
</section>
<section id="promos">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="coming-soon promo">
					<a href="<?php echo get_site_url(); ?>" title="See more">
						<img src="<?php echo get_template_directory_uri(); ?>/img/coming-soon.jpg" alt="Coming soon - New tasty, meaty treasures" width="360" class="img-responsive" />
					</a>
					<div class="text-center">
						<a href="<?php echo get_site_url(); ?>" class="btn btn-primary" title="See more">See More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="our-story promo">
					<a href="<?php echo get_site_url(); ?>/our-story" title="Read more about the Eureka Cove story">
						<img src="<?php echo get_template_directory_uri(); ?>/img/our-story.jpg" alt="Our story" class="img-responsive" width="360" />
					</a>
					<div class="text-center">
						<a href="<?php echo get_site_url(); ?>/our-story" class="btn btn-primary" title="Read more about the Eureka Cove story">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="featured-recipe promo">
					<a href="<?php echo get_site_url(); ?>/recipes" title="View our recipes and get inspired">
						<img src="<?php echo get_template_directory_uri(); ?>/img/featured-recipe.jpg" alt="Featured recipe" class="img-responsive" width="360" />
					</a>
					<div class="text-center">
						<a href="<?php echo get_site_url(); ?>/recipes" class="btn btn-primary" title="View our recipes and get inspired">Get Inspired</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="welcome">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<p><span>Welcome to Eureka! Cove.</span> And congratulations! You’ve discovered a treasure trove of tasty treats. Scroll down and discover our range of delicious traditional foods, carefully sourced from around the world. The best quality means the best taste so it’s worth trying out some of our inspirational recipes too. Want more?   <a href="<?php echo get_site_url(); ?>/our-story" title="Read our full story here">Happy exploring!</a></p>
			</div>
			<div class="col-sm-3 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/free-from.png" alt="Free From Gluten and Diary logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/kosher.png" alt="Kosher logo">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>