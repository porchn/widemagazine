<article class="module width_full">
    <form class="main" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin_root/content/save');?>">
    <header><h3>Add New content</h3></header>
        <div class="module_content">

                <fieldset style="width:100%; float:left; margin-right: 3%;">
                    <label>ชื่อบทความ</label>
                    <input type="text" name="content_name" id="content_name" style="width:96%;" value="">
                </fieldset>

                <fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
                    <label>หมวดหลัก</label>
                    <select style="width:96%;" name="mcate" id="mcate">
                        <?php echo $mcate; ?>
                    </select>
                </fieldset>
                <fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
                    <label>หมวดย่อย</label>
                    <select style="width:96%;" name="scate" id="scate">
                        <?php echo $scate; ?>
                    </select>
                </fieldset><div class="clear"></div>

                <fieldset style="width:100%; float:left; margin-right: 3%;">
                    <label>content title(th)</label>
                    <textarea name="content_title" id="content_title" rows="6" style="width:96%;"></textarea>
                </fieldset>

                <fieldset style="width:100%; float:left; margin-right: 3%; border:0px !important; background:none;">
                    <textarea name="content_detail" id="content_detail" rows="6" style="width:96%;"></textarea>
                </fieldset>

                <fieldset>
                    <label>TAG (ขั้นด้วยเครื่องหมาย ",")</label>
                    <input type="text" name="tags_name" id="tags_name" style="width:96%;" value="">
                </fieldset>

                <fieldset>
                    <label>ชื่อผู้แต่งบทความ</label>
                    <input type="text" name="cont_authors" id="cont_authors" style="width:96%;" value="">
                </fieldset>

                <fieldset>
                    <label>Google Plus URL</label>
                    <input type="text" name="google_plus" id="google_plus" style="width:96%;" value="">
                </fieldset>

                <fieldset>
                    <label>รูปภาพ </label>
                    <input type="text" name="content_image_txt" id="content_image_txt" style="width:96%;" value="" onclick="BrowseServer('<?php echo $imagePath; ?>', 'content_image_txt' );">
                </fieldset>

            <div class="clear"></div>
        </div>
        <footer>
            <div class="submit_link">
            	<input type="hidden" value="" name="cont_id" id="cont_id">
                <input type="hidden" value="insert" name="action" id="action">
                <input type="submit" value="บันทึก" class="alt_btn">
            </div>
        </footer>
    </form>

</article><!-- end of post new article -->