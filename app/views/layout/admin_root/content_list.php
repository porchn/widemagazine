        <article class="module width_full">
        <header>
        	<h3 class="tabs_involved">contUCT LIST</h3>
        </header>

        <div class="tab_container">
            <table class="tablesorter" cellspacing="0"> 
            <thead> 
                <tr> 
                    <th>ID</th> 
                    <th>Content Name(th)</th> 
                    <th>Content Type</th> 
                    <th>Actions</th> 
                </tr> 
            </thead> 
            <tbody> 
            <?php
			foreach ($rs as $r) {
				$cont_name=unserialize($r['cont_name']);
            ?>
                <tr> 
                    <td><?php echo $r['cont_id'];?></td> 
                    <td><?php echo $cont_name['thailand'];?></td> 
                    <td><?php echo $r['cont_type'];?></td> 
                    <td>
                    	<a href="<?php echo base_url('backend/content/contentEdit/'.$r['cont_id']);?>"><input type="image" src="<?php echo base_url('assets/vendor/template_admin/images/icn_edit.png');?>" title="Edit"></a>
                    	<a href="<?php echo base_url('backend/content/contentDel/'.$r['cont_id']);?>"><input type="image" src="<?php echo base_url('assets/vendor/template_admin/images/icn_trash.png');?>" title="Trash"></a>
                    </td> 
                </tr>
            <?php
        	}
            ?>
            </tbody> 
            </table>
                        
        </div><!-- end of .tab_container -->
        
        </article>
        <!-- end of content manager article -->
