<?php extract(shortcode_atts(array('cat' => 'cat' ), $attr)); ?>
<!--  
HTML FAQ PAGE 2.0
Author: Adonide WP Team
 -->
<div id="html_faq_page"> 
	<?php 
		$args = array('post_type' => 'adonide_faq', 'cat' => $cat, 'orderby' => 'menu_order', 'order' => 'ASC' ); 
		global $query_string; 
		$my_query = new WP_Query( $args ); 
		if ( $my_query->have_posts() ) {  
			$i=1; 
			while ( $my_query->have_posts() ) { 
				$my_query->the_post();  
				$custom = get_post_custom(get_the_ID());   
				?>
				<li>
					<a class="open" href="#<?php echo $i;?>"><?php echo get_the_title();?></a>  
					<div class="content" id="<?php echo $i;?>" name="<?php echo $i;?>">
						<div class="answer">
							<?php 
							the_content();
							?>
						</div>
					</div>
				</li>
				<?php  
			$i++;
			}
		}
		wp_reset_postdata();
	?> 
	</ul> 
</div>
<script>
<?php	 
	for($j=1;$j<$i+1;$j++){
		?> 
		jQuery('#html_faq_page a[href$="#<?php echo $j;?>"]').click(function(){   
			jQuery("#<?php echo $j;?>").slideToggle();    
			if(jQuery('#html_faq_page a[href$="#<?php echo $j;?>"]').hasClass('open')){
				jQuery('#html_faq_page a[href$="#<?php echo $j;?>"]').removeClass('open');
				jQuery('#html_faq_page a[href$="#<?php echo $j;?>"]').addClass('close');
			}else{
				jQuery('#html_faq_page a[href$="#<?php echo $j;?>"]').removeClass('close');
				jQuery('#html_faq_page a[href$="#<?php echo $j;?>"]').addClass('open');
			}return(false);
		});
		
		<?php
	}
?> 
</script> 