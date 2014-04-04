<?php
?>




<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">BaRESS</a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">

                        <li <? if ($standard == TRUE) { ?> class="active" <? }; ?> ><a href="../standard/"><span
                                    class="glyphicon glyphicon-remove"></span> Standard</a></li>
                        <li <? if ($optimiert == TRUE) { ?> class="active" <? }; ?>><a href="../optimiert/"><span
                                    class="glyphicon glyphicon-ok"></span> Optimiert</a></li>
                        <li <? if ($ress == TRUE) { ?> class="active" <? }; ?>><a href="../ress/"><span
                                    class="glyphicon glyphicon-heart"></span> RESS</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
                        <li class="onenav"><a href="#about"><span class="glyphicon glyphicon-chevron-right"></span>
                                About</a></li>
                        <li class="onenav"><a href="#techniken"><span class="glyphicon glyphicon-chevron-right"></span>
                                Techniken</a></li>
                        


                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>
