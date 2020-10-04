



<!DOCTYPE html>
<html lang="en">
<title>Forward Sports - Home</title>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <base href="https://sports.forward.pk/" >
     
<!--    <base href="<?php echo esc_url( get_template_directory_uri() ); ?>" 
 -->     <!--    Starts Title and Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" />
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    
  
    <!--    Ends Title and Favicon-->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min_p.css" rel="stylesheet" media="all">
<!--     <link href="css/font-awesome.min.css" rel="stylesheet">
 -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='<?php echo esc_url( get_template_directory_uri() ); ?>/css/stylesheets/jquery.lighter.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo esc_url( get_template_directory_uri() ); ?>/css/stylesheets/sample.css' rel='stylesheet' type='text/css'>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/all-stylesheets.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>
/css/animations.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>
/css/revolution/css/layers.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>
/css/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>
/css/revolution/css/navigation.css">
   <!--  -->

    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hover.css" rel="stylesheet" media="all">
    <!--    recapcha code-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--    lanaguage script css-->
    <style type="text/css">
        <!--
        a.gflag {vertical-align:middle;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
        a.gflag img {border:0;}
        a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
        #goog-gt-tt {display:none !important;}
        .goog-te-banner-frame {display:none !important;}
        .goog-te-menu-value:hover {text-decoration:none !important;}
        body {top:0 !important;}
        #google_translate_element2 {display:none!important;}
        -->
    </style>
</head>

<body>

<nav id="navigation">
<div id="tc" class="container top-contact">
<div class="row hidden-md hidden-sm hidden-xs">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2">
    <!--  Logo Starts -->
      <?php  $vision = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 98 ) );

while( $vision->have_posts()) :  $vision->the_post();?>
    <a class="navbar-brand external" href="<?=site_url();?>"><img class="logo" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="Forward Sports (PVT) Ltd."></a>
     <?php endwhile; ?>
    <!-- Logo Ends -->
</div>
<div class="col-lg-10 col-md-12">
<div class="navbar navbar-inverse" role="navigation">
<div class="">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <!--  Logo Starts -->
    <?php  $vision = new WP_Query( array( 'post_type' => 'post','posts_per_page' => 1 , 'p' => 98 ) );

while( $vision->have_posts()) :  $vision->the_post();?>
    <a class="navbar-brand external visible-xs" href="<?=site_url();?>"><img class="logo" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="Forward Sports (PVT) Ltd."></a>
        <?php endwhile; ?>

    <!-- Logo Ends -->
</div>

<div class="collapse navbar-collapse">
   
  <?php   wp_nav_menu( array(
                                            'theme_location'    => 'primary',
                                            'depth'             => 2,
                                            'container'         => 'ul',
                                            'container_class'   => '',
                                            'container_id'      => '',
                                            'menu_class'        => 'nav navbar-nav',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker())
                                        );
                                        ?>
<ul class="nav navbar-nav">
<li class="dropdown" style="margin-left: 100px;">
    <a class="dropdown-toggle js-activated" id="dropdown-hover" data-toggle="dropdown"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/globe-icon.png"> <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <a href="#" onclick="doGTranslate('en|en');return false;" title="English" style="background-position:-0px -0px;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/eng-icon.png" height="" width="" alt="English" /></a>
        <?php  $posts = new WP_Query( array( 'post_type' => 'languages' , 'order' => 'ASC' ) );

while($posts->have_posts()) : $posts->the_post();?>
        <li><a href="#" onclick="doGTranslate('en|<?php echo get_the_content(); ?>');return false;" title="<?php echo the_title(); ?>" style="background-position:-0px -0px;"><?php echo the_title(); ?></a></li>
                      <?php endwhile; ?>

       <!--  <li><a href="#" onclick="doGTranslate('en|hy');return false;" title="Armenian" style="background-position:-0px -0px;">Armenian</a></li>
        <li><a href="#" onclick="doGTranslate('en|bg');return false;" title="Bulgarian" style="background-position:-0px -0px;">Bulgarian</a></li>
        <li><a href="#" onclick="doGTranslate('en|zh-CN');return false;" title="Chinese (Simplified)" style="background-position:-0px -0px;">Chinese</a></li>
        <li><a href="#" onclick="doGTranslate('en|cs');return false;" title="Czech" style="background-position:-0px -0px;">Czech</a></li>
        <li><a href="#" onclick="doGTranslate('en|da');return false;" title="Danish" style="background-position:-0px -0px;">Danish</a></li>
        <li><a href="#" onclick="doGTranslate('en|nl');return false;" title="Dutch" style="background-position:-0px -0px;">Dutch</a></li>
        <li><a href="#" onclick="doGTranslate('en|tl');return false;" title="Filipino" style="background-position:-0px -0px;">Filipino</a></li>
        <li><a href="#" onclick="doGTranslate('en|fi');return false;" title="Finnish" style="background-position:-0px -0px;">Finnish</a></li>
        <li><a href="#" onclick="doGTranslate('en|fr');return false;" title="French" style="background-position:-0px -0px;">French</a></li>
        <li><a href="#" onclick="doGTranslate('en|de');return false;" title="German" style="background-position:-0px -0px;">German</a></li>
        <li><a href="#" onclick="doGTranslate('en|el');return false;" title="Greek" style="background-position:-0px -0px;">Greek</a></li>
        <li><a href="#" onclick="doGTranslate('en|iw');return false;" title="Hebrew" style="background-position:-0px -0px;">Hebrew</a></li>
        <li><a href="#" onclick="doGTranslate('en|hi');return false;" title="Hindi" style="background-position:-0px -0px;">Hindi</a></li>
        <li><a href="#" onclick="doGTranslate('en|hu');return false;" title="Hungarian" style="background-position:-0px -0px;">Hungarian</a></li>
        <li><a href="#" onclick="doGTranslate('en|id');return false;" title="Indonesian" style="background-position:-0px -0px;">Indonesian</a></li>
        <li><a href="#" onclick="doGTranslate('en|ga');return false;" title="Irish" style="background-position:-0px -0px;">Irish</a></li>
        <li><a href="#" onclick="doGTranslate('en|it');return false;" title="Italian" style="background-position:-0px -0px;">Italian</a></li>
        <li><a href="#" onclick="doGTranslate('en|ja');return false;" title="Japanese" style="background-position:-0px -0px;">Japanese</a></li>
        <li><a href="#" onclick="doGTranslate('en|ko');return false;" title="Korean" style="background-position:-0px -0px;">Korean</a></li>
        <li><a href="#" onclick="doGTranslate('en|ms');return false;" title="Malay" style="background-position:-0px -0px;">Malay</a></li>
        <li><a href="#" onclick="doGTranslate('en|no');return false;" title="Norwegian" style="background-position:-0px -0px;">Norwegian</a></li>
        <li><a href="#" onclick="doGTranslate('en|fi');return false;" title="Persian" style="background-position:-0px -0px;">Persian</a></li>
        <li><a href="#" onclick="doGTranslate('en|pl');return false;" title="Polish" style="background-position:-0px -0px;">Polish</a></li>
        <li><a href="#" onclick="doGTranslate('en|pt');return false;" title="Portuguese" style="background-position:-0px -0px;">Portuguese</a></li>
        <li><a href="#" onclick="doGTranslate('en|ro');return false;" title="Romanian" style="background-position:-0px -0px;">Romanian</a></li>
        <li><a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" style="background-position:-0px -0px;">Russian</a></li>
        <li><a href="#" onclick="doGTranslate('en|sk');return false;" title="Slovak" style="background-position:-0px -0px;">Slovak</a></li>
        <li><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" style="background-position:-0px -0px;">Spanish</a></li>
        <li><a href="#" onclick="doGTranslate('en|sw');return false;" title="Swahili" style="background-position:-0px -0px;">Swahili</a></li>
        <li><a href="#" onclick="doGTranslate('en|sv');return false;" title="Swedish" style="background-position:-0px -0px;">Swedish</a></li>
        <li><a href="#" onclick="doGTranslate('en|th');return false;" title="Thai" style="background-position:-0px -0px;">Thai</a></li>
        <li><a href="#" onclick="doGTranslate('en|tr');return false;" title="Turkish" style="background-position:-0px -0px;">Turkish</a></li>
        <li><a href="#" onclick="doGTranslate('en|ur');return false;" title="Urdu" style="background-position:-0px -0px;">Urdu</a></li>
        <li><a href="#" onclick="doGTranslate('en|vi');return false;" title="Vietnamese" style="background-position:-0px -0px;">Vietnamese</a></li>
        <li><a href="#" onclick="doGTranslate('en|cy');return false;" title="Welsh" style="background-position:-0px -0px;">Welsh</a></li>
        <li><a href="#" onclick="doGTranslate('en|yi');return false;" title="Yiddish" style="background-position:-0px -0px;">Yiddish</a></li>
        <li><a href="#" onclick="doGTranslate('en|bn');return false;" title="Bengali" style="background-position:-0px -0px;">Bengali</a></li>
        <li><a href="#" onclick="doGTranslate('en|la');return false;" title="Bengali" style="background-position:-0px -0px;">Latin</a></li> -->
    </ul>
    <select hidden="" onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|bg">Bulgarian</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|ms">Malay</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sk">Slovak</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option><option value="en|bn">Bengali</option><option value="en|la">Latin</option></select><div id="google_translate_element2"></div>

    <script type="text/javascript">
        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
    </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


    <script type="text/javascript">
        /* <![CDATA[ */
        eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
        /* ]]> */
    </script>

</li>
</ul>
<!-- <ul class="nav navbar-nav">
<li class="dropdown">
    <a class="dropdown-toggle js-activated hvr-bounce-to-bottom" id="dropdown-hover-g" data-toggle="dropdown">ABOUT <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu" role="menu">

                        <li><a href="about-us/introduction" class="external">Introduction</a></li>
            
                        <li><a href="about-us/history" class="external">History</a></li>
            
                        <li><a href="about-us/core-values" class="external">Core Values</a></li>
            
                        <li><a href="about-us-gallery/leadership" class="external">Leadership</a></li>
            
                        <li><a href="about-us/culture" class="external">Culture</a></li>
            
                        <li><a href="about-us/vision and mission" class="external">Vision And Mission</a></li>
            
            </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle js-activated hvr-bounce-to-bottom" id="dropdown-hover-g" data-toggle="dropdown">COMMITMENT <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu" role="menu">
                        <li><a href="about-us/quality-focus" class="external">Quality Focus</a></li>
            
                        <li><a href="about-us/community-initiative" class="external">Community Initiative</a></li>
            
                        <li><a href="about-us/going-green" class="external">Going Green</a></li>
            
                        <li><a href="about-us/employee-development" class="external">Employee Development</a></li>
            
                        <li><a href="about-us/employee-benefits" class="external">Employee Benefits</a></li>
            
            </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle js-activated hvr-bounce-to-bottom" id="dropdown-hover-g" data-toggle="dropdown">STRENGTH <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu" role="menu">
                        <li><a href="about-us-gallery/award" class="external">Awards</a></li>
            
                        <li><a href="about-us-gallery/certificate" class="external">Certificates</a></li>
            
                        <li><a href="about-us-gallery/client" class="external">Clients</a></li>
            
                        <li><a href="about-us-gallery/r-d" class="external">R&D</a></li>
            
                        <li><a href="about-us-gallery/buildings" class="external">Buildings</a></li>
            
            </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle js-activated hvr-bounce-to-bottom" id="dropdown-hover-g" data-toggle="dropdown">POLICIES <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu" role="menu">
                        <li><a href="about-us/hse-policies" class="external">HSE Policies</a></li>
            
                        <li><a href="about-us/hr-policies" class="external">H.R Policies</a></li>
            
                        <li><a href="about-us/environmental-policy" class="external">Environmental Policy</a></li>
            
                        <li><a href="about-us-gallery/Sustainability-Report" class="external">Sustainability Report</a></li>
            
            </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle js-activated hvr-bounce-to-bottom" id="dropdown-hover-g" data-toggle="dropdown">PRODUCTS <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu" role="menu">
                    <li><a href="products/2/soccer-balls" class="external">Soccer Balls</a></li>
                    <li><a href="products/3/sala-balls" class="external">Sala Balls</a></li>
                    <li><a href="products/4/volley-balls" class="external">Volley Balls</a></li>
                    <li><a href="products/5/hand-balls" class="external">Hand Balls</a></li>
                    <li><a href="products/6/basket-balls" class="external">Basket Balls</a></li>
                    <li><a href="products/7/goal-keeper-gloves" class="external">Goal Keeper Gloves</a></li>
                    <li><a href="products/9/accessories" class="external">Accessories</a></li>
            </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle js-activated hvr-bounce-to-bottom" id="dropdown-hover-g" data-toggle="dropdown">MEDIAROOM <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu" role="menu">
        <li><a href="news-events" class="external">News & Events</a></li>
        <li><a href="image-gallery" class="external">Image Gallery</a></li>
        <li><a href="video-gallery" class="external">Video Gallery</a></li>
    </ul>
</li>
<li><a href="contact-us" class="external hvr-bounce-to-bottom">CONTACT</a></li>
<li class="dropdown" style="margin-left: 100px;">
    <a class="dropdown-toggle js-activated" id="dropdown-hover" data-toggle="dropdown"><img src="images/globe-icon.png"> <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <a href="#" onclick="doGTranslate('en|en');return false;" title="English" style="background-position:-0px -0px;"><img src="images/eng-icon.png" height="" width="" alt="English" /></a>
        <li><a href="#" onclick="doGTranslate('en|ar');return false;" title="Arabic" style="background-position:-0px -0px;">Arabic</a></li>
        <li><a href="#" onclick="doGTranslate('en|hy');return false;" title="Armenian" style="background-position:-0px -0px;">Armenian</a></li>
        <li><a href="#" onclick="doGTranslate('en|bg');return false;" title="Bulgarian" style="background-position:-0px -0px;">Bulgarian</a></li>
        <li><a href="#" onclick="doGTranslate('en|zh-CN');return false;" title="Chinese (Simplified)" style="background-position:-0px -0px;">Chinese</a></li>
        <li><a href="#" onclick="doGTranslate('en|cs');return false;" title="Czech" style="background-position:-0px -0px;">Czech</a></li>
        <li><a href="#" onclick="doGTranslate('en|da');return false;" title="Danish" style="background-position:-0px -0px;">Danish</a></li>
        <li><a href="#" onclick="doGTranslate('en|nl');return false;" title="Dutch" style="background-position:-0px -0px;">Dutch</a></li>
        <li><a href="#" onclick="doGTranslate('en|tl');return false;" title="Filipino" style="background-position:-0px -0px;">Filipino</a></li>
        <li><a href="#" onclick="doGTranslate('en|fi');return false;" title="Finnish" style="background-position:-0px -0px;">Finnish</a></li>
        <li><a href="#" onclick="doGTranslate('en|fr');return false;" title="French" style="background-position:-0px -0px;">French</a></li>
        <li><a href="#" onclick="doGTranslate('en|de');return false;" title="German" style="background-position:-0px -0px;">German</a></li>
        <li><a href="#" onclick="doGTranslate('en|el');return false;" title="Greek" style="background-position:-0px -0px;">Greek</a></li>
        <li><a href="#" onclick="doGTranslate('en|iw');return false;" title="Hebrew" style="background-position:-0px -0px;">Hebrew</a></li>
        <li><a href="#" onclick="doGTranslate('en|hi');return false;" title="Hindi" style="background-position:-0px -0px;">Hindi</a></li>
        <li><a href="#" onclick="doGTranslate('en|hu');return false;" title="Hungarian" style="background-position:-0px -0px;">Hungarian</a></li>
        <li><a href="#" onclick="doGTranslate('en|id');return false;" title="Indonesian" style="background-position:-0px -0px;">Indonesian</a></li>
        <li><a href="#" onclick="doGTranslate('en|ga');return false;" title="Irish" style="background-position:-0px -0px;">Irish</a></li>
        <li><a href="#" onclick="doGTranslate('en|it');return false;" title="Italian" style="background-position:-0px -0px;">Italian</a></li>
        <li><a href="#" onclick="doGTranslate('en|ja');return false;" title="Japanese" style="background-position:-0px -0px;">Japanese</a></li>
        <li><a href="#" onclick="doGTranslate('en|ko');return false;" title="Korean" style="background-position:-0px -0px;">Korean</a></li>
        <li><a href="#" onclick="doGTranslate('en|ms');return false;" title="Malay" style="background-position:-0px -0px;">Malay</a></li>
        <li><a href="#" onclick="doGTranslate('en|no');return false;" title="Norwegian" style="background-position:-0px -0px;">Norwegian</a></li>
        <li><a href="#" onclick="doGTranslate('en|fi');return false;" title="Persian" style="background-position:-0px -0px;">Persian</a></li>
        <li><a href="#" onclick="doGTranslate('en|pl');return false;" title="Polish" style="background-position:-0px -0px;">Polish</a></li>
        <li><a href="#" onclick="doGTranslate('en|pt');return false;" title="Portuguese" style="background-position:-0px -0px;">Portuguese</a></li>
        <li><a href="#" onclick="doGTranslate('en|ro');return false;" title="Romanian" style="background-position:-0px -0px;">Romanian</a></li>
        <li><a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" style="background-position:-0px -0px;">Russian</a></li>
        <li><a href="#" onclick="doGTranslate('en|sk');return false;" title="Slovak" style="background-position:-0px -0px;">Slovak</a></li>
        <li><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" style="background-position:-0px -0px;">Spanish</a></li>
        <li><a href="#" onclick="doGTranslate('en|sw');return false;" title="Swahili" style="background-position:-0px -0px;">Swahili</a></li>
        <li><a href="#" onclick="doGTranslate('en|sv');return false;" title="Swedish" style="background-position:-0px -0px;">Swedish</a></li>
        <li><a href="#" onclick="doGTranslate('en|th');return false;" title="Thai" style="background-position:-0px -0px;">Thai</a></li>
        <li><a href="#" onclick="doGTranslate('en|tr');return false;" title="Turkish" style="background-position:-0px -0px;">Turkish</a></li>
        <li><a href="#" onclick="doGTranslate('en|ur');return false;" title="Urdu" style="background-position:-0px -0px;">Urdu</a></li>
        <li><a href="#" onclick="doGTranslate('en|vi');return false;" title="Vietnamese" style="background-position:-0px -0px;">Vietnamese</a></li>
        <li><a href="#" onclick="doGTranslate('en|cy');return false;" title="Welsh" style="background-position:-0px -0px;">Welsh</a></li>
        <li><a href="#" onclick="doGTranslate('en|yi');return false;" title="Yiddish" style="background-position:-0px -0px;">Yiddish</a></li>
        <li><a href="#" onclick="doGTranslate('en|bn');return false;" title="Bengali" style="background-position:-0px -0px;">Bengali</a></li>
        <li><a href="#" onclick="doGTranslate('en|la');return false;" title="Bengali" style="background-position:-0px -0px;">Latin</a></li>
    </ul>
    <select hidden="" onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|bg">Bulgarian</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|ms">Malay</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sk">Slovak</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option><option value="en|bn">Bengali</option><option value="en|la">Latin</option></select><div id="google_translate_element2"></div>

    <script type="text/javascript">
        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
    </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


    <script type="text/javascript">
        /* <![CDATA[ */
        eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
        /* ]]> */
    </script>

</li>

</ul> -->

</div>
<!--/.nav-collapse -->
</div>
</div>
</div>
</div>
</div>


<div class="navbar navbar-inverse hidden-lg " role="navigation">
<div class="container">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <!--  Logo Starts -->
    <a class="navbar-brand external" href="<?php echo esc_url( get_template_directory_uri() ); ?>/index/"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/data/uploads/forward.png" alt="Forward Sports (PVT) Ltd."></a>
    <!-- Logo Ends -->
</div>
<div class="collapse navbar-collapse">

     <?php   wp_nav_menu( array(
                                            'theme_location'    => 'primary',
                                            'depth'             => 2,
                                            'container'         => 'ul',
                                            'container_class'   => '',
                                            'container_id'      => '',
                                            'menu_class'        => 'nav navbar-nav',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker())
                                        );
                                        ?>
</div>
<!--/.nav-collapse -->
</div>
</div>
</nav>