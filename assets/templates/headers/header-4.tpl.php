<?php require_once('templates/headers/head.tpl.php'); ?>

<body class="<?php if ($boxed) echo 'boxed'; ?> <?php if (isset($background)) echo $background; ?> clearfix" data-smooth-scrolling="1">     
<div class="vc_body">

<!-- Header Start -->
  <header data-active="<?php if (isset($page)) echo $page; ?>" class="header-4"  id="header">
  <div class="vc_primary-menu-wrapper">
    <div class="container">
      <div class="row">
          <nav class="vc_menu"> 
          	<div class="logo">
                <a href="index.php"> 
                    <img  alt="logo" src="img/logo-2.png"> 
                </a>
            </div>
            <div class="vc_btn-navbar">
              <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".vc_primary-menu"> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
            </div>
            <div class="vc_primary-menu pull-right">
				<?php include_once('templates/headers/primary-menu.tpl.php') ?>
            </div>
          </nav>
      </div>
    </div>
    </div>
    <div class="vc_secondary-menu-wrapper">
    	<div class="container"><div class="row">
              <div class="vc_secondary-menu">
                <div class="vc_contact-top-wrapper col-xs-12 col-sm-7 col-md-8 col-lg-9">
                  <div class="vc_contact-top pull-right">
                    <div class="pull-left">
                      <h5> <span> <i class="icon-envelope"> </i> email@yourcompany.com </span> </h5>
                    </div>
                    <div class="pull-left">
                      <h5> <span> <i class="icon-phone"> </i> +1-866-123-4569 </span> </h5>
                    </div>
                  </div>
                </div>
                <div class="vc_social-share-wrapper hidden-xs col-sm-5 col-md-4 col-lg-3">
                  <div class="vc_social-share vc_tight vc_inverse pull-right"> 
                      <a title="Twitter" class="twitter" href="#"> <i class="icon-twitter"></i> </a> 
                      <a title="Facebook" class="facebook" href="#"> <i class="icon-facebook"></i> </a> 
                      <a title="Gplus" class="gplus" href="#"> <i class=" icon-google-plus"></i> </a> 
                      <a title="linkedin" class="linkedin" href="#"> <i class="icon-linkedin"></i> </a> 
                      <a title="email" class="email" href="#"> <i class="icon-envelope"></i> </a> 
                      <a title="Rss" class="rss" href="#"> <i class="icon-rss"></i> </a> 
                  </div>
                </div>
              </div> 
		      <div class="vc_sub-menu-bg"><div class="element-1"></div><div class="element-2"></div></div>              
        </div></div>  
        <!-- container row --> 
    </div>
    <div class="vc_menu-bg"><div class="element-1"></div><div class="element-2"></div></div>
  </header>
  <!-- Header Ends --> 