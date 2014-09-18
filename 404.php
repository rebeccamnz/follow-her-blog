 <?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
  
 
<div class="error text-center">
	  <div class="row">
	  	<div class="col-md-offset-3 col-md-6">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo_nom.png" class="center"/>
		</div> 
	  </div>

	  <div class="row">
	  	<div class="col-md-offset-3 col-md-6">
	  	<p>Erreur 404, page non trouvée</p>
	  	</div>
	  </div>

	  <div class="row">
	  	<div class="col-md-offset-4 col-md-6">
				<ul class="sidebar">
	   			<?php dynamic_sidebar( 'Main Sidebar' ); ?>
				</ul>
		</div>
	</div>
</div>
 
  
		

<?php get_footer(); ?>