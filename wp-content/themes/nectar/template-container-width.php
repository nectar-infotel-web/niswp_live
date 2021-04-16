<?php 
/* Template Name: Normal width */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid singleposts" style="background: url(<?php echo the_post_thumbnail_url(); ?>);">
	<div class="container empty-height text-center">
		<h1 class="main_heading otfound_head"><?php the_title(); ?></h1>
		<?php echo do_shortcode('[bread cpt="page"]');?>
	</div>
</div>			
<div class="container innerpages singleposts_inner">
<div class="row">
	<?php the_content(); ?>
	<?php endwhile; ?>			

	<?php endif; ?>

</div> 
</div> 

<?php get_footer(); ?>