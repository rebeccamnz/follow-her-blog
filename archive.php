<?php get_header(); ?>


  <div class="archivefh">

        <div class="padpad row">
           <?php if (have_posts()) : ?>
	   	<?php while (have_posts()) : the_post(); ?>
		   	<div class="col-md-3 col-md-offset-1">
			   	<a href="<?php echo get_permalink(); ?>">
			   		<?php the_post_thumbnail('full', array("class" => "img-responsive roundedbig")); ?>
			   	</a>
			    <h3 class="titre_vert text-center"><?php the_title(); ?></h3>
			    <div class="corps_gris text-justify"><?php the_excerpt(); ?></div>
		    </div>
		<?php endwhile; ?>
	 	<?php endif; ?>

	 	 <div class="col-md-offset-1 col-md-3">
				<ul class="sidebar">
	   			<?php dynamic_sidebar( 'Main Sidebar' ); ?>
				</ul>
		</div>


        </div>

       
</div>


<?php get_footer(); ?>