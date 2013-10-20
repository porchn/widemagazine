<?php require_once('templates/headers/head.tpl.php'); ?>

<body class="<?php if ($boxed) echo 'boxed'; ?> <?php if (isset($background)) echo $background; ?> clearfix" data-smooth-scrolling="1">     
<div class="vc_body">

<!-- Header Start -->
  <header data-active="<?php if (isset($page)) echo $page; ?>" class="header-1">
  <div class="vc_primary-menu-wrapper">
    <div class="container">
      <div class="row">
          <nav class="vc_menu"> 
          	<div class="logo">
                <a href="index.php"> 
                    <img  alt="logo" src="img/logo.png"> 
                </a>
            </div>
            <div class="vc_btn-navbar">
              <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".vc_primary-menu"> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
            </div>
            <div class="vc_primary-menu">
              <ul>
                <li> <a href="#"> Long <i class="icon-caret-down"> </i> </a> 
                  <div class="vc_menu-open-right vc_mega-menu long-width">
                  	<div class="child-menu">                     
                       <h3>Long Width</h3> 
                        <div class="vc_line-full"></div>                                                          
                        <div class="row">
                            <div class="col-md-4">
                            	<div class="vc_paper">
                            		<h5>One Third</h5>
                                	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div> 
                            <div class="col-md-4">
                            	<div class="vc_paper">
                            		<h5>One Third</h5>
                                	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                </div>                            </div> 
                            <div class="col-md-4">
                            	<div class="vc_paper">
                            		<h5>One Third</h5>
                                	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                </div>                            </div>                                                         
                        </div>  
                        <br/>     
                        <div class="row">
                            <div class="col-md-6">
                            	<a href="blog-single.php"><img alt="example image" src="img/blog/01.jpg"></a>
                            </div> 
                            <div class="col-md-6">
                            	<h4>Your Blog Here Maybe?</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <p><a class="vc_btn btn-small" href="blog-single.php">Read More &nbsp;<i class=" icon-chevron-sign-right"></i></a></p>
                            </div>                                                          
                        </div>                                                           
                    </div>   <!-- child-menu -->                    
                  </div>     <!-- vc_mega-menu -->           
                </li>                 
                <li> <a href="#"> Medium <i class="icon-caret-down"> </i> </a> 
                  <div class="vc_menu-open-right vc_mega-menu medium-width">
                  	<div class="child-menu">                    
                       <h3>Responsive Mega Menu</h3> 
                        <div class="vc_line"></div>                                               
                        <div class="row">
                            <div class="col-md-12">
                                <p>Responsive Mega Menu integrated with bootstrap column class("span"). From small, medium, large, to full width options available.</p>
                            </div>                   
                        </div>                                            
                        <div class="row">
                          <div class="col-md-3 text-center vc_column">
                            <span class="large"> 
                              <i class="icon-fullscreen"></i>
                              Responsive
                            </span> 
                          </div>
                          <div class="col-md-3 text-center vc_column">
                            <span class="large"> 
                              <i class="icon-thumbs-up"></i>
                              Easy Use
                            </span> 
                          </div>                          
                          <div class="col-md-3 text-center vc_column">
                            <span class="large">  
                              <i class="icon-resize-horizontal"></i>
                              Custom Width
                            </span> 
                          </div>
                          <div class="col-md-3 text-center vc_column">
                            <span class="large"> 
                              <i class="icon-mail-forward"></i>
                              Examples
                            </span> 
                          </div>                                                    
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a class="vc_btn" href="">View All Examples of Mega Menu &nbsp;<i class=" icon-chevron-sign-right"></i></a>
                            </div>                                                                         
                        </div>                                            
                    </div> <!-- child-menu -->                      
                  </div>   <!-- vc_mega-menu -->                 
                </li>
                <li> <a href="#"> Short <i class="icon-caret-down"> </i> </a> 
                  <div class="vc_menu-open-right vc_mega-menu short-width">
                  	<div class="child-menu">
                     
                       <h4>Short Width</h4> 
                        <div class="vc_line"></div>                                               
                        <div class="row">
                            <div class="col-md-12">
                            <p>Welcome, this is an example of short width mega menu. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="text-center">    
                                <button class="btn-small"><i class="icon-fast-backward"></i></button>
                                <button class="btn-small"><i class="icon-play"></i></button>
                                <button class="btn-small"><i class="icon-pause"></i></button>
                                <button class="btn-small"><i class="icon-stop"></i></button>                         
                                <button class="btn-small"><i class="icon-fast-forward"></i></button>                            
                            </div>              
                            </div>                                               
                        </div>  
                       
                    </div>
                       
                  </div>                
                </li>      
                         
                <li class="full-width"> <a href="#"> Full Width <i class="icon-caret-down"> </i> </a> 
                  <div class="vc_menu-open-right vc_mega-menu full-width">
                  	<div class="child-menu">                     
                                              
                        <div class="row">
                            <div class="col-md-9">
                                <h4>Full Width</h4> 
                                <div class="vc_line"></div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="vc_icon-round small vc_center">
                                          <div class="bg-wrapper">
                                            <div class="bg"> <i class="icon-rocket"> </i> </div>
                                          </div>
                                        </div>
                                        <div class="vc_splitter"></div>
                                        <p>Rock your website with these <strong>Vencorp Mega Menu</strong> ! </p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="vc_icon-round small inverted vc_center">
                                          <div class="bg-wrapper">
                                            <div class="bg"> <i class="icon-cogs"> </i> </div>
                                          </div>
                                        </div>
                                        <div class="vc_splitter"></div>
                                        <p> It's Responsive, So you don't have to worry about viewing from smaller devices.  </p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="vc_icon-round small vc_center">
                                          <div class="bg-wrapper">
                                            <div class="bg"> <i class=" icon-magic"> </i> </div>
                                          </div>
                                        </div>
                                        <div class="vc_splitter"></div>
                                        <p> Put your magic words here, and impress your customer! </p>
                                    </div>                                                                        
                                </div>
                                <p>Welcome, this is an example of short width mega menu. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <div class="vc_separator"></div>
                                <div class="text-center">  
                                    <div class="col-md-2">
                                        <img alt="example image" src="img/portfolio/01.jpg">
                                    </div>  
                                    <div class="col-md-2">
                                        <img alt="example image" src="img/portfolio/02.jpg">
                                    </div>  
                                    <div class="col-md-2">
                                        <img alt="example image" src="img/portfolio/03.jpg">
                                    </div>  
                                    <div class="col-md-2">
                                        <img alt="example image" src="img/portfolio/04.jpg">
                                    </div>  
                                    <div class="col-md-2">
                                        <img alt="example image" src="img/portfolio/01.jpg">
                                    </div>  
                                    <div class="col-md-2">
                                        <img alt="example image" src="img/portfolio/02.jpg">
                                    </div>  
                                                                                                   
                                </div>              
                            </div> 
                            <div class="col-md-3">
                                <h4>Some Sidebar?</h4> 
                                <div class="vc_line"></div> 

                                <ul class="vc_li">
                                  <li><a href="#">Drupal</a></li>
                                  <li><a href="#">Wordpress</a></li>
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">Web Design</a></li>
                                </ul>
                                <br/>
                                <div class="sidebar-widget widget block clearfix" >
                                  <h4> Our Office </h4>
                                  <div class="vc_line"></div>                                   
                                  <!-- Unremark this to use Flickr Replace User=xxx with your user id
                                  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=m&amp;layout=x&amp;source=user&amp;user=97929152%40N05"></script> -->
                                  <div class="vc_gallery">
                                    <ul>
                                      <li> <a href=""> <img src="img/office/01.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/02.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/03.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/04.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/05.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/06.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/07.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/08.jpg" alt="example image"> </a> </li>
                                      <li> <a href=""> <img src="img/office/09.jpg" alt="example image"> </a> </li>
                                    </ul>
                                  </div>
                                </div>
          
                            </div>                                                                           
                        </div>  
                       
                    </div>
                       
                  </div>                
                </li> 
                <li> <a href="#"> Simple <i class="icon-caret-down"> </i> </a> 
                  <div class="vc_menu-open-right vc_mega-menu short-width">
                  	<div class="child-menu">
                     
                         <div class="row" style="margin-bottom:0;">
                          <div class="col-md-4 text-center vc_column">
                            <a class="small" href="about.php"> 
                              <i class="icon-user"></i>
                              ABOUT
                            </a> 
                          </div>
                          <div class="col-md-4 text-center vc_column">
                            <a class="small"  href="pages-services.php"> 
                              <i class=" icon-bell-alt"></i>
                              SERVICES
                            </a> 
                          </div>                         
                          <div class="col-md-4 text-center vc_column">
                            <a class="small"  href="pages-career.php"> 
                              <i class="icon-coffee"></i>
                              CAREER
                            </a> 
                          </div>                                                 
                        </div>
                       
                    </div>
                       
                  </div>                
                </li>  
                
                <li> <a href="#"> Open Left <i class="icon-caret-down"> </i> </a> 
                  <div class="vc_menu-open-left vc_mega-menu medium-width">
                  	<div class="child-menu">
                     
                         <div class="row" style="margin-bottom:0;">
                          <div class="col-md-3 text-center vc_column">
                            <a class="medium" href="about.php"> 
                              <i class="icon-user"></i>
                              ABOUT
                            </a> 
                          </div>
                          <div class="col-md-3 text-center vc_column">
                            <a class="medium"  href="pages-services.php"> 
                              <i class=" icon-bell-alt"></i>
                              SERVICES
                            </a> 
                          </div>                         
                          <div class="col-md-3 text-center vc_column">
                            <a class="medium"  href="pages-career.php"> 
                              <i class="icon-coffee"></i>
                              CAREER
                            </a> 
                          </div>     
                          <div class="col-md-3 text-center vc_column">
                            <a class="medium"  href="features-pricing-tables.php"> 
                              <i class="icon-screenshot"></i>
                              PRICING TABLES
                              
                            </a> 
                          </div>                                                                      
                        </div>
                       
                    </div>
                       
                  </div>                
                </li>  
                <li> <a href="#"> Contact Form <i class="icon-caret-down"> </i> </a> 
                  <div class="vc_menu-open-left vc_mega-menu short-width">
                  	<div class="child-menu">
                     
                      <div id="vc_contact-form-widget" class="widget">
						<?php require_once('templates/widgets/widget-quick-contact.tpl.php'); ?>
                      </div>
                      <!--  #vc_blog-list-widget .col-md-4 --> 
                       
                    </div>
                       
                  </div>                
                </li>  

              </ul>
            </div>
            <div class="vc_menu-search-wrapper pull-right">
              <form class="vc_menu-search" method="post" action="#">
                <input type="text" name="search" class="vc_menu-search-text" required placeholder="Search">
                <div class="vc_menu-search-submit"> </div>
              </form>
            </div>
            <!-- In menu search form ends --> 
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
                  <div class="vc_social-share vc_tight pull-right"> 
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