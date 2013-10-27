<article class="module width_full">
    <form class="main" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin_root/content/save');?>">
    <header><h3>Add New content</h3></header>
        <div class="module_content">

                <fieldset>
                    <label>ประเภทบทความ</label><br>
                </fieldset>

                <fieldset style="width:100%; float:left; margin-right: 3%;">
                    <label>content name(th)</label>
                    <input type="text" name="content_name" id="content_name" style="width:92%;" value="">
                </fieldset>

                <fieldset style="width:100%; float:left; margin-right: 3%;">
                    <label>content title(th)</label>
                    <textarea name="content_title" id="content_title" rows="6" style="width:92%;"></textarea>
                </fieldset>

                <fieldset style="width:100%; float:left; margin-right: 3%;">
                    <label>content detail(th)</label>
                    <textarea name="content_detail" id="content_detail" rows="6" style="width:92%;"></textarea>
                </fieldset>


                <fieldset>
                    <label>รูปภาพสินค้าใหญ่ </label>
                    <?php echo $imagePath; ?>
                    <input type="text" name="content_image_txt" id="content_image_txt" value="" onclick="BrowseServer('<?php echo $imagePath; ?>', 'content_image_txt' );">
                </fieldset>

            <div class="clear"></div>
        </div>
        <footer>
            <div class="submit_link">
            	<input type="hidden" value="" name="content_id" id="cont_id">
                <input type="hidden" value="" name="sstatus" id="sstatus">
                <input type="submit" value="บันทึก" class="alt_btn">
            </div>
        </footer>
    </form>

</article><!-- end of post new article -->