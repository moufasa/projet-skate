<?php /* The template for displaying 404 pages */ get_header(); ?>

<!-- #Page Back -->
    <div id="pageback"></div>
    <div id="tabback2"></div>
    
    <div  class="grid_16 margin">
    	<div id="tabmenuback2"></div>
        <div class="bigtitle">
            <h1><?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'lang404upss') ) : ?><?php get_option_tree( 'lang404upss', '', 'true' ); ?><?php else : ?>Upss!<?php endif; endif; ?></h1>
            <h2><?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'lang404upssdes') ) : ?><?php get_option_tree( 'lang404upssdes', '', 'true' ); ?><?php else : ?>Page Not Found<?php endif; endif; ?></h2>
        </div>
    </div>
    
    <!-- Clear -->
    <div class="clear margin5"></div>
    
    <div class="grid_16">
    	<div class="nofound">
        	<h1><?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'lang404found') ) : ?><?php get_option_tree( 'lang404found', '', 'true' ); ?><?php else : ?>This Page Delete or Now Found :(<?php endif; endif; ?></h1>
        </div>
    </div>	
	
    
    <!-- Clear-->
    <div class="clear"></div>
    
    <!-- Advert Start -->
    <div id="advert" class="grid_16 advert pagenavi">
    	<div id="advertback"></div>

	
        <div class="margin3 fleft">
       
        </div>
        <div class="margin3 fright"></div>

    </div>
    <!-- Advert End -->
    
    <!-- Clear-->
    <div class="clear"></div>
    
    
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