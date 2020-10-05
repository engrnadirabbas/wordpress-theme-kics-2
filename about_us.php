<?php
/**
/* Template Name: about
 *
 * Displays Only about template
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
                     <h1>ABOUT US </h1>
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
<!-- About Us section-->

<br>
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
                <div class="button"><a href="<?=site_url();?>/about-us" class="btn-orange">Learn More<i class="fa fa-chevron-right"></i></a></div>
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

    </div>  </div>
<!-- /.About Us ENDS-->
<?php get_footer(); ?>