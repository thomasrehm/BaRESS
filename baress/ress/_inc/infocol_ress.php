<div class="center-block col-lg-12 text-center">
    <img src="<?= $svgtpng ?>/packman.<?= $svgtpng ?>" type="image/svg+xml" width="auto" height="200px">

    <h2 class="text-muted">User Agent String Sniffing und Device Detection</h2>

    <p>Die folgenden Informationen wurden mittels <a href="http://detector.dmolsen.com/" target="_blank"><strong>Detector</strong></a>
        und <a href="http://scientiamobile.com/cloud" target="_blank"><strong>WURFL Cloud</strong></a>
        aus dem UserAgentString ausgelesen bzw. mittels Modernizr getestet
        und ausgegeben.</p>
    <p>
    Dank der <strong>RESS</strong>-Idee lässt sich mit Hilfe dieser Tests optimierter Code für unterschiedliche Geräte laden.
    Hinter dem folgenden Button versteckt sich eine kleine Testseite mit vier eingebundenen iframes und deren Alternativen für
    mobile Geräte.</p>
    <a class="btn btn-lg btn-default" href="../ress/ress_sample.php" role="button">» RESS Beispielseite</a>



</div>

<!-- /.col-lg-4 -->

<div class="row">

    <!-- /.col-lg-4 -->
    <div class="col-lg-4">

        <h2 class="text-muted">Browser Informationen </h2>

        <table class="table table-striped">

            <tbody>
            <tr>
                <th>Detector Family</th>
                <td><?= $ua->family ?></td>

            </tr>
            <tr>
                <th>Browser</th>
                <td><?= $ua->browser ?></td>

            </tr>
            <tr>
                <th>OS</th>
                <td><?= $ua->os ?></td>

            </tr>


            <tr>
                <th>UserAgentString</th>
                <td><?= $ua->ua ?></td>

            </tr>


            </tbody>
        </table>

    </div>
    <!-- /.col-lg-4 -->

    <div class="col-lg-4">

        <h2 class="text-muted">Detector Device Detection</h2>


        <table class="table table-striped">

            <tbody>

            <? if (isset($ua->device)) {
                echo "<tr><th>Device</th><td>" . $ua->device . "</td></tr>";
            } else {
            }  ?>
            <tr>
                <th>Is Mobile Device?</th>
                <td>
                    <?
                    if ($ua->isMobileDevice) {
                        print $yep;
                    } else {
                        print $no;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>Is Tablet?</th>
                <td>
                    <?
                    if ($ua->isTablet) {
                        print $yep;
                    } else {
                        print $no;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>Is Computer?</th>
                <td>
                    <?
                    if ($ua->isComputer) {
                        print $yep;
                    } else {
                        print $no;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>Bildschirmbreite</th>
                <td>
                    <?= $ua->screenattributes->windowWidth; ?>
                </td>
            </tr>
            <tr>
                <th>Bildschirmhöhe</th>
                <td>
                    <?= $ua->screenattributes->windowHeight; ?>
                </td>
            </tr>


            </tbody>
        </table>
    </div>
    <!-- /.col-lg-4 -->

    <div class="col-lg-4">

        <h2 class="text-muted">WURFL Cloud Tests</h2>

        <table class="table table-striped">

            <tbody>
            <tr>
                <th>Wireless Device?
                    <br>
                    <span class="text-muted">(is_wireless_device)</span></th>
                <td><? if ($client->getDeviceCapability('is_wireless_device')) {
                        print $yep;
                    } else {
                        print $no;
                    } ?></td>

            </tr>

            <tr>
                <th>Können SVG Tiny 1.1 dargestellt werden?<br>
                    <span class="text-muted">(svgt_1_1)</span></th>
                <td><? if ($client->getDeviceCapability('svgt_1_1')) {
                        print $yep;
                    } else {
                        print $no;
                    } ?></td>

            </tr>
            <tr>
                <th>Unterstützt AJAX DOM Manipulation?<br>
                    <span class="text-muted">(ajax_manipulate_dom)</span></th>
                <td><? if ($client->getDeviceCapability('ajax_manipulate_dom')) {
                        print $yep;
                    } else {
                        print $no;
                    } ?></td>

            </tr>
            <tr>
                <th>Wie steht es um das XHTML Support Level?<br>
                    <span class="text-muted">(xhtml_support_level)</span></th>
                <td><? if ($client->getDeviceCapability('xhtml_support_level')) {
                        echo "Level " . $client->getDeviceCapability('xhtml_support_level');
                    } else {
                        print $no;
                    } ?></td>

            </tr>


            <tr>
                <th>Und die maximale Datenrate?<br>
                    <span class="text-muted">(is_wireless_device)</span></th>
                <td><? if ($client->getDeviceCapability('max_data_rate')) {
                        print $client->getDeviceCapability('max_data_rate');
                        echo '<br>';
                    } else {
                        print $no;
                    }?></td>

            </tr>


            </tbody>
        </table>

    </div>
</div><!-- /.row -->


<div class="row">
    <div class="col-lg-4">
        

        <h2 class="text-muted">Optimal. (wie gehabt)</h2>

        <p>Die Techniken der<a href="../optimiert/"> optimierten Version</a> sind beibehalten worden. Im Vergleich zur <a href="../standard/">Standard-Version</a> der
            BaRESS-Seite wurden hier einige Regeln zur Performance-Optimierung
            eingehalten. Eine einfache Liste der Regeln findest du hier:
            <strong><a target="_blank" href="http://stevesouders.com/hpws/rules.php">14 Performance Rules by Steve
                    Souders</a> </strong>
            <br>
            Von den Yahoo!-Entwicklern wurde eine ähnliche, etwas ausführlichere Liste zusammengetragen:
            <strong><a target="_blank" href="http://developer.yahoo.com/performance/rules.html">
                    Best Practices for Speeding up your Web Site</a> </strong>
        </p>
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-8">
        <h2 class="text-muted">Verbessert durch...</h2>

       

        <p>Liste der eingesetzten Optimierungs-Techniken:

        <table class="table table-striped">
            <tbody>
            <tr>
                <th> Minification und Concatenation</th>
                <td> on-the-fly durch Einsatz von
                    <a target="_blank" href="https://github.com/farhadi/SmartOptimizer">SmartOptimizer von Ali
                        Farhadi</a></td>

            </tr>
            <tr>
                <th> GZIP Kompression</th>
                <td> durch Einsatz des Apache-Moduls <code>mod_deflate</code></td>

            </tr>
            <tr>
                <th> Expires Header</th>
                <td> durch Einsatz des Apache-Moduls <code>mod_expires</code></td>

            </tr>
            <tr>
                <th> CSS/JS richtig platzieren</th>
                <td> Für schnelleren Seitenaufbau: CSS an den Anfang, JavaScript ans Ende</td>

            </tr>
            <tr>
                <th> LazyLoading</th>
                <td> Bilder nachladen, die nicht sichtbar sind, mittels <a target="_blank"
                                                                           href="http://luis-almeida.github.io/unveil/">unveil.js</a>
                </td>

            </tr>
            </tbody>
        </table>


        </p>
    </div>
    <!-- /.col-lg-4 -->
</div><!-- /.row -->

