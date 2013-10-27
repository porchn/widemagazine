		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Product Management</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="<?php echo base_url('admin_root/product/productadd');?>">Add New Product</a></li>
			<li class="icn_folder"><a href="<?php echo base_url('admin_root/product/product');?>">Edit Product List</a></li>
		</ul>
		<h3>Content Management</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="<?php echo base_url('admin_root/content/contentAdd');?>">Content Add</a></li>
			<li class="icn_folder"><a href="<?php echo base_url('admin_root/content');?>">Content List</a></li>
		</ul>
		<h3>About Management</h3>
		<ul class="toggle">
			<li class="icn_edit_article"><a href="<?php echo base_url('admin_root/about');?>">Edit About US</a></li>
		</ul>
		<h3>Banner Management</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="<?php echo base_url('admin_root/banner/bannerAdd');?>">Add Banner</a></li>
			<li class="icn_folder"><a href="<?php echo base_url('admin_root/banner/index');?>">Banner List</a></li>
		</ul>
		<h3>FirstPage Management</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="<?php echo base_url('admin_root/firstpage/firstAdd');?>">Add FirstPage</a></li>
			<li class="icn_folder"><a href="<?php echo base_url('admin_root/firstpage/index');?>">FirstPage List</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="<?php echo base_url('admin_root/home/logout');?>">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
			<p>Theme by <a href="#">Cheriez</a></p>
		</footer>
