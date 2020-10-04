<!-- FOOTER STARTS -->

<!-- subscribe us
  ========================================================================= -->
<div class="download-brochure parallax-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center">
                <h1>Email Newsletter</h1>
                <h2 style="padding-bottom: 25px;">Subscribe to our newsletter to get updates.</h2>
            </div>
        </div>
        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{ clear:left; font:14px; width:100%;height: 40px;}
        </style>
        <div id="mc_embed_signup">
            <form action="//forward.us1.list-manage.com/subscribe/post?u=e11ba78d1831b2627c23cb5be&amp;id=7b2159c4f6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"  novalidate>
                <div id="mc_embed_signup_scroll">

                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email" required>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1ecfa6d91ad5e70bb918ab641_1a1e1d4c7c" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style=""></div>
                </div>
            </form>
        </div>

    </div>

</div>
<!-- /. subscribe us
    ========================================================================= -->

<footer class="dark-grey-bg">
    <div class="container">
        <div class="row">

            <?php  $who_we_are = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 227 ) );

while($who_we_are->have_posts()) : $who_we_are->the_post();?>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>
" alt="Forward Sports (PVT) Ltd.">
                  <?php echo get_the_content(); ?>

            </div>
 <?php endwhile; ?>
 <?php  $who_we_are = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 236) );

while($who_we_are->have_posts()) : $who_we_are->the_post();?>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="line2"></div>
               <?php echo get_the_content(); ?>
            </div>
            <?php endwhile; ?>

            <?php  $who_we_are = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 240) );

while($who_we_are->have_posts()) : $who_we_are->the_post();?>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="line2"></div>
               <?php echo get_the_content(); ?>
            </div>
            <?php endwhile; ?>

               <?php  $who_we_are = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 242) );

while($who_we_are->have_posts()) : $who_we_are->the_post();?>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="line2"></div>
               <?php echo get_the_content(); ?>
            </div>
            <?php endwhile; ?>

              <?php  $who_we_are = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 244) );

while($who_we_are->have_posts()) : $who_we_are->the_post();?>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="line2"></div>
              <p style = "color:white;"> <?php echo get_the_content(); ?> </p>
            </div>
            <?php endwhile; ?>

        </div>
        <div class="row copyright hidden-xs hidden-sm">
            <div class="col-lg-6 col-md-6" style="text-align: left">
                © 2020 Forward Sports (pvt) ltd. All rights reserved.            </div>
            <div class="col-lg-6 col-md-6" style="text-align: right">
                <a href="https://techlinkers.com/" class="powerby"  style="text-decoration: none;color: #666666">Powered By <img src="images/tl-icon-small.png">   Techlinkers</a>
            </div>
        </div>
        <div class="row copyright hidden-lg hidden-md">
            <div class="col-sm-12 col-xs-12">
                © 2020 Forward Sports (pvt) ltd. All rights reserved.            </div>
            <div class="col-sm-12 col-xs-12">
                <a href="https://techlinkers.com/" class="powerby"  style="text-decoration: none;color: #666666">Powered By <img src="images/tl-icon-small.png">   Techlinkers</a>
            </div>
        </div>
    </div>
</footer>

<!--All javascript includes files are here-->

<a href="#" class="scrollup">Scroll</a>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js' type='text/javascript'></script>
<script src='js/javascripts/jquery.lighter.js' type='text/javascript'></script>
<script src='js/javascripts/sample.js' type='text/javascript'></script>
<script src='js/javascripts/rainbow.js' type='text/javascript'></script>

<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/jquery-1.10.1.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Overlay Resize Menu -->
<script src="js/overlay-resizemenu/js/classie.js"></script>
<script src="js/overlay-resizemenu/js/hide-top-row.js"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="css/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="css/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
    (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="css/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript">
    var tpj=jQuery;
    var revapi4;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_46_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_46_1");
        }else{
            revapi4 = tpj("#rev_slider_46_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"css/revolution/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:6000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"erinyen",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }

                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,600,500,400],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",

                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });  /*ready*/
</script>
<!-- Isotope Gallery -->
<script type="text/javascript" src="js/isotope/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/isotope/custom-isotope-mansory.js"></script>
<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
<!-- FitVids -->
<script type="text/javascript" src="js/fitvids/jquery.fitvids.js"></script>
<!-- ScrollTo -->
<script type="text/javascript" src="js/nav/jquery.scrollTo.js"></script>
<script type="text/javascript" src="js/nav/jquery.nav.js"></script>
<!-- Sticky -->
<script type="text/javascript" src="js/sticky/jquery.sticky.js"></script>
<!-- Custom JS -->
<script src="js/custom/custom.js"></script>

<script>
    $(window).scroll(function() {
        $('#banner1').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+400) {
                $(this).addClass("fadeIn");
            }
        });
        $('#banner2').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+400) {
                $(this).addClass("slideRight");
            }
        });

    });
</script>

<script>
    /**
     * Used to demonstrate Hover.css only. Not required when adding
     * Hover.css to your own pages. Prevents a link from being
     * navigated and gaining focus.
     */
    var effects = document.querySelectorAll('.effects')[0];

    effects.addEventListener('click', function(e) {

        if (e.target.className.indexOf('hvr') > -1) {
            e.preventDefault();
            e.target.blur();

        }
    });
</script>


<!--language script-->
<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.forward..pk"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//techlinkers.com/web-systems/analytics/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '7']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//techlinkers.com/web-systems/analytics/piwik.php?idsite=7&rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code --><!-- /. FOOTER ENDS -->

</body>
</html>