<div class="recipes">
	<div class="container">
		<?php $args = array('post_type' => 'ec_recipe', 'posts_per_page' => 10); ?>
		<?php $loop = new WP_Query($args); ?>
		<?php $column_count = 0; ?>
		<?php $recipe_count = 0; ?>

		<?php if($column_count == 0): ?>
			<div class="row">
				<div class="col-sm-12 clearfix">
		<?php endif; ?>

		<?php while ($loop->have_posts() ) : $loop->the_post(); ?>
			<article class="recipe-box text-center shadow">
				<img src="img/recipes/fish-recipe-small.png" alt="Recipe image" class="img-responsive">
				<h4><?php the_title();?></h4>
				<a href="" class="btn btn-primary" title="View full recipe">Full recipe</a>
			</article>
			<?php $column_count++; ?>
			<?php $recipe_count++; ?>
		<?php endwhile; ?>

		<?php if($column_count == 4 || $recipe_count == $loop->post_count): ?>
				</div>
			</div>
			<?php $column_count = 0; ?>
		<?php endif; ?>

		<!--<article class="recipe-box featured shadow">
			<img src="img/recipes/fish-recipe-large.png" class="pull-left img-responsive" style="margin-right: 10px;">
			<div>
				<header class="text-center">
					<img src="img/recipes/featured-recipe-text.png" alt="Featured recipe">
				</header>
				<div class="content">
					<h4>Lorem Ipsum Dolor Sit</h4>
					<table>
						<tr>
							<td>Serves: 2</td>
							<td>Gluten Free</td>
							<td>Kosher</td>
						</tr>
						<tr>
							<td>Prep-time: 30m</td>
							<td>Vegan</td>
							<td>Halal</td>
						</tr>
						<tr>
							<td>Cooking time: 2hrs</td>
							<td>Vegetarian</td>
							<td>Diary free</td>
						</tr>
					</table>
				</div>
				<div class="text-right">
					<a href="" class="btn btn-primary" title="View full recipe">Full recipe</a>
				</div>
			</div>
		</article>-->
	</div>
</div> 