<?php
 require_once('wp_bootstrap_navwalker.php');
 require_once('widget_custom.php');
 require_once('GCal.class.php');
 require_once('utils.php');
 require_once('RainTplConnect.php');

add_action('wp_head','ajaxurl');
function ajaxurl() { ?>
	<script type="text/javascript">
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	</script>
<?php } 
 
function register_widgets(){
	registerWidget("logo","logo","Logo de la pagina web");
}
 
//Add Widgets
function logo() {
        ?> <div class="logo divhtml"> <?php
            if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'logo' ) ){}
        ?> </div> <?php
}

function custom_header(){?>
<div class="custom-header">
    <div>
    	<header class="header">
			<div class="header-container">
			<section class="logo">
				<!--<a href="/">
					<img src="http://fincaycafe.com/wp-content/uploads/2014/12/logo2.png">
				</a>-->
			</section>
			<section class="content-header">
				<!--<nav>
					<label class="hidden">MENU</label>
					<ul class="hidden">
						<li><a href="#">Fincas en Alquiler</a></li>
						<li>-</li>
						<li><a href="#footer">Pre-reservar</a></li>
					</ul>
				</nav>
				<nav class="nav">
					<ul>
						<li><a href="#" id="ll">Fincas en Alquiler</a></li>
						<li>-</li>
						<li><a href="#footer" id="l">Pre-reservar</a></li>
					</ul>
				</nav>-->
			</section>
		</div>
	</header>
		
	</div>
</div>
<?php
}

function pie_de_pagina(){?>
	
<?php
}

function custom_loop(){
	$tpl = new RaintTplConnect("wp-content/themes/zopp/library/plantillas/");
//	$tpl->dibujarPlantilla("easy-net"/*,array("datos"=>$datos,"pie"=>$pie)*/);
	if(get_the_ID()=="21"){
		$tpl->dibujarPlantilla("automatizacion/index"/*,array("datos"=>$datos,"pie"=>$pie)*/);
	}
	else if(get_the_ID()=="1"){
		$tpl->dibujarPlantilla("easy-net"/*,array("datos"=>$datos,"pie"=>$pie)*/);
	}
}

include_once "funcionesjson.php";

remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

//remove the header and nav add Custom header 
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'custom_header' );

//remove the loop and add the custom loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'custom_loop' );

//remove the sidebar?
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

//remove the footer and add the custom footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action('wp_head', 'genesis_load_favicon');
?>