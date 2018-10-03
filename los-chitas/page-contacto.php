
<?php get_header(); ?> 

	<main>

		<hr>
		<h1 class="mt-5 mb-5">Contacto</h1>
		<!--form -->
		<section class="container-fluid form">
			<div class="row">
				<div class="offset-md-1 offset-lg-1"></div>

				<div class="form1 col-12 col-sm-12 col-md-4 col-lg-4 text-left mb-5 mt-5">
					<?php echo do_shortcode ('[contact-form-7 id="138" title="Formulario de contacto 1"]')
					 ?>
				</div>

				<div class="offset-md-1 offset-lg-1"></div>
				<div class="form2 col-12 col-sm-12 col-md-4 col-lg-4 text-right mb-5 mt-5">
					<span class="p mt-5 mb-5">
						<p><b>Entrenador: Mauricio Aravena.</b>
						<br><b>Horarios de Atención: 10:00hrs a 18:00hrs.</b>
						<br><b>Tel: (+56 9) 53966730</b>
						<br><b>Email: Entrenador.maravena@gmail.cl</b></p>
					</span>
				</div>
			</div>
		</section> 
		<!-- fin form -->
		<hr>
		<!-- direcciones -->
		<section class="container-fluid direcciones">
			<h1 class="mb-5">Lugares De Entrenamiento</h1>
			<div class="row direcciones my-lg-5 my-5 mb-5">
				<div class="col-lg-4 col-md-4 footer_grid_left text-center mb-5">
					<h6><i class="fas fa-street-view">Lunes & Jueves:</i></h6>
					<p>Cancha Villa Sta Teresita,<br>Lo Cruzat Con Los Alerces,<br> Quilicura</p>
				</div>
				<div class="col-lg-4 col-md-4 footer_grid_left text-center">
					<h6><i class="fas fa-street-view">Martes:</i></h6>
					<p>Parque O'higgins,<br>Patinodromo,<br> Stgo Centro</p>
				</div>
				<div class="col-lg-4 col-md-4 footer_grid_left text-center">
					<h6><i class="fas fa-street-view">Sábados:</i></h6>
					<p>Cancha Villa la Padrera,<br>Humberto Caro Esquina el Monte,<br> Quilicura</p>
				</div>
			</div> 
		</section>                
		<!-- fin direcciones -->
		<hr>
		<!-- maps -->
		<section>
			<div class="container contacto">
				<h1>Cómo Llegar</h1>
				<div class="row">
					<div class=" col-sm-12 mt-5 mb-5">
						<div class="embed-responsive embed-responsive-21by9 contacto__map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.009994659873!2d-70.72550218519225!3d-33.370805100814415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0d6045bbda7%3A0xe348a1f22fcdcc3a!2sEl+Monte+%26+Humberto+Caro%2C+Quilicura%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1532036821068" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</section>   
			<!-- fin maps -->

		</main>


 
<?php get_footer(); ?>

