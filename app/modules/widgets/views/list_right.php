<div class="plist w738">
<table class="w738" cellpadding="0" cellspacing="0">
	<tr>
		<td style="text-align:center;">
			<div class="ptext left">
			<span>
			<?php 
				echo "<h2>".$prod_name."</h2>";
				echo"<br/>";
				echo nl2br($prod_title);
				echo"<br/>";
				echo"<span class='more'><a href='".base_url()."product/detail/".$prod_id."'>".$this->lang->line('more')."</a></span>";
				echo"<br/>";
			?>
			</span>
			</div>
		</td>
		<td>
			<div class="pimg right">
				<?php
					echo "<a href='".base_url()."product/detail/".$prod_id."'>".imageResize($prod_image,300,300,'รูปภาพสินค้า')."</a>";
				?>		
			</div>
		</td>
	</tr>
</table>
<div class="clearbot"></div>
</div>