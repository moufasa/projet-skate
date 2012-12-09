<?php /* The Index Page */ get_header(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/full.js"></script>

	<!-- Slider Start-->
    <div id="slider" class="grid_16">  
    	
    	<!--Arrow Navigation-->
    	<a id="prevslide" class="load-item"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/arrow1.png" alt=""></a>
    	<a id="nextslide" class="load-item"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/arrow2.png" alt=""></a>
    	
        <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'slide') ) : ?>
        
        <!--Slide captions displayed here-->
        <div id="slidecaption">
		  <script>
            jQuery(function($){			
                    $.supersized({			
                        // Functionality
                        <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'slide_interval') ) : ?>
						slide_interval          :   <?php get_option_tree( 'slide_interval', '', 'true' ); ?>,		// Length between transitions
						<?php else : ?>
						slide_interval          :   5000,		// Length between transitions
						<?php endif; endif; ?>
						
                        <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'slide_transition') ) : ?>
						transition              :    <?php get_option_tree( 'slide_transition', '', 'true' ); ?>, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
						<?php else : ?>
						transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
						<?php endif; endif; ?>
                        
						<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'transition_speed') ) : ?>
						transition_speed		:	<?php get_option_tree( 'transition_speed', '', 'true' ); ?>,		// Speed of transition
						<?php else : ?>
						transition_speed		:	1000,		// Speed of transition
						<?php endif; endif; ?>														   
						slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
						slides 					:  	[			// Slideshow Images	
                        
						<?php
						if ( function_exists( 'get_option_tree' ) ) {
						  $slides = get_option_tree( 'slide', $option_tree, false, true, -1 );
						  foreach( $slides as $slide ) { ?>
						
						{image : '<?php echo $slide['image']; ?>', title : '<a href="<?php echo $slide['link']; ?>"><h1><?php echo $slide['title']; ?></h1></a> <h2>"<?php echo $slide['description']; ?>"</h2>'},
						
						<?php } } ?>   												
                                                    ]	
                    });
                });
          </script>
        </div>
        
        <?php else : ?>
        <!--Slide captions displayed here-->
        <div id="slidecaption">
		  <script>
            jQuery(function($){			
                    $.supersized({			
                        // Functionality
                        slide_interval          :   5000,		// Length between transitions
                        transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                        transition_speed		:	1000,		// Speed of transition															   
                        // Components							
                        slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
                        slides 					:  	[			// Slideshow Images	
                        {image : '<?php echo get_template_directory_uri(); ?>/image/wall/01.jpg', title : '<h1>Business Life in The City</h1> <h2>"You can change your life"</h2>'},
                        {image : '<?php echo get_template_directory_uri(); ?>/image/wall/02.jpg', title : '<h1>The New York City</h1> <h2>"Duis eleifend suscipit pellentesque"</h2>'},
						{image : '<?php echo get_template_directory_uri(); ?>/image/wall/03.jpg', title : '<h1>A Black Night in The City</h1> <h2>"Vivamus euismod luctus tempus"</h2>'},
						{image : '<?php echo get_template_directory_uri(); ?>/image/wall/04.jpg', title : '<h1>New World in The City</h1> <h2>"Nulla augue urna, dictum eu luctus"</h2>'},												
                                                    ]	
                    });
                });
          </script>
        </div>
        <?php endif; endif; ?>
		
        <!--Navigation-->
    	<div id="list-slide">
        <ul id="slide-list"></ul>
    	</div>
        
    	<!--Time Bar-->
    	<div id="progress-back" class="load-item">
    	    <div id="progress-bar"></div>
    	</div>
    </div>
    <!-- Slider End-->
    
    <!-- Clear-->
    <div class="clear"></div>
    
    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tabmenu_onoff') ) : ?>
    <div class="grid_16 margin20">
    </div>
    <?php else : ?>
    <!-- Tab Menu Start-->
    <div id="tabmenu" class="grid_16 margin">
      
      <div id="tab-gradident"></div>
      <div id="tabback"></div>
      <div id="tabmenuback"></div>
      <script type="text/javascript">
      $(document).ready(function() {
          $('#classytabs').classytabs({ root: '', rootlink: '',showbreadcrumb:true,ontabclick:function(tab){
          if(tab == 'portfolio')							
              $('#pages').smartpaginator({ totalrecords: 3,recordsperpage: 1, datacontainer: 'my-contents', dataelement: 'div', theme: 'black' });
                      } });            
         
      });	
      </script>
      
      <div id="tabmainmenu" class="grid_16 margin">
      	  <div class="big-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/bigshadow.png" alt=""></div>
          <div id="classytabs">
            <!-- Tab Menu-->
            <ul class="tabs">
            
			<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tab1_title') ) : ?>
            <li> 
            <a href="#work" class="tabbutton1 first selected"> 
            
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tab1_icon') ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php get_option_tree( 'tab1_icon', '', 'true' ); ?>&h=48&w=48" alt="">
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/icon/1.png" alt="">
            <?php endif; endif; ?>
             
            <h1> <?php get_option_tree( 'tab1_title', '', 'true' ); ?> </h1> 
            <p><?php get_option_tree( 'tab1_title2', '', 'true' ); ?></p></a> </li>
            <?php else : ?>
            <li> <a href="#work" class="tabbutton1 first selected"> <img src="<?php echo get_template_directory_uri(); ?>/image/icon/1.png" alt=""> <h1> Work Portfolio </h1> <p>Lorem ipsum is simply</p></a> </li>
            <?php endif; endif; ?>
            
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tab2_title') ) : ?>
            <li>
            <a href="#aboutus" class="tabbutton2">
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tab2_icon') ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php get_option_tree( 'tab2_icon', '', 'true' ); ?>&h=48&w=48" alt="">
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/icon/2.png" alt="">
            <?php endif; endif; ?>
             
            <h1> <?php get_option_tree( 'tab2_title', '', 'true' ); ?> </h1> 
            <p><?php get_option_tree( 'tab2_title2', '', 'true' ); ?></p></a> </li>
            <?php else : ?>
            <li><a href="#aboutus" class="tabbutton2"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/2.png" alt=""> <h1> About We Us </h1> <p>Lorem ipsum is simply</p></a> </li>
            <?php endif; endif; ?>
            
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tab3_title') ) : ?>
            <li>
            <a href="#team" class="tabbutton3">
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tab3_icon') ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php get_option_tree( 'tab3_icon', '', 'true' ); ?>&h=48&w=48" alt="">
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/icon/3.png" alt="">
            <?php endif; endif; ?>
             
            <h1> <?php get_option_tree( 'tab3_title', '', 'true' ); ?> </h1> 
            <p><?php get_option_tree( 'tab3_title2', '', 'true' ); ?></p></a>
            <?php else : ?>
            <li><a href="#team" class="tabbutton3"><img src="<?php echo get_template_directory_uri(); ?>/image/icon/3.png" alt=""> <h1> Creative Team </h1> <p>Lorem ipsum is simply</p></a> </li>
            <?php endif; endif; ?>
            
            </ul>        
          <div class="clearfix"></div>
          
          <!-- Tab Menu Content-->
          <div id="tabs-content" class="tab-contents margin32">
          
          <!-- TAB MENU CONTENT #1 -->
          <div id="work" class="tab-content">
              
              <!-- #1 -->
              <div class="three-columb">
              	<script>
				$(function(){				
				
				  $('#columb').bxSlider({
					  mode: 'fade',
					  captions: true,
					  auto: false,
					  controls: true
				  });
				  
				  $('#columb2').bxSlider({
					  mode: 'fade',
					  captions: true,
					  auto: false,
					  controls: true
				  });
				  
				  $('#columb3').bxSlider({
					  mode: 'fade',
					  captions: true,
					  auto: false,
					  controls: true
				  });
				});	
			   </script>
              	
                
                <ul id="columb" class="columb-post">
                	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column_slide') ) : ?>
                    <?php
						if ( function_exists( 'get_option_tree' ) ) {
						  $slides = get_option_tree( 'column_slide', $option_tree, false, true, -1 );
						  foreach( $slides as $slide ) { ?>
                    
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo $slide['image']; ?>" title="<?php echo $slide['title']; ?>" class="team corner_zoom"></a></div>
                        <h1><a href="<?php echo $slide['link']; ?>"><?php echo $slide['title']; ?></a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $slide['image']; ?>&h=200&w=300" alt="" class="three-columb-img">
                    </div>
                    </li>
                    
					<?php } } ?>  
                    <?php else : ?>
                    
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">Work Portfolio One</a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/post/col1.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Two Is Here</a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/post/c1.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Three Is Here</a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/post/c2.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Four Is Here</a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/post/c3.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Five Is Here</a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/post/c4.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <?php endif; endif; ?>
                </ul>
              </div>
              
              <!-- #2 -->
              <div class="three-columb">
              	<ul id="columb2" class="columb-post">
                    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column_slide2') ) : ?>
                    <?php
						if ( function_exists( 'get_option_tree' ) ) {
						  $slides = get_option_tree( 'column_slide2', $option_tree, false, true, -1 );
						  foreach( $slides as $slide ) { ?>
                    
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo $slide['image']; ?>" title="<?php echo $slide['title']; ?>" class="team corner_zoom"></a></div>
                        <h1><a href="<?php echo $slide['link']; ?>"><?php echo $slide['title']; ?></a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $slide['image']; ?>&h=200&w=300" alt="" class="three-columb-img">
                    </div>
                    </li>
                          
					<?php } } ?>  
                    <?php else : ?>
                    
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">Work Portfolio Two</a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/post/col2.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Two Is Here</a></h1>
                         <img src="<?php echo get_template_directory_uri(); ?>/image/post/c5.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Three Is Here</a></h1>
                         <img src="<?php echo get_template_directory_uri(); ?>/image/post/c6.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Four Is Here</a></h1>
                         <img src="<?php echo get_template_directory_uri(); ?>/image/post/c7.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Five Is Here</a></h1>
                         <img src="<?php echo get_template_directory_uri(); ?>/image/post/c8.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <?php endif; endif; ?>
                </ul>
              </div>
              
              <!-- #3 -->
              <div class="three-columb">
              	<ul id="columb3" class="columb-post">
                    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column_slide3') ) : ?>
                    <?php
						if ( function_exists( 'get_option_tree' ) ) {
						  $slides = get_option_tree( 'column_slide3', $option_tree, false, true, -1 );
						  foreach( $slides as $slide ) { ?>
                    
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo $slide['image']; ?>" title="<?php echo $slide['title']; ?>" class="team corner_zoom"></a></div>
                        <h1><a href="<?php echo $slide['link']; ?>"><?php echo $slide['title']; ?></a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $slide['image']; ?>&h=200&w=300" alt="" class="three-columb-img">
                    </div>
                    </li>
					
					<?php } } ?>  
                    <?php else : ?>
                    
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">Work Portfolio Three</a></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/post/col3.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Two Is Here</a></h1>
                         <img src="<?php echo get_template_directory_uri(); ?>/image/post/c9.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Three Is Here</a></h1>
                         <img src="<?php echo get_template_directory_uri(); ?>/image/post/c10.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <li>
                    <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow.png" alt=""></div>
                    <div class="corner_ribbon">
                        <div class="corner_ribbon_top_left_black"><a href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Lorem ipsum is simply dummy data text printing." class="team corner_zoom"></a></div>
                        <h1><a href="#">The Title Four Is Here</a></h1>
                         <img src="<?php echo get_template_directory_uri(); ?>/image/post/c11.png" alt="" class="three-columb-img">
                    </div>
                    </li>
                    <?php endif; endif; ?>
                </ul>
              </div>
          </div>
          
          <!-- TAB MENU CONTENT #2 -->
          <div id="aboutus" class="tab-content">
              <div class="homepage-team">
              	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column2_title') ) : ?>
                
                <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow2.png" alt=""></div>
              	<img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php get_option_tree( 'column2_image', '', 'true' ); ?>&h=200&w=460" class="homepage-team-img" alt="">
                <h1><?php get_option_tree( 'column2_title', '', 'true' ); ?></h1>
                <p><?php get_option_tree( 'column2_des', '', 'true' ); ?></p>
                
                <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column2_button_title') ) : ?>
                <div class="margin1"><a href="<?php get_option_tree( 'column2_button_link', '', 'true' ); ?>" class="minibutton"><?php get_option_tree( 'column2_button_title', '', 'true' ); ?></a></div>
                <?php else : ?>
                <div class="margin1"><a href="#" class="minibutton">More</a></div>
                <?php endif; endif; ?> 
				
				<?php else : ?>
                               
                <div class="columb-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow2.png" alt=""></div>
              	<img src="<?php echo get_template_directory_uri(); ?>/image/post/middle.png" class="homepage-team-img" alt="">
                <h1>Why do we use it?</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p> <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing.</p>
                <div class="margin1"><a href="#" class="minibutton">More</a></div>
                
                <?php endif; endif; ?>             
              </div>
          </div>
          
          <!-- #3 -->
          <div id="team" class="tab-content">
              <div class="home-team">
              	<ul>
                	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column3_slide') ) : ?>
                    <?php
						if ( function_exists( 'get_option_tree' ) ) {
						  $slides = get_option_tree( 'column3_slide', $option_tree, false, true, -1 );
						  foreach( $slides as $slide ) { ?>
                    
                    <li>
                    <div class="columb-shadow2">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow3.png" alt="">
                    </div>
                    
                    <a class="team" href="<?php echo $slide['link']; ?>" title="<?php echo $slide['title']; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $slide['image']; ?>&h=80&w=130" alt="" class="home-team-img"></a>
                    <h1><?php echo $slide['title']; ?></h1>
                    <p><?php echo $slide['description']; ?></p>
                    </li>
					
					<?php } } ?>  
					<?php else : ?>
                    <li><div class="columb-shadow2"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow3.png" alt=""></div><a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="John Smith (General Manager) </br>Lorem ipsum is simply dummy data text printing"><img src="<?php echo get_template_directory_uri(); ?>/image/post/t1.png" alt="" class="home-team-img"></a><h1>John Smith</h1><p>General Menager</p></li>
                    <li><div class="columb-shadow2"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow3.png" alt=""></div><a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Marry Anderson (Ass. Manager) </br>Lorem ipsum is simply dummy data text printing"><img src="<?php echo get_template_directory_uri(); ?>/image/post/t2.png" alt="" class="home-team-img"></a><h1>Marry Anderson</h1><p>Ass. Manager</p></li>
                    <li><div class="columb-shadow2"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow3.png" alt=""></div><a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Micheal Fisher (Graphicer) </br>Lorem ipsum is simply dummy data text printing"><img src="<?php echo get_template_directory_uri(); ?>/image/post/t3.png" alt="" class="home-team-img"></a><h1>Micheal Fisher</h1><p>Graphicer</p></li>
                    <li><div class="columb-shadow2"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow3.png" alt=""></div><a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Alexsandra Smith (Personel Manager) </br>Lorem ipsum is simply dummy data text printing"><img src="<?php echo get_template_directory_uri(); ?>/image/post/t4.png" alt="" class="home-team-img"></a><h1>Alexsandra Smith</h1><p>Personel Manager</p></li>
                    <li><div class="columb-shadow2"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow3.png" alt=""></div><a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Matheus Prahk (Code Developer) </br>Lorem ipsum is simply dummy data text printing"><img src="<?php echo get_template_directory_uri(); ?>/image/post/t5.png" alt="" class="home-team-img"></a><h1>Matheus Prahk</h1><p>Code Developer</p></li>
                    <li><div class="columb-shadow2"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/minishadow3.png" alt=""></div><a class="team" href="<?php echo get_template_directory_uri(); ?>/image/post/bigimage.png" title="Philips Garden (Online Support) </br>Lorem ipsum is simply dummy data text printing"><img src="<?php echo get_template_directory_uri(); ?>/image/post/t6.png" alt="" class="home-team-img"></a><h1>Philips Gorden</h1><p>Online Support</p></li>
                    <?php endif; endif; ?> 
                </ul>
              </div>
              <div class="clear"></div>
              <div class="home-team-bottom">
              
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column3_button_title') ) : ?>
              <div class="margin2 fleft"><a href="<?php get_option_tree( 'column3_button_link', '', 'true' ); ?>" class="minibutton"><?php get_option_tree( 'column3_button_title', '', 'true' ); ?></a></div>
              
              <?php else : ?>
              
              <div class="margin2 fleft"><a href="#" class="minibutton">View All Team</a></div>
              <?php endif; endif; ?> 
              
              <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'column3_since_title') ) : ?>
              <h1><?php get_option_tree( 'column3_since_title', '', 'true' ); ?></h1>
              <?php else : ?>
              <h1>Since 1947-2012</h1>
              <?php endif; endif; ?> 
              
              </div>
          </div>
          </div>
        </div>
    </div>
    <!-- Tab Menu End-->
    
    <!-- Clear-->
    <div class="clear"></div>
    
    <?php endif; endif; ?>
    
    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'advertmenu_onoff') ) : ?>    
    <div class="grid_16 margin20">
    </div>
	<?php else : ?>
    
    <!-- Advert Start -->
    <div id="advert" class="grid_16 advert">
    	<div id="advertback"></div>
        <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'advert_text') ) : ?>
        
        <h1><?php get_option_tree( 'advert_text', '', 'true' ); ?></h1>
        
        <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'advert_button_show') ) : ?>
        
        <?php else : ?>
        
        <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'advert_button_title') ) : ?>
        <div class="margin3 fright"><a href="<?php get_option_tree( 'advert_button_link', '', 'true' ); ?>" class="minibutton"><?php get_option_tree( 'advert_button_title', '', 'true' ); ?></a></div>
		<?php else : ?>
        <div class="margin3 fright"><a href="#" class="minibutton">Only $9.99 Purchase</a></div>
        <?php endif; endif; ?>
        
        <?php endif; endif; ?>
        
		<?php else : ?>
        <h1>"Quisque lorem orci, scelerisque vel aliquet in, rutrum vitae enim"</h1>
        <div class="margin3 fright"><a href="#" class="minibutton">Only $9.99 Purchase</a></div>
        <?php endif; endif; ?>
    </div>
    <!-- Advert End -->
    
    <!-- Clear-->
    <div class="clear"></div>
    
    <?php endif; endif; ?>
    
    
    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'leftrightarea_onoff') ) : ?>
    <div class="grid_16 margin20">
    </div>
    <?php else : ?>
    
    <!-- What Says Our Company -->
    <div class="grid_8 margin leftsays">
    	<div id="full-bottom"></div>
    	<div class="title-2cloumb">
        	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'left_column_title') ) : ?>
            
            <h1><?php get_option_tree( 'left_column_title', '', 'true' ); ?></h1>
        	<p><?php get_option_tree( 'left_column_des', '', 'true' ); ?></p>
            
            <?php else : ?>
            <h1>What Says Our Company</h1>
        	<p>Lorem ipsum is simply data text</p>
            <?php endif; endif; ?>
        </div>
        <div class="leftcloumb-list">
        	<ul>
            	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'left_column_cat') ) : ?>
                
                <?php 
				$category = get_option_tree('left_column_cat');
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
                <li><div class="margin4 fright"><a href="#" class="minibutton2">More</a></div><img src="<?php echo get_template_directory_uri(); ?>/image/post/say1.png" alt="" class="leftcloumb-list-img"> <h1>William Crahenberg Says:</h1><p>In consequat velit tempor dui dapibus mollis. Morbi a risus felis. Nulla non odio nunc, sit amet.</p></li>
                <li><div class="margin4 fright"><a href="#" class="minibutton2">More</a></div><img src="<?php echo get_template_directory_uri(); ?>/image/post/say2.png" alt="" class="leftcloumb-list-img"> <h1>Marie Smith Do Says:</h1><p>In consequat velit tempor dui dapibus mollis. Morbi a risus felis. Nulla non odio nunc, sit amet.</p></li>
                <li><div class="margin4 fright"><a href="#" class="minibutton2">More</a></div><img src="<?php echo get_template_directory_uri(); ?>/image/post/say3.png" alt="" class="leftcloumb-list-img"> <h1>Mark John Gothenberg Says:</h1><p>In consequat velit tempor dui dapibus mollis. Morbi a risus felis. Nulla non odio nunc, sit amet.</p></li>
                <?php endif; endif; ?>
            </ul>
        </div>
    </div>
    <!-- What Says Our Company End -->
    
    <!-- Bigg Boss -->
    <div class="grid_8 margin">
    	<div class="title-2cloumb">
        	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'right_column_title') ) : ?>
            
            <h1><?php get_option_tree( 'right_column_title', '', 'true' ); ?></h1>
        	<p><?php get_option_tree( 'right_column_des', '', 'true' ); ?></p>
            
            <?php else : ?>
            <h1>The Big Boss Says</h1>
        	<p>Lorem ipsum is simply printing swith data text</p>
            <?php endif; endif; ?>
        </div>
        <div class="bussiness-boss">
            <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'right_column_cat') ) : ?>
                
			<?php 
            $category = get_option_tree('right_column_cat');
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
            
            <img src="<?php echo get_template_directory_uri(); ?>/image/post/biggboss.png" class="bussiness-boss-img" alt="">
            <div class="bussiness-shadow"><img src="<?php echo get_template_directory_uri(); ?>/image/theme/bigshadow2.png" alt=""></div>
            <h1>Micheal Smith Fisher:</h1>
            <p>"Phasellus dapibus rutrum mi, sed elementum felis placerat ac. Aenean gravida elementum arcu non ultrices. Proin pharetra ipsum vitae augue dignissim pharetra. Maecenas turpis leo, dignissim a elementum id, feugiat eget leo. Ut vitae neque aliquam orci blandit elementum eu id nibh. Class aptent taciti sociosqu ad litora."</p>
            
            <?php endif; endif; ?>
        </div>
    </div>
    <!-- Bigg Boss End -->
    <?php endif; endif; ?>

<?php get_footer(); ?>