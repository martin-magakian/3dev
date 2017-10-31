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



<iframe src="https://snazzymaps.com/embed/24351" width="100%" height="600px" style="border:none;"></iframe>
<div class="container-fluid bandeaujaune"> viens boire un café
</div>

<div class="container">
	<div class="row">
        <div class="col prenom">
			<input type="text" class="form-control noform-control" placeholder="prénom">
		</div>
        <div class="col nom">
			<input type="text" class="form-control noform-control" placeholder="Nom">
        </div>        
    </div>
	<div class="row email">
        <div class="col">
			<input type="email" class="form-control noform-control" placeholder="Email">
		</div>       
    </div>
	<div class="row sujet">
        <div class="col">
			<input type="email" class="form-control noform-control"  placeholder="Sujet">
		</div>       
    </div>
	<div class="row aide">
        <div class="col">
			<textarea class="form-control noform-control" name="message" rows="3" placeholder="En quoi pouvons-nous vous aider ?"></textarea>
		</div>       
    </div>
	<div class="row envoyer">
		<div class="col">
		<button type="submit" class="btn">Envoyer</button>
		</div>
	</div>
</div>
       
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   <!--
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
         
                
                <input type="email" class="form-control" placeholder="Email">
            
                
          
                
           
                <button type="submit" class="btn">Envoyer</button>
				
				
				-->

<?php get_footer();
