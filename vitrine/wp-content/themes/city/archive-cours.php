<?php /* The template for displaying Archive pages */ get_header(); ?>

<!-- #Page Back -->
    <div id="pageback"></div>
    <div id="tabback2"></div>
    
    <div  class="grid_16 margin">
    	<div id="tabmenuback2"></div>
        <div class="bigtitle">
            <h1><?php if (have_posts()) : ?>
	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<?php single_cat_title(); ?> <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langcategory') ) : ?><?php get_option_tree( 'langcategory', '', 'true' ); ?><?php else : ?>category<?php endif; endif; ?>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<?php single_tag_title(); ?>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<?php the_time('F jS, Y'); ?>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<?php the_time('F, Y'); ?>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<?php the_time('Y,'); ?>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		Author Archive
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		Blog Archives
 	  <?php } ?></h1>
            <h2><?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';
				?></h2>
        </div>
    </div>
    
    <!-- Clear -->
    <div class="clear margin5"></div>
    
    <!-- Blog List -->
    <div class="grid_11 blog-list margin">
		
		<?php while (have_posts()) : the_post(); ?>
        
        <!-- #1 -->
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
        <div class="bloglisting">
        	<h1><?php the_title(); ?></h1>
            <h2>
			<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langposted') ) : ?><?php get_option_tree( 'langposted', '', 'true' ); ?><?php else : ?>Posted by<?php endif; endif; ?> 
			<?php printf( esc_attr__( '%s', '' ), get_the_author() ); ?>, 
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langin') ) : ?><?php get_option_tree( 'langin', '', 'true' ); ?><?php else : ?>in<?php endif; endif; ?> 
            <?php the_category(', ') ?> <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langcategories') ) : ?><?php get_option_tree( 'langcategories', '', 'true' ); ?>,<?php else : ?>Categories<?php endif; endif; ?>
			<?php comments_number(('0'), ('1'), ('%')); ?> 
			<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langcomments') ) : ?><?php get_option_tree( 'langcomments', '', 'true' ); ?><?php else : ?>Comments<?php endif; endif; ?></h2>
            
            <div class="bloglist-date">
            	<h1><?php the_time('j') ?></h1>
                <h2><?php the_time('M') ?></h2>
            </div>
            
            <ul id="<?php the_ID(); ?>" class="listingblogul">            
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/no.jpg"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_template_directory_uri(); ?>/image/post/no.jpg&h=220&w=600" alt="" class="three-columb-img">
                  </div>
                  </li>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb2', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb2", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb2", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb3', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb3", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb3", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb4', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb4", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb4", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb5', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb5", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb5", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb6', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb6", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb6", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb7', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb7", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb7", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb8', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb8", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb8", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb9', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb9", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb9", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>
                  
                  <?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb10', true) ) : ?>
                  <li>
                  <div class="overlay_fade">
                  <a class="team" href="<?php echo get_post_meta($post->ID, "thumb10", $single = true); ?>"><div class="overlay_zoom zoom_black"></div></a>
                  <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb10", $single = true); ?>&h=220&w=600" alt="" class="three-columb-img" />
                  </div>
                  </li>
                  <?php else : ?>
                  <?php endif; endif; ?>

            </ul>
            <div class="bloglisting-img-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/bigshadow3.png" alt=""></div>
            
			<?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'thumb2', true) ) : ?>
            <div class="bloglist-nav"></div>
            <?php else : ?>
            <?php endif; endif; ?>
            
            <p><?php content('102'); ?></p>
            
            <div class="margin6 fright">
            <a href="<?php the_permalink() ?>" class="minibutton">
			<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langreadmore') ) : ?><?php get_option_tree( 'langreadmore', '', 'true' ); ?><?php else : ?>More<?php endif; endif; ?>
            </a>
            </div>
            
        </div>
        
        <?php endwhile; ?>
        
        <?php else : ?>
		<?php endif; ?>  
        
        
    </div>
    
<?php get_footer(); ?>