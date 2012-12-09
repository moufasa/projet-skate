<?php /** Template Name: Page No Comment */ get_header(); ?>

  <!-- #Page Back -->
  <div id="pageback"></div>
  <div id="tabback2"></div>
  
  <div class="grid_16 margin">
      <div id="tabmenuback2"></div>
      <div class="bigtitle">
        	<?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'title', true) ) : ?>
            
            <h1><?php echo get_post_meta($post->ID, "title", $single = true); ?></h1>
            <h2><?php echo get_post_meta($post->ID, "subtitle", $single = true); ?></h2>
            
			<?php else : ?>
            <h1>City Life Normal Page</h1>
            <h2>"Maecenas placerat"</h2>
            <?php endif; endif; ?>
        </div>
  </div>
  
  <!-- Clear -->
  <div class="clear margin5"></div>
  
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <!-- Blog List -->
  <div class="grid_11 blog-list margin">
      
      <!-- #1 -->
      <script>
      $(function(){						  
      $('#1').bxSlider({
      mode: 'fade',
      captions: false,
      auto: false,
      <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb2', true) ) : ?>
		controls: true
		<?php else : ?>
		controls: false
		<?php endif; endif; ?>
      });
      });	
      </script>
      <div class="bloglisting2">
          <h1><?php the_title(); ?></h1>
          <h2>
		  	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langposted') ) : ?><?php get_option_tree( 'langposted', '', 'true' ); ?><?php else : ?>Posted by<?php endif; endif; ?> 
			<?php printf( esc_attr__( '%s', '' ), get_the_author() ); ?>, 
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langin') ) : ?><?php get_option_tree( 'langin', '', 'true' ); ?><?php else : ?>in<?php endif; endif; ?> 
            <?php the_category(', ') ?> <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langcategories') ) : ?><?php get_option_tree( 'langcategories', '', 'true' ); ?>,<?php else : ?>Categories<?php endif; endif; ?>
			<?php comments_number(('0'), ('1'), ('%')); ?> 
			<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langcomments') ) : ?><?php get_option_tree( 'langcomments', '', 'true' ); ?><?php else : ?>Comments<?php endif; endif; ?>
          </h2>
          
          <div class="bloglist-date">
            	<h1><?php the_time('j') ?></h1>
                <h2><?php the_time('M') ?></h2>
          </div>
          
          <ul id="1" class="listingblogul2">            
                
				<?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/no.jpg"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/image/post/no.jpg&h=460&w=600" alt="" class="three-columb-img">
                  </div>
                  </li>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb2', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb2", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb2", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb3', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb3", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb3", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb4', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb4", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb4", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb5', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb5", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb5", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb6', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb6", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb6", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb7', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb7", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb7", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb8', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb8", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb8", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb9', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb9", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb9", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb10', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb10", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb10", $single = true); ?>&h=460&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
          </ul>
          
          <div class="bloglisting-img-shadow2"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/bigshadow3.png" alt=""></div>
          
		  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb2', true) ) : ?>
          <div class="bloglist-nav"></div>
          <?php else : ?>
          <?php endif; endif; ?>
      </div>
      
      <!-- Clear -->
      <div class="clear"></div>
  
      <div class="single-post">
      	
        <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'likebutton') ) : ?>
      	<?php else : ?>
        <div class="like">
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <g:plusone></g:plusone>
        <iframe class="faceframe" src="http://www.facebook.com/plugins/like.php?app_id=234315209916892&amp;href=<?php the_permalink() ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <?php endif; endif; ?> 
        
        <?php the_content(); ?>
      </div>
      
  </div>
  
  <!-- Sidebar -->
    <div class="grid_5 margin7">
        
        <!-- #1 -->
        <div class="sidebar-categories">
        	<?php dynamic_sidebar(4); ?>
        </div>
    </div>
  
  <!-- Clear-->
  <div class="clear"></div>
  
  <!-- Advert Start -->
  <div id="advert" class="grid_16 advert">
      <div id="advertback"></div>
      <div class="margin11 fleft">
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'facebook') ) : ?>
      <?php else : ?>
      <a href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/facebook.png" alt="Facebook" border="0"></a>
      <?php endif; endif; ?> 
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'twitter') ) : ?>
      <?php else : ?>
      <a href="http://twitthis.com/twit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/twitter.png" alt="Twitter" border="0"></a> 
      <?php endif; endif; ?> 
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'yahoo') ) : ?>
      <?php else : ?>
      <a href="http://myweb2.search.yahoo.com/myresults/bookmark?t=<?php the_title(); ?>&u=<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/yahoo.png" alt="Yahoo! My Web" border="0"></a> 
      <?php endif; endif; ?> 
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'linkedin') ) : ?>
      <?php else : ?>
      <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&ro=false"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/in.png" alt="Linked in" border="0"></a> 
      <?php endif; endif; ?> 
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'technorati') ) : ?>
      <?php else : ?>
      <a href="http://technorati.com/favorites/?sub=favthis&add=<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/te.png" alt="Technorati" border="0"></a> 
      <?php endif; endif; ?> 
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'delicious') ) : ?>
      <?php else : ?>
      <a href="http://del.icio.us/post?url1=<?php the_permalink() ?>&title=<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/de.png" alt="del.icio.us" border="0"></a> 
      <?php endif; endif; ?> 
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'stumbleupon') ) : ?>
      <?php else : ?>
      <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/st.png" alt="Stumbleupon" border="0"></a> 
      <?php endif; endif; ?> 
      
      <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'google') ) : ?>
      <?php else : ?>
      <a href="http://www.google.com/buzz/post?url=<?php the_permalink() ?>&title=<?php the_title(); ?>&message={TITLE}"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/google.png" alt="Google Buzz" border="0"></a> 
      <?php endif; endif; ?> 
      
      </div>
      
      <div class="margin3 fright"><a href="#" class="minibutton"><?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langposted') ) : ?><?php get_option_tree( 'langposted', '', 'true' ); ?><?php else : ?>Posted by<?php endif; endif; ?> 
			<?php printf( esc_attr__( '%s', '' ), get_the_author() ); ?></a></div>
  </div>
  <!-- Advert End -->
  
  <!-- Clear-->
  <div class="clear"></div>
  
  <?php endwhile; // end of the loop. ?>
  
  <!-- What Says Our Company -->
    <div class="grid_8 margin leftsays">
    	<div id="full-bottom"></div>
    	<div class="title-2cloumb">
        	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'blogbottom_lefttitle') ) : ?>
            
            <h1><?php get_option_tree( 'blogbottom_lefttitle', '', 'true' ); ?></h1>
        	<p><?php get_option_tree( 'blogbottom_leftdes', '', 'true' ); ?></p>
            
            <?php else : ?>
            <h1>The City Populer Post</h1>
        	<p>Lorem ipsum is simply data text</p>
            <?php endif; endif; ?>
        </div>
        <div class="leftcloumb-list">
        	<ul>
            	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'blogbottom_left') ) : ?>
                
                <?php 
				$category = get_option_tree('blogbottom_left');
				$number = 3;
				?>
				<?php $showPostsInCategory = new WP_Query(); $showPostsInCategory->query('cat='. $category .'&showposts='. $number .'');  ?>
				<?php if ($showPostsInCategory->have_posts()) :?>
				<?php while ($showPostsInCategory->have_posts()) : $showPostsInCategory->the_post(); ?>
				<?php $data = get_post_meta( $post->ID, 'key', true ); ?>
                
                <li>
                <div class="margin4 fright">
                <a href="<?php the_permalink() ?>" class="minibutton2"><?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langmore') ) : ?><?php get_option_tree( 'langmore', '', 'true' ); ?><?php else : ?>More<?php endif; endif; ?></a>
                </div>
                
                <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb', true) ) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&h=80&w=120" alt="" class="leftcloumb-list-img">
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/image/post/no.jpg&h=80&w=120" alt="" class="leftcloumb-list-img">
                <?php endif; endif; ?>
                
                <h1><?php the_title_limit( 30, '...'); ?></h1>
                <p><?php content('14'); ?></p>
                </li>
                
                <?php endwhile; endif; ?>
                
                <?php else : ?>
                <li><div class="margin4 fright"><a href="#" class="minibutton2">More</a></div><img src="<?php echo get_template_directory_uri(); ?>/image/post/l1.png" alt="" class="leftcloumb-list-img"> <h1>William Crahenberg Says:</h1><p>In consequat velit tempor dui dapibus mollis. Morbi a risus felis. Nulla non odio nunc, sit amet.</p></li>
                <li><div class="margin4 fright"><a href="#" class="minibutton2">More</a></div><img src="<?php echo get_template_directory_uri(); ?>/image/post/l2.png" alt="" class="leftcloumb-list-img"> <h1>Marie Smith Do Says:</h1><p>In consequat velit tempor dui dapibus mollis. Morbi a risus felis. Nulla non odio nunc, sit amet.</p></li>
                <li><div class="margin4 fright"><a href="#" class="minibutton2">More</a></div><img src="<?php echo get_template_directory_uri(); ?>/image/post/l3.png" alt="" class="leftcloumb-list-img"> <h1>Mark John Gothenberg Says:</h1><p>In consequat velit tempor dui dapibus mollis. Morbi a risus felis. Nulla non odio nunc, sit amet.</p></li>
                <?php endif; endif; ?>
            </ul>
        </div>
    </div>
    <!-- What Says Our Company End -->
    
    <!-- Bigg Boss -->
    <div class="grid_8 margin">
    	<div class="title-2cloumb">
        	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'blogbottom_righttitle') ) : ?>
            
            <h1><?php get_option_tree( 'blogbottom_righttitle', '', 'true' ); ?></h1>
        	<p><?php get_option_tree( 'blogbottom_rightdes', '', 'true' ); ?></p>
            
            <?php else : ?>
            <h1>Latest Hot Post</h1>
        	<p>Lorem ipsum is simply printing swith data text</p>
            <?php endif; endif; ?>
        </div>
        <div class="bussiness-boss">
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'blogbottom_right') ) : ?>
                
			<?php 
            $category = get_option_tree('blogbottom_right');
            $number = 1;
            ?>
            <?php $showPostsInCategory = new WP_Query(); $showPostsInCategory->query('cat='. $category .'&showposts='. $number .'');  ?>
            <?php if ($showPostsInCategory->have_posts()) :?>
            <?php while ($showPostsInCategory->have_posts()) : $showPostsInCategory->the_post(); ?>
            <?php $data = get_post_meta( $post->ID, 'key', true ); ?>
            
            
            <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb', true) ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&h=230&w=480" alt="" class="bussiness-boss-img">
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/image/post/no.jpg&h=230&w=480" alt="" class="bussiness-boss-img">
            <?php endif; endif; ?>
            
            
            <div class="bussiness-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/bigshadow2.png" alt=""></div>
            <h1><?php the_title_limit( 30, '...'); ?></h1>
            <p><?php content('50'); ?></p>
			
			<?php endwhile; endif; ?>
            
            <?php else : ?>
            
            <img src="<?php echo get_template_directory_uri(); ?>/image/post/lbig.png" class="bussiness-boss-img" alt="">
            <div class="bussiness-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/bigshadow2.png" alt=""></div>
            <h1>Micheal Smith Fisher:</h1>
            <p>"Phasellus dapibus rutrum mi, sed elementum felis placerat ac. Aenean gravida elementum arcu non ultrices. Proin pharetra ipsum vitae augue dignissim pharetra. Maecenas turpis leo, dignissim a elementum id, feugiat eget leo. Ut vitae neque aliquam orci blandit elementum eu id nibh. Class aptent taciti sociosqu ad litora."</p>
            
            <?php endif; endif; ?>
        </div>
    </div>
    <!-- Bigg Boss End -->


<?php get_footer(); ?>