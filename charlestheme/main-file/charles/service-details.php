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
                                 <h6><?php _e( 'Address:', 'charles_theme' ); ?></h6> 
                                 <p><?php _e( '2A0, Queenstown St, USA.', 'charles_theme' ); ?></p> 
                             </li>                                 
                             <li class="address"> <i class="icon flaticon-multimedia"></i> 
                                 <h6><?php _e( 'Mail us:', 'charles_theme' ); ?></h6> 
                                 <p><?php _e( 'supporthere@mail.com', 'charles_theme' ); ?></p> 
                             </li>                                 
                             <li class="quotes">
                                 <a href="#"><?php _e( 'GET A QUOTES', 'charles_theme' ); ?></a>
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
                                         <a href="#"><?php _e( 'Home', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="index.html"><?php _e( 'Home version one', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="index-2.html"><?php _e( 'Home version two', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="#"><?php _e( 'PAGES', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="about.html"><?php _e( 'About us', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="team.html"><?php _e( 'Our team', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="faq.html"><?php _e( 'Faq\'s', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="404.html"><?php _e( '404', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="shop.html"><?php _e( 'Shop', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="shop-details.html"><?php _e( 'Shop details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="#"><?php _e( 'Third Level menu', 'charles_theme' ); ?></a> 
                                                 <ul> 
                                                     <li>
                                                         <a href="#"><?php _e( 'Demo one', 'charles_theme' ); ?></a>
                                                     </li>                                                         
                                                     <li>
                                                         <a href="#"><?php _e( 'Demo two', 'charles_theme' ); ?></a>
                                                     </li>                                                         
                                                 </ul>                                                     
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li class="active">
                                         <a href="#"><?php _e( 'Service', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="service.html"><?php _e( 'Service Version one', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="service-v2.html"><?php _e( 'Service version two', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="service-details.html"><?php _e( 'Service Details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="#"><?php _e( 'Portfolio', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="project.html"><?php _e( 'project', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="project-details.html"><?php _e( 'Project details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="#"><?php _e( 'Blog', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li>
                                                 <a href="blog.html"><?php _e( 'Blog List', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="blog-grid.html"><?php _e( 'Blog Grid', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li>
                                                 <a href="blog-details.html"><?php _e( 'Blog details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li>
                                         <a href="contact.html"><?php _e( 'contact', 'charles_theme' ); ?></a>
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
                                 <li class="cart-icon"> <a href="#"><i class="flaticon-tool"></i> <span><?php _e( '2', 'charles_theme' ); ?></span></a> 
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
                     <h2><?php _e( 'SERVICES DETAILS', 'charles_theme' ); ?></h2> 
                 </div>                     

                 <!-- /.container -->                     
             </div>                 

             <!-- /.overlay -->                 
         </div>             

         <!-- /.theme-inner-banner -->             
         <!-- 
=============================================
	Service Details
============================================== 
-->             
         <div class="service-details section-spacing"> 
             <div class="container"> 
                 <div class="row"> 
                     <div class="col-xl-9 col-lg-8 col-12"> 
                         <div class="service-content"> 
                             <img src="<?php echo get_template_directory_uri(); ?>/images/home/20.jpg" alt="" class="cover-img"/> 
                             <h3 class="main-title"><?php _e( 'Business Services', 'charles_theme' ); ?></h3> 
                             <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for being a friend.', 'charles_theme' ); ?></p> 
                             <p><?php _e( 'That this group would somehow form a family that\'s the way we all became the Brady Bunch apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                             <p><?php _e( 'This tropic port aboard this tiny ship today still wanted by the government apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card.', 'charles_theme' ); ?></p> 
                             <div class="presentation-section"> 
                                 <h4 class="sub-heading"><?php _e( 'Company Presentation:', 'charles_theme' ); ?></h4> 
                                 <p><?php _e( 'That this group would somehow form a family that\'s the way we all became the Brady Bunch apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                                 <div class="row"> 
                                     <div class="col-md-6 col-12"> 
                                         <ul class="best-list-item"> 
                                             <li> <i class="icon flaticon-interface"></i> 
                                                 <h5><?php _e( 'Technology', 'charles_theme' ); ?></h5> 
                                                 <p><?php _e( 'The Love Boat soon will be making another run plore strange.', 'charles_theme' ); ?></p> 
                                             </li>                                                 
                                             <li> <i class="icon flaticon-technology"></i> 
                                                 <h5><?php _e( 'Innovation', 'charles_theme' ); ?></h5> 
                                                 <p><?php _e( 'The Love Boat soon will be making another run plore strange.', 'charles_theme' ); ?></p> 
                                             </li>                                                 
                                             <li> <i class="icon flaticon-chart"></i> 
                                                 <h5><?php _e( 'Integration', 'charles_theme' ); ?></h5> 
                                                 <p><?php _e( 'The Love Boat soon will be making another run plore strange.', 'charles_theme' ); ?></p> 
                                             </li>                                                 
                                         </ul>                                             
                                     </div>                                         
                                     <div class="col-md-6 col-12">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/home/pattern3.png" alt="" class="chart"/>
                                     </div>                                         
                                 </div>                                     
                             </div>                                 

                             <!-- /.presentation-section -->                                 
                             <div class="topics"> 
                                 <h4 class="sub-heading"><?php _e( 'Usefull Topics:', 'charles_theme' ); ?></h4> 
                                 <div class="accordion-one"> 
                                     <div class="panel-group theme-accordion" id="accordion"> 
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">  <?php _e( '1. What industries do you specialize in?', 'charles_theme' ); ?></a>  </h6> 
                                             </div>                                                 
                                             <div id="collapse1" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the govern ment they survive as soldiers of fortune to a deluxe you apartment that this group would somehow form a apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             

                                         <!-- /panel 1 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading active-panel"> 
                                                 <h6 class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">  <?php _e( '2. You guarantee that our plan will raise capital?', 'charles_theme' ); ?></a>  </h6> 
                                             </div>                                                 
                                             <div id="collapse2" class="panel-collapse collapse show"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the govern ment they survive as soldiers of fortune to a deluxe you apartment that this group would somehow form a apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             

                                         <!-- /panel 2 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">  <?php _e( '3. Do you ever invest in your clients?', 'charles_theme' ); ?></a>  </h6> 
                                             </div>                                                 
                                             <div id="collapse3" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the govern ment they survive as soldiers of fortune to a deluxe you apartment that this group would somehow form a apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             

                                         <!-- /panel 3 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">  <?php _e( '4. What makes your financial projections special?', 'charles_theme' ); ?></a>  </h6> 
                                             </div>                                                 
                                             <div id="collapse4" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the govern ment they survive as soldiers of fortune to a deluxe you apartment that this group would somehow form a apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             

                                         <!-- /panel 4 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title">  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">  <?php _e( '5. Will you agree with everything I say?', 'charles_theme' ); ?></a>  </h6> 
                                             </div>                                                 
                                             <div id="collapse5" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the govern ment they survive as soldiers of fortune to a deluxe you apartment that this group would somehow form a apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             

                                         <!-- /panel 5 -->                                             
                                     </div>                                         

                                     <!-- end #accordion -->                                         
                                 </div>                                     

                                 <!-- End of .accordion-one -->                                     
                             </div>                                 

                             <!-- /.topics -->                                 
                             <div class="market-growth"> 
                                 <h4 class="sub-heading"><?php _e( 'Reliable Market Growth:', 'charles_theme' ); ?></h4> 
                                 <div class="wrapper"> 
                                     <div class="row"> 
                                         <div class="col-xl-6 col-md-5 col-12">
                                             <img src="<?php echo get_template_directory_uri(); ?>/images/home/21.jpg" alt=""/>
                                         </div>                                             
                                         <div class="col-xl-6 col-md-7 col-12"> 
                                             <p><?php _e( 'The sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift.', 'charles_theme' ); ?></p> 
                                             <ul> 
                                                 <li>
                                                     <?php _e( 'Launches the last of Americas deep space.', 'charles_theme' ); ?>
                                                 </li>                                                     
                                                 <li>
                                                     <?php _e( 'Town to town and up and down the dial.', 'charles_theme' ); ?>
                                                 </li>                                                     
                                                 <li>
                                                     <?php _e( 'Kitchen and beans don\'t burn on the grill of maid.', 'charles_theme' ); ?>
                                                 </li>                                                     
                                                 <li>
                                                     <?php _e( 'The lady met this fellow and they knew it.', 'charles_theme' ); ?>
                                                 </li>                                                     
                                                 <li>
                                                     <?php _e( 'Most of this beautiful the day.', 'charles_theme' ); ?>
                                                 </li>                                                     
                                             </ul>                                                 
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     

                                 <!-- /.wrapper -->                                     
                             </div>                                 

                             <!-- /.market-growth -->                                 
                         </div>                             

                         <!-- /.service-content -->                             
                     </div>                         

                     <!-- /.col- -->                         
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 theme-sidebar-one"> 
                         <div class="sidebar-box service-categories"> 
                             <h5 class="title"><?php _e( 'Our Solutions', 'charles_theme' ); ?></h5> 
                             <ul> 
                                 <li>
                                     <a href="#"><?php _e( 'Travel and Aviation', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li class="active">
                                     <a href="#"><?php _e( 'Business Services', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Consumer Products', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Financial Services', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Software Research', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Quality Resourcing', 'charles_theme' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.service-categories -->                             
                         <div class="sidebar-box sidebar-brochures"> 
                             <h5 class="title"><?php _e( 'Brochures', 'charles_theme' ); ?></h5> 
                             <ul> 
                                 <li>
                                     <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php _e( 'Download file. pdf', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> <?php _e( 'Download file. ppt', 'charles_theme' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.sidebar-brochures -->                             
                         <div class="sidebar-box sidebar-contact"> 
                             <h5 class="title"><?php _e( 'Contact Form', 'charles_theme' ); ?></h5> 
                             <form action="<?php echo get_template_directory_uri(); ?>/#"> 
                                 <input type="text" placeholder="Name"/> 
                                 <input type="email" placeholder="Email"/> 
                                 <textarea placeholder="Message"></textarea> 
                                 <button class="theme-button-one">
                                     <?php _e( 'SUBMIT', 'charles_theme' ); ?>
                                 </button>                                     
                             </form>                                 
                         </div>                             

                         <!-- /.sidebar-contact -->                             
                     </div>                         

                     <!-- /.theme-sidebar-one -->                         
                 </div>                     

                 <!-- /.row -->                     
             </div>                 

             <!-- /.container -->                 
         </div>             

         <!-- /.service-details -->             
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
                             <h6 class="title"><?php _e( 'About OUR Consulting', 'charles_theme' ); ?></h6> 
                             <p><?php _e( 'That started from this tropic port aboard this tiny ship today still want by theam government they survive on up to thetre east side to a deluxe as soldiers of artics fortune.', 'charles_theme' ); ?></p> 
                             <div class="queries">
                                 <i class="flaticon-phone-call"></i> 
                                 <?php _e( 'Any Queries :', 'charles_theme' ); ?> <a href="#"><?php _e( '(+1) 234 567 900', 'charles_theme' ); ?></a>
                             </div>                                 
                         </div>                             

                         <!-- /.about-widget -->                             
                         <div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post"> 
                             <h6 class="title"><?php _e( 'RECENT POSTS', 'charles_theme' ); ?></h6> 
                             <ul> 
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/1.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'Till wanted by theam govern they survive as soldiers.', 'charles_theme' ); ?></a> 
                                         <div class="date">
                                             <i class="fa fa-calendar-o" aria-hidden="true"></i> 
                                             <?php _e( 'Feb 06, 2018', 'charles_theme' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'World don\'t move to beat of just one drum.', 'charles_theme' ); ?></a> 
                                         <div class="date">
                                             <i class="fa fa-calendar-o" aria-hidden="true"></i> 
                                             <?php _e( 'Mar 20, 2018', 'charles_theme' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.footer-recent-post -->                             
                         <div class="col-xl-2 col-lg-3 col-sm-6 footer-list"> 
                             <h6 class="title"><?php _e( 'SOLUTIONS', 'charles_theme' ); ?></h6> 
                             <ul> 
                                 <li>
                                     <a href="#"><?php _e( 'Travel and Aviation', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Business Services', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Consumer Products', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Financial Services', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Software Research', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'Quality Resourcing', 'charles_theme' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             

                         <!-- /.footer-list -->                             
                         <div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter"> 
                             <h6 class="title"><?php _e( 'NEWSLETTER', 'charles_theme' ); ?></h6> 
                             <form action="<?php echo get_template_directory_uri(); ?>/#"> 
                                 <input type="text" placeholder="Name *"/> 
                                 <input type="email" placeholder="Email *"/> 
                                 <button class="theme-button-one">
                                     <?php _e( 'SUBSCRIBE', 'charles_theme' ); ?>
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
                             <p><?php _e( '&copy; Copyrights 2018. All Rights Reserved.', 'charles_theme' ); ?></p>
                         </div>                             
                         <div class="col-md-6 col-12"> 
                             <ul> 
                                 <li>
                                     <a href="about.html"><?php _e( 'About', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="service.html"><?php _e( 'Solutions', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="#"><?php _e( 'FAQ’s', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li>
                                     <a href="contact.html"><?php _e( 'Contact', 'charles_theme' ); ?></a>
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