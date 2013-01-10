<?php
/* 
Plugin Name: HTML FAQ Page
Plugin URI: http://wordpress.org/extend/plugins/adonide-faq-plugin/
Description: Integrate a HTML content ( text, video, link, ...) FAQ page into your Wordpress web site any where on your posts or pages
Version: 2.0
Author: Adonide WP Team
Author URI: http://www.tunicontact.com/nous-contactez/
/* ----------------------------------------------*/   
include('custom-post-type.php');  
$adonide = new Custom_Post_Type( 'Adonide Faq' );  
$adonide->add_taxonomy( 'category' ); 
?>