<?php /* The Footer */ ?>

	<!-- Clear-->
    <div class="clear"></div>
    
    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footercompany_onoff') ) : ?>
    <?php else : ?>
    <div id="company-logo" class="grid_16">
    	<div id="tabback3"></div>
        <div id="tabmenuback3"></div>
        <div id="logo-list">
            <script src="<?php echo get_template_directory_uri(); ?>/js/portfolio.js"></script>
            <div id="ps_slider" class="ps_slider margin30">
            <a class="prev disabled"></a>
            <a class="next disabled"></a>
            <div id="ps_albums" class="logolist">
                <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'slide_logo') ) : ?>
				<?php
                    if ( function_exists( 'get_option_tree' ) ) {
                      $slides = get_option_tree( 'slide_logo', $option_tree, false, true, -1 );
                      foreach( $slides as $slide ) { ?>
                
                <div class="ps_album">
                <a class="iframe" href="<?php echo $slide['link']; ?>" title="<?php echo $slide['title']; ?> </BR> <?php echo $slide['description']; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $slide['image']; ?>&h=40&w=154" class="logolist-img" alt="">
                </a>
                </div>
                
                <?php } } ?>  
				<?php else : ?>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_01.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_02.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_03.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_04.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_05.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_06.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_07.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_08.jpeg" class="logolist-img" alt=""></a>
                </div>
                <div class="ps_album">
                    <a class="iframe" href="http://www.themeforest.net" title="LOGO NAME </BR> Description: Lorem ipsum is simply dummy data text printing."><img src="<?php echo get_template_directory_uri(); ?>/image/post/logo_09.jpeg" class="logolist-img" alt=""></a>
                </div>
                <?php endif; endif; ?> 
            </div>
            </div>
        </div>
    </div>
    
    <!-- Clear-->
	<div class="clear"></div>
    <?php endif; endif; ?>
    
</div>
<!-- Container End-->

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footercolumb_onoff') ) : ?>
<?php else : ?>
    
<!-- Clear-->
<div class="clear"></div>     

<!-- Footer 1 Start -->    
<div id="footer1-back">
    <div class="container_16">
      <div class="grid_16 margin">
           
           <!-- Widget Categories-->
           <div class="footercategories margin">
              <?php dynamic_sidebar(7); ?>
           </div>
           
           <!-- Latest Portfolio -->
           <div class="footerportfolio margin">
           
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_center_onoff') ) : ?>
              <?php dynamic_sidebar(8); ?>
			  <?php else : ?>
			  
			  <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_center_title') ) : ?>
              <h2><?php get_option_tree( 'footer_center_title', '', 'true' ); ?></h2>
              <?php else : ?>
              <h2>Latest PortfolIo Items</h2>
              <?php endif; endif; ?>
              
              <?php 
			  $category = get_option_tree('footer_portfolio_categories');
			  $number = get_option_tree('footer_portfolio_show');
			  ?>
		  
			  <?php if (have_posts()) : ?>
			  <?php query_posts("cat=$category&showposts=$number&somecat&paged=$paged"); ?>
              <ul>
                  
                  <?php while (have_posts()) : the_post(); ?>  
                  <li>
                  <a href="<?php the_permalink() ?>">
                   <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb', true) ) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&h=45&w=45" alt="">
                  <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/image/post/no.jpg&h=45&w=45" alt="">
                  <?php endif; endif; ?>
                  </a>
                  </li>
                  <?php endwhile; ?>

              </ul>
              <?php else : ?>
			  <?php endif; ?> 
              
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_center_bottom_title') ) : ?>
              <div class="footerportfolio-button"><a href="<?php get_option_tree( 'footer_center_bottom_link', '', 'true' ); ?>" class="middlebutton"><?php get_option_tree( 'footer_center_bottom_title', '', 'true' ); ?></a></div>
			  <?php else : ?>
              <div class="footerportfolio-button"><a href="#" class="middlebutton">Portfolio</a></div>
              <?php endif; endif; ?>
			  
              <?php endif; endif; ?>
              
           </div>
           
           <!-- Social Widget -->
           <div class="footersocial margin">
              
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_righttwitter_onoff') ) : ?>
              <?php dynamic_sidebar(9); ?>
              <?php else : ?>
              
			  <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_tweets_title') ) : ?>
              <h2><?php get_option_tree( 'footer_tweets_title', '', 'true' ); ?></h2>
			  <?php else : ?>
              <h2>Latest Tweets Envato</h2>
              <?php endif; endif; ?>
              
              <div class="twittermessage">
                <div class="footertwitter">
                    <p><?php wp_echoTwitter(get_option_tree('footer_tweets_name')); ?></p>
                </div>
                <div class="twitterbird"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/twitterbird.png" alt=""></div>
              </div>
              
              <?php endif; endif; ?>
              
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_social_onoff') ) : ?>
              <?php else : ?>
              <div class="footerothermedia">
              	
				<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_socialbuttons_title') ) : ?>
                <p><?php get_option_tree( 'footer_socialbuttons_title', '', 'true' ); ?></p>
                <?php else : ?>
                <p>Others Social Media</p>
                <?php endif; endif; ?>
                
                <ul>
                	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_socialbuttons_add') ) : ?>
                    <?php
						if ( function_exists( 'get_option_tree' ) ) {
						  $slides = get_option_tree( 'footer_socialbuttons_add', $option_tree, false, true, -1 );
						  foreach( $slides as $slide ) { ?>
                    
                    <li><a href="<?php echo $slide['link']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $slide['image']; ?>&h=32&w=32" alt="<?php echo $slide['title']; ?>"></a></li>
					
					<?php } } ?>  
                    <?php else : ?>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s1.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s2.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s3.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s4.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s5.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s6.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s7.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s8.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s9.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/s10.png" alt=""></a></li>
                    <?php endif; endif; ?>
                </ul>
                
                <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_rightsocial_bottom_title') ) : ?>
                <div class="footersocial-button"><a href="<?php get_option_tree( 'footer_rightsocial_bottom_link', '', 'true' ); ?>" class="middlebutton"><?php get_option_tree( 'footer_rightsocial_bottom_title', '', 'true' ); ?></a></div>
                <?php else : ?>
                <div class="footersocial-button"><a href="#" class="middlebutton">Contact</a></div>
                <?php endif; endif; ?>
                
              </div>
              
              <?php endif; endif; ?>
              
           </div>
      </div>
    </div>
</div>


<!-- Clear-->
<div class="clear"></div>

<!-- Footer 2 Start -->       
<div id="footer2-back">
	<div class="container_16">
    	<div class="grid_16 footerregister margin">
        	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footer_register_text') ) : ?>
            <p><?php get_option_tree( 'footer_register_text', '', 'true' ); ?></a></p>
			<?php else : ?>
            <p>Copright © 2012 City Themes iamthemes.com. All rights reserved. W3C standart web site valid xhtml and css</p><p>Design by Mithat Sigmaz / <a href="http://www.cubegraphic.net">CUBE GRAPHIC</a> - Code by IAMILKAY / <a href="http://www.iamthemes.com">IAMTHEMES</a></p>
            <?php endif; endif; ?>
        </div>
    </div>
</div>
</div>
<?php endif; endif; ?>

<?php wp_footer(); ?>
</body>
</html>