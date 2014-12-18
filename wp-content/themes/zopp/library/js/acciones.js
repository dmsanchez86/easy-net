var contadorglobal = 0;
var ultimoObjeto = "";

jQuery(document).ready(function(){
	
	jQuery(".acordeon").click(function(){
		
		var actualobj = jQuery(this).text();

		if(actualobj==ultimoObjeto){		
			var link = jQuery(this);
			link.next().slideToggle("slow");		
		}else{
			var elementos = jQuery(".details ul");		
			for(var i = 0; i<elementos.length; i++){
				if( elementos[i].style.display=="block" ){
					jQuery(elementos[i]).slideToggle();
				}
			}
			var link = jQuery(this);
			link.next().slideToggle("slow");				
		}
		
		ultimoObjeto = jQuery(this).text();
	});
	
	jQuery("#l").click(function(e){
		e.preventDefault();
		jQuery("html, body").animate({ scrollTop: jQuery('#footer').offset().top }, 1500);
	});

	jQuery("#ll").click(function(e){
		e.preventDefault();
		jQuery("html, body").animate({ scrollTop: jQuery('.shadow').offset().top }, 1500);
	});

	jQuery(".img .hover").click(function() {
		var padre = jQuery(this).parent().find('.center').find('a').eq(0).click();
	});

	jQuery(".button").click(function(event) {
		var attr = jQuery(this).attr("data");
		jQuery("html, body").animate({ scrollTop: jQuery('#footer').offset().top }, 1500);
		if (attr == "FINCA SIRACUSA") {
			jQuery("#select").val("SIRACUSA");
		}
		else if(attr == "SANTA INES"){
			jQuery("#select").val("INES");
		}
		else if(attr == "SAN MARTIN"){
			jQuery("#select").val("MARTIN");
		}
		
	});
	
});


