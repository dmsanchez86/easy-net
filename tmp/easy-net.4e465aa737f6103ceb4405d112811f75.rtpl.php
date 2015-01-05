<?php if(!class_exists('raintpl')){exit;}?><div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
				    <div class="logo">
				    	<a href="/">
				    		<img src="/wp-content/uploads/2014/12/easynet_web-01_r1_c1.png"/>
				    	</a>
				    </div>
				</div>
				<div class="col-md-4 column">
				    <div class="redes">
				    	<div>
				    		<a href="htpps://facebook.com/easynet">
				    		<img class="icon" src="/wp-content/uploads/2014/12/easynet_web-01_r4_c7.png"/>
				    		</a>
				    	</div>
				    	<div>
				    		<a href="https://twitter.com/easynet">
				    		<img class="icon" src="/wp-content/uploads/2014/12/easynet_web-01_r4_c5.png"/>
				    		</a>
				    		</div>
				    	<span><a href="/es">ESP</a> / <a href="/en">ENG</a></span>
				    </div>
				    
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column center">
				    <div class="navigator">
					    <a href="/" class="active">Inicio</a>
					    <a href="/que-somos/">Quien&eacute;s Somos</a>
					    <a href="/contacto/">Contacto</a>
				    </div>
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="all">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="carousel slide all" id="carousel-915666">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-915666">
					</li>
					<li data-slide-to="1" data-target="#carousel-915666">
					</li>
					<li data-slide-to="2" data-target="#carousel-915666">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img class="image" src="/wp-content/uploads/2014/12/caballo-1.png" />
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<?php $counter1=-1; if( isset($slider) && is_array($slider) && sizeof($slider) ) foreach( $slider as $key1 => $value1 ){ $counter1++; ?>

					<div class="item">
						<img alt="" class="image" src='<?php echo $value1["urlimg"][0];?>' />
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<?php } ?>

				</div> <a class="left carousel-control" href="#carousel-915666" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-915666" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
</div>
</div>
<div class="container">
	<div class="theader">
		<div class="row clearfix">
		<div class="col-md-4 column">
			<img class="img" src="/wp-content/uploads/2014/12/easynet_web-01_r10_c3.png"/>
		</div>
		<div class="col-md-4 column">
		    <h1 class="title">Tenemos para Ofrecerte </h1>
		</div>
		<div class="col-md-4 column">
			<img class="img" src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/easynet_web-01_r12_c4.png"/>
		</div>
	</div>
	</div>
	<div class="theader">
		<div class="row clearfix">
		<div class="col-md-3 column">
		</div>
		<div class="col-md-6 column">
			<div class="center">
				<?php echo $fb;?>

			</div>
		</div>
		<div class="col-md-3 column">
		</div>
	</div>	
	</div>
	<script type="text/javascript" src="http://owlgraphic.com/owlcarousel/assets/js/jquery-1.9.1.min.js"></script>
	<div class="theader">
		<div id="owl-example" class="owl-carousel owl-theme">
		<!-- Divs para el owl carousel -->
		<?php $counter1=-1; if( isset($categorias) && is_array($categorias) && sizeof($categorias) ) foreach( $categorias as $key1 => $value1 ){ $counter1++; ?>

		<div>
			<?php $counter2=-1; if( isset($value1) && is_array($value1) && sizeof($value1) ) foreach( $value1 as $key2 => $value2 ){ $counter2++; ?>

			<div class="col-md-4 column itemll">
				<div class="row clearfix all">
					<div class="col-md-12 column">
						<div class="row clearfix">
							<div class="col-md-4 column">
								<div class="icon-menu">
									<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/easynet_web-01_r3_c9.png"></img>
								</div>
							</div>
							<div class="col-md-8 column">
								<div>
									<span class="title"><?php echo $value2->name;?></span>
								</div>
								<div>
									<p class="paragraph"><?php echo $value2->category_description;?></p>
								</div>
								<div>
									<a class="link" href="category/<?php echo $value2->slug;?>/">VER MAS</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
		<?php } ?>

	</div>
	</div>
</div>
<article class="all">
	<div class="container">
		<div class="theader">
		<div class="row clearfix">
		<div class="col-md-4 column">
			<img class="img" src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/easynet_web-01_r10_c3.png"/>
		</div>
		<div class="col-md-4 column">
			<h1 class="title"> Casos de &Eacute;xito</h1>
		</div>
		<div class="col-md-4 column">
			<img class="img" src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/easynet_web-01_r12_c4.png"/>
		</div>
		</div>
		</div>
		<div class="theader">
		<div class="row clearfix">
		<div class="col-md-12 column">
		    
		    <div class="row clearfix">
		    	<div class="col-md-1 column">
		    		
		    	</div>
		    	<div class="col-md-10 column">
	    			<div id="owl-example1" class="owl-carousel owl-theme">
	    				<?php $counter1=-1; if( isset($casos) && is_array($casos) && sizeof($casos) ) foreach( $casos as $key1 => $value1 ){ $counter1++; ?>

	    				<div>
	    					<div class="row clearfix">
	    						<div class="col-md-12 column">
	    							<div class="row clearfix">
									<div class="col-md-4 column">
		    							<div>
		    								<img class="picture" src='<?php echo $value1["urlimg"][0];?>'/>
		    								</div>
			    					</div>
					    			<div class="col-md-8 column">
					    				<div class="paragraph"> <?php echo $value1["contenidocomleto"];?></div>
					    				<div style="text-align:right">
					    					<p class="title-footer">Lorem Ipsum</p>
					    				</div>
					    			</div>
					    			</div>
	    						</div>
	    					</div>
    					</div>
    					<?php } ?>

	    			</div>
		    	</div>
		    	<div class="col-md-1 column">
		    		
		    	</div>
		    </div>
		</div>
		</div>
		</div>
		
	</div>
</article>
<section class="all">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="container">
				<div class="col-md-6 column">
					<div class="services">
						<?php echo $fc;?>

					</div>
					
				</div>
				<div class="col-md-1 column"></div>
				<div class="col-md-5 column">
					<div class="novedades">
						<div>
							<h1 class="title">Novedades</h1>
						</div>
						<div>
							<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
							sed diam nonummy nibh euismod tincidunt ut laoreet dolore
							magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
							quis nostrud exerci tation ullamcorper suscipit lobortis nisl
							ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam,
							quis nostrud exerci tation ullamcorper suscipit lobortis nisl
							ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam,
							quis nostrud exerci tation ullamcorper suscipit lobortis nisl
							ut aliquip ex ea commodo consequat.
							</p>
							<p>VER M&Aacute;S</p>
						</div>
						<div>
							<a class="link" href="#">>>VER TODAS</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="theader">
		<div class="row clearfix">
		<div class="col-md-4 column">
			<img class="img" src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/easynet_web-01_r10_c3.png"/>
		</div>
		<div class="col-md-4 column">
			<h1 class="title">Somos Partners</h1>
		</div>
		<div class="col-md-4 column">
			<img class="img" src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/easynet_web-01_r12_c4.png"/>
		</div>
	</div>
	</div>
	<div class="theader">
		<div class="row clearfix">
			<div class="col-md-1 column">
			</div>
			<div class="col-md-10 column">
				<div id="owl-example2" class="owl-carousel owl-theme">
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/atat.jpg"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/cisco.png"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/microsoft.jpeg"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/eq1uinix.jpg"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/broadsoft-logo.png"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/atat.jpg"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/cisco.png"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/microsoft.jpeg"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/eq1uinix.jpg"/>
					</div>
					<div class="carrusel">
						<img src="https://ease-net-dmsanchez86.c9.io/wp-content/uploads/2014/12/broadsoft-logo.png"/>
					</div>
				</div>	
			</div>
			<div class="col-md-1 column">
			</div>
		</div>
	</div>
</div>
<aside class="all">
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-4 column">
				
			</div>
			<div class="col-md-4 column">
				<div class="text-footer"><span>copyright 2014 - EasyNet</span></div>
			</div>
			<div class="col-md-4 column">
				
			</div>
		</div>
	</div>
</aside>
