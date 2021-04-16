<?php 
 /*** Template Name: blog  
***/
get_header(); ?>
			
<div class="container-fluid innerpages">
<div class="row">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php the_post_thumbnail(); ?>
		<?php endwhile; ?>			
		<?php endif; ?>
</div> 
</div> 
<section id="case_study" class="text-center case_studies mainpage_Case">
	<div class="container-fluid projects removepadding">
	<div class="">
		<div class="button-group filters-button-group isotopbuttongp">
		<button class="button is-checked" data-filter="*">All</button>
			<?php 
			$terms = get_terms( array(
			'taxonomy' => 'category',
			'hide_empty' => false,
		) );
		foreach($terms as $term):
			$term_class = strtolower(str_replace(' ', '', $term->name));
			echo ' <button class="button" data-filter=".'.$term_class.'">'.$term->name.'</button>';
		endforeach;
		?>
		</div>
		<div class="grid">
		<?php $args = array(
			'post_type' =>'post', 
			'post_status' => 'publish',
			'posts_per_page' => -1
	     );
		$q = new WP_Query($args); $i=0;
		if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); 

		$terms = wp_get_object_terms( get_the_ID(), 'category');
		$category_name = $terms[0]->name;
		$category_name = strtolower(str_replace(' ', '', $category_name));
		?>
		<div class="col-sm-12 col-md-4 element-item <?php echo $category_name; ?>" data-category="transition">
                <div class="card">
                    <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><p><?php the_excerpt(); ?></p></div>
                        <a href="<?php echo get_permalink() ?>" class="card-link">View full case study&ensp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
		<?php  $i++; endwhile; endif; ?>
		</div>
	</div>
	</div>
</section>

<?php get_footer(); ?>