<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php
       
        wp_title( '|', true, 'right' );
  
        echo 'BPO Global';      
  
        ?></title>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body <?php body_class() ?>>
  <div class="content">
	 <div class="head">
        <div class="logo">
            <?php 
            
                echo "<img src=".get_stylesheet_directory_uri()."/image/logo_100x80.png>";
            ?>
        </div>
        <div class="summa" >BPO G<span>LOBAL</span> S<span>ERVICES</span> L<span>IMITED</span></div>
        <div class="search">
            <input type="text" name="search">            
            <?php 
                echo "<img src=".get_stylesheet_directory_uri()."/image/search_30x30.png >";
            ?>
        </div>

        <div class="navi">
          <?php wp_nav_menu(
              array(
                "menu"=>"topmenu"
              )) 
          ?>
          <!--
            <div>                
                <div class="link first" ><a href="#">首頁</a></div><span class="line">|</span>                  
                <div class="link about"><a href="#">關於我們</a></div><span class="line">|</span>
                <div class="link connet"><a href="#">企業併購</a></div><span class="line">|</span>
                <div class="link inher"><a href="#">資產傳承安排</a></div><span class="line">|</span>
                <div class="link rebulid"><a href="#">企業架構重組</a></div><span class="line">|</span>
                <div class="link contact"><a href="#">聨絡我們</a></div>
                <div class="clear"></div>                
            </div>
          -->
        </div>

        <!-- 添加後台菜單 -->
        

    </div>
 	  <div>