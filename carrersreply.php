<!DOCTYPE html>
<?php
error_reporting(E_ALL);
    require("C:/xampp/htdocs/PHPMailer_5.2.4/class.phpmailer.php");
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

        if( isset($_FILES["document"]) ) {
if (!empty($_FILES["document"]["name"]))
{   
    $file_name=$_FILES["document"]["name"];
    $temp_name=$_FILES["document"]["tmp_name"];
    $imgtype=$_FILES["document"]["type"];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $dot=".";
    $documentname=date("d-m-Y")."-".time().$dot.$ext;
    $target_path = "aresume\\".$documentname;
    $_SESSION['link']=$target_path;
    move_uploaded_file($temp_name, $target_path);
}
}

    $mail = new PHPMailer();
    $mail->IsSMTP();
    // $mail->SMTPDebug  = 2; 
    $link=$_SESSION['link'];
    $mail->From = "marketing.project.cse@gmail.com";
    $mail->FromName = "Marketing";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure= "ssl"; // 
    $mail->Port = 465; // Used instead of 587 when only POP mail is selected
    $mail->SMTPAuth = true;
    $mail->Username = "marketing.project.cse@gmail.com"; 
    $mail->Password = "qazxswedcvfr123"; 
    $mail->AddAddress("kunjshah45@gmail.com", "Marketing");
    $mail->AddReplyTo("marketing.project.cse@gmail.com", "Marketing");
    $mail->IsHTML(true); // set email format to HTMl
    $mail->Subject = 'Join Our team';
    
    $mail->Body="Name: ".$name."<br>"."Phone No: ".$phone."<br>"."Email: ".$email."<br>"."Link:".$link;
    if($mail->Send()) 
    {
        $reply="Your Resume is been received by us. Our team will contact you soon.";
        
    }
    else
    {
        $reply="Something went wrong. Unable to upload your resume . Please try again.";
    }
    
?>
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
    <title>Carrers | eLive</title>
    
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
        $xyz="carrers";
        include ('header.php');?>

        <!-- Main Container -->
        <main id="splendid-main-container" class="container page-layout">

            <!-- Main Content -->
            <div class="main-content">

                    <section class="section full-width color-light bg-black padding_t_100 padding_b_90" style="background-image:url(img/team/bg.jpg);">
            <div class="container">
                <h1>Careers</h1>
                <p>Any text</p>    
            </div>
        </section>

                <center><h2 style="color:purple;">Together we will make our dreams come true</h2></center>
                
                
                <section class="section padding_t_100 padding_b_100">
                Current Opportunities
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="accordions">
                                <li class="accordion">
                                    <div class="accordion-header">
                                        <div class="accordion-icon"></div>
                                        <h6>Dot Net Developers</h6>
                                    </div>
                                    <div class="accordion-content">
                                        <p><ul>
                                            <li> 2-3 years experience in web based and intranet projects</li>
                                            <li> net with C# and MS SQL server 2005 above</li>
                                            <li> AJAX, XML, HTML, JavaScript, Jquery</li>
                                            <li> Fluency in English</li>
                                            </ul></p>
                                    </div>
                                </li>
                                <li class="accordion">
                                    <div class="accordion-header">
                                        <div class="accordion-icon"></div>
                                        <h6>PHP Developers</h6>
                                    </div>
                                    <div class="accordion-content">
                                        <p><ul>
                                            <li> 2-3 years experience in web based projects</li>
                                            <li> PHP 5.0 with MySQL 5.0</li>
                                            <li> AJAX</li>
                                            <li> XML, HTML, JavaScript, Jquery</li>
                                            <li> Knowledge of frameworks like Joomla, Zend, Symfony, Magento</li>
                                            <li> Fluency in English</li>
                                            </ul>
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion">
                                    <div class="accordion-header">
                                        <div class="accordion-icon"></div>
                                        <h6>Web Designer</h6>
                                    </div>
                                    <div class="accordion-content">
                                        <p><ul>
                                            <li> 2-3 years experience in developing websites, UI’s</li>
                                            <li> To design web sites, user interface designs for mobile applications</li>
                                            <li> Good Knowledge of Photoshop, Corel Draw, CSS, Javascript, HTML</li>
                                            <li> Knowledge of Joomla, WordPress</li>
                                            <li> Thinking creatively to produce new ideas</li>
                                            </ul>
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion">
                                    <div class="accordion-header">
                                        <div class="accordion-icon"></div>
                                        <h6>Mobile App Developer</h6>
                                    </div>
                                    <div class="accordion-content">
                                        <p><ul>
                                            <li>Min 2 years experience in app development</li>
                                            <li>Developer required for development on Android, iOS and Windows</li>
                                            </ul>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            </div>
<div class="col-lg-6 col-md-6">
                    Join Our Team
                   
                    <h1><?php echo $reply;?></h1>

                    </div>
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