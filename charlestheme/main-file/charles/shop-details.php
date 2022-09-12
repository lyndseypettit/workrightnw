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
                     <h2><?php _e( 'SHOP DETAILS', 'charles_theme' ); ?></h2> 
                 </div>                     
                 <!-- /.container -->                     
             </div>                 
             <!-- /.overlay -->                 
         </div>             
         <!-- /.theme-inner-banner -->             
         <!-- 
=============================================
	Shop Details
============================================== 
-->             
         <div class="shop-details"> 
             <div class="container"> 
                 <div class="product-details"> 
                     <div class="row"> 
                         <div class="col-lg-5 col-12"> 
                             <div class="product-tab clearfix"> 
                                 <div class="product-preview"> 
                                     <div class="tab-content"> 
                                         <div id="tag-one" class="tab-pane active"> 
                                             <img src="<?php echo get_template_directory_uri(); ?>/images/shop/13.jpg" alt=""/> 
                                         </div>                                             
                                         <div id="tag-two" class="tab-pane fade"> 
                                             <img src="<?php echo get_template_directory_uri(); ?>/images/shop/14.jpg" alt=""/> 
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.product-preview -->                                     
                                 <div class="product-thumbnail"> 
                                     <ul class="nav-tabs nav"> 
                                         <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tag-one"><img src="<?php echo get_template_directory_uri(); ?>/images/shop/15.jpg" alt=""/></a> 
                                         </li>                                             
                                         <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tag-two"><img src="<?php echo get_template_directory_uri(); ?>/images/shop/16.jpg" alt=""/></a> 
                                         </li>                                             
                                     </ul>                                         
                                 </div>                                     
                                 <!-- /.product-thumbnail -->                                     
                             </div>                                 
                             <!-- /.product-tab -->                                 
                         </div>                             
                         <div class="col-lg-7 col-12"> 
                             <div class="product-info"> 
                                 <h5 class="title"><?php _e( 'Contract and Fee-Setting Guide for Consultants', 'charles_theme' ); ?></h5> 
                                 <div class="price"><del><?php _e( '$43.00', 'charles_theme' ); ?></del>
                                     <?php _e( '$38.00', 'charles_theme' ); ?>
                                 </div>                                     
                                 <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for being a friend.', 'charles_theme' ); ?></p> 
                                 <ul class="order-box"> 
                                     <li>
                                         <?php _e( 'Qty:', 'charles_theme' ); ?>
                                     </li>                                         
                                     <li> 
                                         <button id="value-decrease">-</button>                                             
                                         <input type="number" min="1" max="22" value="3" class="val" disabled id="product-value"/> 
                                         <button id="value-increase">+ </button>                                             
                                     </li>                                         
                                 </ul>                                     <a href="#" class="theme-button-one"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a> 
                             </div>                                 
                             <!-- /.product-info -->                                 
                         </div>                             
                     </div>                         
                 </div>                     
                 <!-- /.product-details -->                     
                 <div class="product-review-tab"> 
                     <ul class="nav nav-tabs"> 
                         <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description"><?php _e( 'Description', 'charles_theme' ); ?></a> 
                         </li>                             
                         <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#review"><?php _e( 'Reviews(02)', 'charles_theme' ); ?></a> 
                         </li>                             
                     </ul>                         
                     <!-- Tab panes -->                         
                     <div class="tab-content"> 
                         <div id="description" class="tab-pane active"> 
                             <p><?php _e( 'This tropic port aboard this tiny ship today still wanted by the government apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where new worlds to seek out new life and new civilizations to boldly no man has gone before you would see the biggest gift would be from me and the card.', 'charles_theme' ); ?></p> 
                             <p><?php _e( 'That this group would somehow form a family that\'s the way we all became the Brady Bunch apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                         </div>                             
                         <div id="review" class="tab-pane fade"> 
                             <div class="single-review clearfix"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/17.jpg" alt="" class="float-left"/> 
                                 <div class="comment float-left"> 
                                     <h6><?php _e( 'Alex Martin', 'charles_theme' ); ?></h6> 
                                     <ul> 
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star-half-o" aria-hidden="true"></i>
                                         </li>                                             
                                     </ul>                                         
                                     <p><?php _e( 'Its a civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you.', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.comment -->                                     
                             </div>                                 
                             <!-- /.single-review -->                                 
                             <div class="single-review clearfix"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/17.jpg" alt="" class="float-left"/> 
                                 <div class="comment float-left"> 
                                     <h6><?php _e( 'James Frank', 'charles_theme' ); ?></h6> 
                                     <ul> 
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star" aria-hidden="true"></i>
                                         </li>                                             
                                         <li><i class="fa fa-star-half-o" aria-hidden="true"></i>
                                         </li>                                             
                                     </ul>                                         
                                     <p><?php _e( 'Its a civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you.', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.comment -->                                     
                             </div>                                 
                             <!-- /.single-review -->                                 
                         </div>                             
                     </div>                         
                 </div>                     
                 <!-- /.product-review-tab -->                     
                 <div class="related-product shop-page"> 
                     <div class="theme-title-one"> 
                         <h2><?php _e( 'RELATED PRODUCTS', 'charles_theme' ); ?></h2> 
                     </div>                         
                     <!-- /.theme-title-one -->                         
                     <div class="celarfix"> 
                         <div class="related-product-slider"> 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/1.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Power of Elevation', 'charles_theme' ); ?></a></h5> 
                                         <div class="price">
                                             <?php _e( '$32.70', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/2.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Business Plans', 'charles_theme' ); ?></a></h5> 
                                         <div class="price">
                                             <?php _e( '$47.70', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/3.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Consulting Bible', 'charles_theme' ); ?></a></h5> 
                                         <div class="price">
                                             <?php _e( '$26.00', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/4.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Process Consulting', 'charles_theme' ); ?></a></h5> 
                                         <div class="price">
                                             <?php _e( '$46.00', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/5.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Science of overcoming', 'charles_theme' ); ?></a></h5> 
                                         <div class="price"><del><?php _e( '$36.00', 'charles_theme' ); ?> </del> 
                                             <?php _e( '$32.70', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/6.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Threescore & More', 'charles_theme' ); ?></a></h5> 
                                         <div class="price">
                                             <?php _e( '$30.10', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/7.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'The Mckinsey Way', 'charles_theme' ); ?></a></h5> 
                                         <div class="price"><del><?php _e( '$43.00', 'charles_theme' ); ?> </del>
                                             <?php _e( '$40.00', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/8.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Outlier Approach', 'charles_theme' ); ?></a></h5> 
                                         <div class="price">
                                             <?php _e( '$33.00', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                             <div class="item"> 
                                 <div class="single-product"> 
                                     <div class="image-box"> 
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/shop/9.jpg" alt=""/> 
                                     </div>                                         
                                     <!-- /.image-box -->                                         
                                     <div class="product-name"> 
                                         <h5><a href="#"><?php _e( 'Velocity Advantage', 'charles_theme' ); ?></a></h5> 
                                         <div class="price">
                                             <?php _e( '$26.15', 'charles_theme' ); ?>
                                         </div>                                             
                                         <div class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php _e( 'ADD TO CART', 'charles_theme' ); ?></a>
                                         </div>                                             
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.single-product -->                                     
                             </div>                                 
                             <!-- /.col- -->                                 
                         </div>                             
                         <!-- /.related-product-slider -->                             
                     </div>                         
                 </div>                     
                 <!-- /.related-product -->                     
             </div>                 
             <!-- /.container -->                 
         </div>             
         <!-- /.shop-details -->             
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