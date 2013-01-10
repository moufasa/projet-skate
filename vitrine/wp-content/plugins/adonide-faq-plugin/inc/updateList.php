<?php 
require_once('../../../../wp-config.php');  
require_once('../../../../wp-includes/wp-db.php');
require_once('../../../../wp-includes/pluggable.php'); 
if ($_POST['update'] == "update"){
	global $wpdb;
	$table_name = $wpdb->prefix . 'posts';   
	$order	= $_POST['arrayorder']; 
	$counter = 1;
	foreach ( $order as $item_id ) { 
		$sql = 'UPDATE '.$table_name.' SET menu_order = '.$counter.' WHERE ID = '.$item_id.'';
		$result = $wpdb->query( $sql );
		$counter++; 
	}  
	$wpdb->print_error();
	if($result>0){
		_e( 'Questions order was updated !', 'html-faq-page');		
	}else{
		_e( 'An error while updating Questions !', 'html-faq-page');
	} 
} 
?>