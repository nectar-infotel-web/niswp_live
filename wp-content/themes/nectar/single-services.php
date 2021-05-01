<?php get_header(); ?>
			
<div class="container-fluid innerpages">
<div class="row">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		
		<?php endwhile; ?>			
		
	
		<?php endif; ?>

</div> 
</div> 
<!--Case studies starts-->
<section id="case_study" class="case_studies">
    <?php
        $casescat = get_post_meta( $post->ID, 'casestudies_cat', true );
        $casesttitle = get_post_meta( $post->ID, 'casestudies_title', true );
    ?>
    <div class="container">
        <?php if($casesttitle){
       echo '<h3 class="text-center">'.$casesttitle.'</h3>';
        } ?>
        <div class="row">
        <?php
            $args = array(  
                'post_type' => 'case_studies',
                'post_status' => 'publish',
                'posts_per_page' => 2, 
                'tax_query' => array(
                    array(
                    'taxonomy' => 'case_category',
                    'field' => 'name',
                    'terms' => $casescat 
                     )
                  )
            );
            $case_studies = new WP_Query( $args ); 
                
            while ( $case_studies->have_posts() ) : $case_studies->the_post(); 
            if($case_studies->found_posts == 1) {
                $offset='offset-md-3';
            } else {
                $offset='';
            }
        ?>     

            <div class="col-sm-12 col-md-6 <?php echo $offset; ?>">
                <div class="card">
                    <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><p>
                        	 <?php 
                          $excerpt= get_the_excerpt();
                          echo substr($excerpt, 0, 100);
                        ?>
                        </p></div>
                        <a href="<?php echo get_permalink() ?>" class="card-link">View full case study&ensp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        ?>  
        </div>
    </div>
</section>
<!--Case studies ends-->

<?php get_footer(); ?>