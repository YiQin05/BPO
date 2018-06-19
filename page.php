<?php
/* Template Name:  page */
	// get_header();
?>
<html>
	<head>
		<style type="text/css">
			html, body {
				position:absolute;
				left:0;
				top:0;
				padding:0;	
				margin:0;
				width:100%;
				height:100%;
				min-height:100%;	
				background-color:red;		
			}
			*{
				box-sizing:border-box;
			}
			.header {
				width:100%;				
				height:100px;
				background-color:blue;
			}
			.content {
				min-height:100%;
				position:relative;

				width:100%;
				padding-bottom:120px;
				background-color:green;
			}
			.footer {
				width:100%;
				height:120px;
				position:absolute;
				left:0;
				bottom:0;
				background-color:yellow;				
			}
		</style>
	</head>
	<body>
		
		<div class="content">
		<div class="header">
		</div>
<!-- up in header.php -->

<div style="width:100%;height:300px">abc</div>

<!-- down in footer.php -->


		<div class="footer">
		</div>
		</div>
	</body>
</html>
<?php 
	//get_footer();
?>