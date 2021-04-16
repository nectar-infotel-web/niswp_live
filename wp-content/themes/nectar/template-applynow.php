<?php 
/*** Template Name: Apply now **/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
		$idgen = $_GET['id'];		
		?>
<div class="container-fluid singleposts" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="container empty-height text-center">
		<h1 class="main_heading otfound_head">Nectar Infotel Careers</h1>
		<h2 class="main_heading2"><?php echo get_the_title($idgen); ?></h2>
		<?php 
		$value = get_post_meta( $idgen, 'job_location', true );
		if($value){
		echo '<p class="joblocation">'.$value.'</p>';
		}
		?>
		<?php echo do_shortcode('[bread]');?>
	</div>
</div>			
<div class="container-fluid innerpages">
<div class="row">
	
		<?php the_content(); ?>
		
		<?php endwhile; ?>			
		
	
		<?php endif; ?>
		<div class="container contact_page_forms career">
		<a href="<?php echo get_option('home');?>/careers" class="back"><i class="fa fa-arrow-left"></i> Back To Current Openings</a>		
		<?php 
		echo crunchify_social_sharing_buttons($idgen); ?>

		</div> 
</div> 
</div> 

<?php get_footer(); ?>