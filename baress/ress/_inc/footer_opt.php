<?php ?>

<!-- FOOTER -->
<footer>
    <div class="col-lg-12">
        <p class="pull-right"><a href="#">Back to top</a></p>

        <p>&copy; 2013 Thomas Rehm</p>
    </div>
</footer>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
<!-- concatenation of js files -->
<script type="text/javascript"
        src="js/jquery-2.1.0.js,bootstrap.js,jquery.scrollto.js,jquery.nav.js,jquery.unveil.js"></script>
<!--        <script src="js/jquery-2.1.0.js"></script>-->
<!--        <script src="js/bootstrap.js"></script>-->
<!--        <script src="js/jquery.scrollTo.js"></script>-->
<!--        <script src="js/jquery.nav.js"></script>-->
<!--        <script src="js/jquery.unveil.js"></script>-->
<script>
    $(document).ready(function () {
        $("img").unveil(150);
    });
</script>
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
<? if ($ua->isMobileDevice) {
} else { ?>
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
<? }; ?>

<? Detector::buildFeaturesScriptLink(); ?>


</body>
</html>
