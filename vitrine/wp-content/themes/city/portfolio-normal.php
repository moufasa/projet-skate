<?php /** Template Name: Portfolio Picture */ get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/framework.js"></script>

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
            <h1>City Portfolio Normal</h1>
            <h2>"Maecenas placerat"</h2>
            <?php endif; endif; ?>
        </div>
    </div>
    
    <!-- Clear -->
    <div class="clear margin5"></div>
    
    <div id="listportfolio" class="grid_16">
    	
        <!-- Filter Menu -->
        <div class="filter">
          <ul id="filter">
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'portfolioimage_filter') ) : ?>
              
              <?php get_option_tree( 'portfolioimage_filter', '', 'true' ); ?>
              
              <?php else : ?>
              <li class="current"><a href="#">All</a></li>
              <li><a href="#">Work</a></li>
              <li><a href="#">Logo</a></li>
              <li><a href="#">Web</a></li>
              <li><a href="#">Media</a></li>
              <?php endif; endif; ?>
              
          </ul>
        </div>
        
        <div class="clear"></div>
        
        <!-- Filter List Post -->
        <div class="portfoliowork">
          <?php 
		  $category = get_option_tree('portfolio_categories');
		  $number = get_option_tree('portfolio_show');
		  ?>
	  
		  <?php if (have_posts()) : ?>
		  <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=$category&showposts=$number&somecat&paged=$paged"); ?>
              
          <ul id="portfolio" class="portfolioul">
              
			  <?php while (have_posts()) : the_post(); ?>             
              <!-- #1-->
              <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>">
              <script>
			  $(function(){						  
			  $('#<?php the_ID(); ?>').bxSlider({
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
              	
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <ul id="<?php the_ID(); ?>" class="listingblogul">            
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/no.jpg"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/image/post/no.jpg&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb2', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb2", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb2", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb3', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb3", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb3", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb4', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb4", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb4", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb5', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb5", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb5", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb6', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb6", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb6", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb7', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb7", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb7", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb8', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb8", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb8", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb9', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb9", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb9", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb10', true) ) : ?>
                  <li class="<?php echo get_post_meta($post->ID, "filter", $single = true); ?>"><div class="overlay_fade"><a class="team" href="<?php echo get_post_meta($post->ID, "thumb10", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb10", $single = true); ?>&h=200&w=300" alt="" class="three-columb-img portfolioul-li-img" /></div></li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                </ul>
                
                <div class="columb-shadow3"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
              
              </li>             
              <?php endwhile; ?> 
              
           </ul>
           <?php else : ?>
		   <?php endif; ?> 
         </div>
        
    </div>
    
    <!-- Clear-->
    <div class="clear"></div>
    
    <!-- Advert Start -->
    <div id="advert" class="grid_16 advert pagenavi">
    	<div id="advertback"></div>
        <?php 
		$category = get_option_tree('portfolio_categories');
		$number = get_option_tree('portfolio_show');
		?>
	
		<?php if (have_posts()) : ?>
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=$category&showposts=$number&somecat&paged=$paged"); ?>
		<?php while (have_posts()) : the_post(); ?>
        
		<?php endwhile; ?>
        <div class="margin3 fleft">
        <?php wp_pagenavi(); ?>
        </div>
        <div class="margin3 fright"><?php previous_posts_link() ?> <?php next_posts_link() ?></div>
        <?php else : ?>
		<?php endif; ?> 
    </div>
    <!-- Advert End -->
    
    <!-- Clear-->
    <div class="clear"></div>
    
    
    <!-- What Says Our Company -->
    <div class="grid_8 margin leftsays">
    	<div id="full-bottom"></div>
    	<div class="title-2cloumb">
        	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'portfolioimageblogbottom_lefttitle') ) : ?>
            
            <h1><?php get_option_tree( 'portfolioimageblogbottom_lefttitle', '', 'true' ); ?></h1>
        	<p><?php get_option_tree( 'portfolioimageblogbottom_leftdes', '', 'true' ); ?></p>
            
            <?php else : ?>
            <h1>The Portfolio Populer Post</h1>
        	<p>Lorem ipsum is simply data text</p>
            <?php endif; endif; ?>
        </div>
        <div class="leftcloumb-list">
        	<ul>
            	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'portfolioallblogbottom_left') ) : ?>
                
                <?php 
				$category = get_option_tree('portfolioallblogbottom_left');
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
        	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'portfolioimageblogbottom_righttitle') ) : ?>
            
            <h1><?php get_option_tree( 'portfolioimageblogbottom_righttitle', '', 'true' ); ?></h1>
        	<p><?php get_option_tree( 'portfolioimageblogbottom_rightdes', '', 'true' ); ?></p>
            
            <?php else : ?>
            <h1>Portfolio Hot Post</h1>
        	<p>Lorem ipsum is simply printing swith data text</p>
            <?php endif; endif; ?>
        </div>
        <div class="bussiness-boss">
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'portfoliobottomblogbottom_right') ) : ?>
                
			<?php 
            $category = get_option_tree('portfoliobottomblogbottom_right');
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