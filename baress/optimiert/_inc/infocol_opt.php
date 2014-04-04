<div class="row">
    <div class="col-lg-4">
        
<img src="svg/packman.svg" type="image/svg+xml" width="auto" height="200px">

        <h2 class="text-muted">Optimal.</h2>

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