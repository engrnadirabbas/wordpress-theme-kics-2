<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage luigi
 * @since luigi 1.0
 */
 get_header(); ?>

<!-- SLIDER STARTS -->
<div class="slider" style="background-color: #363636;">

    <div id="loader_img" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric1" style="padding:0px;height: 800px">

        <div id="img1" class="image">
        </div>
        <div id="img2" class="image"></div>
        <div id="img3" class="image"></div>
        <div id="img4" class="image"></div>
        <div id="img5" class="image"></div>
<div class="overlay-image"></div>


        <div id="rev_slider_46_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
            <ul>
               
                <?php  $posts = new WP_Query( array( 'post_type' => 'slider' , 'order' => 'ASC' ) );

while($posts->have_posts()) : $posts->the_post();?>

 <li data-index="rs-<?php echo the_excerpt(); ?>" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
"  alt="" data-bgposition="center center" data-kenburns="on" data-duration="8000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->

                        <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 t-center"
                             id="slide-<?php echo the_excerpt(); ?>-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['center','center','center','center']" data-voffset="['-110','-110','-100','-110']"
                             data-fontsize="['16','16','16','16']"
                             data-lineheight="['22','22','22','22']"
                             data-width="['800','800','600','300']"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; min-width: 600px; max-width: 1000px; white-space: normal; text-align:center; letter-spacing:3px; font-weight: 300;">
                        </div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 t-center"
                             id="slide-<?php echo the_excerpt(); ?>-layer-2"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['center','center','center','center']" data-voffset="['-50','-50','-50','-50']"
                             data-fontsize="['42','42','38','20']"
                             data-lineheight="['50','50','38','26']"
                             data-width="['800','800','600','320']"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; min-width: 600px; max-width: 1000px; white-space: normal; text-align:center;">
                             <?php echo get_the_title();?></div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                             id="slide-<?php echo the_excerpt(); ?>-layer-3"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['center','center','center','center']" data-voffset="['30','30','30','30']"
                             data-fontsize="['18','18','18','18']"
                             data-lineheight="['26','26','26','26']"
                             data-width="['600','600','500','420']"
                             data-height="none"
                             data-letter-spacing="normal"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; min-width: 800px; max-width: 1000px; white-space: normal; font-weight: 400; text-align:center;">
                             <font size="5"><?php echo get_the_content();?>
</font>
                        </div>
                        <!-- LAYER NR. 2 -->

                    </li>
<?php endwhile; ?>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>

        </div>

    </div>
    <!-- END REVOLUTION SLIDER -->
</div>



<script>
    // show loading image
    $('#loader_img').show();

    // main image loaded ?
    $('#rev_slider_46_1').on('load', function(){
        // hide/remove the loading image
        $('#loader_img').hide();
    });
</script><!-- /. SLIDER ENDS -->

<!-- INTRO STARTS -->
<div class="container intro-section grey-bg">

    <div class="row no-gutter no-gutter-4">
        <?php  $vision = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 25 ) );

while( $vision->have_posts()) :  $vision->the_post();?>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="block overlay-margin-2">
                <div class="picture"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
" class="img-responsive animate" id="block-img" alt="" style="width: 100%;"></div>
                <div class="info">
                    <div class="heading"><?php echo get_the_title();?></div>
                    <div class="description"><?php echo get_the_content();?></div>
                </div>
            </div>
        </div>
   
               <?php endwhile; ?>
      <?php  $vision = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 29 ) );

while( $vision->have_posts()) :  $vision->the_post();?>
         <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
            <div class="block video overlay-margin-2">
                <div class="picture">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
" class="img-responsive" id="block-img" alt="" style="width: 100%;">
                    <center>
                    <div class="info-overlay">
                        <div class="icon col"><a class="popup-youtube" href="https://www.youtube.com/watch?v=ptrjry2A1WI"><i class="fa fa-play-circle fa-5x"></i></a></div>
                        <div class="heading"><?php echo get_the_title();?></div>
                    <div class="description"><?php echo get_the_content();?></div>
                    </div></center>
                </div>
            </div>
        </div>
              
               <?php endwhile; ?>

 
 <?php  $mission = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 32 ) );

while( $mission->have_posts()) :  $mission->the_post();?>
         
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="block overlay-margin-2">
                <div class="picture"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-responsive animate" id="block-img" alt="" style="max-width: 96%;width: 100%;"  id=""></div>
                <div class="info" style="width: 96%;padding-bottom: 40px;">
                      <div class="heading"><?php echo get_the_title();?></div>
                    <div class="description"><?php echo get_the_content();?></div>
                </div>
            </div>
        </div>
           <?php endwhile; ?>

    </div>
</div><!-- ./ INTRO ENDS -->
<!-- About Us section-->

<div class="home-security-solutions">
    <div class="container">
        <div class="row">
            <?php  $who_we_are = new WP_Query('page_id=35');

while($who_we_are->have_posts()) : $who_we_are->the_post();?>
            <div class="col-lg-9 col-md-8 col-sm-8">
                <div class="herotext">
                    <h2><?php echo the_excerpt(); ?>
</h2>
                    <h1><?php echo get_the_title();?></h1>
                    <div class="line">&nbsp;</div>
                </div>
                <div class="description-about"><div class="description"><div style="text-align: justify; color: rgb(85, 85, 85); line-height: 26px; font-family: Lato, sans-serif; font-size: 15px;"><?php echo get_the_content();?>
&nbsp;</div></div>                </div>
                <div class="button"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/about-us/introduction" class="btn-orange">Learn More<i class="fa fa-chevron-right"></i></a></div>
            <br>
            </div>
               <?php endwhile; ?>
 <?php  $who_we_are = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 38 ) );

while($who_we_are->have_posts()) : $who_we_are->the_post();?>

            <div class="col-lg-3 col-md-4 col-sm-4 why-choose-us">
                <div class="herotext-2">
                     <h2><?php echo the_excerpt(); ?></h2>
                    <h1><?php echo get_the_title();?></h1>
                    <div class="line">&nbsp;</div>
                </div>
                <ul>
                    <ul>
                        <?php echo get_the_content();?>

                    </ul>
        </div>
                       <?php endwhile; ?>

    </div>
</div><!-- /.About Us ENDS-->

<!-- OUR STRENGTHS AND ACHIEVEMENTS STARTS -->

<div class="parallax-1 funfacts" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/data/backgrounds/1.png);background-color:#555555;">
    <div class="container">
        <div class="row">
            <div class="intro">
                <div class="col-lg-12">
                    <h1>Strengths and Achievements in numbers</h1></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="achievements-carousel">
    <?php  $posts = new WP_Query( array( 'post_type' => 'strengths' , 'order' => 'ASC' ) );
    while($posts->have_posts()) : $posts->the_post();?>
                        <div class="">
                            <div class="block">
                                <div class="box">
                                    <h2><?php echo get_the_title();?></h2>
                                    <h1 class="year-color"><?php echo get_the_content();?></h1>
                                </div>
                            </div>
                        </div>
                     <?php endwhile; ?>

                                    </div>
            </div>
        </div>
    </div>
</div><!-- /. OUR STRENGTHS AND ACHIEVEMENTS ENDS -->

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
                <div class="button"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/    about-us/hse-policies" class="btn-orange">Learn More <i class="fa fa-chevron-right"></i></a></div>
            </div>
        </div>
          <?php endwhile; ?>

        <div class="col-lg-6 col-md-6 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="margin-top: -50px">
            <div class="">
                <h2  style="font-size: 28px;
            color: #2c2e30;
            font-weight: 400;
            margin-top: 20px;
            margin-bottom: 21px;
            margin-left: -23px;">What We Believe</h2>
                <div class="row">                  

                    <div class="col-lg-6 col-md-6"><ul class="services">
                        
      <?php  $posts = new WP_Query( array( 'post_type' => 'b1' , 'order' => 'ASC' ) );
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
                      <?php  $posts = new WP_Query( array( 'post_type' => 'b2' , 'order' => 'ASC' ) );
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

<!-- HISTORY TIMELINE STARTS -->

<div class="white-bg">
    <div class="history-timeline"  style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/data/backgrounds/2.png);background-color:#555555;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="herotext-3" style="margin-bottom: 0px;">
                        <div class="boxed-heading" style="background-image: url(images/heading/header-box-white.png);">
                            <h2>OVER THE YEARS</h2>
                            <h1>HISTORY TIMELINE</h1>
                        </div>
                        <div class="description" style="text-align: center !important;">Over the years Forward Sports has achieved a lot due to its commitment and passion. We have the simple goal; achieve highest levels of quality by discovering new horizons of technology.</div>
                    </div>
                </div>
            </div>

            <div class="row">
            <!-- Start -->
                <div class="col-lg-10 col-lg-offset-1 history-timeline-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-justified icon-tabs" role="tablist">
                        <div class="timeline-carousel">
<?php  $posts = new WP_Query( array( 'post_type' => 'h1' , 'order' => 'ASC' ) );
    while($posts->have_posts()) : $posts->the_post();?> 
                            <li role="presentation" class="active">
                            <a href="#<?php echo get_the_title();?>" aria-controls="<?php echo get_the_title();?>" role="tab" data-toggle="tab">
                                 <div class="caption"><?php echo get_the_title();?></div>
                             <div class="icon" style="width: 100%;"><center><i class="fa fa-caret-down"></center></i></div>
                                </a>
                              </li>
   <?php endwhile; ?>

                        </div>
                    </ul>
                    <!-- Tab panes -->

                    <div class="tab-content" style="margin-bottom: 35px;">
             <?php  $posts = new WP_Query( array( 'post_type' => 'h1' , 'order' => 'ASC' ) );
    while($posts->have_posts()) : $posts->the_post();?> 

             <div role="tabpanel" class="tab-pane fade in active" id="<?php echo get_the_title();?>">
                  <h1><?php echo get_the_excerpt();?></h1>
                  <div class="description" style="color: #ffffff !important; text-align: center !important;">
                 <?php echo get_the_content();?><br>                                    </div>
                 </div>

  <?php endwhile; ?>
                    </div>
                </div>
           <!-- End -->


            </div>

        </div>

    </div>
</div>
</div>
</div>
</div>
</div><!-- /. HISTORY TIMELINE ENDS -->

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
                <div class="button"><a href="about-us-gallery/leadership" class="btn-orange">Learn More <i class="fa fa-chevron-right"></i></a></div>
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

<!-- PRIDE OF PAKISTAN  -->

<div class="callus parallax-3" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/data/backgrounds/flag-bg.jpg);background-color:#555555;">
    <div class="container">
        <div class="row intro">
            <div class="col-lg-12">
                <h1>PRIDE OF PAKISTAN</h1>
                <div class="description" style="color: #ffffff !important;text-align: center !important;">PRIDE OF PAKISTAN
FORWARD SPORTS WAS THE OFFICIAL MANUFACTURER OF THE 2014 FIFA WORLD CUP MATCH BALL "BRAZUCA"</div>
            </div>
        </div>
    </div>
</div><!-- /. PRIDE OF PAKISTAN ENDS -->

<!-- Our Products STARTS -->
<div class="white-bg shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="herotext-3">
                    <div class="boxed-heading">
                        <h2>WHAT WE MAKE</h2>
                        <h1>OUR PRODUCTS</h1>
                    </div>
                    <div class="description" style="text-align: center !important;"><p style="text-align: center; ">Some of our featured products we introduced in recent years</p></div>
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="block">
                                    <?php  $posts = new WP_Query( array( 'post_type' => 'balls' , 'order' => 'ASC' ) );
                                    while($posts->have_posts()) : $posts->the_post();?> 
                                    <figure class="item new col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="products/2/soccer-balls">
                                        <div class="product">
                                            <div class="picture">
                        <img src='<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>'  class='img-responsive center-block'>
                                                
                                            </div>
                                            <div class="info-products">
                                                <div class="name"><?php echo get_the_title();?></div>
                                            </div>
                                        </div>
                                    </a>
                                </figure>
                                        <?php endwhile; ?>                


                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:40px;">
                        <div class="herotext-3">
                            <div class="button"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/product-categories" class="btn-orange">All Products <i class="fa fa-chevron-right"></i></a></div>
                        </div>
                    </div>
                </div>
    </div>
</div><!-- /. Our Products ENDS -->

<!-- LATEST NEWS STARTS -->
<div class="latest-news" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/data/backgrounds/background.jpg);background-color:#555555;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="herotext-3">
                    <div class="boxed-heading">
                        <h2>What's Happening</h2>
                        <h1>News & Events</h1>
                    </div>
                    <div class="description"><p style="text-align: center; ">Highlights of activities, events and news about Forward Sports</p></div>
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
                        <div class="button"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/news-events-detail/Visit-of-students-from-University-of-Management-and-Technology(UMT)" class="btn-orange">Read More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                </div>
                      <?php endwhile; ?>   
            
        </div>
        <div class="col-lg-10 col-lg-offset-1">
            <div class="herotext-3">
                <div class="button"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/news-events" class="btn-orange">Read All <i class="fa fa-chevron-right"></i></a></div>
            </div>
        </div>
    </div>
</div><!-- /. LATEST NEWS ENDS -->

<!-- CLIENTS STARTS -->
<div class="white-bg">
    <div class="container clients">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="herotext-3">
                    <div class="boxed-heading">
                        <h2>Renowned Global Brands</h2>
                        <h1>Our Clients</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 clients-carousel">
                    <?php  $posts = new WP_Query( array( 'post_type' => 'client' , 'order' => 'ASC' ) );
                                    while($posts->have_posts()) : $posts->the_post();?> 
                    <div class="block">
                        <a href="<?=site_url();?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-responsive center-block" alt="Adidas" title="Adidas"></a>
                    </div>

                                               <?php endwhile; ?>   
          

                            </div>
        </div>
    </div>
</div><!-- /. CLIENTS ENDS -->

  <?php get_footer(); ?>