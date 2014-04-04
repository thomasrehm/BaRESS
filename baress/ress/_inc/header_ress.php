<!DOCTYPE html>
<html lang="de" >


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--  Lade Konkatenierte Stylesheets  -->
    <? if($ua->isMobileDevice) {?>
        <link defer type="text/css" rel="stylesheet" href="css/bootstrap_ress.css,carousel.css"/>

    <? }else { ?>
        <link defer type="text/css" rel="stylesheet" href="css/bootstrap_normal.css,carousel.css"/>

    <? };?>
    <!--      <link type="text/css" rel="stylesheet" href="less/bootstrap.css" />-->
    <!--      <link type="text/css" rel="stylesheet" href="css/carousel.css" />-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Bildschirm-Größe in Cookie übergeben, wichtig für AdaptiveImages-->
    <script>document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';</script>
