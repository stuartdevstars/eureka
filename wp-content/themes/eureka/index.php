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
				<p><span>Welcome to Eureka! Cove.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Want more? <a href="" title="Read our full story here">Read our full story here</a></p>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>