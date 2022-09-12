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
                                     <li class="active"><a href="#"><?php _e( 'Blog', 'charles_theme' ); ?></a> 
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
                     <h2><?php _e( 'Blog SINGLE', 'charles_theme' ); ?></h2> 
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
         <div class="our-blog section-spacing"> 
             <div class="container"> 
                 <div class="row"> 
                     <div class="col-xl-9 col-lg-8 col-12"> 
                         <div class="post-wrapper blog-details"> 
                             <div class="single-blog"> 
                                 <div class="image-box"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/9.jpg" alt=""/> 
                                     <div class="overlay"><a href="#" class="date"><?php _e( 'Feb 06, 2018', 'charles_theme' ); ?></a>
                                     </div>                                         
                                 </div>                                     
                                 <!-- /.image-box -->                                     
                                 <div class="post-meta"> 
                                     <h5 class="title"><?php _e( 'Its like a kind of torture to have to watch the show', 'charles_theme' ); ?></h5> 
                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for being a friend.', 'charles_theme' ); ?></p> 
                                     <p><?php _e( 'That this group would somehow form a family that\'s the way we all became the Brady Bunch apartment in the sky moving on up to the east side a family to explore strange new worlds.', 'charles_theme' ); ?></p> 
                                     <p><?php _e( 'This tropic port aboard this tiny ship today still wanted by the government apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card.', 'charles_theme' ); ?></p> 
                                     <div class="mark-text"> 
                                         <div class="row"> 
                                             <div class="col-md-5">
                                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/13.jpg" alt=""/>
                                             </div>                                                 
                                             <div class="col-md-7"> 
                                                 <div class="inner-text"> 
                                                     <p><?php _e( 'Somehow form a family that\'s the way we all became the Brady Bunch apartment in the sky moving on up to the family tools explore strange new worlds us here each week my friends you\'re sure to get a smile.', 'charles_theme' ); ?></p> 
                                                     <h6><?php _e( '- San Johnson -', 'charles_theme' ); ?></h6> 
                                                 </div>                                                     
                                             </div>                                                 
                                             <!-- /.col- -->                                                 
                                         </div>                                             
                                         <!-- /.row -->                                             
                                     </div>                                         
                                     <!-- /.mark-text -->                                         
                                     <p><?php _e( 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for being a friend.', 'charles_theme' ); ?></p> 
                                     <p><?php _e( 'To seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for new civilizations', 'charles_theme' ); ?></p> 
                                 </div>                                     
                                 <!-- /.post-meta -->                                     
                                 <div class="share-option clearfix"> 
                                     <ul class="tag-meta float-left"> 
                                         <li><i class="fa fa-tags" aria-hidden="true"></i> 
                                             <?php _e( 'Tags :', 'charles_theme' ); ?>
                                         </li>                                             
                                         <li><a href="#"><?php _e( 'Business,', 'charles_theme' ); ?></a>
                                         </li>                                             
                                         <li><a href="#"><?php _e( 'Consulting,', 'charles_theme' ); ?></a>
                                         </li>                                             
                                         <li><a href="#"><?php _e( 'Financial', 'charles_theme' ); ?></a>
                                         </li>                                             
                                     </ul>                                         
                                     <ul class="social-icon float-right"> 
                                         <li><i class="fa fa-share-alt" aria-hidden="true"></i> 
                                             <?php _e( 'Share :', 'charles_theme' ); ?>
                                         </li>                                             
                                         <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                         </li>                                             
                                         <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                         </li>                                             
                                     </ul>                                         
                                 </div>                                     
                                 <!-- /.share-option -->                                     
                             </div>                                 
                             <!-- /.single-blog -->                                 
                         </div>                             
                         <!-- /.post-wrapper -->                             
                         <!-- ==================== Related Post ================= -->                             
                         <div class="inner-box"> 
                             <div class="theme-title-one"> 
                                 <h2><?php _e( 'RELATED POSTS', 'charles_theme' ); ?></h2> 
                             </div>                                 
                             <!-- /.theme-title-one -->                                 
                             <div class="row"> 
                                 <div class="related-post-slider"> 
                                     <div class="item"> 
                                         <div class="single-blog"> 
                                             <div class="image-box"> 
                                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/14.jpg" alt=""/> 
                                                 <div class="overlay"><a href="#" class="date"><?php _e( 'Feb 06, 2018', 'charles_theme' ); ?></a>
                                                 </div>                                                     
                                             </div>                                                 
                                             <!-- /.image-box -->                                                 
                                             <div class="post-meta"> 
                                                 <h5 class="title"><a href="#"><?php _e( 'Trouble with the law since to eastern side of yellow mint', 'charles_theme' ); ?></a></h5> <a href="#" class="read-more"><?php _e( 'READ MORE', 'charles_theme' ); ?></a> 
                                             </div>                                                 
                                             <!-- /.post-meta -->                                                 
                                         </div>                                             
                                         <!-- /.single-blog -->                                             
                                     </div>                                         
                                     <!-- /.col- -->                                         
                                     <div class="item"> 
                                         <div class="single-blog"> 
                                             <div class="image-box"> 
                                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/15.jpg" alt=""/> 
                                                 <div class="overlay"><a href="#" class="date"><?php _e( 'Mar 30, 2018', 'charles_theme' ); ?></a>
                                                 </div>                                                     
                                             </div>                                                 
                                             <!-- /.image-box -->                                                 
                                             <div class="post-meta"> 
                                                 <h5 class="title"><a href="#"><?php _e( 'Kind of torture to have to watch the show the one day', 'charles_theme' ); ?></a></h5> <a href="#" class="read-more"><?php _e( 'READ MORE', 'charles_theme' ); ?></a> 
                                             </div>                                                 
                                             <!-- /.post-meta -->                                                 
                                         </div>                                             
                                         <!-- /.single-blog -->                                             
                                     </div>                                         
                                     <!-- /.col- -->                                         
                                     <div class="item"> 
                                         <div class="single-blog"> 
                                             <div class="image-box"> 
                                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/16.jpg" alt=""/> 
                                                 <div class="overlay"><a href="#" class="date"><?php _e( 'Apr 14, 2018', 'charles_theme' ); ?></a>
                                                 </div>                                                     
                                             </div>                                                 
                                             <!-- /.image-box -->                                                 
                                             <div class="post-meta"> 
                                                 <h5 class="title"><a href="#"><?php _e( 'Make the best of things its an uphill climb long time', 'charles_theme' ); ?></a></h5> <a href="#" class="read-more"><?php _e( 'READ MORE', 'charles_theme' ); ?></a> 
                                             </div>                                                 
                                             <!-- /.post-meta -->                                                 
                                         </div>                                             
                                         <!-- /.single-blog -->                                             
                                     </div>                                         
                                     <!-- /.col- -->                                         
                                 </div>                                     
                                 <!-- /.related-product-slider -->                                     
                             </div>                                 
                             <!-- /.row -->                                 
                         </div>                             
                         <!-- /.inner-box -->                             
                         <!-- ==================== Comment Area ================= -->                             
                         <div class="inner-box comment-area"> 
                             <div class="theme-title-one"> 
                                 <h2><?php _e( 'COMMENTS(02)', 'charles_theme' ); ?></h2> 
                             </div>                                 
                             <!-- /.theme-title-one -->                                 
                             <div class="single-comment clearfix"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/17.jpg" alt="" class="float-left"/> 
                                 <div class="comment float-left"> 
                                     <h6><?php _e( 'Alex Martin', 'charles_theme' ); ?></h6> 
                                     <p><?php _e( 'Its a civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you.', 'charles_theme' ); ?></p> <a href="#"><?php _e( 'REPLY', 'charles_theme' ); ?></a> 
                                 </div>                                     
                                 <!-- /.comment -->                                     
                             </div>                                 
                             <!-- /.single-comment -->                                 
                             <div class="single-comment clearfix"> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/blog/17.jpg" alt="" class="float-left"/> 
                                 <div class="comment float-left"> 
                                     <h6><?php _e( 'James Frank', 'charles_theme' ); ?></h6> 
                                     <p><?php _e( 'Its a civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you.', 'charles_theme' ); ?></p> <a href="#"><?php _e( 'REPLY', 'charles_theme' ); ?></a> 
                                 </div>                                     
                                 <!-- /.comment -->                                     
                             </div>                                 
                             <!-- /.single-comment -->                                 
                         </div>                             
                         <!-- /.inner-box -->                             
                         <!-- ==================== Comment Form ================= -->                             
                         <div class="inner-box comment-form"> 
                             <div class="theme-title-one"> 
                                 <h2><?php _e( 'POST A COMMENTS', 'charles_theme' ); ?></h2> 
                             </div>                                 
                             <!-- /.theme-title-one -->                                 
                             <form action="<?php echo get_template_directory_uri(); ?>/#" class="theme-form-one"> 
                                 <div class="row"> 
                                     <div class="col-md-6 col-12">
                                         <input type="text" placeholder="Name"/>
                                     </div>                                         
                                     <div class="col-md-6 col-12">
                                         <input type="text" placeholder="Phone"/>
                                     </div>                                         
                                     <div class="col-12">
                                         <input type="email" placeholder="Email"/>
                                     </div>                                         
                                     <div class="col-12">
                                         <textarea placeholder="Comments"></textarea>
                                     </div>                                         
                                 </div>                                     
                                 <button class="theme-button-one">
                                     <?php _e( 'POST COMMENT', 'charles_theme' ); ?>
                                 </button>                                     
                             </form>                                 
                         </div>                             
                         <!-- /.inner-box -->                             
                     </div>                         
                     <!-- ===================== Blog Sidebar ==================== -->                         
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar"> 
                         <div class="sidebar-container sidebar-search"> 
                             <form action="<?php echo get_template_directory_uri(); ?>/#"> 
                                 <input type="text" placeholder="Search..."/> 
                                 <button><i class="fa fa-search" aria-hidden="true"></i>
                                 </button>                                     
                             </form>                                 
                         </div>                             
                         <!-- /.sidebar-search -->                             
                         <div class="sidebar-container sidebar-categories"> 
                             <h5 class="title"><?php _e( 'Categories', 'charles_theme' ); ?></h5> 
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
                             </ul>                                 
                         </div>                             
                         <!-- /.sidebar-categories -->                             
                         <div class="sidebar-container sidebar-recent-post"> 
                             <h5 class="title"><?php _e( 'Recent Posts', 'charles_theme' ); ?></h5> 
                             <ul> 
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/6.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'World don\'t move to beat of just one drum.', 'charles_theme' ); ?></a> 
                                         <div class="date">
                                             <?php _e( '5 minutes ago', 'charles_theme' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/7.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'Be right for you may not be right for some.', 'charles_theme' ); ?></a> 
                                         <div class="date">
                                             <?php _e( '2 days ago', 'charles_theme' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                                 <li class="clearfix"> 
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/8.jpg" alt="" class="float-left"/> 
                                     <div class="post float-left"> <a href="blog-details.html"><?php _e( 'World don\'t move to beat of just one drum.', 'charles_theme' ); ?></a> 
                                         <div class="date">
                                             <?php _e( '1 month ago', 'charles_theme' ); ?>
                                         </div>                                             
                                     </div>                                         
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                         <!-- /.sidebar-recent-post -->                             
                         <div class="sidebar-container sidebar-archives"> 
                             <h5 class="title"><?php _e( 'Archives', 'charles_theme' ); ?></h5> 
                             <ul> 
                                 <li><a href="#"><?php _e( 'January 2018', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'February 2018', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'March 2018', 'charles_theme' ); ?></a>
                                 </li>                                     
                             </ul>                                 
                         </div>                             
                         <!-- /.sidebar-archives -->                             
                         <div class="sidebar-tags"> 
                             <h5 class="title"><?php _e( 'tags', 'charles_theme' ); ?></h5> 
                             <ul class="clearfix"> 
                                 <li><a href="#"><?php _e( 'Business', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Consulting', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Sales', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Startup', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li class="active"><a href="#"><?php _e( 'Marketing', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Services', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Financial', 'charles_theme' ); ?></a>
                                 </li>                                     
                                 <li><a href="#"><?php _e( 'Research', 'charles_theme' ); ?></a>
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
         <!-- /.blog-details -->             
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