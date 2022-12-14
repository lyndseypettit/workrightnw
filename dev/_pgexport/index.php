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
                                     <li class="active">
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
                                     <li>
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
	Theme Main Banner
============================================== 
-->             
         <div id="theme-main-banner" class="banner-one"> 
             <div data-src="images/home/slide-1.jpg"> 
                 <div class="camera_caption"> 
                     <div class="container"> 
                         <p class="wow fadeInUp animated"><?php _e( 'The government they survive artical of fortune', 'workrightnw' ); ?></p> 
                         <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><?php _e( 'We IMPROVE YOUR', 'workrightnw' ); ?> <br/><?php _e( 'SALES EFFICIENCY', 'workrightnw' ); ?></h1> <a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s"><?php _e( 'CONTACT US', 'workrightnw' ); ?></a> 
                     </div>                         

                     <!-- /.container -->                         
                 </div>                     

                 <!-- /.camera_caption -->                     
             </div>                 
             <div data-src="images/home/slide-2.jpg"> 
                 <div class="camera_caption"> 
                     <div class="container"> 
                         <p class="wow fadeInUp animated"><?php _e( 'The government they survive artical of fortune', 'workrightnw' ); ?></p> 
                         <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><?php _e( 'We IMPROVE YOUR', 'workrightnw' ); ?> <br/><?php _e( 'SALES EFFICIENCY', 'workrightnw' ); ?></h1> <a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s"><?php _e( 'CONTACT US', 'workrightnw' ); ?></a> 
                     </div>                         

                     <!-- /.container -->                         
                 </div>                     

                 <!-- /.camera_caption -->                     
             </div>                 
             <div data-src="images/home/slide-3.jpg"> 
                 <div class="camera_caption"> 
                     <div class="container"> 
                         <p class="wow fadeInUp animated"><?php _e( 'The government they survive artical of fortune', 'workrightnw' ); ?></p> 
                         <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><?php _e( 'We IMPROVE YOUR', 'workrightnw' ); ?> <br/><?php _e( 'SALES EFFICIENCY', 'workrightnw' ); ?></h1> <a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s"><?php _e( 'CONTACT US', 'workrightnw' ); ?></a> 
                     </div>                         

                     <!-- /.container -->                         
                 </div>                     

                 <!-- /.camera_caption -->                     
             </div>                 
         </div>             

         <!-- /#theme-main-banner -->             
         <!-- 
=============================================
	Top Feature
============================================== 
-->             
         <div class="top-feature section-spacing"> 
             <div class="top-features-slide"> 
                 <div class="item"> 
                     <div class="main-content" style="background:#fafafa;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/1.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Consumer Insights', 'workrightnw' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'workrightnw' ); ?></p> 
                     </div>                         

                     <!-- /.main-content -->                         
                 </div>                     

                 <!-- /.item -->                     
                 <div class="item"> 
                     <div class="main-content" style="background:#f6f6f6;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/2.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Emerging Ideas', 'workrightnw' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'workrightnw' ); ?></p> 
                     </div>                         

                     <!-- /.main-content -->                         
                 </div>                     

                 <!-- /.item -->                     
                 <div class="item"> 
                     <div class="main-content" style="background:#efefef;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/3.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Thought Leadership', 'workrightnw' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'workrightnw' ); ?></p> 
                     </div>                         

                     <!-- /.main-content -->                         
                 </div>                     

                 <!-- /.item -->                     
                 <div class="item"> 
                     <div class="main-content" style="background:#e9e9e9;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/4.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Marketing Goals', 'workrightnw' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'workrightnw' ); ?></p> 
                     </div>                         

                     <!-- /.main-content -->                         
                 </div>                     

                 <!-- /.item -->                     
             </div>                 

             <!-- /.top-features-slide -->                 
         </div>             

         <!-- /.top-feature -->             
         <!-- 
=============================================
	About Company
============================================== 
-->             
         <div class="about-compnay section-spacing"> 
             <div class="container"> 
                 <div class="row"> 
                     <div class="col-lg-6 col-12">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/home/1.jpg" alt=""/>
                     </div>                         
                     <div class="col-lg-6 col-12"> 
                         <div class="text"> 
                             <div class="theme-title-one"> 
                                 <h2><?php _e( 'About Our Company', 'workrightnw' ); ?></h2> 
                                 <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family.', 'workrightnw' ); ?></p> 
                                 <p><?php _e( 'The government they survive as soldiers of fortune baby if you\'ve ever wondered the east side to a deluxe apartment.', 'workrightnw' ); ?></p> 
                             </div>                                 

                             <!-- /.theme-title-one -->                                 
                             <ul class="mission-goal clearfix"> 
                                 <li> <i class="icon flaticon-star"></i> 
                                     <h4><?php _e( 'Vision', 'workrightnw' ); ?></h4> 
                                 </li>                                     
                                 <li> <i class="icon flaticon-medal"></i> 
                                     <h4><?php _e( 'Missions', 'workrightnw' ); ?></h4> 
                                 </li>                                     
                                 <li> <i class="icon flaticon-target"></i> 
                                     <h4><?php _e( 'Goals', 'workrightnw' ); ?></h4> 
                                 </li>                                     
                             </ul>                                 

                             <!-- /.mission-goal -->                                 
                         </div>                             

                         <!-- /.text -->                             
                     </div>                         

                     <!-- /.col- -->                         
                 </div>                     

                 <!-- /.row -->                     
             </div>                 

             <!-- /.container -->                 
         </div>             

         <!-- /.about-compnay -->             
         <!-- 
=============================================
	Feature Banner
============================================== 
-->             
         <div class="feature-banner section-spacing"> 
             <div class="opacity"> 
                 <div class="container"> 
                     <h2><?php _e( 'We provide high quality services &amp; innovative solutions for the realiable growth', 'workrightnw' ); ?></h2> <a href="#" class="theme-button-one"><?php _e( 'GET A QUOTES', 'workrightnw' ); ?></a> 
                 </div>                     

                 <!-- /.container -->                     
             </div>                 

             <!-- /.opacity -->                 
         </div>             

         <!-- /.feature-banner -->             
         <!-- 
=============================================
	Service Style One
============================================== 
-->             
         <div class="service-style-one section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'Our SERVICES', 'workrightnw' ); ?></h2> 
                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'workrightnw' ); ?></p> 
                 </div>                     

                 <!-- /.theme-title-one -->                     
                 <div class="wrapper"> 
                     <div class="row"> 
                         <div class="col-xl-4 col-md-6 col-12"> 
                             <div class="single-service"> 
                                 <div class="img-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/3.jpg" alt=""/>
                                 </div>                                     
                                 <div class="text"> 
                                     <h5><a href="service-details.html"><?php _e( 'Business Services', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'The tiny ship today stiller', 'workrightnw' ); ?></p> <a href="service-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.single-service -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-xl-4 col-md-6 col-12"> 
                             <div class="single-service"> 
                                 <div class="img-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/4.jpg" alt=""/>
                                 </div>                                     
                                 <div class="text"> 
                                     <h5><a href="service-details.html"><?php _e( 'Consumer Product', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'The tiny ship today stiller', 'workrightnw' ); ?></p> <a href="service-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.single-service -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-xl-4 col-md-6 col-12"> 
                             <div class="single-service"> 
                                 <div class="img-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/5.jpg" alt=""/>
                                 </div>                                     
                                 <div class="text"> 
                                     <h5><a href="service-details.html"><?php _e( 'Financial Services', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'The tiny ship today stiller', 'workrightnw' ); ?></p> <a href="service-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.single-service -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-xl-4 col-md-6 col-12"> 
                             <div class="single-service"> 
                                 <div class="img-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/6.jpg" alt=""/>
                                 </div>                                     
                                 <div class="text"> 
                                     <h5><a href="service-details.html"><?php _e( 'Travel and Aviation', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'The tiny ship today stiller', 'workrightnw' ); ?></p> <a href="service-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.single-service -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-xl-4 col-md-6 col-12"> 
                             <div class="single-service"> 
                                 <div class="img-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/7.jpg" alt=""/>
                                 </div>                                     
                                 <div class="text"> 
                                     <h5><a href="service-details.html"><?php _e( 'Software Research', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'The tiny ship today stiller', 'workrightnw' ); ?></p> <a href="service-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.single-service -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-xl-4 col-md-6 col-12"> 
                             <div class="single-service"> 
                                 <div class="img-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/8.jpg" alt=""/>
                                 </div>                                     
                                 <div class="text"> 
                                     <h5><a href="service-details.html"><?php _e( 'Quality Resourcing', 'workrightnw' ); ?></a></h5> 
                                     <p><?php _e( 'The tiny ship today stiller', 'workrightnw' ); ?></p> <a href="service-details.html" class="read-more"><?php _e( 'READ MORE', 'workrightnw' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.single-service -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                     </div>                         

                     <!-- /.row -->                         
                 </div>                     

                 <!-- /.wrapper -->                     
                 <div class="contact-text"> 
                     <h4><?php _e( 'You can also send us an email and we???ll get in touch shortly, or Call us', 'workrightnw' ); ?></h4> 
                     <h5><a href="#"><?php _e( 'info@support.com', 'workrightnw' ); ?></a> <?php _e( '(or)', 'workrightnw' ); ?> <a href="#"><?php _e( '+1 234 6780 900', 'workrightnw' ); ?></a></h5> 
                 </div>                     
             </div>                 

             <!-- /.container -->                 
         </div>             

         <!-- /.service-style-one -->             
         <!--
=====================================================
	Testimonial Slider
=====================================================
-->             
         <div class="testimonial-section section-spacing"> 
             <div class="overlay"> 
                 <div class="container"> 
                     <div class="wrapper"> 
                         <div class="bg"> 
                             <div class="testimonial-slider"> 
                                 <div class="item"> 
                                     <p><?php _e( '??? A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ???', 'workrightnw' ); ?></p> 
                                     <div class="name"> 
                                         <h6><?php _e( 'Shawn Michael', 'workrightnw' ); ?></h6> <span><?php _e( 'Founder, Mnc Inc.', 'workrightnw' ); ?></span> 
                                     </div>                                         

                                     <!-- /.name -->                                         
                                 </div>                                     

                                 <!-- /.item -->                                     
                                 <div class="item"> 
                                     <p><?php _e( '??? A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ???', 'workrightnw' ); ?></p> 
                                     <div class="name"> 
                                         <h6><?php _e( 'Rashed Ka.', 'workrightnw' ); ?></h6> <span><?php _e( 'Founder, Mnc Inc.', 'workrightnw' ); ?></span> 
                                     </div>                                         

                                     <!-- /.name -->                                         
                                 </div>                                     

                                 <!-- /.item -->                                     
                                 <div class="item"> 
                                     <p><?php _e( '??? A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ???', 'workrightnw' ); ?></p> 
                                     <div class="name"> 
                                         <h6><?php _e( 'Mahfuz Riad', 'workrightnw' ); ?></h6> <span><?php _e( 'Founder, Mnc Inc.', 'workrightnw' ); ?></span> 
                                     </div>                                         

                                     <!-- /.name -->                                         
                                 </div>                                     

                                 <!-- /.item -->                                     
                             </div>                                 

                             <!-- /.testimonial-slider -->                                 
                         </div>                             

                         <!-- /.bg -->                             
                     </div>                         

                     <!-- /.wrapper -->                         
                 </div>                     

                 <!-- /.container -->                     
             </div>                 

             <!-- /.overlay -->                 
         </div>             

         <!-- /.testimonial-section -->             
         <!--
=====================================================
	Our Team
=====================================================
-->             
         <div class="our-team section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'Our TEAM', 'workrightnw' ); ?></h2> 
                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'workrightnw' ); ?></p> 
                 </div>                     

                 <!-- /.theme-title-one -->                     
                 <div class="wrapper"> 
                     <div class="row"> 
                         <div class="col-lg-3 col-sm-6 col-12"> 
                             <div class="team-member"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/team/1.jpg" alt=""/> 
                                     <div class="overlay"> 
                                         <div class="hover-content"> 
                                             <ul> 
                                                 <li>
                                                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                             </ul>                                                 
                                             <p><?php _e( 'The government they survive as soldiers of fortune.', 'workrightnw' ); ?></p> 
                                         </div>                                             

                                         <!-- /.hover-content -->                                             
                                     </div>                                         

                                     <!-- /.overlay -->                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="text"> 
                                     <h6><?php _e( 'Richards Mills', 'workrightnw' ); ?></h6> <span><?php _e( 'Sales Consultant', 'workrightnw' ); ?></span> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.team-member -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-lg-3 col-sm-6 col-12"> 
                             <div class="team-member"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/team/2.jpg" alt=""/> 
                                     <div class="overlay"> 
                                         <div class="hover-content"> 
                                             <ul> 
                                                 <li>
                                                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                             </ul>                                                 
                                             <p><?php _e( 'The government they survive as soldiers of fortune.', 'workrightnw' ); ?></p> 
                                         </div>                                             

                                         <!-- /.hover-content -->                                             
                                     </div>                                         

                                     <!-- /.overlay -->                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="text"> 
                                     <h6><?php _e( 'Mike Hussey', 'workrightnw' ); ?></h6> <span><?php _e( 'Founder, CEO', 'workrightnw' ); ?></span> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.team-member -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-lg-3 col-sm-6 col-12"> 
                             <div class="team-member"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/team/3.jpg" alt=""/> 
                                     <div class="overlay"> 
                                         <div class="hover-content"> 
                                             <ul> 
                                                 <li>
                                                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                             </ul>                                                 
                                             <p><?php _e( 'The government they survive as soldiers of fortune.', 'workrightnw' ); ?></p> 
                                         </div>                                             

                                         <!-- /.hover-content -->                                             
                                     </div>                                         

                                     <!-- /.overlay -->                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="text"> 
                                     <h6><?php _e( 'Jenilia D???sosa', 'workrightnw' ); ?></h6> <span><?php _e( 'Marketing Lead', 'workrightnw' ); ?></span> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.team-member -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                         <div class="col-lg-3 col-sm-6 col-12"> 
                             <div class="team-member"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/team/4.jpg" alt=""/> 
                                     <div class="overlay"> 
                                         <div class="hover-content"> 
                                             <ul> 
                                                 <li>
                                                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                                 <li>
                                                     <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                 </li>                                                     
                                             </ul>                                                 
                                             <p><?php _e( 'The government they survive as soldiers of fortune.', 'workrightnw' ); ?></p> 
                                         </div>                                             

                                         <!-- /.hover-content -->                                             
                                     </div>                                         

                                     <!-- /.overlay -->                                         
                                 </div>                                     

                                 <!-- /.image-box -->                                     
                                 <div class="text"> 
                                     <h6><?php _e( 'David Warner', 'workrightnw' ); ?></h6> <span><?php _e( 'SEO Analyst', 'workrightnw' ); ?></span> 
                                 </div>                                     

                                 <!-- /.text -->                                     
                             </div>                                 

                             <!-- /.team-member -->                                 
                         </div>                             

                         <!-- /.col- -->                             
                     </div>                         

                     <!-- /.row -->                         
                 </div>                     

                 <!-- /.wrapper -->                     
             </div>                 

             <!-- /.container -->                 
         </div>             

         <!-- /.our-team -->             
         <!--
=====================================================
	Theme Counter
=====================================================
-->             
         <div class="theme-counter section-spacing"> 
             <div class="container"> 
                 <div class="bg"> 
                     <h6><?php _e( 'Company Success', 'workrightnw' ); ?></h6> 
                     <h2><?php _e( 'Some fun facts about our consulting', 'workrightnw' ); ?></h2> 
                     <div class="cunter-wrapper"> 
                         <div class="row"> 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="30" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'workrightnw' ); ?></span>+
                                     </div>                                         
                                     <p><?php _e( 'Years of Excellence', 'workrightnw' ); ?></p> 
                                 </div>                                     

                                 <!-- /.single-counter-box -->                                     
                             </div>                                 

                             <!-- /.col- -->                                 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'workrightnw' ); ?></span>%
                                     </div>                                         
                                     <p><?php _e( 'Client Satisfaction', 'workrightnw' ); ?></p> 
                                 </div>                                     

                                 <!-- /.single-counter-box -->                                     
                             </div>                                 

                             <!-- /.col- -->                                 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'workrightnw' ); ?></span>
                                         <?php _e( 'k', 'workrightnw' ); ?>
                                     </div>                                         
                                     <p><?php _e( 'Cases Completed', 'workrightnw' ); ?></p> 
                                 </div>                                     

                                 <!-- /.single-counter-box -->                                     
                             </div>                                 

                             <!-- /.col- -->                                 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'workrightnw' ); ?></span>
                                     </div>                                         
                                     <p><?php _e( 'Consultants', 'workrightnw' ); ?></p> 
                                 </div>                                     

                                 <!-- /.single-counter-box -->                                     
                             </div>                                 

                             <!-- /.col- -->                                 
                         </div>                             

                         <!-- /.row -->                             
                     </div>                         

                     <!-- /.cunter-wrapper -->                         <a href="#" class="theme-button-one"><?php _e( 'VIEW CASE STUDIES', 'workrightnw' ); ?></a> 
                 </div>                     

                 <!-- /.bg -->                     
             </div>                 

             <!-- /.container -->                 
         </div>             

         <!-- /.theme-counter -->             
         <!--
=====================================================
	Free Consultation
=====================================================
-->             
         <div class="consultation-form section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'FREE CONSULTATION', 'workrightnw' ); ?></h2> 
                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'workrightnw' ); ?></p> 
                 </div>                     

                 <!-- /.theme-title-one -->                     
                 <div class="clearfix main-content no-gutters row"> 
                     <div class="col-xl-6 col-lg-5 col-12">
                         <div class="img-box"></div>
                     </div>                         
                     <div class="col-xl-6 col-lg-7 col-12"> 
                         <div class="form-wrapper"> 
                             <form action="<?php echo get_template_directory_uri(); ?>/#" class="theme-form-one"> 
                                 <div class="row"> 
                                     <div class="col-md-6">
                                         <input type="text" placeholder="Name *"/>
                                     </div>                                         
                                     <div class="col-md-6">
                                         <input type="text" placeholder="Phone *"/>
                                     </div>                                         
                                     <div class="col-md-6">
                                         <input type="email" placeholder="Email *"/>
                                     </div>                                         
                                     <div class="col-md-6"> 
                                         <select class="form-control" id="exampleSelect1"> 
                                             <option>
                                                 <?php _e( 'Service you???re looking for?', 'workrightnw' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Business Services', 'workrightnw' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Consumer Product', 'workrightnw' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Financial Services', 'workrightnw' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Software Research', 'workrightnw' ); ?>
                                             </option>                                                 
                                         </select>                                             
                                     </div>                                         
                                     <div class="col-12">
                                         <textarea placeholder="Message"></textarea>
                                     </div>                                         
                                 </div>                                     

                                 <!-- /.row -->                                     
                                 <button class="theme-button-one">
                                     <?php _e( 'GET A QUOTES', 'workrightnw' ); ?>
                                 </button>                                     
                             </form>                                 
                         </div>                             

                         <!-- /.form-wrapper -->                             
                     </div>                         

                     <!-- /.col- -->                         
                 </div>                     

                 <!-- /.main-content -->                     
             </div>                 

             <!-- /.container -->                 
         </div>             

         <!-- /.consultation-form -->             
         <!--
=====================================================
	Partner Slider
=====================================================
-->             
         <div class="partner-section bg-color"> 
             <div class="container"> 
                 <div class="row"> 
                     <div class="col-md-3 col-sm-4 col-12"> 
                         <h6><?php _e( 'OUR', 'workrightnw' ); ?> <br/><?php _e( 'PARTNERS', 'workrightnw' ); ?></h6> 
                     </div>                         
                     <div class="col-md-9 col-sm-8 col-12"> 
                         <div class="partner-slider"> 
                             <div class="item">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo/p-1.png" alt=""/>
                             </div>                                 
                             <div class="item">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo/p-2.png" alt=""/>
                             </div>                                 
                             <div class="item">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo/p-3.png" alt=""/>
                             </div>                                 
                             <div class="item">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo/p-4.png" alt=""/>
                             </div>                                 
                             <div class="item">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo/p-5.png" alt=""/>
                             </div>                                 
                         </div>                             
                     </div>                         
                 </div>                     
             </div>                 
         </div>             

         <!-- /.partner-section -->             
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
                                     <a href="#"><?php _e( 'FAQ???s', 'workrightnw' ); ?></a>
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