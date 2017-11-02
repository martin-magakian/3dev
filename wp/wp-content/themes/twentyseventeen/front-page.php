<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!--video-->
<div data-vide-bg="mp4: https://www.ironhack.com/assets/videos/ironhack-video-3.mp4, poster: /image/telephone.png" style="height: 600px">
	<h1 class="accroche"><span class="T1"><?php the_field('home_title'); ?></span></h1>
</div>
		
<div class="container-fluid bandeau-noir " style="background-color : black">
</div>

 <!--pourquoi ?--> 
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-12 photog center-vertical hero">
	    <?php $image = get_field('imggrp'); ?>
	    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
		<div class="col-lg-6 col-md-12 center-vertical">
			<div class="row pourquoi_3dev">
				<div class="col-2">
				</div>
				<div class="col-8">
					<h1 class="title"><span class="T1">&#60&#47Pourquoi</span><span class="T2">3</span><span class="T3">DEV</span><span class="T1">&#62 </span> </span></h1>
					<p class="article">
						<?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
						?>
					</p>
				</div>
				<div class="col-2">
				</div>
			</div>
		</div>
	</div>
</div>
	
<!-- bandeau jaune-->
<div class="container-fluid">
	<div class="row bandeau" style="background-color : #f2d500">
		<div class="col-md-3 col-sm-6 bandeaunumber" >
			<?php the_field('nbr1'); ?>
			<div class="bandeaunumber1" >
			ans
			</div>
		</div>
		<div class="col-md-3 col-sm-6 bandeaunumber">
			<?php the_field('nbr2'); ?>
			<div class="bandeaunumber1" >
			élèves par classe
			</div>
		</div>
		<div class="col-md-3 col-sm-6 bandeaunumber">
			<?php the_field('nbr3'); ?>
			<div class="bandeaunumber1" >
			profs
			</div>
		</div>
		<div class="col-md-3 col-sm-6 bandeaunumber">
			<?php the_field('nbr4'); ?>
			<div class="bandeaunumber1" >
			heures par semaine
			</div>
		</div>
	</div>
</div>
	
	
<!-- photo-->
<section class="imagebackground">
		<div class="container">
			<a class="row justify-content-center align-items-center linkform" a href="/formation/" style="text-decoration: none;">
			  <div class="col-lg-6 col-sm-12" style="text-align: center">

				<h2 class="titre-photo"><br><?php the_field('introforma'); ?></br><br>Pédagogie Bootcamp</br><br>Rythme de travail intensif</br><br>Pro liés au monde du travail</br></h2>
				<div class="row">
					<h1 class="plus">+</h1>
			  </div>
			</div>
		</a>
	</div>
	</section>
<!--video-->
<!--<div data-vide-bg="image/ordicafe" style="height: 700px">
	<div class="container-fluid">
		<div class="row flying_video_popup">
			<div class="col-3 greybg">
				<p>Rentré en semptembre</p>
				<p>Pédagogie bootcamps</p>
				<p>Rythme de travail intensif</p>
				<p>Prof connecté avec le monde du travail</p>
			</div>
			<div class="col-3">
				<div class="plus">
					<a id="plus" href="/?page=formation">+</a>
				</div>
			</div>
		</div>
	</div>
</div>-->


<!--slide avis étudiant créer-->

	

<!--<div class="row">
<?php if( have_rows('slides') ): ?>

	<ul class="slides">

	<?php while( have_rows('slides') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$content = get_sub_field('content');
		$link = get_sub_field('link');

		?>

		<li class="slide">

			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

		    <?php echo $content; ?>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

</div>-->



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php 
			$counter = 0;
			while( have_rows('slides') ): the_row();
			?>
				<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $counter; ?>" class="active"></li>
			<?php 
			$counter = $counter+1;
			endwhile; ?>
		</ol>
	<div class="carousel-inner" style="background-color : #f2d500;">
		<?php 
		$counter = 1;
		while( have_rows('slides') ): the_row();
		// vars
		$image = get_sub_field('image');
		$content = get_sub_field('content');
		$link = get_sub_field('link');
		?>
		<div class="carousel-item <?php if($counter==1) echo 'active'; ?>">
			<div class="d-block w-100" alt="First slide" >
				<div class="container">	
					<div class="row">
						<div class="col">
							<img src="<?php echo $image['url'] ?>" class="slider-img" class="img-fluid popo" alt="Responsive image">
						</div>
						<div class="col-sm-12 col-lg-6 texteslide vcenter">
							<div>	
								<?php echo $content ?>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<?php 
		$counter = $counter+1;
		endwhile; ?>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>





<!--slide projet avec photo-->
<h1 class="projet">LES PROJETS</h1>
<div id="carouselExampleIndicators2" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/wp-content/themes/twentyseventeen/image/projet/slydeprojet1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/wp-content/themes/twentyseventeen/image/projet/slydeprojet12.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/wp-content/themes/twentyseventeen/image/projet/slydeprojet13.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon2" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Abonne toi, newsletter-->
<div class="container">
	<div class="row">
		<div class="col-4">
		</div>
		<div class="col-lg-4 col-sm-12" align="center">
			<label for="exampleFormControlInput1" id="spaceab"><h1>Abonne toi ! </h1></label>
	   		<div class="input-group spacebtn">
      			<input type="text" class="form-control" id="resp-control" placeholder="name@example.com" aria-label="Search for...">
      			<span class="input-group-btn">
        			<button class="btn btn-secondary" type="button">Go!</button>
      			</span>
  			</div>

		</div>
	</div>
</div>

	


</div>






<?php get_footer();
