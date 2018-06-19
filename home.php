

<?php
/**
 * Template Name:BPO首页
 * 
 */
get_header(); ?>
<div class="banner">
	<?php
		echo "<img src=".get_template_directory_uri()."/image/banner_a_1920x500.png";
	?>	
	
</div>
<div class="summeryContain">
	<div class="aboutUsContai">
		<h2 class="aboutUs">— 關於我們 —</h2><br>
		<div class="intro" ><span>BPO Global Services Limited </span>紮根香港，面向國際，為企業客戶度身定制專業穩妥的企業併購及資產傳承服務。<br><br>BPO Global遵行最高之誠信和準則，發揮自身專業優勢，整合法律及會計等專業團隊資源，配合企業客戶的實際<br>情況，用BPO Global豐富的企業重組經驗及智慧為客戶提供可行且富靈活些的解決方案。BPO Global重視與客<br>戶建立長期穩定的緊密聯繫，攜手引領客戶企業一路前行,陪伴客戶企業茁壯成長逐個征服新高度的里程碑</div>
	</div>
	<div class="profession">
		<div>BPO Global Services Limited的專業領域包括以下三大範圍</div>
		<div class="acquisition ">
			<?php
				echo "<img src=".get_template_directory_uri()."/image/m_and_a_200x200.png";
			?>
			<p><span>企業併購</span>為客戶尋找合適的投資項目</p>
			<!-- <div class="summarize"><span>企業併購</span>為客戶尋找合適的投資項目</div> -->
		</div>
		<div class="rebuild">
			<?php
				echo "<img src=".get_template_directory_uri()."/image/restructuring_200x200.png";
			?>
			<div class="summarize"><span>專業架構重組</span>為客戶的上市提供助力</div>
		</div>
		<div class="inherit">
			<?php
				echo "<img src=".get_template_directory_uri()."/image/assets_200x200.png";
			?>
			<div class="summarize"><span>資產傳承</span>為客戶建立家族信託基金<br>并參與培養企業接班人</div>
		</div>

	</div>

	
</div>
<?php get_footer(); ?>
