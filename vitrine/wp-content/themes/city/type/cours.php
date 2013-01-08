<?php 

function codex_custom_init() {
  $labels = array(
    'name' => 'cours',
    'singular_name' => 'cours',
    'add_new' => 'Ajouter un cour',
    'add_new_item' => 'Ajouter un cour',
    'edit_item' => 'Editer un cour',
    'new_item' => 'Nouveau cours',
    'all_items' => 'Tous les cours',
    'view_item' => 'voir les cours',
    'search_items' => 'Rechercher un cour',
    'not_found' =>  'Pas de cours trouvé',
    'not_found_in_trash' => 'Pas de cours trouvé dans la poubelle', 
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
    'menu_position' => 5
    ,
    'supports' => array( 'title', 'editor','thumbnail', 'excerpt' )
  ); 

  register_post_type( 'cours', $args );
}
add_action( 'init', 'codex_custom_init' );

 ?>