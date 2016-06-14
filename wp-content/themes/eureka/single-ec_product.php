<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php $product_meta = get_post_custom(); ?>
		<?php $banner_image = get_field('product_banner_image'); ?>
		<?php $sourced_from_map = get_field('sourced_from_map'); ?>

		<img src="<?php echo $banner_image['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive">
		<div class="product" itemscope="" itemtype="http://schema.org/Product">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-6">
						<section id="product-info" class="clearfix">
							<div class="left">
								<div class="map">
									<img src="<?php echo $sourced_from_map['url']; ?>" alt="Sourced from map" class="img-responsive">
								</div>
								<div class="sr-only" itemprop="name"><?php the_title(); ?></div>
								<div class="strapline"><?php the_field('strapline'); ?></div>
								<div class="sourced"><?php the_field('sourced_from_text');?></div>
								<div class="flavour"><?php the_field('level_of_spice');?> <img src="<?php echo get_template_directory_uri(); ?>/img/chilli.png" alt="Chilli"></div>
							</div>
							<div class="right description" itemprop="description"><?php the_content(); ?></div>
						</section>
					</div>
					<div class="col-sm-5 col-md-6">
						<a href="<?php echo get_site_url(); ?>/recipes" title="View our recipes" class="hidden-xs hidden-sm hidden-md">
							<img src="<?php echo get_template_directory_uri(); ?>/img/view-recipes-sidebar.jpg" alt="Buy online.  Coming soon" id="view-recipes" class="shadow img-responsive">
						</a>
						<section id="product-ingredients" class="shadow">
							<article>
								<header>
									<h4 class="clearfix">Ingredients <a href="">-</a></h4>
								</header>
								<div class="content">
									<?php the_field('product_ingredients'); ?>
								</div>
							</article>
							<article itemprop="nutrition" itemscope="" itemtype="http://schema.org/NutritionInformation">
								<header>
									<h4 class="clearfix">Nutritional information <a href="">+</a></h4>
								</header>
								<div class="content">
									<?php the_field('product_nutritional_information'); ?>
								</div>
								<!--<p itemprop="calories">596</p>
								<p itemprop="proteinContent">41g</p>
								<p itemprop="carbohydrateContent">69g</p>
								<p itemprop="fatContent">18.5g</p>-->
							</article>
							<article>
								<header>
									<h4 class="clearfix">Where to buy <a href="">+</a></h4>
								</header>
								<div class="content">
									<?php the_field('where_to_buy'); ?>
								</div>
							</article>
						</section>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>