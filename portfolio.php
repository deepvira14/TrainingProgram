<!DOCTYPE html>

<!--[if IE 8 ]><html lang="en" class="isie ie8 oldie no-js"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="isie ie9 no-js"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->


<!-- Mirrored from arenaofthemes.com/splendid-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2016 13:15:26 GMT -->
<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Splendid Homepage">
    <meta name="keywords" content="Homepage, Splendid">
    
    <!-- Title -->
    <title>PortFolio | eLive</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/mobilenav.css" rel="stylesheet" media="screen and (max-width: 991px)">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<link href="css/custom-bg.css" rel="stylesheet">
    
    <!-- jQuery v1.11.1 -->
    <script src="js/jquery-1.11.1.min.js"></script>

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    
    <!-- Google Maps Api -->
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;ver=4.0.1"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Preventing FOUC -->
    <style>
    .no-fouc{ display:none; }
    </style>
    
    <script>
    (function($){
        // Prevent FOUC(flash of unstyled content)
        $('html').addClass('no-fouc');
        $(document).ready(function() {
            $('html').show();
        }); 
    })(jQuery);
    </script>
</head>

<body class="headerstyle6 headerfixed ">
    
    <!-- Splendid Content -->
    <div id="splendid-content">
	
		<?php 
		$xyz="portfolio";
		include ('header.php');?>

		<!-- Main Container -->
		<main id="splendid-main-container" class="container page-layout">

			<!-- Main Content -->
			<div class="main-content">
                <!-- Page Heading -->
        <section class="section full-width color-light bg-black padding_t_100 padding_b_90" style="background-image:url(img/team/bg.jpg);">
            <div class="container">
                <h1>Portfolio</h1>
                <p>Our Previuos Work</p>    
            </div>
        </section>
        <!-- /Page Heading -->
			
            <!-- Main Container -->
        <main id="splendid-main-container" class="container blog-container">
            
            <section id="portfolio-wrapper" class="isotope-sortable portfolio-3columns padding_t_60 padding_b_50">
                
                <div class="portfolio-filters align-center margin_b_20">
                    <ul>
                        <li class="filter active" data-filter="*">All</li>
                        <li class="filter" data-filter=".cat-digital-art">Digital Art</li>
                        <li class="filter" data-filter=".cat-logos">Logos</li>
                        <li class="filter" data-filter=".cat-marketing">Marketing</li>
                        <li class="filter" data-filter=".cat-photography">Photography</li>
                        <li class="filter" data-filter=".cat-web-design">Web Design</li>
                    </ul>
                </div>
                
                <div class="portfolio-container isotope-container row">
                    
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 isotope-item cat-marketing cat-web-design">
                        <article class="portfolio-item portfolio-item-grid">
                            <div class="portfolio-image">
                                <img src="image/ixstone.jpg" alt="" style="height: 215px;">
                                <div class="portfolio-hover">
                                    <div>
                                        <div>
                                            <a href="image/ixstone.jpg" data-gal="prettyPhoto" class="portfolio-hover-button zoom-icon">Zoom</a>
                                            <a href="ixstoneportfolio.php" class="portfolio-hover-button arrow-icon">View Project</a>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <h5 class="portfolio-title"><a href="ixstoneportfolio.php">IXStone</a></h5>
                                        <ul class="portfolio-categories">
                                            <li>Logo</li>
                                            <li>App</li>
                                            <li>Web Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /Column -->
                       <div class="col-lg-4 col-md-4 col-sm-6 isotope-item cat-marketing cat-web-design">
                        <article class="portfolio-item portfolio-item-grid">
                            <div class="portfolio-image">
                                <img src="image/elivereport.jpg" alt="">
                                <div class="portfolio-hover">
                                    <div>
                                        <div>
                                            <a href="image/elive.jpg" data-gal="prettyPhoto" class="portfolio-hover-button zoom-icon">Zoom</a>
                                            <a href="eliveportfolio.php" class="portfolio-hover-button arrow-icon">View Project</a>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <h5 class="portfolio-title"><a href="ixstoneportfolio.php">e-Invoicer</a></h5>
                                        <ul class="portfolio-categories">
                                            <li>Logo</li>
                                            <li>App</li>
                                            <li>Web Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /Column -->
                    <div class="col-lg-4 col-md-4 col-sm-6 isotope-item cat-marketing cat-web-design">
                        <article class="portfolio-item portfolio-item-grid">
                            <div class="portfolio-image">
                                <img src="image/jeetsolution.jpg" alt="">
                                <div class="portfolio-hover">
                                    <div>
                                        <div>
                                            <a href="image/jeetsolution.jpg" data-gal="prettyPhoto" class="portfolio-hover-button zoom-icon">Zoom</a>
                                            <a href="jeetsolutionsportfolio.php" class="portfolio-hover-button arrow-icon">View Project</a>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <h5 class="portfolio-title"><a href="jeetsolutionsportfolio.php">Jeet Solutions</a></h5>
                                        <ul class="portfolio-categories">
                                            <li>Logo</li>
                                            <li>App</li>
                                            <li>Web Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /Column -->
                       <div class="col-lg-4 col-md-4 col-sm-6 isotope-item cat-marketing cat-web-design">
                        <article class="portfolio-item portfolio-item-grid">
                            <div class="portfolio-image">
                                <img src="image/snekriations.jpg" alt="">
                                <div class="portfolio-hover">
                                    <div>
                                        <div>
                                            <a href="image/snekriations.jpg" data-gal="prettyPhoto" class="portfolio-hover-button zoom-icon">Zoom</a>
                                            <a href="snekriationsportfolio.php" class="portfolio-hover-button arrow-icon">View Project</a>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <h5 class="portfolio-title"><a href="snekriationsportfolio.php">Snekriations</a></h5>
                                        <ul class="portfolio-categories">
                                            <li>Logo</li>
                                            <li>App</li>
                                            <li>Web Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /Column -->
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 isotope-item cat-marketing cat-web-design">
                        <article class="portfolio-item portfolio-item-grid">
                            <div class="portfolio-image">
                                <img src="image/ghelani.jpg" alt="">
                                <div class="portfolio-hover">
                                    <div>
                                        <div>
                                            <a href="image/ghelani.jpg" data-gal="prettyPhoto" class="portfolio-hover-button zoom-icon">Zoom</a>
                                            <a href="ghelaniportfolio.php" class="portfolio-hover-button arrow-icon">View Project</a>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <h5 class="portfolio-title"><a href="ghelaniportfolio.php">Ghelani Family</a></h5>
                                        <ul class="portfolio-categories">
                                            <li>Logo</li>
                                            <li>App</li>
                                            <li>Web Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /Column -->
                    <div class="col-lg-4 col-md-4 col-sm-6 isotope-item cat-web-design">
                        <article class="portfolio-item portfolio-item-grid">
                            <div class="portfolio-image">
                                <img src="image/limelight.jpg" alt="">
                                <div class="portfolio-hover">
                                    <div>
                                        <div>
                                            <a href="image/limelight.jpg" data-gal="prettyPhoto" class="portfolio-hover-button zoom-icon">Zoom</a>
                                            <a href="limelightportfolio.php" class="portfolio-hover-button arrow-icon">View Project</a>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <h5 class="portfolio-title"><a href="limelightportfolio.php">Lime Light</a></h5>
                                        <ul class="portfolio-categories">
                                            <li>Logo</li>
                                            <li>App</li>
                                            <li>Web Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- /Column -->
                    
                
                </div>
                
            </section>	
				
				
				
			</div>	
			<!-- /Main Content -->

		</main>
		<!-- /Main Container -->

	
		<?php include("footer.php");?>

	
	</div>
	<!-- /Splendid Content -->


<!-- JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/audio.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/smoothscroll.min.js"></script>
<script src="js/scripts.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

<script>	
jQuery(document).ready(function() {		
   jQuery("#slider1").revolution({
      sliderType:"standard",
      sliderLayout:"fullscreen",
      delay:9000,
      navigation: {
          arrows:{enable:false}				
      },
      disableProgressBar: 'on',
      gridwidth:1230,
      gridheight:720,
      fullScreenOffsetContainer: '#main-header'
    });		
});	
</script>

</body>


<!-- Mirrored from arenaofthemes.com/splendid-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2016 13:16:58 GMT -->
</html>