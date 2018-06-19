
	<div class="footer">	
		<div class="right">BPO Global Services Limited © 2018</div>
		<div class="footForm">
			
			<?php wp_nav_menu(
              array(
                "menu"=>"website"
              )) 
          ?>
			<?php  

                      $menu_args1 = array(  
                          'menu'      => 'customServer',
                          //最外层容器的标签名，默认div  
                          'container' => 'div',  
                          //最外层容器的class名  
                          'container_class' => 'mainNav_td',  
                          //最外层容器的id名  
                          'container_id' => 'menu_ul',  
                          //导航菜单ul标签的class名  
                          'menu_class' => 'mainNav',  
                          //导航菜单ul标签的id名  
                          'menu_id' => "nav",  
                          
                          //备用的导航菜单函数，用于没有在后台设置导航时调用  
                          'fallback_cb' => 'the_main_nav',  
                          //显示在导航a标签之前  
                          'before' => '<div class="menu_item"><div style="width:100%; float:left;"><div class="before" style="height:2px; width:20px; float:left"></div></div><div style="width:100%; float:left;"><div style="width:98%; float:left; margin-left:2%;">',  
                          //显示在导航a标签之后  
                          'after' => '</div></div></div>',  
                          //指定显示的导航名，如果没有设置，则显示第一个  
                          'theme_location' => 'primary',  
                      );

                      wp_nav_menu($menu_args1) ?>

          
			<!-- <table class="table">
				<tr class="title">
					<td >網站訊息</td>
					<td>客戶服務</td>
					<td>BPO Global Services Limited</td>
				</tr>
				<tr class="first about">
					<td>關於我們</td>
					<td>聯絡我們</td>
					<td>+852 2151 2260</td>
				</tr>
				<tr class="about">
					<td>企業併購</td>
					<td>網站總導覽</td>
					<td>info@bpoglobal.co</td>
				</tr>
				<tr class="about">
					<td>企業架構重組</td>
					<td></td>
					<td>香港金鐘道95號統一中心17樓</td>
				</tr>
				<tr class="about">
					<td>資產傳承安排</td>
					<td></td>
					<td></td>
				</tr>
			</table> -->
		</div>		
	</div>
	
	

</div>
</div>
</body>
</html>