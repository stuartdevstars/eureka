( function( $ ) {
	var $eureka = {};

	$('#story-hero .hero-text').animate({'top': '30px', 'opacity': '1.0'}, 1500);

	$('#promos .promo').eq(0).delay(300).animate({'opacity': '1.0'}, 500);
	$('#promos .promo').eq(1).delay(600).animate({'opacity': '1.0'}, 500);
	$('#promos .promo').eq(2).delay(900).animate({'opacity': '1.0'}, 500);

	$('#nav .has-sub-nav').click(function(e) {
		var $subnav = $(this).data('subnav');
		$('#nav .has-sub-nav').removeClass('active');
		$(this).toggleClass('active');

		if(!$('#nav .sub-nav.' + $subnav).hasClass('active')) {
			$('#nav .sub-nav').removeClass('active');
			$('#nav .sub-nav.' + $subnav).addClass('active');
		} else {
			$('#nav .sub-nav').removeClass('active');
		}
		
		e.preventDefault();
	});

	$('#nav .get-in-touch').click(function(e) {
		$('#get-in-touch').slideDown();
		$('html,body').animate({
          scrollTop: $('#get-in-touch').offset().top
        }, 1000);
	});

	$('#nav .open-nav').click(function(e) {
		$('body').toggleClass('nav-open');

		if($('#nav ul:not(.sub-nav)').is(':visible')) {
			$('#nav .open-nav img').attr('src', base_url + '/img/menu.svg');
		} else {
			$('#nav .open-nav img').attr('src', base_url + '/img/close.svg');
		}
		$('#nav ul:not(.sub-nav)').toggle();
	});

	$(window).load(function() {
		$eureka.storyHero();

		$eureka.equalHeightProductInfo();

		$eureka.equalHeightRecipes();
	});

	$(window).resize(function() {
		$eureka.storyHero();

		$eureka.equalHeightProductInfo();

		$eureka.equalHeightRecipes();
	});

	$('#product-ingredients h4 a, .recipe-detail h3 a').click(function(e) {
		var text = $(this).text();
		$(this).text(text == "+" ? "-" : "+");
		$(this).parents('header').siblings('.content').slideToggle();
		e.preventDefault();
	});

	$eureka.storyHero = function() {
		if(window.matchMedia("(max-width: 767px)").matches) {
			$('#story-hero').height($('#story-hero .hero-text').height() + 60)
		}
	}

	$eureka.equalHeightProductInfo = function() {
		$("#product-info .map, #product-info .strapline, #product-info .sourced, #product-info .flavour, #product-info .description, #product-ingredients").css('height', 'auto');
		var maxHeight2 = Math.max.apply(null, $("#product-info .map, #product-info .strapline").map(function () { return $(this).height(); }).get());
		$("#product-info .map, #product-info .strapline").css('height', maxHeight2 + 'px');

		var maxHeight3 = Math.max.apply(null, $("#product-info .sourced, #product-info .flavour").map(function () { return $(this).height(); }).get());
		$("#product-info .sourced, #product-info .flavour").css('height', maxHeight3 + 'px');

		if(window.matchMedia("(min-width: 768px)").matches) {
			$("#product-info .description, #product-ingredients").css('min-height', maxHeight2 + maxHeight3+ 'px');
		}
	}

	$eureka.equalHeightRecipes = function(){
		if(window.matchMedia("(min-width: 768px)").matches) {
			$('.recipes .row').each(function() {
				var $maxHeight = 0;
				$(this).find('.recipe-box').each(function(){
					$maxHeight = $(this).height();
				});

				$(this).find('.recipe-box').height($maxHeight);
			});
		} else {
			$('.recipes .recipe-box').css('height', 'auto');
		}
	}
} )( jQuery );