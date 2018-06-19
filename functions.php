<?php
function Being_add_editor_style(){
  add_editor_style( 'style.css' );//这样就会调用主题目录 CSS 文件夹的 custom-editor-style.css 文件
  wp_enqueue_style( 'style','get_template_directory_uri() '. '/style.css');
}
add_action( 'after_setup_theme', 'Being_add_editor_style' );


function create_post($key,$label, $noeditor, $withcomment) {
	if ($label =="") {
		$label = ucwords($key);
	}
	$labels = array(
	    'name' => $label,
	    'singular_name' => $label	    	  
    );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' =>$key),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => null,
    
  );
  if ($noeditor) {
  		$args['supports'] = array('title','thumbnail','author');
  }  else {
		$args['supports'] = array('title','editor','thumbnail','author');
  }	
  if ($withcomment) {
  		array_push($args['supports'],'comments');
  
  }	
	register_post_type( $key, $args );	
}


function create_posts(){
	create_post("importantdate", "Importantdate1", true,false);
}
register_nav_menus(array(
  'primary'=>'Primary Navigation'
));
add_action( 'init', 'create_posts' , 0 );
include_once('post-type.php'); 

?>