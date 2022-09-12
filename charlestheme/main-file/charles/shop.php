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
                                 <p><?php _e( 'supporthere@mail.com', 'charles_theme' ); ?></p> 
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
                                     <li class="active"><a href="#"><?php _e( 'PAGES', 'charles_theme' ); ?></a> 
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
                     <h2><?php _e( 'SHOP', 'charles_theme' ); ?></h2> 
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.theme-inner-banner -->             
         <!-- 
=============================================
	Shop Page
============================================== 
-->             
         <div class="shop-page section-spacing"> 
             <div class="container"> 
                 <div class="shop-filter"> 
                     <ul class="clearfix"> 
                         <li>
                             <?php _e( 'Showing all 1-15 results', 'charles_theme' ); ?>
                         </li>                             
                         <li> 
                             <select class="form-control" id="exampleSelect1"> 
                                 <option>
                                     <?php _e( 'Default Sorting', 'charles_theme' ); ?>
                                 </option>                                     
                                 <option>
                                     <?php _e( 'Price', 'charles_theme' ); ?>
                                 </option>                                     
                                 <option>
                                     <?php _e( 'Size', 'charles_theme' ); ?>
                                 </option>                                     
                                 <option>
                                     <?php _e( 'Trending', 'charles_theme' ); ?>
                                 </option>                                     
                                 <option>
                                     <?php _e( 'Upcoming', 'charles_theme' ); ?>
                                 </option>                                     
                             </select>                                 
                         </li>                             
                     </ul>                         
                 </div>                     
                 <!-- /.shop-filter -->                     
                 <div class="row"> 
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/1.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Power of Elevation', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$32.70', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/2.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Business Plans', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$47.70', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/3.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Consulting Bible', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$26.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/4.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Process Consulting', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$46.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/5.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Science of overcoming', 'charles_theme' ); ?></a></h5> 
                                 <div class="price"><del><?php _e( '$36.00', 'charles_theme' ); ?> </del> 
                                     <?php _e( '$32.70', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/6.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Threescore & More', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$30.10', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/7.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'The Mckinsey Way', 'charles_theme' ); ?></a></h5> 
                                 <div class="price"><del><?php _e( '$43.00', 'charles_theme' ); ?> </del>
                                     <?php _e( '$40.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/8.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Outlier Approach', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$33.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/9.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Velocity Advantage', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$26.15', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/10.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'The Insights', 'charles_theme' ); ?></a></h5> 
                                 <div class="price"><del><?php _e( '$43.00', 'charles_theme' ); ?></del>
                                     <?php _e( '$38.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/11.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Consultant Speaker', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$26.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                     <div class="col-lg-3 col-md-4 col-6"> 
                         <div class="single-product"> 
                             <div class="image-box"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/shop/12.jpg" alt=""/> 
                             </div>                                 
                             <!-- /.image-box -->                                 
                             <div class="product-name"> 
                                 <h5><a href="shop-details.html"><?php _e( 'Irresistible', 'charles_theme' ); ?></a></h5> 
                                 <div class="price">
                                     <?php _e( '$46.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <div class="add-to-cart"><a href="shop-details.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                 </div>                                     
                             </div>                                 
                         </div>                             
                         <!-- /.single-product -->                             
                     </div>                         
                     <!-- /.col- -->                         
                 </div>                     
                 <!-- /.row- -->                     
                 <div class="theme-pagination text-center"> 
                     <ul> 
                         <li><a href="#"><?php _e( '1', 'charles_theme' ); ?></a>
                         </li>                             
                         <li class="active"><a href="#"><?php _e( '2', 'charles_theme' ); ?></a>
                         </li>                             
                         <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                         </li>                             
                     </ul>                         
                 </div>                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.shop-page -->             
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