<?php get_header(); ?>

     <div class="main-page-wrapper"> 
         <!-- ===================================================
	Loading Transition
==================================================== -->             
         <div id="loader-wrapper"> 
             <div id="loader"></div>                 
         </div>             
         <!-- 
=============================================
	Theme Header One
============================================== 
-->             
         <header class="header-one"> 
             <div class="top-header"> 
                 <div class="container clearfix"> 
                     <div class="logo float-left">
                         <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.png" alt=""/></a>
                     </div>                         
                     <div class="address-wrapper float-right"> 
                         <ul> 
                             <li class="address"> <i class="icon flaticon-placeholder"></i> 
                                 <h6><?php _e( 'Address:', 'workrightnw' ); ?></h6> 
                                 <p><?php _e( '2A0, Queenstown St, USA.', 'workrightnw' ); ?></p> 
                             </li>                                 
                             <li class="address"> <i class="icon flaticon-multimedia"></i> 
                                 <h6><?php _e( 'Mail us:', 'workrightnw' ); ?></h6> 
                                 <p><?php _e( 'supporthere@mail.com', 'workrightnw' ); ?></p> 
                             </li>                                 
                             <li class="quotes">
                                 <a href="#"><?php _e( 'GET A QUOTES', 'workrightnw' ); ?></a>
                             </li>                                 
                         </ul>                             
                     </div>                         

                     <!-- /.address-wrapper -->                         
                 </div>                     

                 <!-- /.container -->                     
             </div>                 

             <!-- /.top-header -->                 
             <div class="theme-menu-wrapper"> 
                 <div class="container"> 
                     <div class="bg-wrapper clearfix"> 
                         <!-- ============== Menu Warpper ================ -->                             
                         <div class="menu-wrapper float-left"> 
                             <nav id="mega-menu-holder" class="clearfix"> 
                                 <ul class="clearfix"> 
                                     <li>
                                         <a href="#"><?php _e( 'Home', 'workrightnw' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="index.html"><?php _e( 'Home version one', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="index-2.html"><?php _e( 'Home version two', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="#"><?php _e( 'PAGES', 'workrightnw' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="about.html"><?php _e( 'About us', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="team.html"><?php _e( 'Our team', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="faq.html"><?php _e( 'Faq\'s', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="404.html"><?php _e( '404', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="shop.html"><?php _e( 'Shop', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="shop-details.html"><?php _e( 'Shop details', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="#"><?php _e( 'Third Level menu', 'workrightnw' ); ?></a> 
                                                 <ul> 
                                                     <li>
                                                         <a href="#"><?php _e( 'Demo one', 'workrightnw' ); ?></a>
                                                     </li>                                                         
                                                     <li>
                                                         <a href="#"><?php _e( 'Demo two', 'workrightnw' ); ?></a>
                                                     </li>                                                         
                                                 </ul>                                                     
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="#"><?php _e( 'Service', 'workrightnw' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="service.html"><?php _e( 'Service Version one', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="service-v2.html"><?php _e( 'Service version two', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="service-details.html"><?php _e( 'Service Details', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="#"><?php _e( 'Portfolio', 'workrightnw' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="project.html"><?php _e( 'project', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="project-details.html"><?php _e( 'Project details', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li class="active">
                                         <a href="#"><?php _e( 'Blog', 'workrightnw' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="blog.html"><?php _e( 'Blog List', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="blog-grid.html"><?php _e( 'Blog Grid', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="blog-details.html"><?php _e( 'Blog details', 'workrightnw' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="contact.html"><?php _e( 'contact', 'workrightnw' ); ?></a>
                                     </li>                                         
                                 </ul>                                     
                             </nav>                                 

                             <!-- /#mega-menu-holder -->                                 
                         </div>                             

                         <!-- /.menu-wrapper -->                             
                         <div class="right-widget float-right"> 
                             <ul> 
                                 <li class="social-icon"> 
                                     <ul> 
                                         <li>
                                             <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li>
                                             <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li>
                                             <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li>
                                             <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                         </li>                                             
                                     </ul>                                         
                                 </li>                                     
                                 <li class="cart-icon"> <a href="#"><i class="flaticon-tool"></i> <span><?php _e( '2', 'workrightnw' ); ?></span></a> 
                                 </li>                                     
                                 <li class="search-option"> 
                                     <div class="dropdown"> 
                                         <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                             <i class="fa fa-search" aria-hidden="true"></i>
                                         </button>                                             
                                         <form action="<?php echo get_template_directory_uri(); ?>/#" class="dropdown-menu"> 
                                             <input type="text" Placeholder="Enter Your Search"/> 
                                             <button>
                                                 <i class="fa fa-search"></i>
                                             </button>                                                 
                                         </form>                                             
                                     </div>                                         
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.right-widget -->                             
                     </div>                         

                     <!-- /.bg-wrapper -->                         
                 </div>                     

                 <!-- /.container -->                     
             </div>                 

             <!-- /.theme-menu-wrapper -->                 
         </header>             

         <!-- /.header-one -->             
         <!-- 
=============================================
	Theme Inner Banner
============================================== 
-->             
         <div class="theme-inner-banner section-spacing"> 
             <div class="overlay"> 
                 <div class="container"> 
                     <h2><?php _e( 'Blog', 'workrightnw' ); ?></h2> 
                 </div>                     

                 <!-- /.container -->                     
             </div>                 

             <!-- /.overlay -->                 
         </div>             

         <!-- /.theme-inner-banner -->             
         <!-- 
=============================================
	Our Blog
============================================== 
-->             
         <div class="blog-inner-page section-spacing"> 
             <div class="container"> 
                 <div class="row"> 
                     <div class="col-xl-9 col-lg-8 col-12 our-blog"> 
                         <div class="post-wrapper"> 
                             <div class="single-blog"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/9.jpg" alt=""/> 
                                     <div class="overlay">
                                         <a href="#" class="date"><?php _e( 'Feb 06, 2018', 'workrightnw' ); ?></a>
                                     </div>                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="post-meta"> 
                                     <h5 class="title"><a href="blog-details.html"><?php _e( 'Its like a kind of torture to have to watch the show', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family.', 'workrightnw' ); ?></p> <a href="blog-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?></a> 
                                 </div>                                     

                                 <!-- /.post-meta -->                                     
                             </div>                                 

                             <!-- /.single-blog -->                                 
                             <div class="single-blog"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/10.jpg" alt=""/> 
                                     <div class="overlay">
                                         <a href="#" class="date"><?php _e( 'Mar 23, 2018', 'workrightnw' ); ?></a>
                                     </div>                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="post-meta"> 
                                     <h5 class="title"><a href="blog-details.html"><?php _e( 'Flying away on a wing and a prayer', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family.', 'workrightnw' ); ?></p> <a href="blog-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?></a> 
                                 </div>                                     

                                 <!-- /.post-meta -->                                     
                             </div>                                 

                             <!-- /.single-blog -->                                 
                             <div class="single-blog"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/11.jpg" alt=""/> 
                                     <div class="overlay">
                                         <a href="#" class="date"><?php _e( 'Feb 06, 2018', 'workrightnw' ); ?></a>
                                     </div>                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="post-meta"> 
                                     <h5 class="title"><a href="blog-details.html"><?php _e( 'The law since to eastern side of yellow mint', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family.', 'workrightnw' ); ?></p> <a href="blog-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?></a> 
                                 </div>                                     

                                 <!-- /.post-meta -->                                     
                             </div>                                 

                             <!-- /.single-blog -->                                 
                             <div class="single-blog"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/12.jpg" alt=""/> 
                                     <div class="overlay">
                                         <a href="#" class="date"><?php _e( 'Mar 23, 2018', 'workrightnw' ); ?></a>
                                     </div>                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="post-meta"> 
                                     <h5 class="title"><a href="blog-details.html"><?php _e( 'Rouble with the law since the day they was born', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family.', 'workrightnw' ); ?></p> <a href="blog-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?></a> 
                                 </div>                                     

                                 <!-- /.post-meta -->                                     
                             </div>                                 

                             <!-- /.single-blog -->                                 
                         </div>                             

                         <!-- /.post-wrapper -->                             
                         <div class="theme-pagination"> 
                             <ul> 
                                 <li>
                                     <a href="#"><?php _e( '1', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li class="active">
                                     <a href="#"><?php _e( '2', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                     </div>                         
                     <!-- ===================== Blog Sidebar ==================== -->                         
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar"> 
                         <div class="sidebar-container sidebar-search"> 
                             <form action="<?php echo get_template_directory_uri(); ?>/#"> 
                                 <input type="text" placeholder="Search..."/> 
                                 <button>
                                     <i class="fa fa-search" aria-hidden="true"></i>
                                 </button>                                     
                             </form>                                 
                         </div>                             

                         <!-- /.sidebar-search -->                             
                         <div class="sidebar-container sidebar-categories"> 
                             <h5 class="title"><?php _e( 'Categories', 'workrightnw' ); ?></h5> 
                             <ul> 
                                 <li>
                                     <a href="#"><?php _e( 'Travel and Aviation', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Business Services', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Consumer Products', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Financial Services', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Software Research', 'workrightnw' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.sidebar-categories -->                             
                         <div class="sidebar-container sidebar-recent-post"> 
                             <h5 class="title"><?php _e( 'Recent Posts', 'workrightnw' ); ?></h5> 
                             <ul> 
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/6.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'World don\'t move to beat of just one drum.', 'workrightnw' ); ?></a> 
                                         <div class="date">
                                             <?php _e( '5 minutes ago', 'workrightnw' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/7.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'Be right for you may not be right for some.', 'workrightnw' ); ?></a> 
                                         <div class="date">
                                             <?php _e( '2 days ago', 'workrightnw' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/8.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'World don\'t move to beat of just one drum.', 'workrightnw' ); ?></a> 
                                         <div class="date">
                                             <?php _e( '1 month ago', 'workrightnw' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.sidebar-recent-post -->                             
                         <div class="sidebar-container sidebar-archives"> 
                             <h5 class="title"><?php _e( 'Archives', 'workrightnw' ); ?></h5> 
                             <ul> 
                                 <li>
                                     <a href="#"><?php _e( 'January 2018', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'February 2018', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'March 2018', 'workrightnw' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.sidebar-archives -->                             
                         <div class="sidebar-tags"> 
                             <h5 class="title"><?php _e( 'tags', 'workrightnw' ); ?></h5> 
                             <ul class="clearfix"> 
                                 <li>
                                     <a href="#"><?php _e( 'Business', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Consulting', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Sales', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Startup', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li class="active">
                                     <a href="#"><?php _e( 'Marketing', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Services', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Financial', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Research', 'workrightnw' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.sidebar-tags -->                             
                     </div>                         

                     <!-- /.col- -->                         
                 </div>                     

                 <!-- /.row -->                     
             </div>                 

             <!-- /.container -->                 
         </div>             

         <!-- /.blog-inner-page -->             
         <!--
=====================================================
	Footer
=====================================================
-->             
         <footer class="theme-footer-one"> 
             <div class="top-footer"> 
                 <div class="container"> 
                     <div class="row"> 
                         <div class="col-xl-3 col-lg-4 col-sm-6 about-widget"> 
                             <h6 class="title"><?php _e( 'About OUR Consulting', 'workrightnw' ); ?></h6> 
                             <p><?php _e( 'That started from this tropic port aboard this tiny ship today still want by theam government they survive on up to thetre east side to a deluxe as soldiers of artics fortune.', 'workrightnw' ); ?></p> 
                             <div class="queries">
                                 <i class="flaticon-phone-call"></i> 
                                 <?php _e( 'Any Queries :', 'workrightnw' ); ?> <a href="#"><?php _e( '(+1) 234 567 900', 'workrightnw' ); ?></a>
                             </div>                                 
                         </div>                             

                         <!-- /.about-widget -->                             
                         <div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post"> 
                             <h6 class="title"><?php _e( 'RECENT POSTS', 'workrightnw' ); ?></h6> 
                             <ul> 
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/1.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'Till wanted by theam govern they survive as soldiers.', 'workrightnw' ); ?></a> 
                                         <div class="date">
                                             <i class="fa fa-calendar-o" aria-hidden="true"></i> 
                                             <?php _e( 'Feb 06, 2018', 'workrightnw' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'World don\'t move to beat of just one drum.', 'workrightnw' ); ?></a> 
                                         <div class="date">
                                             <i class="fa fa-calendar-o" aria-hidden="true"></i> 
                                             <?php _e( 'Mar 20, 2018', 'workrightnw' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.footer-recent-post -->                             
                         <div class="col-xl-2 col-lg-3 col-sm-6 footer-list"> 
                             <h6 class="title"><?php _e( 'SOLUTIONS', 'workrightnw' ); ?></h6> 
                             <ul> 
                                 <li>
                                     <a href="#"><?php _e( 'Travel and Aviation', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Business Services', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Consumer Products', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Financial Services', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Software Research', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Quality Resourcing', 'workrightnw' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.footer-list -->                             
                         <div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter"> 
                             <h6 class="title"><?php _e( 'NEWSLETTER', 'workrightnw' ); ?></h6> 
                             <form action="<?php echo get_template_directory_uri(); ?>/#"> 
                                 <input type="text" placeholder="Name *"/> 
                                 <input type="email" placeholder="Email *"/> 
                                 <button class="theme-button-one">
                                     <?php _e( 'SUBSCRIBE', 'workrightnw' ); ?>
                                 </button>                                     
                             </form>                                 
                         </div>                             
                     </div>                         

                     <!-- /.row -->                         
                 </div>                     

                 <!-- /.container -->                     
             </div>                 

             <!-- /.top-footer -->                 
             <div class="bottom-footer"> 
                 <div class="container"> 
                     <div class="row"> 
                         <div class="col-md-6 col-12">
                             <p><?php _e( '&copy; Copyrights 2018. All Rights Reserved.', 'workrightnw' ); ?></p>
                         </div>                             
                         <div class="col-md-6 col-12"> 
                             <ul> 
                                 <li>
                                     <a href="about.html"><?php _e( 'About', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="service.html"><?php _e( 'Solutions', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'FAQ’s', 'workrightnw' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="contact.html"><?php _e( 'Contact', 'workrightnw' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                     </div>                         
                 </div>                     
             </div>                 

             <!-- /.bottom-footer -->                 
         </footer>             

         <!-- /.theme-footer -->             
         <!-- Scroll Top Button -->             
         <button class="scroll-top tran3s"> <i class="fa fa-angle-up" aria-hidden="true"></i> 
         </button>             
         <!-- Optional JavaScript _____________________________  -->             
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->             
         <!-- jQuery -->                          
         <!-- Popper js -->                          
         <!-- Bootstrap JS -->                          
         <!-- Camera Slider -->                                                    
         <!-- menu  -->                          
         <!-- WOW js -->                          
         <!-- owl.carousel -->                          
         <!-- js count to -->                                       
         <!-- Fancybox -->                          
         <!-- Theme js -->                          
     </div>         

     <!-- /.main-page-wrapper -->                 

<?php get_footer(); ?>