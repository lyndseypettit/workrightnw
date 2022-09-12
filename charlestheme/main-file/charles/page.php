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
                                     <li class="active">
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
                     <h2><?php _e( 'ABOUT', 'charles_theme' ); ?></h2> 
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.theme-inner-banner -->             
         <!-- 
=============================================
	CallOut Banner 
============================================== 
-->             
         <div class="callout-banner no-bg"> 
             <div class="container clearfix"> 
                 <h3 class="title"><?php _e( 'High-Quality', 'charles_theme' ); ?> <br/> <?php _e( 'Market Experinces', 'charles_theme' ); ?></h3> 
                 <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to ever wondered the east side to a deluxe apartment.', 'charles_theme' ); ?></p> <a href="#" class="theme-button-one"><?php _e( 'CONTACT US', 'charles_theme' ); ?></a> 
             </div>                 
         </div>             
         <!-- /.callout-banner -->             
         <!-- 
=============================================
	About Company Stye Two
============================================== 
-->             
         <div class="about-compnay-two no-bg section-spacing"> 
             <div class="overlay"> 
                 <div class="container"> 
                     <div class="row"> 
                         <div class="col-lg-6 col-12 text order-lg-last"> 
                             <div class="theme-title-one"> 
                                 <h2><?php _e( 'About our Company', 'charles_theme' ); ?></h2> 
                             </div>                                 
                             <!-- /.theme-title-one -->                                 
                             <p><?php _e( 'The environment of workplace safety is changing in the United States. Secondary to the rising cost of healthcare and the aging workforce, corporations have recognized the importance of investing in the health and safety of their employees. Work Right NW strives to be the industry leader by integrating an innovative model of workplace wellness on the job site for our corporate partners and advocacy for leadership training and mentoring for our injury prevention specialists.', 'charles_theme' ); ?></p> 
                             <p><?php _e( 'Work Right NW utilizes licensed Athletic Trainers and Physical Therapists as Injury Prevention Specialists on the job location to integrate a comprehensive model that targets the employees overall safety and wellness. By providing for the wellness of their employees prior to the development of injury, corporations are able to substantially reduce the cost of workplace injuries, reduce non-occupational medical costs, improve employee morale, and increase efficiency. Work Right NW understands that when you teach people to work RIGHT everyone wins!', 'charles_theme' ); ?></p> 
                             <img src="<?php echo get_template_directory_uri(); ?>/images/home/sign-black.png" alt="" class="sign"/> 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-6 col-12 order-lg-first"> 
                             <img src="<?php echo get_template_directory_uri(); ?>/images/home/15.jpg" alt="" class="left-img"/> 
                         </div>                             
                     </div>                         
                     <!-- /.row -->                         
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.about-compnay-two -->             
         <!--
=====================================================
	Why We Best
=====================================================
-->             
         <div class="why-we-best"> 
             <div class="overlay"> 
                 <div class="container"> 
                     <div class="theme-title-one"> 
                         <h2><?php _e( 'WE ARE ALWAYS BEST', 'charles_theme' ); ?></h2> 
                         <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'charles_theme' ); ?></p> 
                     </div>                         
                     <!-- /.theme-title-one -->                         
                     <div class="wrapper row no-gutters"> 
                         <div class="col-lg-6 col-12 order-lg-last">
                             <div class="img-box"></div>
                         </div>                             
                         <div class="col-lg-6 col-12 order-lg-first"> 
                             <ul class="best-list-item"> 
                                 <li> <i class="icon flaticon-puzzle"></i> 
                                     <h5><a href="#"><?php _e( 'Best Strategy', 'charles_theme' ); ?></a></h5> 
                                     <p><?php _e( 'The Love Boat soon will be making another run plore strange tools enter new worlds.', 'charles_theme' ); ?></p> 
                                 </li>                                     
                                 <li> <i class="icon flaticon-presentation"></i> 
                                     <h5><a href="#"><?php _e( 'High-Quality Services', 'charles_theme' ); ?></a></h5> 
                                     <p><?php _e( 'The Love Boat soon will be making another run plore strange tools enter new worlds.', 'charles_theme' ); ?></p> 
                                 </li>                                     
                                 <li> <i class="icon flaticon-people"></i> 
                                     <h5><a href="#"><?php _e( 'Friendly Support', 'charles_theme' ); ?></a></h5> 
                                     <p><?php _e( 'The Love Boat soon will be making another run plore strange tools enter new worlds.', 'charles_theme' ); ?></p> 
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                         <!-- /.col- -->                             
                     </div>                         
                     <!-- /.wrapper -->                         
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.why-we-best -->             
         <!--
=====================================================
	Theme Counter
=====================================================
-->             
         <div class="theme-counter-two section-spacing"> 
             <div class="container"> 
                 <div class="clearfix"> 
                     <div class="cunter-wrapper"> 
                         <div class="row"> 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="30" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'charles_theme' ); ?></span>+
                                     </div>                                         
                                     <p><?php _e( 'Years of Excellence', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.single-counter-box -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'charles_theme' ); ?></span>%
                                     </div>                                         
                                     <p><?php _e( 'Client Satisfaction', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.single-counter-box -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'charles_theme' ); ?></span>
                                         <?php _e( 'k', 'charles_theme' ); ?>
                                     </div>                                         
                                     <p><?php _e( 'Cases Completed', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.single-counter-box -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="col-md-3 col-6"> 
                                 <div class="single-counter-box"> 
                                     <div class="number">
                                         <span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5"><?php _e( '0', 'charles_theme' ); ?></span>
                                     </div>                                         
                                     <p><?php _e( 'Consultants', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.single-counter-box -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                         </div>                             
                         <!-- /.row -->                             
                     </div>                         
                     <!-- /.cunter-wrapper -->                         
                 </div>                     
                 <!-- /.clearfix -->                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.theme-counter -->             
         <!-- 
=============================================
	Core Values
============================================== 
-->             
         <div class="core-values"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'CORE VALUES', 'charles_theme' ); ?></h2> 
                 </div>                     
                 <!-- /.theme-title-one -->                     
                 <div class="wrapper"> 
                     <div class="core-value-slider"> 
                         <div class="item"> 
                             <div class="single-value-block"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/17.jpg" alt=""/> 
                                     <div class="overlay">
                                         <a href="#" class="theme-button-one"><?php _e( 'READ MORE', 'charles_theme' ); ?></a>
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.image-box -->                                     
                                 <div class="text"> 
                                     <h5><a href="#"><?php _e( 'Challenging Staff', 'charles_theme' ); ?></a></h5> 
                                     <p><?php _e( 'The Love Boat soon will be making other run plore strange tools.', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.text -->                                     
                             </div>                                 
                             <!-- /.single-value-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="item"> 
                             <div class="single-value-block"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/18.jpg" alt=""/> 
                                     <div class="overlay">
                                         <a href="#" class="theme-button-one"><?php _e( 'READ MORE', 'charles_theme' ); ?></a>
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.image-box -->                                     
                                 <div class="text"> 
                                     <h5><a href="#"><?php _e( 'Integrity Properties', 'charles_theme' ); ?></a></h5> 
                                     <p><?php _e( 'The Love Boat soon will be making other run plore strange tools.', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.text -->                                     
                             </div>                                 
                             <!-- /.single-value-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="item"> 
                             <div class="single-value-block"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/19.jpg" alt=""/> 
                                     <div class="overlay">
                                         <a href="#" class="theme-button-one"><?php _e( 'READ MORE', 'charles_theme' ); ?></a>
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.image-box -->                                     
                                 <div class="text"> 
                                     <h5><a href="#"><?php _e( 'Innovation Solutions', 'charles_theme' ); ?></a></h5> 
                                     <p><?php _e( 'The Love Boat soon will be making other run plore strange tools.', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.text -->                                     
                             </div>                                 
                             <!-- /.single-value-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                     </div>                         
                     <!-- /.core-value-slider -->                         
                 </div>                     
                 <!-- /.wrapper -->                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.core-values -->             
         <!--
=====================================================
	Partner Slider
=====================================================
-->             
         <div class="partner-section"> 
             <div class="container"> 
                 <div class="row"> 
                     <div class="col-md-3 col-sm-4 col-12"> 
                         <h6><?php _e( 'OUR', 'charles_theme' ); ?> <br/><?php _e( 'PARTNERS', 'charles_theme' ); ?></h6> 
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