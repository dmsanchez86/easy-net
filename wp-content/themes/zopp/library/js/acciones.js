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
	setInterval(function(){ 
		jQuery(".right.carousel-control").click()
	 }, 8000);
	 
});


