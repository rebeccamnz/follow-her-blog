<?php get_header(); ?>


<div class="container-fluid">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?> 
<?php endwhile; ?>
<?php endif; ?>

</div>  <!--fin balise "backback"-->

<?php get_footer(); ?>
