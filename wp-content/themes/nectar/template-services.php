<?php 
/* Template Name: Services */
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
		
<section id="services" class="services_list">
	<h2>Our Services</h2>
        <div class="row">
        <?php
            $args = array(  
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'order' =>'ASC'
            );
            $services_list = new WP_Query( $args ); 
                
            while ( $services_list->have_posts() ) : $services_list->the_post(); 
        ?>     

            <div class="col-sm-12 col-md-4">
                <div class="service_card">
                    <?php echo the_post_thumbnail(); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><p><?php the_excerpt(); ?></p></div>
                        <a href="<?php echo get_permalink() ?>" class="read_more">Read More&ensp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        ?>  
    </div>
</section>
	<?php endif; ?>

</div> 
</div> 

<?php get_footer(); ?>