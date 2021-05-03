<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
 $image_id = get_post_meta( $post->ID, '_listing_image_id', true );
 $banner_url = wp_get_attachment_image_url($image_id,"full");
?>
<div class="container-fluid singleposts" style="background: url(<?php echo $banner_url; ?>);">
	<div class="opa"></div>
	<div class="container empty-height text-center">
		<h1 class="main_heading otfound_head"><?php echo get_the_title(); ?></h1>
		<?php echo do_shortcode('[bread cpt="case_studies"]');?>
	</div>
</div>			
<div class="container innerpages singleposts_inner">
<div class="row">
	<div class="col-md-12 col-sm-12">
		<?php the_content(); ?>
		
		<?php endwhile; ?>			
		
		<?php endif; ?>
	</div>
	
</div> 
</div> 

<?php get_footer(); ?>