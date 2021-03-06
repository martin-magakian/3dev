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

		<div class="myBackgroundImage">
		</div>
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
			  <div class="col-6 " style="text-align: center">
			  </div>
			</div>
		</div>
	
	<!--bandeau-->
	
	<div class="container-fluid bandeauyellow">
		<div class="row">
			<div class="col"
				<h1>Nos Atouts chez 3dev</h1>
			</div>
		</div>
	</div>

	<!--content-->
		<div class="container-fluid blackbg containerformation">
			<div class="row">
			</div>
            <div class="row">
                <div class="col-lg-6 spaceline">
					<div class="row">
						<div class="col-lg-4">
							<img src="/wp-content/themes/twentyseventeen/image/engrenage.svg" class="engrenage"></img>
						</div>
						
						
						<div class="col-lg-8 vcenter">
							<div class="forma"><span>Séléctionner sur tes connaisances</span><span><br>et pas sur tes diplômes </br></span></div>
						</div>
					</div>   
                </div>
                <div class="col-lg-6 spaceline">
					<div class="row">
						<div class="col-lg-4">
							<img src="/wp-content/themes/twentyseventeen/image/bonhomme.svg" class="engrenage"></img>
						</div>
						
						
						<div class="col-lg-8 vcenter" >
							<div class="forma"><span>Pas de limite d’age</span></div>
						</div>
					</div>   
                </div>
            </div>
			<div class="row">
                <div class="col-lg-6 spaceline">
					<div class="row">
						<div class="col-lg-4">
							<img src="/wp-content/themes/twentyseventeen/image/engrenage.svg" class="engrenage"></img>
						</div>
						
						
						<div class="col-lg-8 vcenter">
							<div class="forma"><span>En 3 ans devenir meilleur développeur qu’un bac+5</span></div>
						</div>
					</div>   
                </div>
                <div class="col-lg-6 spaceline">
					<div class="row">
						<div class="col-lg-4">
							<img src="/wp-content/themes/twentyseventeen/image/like.svg" class="engrenage"></img>
						</div>
						
						
						<div class="col-lg-8 vcenter">
							<div class="forma"><span>Après 3 ans: super job et super salaire</span></div>
						</div>
					</div>   
                </div>
            </div>
			<div class="row">
                <div class="col-lg-6 spaceline">
					<div class="row">
						<div class="col-lg-4">
							<img src="/wp-content/themes/twentyseventeen/image/haltere.svg" class="engrenage"></img>
						</div>
						
						
						<div class="col-lg-8 vcenter">
							<div class="forma"><span>Rythme intensif, vrai projet en multi-techno, pas de matières inutile !</br></span></div>
						</div>
					</div>   
                </div>
                <div class="col-lg-6 spaceline">
					<div class="row">
						<div class="col-lg-4">
							<img src="/wp-content/themes/twentyseventeen/image/connect.svg" class="engrenage"></img>
						</div>
						
						
						<div class="col-lg-8 vcenter">
							<div class="forma"><span>Prof à mi-temps en entreprise et connecté avec le monde du travail</span></div>
						</div>
					</div>   
                </div>
            </div>
            <!--/.row--> 
        </div>

	<div class="container">
			<div class="row"  style="background-color: white">
				<div class="col monStyle" style="background-color: black">
					<H3>LA RENTRER</h3>
					<p>Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta ssecte
					   invellaccus. Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta 
					   ssecte esequae esequae que vitatus sequam laborrorrum et ullibus abo.</p>
				</div>
				<div class="col monStyle" style="background-color: black">
					<H3>NOS PROF' CONNECTER</h3>
					<p>Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta ssecte
					   invellaccus. Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta 
					   ssecte esequae esequae que vitatus sequam laborrorrum et ullibus abo.</p>
				</div> 
			</div>
		</div>
		
		<div class="container">
			<div class="row"  style="background-color: white">
				<div class="col monStyle" style="background-color: black">
					<H3>PEDAGODIE BOOTCAMPUS</h3>
					<p>Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta ssecte
					   invellaccus. Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta 
					   ssecte esequae esequae que vitatus sequam laborrorrum et ullibus abo.</p>
				</div>
				<div class="col monStyle" style="background-color: black">
					<h3>LE RYTHME DE TRAVAIL</h3>
					<p>Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta ssecte
					   invellaccus. Emoluptaqui di tet ut re non et repernatus, imet ullaceaqui conse volupta 
					   ssecte esequae esequae que vitatus sequam laborrorrum et ullibus abo.</p>
				</div> 
			</div>
		</div>
		
<!--Bandeau tarif-->
	<div class="container-fluid">
		<div class="row bandeauform" style="background-color : #f2d500">
			<div class="col-md-12 col-sm-12 bandeaunumberform" >
					9500€/ans
				<div class="bandeaunumber1form" >
					Sur 3 années
				</div>
			</div>
		</div>
	</div>

<?php get_footer();
