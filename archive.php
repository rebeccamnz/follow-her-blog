<?php get_header(); ?>


  <div class="archivefh">

        <div class="row">
           <?php if (have_posts()) : ?>
	   	<?php query_posts('showposts=2'); ?>
	   	<?php while (have_posts()) : the_post(); ?>
		   	<div class="col-md-5 col-md-offset-1">
			   	<a href="<?php echo get_permalink(); ?>">
			   		<?php the_post_thumbnail('full', array("class" => "img-responsive roundedbig")); ?>
			   	</a>
			    <h3 class="titre_vert text-center"><?php the_title(); ?></h3>
			    <div class="corps_gris text-justify"><?php the_excerpt(); ?></div>
		    </div>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	 	<?php endif; ?>
        </div>


</div>


<?php get_footer(); ?>