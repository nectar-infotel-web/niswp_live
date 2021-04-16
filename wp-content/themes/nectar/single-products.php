<?php get_header(); ?>
			
<div class="container-fluid innerpages">
<div class="row">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		
		<?php endwhile; ?>			
		
	
		<?php endif; ?>

</div> 
</div> 

<?php get_footer(); ?>