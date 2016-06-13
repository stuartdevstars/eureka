<?php
/*
Template Name: Where to buy
*/
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
									<div class="fish">
										<h5>Fish</h5>
										<p><a href="">Hake Fillets <span class="exclusive">*</span></a></p>
										<p><a href="">Hake Goujons <span class="exclusive">*</span></a></p>
										<p><a href="">Gifilte Fish Balls</a></p>
									</div>
									<div class="meat">
										<h5>Meat</h5>
										<p><a href="">Chicken drumsticks</a></p>
										<p><a href="">Baby beef sausages</a></p>
										<p><a href="">Continental beef Sausages</a></p>
									</div>
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
									<div class="fish">
										<h5>Fish</h5>
										<p><a href="">Gifilte Fish Balls</a></p>
									</div>
									<div class="meat">
										<h5>Meat</h5>
										<p><a href="">Continental beef Sausages</a></p>
									</div>
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
									<div class="fish">
										<h5>Fish</h5>
										<p><a href="">Gifilte Fish Balls</a></p>
									</div>
									<div class="meat">
										<h5>Meat</h5>
										<p><a href="">Chicken drumsticks</a></p>
										<p><a href="">Baby beef sausages</a></p>
									</div>
								</div>
							</article>
						</div>
						<div class="brand-graphic"><img src="<?php echo get_template_directory_uri(); ?>/img/brand-graphic.png" alt="" class="img-responsive center-block"></div>
					</section>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<aside class="col-sm-2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/buy-online-sidebar.jpg" alt="Buy online.  Coming soon" class="img-responsive center-block" style="margin-bottom: 30px;">
			<div class="shadow center-block">
				<a href="<?php echo get_site_url(); ?>/recipes" title="View our recipes">
					<img src="<?php echo get_template_directory_uri(); ?>/img/view-recipes-sidebar.jpg" alt="View our recipes" class="img-responsive">
				</a>
			</div>
		</aside>
	</div>
</div>

<?php get_footer(); ?>