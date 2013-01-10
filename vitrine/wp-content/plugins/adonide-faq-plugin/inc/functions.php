<?php 
function get_html_faq_questions_taxonomies(){  
	$terms = get_terms('category');
	$count = count($terms);
	if ( $count > 0 ){ 
		?><div id="response"> </div> <?php
		foreach ( $terms as $term ) {
			get_html_faq_questions( $term->term_id ); 
		} 
	}
}

function get_html_faq_questions( $cat ){  
	$args = array('post_type' => 'adonide_faq', 'cat' => $cat, 'orderby' => 'menu_order', 'order' => 'ASC' ); 
		global $query_string; 
		$my_query = new WP_Query( $args ); 
		if ( $my_query->have_posts() ) {  
			$array = get_term_by('id', $cat, 'category', 'ARRAY_A');  
		}
	?>
	<div id="list"> 
			<?php 
			if ( $my_query->have_posts() ) { 
			?>
			<fieldset>
				<legend><?php echo $array[name];?> </legend>
				<ul>
				<?php
					$i=0;
					while ( $my_query->have_posts() ){ 
						$my_query->the_post();  
						$custom = get_post_custom(get_the_ID()); 
						?><li id="arrayorder_<?php echo get_the_ID();?>" class="dragbox_element"><?php echo get_the_title();?></li><?php
					$i++;
					} 
				?>
				</ul>
			</fieldset>
			<?php
			}			
			wp_reset_postdata();  
			?>  
		</fieldset>
	</div>
	<?php
}
?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 	
	  function slideout(){
		  setTimeout(function(){
		  $("#response").slideUp("slow", function () {
			  });
			
		}, 2000);
	}
	
    $("#response").hide();
	$(function() {
		$("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
			
			var order = $(this).sortable("serialize") + '&update=update'; 
			$.post( '<?php echo plugins_url('updateList.php', __FILE__);?>' , order, function(theResponse){
				$("#response").html(theResponse);
				$("#response").slideDown('slow');
				slideout();
			}); 															 
		}								  
		});
	});

});	
</script>