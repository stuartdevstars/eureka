<?php get_header(); ?>

<?php $product_meta = get_post_custom(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="product" itemscope="" itemtype="http://schema.org/Product">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<section id="product-info" class="clearfix">
							<div class="left">
								<div class="map">
									<img src="<?php echo get_template_directory_uri(); ?>/img/product-map.jpg" alt="Product map" class="img-responsive">
								</div>
								<div class="strapline" itemprop="name"><?php the_title(); ?></div>
								<div class="sourced">Responsibly sourced in holland</div>
								<div class="flavour">Lightly spiced <img src="<?php echo get_template_directory_uri(); ?>/img/chilli.png" alt="Chilli"></div>
							</div>
							<div class="right description" itemprop="description"><?php the_content(); ?></div>
						</section>
					</div>
					<div class="col-sm-6">
						<a href="<?php echo get_site_url(); ?>/recipes" title="View our recipes">
							<img src="<?php echo get_template_directory_uri(); ?>/img/view-recipes-sidebar.jpg" alt="Buy online.  Coming soon" id="view-recipes" class="shadow img-responsive">
						</a>
						<section id="product-ingredients" class="shadow">
							<article>
								<header>
									<h4 class="clearfix">Ingredients <a href="">-</a></h4>
								</header>
								<div class="content">
								<?php if(!empty($product_meta['product_ingredients'])): ?>
									<?php echo $product_meta['product_ingredients'][0]; ?>
								<?php endif; ?>
								</div>
							</article>
							<article itemprop="nutrition" itemscope="" itemtype="http://schema.org/NutritionInformation">
								<header>
									<h4 class="clearfix">Nutritional information <a href="">+</a></h4>
								</header>
								<div class="content">
								<?php if(!empty($product_meta['product_nutritional_information'])): ?>
									<?php echo $product_meta['product_nutritional_information'][0]; ?>
								<?php endif; ?>
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
								<?php if(!empty($product_meta['product_where_to_buy'])): ?>
									<?php echo $product_meta['product_where_to_buy'][0]; ?>
								<?php endif; ?>
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