<?php 
/* Template Name: Upload-important-date */
header('Content-Type: application/json; charset=UTF-8');?>


<?php
// $result = new stdClass();
$school_name = $_POST['school_name'];
$school_date = $_POST['school_date'];
$school_event = $_POST['school_event'];
$school_event_detail = $_POST['uw'];
$result = new stdClass();
/*$result->result = true;
$result->data = hello;*/
if($school_name!=null && $school_name!=""){
	$result->result = true;
	
	$result->school_name = $school_name;
	$result->school_date = $school_date;
	$result->school_event = $school_event;
	$result->school_event_detail = $school_event_detail;

	$new_post = array(
		'post_title' => $school_name,
		'post_status' => 'Pending',
		'post_type'=>'importantdate1' 
	);
	// wp_insert_post($new_post);
	wp_insert_post($new_post);
	$page = get_page_by_title($school_name,OBJECT,'importantdate1');
	$new_post_id = $page->ID;
	$result->post_id = $new_post_id;
	update_post_meta($new_post_id,"date",$school_date);
	update_post_meta($new_post_id,"event-type",$school_event);
	update_post_meta($new_post_id,"otherinfo",$school_event_detail);
	$post_status = get_post_status ($new_post_id);
	$result->post_status = $post_status;
	// $posts = get_page_by_title($school_name);
	// update_post_meta("")
	// $result->post_id = $posts->ID;
}else{
	$result->result = false;
	
	
}


echo preg_replace_callback(
    '/\\\\u([0-9a-zA-Z]{4})/',
    function ($matches) {
        return mb_convert_encoding(pack('H*',$matches[1]),'UTF-8','UTF-16');
    },
    json_encode($result)
);
?>

<div>哈哈哈</div>