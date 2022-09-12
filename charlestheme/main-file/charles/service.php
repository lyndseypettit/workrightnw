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
                     <div class="logo float-left"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/footer-logo.png" alt="" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:50px 50px 50px;grid-template-areas:'logo . .' 'logo . .' '. . .';"/></a>
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
                             <li class="quotes"><a href="#"><?php _e( 'GET A QUOTES', 'charles_theme' ); ?></a>
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
                                     <li><a href="#"><?php _e( 'Home', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li><a href="index.html"><?php _e( 'Home version one', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="index-2.html"><?php _e( 'Home version two', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li><a href="#"><?php _e( 'PAGES', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li><a href="about.html"><?php _e( 'About us', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="team.html"><?php _e( 'Our team', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="faq.html"><?php _e( 'Faq\'s', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="404.html"><?php _e( '404', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="shop.html"><?php _e( 'Shop', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="shop-details.html"><?php _e( 'Shop details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="#"><?php _e( 'Third Level menu', 'charles_theme' ); ?></a> 
                                                 <ul> 
                                                     <li><a href="#"><?php _e( 'Demo one', 'charles_theme' ); ?></a>
                                                     </li>                                                         
                                                     <li><a href="#"><?php _e( 'Demo two', 'charles_theme' ); ?></a>
                                                     </li>                                                         
                                                 </ul>                                                     
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li class="active"><a href="#"><?php _e( 'Service', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li><a href="service.html"><?php _e( 'Service Version one', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="service-v2.html"><?php _e( 'Service version two', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="service-details.html"><?php _e( 'Service Details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li><a href="#"><?php _e( 'Portfolio', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li><a href="project.html"><?php _e( 'project', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="project-details.html"><?php _e( 'Project details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li><a href="#"><?php _e( 'Blog', 'charles_theme' ); ?></a> 
                                         <ul class="dropdown"> 
                                             <li><a href="blog.html"><?php _e( 'Blog List', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="blog-grid.html"><?php _e( 'Blog Grid', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                             <li><a href="blog-details.html"><?php _e( 'Blog details', 'charles_theme' ); ?></a>
                                             </li>                                                 
                                         </ul>                                             
                                     </li>                                         
                                     <li><a href="contact.html"><?php _e( 'contact', 'charles_theme' ); ?></a>
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
                                         <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                         </li>                                             
                                     </ul>                                         
                                 </li>                                     
                                 <li class="cart-icon"> <a href="#"><i class="flaticon-tool"></i> <span><?php _e( '2', 'charles_theme' ); ?></span></a> 
                                 </li>                                     
                                 <li class="search-option"> 
                                     <div class="dropdown"> 
                                         <button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i>
                                         </button>                                             
                                         <form action="<?php echo get_template_directory_uri(); ?>/#" class="dropdown-menu"> 
                                             <input type="text" Placeholder="Enter Your Search"/> 
                                             <button><i class="fa fa-search"></i>
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
                     <h2><?php _e( 'SERVICES', 'charles_theme' ); ?></h2> 
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.theme-inner-banner -->             
         <!-- 
=============================================
	Our Solution
============================================== 
-->             
         <div class="our-solution section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'Our SOLUTIONS', 'charles_theme' ); ?></h2> 
                 </div>                     
                 <!-- /.theme-title-one -->                     
                 <div class="wrapper"> 
                     <div class="row"> 
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-solution-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/icon/5.png" alt="" class="icon"/> 
                                 <h5><a href="service-details.html"><?php _e( 'Business Services', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone.', 'charles_theme' ); ?> </p> 
                             </div>                                 
                             <!-- /.single-solution-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-solution-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/icon/6.png" alt="" class="icon"/> 
                                 <h5><a href="service-details.html"><?php _e( 'Business Services', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone.', 'charles_theme' ); ?> </p> 
                             </div>                                 
                             <!-- /.single-solution-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-solution-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/icon/7.png" alt="" class="icon"/> 
                                 <h5><a href="service-details.html"><?php _e( 'Business Services', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone.', 'charles_theme' ); ?> </p> 
                             </div>                                 
                             <!-- /.single-solution-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-solution-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/icon/8.png" alt="" class="icon"/> 
                                 <h5><a href="service-details.html"><?php _e( 'Business Services', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone.', 'charles_theme' ); ?> </p> 
                             </div>                                 
                             <!-- /.single-solution-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-solution-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/icon/9.png" alt="" class="icon"/> 
                                 <h5><a href="service-details.html"><?php _e( 'Business Services', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone.', 'charles_theme' ); ?> </p> 
                             </div>                                 
                             <!-- /.single-solution-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-solution-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/icon/10.png" alt="" class="icon"/> 
                                 <h5><a href="service-details.html"><?php _e( 'Business Services', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The explore strange new worlds to seek fout new life and new civilizations to boldly where no man has before gone.', 'charles_theme' ); ?> </p> 
                             </div>                                 
                             <!-- /.single-solution-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                     </div>                         
                     <!-- /.row -->                         
                 </div>                     
                 <!-- /.wrapper -->                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.our-solution -->             
         <!-- 
=============================================
	Feature Banner
============================================== 
-->             
         <div class="feature-banner section-spacing"> 
             <div class="opacity"> 
                 <div class="container"> 
                     <h2><?php _e( 'We provide high quality services &amp; innovative solutions for the realiable growth', 'charles_theme' ); ?></h2> <a href="#" class="theme-button-one"><?php _e( 'GET A QUOTES', 'charles_theme' ); ?></a> 
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.opacity -->                 
         </div>             
         <!-- /.feature-banner -->             
         <!--
=====================================================
	Free Consultation
=====================================================
-->             
         <div class="consultation-form section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'FREE CONSULTATION', 'charles_theme' ); ?></h2> 
                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'charles_theme' ); ?></p> 
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
                                                 <?php _e( 'Service you’re looking for?', 'charles_theme' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Business Services', 'charles_theme' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Consumer Product', 'charles_theme' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Financial Services', 'charles_theme' ); ?>
                                             </option>                                                 
                                             <option>
                                                 <?php _e( 'Software Research', 'charles_theme' ); ?>
                                             </option>                                                 
                                         </select>                                             
                                     </div>                                         
                                     <div class="col-12">
                                         <textarea placeholder="Message"></textarea>
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.row -->                                     
                                 <button class="theme-button-one">
                                     <?php _e( 'GET A QUOTES', 'charles_theme' ); ?>
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
=============================================
	Top Feature
============================================== 
-->             
         <div class="top-feature fix-border"> 
             <div class="top-features-slide"> 
                 <div class="item"> 
                     <div class="main-content" style="background:#fafafa;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/1.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Consumer Insights', 'charles_theme' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'charles_theme' ); ?></p> 
                     </div>                         
                     <!-- /.main-content -->                         
                 </div>                     
                 <!-- /.item -->                     
                 <div class="item"> 
                     <div class="main-content" style="background:#f6f6f6;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/2.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Emerging Ideas', 'charles_theme' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'charles_theme' ); ?></p> 
                     </div>                         
                     <!-- /.main-content -->                         
                 </div>                     
                 <!-- /.item -->                     
                 <div class="item"> 
                     <div class="main-content" style="background:#efefef;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/3.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Thought Leadership', 'charles_theme' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'charles_theme' ); ?></p> 
                     </div>                         
                     <!-- /.main-content -->                         
                 </div>                     
                 <!-- /.item -->                     
                 <div class="item"> 
                     <div class="main-content" style="background:#e9e9e9;"> 
                         <img src="<?php echo get_template_directory_uri(); ?>/images/icon/4.png" alt=""/> 
                         <h4><a href="#"><?php _e( 'Marketing Goals', 'charles_theme' ); ?></a></h4> 
                         <p><?php _e( 'The east side to a deluxe apartment in move on up to the east side', 'charles_theme' ); ?></p> 
                     </div>                         
                     <!-- /.main-content -->                         
                 </div>                     
                 <!-- /.item -->                     
             </div>                 
             <!-- /.top-features-slide -->                 
         </div>             
         <!-- /.top-feature -->             
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
                             <div class="queries"><i class="flaticon-phone-call"></i> 
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
                                         <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> 
                                             <?php _e( 'Feb 06, 2018', 'charles_theme' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'World don\'t move to beat of just one drum.', 'charles_theme' ); ?></a> 
                                         <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> 
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
                                 <li><a href="#"><?php _e( 'Travel and Aviation', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Business Services', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Consumer Products', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Financial Services', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Software Research', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Quality Resourcing', 'charles_theme' ); ?></a>
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
                                 <li><a href="about.html"><?php _e( 'About', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="service.html"><?php _e( 'Solutions', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'FAQ’s', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="contact.html"><?php _e( 'Contact', 'charles_theme' ); ?></a>
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