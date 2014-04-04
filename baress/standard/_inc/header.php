<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
    <? //Lade in der Optimierten Version direkt das pre-compiled CSS File anstatt das LESS File zu laden und zu
    // kompilieren
?>
    <link rel="stylesheet" type="text/css" href="less/bootstrap.css"/>


    <!-- Custom Bootstrap styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

        <!-- Bootstrap core LESS -->
<!--    <link rel="stylesheet/less" type="text/css" href="less/bootstrap.less"/>-->
        <!-- LESS-Processor -->
<!--        <script src="js/less-1.5.0.min.js"></script>-->


        <!-- Bootstrap core JavaScript
    ================================================== -->
        <script src="js/jquery-2.1.0.js"></script>
        <script src="js/bootstrap.js"></script>


    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Nunito:700,300:latin' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })(); </script>

        <script src="js/jquery.scrollto.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script>
            $(document).ready(function () {
                $('.onenav').onePageNav({
                    changeHash: true,
                    begin: function () {
                        console.log('start')
                    },
                    end: function () {
                        console.log('stop')
                    }
                });
                $('.btn1').onePageNav({
                    changeHash: true,
                    begin: function () {
                        console.log('start')
                    },
                    end: function () {
                        console.log('stop')
                    }
                });
            });


        </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

