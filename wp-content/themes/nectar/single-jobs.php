<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
 $image_id = get_post_meta( $post->ID, '_listing_image_id', true );
 $id = get_the_ID();
 $banner_url = wp_get_attachment_image_url($image_id,"full");
?>
<div class="container-fluid singleposts jobdesc">

	<div class="container empty-height text-center">
		<h1 class="main_heading otfound_head">Nectar Infotel Careers</h1>
		<h2 class="main_heading2"><?php the_title(); ?></h2>
		<?php 
		$value = get_post_meta( $post->ID, 'job_location', true );
		if($value){
		echo '<p class="joblocation">'.$value.'</p>';
		}
		?>
		
	</div>
</div>			
<div class="container innerpages singleposts_inner jobslist">
		<h3>Description</h3>
		<?php the_content(); ?>
		<?php endwhile; ?>			
		
		<?php endif; ?>


<a href="<?php echo get_option('home');?>/apply-now?id=<?php echo $id; ?>" class="moreread applynow">Apply Now</a>
<a href="<?php echo get_option('home');?>/careers" class="back"><i class="fa fa-arrow-left"></i> Back To Current Openings</a>

<?php echo crunchify_social_sharing_buttons($post->ID); ?>
</div> 

<?php get_footer(); ?>