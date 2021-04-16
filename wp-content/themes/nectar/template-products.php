<?php 
/* Template Name: Products */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid singleposts" style="background: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container empty-height text-center">
        <h1 class="main_heading otfound_head"><?php the_title(); ?></h1>
        <?php echo do_shortcode('[bread cpt="page"]');?>
    </div>
</div>          
<div class="container innerpages singleposts_inner">
<section id="products" class="services_list prodcut_list">
    <h2>Our Products</h2>
        <div class="row">
        <?php
            $args = array(  
                'post_type' => 'products',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'order' =>'ASC'
            );
            wp_reset_postdata();
            $services_list = new WP_Query( $args ); 
            $i=1;   
            while ( $services_list->have_posts() ) : $services_list->the_post(); 
        ?>     

            <div class='col-sm-12 col-md-6 box count_<?php echo $i; ?>'>
                <div class="service_card">
                    <div class="boximg">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><p><?php the_excerpt(); ?></p></div>
                        <a href="<?php echo get_permalink() ?>" class="read_more">Read More&ensp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        <?php
            $i++; if($i == 5) $i = 1;
            endwhile;
            wp_reset_postdata();
        ?>  
    </div>
</section>
</div>
<?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
<!--Start Inside and newsroom(Blogs)-->

<section id="Insidenewsroom2">
      <div class="container">
           <h2 class="font-weight-dark" id="newsrooms"><?php echo get_theme_mod('insights_newrooms_title_heading') ?></h2>
           <?php
            $args = array(  
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 4, 
            );
            $_posts = new wp_query($args);
          ?>
          <?php if($_posts->have_posts()):?>
            <div class="row mt-5">
                <?php while($_posts->have_posts()) : $_posts->the_post(); 
                ?>
                  <div class="col-md-6 col-sm-12">
                  <div class="row techrow">
                    <div class="tech-image col-md-6 col-sm-12">
                   <div class="row">
                    <?php the_post_thumbnail( 'full' ); ?>
                  </div>
                   </div>
                    <div class="technology col-md-6 col-sm-12">
                        <?php  
                        $category = get_the_category(); 
                        echo '<a class="techno-cat" href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a>'; 
                          ?>
                        <h4 class="techno-para"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <a class="readmore" href="<?php the_permalink(); ?>">Read more <i class="fa fa-arrow-right"></i></a>
                    </div>
                 </div>
                 </div>
                 
                  <!-- End Technology blog  -->
                <?php endwhile;endif; ?>
                </div>
                </div>
            </div>
</section>

<!--End Inside and newsroom-->
</div> 
<?php get_footer(); ?>