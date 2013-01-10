<?php
class Custom_Post_Type
{
	public $post_type_name;
	public $post_type_args;
	public $post_type_labels;
	public $post_type_taxos;
	public $post_type_taxos_exits;
	public $post_type_meta_boxes;
	
	/* Class constructor */
	public function __construct($name, $args = array(),$labels = array())
	{
		// Set some important variables self::beautify( $string )
		$this->post_type_name 		= self::uglify($name);
		$this->post_type_args 		= $args;
		$this->post_type_labels 	= $labels;
		$this->post_type_taxos		= array();
		$this->post_type_taxos_exits= array();
		$this->post_type_meta_boxes = array();  
		// Add action to register the post type, if the post type does not already exist
		if(! post_type_exists($this->post_type_name))
		{
			add_action('init',array(&$this,'register_post_type'));  
			add_action('init',array(&$this,'push_taxonomy'));
			add_action('admin_init',array(&$this,'push_meta_box'));  
		}  
		add_action( 'init', self::load_language() );  
		add_action('init',array(&$this,'load_core_files'));
		add_shortcode('faq_collect', array(&$this, 'add_the_shortcode')); 
		add_action('admin_menu',array(&$this,'add_submenu'));
		add_action('admin_menu',array(&$this,'posts_orderby')); 	 
		// only for 5.3
		//$this->save();
		add_action('save_post',array(&$this,'save_data'));
	}
	
	/* Method which add the shortcode*/
	public function add_the_shortcode( $attr, $content = null )
	{
		include('inc/faq-collect.php');    
	}
	
	/* Method which load plugin page */
	public function posts_orderby($wp_join)
	{
		$orderby = 'menu_order ASC';
		return $orderby;
	}
	
	/* Method which add the submenu */
	public function add_submenu()
	{ 
		 add_submenu_page('edit.php?post_type=adonide_faq', __('Configuration', 'html-faq-page') , __('Configuration', 'html-faq-page') , 'manage_options', __FILE__, array(&$this,'load_plugin_config_page'));
       
	} 
	
	/* Method which load load plugin page */
	public function load_plugin_config_page()
	{
		include('inc/plugin-page.php');   
	}
	
	/* Method which load the core files */
	public function load_core_files()
	{
		// CSS file
		wp_register_style( 'html-faq-page-style', plugins_url('css/style.css', __FILE__) );
        wp_enqueue_style( 'html-faq-page-style' ); 
		// JS File
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://code.jquery.com/jquery-latest.min.js');
		wp_enqueue_script( 'jquery' ); 
		
		
	}
	
	/* Method which load the language files */
	public static function load_language(  )  
	{   
		// Load Plugin textdomain 
		load_plugin_textdomain( 'html-faq-page', false, basename(dirname(__FILE__) ).'/lang'); 
	}  
	
	/* Method which registers the post type */
	public function register_post_type()
	{
		// Capitilize the words and make it plural
		$name 	= self::beautify($this->post_type_name);
		$plural = $name.'s';
		
		// We set the default labels based on the post type name and plural. We overwrite them with the given labels.
		$labels = array_merge(
			//Default
			array(
				'name'                  => __('Questions', 'html-faq-page'),  
				'singular_name'         => __('Question', 'html-faq-page'),  
				'add_new'               => __('New Question', 'html-faq-page'),   
				'add_new_item'          => __('Add New Question', 'html-faq-page'), 
				'edit_item'             => __('Edit Question', 'html-faq-page'),  
				'new_item'              => __('New Question', 'html-faq-page'),  
				'all_items'             => __('All Questions', 'html-faq-page'), 
				'view_item'             => __('View Question', 'html-faq-page'), 
				'search_items'          => __('Search Question', 'html-faq-page'), 
				'not_found'             => __('No Question have been found', 'html-faq-page'),  
				'not_found_in_trash'    => __('No Question have been found in trash', 'html-faq-page'),
				'parent_item_colon'     => '',  
				'menu_name'             => __('Questions', 'html-faq-page'), 
			),
			// Given labels
			$this->post_type_labels
		);
		
		// Same principle as the labels. We set some defaults and overwrite them with the given arguments.
		$args = array_merge(
			// Default
			array(
				'label'                 => $plural,  
				'labels'                => $labels,  
				'public'                => true,  
				'show_ui'               => true,  
				'supports'              => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt', 'revisions' ),  
				'show_in_nav_menus'     => true,   
				'menu_icon' => plugins_url('icon.png', __FILE__), 
				'show_in_menu' => true,
			),
			// Given args
			$this->post_type_args
		);
		
		// Register the post type 
		register_post_type($this->post_type_name,$args);
	}
	
	/* Method to attach the taxonomy to the post type */
	public function add_taxonomy($name,$args = array(),$labels = array())
	{
		if(! empty($name))
		{
			// We need to know the post type name, so the new taxonomy can be attached to it.
			$post_type_name = $this->post_type_name;
			
			// Taxonomy properties
			$taxonomy_name		= self::uglify($name);
			$taxonomy_labels	= $labels;
			$taxonomy_args		= $args;
			
			if(! taxonomy_exists($taxonomy_name))
			{
				/* Create taxonomy and attach to the post type */
				$name 	= self::beautify($name);
				$plural	= $name.'s';
				
				// Default labels, overwrite them with the given labels.
				$labels = array_merge(
					//Default
					array(
						'name'				=> _x($plural, 'taxonomy general name'),
						'singular_name'		=> _x($name,'taxonomy singular name'),
						'search_items'		=> __('Search '.$plural),
						'all_items'			=> __('All '.$plural),
						'parent_item'		=> __('Parent '.$name),
						'parent_item_colon'	=> __('Parent '.$name.':'),
						'edit_item'			=> __('Edit '.$name),
						'update_item'		=> __('Update '.$name),
						'add_new_item'		=> __('Add New '.$name),
						'new_item_name'		=> __('New '.$name.' Name'),
						'menu_name'			=> __($name)
					),
					$taxonomy_labels
				);
				
				// Default arguments, overwritten with the given arguments
				$args = array_merge(
					// Default
					array(
						'label'				=> $plural,
						'labels'			=> $labels,
						'public'			=> true,
						'show_ui'			=> true,
						'show_in_nav_menus'	=> true,
						'_builtin'			=> false
					),
					// Given
					$taxonomy_args
				);
				
				/* only 5.3
				// Add the taxonomy to the post type
				add_action('init',
					function() use($taxonomy_name,$post_type_name,$args)
					{
						register_taxonomy($taxonomy_name,$post_type_name,$args);
					}
				);
				*/
				
				$temp = array(
					'name' 			=> $taxonomy_name,
					'object_type'	=> $post_type_name,
					'args' 			=> $args
				);
				array_push($this->post_type_taxos,$temp);
			
			}else{
				/* the taxo already exists. but attach to the post type */
				/* only 5.3
				add_action('init',
					function() use($taxonomy_name,$post_type_name)
					{
						register_taxonomy_for_object_type($taxonomy_name,$post_type_name);
					}
				);
				*/
				
				$temp = array(
					'name' 			=> $taxonomy_name,
					'object_type'	=> $post_type_name
				);
				array_push($this->post_type_taxos_exits,$temp);
			}
		}
	}
	
	/* only for under php 5.3 */
	public function push_taxonomy()
	{
		if(NULL != $this->post_type_taxos)
		{
			foreach($this->post_type_taxos as $taxo)
			{
				register_taxonomy($taxo['name'],$taxo['object_type'],$taxo['args']);
			}
		}
	
		if(NULL != $this->post_type_taxos_exits)
		{
			foreach($this->post_type_taxos_exits as $taxo)
			{
				register_taxonomy_for_object_type($taxo['name'],$taxo['object_type']);
			}		
		}
	}
	
	/* Attaches meta boxes to the post type */
	/*public function add_meta_box($title,$fields = array(),$context='normal',$priority = 'default')
	{
		if(!empty($title))
		{
			$temp = array(
				'title'		=> $title,
				'box_id'	=> self::uglify($title),
				'box_title'	=> self::beautify($title),
				'context'	=> $context,
				'priority'	=> $priority,
				'fields'	=> $fields
			);
			array_push($this->post_type_meta_boxes,$temp);
			 
			// We need to know the Post Type name again
			$post_type_name = $this->post_type_name;
			
			//Meta variables
			$box_id			= self::uglify($title);
			$box_title		= self::beautify($title);
			$box_context	= $context;
			$box_priority 	= $priority;
			
			// Make the fields global
			global $custom_fields;
			$custom_fields[$title] = $fields;
			
			add_action('admin_init',
				function() use($box_id,$box_title,$post_type_name,$box_context,$box_priority,$fields)
				{
					add_meta_box(
						$box_id,
						$box_title,
						function ($post,$data)
						{
							global $post;
							
							// Nonce field for some validation
							wp_nonce_field(plugin_basename(__FILE__),'custom_post_type');
							
							// Get all inputs from $data
							$custom_fields = $data['args'][0];
							
							// Get the saved values
							$meta = get_post_custom($post->ID);
							
							// Check the array and loop through it
							if(! empty($custom_fields))
							{
								// Loop through $custom_fields
								foreach($custom_fields as $label => $type)
								{
									$field_id_name = strtolower(str_replace(' ','_',$data['id'])).'_'.strtolower(str_replace(' ','_',$label));
									echo'<label for="'.$field_id_name.'">'.$label.'</label> <input type="text" name="custom_meta['.$field_id_name.']" id="'.$field_id_name.'" value="'.$meta[$field_id_name][0].'" />';
								}
							}
						},
						$post_type_name,
						$box_context,
						$box_priority,
						array($fields)
					);
				}
			); 
		}
	}
	*/
	public function push_meta_box()
	{
		if(NULL != $this->post_type_meta_boxes)
		{
			// Make the fields global
			global $custom_fields;
			$post_type_name = $this->post_type_name;
		
			foreach($this->post_type_meta_boxes as $meta_box)
			{
				
				$title 	= $meta_box['title'];
				$fields	= $meta_box['fields'];
				$custom_fields[$title] = $fields;
				
				add_meta_box(
					$meta_box['box_id'],
					$meta_box['box_title'],
					array(&$this,'callback_metabox'),
					$post_type_name,
					$meta_box['context'],
					$meta_box['priority'],
					array($fields)
				);
			}
		}
	}
	
	public function callback_metabox($post,$metabox)
	{
		global $post;		
		// Nonce field for some validation
		wp_nonce_field(plugin_basename(__FILE__),'custom_post_type');
				
		// Get all inputs from $data
		$custom_fields = $metabox['args'][0];
				
		// Get the saved values
		$meta = get_post_custom($post->ID);
				
		// Check the array and loop through it
		if(! empty($custom_fields))
		{
			// Loop through $custom_fields
			foreach($custom_fields as $label => $type)
			{
				$field_id_name = self::uglify($metabox['id']).'_'.self::uglify($label);
				echo'<label for="'.$field_id_name.'" style="min-width:80px;display:inline-block;padding:7px 0px;">'.$label.'</label>
				<input type="text" name="custom_meta['.$field_id_name.']" id="'.$field_id_name.'" value="'.$meta[$field_id_name][0].'" /><br>';
			}
		}
	}
	
	/* Listens for when the post type being saved */
	/*
	public function save()
	{
		// Need the post type name again
		$post_type_name = $this->post_type_name;
		
		add_action('save_post',
			function() use($post_type_name)
			{
				// Deny the Wordpress autosave function
				if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
				
				if(! wp_verify_nonce($_POST['custom_post_type'], plugin_basename(__FILE__))) return;
				
				global $post;
				if(isset($_POST) && isset($post->ID) && get_post_type($post->ID) == $post_type_name)
				{
					global $custom_fields;
					
					// Loop through each meta box
					foreach($custom_fields as $title => $fields)
					{
						// Loop through all fields
						foreach($fields as $label => $type)
						{
							$field_id_name = self::uglify($title).'_'.self::uglify($label);
							update_post_meta($post->ID,$field_id_name,$_POST['custom_meta'][$field_id_name]);
						}
					}
				}
			}
		);
	}
	*/
	
	public function save_data()
	{
		// Deny the Wordpress autosave function
		if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
				
		if(! wp_verify_nonce($_POST['custom_post_type'], plugin_basename(__FILE__))) return;
				
		global $post;
		if(isset($_POST) && isset($post->ID) && get_post_type($post->ID) == $this->post_type_name)
		{
			global $custom_fields;
					
			// Loop through each meta box
			foreach($custom_fields as $title => $fields)
			{
				// Loop through all fields
				foreach($fields as $label => $type)
				{
					$field_id_name = self::uglify($title).'_'.self::uglify($label);
					update_post_meta($post->ID,$field_id_name,$_POST['custom_meta'][$field_id_name]);
				}
			}
		}
	}
	
	public static function beautify($string)
	{
		return ucwords(str_replace('_',' ',$string));
	}
	public static function uglify($string)
	{
		return strtolower(str_replace(' ','_',$string));
	}
}
?>