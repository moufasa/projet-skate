<?php 
/*
Plugin Name: PSC cours
Plugin URI: http://example.com/
Description: custom post type utilisé pour les cours sur paris skate culture, important ne pas supprimer
Version: 0.1
Author: Fabax
Author URI: http://example.com/
*/

/**
 * Copyright (c) `date "+%Y"` Your Name. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

class PSC_cours_Post_type{
    public function __construct(){
        $this->register_post_type();
    }

    public function register_post_type(){
        
            $labels = array(
                'name' => 'cours',
                'singular_name' => 'cours',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New cours',
                'edit_item' => 'Edit cours',
                'new_item' => 'New cours',
                'all_items' => 'All cours',
                'view_item' => 'View cours',
                'search_items' => 'Search cours',
                'not_found' =>  'No cours found',
                'not_found_in_trash' => 'No cours found in Trash', 
                'parent_item_colon' => '',
                'menu_name' => 'cours'
             );

            $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true, 
                'show_in_menu' => true, 
                'query_var' => true,
                'rewrite' => array( 'slug' => 'cours' ),
                'capability_type' => 'post',
                'has_archive' => true, 
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                'slug' => 'cours/'
              ); 
            

     register_post_type( 'cours', $args );
    }
}

add_action( 'init', function(){
    new PSC_cours_Post_type();
});
