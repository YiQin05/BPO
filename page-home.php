<?php
 /*Template Name: 首頁*/
 ?>
<?php get_header();?>

<?php
	$page = get_page();
	$content = apply_filters('the_content',$page->post_content);
	echo $content;
?>



<?php get_footer();?>
