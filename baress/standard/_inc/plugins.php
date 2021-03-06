<?php ?>



<hr class="featurette-divider">

<div class="row  section" id="plugins">
    <div class="col-md-12">
        <h2 class="featurette-heading">Plugins. <span class="text-muted">À la carte.</span></h2>

        <p class="lead">Die folgenden Plugins dienen als Beispiele für HTTP-Requests, die die Ladezeit der Seite
            erheblich dämpfen. Die folgenden Plugins GoogleMaps, Twitter und Facebook werden in der mittels
            serverseitiger DeviceDetection auf mobilen Geräten verändert oder gar nicht angezeigt.</p>


        <? if ($ua->isMobile){ ?>
        <p class="lead">Die eingebunden Plugins GoogleMaps, Youtube, Facebook und Twitter-Feed werden durch Links
            ersetzt, sobald mit einem mobilen Browser bzw. mit einem UserAgentString eines mobilen Browsers auf die
            Seite zugegriffen wird. Dadurch lassen sich extrem viele HTTP-Requests einsparen und somit das laden der
            Seite beschleunigen.
        </p>


    </div>
    <? }; ?>

</div>
<!-- iframe-Code von Google Maps -->
<? if ($ua->isMobile) { ?>
    <div class="col-md-12">
        Ostbayerische Technische Hochschule Amberg-Weiden

        <img width="100%" height="auto" src="http://maps.googleapis
.com/maps/api/staticmap?center=Ostbayerische+Technische+Hochschule+Amberg
&zoom=16
&scale=1&size=600x600&maptype=roadmap&sensor=false&key=AIzaSyB4XlJUWiupGGvpzkak6mhar-_VjY5uHe4&format=png
&visual_refresh=true&markers=size:mid%7Ccolor:red%7COstbayerische+Technische+Hochschule+Amberg">

    </div>
<? } else { ?>

    <div class="responsiveContainer">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2594.185640334051!2d11.847456400205981!3d49.4432082554766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11276afbcf00fe!2sAmberg-Weiden+University+of%E2%80%A6!5e0!3m2!1sde!2sde!4v1385826222529"
            width="960" height="800" frameborder="0" style="border:0"></iframe>
    </div>
<? }; ?>



<div class="featurette-divider"></div>
<div class="responsiveContainer">

    <iframe width="960" height="720" src="//www.youtube.com/embed/QH2-TGUlwu4?rel=0" frameborder="0"
            allowfullscreen></iframe>
</div>
<div class="featurette-divider"></div>
<? if ($ua->isMobile) { ?>
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


