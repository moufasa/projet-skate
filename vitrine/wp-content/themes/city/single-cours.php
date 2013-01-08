<?php /** Template Name: Page Full Width */ get_header(); ?>

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
  <div class="grid_16 blog-list margin">

      <div class="bloglisting2">
          <h1><?php the_title(); ?></h1>
          <!-- faire le post ici -->
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
  
  <!-- Clear-->
  <div class="clear"></div>
 
  
  <!-- Clear-->
  <div class="clear"></div>
  
 <?php comments_template( '', true ); ?>
  
  <?php endwhile; // end of the loop. ?>
  


<?php get_footer(); ?>