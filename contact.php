<?php
/**
/* Template Name: contact
 *
 * Displays Only contact template
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
                     <h1>Contact Us </h1>
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
 <!-- Body STARTS-->
 <div class="container address">
     <div class="row no-gutter no-gutter-5 no-gutter-6">
         <div class="col-lg-4 col-md-4 col-sm-6">
             <div class="herotext overlay-margin">
                 <h1>Get in Touch </h1>
                 <div class="text">Feel free to give __ a call or send __ a message! </div>
                 <div class="line">&nbsp; </div>

                 <ul class="bullets-contact">
                     <i class="fa fa-home" style="font-size: 18px;color: #000000"></i><p style="display: inline-block;color:#555555;padding-left: 26px;margin-top: -23px;padding-bottom: 6px;">Wazirabad Road, Opposite Sahowala ___ Stop,  Sialkot - ________ </p>
                     <li><i class="fa fa-phone-square"></i>  +92-52-3571800-4 <p style="padding-left: 27px;color:#555555;">+92-52-3571800-4 </p></li>
                     <li><a href="mailto:info@forward.pk"><i class="fa fa-envelope-square"></i> info@forward.pk  <p style="padding-left: 27px;color:#555555;">hr@forward.pk </p></a></li>
                 </ul>
                 <h2>Follow Us </h2>
                 <div class="line2"></div>
                 <ul class="bullets-contact">
                     <li><a href="http://www.facebook.com/forwardsports" target="_blank"><i class="fa fa-facebook"></i> Facebook </a></li>
                     <li><a href="http://www.youtube.com/user/forwardsportspk/" target="_blank"><i class="fa fa-youtube"></i> Youtube </a></li>
                 </ul>

             </div>
         </div>
         <div class="col-lg-8 col-md-8 col-sm-6" style="padding-left: 10px">
             <div class="send-us-message">
                 <h1 class="hidden-xs">send us a message </h1>
                 <h1 style="padding-top: 35px;" class="hidden-lg hidden-sm hidden-md">send us a message </h1>

                 <form method='post' name='ContactForm' action="process.php" style="padding-top: 20px">
                     <div class="col-lg-offset-1 col-lg-5">
                         <div class="form-group">
                             <input type="text" class="form-control" name="name" placeholder="Full Name *" required="" />
                         </div>
                     </div>
                     <div class="col-lg-offset-1 col-lg-5">
                         <div class="form-group">
                             <input type="email" class="form-control" name="email" placeholder="Email Address *" required="" />
                         </div>
                     </div>
                     <div class="col-lg-offset-1 col-lg-5">
                         <div class="form-group">
                             <input type="number" class="form-control" name="phone" placeholder="Phone" />
                         </div>
                     </div>
                     <div class="col-lg-offset-1 col-lg-5">
                         <div class="form-group">
                             <select class="form-control">
                                 <option value="Feedback" />Feedback 
                                 <option value="Question" />Question 
                                 <option value="Report a Bug" />Report a Bug 
                                 <option value="Just Say hello" />Just Say hello 
                                 <option value="Other" />Other 
                             </select>
                         </div>
                     </div>
                     <div class="col-lg-offset-1 col-lg-11">
                         <div class="form-group c-text hidden-md hidden-sm hidden-xs">
                             <textarea rows="5" class="form-control" name="comment" placeholder="Your Message *" required="" style="height:150px;"></textarea>
                         </div>
                     </div>

                     <div class="col-lg-offset-1 col-lg-11 butn ">
                         <div class="g-recaptcha col-lg-6" data-sitekey="6LcvTwcUAAAAAONsXBz42-ecLjL2Doliwo6mK6pb" style="margin-left: -13px;"></div>
                         <button type="submit" class="btn btn-default hidden-xs hidden-sm" name='submitf' id="submitf" style="margin-left: -13px">Send Message  <i class="fa fa-chevron-right"></i></button>
                         <button type="submit" class="btn btn-default hidden-lg hidden-md" name='submitf' id="submitf">Send Message  <i class="fa fa-chevron-right"></i></button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
<!--  <div class="send-us-message">
     <h1 style="padding-top: 90px;" class="hidden-sm hidden-xs">Get Directions </h1>
     <h1 class="hidden-lg hidden-xs hidden-md" style="padding-top: 70px">Get Directions </h1>
     <h1 class="hidden-lg hidden-md hidden-sm" style="margin-top: -65px">Get Directions </h1>
 </div>
 <!-- Starts Map -->
<!--  <div class="google-map">
     <iframe src="../www.google.com/maps/embed_e535dbee.html" height="405" allowfullscreen=""></iframe>
 </div> -->
 <!-- /. Map ENDS-->
 <!-- Body ENDS-->

 <!-- FOOTER STARTS-->
 <!-- /. Map ENDS-->
 <!-- Body ENDS-->
     
     <?php get_footer(); ?>