<?php get_header(); ?>
<main id="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="post">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<div class="meta">Posted on <?php the_time('F jS, Y') ?></div>
						<p><?php the_content(__('(more...)')); ?></p>
						<hr>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>