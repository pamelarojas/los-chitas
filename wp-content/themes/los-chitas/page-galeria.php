<?php get_header(); ?> 
<main>
	<section>
		<hr>
		<h1 class="text-center mb-5">Galería</h1>
		<hr>


		<section>

        <?php 
        $arg =  array(
        	'post_type' => 'Galeria',
        	'posts_per_page' => 1
        );

        	$get_arg = new WP_Query ( $arg );

        	while ( $get_arg->have_post()) {
        	$get_arg->the_post();
        	}
         ?>


		<ul class="gallery">
		    <li class="gallery-item">
		    	<?php the_post_thumbnail('full', array('class', 'img-fluid')) ?>
		     	<h6><?php the_title() ?></h6>
		    </li>
		    <li class="gallery-item">
			    <?php the_post_thumbnail('full', array('class', 'img-fluid')) ?>
		     	<h6><?php the_title() ?></h6>
			</li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria3.jpg" alt="">
		  	</li>
		 	<li class="gallery-item">
		    	<img class="image" src="assets/img/galeria4.jpg" alt="">
		 	</li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria5.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria6.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria7.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria8.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria9.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria10.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria11.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria12.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria13.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria14.jpg" alt="">
		    </li>
		    <li class="gallery-item">
		    	<img class="image" src="assets/img/galeria15.jpg" alt="">
		    </li>
		</ul>
		<div class="modal-closed">
	  		<div class="slider">
	    		<img src="" alt="">
	    	<!-- next-photo & prev-photo buttons -->
	  		</div>
	  	<button type="button" class="exit-button"> X </button>
		</div>

     <?php wp_reset_postdata(); ?>

	</section>



	</main>

	<hr>
	

 
<?php get_footer(); ?>