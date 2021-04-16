<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<!--Home page slider starts-->
<section id="homepageslider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
		<div class="carousel-inner" role="listbox">
			<?php
			$args = array(  
				'post_type' => 'slider',
				'post_status' => 'publish',
				'posts_per_page' => 5, 
				'tax_query' => array(
					array(
						'taxonomy' => 'slider_category',
						'field' => 'name',
						'terms' => 'home' 
					)
				)
			);
			$loop = new WP_Query( $args ); 
			$i=0;

			while ( $loop->have_posts() ) : $loop->the_post(); 
				$active ="";
				if($i == 0){
					$active = "active";
				}
				?>
				<div class='carousel-item homeslider <?php echo $active; ?>' style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
					<div class="container">
						<div class="row">
							<div class="slider_container col-md-6">
								<div class="row">
									<div class="slide-right">
										<?php the_content();?>
										<?php the_excerpt(); ?>
										<div class="buttons">
											<?php if(get_theme_mod('getintouch')){ ?>
												<a href="<?php echo get_theme_mod('getintouch'); ?>" class="getintouch"><?php echo get_theme_mod('getintouch_text'); ?></a>
											<?php } ?>
											<?php if(get_theme_mod('play_video')){ ?>
												<a href="<?php echo get_theme_mod('play_video'); ?>" class="playvideo">
													<span class="play_bg"><i class="fa fa-play"></i></span>
													<p><?php echo get_theme_mod('play_video_text'); ?></p>
												</a>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6"></div>
						</div>
					</div>
				</div>
				<?php
				$i++;
			endwhile; 
			wp_reset_postdata(); 
			$i--;
			?>
			<ol class="carousel-indicators">
				<?php if($i > 0){ $j =0;
					while($i >=0){
						if($i == 0) { $activeclass="active"; } else  $activeclass ='';
						echo '<li data-target="#carouselExampleIndicators" class="'.$activeclass.'" data-slide-to="'.$j.'" ></li>';
						$i--; $j++;
					}
				}
				?>
			</ol>
		</div>
	</div> 
</section>
<!--Home page slider ends-->
<!--Logo slider starts-->
<section id ="logosliders">
	<div class="container">
		<div class="row">
			<div id="Carousel2" class="bxslider">
					<?php
					$args = array(  
						'post_type' => 'logoslider',
						'post_status' => 'publish',
						'posts_per_page' => -1, 
						'tax_query' => array(
							array(
								'taxonomy' => 'logoslider_category',
								'field' => 'name',
								'terms' => 'home',
							)
						),
						'order' => 'ASC',
					);

					$loop = new WP_Query( $args ); 
					while ( $loop->have_posts() ) : $loop->the_post(); 
						?>
						<div class="logo_outer firstone">
							<?php /*
							$logo_link = get_post_meta( $post->ID, '_logoslider_meta_key', true );
							if ($logo_link) : ?>
								<a href="<?php echo $logo_link; ?>" target="_blank">
								<?php endif; */ ?> 
								<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								<?php /*if ($logo_link) : ?>
								</a>
							<?php endif;*/ ?>
						</div>
						<?php
					endwhile; 
					wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>
</section>		
<!--Logo slider ends-->
<!-- Start How to work section-->
<section id="howwework">
	<div class="container-fluid">
		<!--we work section -->
		<div class="row align-items-center my-5">
			<div class="col-lg-7">
				<div class="row fullwidth">
					<?php if(get_theme_mod('how_we_work_settings')){ ?>
						<img class="img-fluid rounded mb-4 mb-lg-0" src=" <?php echo get_theme_mod('how_we_work_settings'); ?>" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-5 rightsidepadding">
				<?php if(get_theme_mod('how_we_work_heading')){ ?>
					<h2 class="font-weight-dark" id="howtowork">
						<?php echo get_theme_mod('how_we_work_heading'); ?>
					</h2>
				<?php } ?>
				<?php if(get_theme_mod('how_we_work_content')){ ?>
					<p><?php echo wpautop(get_theme_mod('how_we_work_content')) ?></p>
				<?php } ?>
				<?php if(get_theme_mod('how_we_work_link')){ ?>
					<a class="btn btn-primary moreread" id="knowmore2" href="<?php echo get_theme_mod('how_we_work_link'); ?>">
						<?php if(get_theme_mod('how_we_work_link_text')){ 
							echo get_theme_mod('how_we_work_link_text');
						}else echo "KNOW MORE";
						?>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<div id="ourpartnership" class="container-fluid">
		<!--our partnership section -->
		<div class="row align-items-center my-5">
			<div class="col-lg-7  partner_section rightsidepadding">
				<?php if(get_theme_mod('partnership_head')){ ?>
					<h2 class="font-weight-dark" id="ourpartnership">
						<?php echo get_theme_mod('partnership_head'); ?>
					</h2>
				<?php } ?>
				<div class="row partner_logos">
					<?php
					$args = array(  
						'post_type' => 'partners',
						'post_status' => 'publish',
						'posts_per_page' => 3, 
						'order' =>"ASC"
					);
					$loop = new WP_Query( $args ); 
					while ( $loop->have_posts() ) : $loop->the_post(); 
						?>
						<div class="col-md-4 col-sm-4 col-xs-12 partnerlogo_outer">
							<div class="partnerlogo_outer_img_out">
								<?php 
								$logo_link = get_post_meta( $post->ID, '_logoslider_meta_key', true );
								if ($logo_link) : ?>
									<a href="<?php echo $logo_link; ?>" target="_blank">
									<?php endif; ?>
									<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<?php if ($logo_link) : ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
						<?php 
					endwhile; 
					wp_reset_postdata(); 
					?>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="row fullwidth">
					<?php if(get_theme_mod('partnership_img')){ ?>
						<img class="img-fluid" src="<?php echo get_theme_mod('partnership_img');?>" alt="">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div id="indweserved" class="container-fluid">
		<!--industries we served section -->
		<div class="row align-items-center industries_row">
			<?php if(get_theme_mod('indus_we_serve_img')){ ?>
				<div class="col-lg-6 spec_Col_indus" id="industrycol" style="background:url(<?php echo get_theme_mod('indus_we_serve_img'); ?>);">
				<?php }else {
					echo '<div class="col-lg-6" id="industrycol">';
				} ?>
				<?php if(get_theme_mod('indus_we_serve_heading')){ ?>
					<h2 class="font-weight-dark" id="industries">
						<?php echo get_theme_mod('indus_we_serve_heading'); ?>
					</h2>
				<?php } ?>

				<div class="industries_logos">
					<?php
					$args = array(  
						'post_type' => 'industries',
						'post_status' => 'publish',
						'posts_per_page' => -1, 
						'order' =>"DESC"
					);
					$loop = new WP_Query( $args ); 
					while ( $loop->have_posts() ) : $loop->the_post(); 
						?>
						<p class="industries_logos_outer">
                   	<?php /*
                    $icon_name = get_post_meta( $post->ID, 'icon_name', true );
                    if ($icon_name) : ?>
                    	<i class="<?php echo $icon_name; ?>"></i>
                    <?php endif; 
                    */
                    the_post_thumbnail();
                    ?>
                    <span><?php the_title(); ?></span>
                </p>
                <?php 
            endwhile; 
            wp_reset_postdata(); 
            ?>
        </div>
    </div>
    <div class="col-lg-6 rightsidepadding spec_Col_indus" id="industry_para">
    	<?php if(get_theme_mod('indus_we_serve_content')){ ?>
    		<p><?php echo wpautop(get_theme_mod('indus_we_serve_content')); ?></p>
    	<?php } ?>
    	<?php if(get_theme_mod('indus_we_serve_link')){ ?>
    		<a class="btn btn-primary moreread" href="<?php echo get_theme_mod('indus_we_serve_link'); ?>">
    			<?php if(get_theme_mod('indus_we_serve_link_text')){ 
    				echo get_theme_mod('indus_we_serve_link_text');
    			}else echo "DISCOVER MORE";
    			?>
    		</a>
    	<?php } ?>
    </div>
</div>
</div>
</div>
</div>
</section>
<!--End Industries We Serve section -->

<!--product slider starts-->
<section id="productslider">
	<div class="containerspec productslider_in">
		<h3><?php echo get_theme_mod('our_product_main_title_heading') ?></h3>
			<div id="Carousel" class="bxslider2"> 
				<!-- Carousel items -->
					<?php
					$args = array(  
						'post_type' => 'products',
						'post_status' => 'publish',
						'posts_per_page' => -1, 
						'order' => 'ASC'
					);
					$loop = new WP_Query( $args ); 
					while ( $loop->have_posts() ) : $loop->the_post(); 
						?>
						<div class="sliderouter">
								<?php 
								$logo_link = get_post_meta( $post->ID, '_logoslider_meta_key', true );
								?>
								<a href="<?php echo get_the_permalink(); ?>" >
									<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
								</a>
						</div>
						<?php 
					endwhile; 
					wp_reset_postdata(); 
					?>
				</div>
			</div>
</section>
	<!-- product slider end here -->

	<!--Certificates starts-->
	<?php /* <section id="certificates" class="certificates">
		<div class="container">
			<h3 class="text-center"><?php echo get_theme_mod('certificates_title_heading') ?></h3>
			<div class="row">
				<?php
				$args = array(  
					'post_type' => 'certificates',
					'post_status' => 'publish',
					'posts_per_page' => 2, 
				);
				$certificates = new WP_Query( $args ); 

				echo '<div class="col-sm-12 col-md-3"></div>';

				while ( $certificates->have_posts() ) : $certificates->the_post(); 
					?>     

					<div class="col-sm-12 col-md-3">

						<img class="certificates_img" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

					</div>

					<?php
				endwhile;
				echo '<div class="col-sm-12 col-md-3"></div>';
				wp_reset_postdata();
				?>  

			</div>
		</div>
	</section>
	<!--Certificates ends-->

technologies 
<section id="technolgoies" class="certificates">
	<div class="container">
		<h3 class="text-center"><?php echo get_theme_mod('technologies_title_heading') ?></h3>
		<div class="row techtitles_group">
			<?php
			$args = array(  
				'post_type' => 'technologies',
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'order' => 'ASC'
			);
			$techs = new WP_Query( $args ); 

			while ( $techs->have_posts() ) : $techs->the_post(); 
				?>     
				<div class="col-md-3 col-sm-12 col-xs-12 technology_title">
					<h6><?php the_post_thumbnail('small'); ?><span><?php the_title(); ?></span></h6>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>  
		</div>
	</div>
</section> */ ?>

<!--Technology slider-->
<section id ="technolgoies" class="certificates">
	<div class="container">
		<h3 class="text-center"><?php echo get_theme_mod('technologies_title_heading') ?></h3>
		<div class="row techtitles_group">
			<div class="bxslider">
				<!-- Carousel items -->
					<?php
					$args = array(  
						'post_type' => 'technologies',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'order' => 'ASC',
					);

					$loop = new WP_Query( $args ); 
					while ( $loop->have_posts() ) : $loop->the_post(); 
						?>
						<div class="logo_outer technology_title">
								<?php the_post_thumbnail(); ?><span><?php the_title(); ?></span>
						</div>
						<?php 
					endwhile; 
					wp_reset_postdata(); 
					?>
					
				</div>
			</div>
		</div>
</section>		

<?php /* <!--solutions 
<section id="solutions" class="solutions">
	<div class="container-fluid">
		<div class="row techtitles_group">
			<div class="col-md-6 col-sm-12 solution_img">
				<div class="row">
				<img src="<?php echo get_theme_mod('solution_section_bg') ?>" alt="solution bg" />
				</div>
			</div>
			<div class="col-md-6 col-sm-12 solution_desc">
			<div class="row solution_desc_row">
				<h3 ><?php echo get_theme_mod('solution_heading') ?></h3>
			<?php
			$args = array(  
				'post_type' => 'solutions',
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'order' => 'ASC'
			);
			$techs = new WP_Query( $args ); 

			while ( $techs->have_posts() ) : $techs->the_post(); 
				?>     
				<div class="solutions_title">
					<span class="solution_thumb">
					<?php the_post_thumbnail(); ?> 
					</span>
					<span><?php the_title(); ?></span>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
			</div>  
			</div>  
		</div>
	</div>
</section> */ ?>
<!--solutions start-->
<section id="solutions" class="solutions">
	<div class="container">
		<h3 class="text-center"><?php echo get_theme_mod('solution_heading') ?></h3>
		<div class="row techtitles_group">

			<?php
			$args = array(  
				'post_type' => 'solutions',
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'order' => 'ASC'
			);
			$techs = new WP_Query( $args ); 

			while ( $techs->have_posts() ) : $techs->the_post(); 
				?>     
				<div class="col-md-3 col-sm-12 col-xs-12 ">
					<div class="technology_title solu">
						<?php the_post_thumbnail(); ?>
						<p><?php the_title(); ?></p>
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?> 
		</div>
	</div>
</section>
<!--solutions end-->
<!--Case studies starts-->
<section id="case_study" class="case_studies">
	<div class="container">
		<h3 class="text-center"><?php echo get_theme_mod('case_studies_title_heading') ?></h3>
		<div class="row">
			<?php
			$args = array(  
				'post_type' => 'case_studies',
				'post_status' => 'publish',
				'posts_per_page' => 3, 
			);
			$case_studies = new WP_Query( $args ); 

			while ( $case_studies->have_posts() ) : $case_studies->the_post(); 
				?>     

				<div class="col-sm-12 col-md-4">
					<div class="card">
						<img class="card-img-top" src="<?php echo the_post_thumbnail_url('small'); ?>" alt="<?php the_title(); ?>">
						<div class="card-body">
							<h5 class="card-title"><?php the_title(); ?></h5>
							<div class="card-text"><?php the_excerpt(); ?></div>
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

<!--Start Inside and newsroom(Blogs)-->

<section id="Insidenewsroom">
	<div class="container">
		<h2 class="font-weight-dark" id="newsrooms"><?php echo get_theme_mod('insights_newrooms_title_heading') ?></h2>
		<?php
		$args = array(  
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 4, 
		);
		$icount =0;
		$_posts = new wp_query($args);
		?>
		<?php if($_posts->have_posts());?>
		<div class="row mt-5">
			<?php while($_posts->have_posts()) : $_posts->the_post(); 
				if($icount == 0){
					?>
					<div class="col-md-7 col-sm-12 firstpost">
						<?php the_post_thumbnail( 'large' ); ?>
						<h4 class="Ar-vr-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
						<div class="Ar-vr-para"><p><?php the_excerpt(''); ?></p></div>
						<a class="readmore" href="<?php the_permalink(); ?>">Read more <i class="fa fa-arrow-right"></i></a>
					</div>
				<?php }else { 
					if($icount == 1){
						echo '<div class="col-md-5 col-sm-12 tectnology-section">';
					}
					?>
					<div class="row techrow">
						<div class="tech-image col-md-6 col-sm-12">
							<div class="row">
								<?php the_post_thumbnail( 'thumbnail' ); ?>
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
					<!-- End Technology blog  -->
				<?php } $icount++; endwhile; ?>
			</div>
		</div>
	</div>
	<div class="newsroom-btn">
		<!-- <a class="btn btn-primary" id="seeallinsight" href="<?php// get_option('home');?>/blog/">SEE ALL INSIGHTS</a> -->
		<a class="btn btn-primary moreread" href="<?php get_option('home');?>/blog/">SEE ALL INSIGHTS</a>
	</div>
</div>      
</section>

<!--End Inside and newsroom-->

<!--Testimonial start-->
<section id="testimonial">
	<div class="container">
		<p class="testimonial-subheading"><?php echo get_theme_mod('testimonial_sub_title_heading') ?></p>
		<h3 class="testimonial-heading"><?php echo get_theme_mod('testimonial_main_title_heading') ?></h3>
		<div id="carouselTestimonialIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<?php
				$args = array(  
					'post_type' => 'testimonial',
					'post_status' => 'publish',
					'posts_per_page' => -1, 
					'tax_query' => array(
						array(
							'taxonomy' => 'testimonial_category',
							'field' => 'name',
							'terms' => 'client' 
						)
					)
				);
				$testimonials = new WP_Query( $args ); 
				$i=0;

				while ( $testimonials->have_posts() ) : $testimonials->the_post(); 
					$active ="";
					if($i == 0){
						$active = "active";
					} 
					?>

					<div class="carousel-item <?php echo $active; ?>">
						<div class="row slider_row">
							<div class="col-sm-12 col-md-3">
								<?php 
								$logo_link = get_post_meta( $post->ID, '_logoslider_meta_key', true );
								if ($logo_link) : ?>
									<a href="<?php echo $logo_link; ?>" target="_blank">
									<?php endif; ?>
									<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<?php if ($logo_link) : ?>	
									</a>
								<?php endif; ?>	
							</div>
							<div class="col-sm-12 col-md-9">
								<div class="testimonial-content">
									<div class="testimonial-text">
										<?php the_content(); ?>
									</div>
									<div class="testimonial-author-info">
										<div class="author-name"><?php echo get_post_meta( $post->ID, '_testimonial_author_meta_key', true ); ?></div>
										<div class="author-company"><?php the_title(); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php
					$i++;
				endwhile;
				wp_reset_postdata();
				$i--;
				?>

				<ol class="carousel-indicators">
					<?php if($i > 0){ $j =0;
						while($i >=0){
							if($i == 0) { $activeclass="active"; } else  $activeclass ='';
							echo '<li data-target="#carouselTestimonialIndicators" class="'.$activeclass.'" data-slide-to="'.$j.'" ></li>';
							$i--; $j++;
						}
					}
					?>
				</ol>

			</div>
		</div>
	</div>
</section>
<!--Testimonial end-->

<!-- Start great place to work section-->
<section id="greatplacetowork">
	<div class="container-fluid">
		<!--great place to work -->
		<div class="row align-items-center my-5 great_place_row">
			<div class="col-lg-4 rightsidepadding">
				<?php if(get_theme_mod('great_place_to_heading')){ ?>
					<h2 class="font-weight-dark" >
						<?php echo get_theme_mod('great_place_to_heading'); ?>
					</h2>
				<?php } ?>
				<?php if(get_theme_mod('great_place_to_content')){ ?>
					<p><?php echo wpautop(get_theme_mod('great_place_to_content')) ?></p>
				<?php } ?>
				<?php if(get_theme_mod('great_place_to_link')){ ?>
					<a class="btn btn-primary moreread" id="knowmore2" href="<?php echo get_theme_mod('great_place_to_link'); ?>">
						<?php if(get_theme_mod('great_place_to_link_text')){ 
							echo get_theme_mod('great_place_to_link_text');
						}else echo "EXPLORE JOBS";
						?>
					</a>
				<?php } ?>
			</div>
			<div class="col-lg-8">
				<div class="row great_plceimg">
					<?php if(get_theme_mod('great_place_to_work')){ ?>
						<img class="img-fluid rounded mb-4 mb-lg-0" src=" <?php echo get_theme_mod('great_place_to_work'); ?>" alt="">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Lets Discuss about project start-->
<section id="discussabtproject">
	<div class="container-fluid">    
		<div class="row align-items-center my-5 projecttalk great_place_row ">
			<?php if(get_theme_mod('lets_talk_about_pjt_bg')){ ?>
				<div class="col-lg-4 rightsidepadding" style="background:url(<?php echo get_theme_mod('lets_talk_about_pjt_bg'); ?>);">
				<?php } else echo ' <div class="col-lg-4 rightsidepadding">'; ?>
				<div class="row">
					<div class="bg_overlay"></div>
					<?php if(get_theme_mod('lets_talk_about_pjt_heading')){ ?>
						<h2 class="font-weight-dark" id="greate_place_head">
							<?php echo get_theme_mod('lets_talk_about_pjt_heading'); ?>
						</h2>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="padding_adj contactform">
					<?php if(get_theme_mod('lets_talk_about_pjt_content')){ ?>
						<?php echo do_shortcode(get_theme_mod('lets_talk_about_pjt_content')) ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Lets Discuss about project end-->
<?php get_footer(); ?>

<div id="fp-nav" class="right" style="margin-top: 0px;">
	<ul>
		<li>
			<a href="#homepageslider" id="hslider" class="active">
				<span></span>
			</a>
			<div class="fp-tooltip right">Home</div>
		</li>
		<li>
			<a href="#howwework" id="hww" class="">
				<span></span>
			</a>
			<div class="fp-tooltip right">How We Work</div>
		</li>
		<!-- <li>
			<a href="#ourpartnership" class="">
				<span></span>
			</a>
			<div class="fp-tooltip right">Our Partnerships</div>
		</li>
		<li>
			<a href="#indweserved" class="">
				<span></span>
			</a>
			<div class="fp-tooltip right">Industries We Served</div>
		</li> -->
		<li>
			<a href="#productslider" id="prodslider">
				<span></span>
			</a>
			<div class="fp-tooltip right">Our Products</div>
		</li>
		<li>
			<a href="#technolgoies" id="techn">
				<span></span>
			</a>
			<div class="fp-tooltip right">Technologies We Work On</div>
		</li>
		<li>
			<a href="#solutions" id="soln">
				<span></span>
			</a>
			<div class="fp-tooltip right">Enterprises Solutions</div>
		</li>
		<li>
			<a href="#case_study" id="cstudy">
				<span></span>
			</a>
			<div class="fp-tooltip right">Case Studies</div>
		</li>
		<li>
			<a href="#Insidenewsroom" id="newsi">
				<span></span>
			</a>
			<div class="fp-tooltip right">Insights & Newsroom</div>
		</li>
		<li>
			<a href="#testimonial" id="testm">
				<span></span>
			</a>
			<div class="fp-tooltip right">Testimonials</div>
		</li>
		<li>
			<a href="#greatplacetowork" id="gptw">
				<span></span>
			</a>
			<div class="fp-tooltip right">Great Place to Work</div>
		</li>
		<li>
			<a href="#discussabtproject" id="dayp">
				<span></span>
			</a>
			<div class="fp-tooltip right">Discuss About Your Project</div>
		</li>
		<li>
			<a href="#newsletter" id="subs">
				<span></span>
			</a>
			<div class="fp-tooltip right">Subscribe to our Newsletter</div>
		</li>
		<li>
			<a href="#sitemap" id="stmp">
				<span></span>
			</a>
			<div class="fp-tooltip right">Sitemap</div>
		</li>
	</ul>
</div>