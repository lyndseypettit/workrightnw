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
                         <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/footer-logo.png" alt="" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:50px 50px 50px;grid-template-areas:'logo . .' 'logo . .' '. . .';"/></a>
                     </div>                         
                     <div class="address-wrapper float-right"> 
                         <ul> 
                             <li class="address"> <i class="icon flaticon-placeholder"></i> 
                                 <h6><?php _e( 'Address:', 'charles_theme' ); ?></h6> 
                                 <p><?php _e( '2A0, Queenstown St, USA.', 'charles_theme' ); ?></p> 
                             </li>                                 
                             <li class="address"> <i class="icon flaticon-multimedia"></i> 
                                 <h6><?php _e( 'Mail us:', 'charles_theme' ); ?></h6> 
                                 <p><?php _e( 'info@workrightnw.com', 'charles_theme' ); ?></p> 
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
                                     <li>
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
                                     <li class="active">
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
=====================================================
	Google Map
=====================================================
-->             
         <!-- Google Map -->             
         <div class="google-map-two section-spacing">
             <div class="map-canvas"></div>
         </div>             
         <!-- 
=============================================
	Conatct us Section
============================================== 
-->             
         <div class="contact-us-section section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'GET IN TOUCH', 'charles_theme' ); ?></h2> 
                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'charles_theme' ); ?></p> 
                 </div>                     
                 <!-- /.theme-title-one -->                     
                 <div class="clearfix main-content no-gutters row"> 
                     <div class="col-lg-5 col-12">
                         <div class="img-box"></div>
                     </div>                         
                     <div class="col-lg-7 col-12"> 
                         <div class="form-wrapper"> 
                             <form action="<?php echo get_template_directory_uri(); ?>/inc/sendemail.php" class="theme-form-one form-validation" autocomplete="off"> 
                                 <div class="row"> 
                                     <div class="col-sm-6 col-12">
                                         <input type="text" placeholder="Name *" name="name"/>
                                     </div>                                         
                                     <div class="col-sm-6 col-12">
                                         <input type="text" placeholder="Phone *" name="phone"/>
                                     </div>                                         
                                     <div class="col-sm-6 col-12">
                                         <input type="email" placeholder="Email *" name="email"/>
                                     </div>                                         
                                     <div class="col-sm-6 col-12">
                                         <input type="text" placeholder="Website *" name="web"/>
                                     </div>                                         
                                     <div class="col-12">
                                         <textarea placeholder="Message" name="message"></textarea>
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.row -->                                     
                                 <button class="theme-button-one">
                                     <?php _e( 'SEND MESSAGE', 'charles_theme' ); ?>
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
             <!--Contact Form Validation Markup -->                 
             <!-- Contact alert -->                 
             <div class="alert-wrapper" id="alert-success"> 
                 <div id="success"> 
                     <button class="closeAlert">
                         <i class="fa fa-times" aria-hidden="true"></i>
                     </button>                         
                     <div class="wrapper"> 
                         <p><?php _e( 'Your message was sent successfully.', 'charles_theme' ); ?></p> 
                     </div>                         
                 </div>                     
             </div>                 
             <!-- End of .alert_wrapper -->                 
             <div class="alert-wrapper" id="alert-error"> 
                 <div id="error"> 
                     <button class="closeAlert">
                         <i class="fa fa-times" aria-hidden="true"></i>
                     </button>                         
                     <div class="wrapper"> 
                         <p><?php _e( 'Sorry!Something Went Wrong.', 'charles_theme' ); ?></p> 
                     </div>                         
                 </div>                     
             </div>                 
             <!-- End of .alert_wrapper -->                 
         </div>             
         <!-- /.contact-us-section -->             
         <!-- 
=============================================
	Compnay Branch Address
============================================== 
-->             
         <div class="branch-address"> 
             <div class="container"> 
                 <div class="row"> 
                     <div class="address-slider"> 
                         <div class="item"> 
                             <div class="wrapper"> 
                                 <h6><?php _e( 'United States Office', 'charles_theme' ); ?></h6> 
                                 <p><i class="fa fa-address-book-o" aria-hidden="true"></i> <?php _e( '23A, Queenstown St, Log Vegas, United States.', 'charles_theme' ); ?></p> 
                             </div>                                 
                             <!-- /.wrapper -->                                 
                         </div>                             
                         <div class="item"> 
                             <div class="wrapper"> 
                                 <h6><?php _e( 'Australia Office', 'charles_theme' ); ?></h6> 
                                 <p><i class="fa fa-address-book-o" aria-hidden="true"></i> <?php _e( 'consult floor, melbourne, Australia.', 'charles_theme' ); ?></p> 
                             </div>                                 
                             <!-- /.wrapper -->                                 
                         </div>                             
                         <div class="item"> 
                             <div class="wrapper"> 
                                 <h6><?php _e( 'Germany Office', 'charles_theme' ); ?></h6> 
                                 <p><i class="fa fa-address-book-o" aria-hidden="true"></i> <?php _e( 'no:108, shshi st, berlin,', 'charles_theme' ); ?> <br/> <?php _e( 'Germany.', 'charles_theme' ); ?></p> 
                             </div>                                 
                             <!-- /.wrapper -->                                 
                         </div>                             
                         <div class="item"> 
                             <div class="wrapper"> 
                                 <h6><?php _e( 'London Office', 'charles_theme' ); ?></h6> 
                                 <p><i class="fa fa-address-book-o" aria-hidden="true"></i> <?php _e( 'cityhigh, clock bell floor, United Kingdom.', 'charles_theme' ); ?></p> 
                             </div>                                 
                             <!-- /.wrapper -->                                 
                         </div>                             
                     </div>                         
                     <!-- /.address-slider -->                         
                 </div>                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.branch-address -->             
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
         <!-- Validation -->                                       
         <!-- Google map js -->                                       
         <!-- Theme js -->                                       
     </div>         
     <!-- /.main-page-wrapper -->                 

<?php get_footer(); ?>