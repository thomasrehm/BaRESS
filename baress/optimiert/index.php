<?php
$optimiert = TRUE; // Variable dient dazu in der Navigation anzuzeigen, auf welcher Seite man sich gerade befindet
include "_inc/header_opt.php";
?>
    <title>BaRESS – optimierte Webseite</title>

    </head>
<?php flush(); ?>

    <!-- NAVBAR
    ================================================== -->
<body>

<? include "_inc/nav.php";
include "_inc/carousel.php"; ?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->

    <? include "_inc/infocol_opt.php"; ?>


    <!-- START THE FEATURETTES -->

    <? include "_inc/featurettes.php";
    //  include "_inc/plugins.php";
    ?>


    <!-- /END THE FEATURETTES -->
    <hr class="featurette-divider">
<? include "_inc/footer_opt.php" ?>