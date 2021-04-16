<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="" rel="stylesheet">
<!--cookie popup-->
<link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js" defer></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#f1f1f1","text":"#212529","border":"#555555"},"button":{"background":"#eb5a23","text":"#ffffff"}},"position":"bottom","content":{"href":"http://niswp.nectarinfotel.com/cookie-policy/","message":"We use cookies to give you the most optimal experience on our website. It help us to improve site performance &amp; enhance your digital experience.\nFor more information related to the cookies, please visit our cookie policy.","link":"Know more","button":"Accept"}})});</script>

<?php wp_head(); ?>

</head>
<body <?php body_class( is_front_page() ? array() : array('inner_pages') );?> >
<!-- side push menu 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php // wp_nav_menu( array('theme_location' => 'side_menu', 'menu_class' => 'nav navbar-nav sidemenu', 'container' => '','depth'=> 2,'menu_class'     => 'navbar-nav ','walker'         => new BootstrapNavMenuWalker())); ?>
</div>-->
<!--search pop up form -->
<!-- <div class="modal fade" id="searchmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
</button>
  <div class="modal-dialog searchboxfull" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php // get_search_form(); ?>
      </div>
    </div>
  </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="searchmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog m-d" role="document">
    <div class="modal-content">
      <div class="modal-header mod-head">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body m-b">
	  	<?php //get_search_form(); ?>
      </div>
    </div>
  </div>
</div>

<header>
	<div class="container-fluid top_bar">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-3 col-md-3 top_bar_icons">
					<div class="row">
						<div class="top_icons">
							<span id="multilang"><i class="fa fa-globe"></i><span id="lang">EN</span></span>
							<div id="multilangbox" class="box arrow-top hide">
								<span>Select a Language: </span>
								<?php echo do_shortcode('[gtranslate]'); ?>
							</div>
							<span id="searchbtn"><i class="fa fa-search"></i></span>
							<div id="searchbox" class="box arrow-top hide">
								<?php get_search_form(); ?>
							</div>
							<span id="infobtn"><i class="fa fa-info"></i></span>
							<div id="totalinfo" class="box arrow-top hide">
								<div id="infobox">
									<p class="infotext">We are Leading IT Organisation offering End to End services in customized <strong>Software Development, IT infrastructure, Mobile & Web Application Development & IoT/AI/ML</strong></p>
									<div class="info_container">
										<div class="row inforow">
											<div class="col-6 col-md-3">
												<div class="infocol">
													<p class="num">10 +</p>
													<p class="txt">Presence in Countries</p>
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="infocol">
													<p class="num">12 +</p>
													<p class="txt">Global Clients in All 6 Continents</p>
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="infocol">
													<p class="num">15 +</p>
													<p class="txt">Products & Services</p>
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="infocol">
													<p class="num">18 + mn</p>
													<p class="txt">End Customers Benefitted</p>
												</div>
											</div>
										</div>
									</div>
									<div class="cert_excl_cont">
										<div class="row ce_row">
											<div class="col-12 col-md-8 ce_col">
												<div class="cert">
													<div class="cert_heading"><p class="text-center">We are certified in</p></div>
													<div class="cert_body">
														<div class="row">
															<div class="col-4">
																<div class="row">
																	<div class="col-12 col-lg-4">
																		<img class="cert_img" src="<?php echo get_template_directory_uri(); ?>/images/icon-1.png" width="" height="" alt="" />
																	</div>
																	<div class="col-12 col-lg-8">
																		<div class="cert_text">
																			<p class="cert_text1">ISO</p>
																			<p class="cert_text2">9001-2015</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-4">
																<div class="row">
																	<div class="col-12 col-lg-4">
																		<img class="cert_img" src="<?php echo get_template_directory_uri(); ?>/images/icon-1.png" width="" height="" alt="" />
																	</div>
																	<div class="col-12 col-lg-8">
																		<div class="cert_text">
																			<p class="cert_text1">TL</p>
																			<p class="cert_text2">9000:2016</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-4">
																<div class="row">
																	<div class="col-12 col-lg-4">
																		<img class="cert_img" src="<?php echo get_template_directory_uri(); ?>/images/icon-1.png" width="" height="" alt="" />
																	</div>
																	<div class="col-12 col-lg-8">
																		<div class="cert_text">
																			<p class="cert_text1">ISO</p>
																			<p class="cert_text2">20000-1:2018</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-12 col-md-4 ce_col">
												<div class="excl">
													<div class="col-12 col-lg-3 ce_col_img">
														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-2.png" width="" height="" alt="" />
													</div>
													<div class="col-12 col-lg-9 ce_col_text">
														<div class="row ce_text">
															<p class="ce_text2">10+ YRS OF</p>
															<p class="ce_text3">EXCELLENCE</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="container-fluid cta_cont">
									<div class="container">
										<div class="row cta_row">
											<p class="cta_text mob_hide">Prepare your Project<span class="gt">&gt;</span>Fill out Enquiry Form<span class="gt">&gt;</span>Consult with our team
												<a id="get_started_btn" class="btn btn-primary moreread" href="#">GET STARTED</a></p>
												<a id="get_started_btn2" class="btn btn-primary moreread pc_hide" href="#">GET STARTED</a></p>
										</div>
									</div>
								</div>
							</div>
							<span class="flag_phnno pc_hide">
								<img src="<?php echo get_template_directory_uri(); ?>/images/india-flag.png" width="" height="" alt="" />
								<span class="top_phn">+91 (20) 2698 2255</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-9 col-md-9 header_right">
					<div class="row">
						<div class="header_right_btns">
							<a href="<?php echo get_option('home'); ?>/careers" class="career_btn">CAREERS</a>
							<a href="<?php echo get_option('home'); ?>/contact-us" class="contact_btn">CONTACT US</a>
							<span class="flag_phnno mob_hide">
								<img src="<?php echo get_template_directory_uri(); ?>/images/india-flag.png" width="" height="" alt="" />
								<span class="top_phn">+91 (20) 2698 2255</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid all_phn_nos">
		<div class="container">
			<div class="row fp_row">
				<div class="col-6 col-sm-3 col-md-3">
					<div class="row">
						<h4>Give us a call</h4>
					</div>
				</div>
				<div class="col-6 col-sm-3 col-md-3">
					<div class="row">
						<span class="">
							<img src="<?php echo get_template_directory_uri(); ?>/images/india-flag.png" width="" height="" alt="" />
							<a href="tel:+912026982255" class="">+91 (20) 2698 2255</a>
						</span>
					</div>
				</div>
				<div class="col-6 col-sm-3 col-md-3">
					<div class="row">
					<span class="">
							<img src="<?php echo get_template_directory_uri(); ?>/images/india-flag.png" width="" height="" alt="" />
							<a href="tel:+918956932941" class="">+91 8956932941</a>
						</span>
					</div>
				</div>
				<div class="col-6 col-sm-3 col-md-3">
					<div class="row">
					<span class="">
							<img src="<?php echo get_template_directory_uri(); ?>/images/uae_flag.png" width="" height="" alt="" />
							<a href="tel:+97143817425" class="">+971 4381 7425</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid header_top">
		<div class="container">
			<div class="row">
					<div class="col-sm-4 col-md-3 ">
						<div class ="row">
		<?php if ( function_exists( 'the_custom_logo' )) {
								the_custom_logo();
							} ?>
						</div>
					</div>
					<!-- <div class="d-block col-sm-12 d-md-none mob_logo">
						<div class ="row">
							<?php // if(get_theme_mod('nectar_white_logo')){ ?>
             				 <a href="<?php // echo get_option('home'); ?>" class="inner-logo-main">
             				 <img src="<?php // echo get_theme_mod('nectar_white_logo'); ?>" alt="logo"/>
             				 </a>
            				<?php // } ?>
						</div>
					</div> -->
					<div class="col-sm-8 col-md-9">
						<nav class="navbar navbar-expand-sm navbar-dark text-right">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="collapsibleNavbar">
								<?php wp_nav_menu( array('theme_location' => 'header_Menu', 'menu_class' => 'nav navbar-nav', 'container' => '',
								 'depth'          => 4,
								'menu_class'     => 'navbar-nav mr-auto ',
								'walker'         => new BootstrapNavMenuWalker(),  
								)); ?>
								
							</div>
							<!-- <div class="top_icons">
								<span><i class="fa fa-search"></i></span>
								<span onclick="openNav()"><i class="fa fa-bars"></i></span>
								<div class="box arrow-top hide">
									<?php //get_search_form(); ?>
								</div>
							</div> -->
						</nav>
						
					</div>
				</div>
		</div>
	</div>
</header>
<main role="main">
	