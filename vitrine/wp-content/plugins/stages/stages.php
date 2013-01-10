<?php 
/*
Plugin Name: PSC stages
Plugin URI: http://example.com/
Description: custom post type utilisé pour les stages sur paris skate culture, important ne pas supprimer
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

class PSC_stages_Post_type{
    public function __construct(){
        $this->register_post_type();
    }

    public function register_post_type(){
        
            $labels = array(
                'name' => 'stages',
                'singular_name' => 'stages',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New stages',
                'edit_item' => 'Edit stages',
                'new_item' => 'New stages',
                'all_items' => 'All stages',
                'view_item' => 'View stages',
                'search_items' => 'Search stages',
                'not_found' =>  'No stages found',
                'not_found_in_trash' => 'No stages found in Trash', 
                'parent_item_colon' => '',
                'menu_name' => 'stages'
             );

            $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true, 
                'show_in_menu' => true, 
                'query_var' => true,
                'rewrite' => array( 'slug' => 'stages' ),
                'capability_type' => 'post',
                'has_archive' => true, 
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                'slug' => 'stages/'
              ); 
            

     register_post_type( 'stages', $args );
    }
}

add_action( 'init', function(){
    new PSC_stages_Post_type();
});
