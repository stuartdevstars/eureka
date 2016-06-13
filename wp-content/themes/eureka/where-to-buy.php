<?php
/*
Template Name: Where to buy
*/

$costco_fish_products = get_posts(array(
	'post_type' => 'ec_product',
	'meta_query' => array(
		'relation'		=> 'AND',
		array(
			'key'	 	=> 'where_to_buy',
			'value'	  	=> 'Costco',
			'compare' 	=> 'LIKE',
		),
		array(
			'key'		=> 'product_type',
			'compare'	=> '=',
			'value'		=> 'Fish',
		),
	),
));

$costco_meat_products = get_posts(array(
	'post_type' => 'ec_product',
	'meta_query' => array(
		'relation'		=> 'AND',
		array(
			'key'	 	=> 'where_to_buy',
			'value'	  	=> 'Costco',
			'compare' 	=> 'LIKE',
		),
		array(
			'key'		=> 'product_type',
			'compare'	=> '=',
			'value'		=> 'Meat',
		),
	),
));

$tesco_fish_products = get_posts(array(
	'post_type' => 'ec_product',
	'meta_query' => array(
		'relation'		=> 'AND',
		array(
			'key'	 	=> 'where_to_buy',
			'value'	  	=> 'Costco',
			'compare' 	=> 'LIKE',
		),
		array(
			'key'		=> 'product_type',
			'compare'	=> '=',
			'value'		=> 'Fish',
		),
	),
));

$tesco_meat_products = get_posts(array(
	'post_type' => 'ec_product',
	'meta_query' => array(
		'relation'		=> 'AND',
		array(
			'key'	 	=> 'where_to_buy',
			'value'	  	=> 'Tesco',
			'compare' 	=> 'LIKE',
		),
		array(
			'key'		=> 'product_type',
			'compare'	=> '=',
			'value'		=> 'Meat',
		),
	),
));

$sainsburys_fish_products = get_posts(array(
	'post_type' => 'ec_product',
	'meta_query' => array(
		'relation'		=> 'AND',
		array(
			'key'	 	=> 'where_to_buy',
			'value'	  	=> "Sainsbury's",
			'compare' 	=> 'LIKE',
		),
		array(
			'key'		=> 'product_type',
			'compare'	=> '=',
			'value'		=> 'Fish',
		),
	),
));

$sainsburys_meat_products = get_posts(array(
	'post_type' => 'ec_product',
	'meta_query' => array(
		'relation'		=> 'AND',
		array(
			'key'	 	=> 'where_to_buy',
			'value'	  	=> "Sainsbury's",
			'compare' 	=> 'LIKE',
		),
		array(
			'key'		=> 'product_type',
			'compare'	=> '=',
			'value'		=> 'Meat',
		),
	),
));

?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<section id="buy-info">
						<header><span>Bring our tasty treasures home!</span> <?php the_content(); ?></header>
						<div class="store-details-text small">Store details correct at time of</div>
						<div class="store-exclusive exclusive small">* Store exclusive</div>
						<div class="empty small">&nbsp;</div>
						<div class="store-info">
							<article class="store">
								<div class="contact">
									<img src="<?php echo get_template_directory_uri(); ?>/img/stores/costco.png" alt="Costco logo" />
									<p>0800 0324 324</p>
									<p><a href="mailto:customercare@costco.co.uk">customercare@costco.co.uk</a></p>
									<p><a href="http://www.costco.co.uk" title="Visit Costco's website" target="_blank">www.costco.co.uk</a></p>
								</div>
								<div class="products">
									<h4>Products stocked<span>....................................</span></h4>
									
									<?php if(!empty($costco_fish_products)): ?>
										<div class="fish">
											<h5>Fish</h5>
											<?php foreach ($costco_fish_products as $fish_product): ?>
												<p><a href=""><?php echo $fish_product->post_title; ?></a></p>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>

									<?php if(!empty($costco_meat_products)): ?>
										<div class="meat">
											<h5>Meat</h5>
											<?php foreach ($costco_meat_products as $meat_product): ?>
												<p><a href=""><?php echo $meat_product->post_title; ?></a></p>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
								</div>
							</article>
							<article class="store">
								<div class="contact">
									<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tesco.png" alt="Tesco logo" />
									<p>0800 323 4040</p>
									<p>Email via form</p>
									<p><a href="http://www.tesco.com" title="Visit Tesco's website" target="_blank">www.tesco.com</a></p>
								</div>
								<div class="products">
									<h4>Products stocked<span>....................................</span></h4>

									<?php if(!empty($tesco_fish_products)): ?>
										<div class="fish">
											<h5>Fish</h5>
											<?php foreach ($tesco_fish_products as $fish_product): ?>
												<p><a href=""><?php echo $fish_product->post_title; ?></a></p>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>

									<?php if(!empty($tesco_meat_products)): ?>
										<div class="meat">
											<h5>Meat</h5>
											<?php foreach ($tesco_meat_products as $meat_product): ?>
												<p><a href=""><?php echo $meat_product->post_title; ?></a></p>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
								</div>
							</article>
							<article class="store">
								<div class="contact">
									<img src="<?php echo get_template_directory_uri(); ?>/img/stores/sainsburys.png" alt="Sainsburys logo" />
									<p>0800 636 262</p>
									<p>Email via form</p>
									<p><a href="http://www.sainsburys.co.uk" title="Visit Sainsbury's website" target="_blank">www.sainsburys.co.uk</a></p>
								</div>
								<div class="products">
									<h4>Products stocked<span>....................................</span></h4>

									<?php if(!empty($sainsburys_fish_products)): ?>
										<div class="fish">
											<h5>Fish</h5>
											<?php foreach ($sainsburys_fish_products as $fish_product): ?>
												<p><a href=""><?php echo $fish_product->post_title; ?></a></p>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>

									<?php if(!empty($sainsburys_meat_products)): ?>
										<div class="meat">
											<h5>Meat</h5>
											<?php foreach ($sainsburys_meat_products as $meat_product): ?>
												<p><a href=""><?php echo $meat_product->post_title; ?></a></p>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
								</div>
							</article>
						</div>
						<div class="brand-graphic hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/img/brand-graphic.png" alt="" class="img-responsive center-block"></div>
					</section>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<aside class="col-sm-2 text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/img/buy-online-sidebar.jpg" alt="Buy online.  Coming soon" class="img-responsive center-block" style="margin-bottom: 30px;">
			<div class="shadow" style="display: inline-block;">
				<a href="<?php echo get_site_url(); ?>/recipes" title="View our recipes">
					<img src="<?php echo get_template_directory_uri(); ?>/img/view-recipes-sidebar.jpg" alt="View our recipes" class="img-responsive">
				</a>
			</div>
		</aside>
	</div>
</div>

<?php get_footer(); ?>