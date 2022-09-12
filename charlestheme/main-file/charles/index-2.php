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
	Theme Header Two
============================================== 
-->             
         <header class="header-two"> 
             <div class="top-header"> 
                 <div class="container"> 
                     <div class="row"> 
                         <div class="col-md-6 col-sm-8 col-12"> 
                             <ul class="left-widget"> 
                                 <li>
                                     <?php _e( 'We are leading consultant firm!', 'charles_theme' ); ?>
                                 </li>                                     
                                 <li> 
                                     <div id="polyglotLanguageSwitcher"> 
                                         <form action="<?php echo get_template_directory_uri(); ?>/#"> 
                                             <select id="polyglot-language-options"> 
                                                 <option id="en" value="en" selected>
                                                     <?php _e( 'English', 'charles_theme' ); ?>
                                                 </option>                                                     
                                                 <option id="fr" value="fr">
                                                     <?php _e( 'French', 'charles_theme' ); ?>
                                                 </option>                                                     
                                                 <option id="de" value="de">
                                                     <?php _e( 'German', 'charles_theme' ); ?>
                                                 </option>                                                     
                                                 <option id="it" value="it">
                                                     <?php _e( 'Italian', 'charles_theme' ); ?>
                                                 </option>                                                     
                                                 <option id="es" value="es">
                                                     <?php _e( 'Spanish', 'charles_theme' ); ?>
                                                 </option>                                                     
                                             </select>                                                 
                                         </form>                                             
                                     </div>                                         
                                     <!-- End #polyglotLanguageSwitcher -->                                         
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                         <div class="col-md-6 col-sm-4 col-12"> 
                             <ul class="social-icon"> 
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                     </div>                         
                     <!-- /.row -->                         
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.top-header -->                 
             <div class="theme-menu-wrapper"> 
                 <div class="container"> 
                     <div class="bg-wrapper clearfix"> 
                         <div class="logo float-left"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/footer-logo.png" alt="" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:50px 50px 50px;grid-template-areas:'logo . .' 'logo . .' '. . .';"/></a>
                         </div>                             
                         <!-- ============== Menu Warpper ================ -->                             
                         <div class="menu-wrapper float-left"> 
                             <nav id="mega-menu-holder" class="clearfix"> 
                                 <ul class="clearfix"> 
                                     <li class="active"><a href="#"><?php _e( 'Home', 'charles_theme' ); ?></a> 
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
                                     <li><a href="#"><?php _e( 'Service', 'charles_theme' ); ?></a> 
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
         <!-- /.header-two -->             
         <!-- 
=============================================
	Theme Main Banner
============================================== 
-->             
         <div id="theme-main-banner" class="banner-one"> 
             <div data-src="images/home/slide-5.jpg"> 
                 <div class="camera_caption"> 
                     <div class="container"> 
                         <p class="wow fadeInUp animated"><?php _e( 'The government they survive artical of fortune', 'charles_theme' ); ?></p> 
                         <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><?php _e( 'HIGH-QUALITY MARKET', 'charles_theme' ); ?> <br/> <?php _e( 'EXPERIENCES', 'charles_theme' ); ?></h1> <a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s"><?php _e( 'ABOUT US', 'charles_theme' ); ?></a> 
                     </div>                         
                     <!-- /.container -->                         
                 </div>                     
                 <!-- /.camera_caption -->                     
             </div>                 
             <div data-src="images/home/slide-3.jpg"> 
                 <div class="camera_caption"> 
                     <div class="container"> 
                         <p class="wow fadeInUp animated"><?php _e( 'The government they survive artical of fortune', 'charles_theme' ); ?></p> 
                         <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><?php _e( 'HIGH-QUALITY MARKET', 'charles_theme' ); ?> <br/> <?php _e( 'EXPERIENCES', 'charles_theme' ); ?></h1> <a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s"><?php _e( 'ABOUT US', 'charles_theme' ); ?></a> 
                     </div>                         
                     <!-- /.container -->                         
                 </div>                     
                 <!-- /.camera_caption -->                     
             </div>                 
             <div data-src="images/home/slide-1.jpg"> 
                 <div class="camera_caption"> 
                     <div class="container"> 
                         <p class="wow fadeInUp animated"><?php _e( 'The government they survive artical of fortune', 'charles_theme' ); ?></p> 
                         <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><?php _e( 'HIGH-QUALITY MARKET', 'charles_theme' ); ?> <br/> <?php _e( 'EXPERIENCES', 'charles_theme' ); ?></h1> <a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s"><?php _e( 'ABOUT US', 'charles_theme' ); ?></a> 
                     </div>                         
                     <!-- /.container -->                         
                 </div>                     
                 <!-- /.camera_caption -->                     
             </div>                 
         </div>             
         <!-- /#theme-main-banner -->             
         <!-- 
=============================================
	CallOut Banner 
============================================== 
-->             
         <div class="callout-banner section-spacing"> 
             <div class="container clearfix"> 
                 <h3 class="title"><?php _e( 'Provide solutions for the realiable growth', 'charles_theme' ); ?></h3> 
                 <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to ever wondered the east side to a deluxe apartment.', 'charles_theme' ); ?></p> <a href="#" class="theme-button-one"><?php _e( 'FREE QUOTES', 'charles_theme' ); ?></a> 
             </div>                 
         </div>             
         <!-- /.callout-banner -->             
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
	About Company Stye Two
============================================== 
-->             
         <div class="about-compnay-two section-spacing"> 
             <div class="overlay"> 
                 <div class="container"> 
                     <div class="row no-gutters"> 
                         <div class="col-lg-7 col-12 text"> 
                             <div class="theme-title-one"> 
                                 <h2><?php _e( 'ABOUT US', 'charles_theme' ); ?></h2> 
                             </div>                                 
                             <!-- /.theme-title-one -->                                 
                             <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment in the sky to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone.', 'charles_theme' ); ?></p> 
                             <p><?php _e( 'You would see the biggest gift would be from me and the card attached would so thank you for being a friend the biggest gift.', 'charles_theme' ); ?></p> 
                             <img src="<?php echo get_template_directory_uri(); ?>/images/home/sign.png" alt="" class="sign"/> 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-5 col-12"> 
                             <div class="quote-form"> 
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
                                                     <?php _e( 'Choose Services?', 'charles_theme' ); ?>
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
                             <!-- /.quote-form -->                                 
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
=============================================
	Our Case
============================================== 
-->             
         <div class="our-case section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'Our CASES', 'charles_theme' ); ?></h2> 
                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'charles_theme' ); ?></p> 
                 </div>                     
                 <!-- /.theme-title-one -->                     
                 <div class="wrapper"> 
                     <div class="row"> 
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-case-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" alt=""/> 
                                 <div class="hover-content"> 
                                     <div class="text clearfix"> 
                                         <div class="float-left"> 
                                             <h5><a href="project-details.html"><?php _e( 'Business Meeting', 'charles_theme' ); ?></a></h5> 
                                             <p><?php _e( 'Explore strange new worlds', 'charles_theme' ); ?></p> 
                                         </div>                                             <a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
                                     </div>                                         
                                     <!-- /.text -->                                         
                                 </div>                                     
                                 <!-- /.hover-content -->                                     
                             </div>                                 
                             <!-- /.single-case-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-case-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/2.jpg" alt=""/> 
                                 <div class="hover-content"> 
                                     <div class="text clearfix"> 
                                         <div class="float-left"> 
                                             <h5><a href="project-details.html"><?php _e( 'Business Meeting', 'charles_theme' ); ?></a></h5> 
                                             <p><?php _e( 'Explore strange new worlds', 'charles_theme' ); ?></p> 
                                         </div>                                             <a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
                                     </div>                                         
                                     <!-- /.text -->                                         
                                 </div>                                     
                                 <!-- /.hover-content -->                                     
                             </div>                                 
                             <!-- /.single-case-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-case-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/3.jpg" alt=""/> 
                                 <div class="hover-content"> 
                                     <div class="text clearfix"> 
                                         <div class="float-left"> 
                                             <h5><a href="project-details.html"><?php _e( 'Business Meeting', 'charles_theme' ); ?></a></h5> 
                                             <p><?php _e( 'Explore strange new worlds', 'charles_theme' ); ?></p> 
                                         </div>                                             <a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
                                     </div>                                         
                                     <!-- /.text -->                                         
                                 </div>                                     
                                 <!-- /.hover-content -->                                     
                             </div>                                 
                             <!-- /.single-case-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-case-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/4.jpg" alt=""/> 
                                 <div class="hover-content"> 
                                     <div class="text clearfix"> 
                                         <div class="float-left"> 
                                             <h5><a href="project-details.html"><?php _e( 'Business Meeting', 'charles_theme' ); ?></a></h5> 
                                             <p><?php _e( 'Explore strange new worlds', 'charles_theme' ); ?></p> 
                                         </div>                                             <a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
                                     </div>                                         
                                     <!-- /.text -->                                         
                                 </div>                                     
                                 <!-- /.hover-content -->                                     
                             </div>                                 
                             <!-- /.single-case-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-case-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/5.jpg" alt=""/> 
                                 <div class="hover-content"> 
                                     <div class="text clearfix"> 
                                         <div class="float-left"> 
                                             <h5><a href="project-details.html"><?php _e( 'Business Meeting', 'charles_theme' ); ?></a></h5> 
                                             <p><?php _e( 'Explore strange new worlds', 'charles_theme' ); ?></p> 
                                         </div>                                             <a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
                                     </div>                                         
                                     <!-- /.text -->                                         
                                 </div>                                     
                                 <!-- /.hover-content -->                                     
                             </div>                                 
                             <!-- /.single-case-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-sm-6 col-12"> 
                             <div class="single-case-block"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/6.jpg" alt=""/> 
                                 <div class="hover-content"> 
                                     <div class="text clearfix"> 
                                         <div class="float-left"> 
                                             <h5><a href="project-details.html"><?php _e( 'Business Meeting', 'charles_theme' ); ?></a></h5> 
                                             <p><?php _e( 'Explore strange new worlds', 'charles_theme' ); ?></p> 
                                         </div>                                             <a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
                                     </div>                                         
                                     <!-- /.text -->                                         
                                 </div>                                     
                                 <!-- /.hover-content -->                                     
                             </div>                                 
                             <!-- /.single-case-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                     </div>                         
                     <!-- /.row -->                         
                 </div>                     
                 <!-- /.wrapper -->                     
                 <div class="view-all"><a href="project.html" class="theme-button-one"><?php _e( 'VIEW ALL', 'charles_theme' ); ?></a>
                 </div>                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.our-case -->             
         <!--
=====================================================
	Faq Section
=====================================================
-->             
         <div class="faq-section"> 
             <div class="overlay"> 
                 <div class="container"> 
                     <div class="theme-title-one"> 
                         <h2><?php _e( 'Faq’s', 'charles_theme' ); ?></h2> 
                         <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'charles_theme' ); ?></p> 
                     </div>                         
                     <!-- /.theme-title-one -->                         
                     <div class="wrapper row no-gutters"> 
                         <div class="col-xl-6 col-lg-7 order-last"> 
                             <div class="faq-content"> 
                                 <div class="accordion-one"> 
                                     <div class="panel-group theme-accordion" id="accordion"> 
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">  <?php _e( '1. What industries do you specialize in?', 'charles_theme' ); ?></a> </h6> 
                                             </div>                                                 
                                             <div id="collapse1" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             
                                         <!-- /panel 1 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading active-panel"> 
                                                 <h6 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">  <?php _e( '2. You guarantee that our plan will raise capital?', 'charles_theme' ); ?></a> </h6> 
                                             </div>                                                 
                                             <div id="collapse2" class="panel-collapse collapse show"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             
                                         <!-- /panel 2 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">  <?php _e( '3. Do you ever invest in your clients?', 'charles_theme' ); ?></a> </h6> 
                                             </div>                                                 
                                             <div id="collapse3" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             
                                         <!-- /panel 3 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">  <?php _e( '4. What makes your financial projections special?', 'charles_theme' ); ?></a> </h6> 
                                             </div>                                                 
                                             <div id="collapse4" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             
                                         <!-- /panel 4 -->                                             
                                         <div class="panel"> 
                                             <div class="panel-heading"> 
                                                 <h6 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">  <?php _e( '5. Will you agree with everything I say?', 'charles_theme' ); ?></a> </h6> 
                                             </div>                                                 
                                             <div id="collapse5" class="panel-collapse collapse"> 
                                                 <div class="panel-body"> 
                                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe you apartment.', 'charles_theme' ); ?></p> 
                                                 </div>                                                     
                                             </div>                                                 
                                         </div>                                             
                                         <!-- /panel 5 -->                                             
                                     </div>                                         
                                     <!-- end #accordion -->                                         
                                 </div>                                     
                                 <!-- End of .accordion-one -->                                     
                             </div>                                 
                             <!-- /.faq-content -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-xl-6 col-lg-5 order-first">
                             <div class="img-box"><a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amshowinfo=0" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
                             </div>
                         </div>                             
                     </div>                         
                     <!-- /.wrapper -->                         
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.faq-section -->             
         <!--
=====================================================
	Why Choose us
=====================================================
-->             
         <div class="why-choose-us section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'Why Choose Us', 'charles_theme' ); ?></h2> 
                 </div>                     
                 <!-- /.theme-title-one -->                     
                 <div class="wrapper"> 
                     <div class="row"> 
                         <div class="col-lg-4 col-12"> 
                             <div class="single-block"> <i class="icon flaticon-puzzle"></i> 
                                 <h5><a href="#"><?php _e( 'Best Strategy', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The Love Boat soon will be making another run explore strange tools enter new worlds.', 'charles_theme' ); ?></p> 
                             </div>                                 
                             <!-- /.single-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-12"> 
                             <div class="single-block"> <i class="icon flaticon-presentation"></i> 
                                 <h5><a href="#"><?php _e( 'High-Quality Services', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The Love Boat soon will be making another run explore strange tools enter new worlds.', 'charles_theme' ); ?></p> 
                             </div>                                 
                             <!-- /.single-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                         <div class="col-lg-4 col-12"> 
                             <div class="single-block"> <i class="icon flaticon-people"></i> 
                                 <h5><a href="#"><?php _e( 'Friendly Support', 'charles_theme' ); ?></a></h5> 
                                 <p><?php _e( 'The Love Boat soon will be making another run explore strange tools enter new worlds.', 'charles_theme' ); ?></p> 
                             </div>                                 
                             <!-- /.single-block -->                                 
                         </div>                             
                         <!-- /.col- -->                             
                     </div>                         
                     <!-- /.row -->                         
                 </div>                     
                 <!-- /.wrapper -->                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.why-choose-us -->             
         <!--
=====================================================
	Short Banner
=====================================================
-->             
         <div class="short-banner section-spacing"> 
             <div class="overlay"> 
                 <div class="container"> 
                     <h2><?php _e( 'Our business plan consultants have real world experience', 'charles_theme' ); ?></h2> 
                 </div>                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.short-banner -->             
         <!--
=====================================================
	Latest News
=====================================================
-->             
         <div class="our-blog latest-news section-spacing"> 
             <div class="container"> 
                 <div class="theme-title-one"> 
                     <h2><?php _e( 'Latest News', 'charles_theme' ); ?></h2> 
                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers', 'charles_theme' ); ?> </p> 
                 </div>                     
                 <!-- /.theme-title-one -->                     
                 <div class="wrapper"> 
                     <div class="clearfix"> 
                         <div class="latest-news-slider"> 
                             <div class="item"> 
                                 <div class="single-blog"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/blog/3.jpg" alt=""/> 
                                         <div class="overlay"><a href="#" class="date"><?php _e( 'Feb 06, 2018', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="post-meta"> 
                                         <h5 class="title"><a href="blog-details.html"><?php _e( 'Trouble with the law since to eastern side of yellow mint', 'charles_theme' ); ?></a></h5> <a href="blog-details.html" class="read-more"><?php _e( 'READ MORE', 'charles_theme' ); ?></a> 
                                     </div>                                         
                                     <!-- /.post-meta -->                                         
                                 </div>                                     
                                 <!-- /.single-blog -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-blog"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/blog/4.jpg" alt=""/> 
                                         <div class="overlay"><a href="#" class="date"><?php _e( 'Mar 30, 2018', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="post-meta"> 
                                         <h5 class="title"><a href="blog-details.html"><?php _e( 'Kind of torture to have to watch the show the one day', 'charles_theme' ); ?></a></h5> <a href="blog-details.html" class="read-more"><?php _e( 'READ MORE', 'charles_theme' ); ?></a> 
                                     </div>                                         
                                     <!-- /.post-meta -->                                         
                                 </div>                                     
                                 <!-- /.single-blog -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-blog"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/blog/5.jpg" alt=""/> 
                                         <div class="overlay"><a href="#" class="date"><?php _e( 'Apr 14, 2018', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="post-meta"> 
                                         <h5 class="title"><a href="blog-details.html"><?php _e( 'Make the best of things its an uphill climb long time', 'charles_theme' ); ?></a></h5> <a href="blog-details.html" class="read-more"><?php _e( 'READ MORE', 'charles_theme' ); ?></a> 
                                     </div>                                         
                                     <!-- /.post-meta -->                                         
                                 </div>                                     
                                 <!-- /.single-blog -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                         </div>                             
                         <!-- /.latest-news-slider -->                             
                     </div>                         
                     <!-- /.row -->                         
                 </div>                     
                 <!-- /.wrapper -->                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.our-blog -->             
         <!--
=====================================================
	Google Map
=====================================================
-->             
         <!-- Google Map -->             
         <div class="google-map-one">
             <div class="map-canvas"></div>
         </div>             
         <!--
=====================================================
	Footer
=====================================================
-->             
         <footer class="theme-footer-two"> 
             <div class="top-footer"> 
                 <div class="container"> 
                     <div class="row"> 
                         <div class="col-lg-4 col-sm-6 col-12 logo-widget"> 
                             <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo2.png" alt=""/></a>
                             </div>                                 
                             <p><?php _e( 'Tthis tropic port aboard this tiny ship today still wanted by theam government they survive on up east side to a deluxe as soldiers.', 'charles_theme' ); ?></p> 
                             <ul class="social-icon"> 
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                 </li>                                     
                                 <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                         <!-- /.logo-widget -->                             
                         <div class="col-lg-2 col-sm-6 col-12 footer-list"> 
                             <h6 class="title"><?php _e( 'EXPLORE', 'charles_theme' ); ?></h6> 
                             <ul> 
                                 <li><a href="about.html"><?php _e( 'About us', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="service.html"><?php _e( 'Our Solutions', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="project.html"><?php _e( 'Case Studies', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="blog.html"><?php _e( 'Blog', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="contact.html"><?php _e( 'Contact us', 'charles_theme' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                         <!-- /.footer-list -->                             
                         <div class="col-lg-3 col-sm-6 col-12 footer-gallery"> 
                             <h6 class="title"><?php _e( 'Gallery', 'charles_theme' ); ?></h6> 
                             <div class="wrapper"> 
                                 <div class="row"> 
                                     <div class="col-4"> <a href="images/portfolio/7.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/7.jpg" alt=""/></a> 
                                     </div>                                         
                                     <div class="col-4"> <a href="images/portfolio/8.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/8.jpg" alt=""/></a> 
                                     </div>                                         
                                     <div class="col-4"> <a href="images/portfolio/9.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/9.jpg" alt=""/></a> 
                                     </div>                                         
                                     <div class="col-4"> <a href="images/portfolio/10.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/10.jpg" alt=""/></a> 
                                     </div>                                         
                                     <div class="col-4"> <a href="images/portfolio/11.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/11.jpg" alt=""/></a> 
                                     </div>                                         
                                     <div class="col-4"> <a href="images/portfolio/12.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/12.jpg" alt=""/></a> 
                                     </div>                                         
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.footer-gallery -->                             
                         <div class="col-lg-3 col-sm-6 col-12 contact-widget"> 
                             <h6 class="title"><?php _e( 'CONTACT', 'charles_theme' ); ?></h6> 
                             <ul> 
                                 <li> <i class="flaticon-direction-signs"></i> 
                                     <?php _e( '23A, Queenstown St, Log Vegas, United States.', 'charles_theme' ); ?>
                                 </li>                                     
                                 <li> <i class="flaticon-multimedia-1"></i> <a href="#"><?php _e( 'mailhere@support.com', 'charles_theme' ); ?></a> 
                                 </li>                                     
                                 <li> <i class="fa fa-phone" aria-hidden="true"></i> <a href="#"><?php _e( '(+2) 345  9808  000', 'charles_theme' ); ?></a> 
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                         <!-- /.contact-widget -->                             
                     </div>                         
                     <!-- /.row -->                         
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.top-footer -->                 
             <div class="bottom-footer"> 
                 <div class="container"> 
                     <p><?php _e( '&copy; Copyrights 2018. All Rights Reserved.', 'charles_theme' ); ?></p> 
                 </div>                     
             </div>                 
             <!-- /.bottom-footer -->                 
         </footer>             
         <!-- /.theme-footer-two -->             
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
         <!-- Language Stitcher -->                          
         <!-- Google map js -->                                       
         <!-- Theme js -->                                       
     </div>         
     <!-- /.main-page-wrapper -->                 

<?php get_footer(); ?>