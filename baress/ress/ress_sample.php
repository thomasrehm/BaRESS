<?php
$ress = TRUE; //Zeigt in der NAV an, was gerade aktiv ist

// include the Detector lib and testing for Device Feature Test
require_once "Detector/Detector.php";


// Include the autoloader - edit this path!
require_once 'wurfl/src/autoload.php';

// Create a configuration object
$config = new ScientiaMobile\WurflCloud\Config();

// Set your WURFL Cloud API Key
$config->api_key = '319214:jnfdVYN1mFBvWya6DZLuETRh7kleKGsS';

// Create the WURFL Cloud Client
$client = new ScientiaMobile\WurflCloud\Client($config);

// Detect your device
$client->detectDevice();



//include "_inc/header_ress.php";
?>
<!DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--  Lade Konkatenierte Stylesheets  -->
            <link defer type="text/css" rel="stylesheet" href="css/bootstrap_ress.css,carousel.css"/>


        <!--      <link type="text/css" rel="stylesheet" href="less/bootstrap.css" />-->
        <!--      <link type="text/css" rel="stylesheet" href="css/carousel.css" />-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- Bildschirm-Größe in Cookie übergeben, wichtig für AdaptiveImages-->
        <script>document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';</script>




    <title>BaRESS – RESS Beispielseite</title>
    </head>
<? flush(); ?>



<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


<div class="container marketing">

   <div>
       <a style="margin-top: 50px;" class="btn btn-lg btn-default" href="../ress/" role="button">« Zurück (RESS)</a>
       <h1 class="featurette-heading">RESS Beispiele. <span class="text-muted">Check it out.</span></h1>

    <p class="lead">Mittels Serverseitiger DeviceDetection werden die Plugins auf dieser Seite Gerätabhängig geladen.
    Besucht ein User mit einem Smartphone diese Seite, so werden die Plugins oder alternativen geladen, die weniger
    HTTP Requests haben um somit die Seite schneller aufzubauen.</p>


   </div>
<?
//$ua->isMobile = TRUE;
 $default= ($ua->isMobile);

?>
    <div class="col-lg-4 col-lg-offset-4">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <button type="submit" name="VarMobile" value="TRUE" onclick="this.form.submit();" class="btn btn-default btn-lg btn-block">mobile</button>
    <button type="submit" name="VarMobile" value="FALSE" onclick="this.form.submit();" class="btn  btn-default btn-lg btn-block">non-mobile</button>
</form>

<?php

$name = $_REQUEST['VarMobile'];
echo $name;
switch ($name)
{
    case "TRUE":
        $ua->isMobile = TRUE;
        break;
    case "FALSE":
        $ua->isMobile = FALSE;
        break;
    default:
        $ua->isMobile = $default;
        break;
}
?>


</div>

    <hr class="featurette-divider col-lg-12">


    <!-- iframe-Code von Google Maps -->
    <? if ($ua->isMobile) { ?>
        <div class="col-md-12">
            Ostbayerische Technische Hochschule Amberg-Weiden

            <a target="_blank" href="https://www.google.com/maps/place/Ostbayerische+Technische+Hochschule+Amberg-Weiden/@49.444168,11.847422,17z/data=!4m2!3m1!1s0x0:0x7de7d28d97d9d6bb?hl=de-DE"><img width="100%" height="auto" src="http://maps.googleapis
.com/maps/api/staticmap?center=Ostbayerische+Technische+Hochschule+Amberg&zoom=16&scale=1&size=600x600&maptype=roadmap&sensor=false&key=AIzaSyB4XlJUWiupGGvpzkak6mhar-_VjY5uHe4&format=png
&visual_refresh=true&markers=size:mid%7Ccolor:red%7COstbayerische+Technische+Hochschule+Amberg"></a>

        </div>
    <? } else { ?>

        <div class="responsiveContainer">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2594.185640334051!2d11.847456400205981!3d49.4432082554766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11276afbcf00fe!2sAmberg-Weiden+University+of%E2%80%A6!5e0!3m2!1sde!2sde!4v1385826222529"
                width="960" height="800" frameborder="0" style="border:0"></iframe>
        </div>
    <? }; ?>



  <hr class="featurette-divider col-lg-12">

    <div class="responsiveContainer">

        <iframe width="960" height="720" src="//www.youtube.com/embed/QH2-TGUlwu4?rel=0" frameborder="0"
                allowfullscreen></iframe>
    </div>
  <hr class="featurette-divider col-lg-12">

    <? if ($ua->isMobile){ ?>
        <div class="col-md-6">
            <div class="fb-like-box" data-href="http://www.facebook.com/pages/Hochschule-Amberg-Weiden/109172435818325"
                 data-width="300" data-height="400" data-colorscheme="light" data-show-faces="true"
                 data-header="true" data-stream="false" data-show-border="true">

            </div>
        </div>
    <? } else { ?>


        <div class="col-md-6">
            <div class="fb-like-box" data-href="http://www.facebook.com/pages/Hochschule-Amberg-Weiden/109172435818325"
                 data-height="400" data-colorscheme="light" data-show-faces="true"
                 data-header="false" data-stream="true" data-show-border="false">

            </div>
        </div>
    <? }; ?>
    <div class="col-md-6">
        <a class="twitter-timeline col-md-6" href="https://twitter.com/ba_ress" data-widget-id="406729516086591488"
           data-height="400">Tweets von @ba_ress</a>
        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>

    </div>


  <hr class="featurette-divider col-lg-12" >


    <!-- /END THE FEATURETTES -->

<? include "_inc/footer_opt.php" ?>