( function( $ ) {
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

	$(window).load(function() {
		var maxHeight = Math.max.apply(null, $(".store-info, .brand-graphic").map(function () { return $(this).height(); }).get());
		$(".store-info, .brand-graphic").height(maxHeight);

		var maxHeight2 = Math.max.apply(null, $("#product-info .map, #product-info .strapline").map(function () { return $(this).height(); }).get());
		$("#product-info .map, #product-info .strapline").css('height', maxHeight2 + 'px');

		var maxHeight3 = Math.max.apply(null, $("#product-info .sourced, #product-info .flavour").map(function () { return $(this).height(); }).get());
		$("#product-info .sourced, #product-info .flavour").css('height', maxHeight3 + 'px');

		$("#product-info .description, #product-ingredients").css('min-height', maxHeight2 + maxHeight3+ 'px');
	});

	$('#product-ingredients h4 a, .recipe-detail h3 a').click(function(e) {
		var text = $(this).text();
		$(this).text(text == "+" ? "-" : "+");
		$(this).parents('header').siblings('.content').slideToggle();
		e.preventDefault();
	});
} )( jQuery );