<?php get_header(); ?>

 <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="col-md-3 col-md-offset-1 index_home">
          <a href="<?php echo get_permalink(); ?>">
            <?php the_post_thumbnail('full', array("class" => "img-responsive roundedbig")); ?>
          </a>
          <h3 class="titre_vert text-center"><?php the_title(); ?></h3>
          <div class="corps_gris text-justify"><?php the_excerpt(); ?></div>
    </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>