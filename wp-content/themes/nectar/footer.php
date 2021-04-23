<footer class="footer_container">
    <div id="newsletter" class="container-fluid newsletter_row">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
             <div class="row">
            <h3><?php echo get_theme_mod('get_our_newsletter_title_heading') ?></h3>
            <p><?php echo get_theme_mod('get_our_newsletter_content') ?></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
<div id="mc_embed_signup">
<form action="https://nectarinfotel.us7.list-manage.com/subscribe/post?u=da479c8840bf7a3fc3abfd430&amp;id=d39b898f56" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter_form" target="_blank" novalidate>
<div class="mc-field-group">
    <input type="email" value="" name="EMAIL" class="required email form-control mb-2 mr-sm-2" id="mce-EMAIL" placeholder="Your Email Required">
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary mb-2">
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_da479c8840bf7a3fc3abfd430_d39b898f56" tabindex="-1" value=""></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
</div>
            
        </div>
    </div>
    </div>
    </div>
    <div id="sitemap" class="container-fluid footer_row">
        <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 footer_col firstcol">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
			<?php endif; ?>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 footer_col sec_Col">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
			<?php endif; ?>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 footer_col third_Col">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
			<?php endif; ?>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 footer_col lastcol">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('addresses') ) : ?>
			<?php endif; ?>
        </div>
    </div>
    </div>
    </div>
    <div class="container-fluid social_row">
        <div class="container">
        <div class="row">
        <div class="col-12 col-sm-6 col-md-2 firstcol">
           <span class="connect">Connect with us</span>
        </div>
        <div class="col-12 col-sm-6 col-md-3 secondcol">
                <span class="sociall_icons">
                    <?php
                        $fb_link = get_theme_mod('fb_link');
                        $linkedin_link = get_theme_mod('linkedin_link');
                        $insta_link = get_theme_mod('insta_link');
                        $twitter_link = get_theme_mod('twitter_link');
                        $youtube_link = get_theme_mod('youtube_link');
                    ?>
                    <a href="<?php echo $fb_link ? $fb_link : '#' ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $linkedin_link ? $linkedin_link : '#' ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="<?php echo $insta_link ? $insta_link : '#' ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $twitter_link ? $twitter_link : '#' ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $youtube_link ? $youtube_link : '#' ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
                </span>
            
        </div>
        <div class="col-12 col-md-7 btm_menu">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bottom_menu') ) : ?>
			<?php endif; ?>
        </div>
    </div>
    </div>
    </div>
    <div class="container-fluid copyright_row">
        <div class="container">
            <div class="row">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
    		<?php endif; ?>
        </div>
        </div>
    </div>
</footer>
</main>
<?php wp_footer() ?>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script> -->


</body>
</html>