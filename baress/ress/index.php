<?php
$ress = TRUE; //Zeigt in der NAV an, was gerade aktiv ist

// include the Detector lib and testing for Device Feature Test
require_once "Detector/Detector.php";


// Include the autoloader - edit this path!
require_once 'wurfl/src/autoload.php';

// Create a configuration object
$config = new ScientiaMobile\WurflCloud\Config();

// Set your WURFL Cloud API Key
$config->api_key = '';

// Create the WURFL Cloud Client
$client = new ScientiaMobile\WurflCloud\Client($config);

// Detect your device
$client->detectDevice();



include "_inc/header_ress.php";
?>

    <title>BaRESS – RESS Webseite</title>
    </head>
<? flush(); ?>



<body>

<?
// Navigation einbinden
include "_inc/nav.php";

// Carousel einbinden
include "_inc/carousel.php";

?>

<div class="container marketing"><div ></div>
<? include "_inc/wurfltest.php";
?>

    <!-- Three columns of text below the carousel -->

<? include "_inc/infocol_ress.php";
//include "_inc/infocol_opt.php"; ?>


    <!-- START THE FEATURETTES -->

<? include "_inc/featurettes.php"; ?>




<? //if($ua->isMobile) {} else {
// while developing offline, comment next line
//include "_inc/plugins.php";
//};
?>


    <!-- /END THE FEATURETTES -->
    <hr class="featurette-divider">
<? Detector::buildFeaturesScriptLink(); ?>

<? include "_inc/footer_opt.php" ?>
