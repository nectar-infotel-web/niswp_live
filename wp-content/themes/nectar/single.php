<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
 $image_id = get_post_meta( $post->ID, '_listing_image_id', true );
 $banner_url = wp_get_attachment_image_url($image_id,"full");
?>
<div class="container-fluid singleposts" style="background: url(<?php echo $banner_url; ?>);">
	<div class="container empty-height text-center">
		<h1 class="main_heading otfound_head"><?php the_title(); ?></h1>
		<?php echo do_shortcode('[bread]');?>
	</div>
</div>			
<div class="container innerpages singleposts_inner">
<div class="row">
	<div class="col-md-8 col-sm-12">
		<?php the_content(); ?>
		
		<?php endwhile; ?>			
		
	<?php comments_template(); ?>

		<?php endif; ?>
	</div>
	<div class="col-md-4 col-sm-12 sidebar_single_page">
		<?php echo get_sidebar(); ?>
	</div>	
</div> 
</div> 

<?php get_footer(); ?>