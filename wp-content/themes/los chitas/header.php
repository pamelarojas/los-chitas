<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo ('Los Chitas'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- <link rel="icon" type="img/jpg" href="<#?php echo get_theme_file_uri() ?>/assets/img/chitas.jpg">

	<link href="https://fonts.googleapis.com/css?family=Alice|Crimson+Text|Playball" rel="stylesheet">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">-->

    <?php wp_head() ?>
</head>

<body>

	<header class="header-chitas">	
	<!-- Nav -->
    <div class="row-navbar">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand" href="#index.html">
            <img src="<?php echo get_theme_file_uri() ?>/assets/img/chitas.jpg" class="img-fluid" alt="Imagen patines"style="border-radius: 50%">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #ffa700;">
            <span class="navbar-toggler-icon" style="color: #ffa700;"></span>
          </button>
<!-- 
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" >
            <ul class="nav">
             <li class="nav-item">
                <a class="nav-link" href="#index">Inicio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="noticias.html">Noticias</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="horarios.html">Horarios</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="galeria.html">Galería</a>
              </li>


               <li class="nav-item">
                <a class="nav-link" href="index.html#videos">Video</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>  
            </ul>
          </div>
        </nav>-->

        <?php if (has_nav_menu ( 'header-menu' )) { ?> 
          <?php wp_nav_menu ( array (
            ' theme_location '   =>  'header-menu' ,
            ' container_id '     =>  'navbarSupportedContent ' ,
            ' container_class '    =>  'collapse navbar-collapse justify-content-end' ,
            ' items_wrap '       =>  '<ul class="nav">%3$s</ul>'
          )
        ); ?>
          <?php } ?>


      </div>
    </div>
	<!-- / fin Nav -->
</header>