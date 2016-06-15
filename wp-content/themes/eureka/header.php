<?php 

$current_url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$current_url_string = trim(str_replace(get_site_url(), '', $current_url), '/');
$url_parts = explode('/', $current_url_string);

$is_homepage = false;
if(!$current_url_string) {
    $is_homepage = true;
}

?>

<!doctype html>
<!--[if IE 8]>        <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>        <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
    <meta name="description" content="Eureka Cove - Bringing tasty treasures home">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:site_name" content="" />
    <meta property="og:type" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:phone_number" content="" />
    <meta property="og:image" content="" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">

    <link rel="canonical" href="">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <script type="text/javascript">
    var base_url = "<?php echo get_template_directory_uri(); ?>";
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="container container-large">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo get_site_url(); ?>" title="View <?php bloginfo('name'); ?> home page">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header.png" alt="Eureka Cove - Bringing tasty treasures home" class="img-responsive desktop" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header-mobile.png" alt="Eureka Cove - Bringing tasty treasures home" class="img-responsive mobile" />
                    </a>
                    
                    <!-- hiding social medai icons here 
                    
                    <div class="social hidden-xs">
                        <a href="https://www.facebook.com" title="Like Eureka Cove on Facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook logo" width="18"></a>
                        <a href="https://www.twitter.com" title="Follow Eureka Cove on Twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter logo" width="18"></a>
                        <a href="https://www.instagram.com" title="Follow Eureka Cove on Instagram"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram logo" width="18"></a>
                        <a href="https://www.youtube.com" title="Subscribe to Eureka Cove on YouTube"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube.svg" alt="YouTube logo" width="18"></a>
                    </div>
                    
                    stop hiding social medai icons here -->
                    
                </div>
            </div>
        </div>
    </header>
    <nav id="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="open-nav pull-right mobile"><img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="Menu open"></a>
                    <div class="navbar">
                        <ul>
                            <li class="home">
                                <a href="<?php echo get_site_url(); ?>" title="Go to the Eureka Cove home page">Home</a>
                            </li>
                            <li<?php if(isset($url_parts) && $url_parts[0] == 'our-story'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo get_site_url(); ?>/our-story" title="Find out about our story">Our story</a>
                            </li>
                            <li class="has-sub-nav<?php if(isset($url_parts) && $url_parts[0] == 'products'): ?> active<?php endif; ?>" data-subnav="our-products">
                                <a href="<?php echo get_site_url(); ?>/products" title="View all of our products">Our products</a>
                                <?php $args = array('post_type' => 'ec_product'); ?>
                                <?php $loop = new WP_Query($args); ?>
                                <?php if($loop->have_posts()) : ?>
                                    <ul class="sub-nav our-products">
                                        <?php while($loop->have_posts()) : $loop->the_post(); ?>
                                            <li><a href="<?php echo get_permalink(); ?>" title="View our <?php the_title(); ?> product"><?php the_title(); ?></a></li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                            <li class="has-sub-nav<?php if(isset($url_parts) && $url_parts[0] == 'recipes'): ?> active<?php endif; ?>" data-subnav="recipes">
                                <a href="<?php echo get_site_url(); ?>/recipes" title="View our recipes">Recipes</a>
                                <ul class="sub-nav recipes">
                                    <li><a href="<?php echo get_site_url(); ?>/recipes" title="View all our recipes">All</a></li>
                                    <!--<li><a href="<?php echo get_site_url(); ?>/recipes/most-viewed" title="View our most viewed recipes">Most viewed</a></li>-->
                                    <li><a href="<?php echo get_site_url(); ?>/recipes?type=fish" title="View our fish recipes">Fish</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/recipes?type=meat" title="View our meat recipes">Meat</a></li>
                                </ul>
                            </li>
                            <li>
                                <a title="Get in touch with us" class="get-in-touch">Get in touch</a>
                            </li>
                            <li<?php if(isset($url_parts) && $url_parts[0] == 'where-to-buy'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo get_site_url(); ?>/where-to-buy" title="Find out where to buy our products">Where to buy</a>
                            </li>
                        </ul>

                        <div class="social hidden-sm hidden-md hidden-lg">
                            <a href="https://www.facebook.com" title="Like Eureka Cove on Facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-white.png" alt="Facebook logo"></a>
                            <a href="https://www.twitter.com" title="Follow Eureka Cove on Twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter-white.png" alt="Twitter logo"></a>
                            <a href="https://www.instagram.com" title="Follow Eureka Cove on Instagram"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram-white.png" alt="Instagram logo"></a>
                            <a href="https://www.youtube.com" title="Subscribe to Eureka Cove on YouTube"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube-white.png" alt="YouTube logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main id="main">