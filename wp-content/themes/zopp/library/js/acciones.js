jQuery(document).ready(function(){
	
	jQuery("#owl-example").owlCarousel({
		items:1,
		autoPlay: true,
		autoplayTimeout:100,
		smartSpeed:350
	});
	jQuery("#owl-example1").owlCarousel({
		items:1,
		autoplayTimeout:5000,
		autoPlay: true,
		smartSpeed:550
	});
	jQuery("#owl-example2").owlCarousel({
		items:5,
		autoPlay: true,
		autoplayTimeout:3000,
		smartSpeed:550
	});
	jQuery("#owl-example4").owlCarousel({
		items:1,
		autoPlay: true
	});
	jQuery("#owl-example5").owlCarousel({
		items:1
	});
	jQuery("#owl-example6").owlCarousel({
		items:1
	});
	/*setInterval(function(){ 
		jQuery(".right.carousel-control").click()
	 }, 8000);*/
	 
});


