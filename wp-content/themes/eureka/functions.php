<?php

add_action('init', 'create_post_types');
function create_post_types()
{
	register_post_type('ec_product',
	array(
		'labels' => array(
			'name' => __('Products'),
			'singular_name' => __('Product'),
			'add_new' => _x('Add New', 'Product'),
			'add_new_item' => __('Add New Product'),
			'edit_item' => __('Edit Product'),
			'new_item' => __('New Product'),
			'view_item' => __('View Product'),
			'search_items' => __('Search Products'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		//'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'has_archive' => true,
		'rewrite' => array('slug' => 'products'),
		'supports' => array('title', 'editor', 'thumbnail')
	));

	register_post_type('ec_recipe',
	array(
		'labels' => array(
			'name' => __('Recipes'),
			'singular_name' => __('Recipe'),
			'add_new' => _x('Add New', 'Recipe'),
			'add_new_item' => __('Add New Recipe'),
			'edit_item' => __('Edit Recipe'),
			'new_item' => __('New Recipe'),
			'view_item' => __('View Recipe'),
			'search_items' => __('Search Recipe'),
			'not_found' =>  __('No recipes found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'recipes'),
		'supports' => array('title', 'editor', 'thumbnail')
	));
}

add_action("admin_init", "admin_init");

function admin_init(){
	add_meta_box("product-ingredients", "Product ingredients", "add_product_ingredients", "ec_product", "normal", "low");
	add_meta_box("product-nutritional-information", "Product nutritional information", "add_product_nutritional_information", "ec_product", "normal", "low");
	add_meta_box("product-where-to-buy", "Where to buy", "add_product_where_to_buy", "ec_product", "normal", "low");

	add_meta_box("recipe-details-meta", "Recipe details", "add_recipe_meta", "ec_recipe", "normal", "low");
	add_meta_box("recipe-dietary-meta", "Dietary information", "add_recipe_dietary_meta", "ec_recipe", "normal", "low");
	add_meta_box("recipe-ingredients", "Ingredients", "add_recipe_ingredients", "ec_recipe", "normal", "low");
	add_meta_box("recipe-method", "Method", "add_recipe_method", "ec_recipe", "normal", "low");
	//add_meta_box("credits_meta", "Design &amp; Build Credits", "credits_meta", "portfolio", "normal", "low");
}
 
function add_product_ingredients()
{
	global $post;
	$product = get_post_custom($post->ID);
	wp_editor(htmlspecialchars_decode($product["product_ingredients"][0]), 'product_ingredients', $settings = array('textarea_name'=>'product_ingredients'));
}

function add_product_nutritional_information()
{
	global $post;
	$product = get_post_custom($post->ID);
	wp_editor(htmlspecialchars_decode($product["product_nutritional_information"][0]), 'product_nutritional_information', $settings = array('textarea_name'=>'product_nutritional_information'));
}

function add_product_where_to_buy()
{
	global $post;
	$product = get_post_custom($post->ID);
	wp_editor(htmlspecialchars_decode($product["product_where_to_buy"][0]), 'product_where_to_buy', $settings = array('textarea_name'=>'product_where_to_buy'));
}

function add_recipe_meta()
{
	global $post;
	$recipe = get_post_custom($post->ID);
	?>
	<div class="field">
		<label>Serves:</label>
		<input type="number" name="recipe_serves" value="<?php echo $recipe["recipe_serves"][0]; ?>" />
	</div>
	<div class="field">
		<label>Prep time:</label>
		<input type="text" name="recipe_prep_time" value="<?php echo $recipe["recipe_prep_time"][0]; ?>" />
	</div>
	<div class="field">
		<label>Cooking time:</label>
		<input type="text" name="recipe_cooking_time" value="<?php echo $recipe["recipe_cooking_time"][0]; ?>" />
	</div>
	<?php
}

function add_recipe_dietary_meta()
{
	global $post;
	$recipe = get_post_custom($post->ID);
	$dietary_information = unserialize($recipe['dietary_information'][0]);

	?>
	<ul>
		<li><label><input type="checkbox" name="dietary_information[]" value="Gluten free"<?php if(!empty($dietary_information) && in_array('Gluten free', $dietary_information)):?> checked="checked"<?php endif; ?> /> Gluten free</label></li>
		<li><label><input type="checkbox" name="dietary_information[]" value="Vegan"<?php if(!empty($dietary_information) && in_array('Vegan', $dietary_information)):?> checked="checked"<?php endif; ?> /> Vegan</label></li>
		<li><label><input type="checkbox" name="dietary_information[]" value="Vegetarian"<?php if(!empty($dietary_information) && in_array('Vegetarian', $dietary_information)):?> checked="checked"<?php endif; ?> /> Vegetarian</label></li>
		<li><label><input type="checkbox" name="dietary_information[]" value="Kosher"<?php if(!empty($dietary_information) && in_array('Kosher', $dietary_information)):?> checked="checked"<?php endif; ?> /> Kosher</label></li>
		<li><label><input type="checkbox" name="dietary_information[]" value="Halal"<?php if(!empty($dietary_information) && in_array('Halal', $dietary_information)):?> checked="checked"<?php endif; ?> /> Halal</label></li>
		<li><label><input type="checkbox" name="dietary_information[]" value="Diary free"<?php if(!empty($dietary_information) && in_array('Diary free', $dietary_information)):?> checked="checked"<?php endif; ?> /> Diary free</label></li>
	</ul>
	<?php
}

function add_recipe_ingredients()
{
	global $post;
	$recipe = get_post_custom($post->ID);
	wp_editor(htmlspecialchars_decode($recipe["recipe_ingredients"][0]), 'recipe_ingredients', $settings = array('textarea_name'=>'recipe_ingredients'));
}

function add_recipe_method()
{
	global $post;
	$recipe = get_post_custom($post->ID);
	wp_editor(htmlspecialchars_decode($recipe["recipe_method"][0]), 'recipe_method', $settings = array('textarea_name'=>'recipe_method'));
}

add_action('save_post_ec_product', 'save_product');
add_action('save_post_ec_recipe', 'save_recipe');

function save_product()
{
	global $post;

	update_post_meta($post->ID, "product_ingredients", $_POST["product_ingredients"]);
	update_post_meta($post->ID, "product_nutritional_information", $_POST["product_nutritional_information"]);
	update_post_meta($post->ID, "product_where_to_buy", $_POST["product_where_to_buy"]);
}

function save_recipe()
{
	global $post;

	update_post_meta($post->ID, "recipe_serves", $_POST["recipe_serves"]);
	update_post_meta($post->ID, "recipe_prep_time", $_POST["recipe_prep_time"]);
	update_post_meta($post->ID, "recipe_cooking_time", $_POST["recipe_cooking_time"]);
	update_post_meta($post->ID, "dietary_information", $_POST["dietary_information"]);
	update_post_meta($post->ID, "recipe_ingredients", $_POST["recipe_ingredients"]);
	update_post_meta($post->ID, "recipe_method", $_POST["recipe_method"]);
}

// Breadcrumbs
function custom_breadcrumbs()
{
	$separator = '&gt;';
	$breadcrums_class = 'breadcrumbs';
	$home_title = 'Homepage';

	//If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
	$custom_taxonomy = 'product_cat';

	//Get the query & post information
	global $post, $wp_query;

	//Do not display on the homepage
	if(!is_front_page()) {
		// Build the breadcrums
		echo '<ul class="' . $breadcrums_class . '">';

		// Home page
		echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
		echo '<li class="separator separator-home"> ' . $separator . ' </li>';

		if(is_archive() && !is_tax() && !is_category() && !is_tag()) {
			echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
		} else if (is_archive() && is_tax() && !is_category() && !is_tag()) {
			// If post is a custom post type
			$post_type = get_post_type();

			// If it is a custom post type display name and link
			if($post_type != 'post') {  
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);

				echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
			}

			$custom_tax_name = get_queried_object()->name;
			echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
		} else if(is_single()) {
			// If post is a custom post type
			$post_type = get_post_type();

			// If it is a custom post type display name and link
			if($post_type != 'post') {
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);

				echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
			}

			//Get post category info
			$category = get_the_category();

			if(!empty($category)) {
				// Get last category post is in
				$last_category = end(array_values($category));
				  
				// Get parent any categories and create array
				$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
				$cat_parents = explode(',',$get_cat_parents);
  
				// Loop through parent categories and store in variable $cat_display
				$cat_display = '';
				foreach($cat_parents as $parents) {
				    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
				    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
				}
			}

			// If it's a custom post type within a custom taxonomy
			$taxonomy_exists = taxonomy_exists($custom_taxonomy);
			if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
				$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
				$cat_id         = $taxonomy_terms[0]->term_id;
				$cat_nicename   = $taxonomy_terms[0]->slug;
				$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
				$cat_name       = $taxonomy_terms[0]->name;
			}

			//Check if the post is in a category
			if(!empty($last_category)) {
				echo $cat_display;
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
			} else if(!empty($cat_id)) {
				echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
			} else {
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';  
			}
		} else if(is_category()) {
			// Category page
			echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

		} else if(is_page()) {
			//Standard page
			if($post->post_parent) {
				//If child page, get parents 
				$anc = get_post_ancestors( $post->ID );

				//Get parents in the right order
				$anc = array_reverse($anc);

				//Parent page loop
				foreach ( $anc as $ancestor ) {
					$parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
					$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
				}

				//Display parent pages
				echo $parents;
   
				//Current page
				echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
			} else {
				//Just display current page if not parents
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
			}
		} else if(is_tag()) {
			//Tag page
			//Get tag information
			$term_id = get_query_var('tag_id');
			$taxonomy = 'post_tag';
			$args = 'include=' . $term_id;
			$terms = get_terms( $taxonomy, $args );
			$get_term_id = $terms[0]->term_id;
			$get_term_slug = $terms[0]->slug;
			$get_term_name = $terms[0]->name;

			//Display the tag name
			echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
		} else if(is_day()) {

			// Day archive
			// Year link
			echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

			// Month link
			echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
			echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

			// Day display
			echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
		} else if(is_month()) {
			// Month Archive
			// Year link
			echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

			// Month display
			echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
		} else if(is_year()) {
			// Display year archive
			echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
		} else if(is_author()) {
			//Auhor archive
			//Get the author information
			global $author;
			$userdata = get_userdata($author);

			//Display author name
			echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
		} else if(get_query_var('paged')) {
			//Paginated archives
			echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
		} else if(is_search()) {
			//Search results page
			echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
		} else if(is_404()) {
			echo '<li>' . 'Error 404' . '</li>';
		}

		echo '</ul>';    
	}
}

?>