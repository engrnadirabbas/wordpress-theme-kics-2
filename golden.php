<?php
/**
/* Template Name: golden
 *
 * Displays Only blog template
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
                     <h1>GOLDEN</h1>
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
 <!-- OUR commitment starts -->

<div class="container home-our-services">
    <div class="row no-gutter no-gutter-5 no-gutter-6">
        <?php  $our_commitment = new WP_Query('page_id=41');

while($our_commitment->have_posts()) : $our_commitment->the_post();?>

        <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="herotext overlay-margin">
                <h2><?php echo the_excerpt(); ?>
</h2>
                <h1><?php echo get_the_title();?>
</h1>
                <div class="line">&nbsp;</div>

                <div class="desciption">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <p><?php echo get_the_content();?>
</p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 </div>
                <div class="button"><a href="<?=site_url();?>/about-us" class="btn-orange">Learn More <i class="fa fa-chevron-right"></i></a></div>
            </div>
        </div>
          <?php endwhile; ?>

        <div class="col-lg-6 col-md-6 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="margin-top: -50px">
            <div class="">
                <!-- <h2  style="font-size: 28px;
            color: #2c2e30;
            font-weight: 400;
            margin-top: 20px;
            margin-bottom: 21px;
            margin-left: -23px;">What We Believe</h2> -->
                <div class="row">                  

                    <div class="col-lg-6 col-md-6"><ul class="services">
                        
      <?php  $posts = new WP_Query( array( 'post_type' => 'Golden_B1' , 'order' => 'ASC' ) );
    while($posts->have_posts()) : $posts->the_post();?> <li>
    <div class="icon"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
"></div>
                           <h1><?php echo get_the_title();?></h1>
                           <div class="line2"></div>
                           <div class="desciption"><?php echo get_the_content();?></div>
                        </li>
                                  <?php endwhile; ?>
                     </ul>
                  </div>
                  <div class="col-lg-6 col-md-6">  
                                          <ul class="services">
                      <?php  $posts = new WP_Query( array( 'post_type' => 'Golden_B2' , 'order' => 'ASC' ) );
    while($posts->have_posts()) : $posts->the_post();?>  
                                <li> <div class="icon"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
"></div>
                              <h1><?php echo get_the_title();?></h1>
                                    <div class="line2"></div>
                                    <div class="desciption"><?php echo get_the_content();?></div>
                        </li>
                        
                                                          <?php endwhile; ?>

                     </ul>
                  </div>
               </div>            </div>
        </div>
    </div>
</div><!-- /. OUR commitment ENDS -->
      <?php get_footer(); ?>