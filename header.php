<?php
include 'modelo/headerFunciones.php';
ob_start("ob_gzhandler");
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Header para las páginas
*/
?>
<!DOCTYPE html>
<html lang="es-419">
<head>
	<!--metas-->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Hagamos de éste día un mosaico de experiencias">
	<meta name="google-site-verification" content="_L6Ok-F3Enhwh2BzXPIQE36q26_5LpvImuEcqLgsBBk">
	<meta name="author" content="Somefriends">
	<meta name="robots" content="index, follow">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

	<title>Paola y Arturo</title>
	<!-- Web Fonts -->
	
	<script>
	  WebFontConfig = {
	    google: { families: [ 'Roboto:100,300,400,500,700,900', 'Ultra' ] }
	  };
	  (function() {
	    var wf = document.createElement('script');
	    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	      '://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
	    wf.type = 'text/javascript';
	    wf.async = 'true';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(wf, s);
	  })(); 
	</script>
	<!--Analytics-->
	<script async="" src="https://www.google-analytics.com/analytics.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">

	
	<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

	<!--[if lte IE 8]>
			<script src="js/respond/respond.js"></script>
			<script src="js/excanvas/excanvas.js"></script>
	<![endif]-->
	

	<!--js SCHEMA-->
	<script type='application/ld+json'> 
	{
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "name": "Somefriends",
	  "url": "http://somefriends.pro/",
	  "logo": "http://somefriends.pro/images/logo/somefriendslogo.png",
	  "description": "Somos un grupo integrado por empresas amigas, especializadas en áreas clave para el desarrollo integral de tu proyecto.",
	  "address": {
	    "@type": "PostalAddress",
	    "addressLocality": "Ciudad de México",
	    "addressRegion": "CDMX",
	    "postalCode": "11800",
	    "addressCountry": "México"
	  },
	  "contactPoint": {
	    "@type": "ContactPoint",
	    "contactType": "customer support",
	    "email": "ventas@somefriends.pro",
	    "url": "http://somefriends.pro/cotiza"
	  }
	}
	</script>
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon//apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon//apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon//apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon//apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon//apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon//apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon//apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon//apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon//android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon//favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
	<link rel="manifest" href="images/favicon//manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon//ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="alternate" href="https://paolayarturo.somefriends.pro" hreflang="es-mx" />

</head>
<body>
	<header class="bannerHeader">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
		        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>

		        <div class="navbar-collapse justify-content-center collapse" id="navbarsExample10" style="">
		          <ul class="navbar-nav">
		            <li class="nav-item active">
		              <a class="nav-link" href="#">Boletos<span class="sr-only">(current)</span></a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link" href="#">Lugar y fecha</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link " href="#">Dress Code</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link " href="#">Mesa de Regalo</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link " href="#">Galería</a>
		            </li>
		            
		          </ul>
		        </div>
	      	</nav>
	      	<div class="contenidoHeader ">
	      		<div class="row justify-content-center">
		      		<figure class="logo"><img src="images/header/logo.png" alt="Paola y Arturo 14 de julio Tequesquitengo" class="img-fluid"></figure>
	      		</div>
	      		<div class="row justify-content-center">
		      		<div class="invitacionContenido">
			      			<p>Invitación</p>
			      			<p>Ceremonia religiosa <br>& banquete</p>
			      	</div>
		      	</div>
	      	</div>
      	</div>
	</header>