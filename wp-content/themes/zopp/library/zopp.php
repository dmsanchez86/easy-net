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
	
	$form_contacto = do_shortcode('[contact-form-7 id="26" title="formulario-servicios"]');
	$form_busqueda = do_shortcode('[contact-form-7 id="28" title="Formulario de Busqueda"]');
	
 	$casos = select_post_cat_slug("casos-de-exito",3,"");
	//var_dump($casos);

	if(is_category()){
		  $category = get_category( get_query_var( 'cat' ) );
		  $categoria_descripcion = $category->cat_ID;
		  $descripcion_cat = get_field('descripcion', "category" . '_' . $categoria_descripcion);
		  $imagen_cat = get_field('imagen', "category" . '_' . $categoria_descripcion);
		  $beneficios = select_post_cat_slug($category->slug,-1,"");
		  $tmp = array_chunk($beneficios, 6);
		  
		 
		  
		  $tpl->dibujarPlantilla("category/index",array("fc"=>$form_contacto,"fb" => $form_busqueda,"ben"=>$tmp,"name"=>$category->cat_name,"description"=>$descripcion_cat/*,"image"=>$imagen_cat*/));
	}
	else{
		if(get_the_ID()=="237"){
			$categories = get_categories('child_of=3');
			$slider = select_post_cat_slug("carrusel",3,"");
			$tmp = array_chunk($categories, 6);
			$tpl->dibujarPlantilla("easy-net",array("fc"=>$form_contacto,"fb" => $form_busqueda,"categorias"=>$tmp,"slider"=>$slider,"casos"=>$casos));
		}else if(get_the_ID()=="29"){
			$tpl->dibujarPlantilla("qSomos",array("fc"=>$form_contacto/*,"fb" => $form_busqueda*/));
		}else if(get_the_ID()=="31"){
			$tpl->dibujarPlantilla("contacto"/*,array("fc"=>$form_contacto,"fb" => $form_busqueda)*/);
		}else if(get_the_ID()=="89"){
			$tpl->dibujarPlantilla("sig/index"/*,array("fc"=>$form_contacto,"fb" => $form_busqueda)*/);
		}
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