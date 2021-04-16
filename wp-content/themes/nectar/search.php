<?php get_header(); ?>
<div class="container-fluid search_header">
	<div class="container empty-height text-center">
		<h1 class="main_heading otfound_head"><?php _e("Search Results for","wpbootstrap"); ?>:</span> <?php echo esc_attr(get_search_query()); ?>
	</h1>
	</div>
</div>			
<div class="container">
	<div id="content" class="clearfix row">
	
		<div id="main" class="col-sm-12 col-lg-12 clearfix posts" role="main">
		

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix article_post'); ?> role="article">
	
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			
				<div class="post_content">
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink();?>" class="readmore">Read More >> </a>
			
				</div> <!-- end article section -->
		
			</article> <!-- end article -->
			
			<?php endwhile; ?>	
			
			<?php page_navi(); ?>
			
			<!-- this area shows up if there are no results -->
			<?php else: ?>
			<article id="post-not-found">
				<header>
					<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
				</header>
				<section class="post_content">
					<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
				</section>
				<footer>
				</footer>
			</article>
			
			<?php endif; ?>
	
		</div> <!-- end #main -->
		
	</div> <!-- end #content -->
</div> <!-- end #content -->

<?php get_footer(); ?>