<?php get_header(); ?>

<?php $product_meta = get_post_custom(); ?>

<div class="product" itemscope="" itemtype="http://schema.org/Product">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<section id="product-info" class="clearfix">
					<div class="left">
						<div class="map">
							<img src="img/product-map.jpg" alt="Product map" class="img-responsive">
						</div>
						<div class="strapline" itemprop="name">Delicious &amp; chunky prime hake fillets coated in a crisp and delicately seasoned light batter</div>
						<div class="sourced">Responsibly sourced in holland</div>
						<div class="flavour">Lightly spiced <img src="img/chilli.png" alt="Chilli"></div>
					</div>
					<div class="right description" itemprop="description"><span>Our tasty Hake Fillets</span> lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm odo consequat, duis aute irure dolor inerit.</div>
				</section>
			</div>
			<div class="col-sm-6">
				<img src="img/view-recipes-sidebar.jpg" alt="Buy online.  Coming soon" id="view-recipes" class="shadow img-responsive">
				<section id="product-ingredients" class="shadow">
					<article>
						<header>
							<h4 class="clearfix">Ingredients <a href="">-</a></h4>
						</header>
						<div class="content">Fish Hake (Merluccius) (83%), Batter (contains: <b>wheat</b> flour, water, paprika, salt, tumeric, chillies, brown sugar, parsley), Breadcrumbs (contains: <b>wheat</b> flour, yeast, salt). Fried in sunflower oil.</div>
					</article>
					<article itemprop="nutrition" itemscope="" itemtype="http://schema.org/NutritionInformation">
						<header>
							<h4 class="clearfix">Nutritional information <a href="">+</a></h4>
						</header>
						<div class="content">Fish Hake (Merluccius) (83%), Batter (contains: <b>wheat</b> flour, water, paprika, salt, tumeric, chillies, brown sugar, parsley), Breadcrumbs (contains: <b>wheat</b> flour, yeast, salt). Fried in sunflower oil.</div>
						<!--<p itemprop="calories">596</p>
						<p itemprop="proteinContent">41g</p>
						<p itemprop="carbohydrateContent">69g</p>
						<p itemprop="fatContent">18.5g</p>-->
					</article>
					<article>
						<header>
							<h4 class="clearfix">Where to buy <a href="">+</a></h4>
						</header>
						<div class="content">Fish Hake (Merluccius) (83%), Batter (contains: <b>wheat</b> flour, water, paprika, salt, tumeric, chillies, brown sugar, parsley), Breadcrumbs (contains: <b>wheat</b> flour, yeast, salt). Fried in sunflower oil.</div>
					</article>
				</section>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>