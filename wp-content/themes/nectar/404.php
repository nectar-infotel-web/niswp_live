<?php get_header(); ?>
			
<div class="container-fluid notfound">
	<div class="container empty-height text-center">
		<h1 class="main_heading otfound_head"><?php _e("404 - Article Not Found","wpbootstrap"); ?></h1>
	</div>
</div>
<div class="container notfound_box">
		<div class=" text-center">
			<h1><?php _e("Epic 404 - Article Not Found","wpbootstrap"); ?></h1>
			<p><?php _e("We can't find what you were looking for.","wpbootstrap"); ?></p>
			<?php echo get_search_form(); ?>
		</div>
</div>
<?php get_footer(); ?>