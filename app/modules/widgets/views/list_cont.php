<li style="width:232px; margin-right:10px; margin-bottom:30px; text-align:center;">
	<div class="radius10 shadow" style="padding:5px; boder:1px solid #ccc; background:#fff;">
		<?php
			echo"<a href='".base_url($cont_type.'/detail/'.$cont_id)."'>".imageResize($cont_img,220,140,$cont_name,'radius10')."</a>";
		?>
	</div>
	<?php echo"<a href='".base_url($cont_type.'/detail/'.$cont_id)."'>".$cont_name."</a>";?>
</li>