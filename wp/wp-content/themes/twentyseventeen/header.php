<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="/wp-content/themes/twentyseventeen/js/jquery.vide.js"></script>
	<link rel="stylesheet" href="/wp-content/themes/twentyseventeen/style.css" >

	
	<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="3800b721-57b2-4531-8068-f3a7e719b664";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>


</head>

<body <?php body_class(); ?>>
<header>
	<nav class="navbar navbar-expand-md">
		<div class="container">
			<a href="/?page=home"><img src="/wp-content/themes/twentyseventeen/image/monkeys.png" height="90" alt="image"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav11" aria-controls="navbarNav11" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
	
			<div class="collapse navbar-collapse" id="navbarNav11">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link txtnav" href="/formation/">Formation<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=""></a>
					</li>
					<li class="nav-item">
						<a class="nav-link txtnav" href="/contact">contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>