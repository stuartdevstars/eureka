( function( $ ) {
	var $eureka = {};
	$eureka.navFromTop = $('#nav').position().top;

	$('#story-hero .hero-text').animate({'top': '40px', 'opacity': '1.0'}, 1500);

	$('#promos .promo').eq(0).delay(300).animate({'opacity': '1.0'}, 500);
	$('#promos .promo').eq(1).delay(600).animate({'opacity': '1.0'}, 500);
	$('#promos .promo').eq(2).delay(900).animate({'opacity': '1.0'}, 500);

	$('#nav .has-sub-nav[data-subnav="our-products"], nav.products').hover(function(e) {
		if(window.matchMedia("(min-width: 768px)").matches) {
			$('nav.products').show();
		}
	}, function(){
		$('nav.products').hide();
	});

	$('#nav .get-in-touch').click(function(e) {
		$('#get-in-touch').slideDown();
		$('html,body').animate({
			scrollTop: $('#get-in-touch').offset().top
        }, 1000);

        e.preventDefault();
	});

	$('#footer .get-in-touch-mobile').click(function(e) {
		$('#get-in-touch').slideToggle(300, function(){
			if($('#get-in-touch').is(':visible')) {
				$('#footer .get-in-touch-mobile img').attr('src', base_url + '/img/close.svg');
			} else {
				$('#footer .get-in-touch-mobile img').attr('src', base_url + '/img/plus.svg');
			}
		});
		$('html,body').animate({
          scrollTop: $('#get-in-touch').offset().top
        }, 1000);

        e.preventDefault();
	});

	$('#nav .open-nav').click(function(e) {
		//$('body').toggleClass('nav-open');

		if($('#nav .navbar').is(':visible')) {
			$('#nav .open-nav img').attr('src', base_url + '/img/menu.svg');
		} else {
			$('#nav .open-nav img').attr('src', base_url + '/img/close.svg');
		}
		$('#nav .navbar').toggleClass('visible');
	});

	$(window).load(function() {
		$eureka.mobileNavHeight();

		$eureka.storyHero();

		$eureka.equalHeightProductInfo();

		$eureka.equalHeightRecipes();

		$eureka.equalWhereToBuy();

		$eureka.animateOurStory();
	});

	$(window).resize(function() {
		$eureka.mobileNavHeight();

		$eureka.storyHero();

		$eureka.equalHeightProductInfo();

		$eureka.equalHeightRecipes();

		$eureka.equalWhereToBuy();
	});

	$('#product-ingredients h4 a, .recipe-detail h3 a').click(function(e) {
		var text = $(this).text();
		$(this).text(text == "+" ? "-" : "+");
		$(this).parents('header').siblings('.content').slideToggle();
		e.preventDefault();
	});

	$eureka.mobileNavHeight = function() {
		if(window.matchMedia("(max-width: 767px)").matches) {
			$('#nav .navbar').css('min-height', ($(window).height() - 56) + 'px');
		} else {
			$('#nav .navbar').css('min-height', '0px');
		}
	}

	$eureka.fixMobileNav = function() {
		var $posFromTop = $(document).scrollTop();

		if($posFromTop >= $eureka.navFromTop) {
			if(!$('body').hasClass('sticky')) {
				$('body').addClass('sticky');
			}
		} else {
			$('body').removeClass('sticky');
		}
	}

	$eureka.storyHero = function() {
		if(window.matchMedia("(max-width: 767px)").matches) {
			$('#story-hero').height($('#story-hero .hero-text').height() + 80)
		}
	}

	$eureka.equalHeightProductInfo = function() {
		var $productDescriptionHeight = $('#product-info .description').outerHeight();

		$("#product-info .map, #product-info .strapline, #product-info .sourced, #product-info .flavour, #product-info .description, #product-ingredients").css('height', 'auto');
		var maxHeight2 = Math.max.apply(null, $("#product-info .map, #product-info .strapline").map(function () { return $(this).outerHeight(); }).get());
		$("#product-info .map, #product-info .strapline").css('height', maxHeight2 + 'px');

		var maxHeight3 = Math.max.apply(null, $("#product-info .sourced, #product-info .flavour").map(function () { return $(this).outerHeight(); }).get());
		$("#product-info .sourced, #product-info .flavour").css('height', maxHeight3 + 'px');

		if(window.matchMedia("(min-width: 768px)").matches) {
			if($productDescriptionHeight < (maxHeight2 + maxHeight3)) {
				$("#product-info .description, #product-ingredients").css('min-height', (maxHeight2 + maxHeight3) + 'px');
			} else {
				$("#product-info .sourced, #product-info .flavour").css('height', ($productDescriptionHeight - maxHeight2) + 'px');
			}
		}
	}

	$eureka.equalHeightRecipes = function() {
		$('.recipes .recipe-box').css('height', 'auto');

		if(window.matchMedia("(min-width: 768px)").matches) {
			$('.recipes .row').each(function() {
				var $maxHeight = 0;
				$(this).find('.recipe-box').each(function(){
					$maxHeight = $(this).outerHeight();
				});

				$(this).find('.recipe-box').outerHeight($maxHeight);
			});
		}
	}

	$eureka.equalWhereToBuy = function() {
		$('#buy-info .brand-graphic, #buy-info .store-info').css('height', 'auto');

		if(window.matchMedia("(min-width: 768px)").matches) {
			var $maxHeight = Math.max($('#buy-info .brand-graphic').outerHeight(), $('#buy-info .store-info').outerHeight());

			$('#buy-info .brand-graphic, #buy-info .store-info').outerHeight($maxHeight);
		}
	}

	$eureka.animateOurStory = function() {

		if(!$('#our-story').length) {
			return false;
		}

		var $posFromTop = $(document).scrollTop();
		var $windowHeight = $(window).height();
		var $windowDisplayLine = ($windowHeight / 100) * 80;

		var $heading = $('#our-story .heading');
		var $introText = $('#our-story .intro-text');
		var $map = $('#our-story .map');
		var $photo = $('#our-story .photo');
		var $fishText = $('#our-story .fish-text');
		var $cows = $('#our-story .cows');
		var $beefText = $('#our-story .beef-text');
		var $mapSmall = $('#our-story .map-small');
		var $fareshare = $('#our-story .fareshare');
		var $trail = $('#our-story .trail');
		var $finalText = $('#our-story .final-text');

		if($heading.offset().top < $posFromTop + $windowDisplayLine) {
			$heading.animate({'opacity': '1.0'}, 500);
		}
		if($introText.offset().top < $posFromTop + $windowDisplayLine) {
			$introText.animate({'opacity': '1.0'}, 500);
		}
		if($map.offset().top < $posFromTop + $windowDisplayLine) {
			$map.animate({'opacity': '1.0'}, 500);
		}
		if($photo.offset().top < $posFromTop + $windowDisplayLine) {
			$photo.animate({'opacity': '1.0'}, 500);
		}
		if($fishText.offset().top < $posFromTop + $windowDisplayLine) {
			$fishText.animate({'opacity': '1.0'}, 500);
		}
		if($cows.offset().top < $posFromTop + $windowDisplayLine) {
			$cows.animate({'opacity': '1.0'}, 500);
		}
		if($beefText.offset().top < $posFromTop + $windowDisplayLine) {
			$beefText.animate({'opacity': '1.0'}, 500);
		}
		if($mapSmall.offset().top < $posFromTop + $windowDisplayLine) {
			$mapSmall.animate({'opacity': '1.0'}, 500);
		}
		if($fareshare.offset().top < $posFromTop + $windowDisplayLine) {
			$fareshare.animate({'opacity': '1.0'}, 500);
		}
		if($trail.offset().top < $posFromTop + $windowDisplayLine) {
			$trail.animate({'opacity': '1.0'}, 500);
		}
		if($finalText.offset().top < $posFromTop + $windowDisplayLine) {
			$finalText.animate({'opacity': '1.0'}, 500);
		}
	}

	$(window).scroll(function() {
		$eureka.animateOurStory();

		$eureka.fixMobileNav();
	});
} )( jQuery );