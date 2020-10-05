<?php
/**
/* Template Name: leader
 *
 * Displays Only menu template
 *
 * @package WordPress
 * @subpackage luigi
 * @since luigi 1.0
 */
 get_header(); ?>
      <!--Starts Banner Image-->
     <div class='inner-banner-style banner-img-01' style='background-image: url(data/backgrounds/contact.jpg);'>     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="info">
                     <h1>Team </h1>
                     <ol class="breadcrumb">
                         <li><a href="<?=site_url();?>">Home </a></li>
                         <li class="active">Get in Touch </li>
                     </ol>
                     <div class="line"></div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--Ends Banner Image-->
 <!-- OUR Leadership STARTS -->

<div class="container home-our-team" style="padding-bottom: 50px;">
    <div class="row no-gutter no-gutter-5 no-gutter-6">
       
         <?php  $our_commitment = new WP_Query('page_id=51');

while($our_commitment->have_posts()) : $our_commitment->the_post();?>

        <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="herotext overlay-margin">
                <h2><?php echo the_excerpt(); ?></h2>
                <h1><?php echo get_the_title(); ?></h1>
                <div class="line">&nbsp;</div>
                <div class="text"><p><?php echo get_the_content(); ?><br></p></div>
                <div class="button"><a href="<?=site_url();?>/about-us" class="btn-orange">Learn More <i class="fa fa-chevron-right"></i></a></div>
            </div>
        </div>
                     <?php endwhile; ?>


        <div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-1" style="margin-top: -40px;">
            <div class="our-team-carousel">
                  <?php  $posts = new WP_Query( array( 'post_type' => 'team' , 'order' => 'ASC' ) );
    while($posts->have_posts()) : $posts->the_post();?>
                <div class="block">
                        <div class="teamimage">
                    <center><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-responsive" alt="" style="padding-top:10px;padding-left: 10px;padding-right: 10px;"></center>
                        </div>
                        <div class="info">
                            <div class="name"><?php echo get_the_title();?></div>
                            <div class="designation">&nbsp;<?php echo get_the_content();?></div>
                        </div>
                    </div>
                                        <?php endwhile; ?>                
                
            </div>
        </div>
    </div>
</div><!-- /. OUR Leadership ENDS -->
     <?php get_footer(); ?>