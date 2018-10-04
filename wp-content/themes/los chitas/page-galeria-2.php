<?php get_header(); ?> 
<main>
	<section>
		<hr>
		<h1 class="text-center mb-5">Galería</h1>
		<hr>


		<section>
		<ul class="gallery col-md">
        <?php 
        $arg =  array(
        	'post_type' => 'Galeria',
        	'posts_per_page' => -1
        );

        	$get_arg = new WP_Query ( $arg );

        	while ( $get_arg->have_post()) {
        	$get_arg->the_post();
        
         ?>


		    <li class="gallery-item">
		    	<?php the_post_thumbnail('full', array('class', 'img-fluid')) ?>
		     	<h6><?php the_title() ?></h6>
		    </li>
		  
		
     <?php } wp_reset_postdata(); ?>
     </ul>
	</section>
</div>



	</main>

	<hr>
	

 
<?php  get_footer(); ?>