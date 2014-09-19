<?php get_header(); ?>



<div class="article">

	<h2 class="home_page_title"><?php the_category(); ?></h2>

	<div class="row">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>	
			<div class="col-md-offset-1 col-md-3">
				<div>
			      	<?php the_post_thumbnail('full', array("class" => "img-responsive roundedbigbig")); ?>
			    </div>
			</div>
			<div class="col-md-3">
				<h1 class="articletitle"><?php the_title(); ?></h1>
				<div class="date"><?php the_date(); ?></div>
			</div>
		
			<div class="col-md-offset-1 col-md-3">
				<ul class="sidebar">
	   			<?php dynamic_sidebar( 'Main Sidebar' ); ?>
				</ul>
			</div>
	</div> <!-- fin row avec photo , titre et date -->

	<div class="row">
		<div class="post-content col-md-10 col-md-offset-1">
		    	<?php the_content(); ?>
		    	<div class="tags">
		      		<?php the_tags( 'Tags : ', ', ', '' );?>
		      	</div>
		    	<div class="post-comments">
		          	<div>
		             <?php comments_template('', true); ?>
		        	</div>      	
				</div>
		    <?php endwhile; ?>
			<?php endif; ?>	
		</div>
	</div> <!-- fin row avec content -->

</div> <!-- fin class article -->

<?php get_footer(); ?>
		