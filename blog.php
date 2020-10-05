<?php
/**
/* Template Name: blogs
 *
 * Displays Only blog template
 *
 * @package WordPress
 * @subpackage luigi
 * @since luigi 1.0
 */
 get_header(); ?>

    <title>Forward Sports - Contact __ </title>
 <div class="overlay-image"></div>
 <div class="contact-us">
    <!--Starts Banner Image-->
     <div class='inner-banner-style banner-img-01' style='background-image: url(data/backgrounds/contact.jpg);'>     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="info">
                     <h1>BLOGS </h1>
                     <ol class="breadcrumb">
                         <li><a href="index.php.html">Home </a></li>
                         <li class="active">Get in Touch </li>
                     </ol>
                     <div class="line"></div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--Ends Banner Image-->
 <!-- LATEST NEWS STARTS -->
<div class="latest-news" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/data/backgrounds/background.jpg);background-color:#555555;">
    <div class="container">
         <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="herotext-3">
                    <div class="boxed-heading">
                        <h2>What's Happening</h2>
                        <h1><?php dynamic_sidebar('blog-title')?></h1>
                    </div>
                    <div class="description"><p style="text-align: center; "><?php dynamic_sidebar('blog-content')?></p></div>
                </div>
            </div>
        </div>
        <div class="news-carousel">
            <?php  $posts = new WP_Query( array( 'post_type' => 'news' , 'order' => 'ASC' ) );
                                    while($posts->have_posts()) : $posts->the_post();?> 
                            <div class="news">
                    <div class='picture'><img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>'  class='img-thumbnail' alt='Visit of students from University of Management and Technology(UMT)'></div>                    <div class="block">
                        <div class="date"><?php echo the_excerpt(); ?></div>
                        <h1><?php echo get_the_title();?></h1>
                        <div class="description"><?php echo get_the_content();?></div>
                        <div class="button"><a href="<?=site_url();?>/about-us" class="btn-orange">Read More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                </div>
                      <?php endwhile; ?>   
            
        </div>
        <div class="col-lg-10 col-lg-offset-1">
            <div class="herotext-3">
                <div class="button"><a href="<?=site_url();?>/about-us" class="btn-orange">Read All <i class="fa fa-chevron-right"></i></a></div>
            </div>
        </div>
    </div>
</div><!-- /. LATEST NEWS ENDS -->
 <!-- Body ENDS-->
      <?php get_footer(); ?>