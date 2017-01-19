<!-- SKŁAD -->
    <hr>
    <div id="sklad">
        <div class="container">
            <div class ="row">
                <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center><h2>Skład Cavs</h2></center>
                    <h4>Najnowszy skład Cleveland Cavaliers na rok 2016/2017 z poszczególnymi sekcjami na pozycję zawodników przedstawia się następująco:</h4>
                </div>
            </div>
        </div>
<!-- OPIS CONTENERA LISTY -->
        <div class="container">
            <div class="row">
                <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <center><ul class ="nav nav-pills">
                        <li class="active"><a href="#PG" data-toggle="tab">Point Guard</a></li>
                        <li><a href="#SG" data-toggle="tab">Shooting Guard</a></li>
                        <li><a href="#SF" data-toggle="tab">Small Forward</a></li>
                        <li><a href="#PF" data-toggle="tab">Power Forward</a></li>
                        <li><a href="#C" data-toggle="tab">Center</a></li>
                    </ul></center>
                </div>
            </div>

<!-- ZDJĘCIA WRZUCONE DO LISTY-->
            <div class="row">
                <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tab-content">

                    <?php include('../app/Database.php'); 
                    $db = new Database();
                    $tab_poz = $db->zap_get('SELECT * FROM zawodnicy WHERE pozycja="PG"');
                    ?>
                        <div class ="tab-pane fade in active" id = "PG">
                            <div class="row">
                            <?php
                            $tab_poz = $db->zap_get('SELECT * FROM zawodnicy WHERE pozycja="PG"');
                             foreach($tab_poz as $tab) : ?>
                                <div class ="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <center><img src = "<?php echo $tab['zdjecie']; ?>" class ="img-responsive img-circle"></center>
                                    <center><h3><?php echo '#'.$tab['numer']." ".$tab['imie']." ".$tab['nazwisko']; ?></h3></center>
                                    <center><p><?php echo $tab['wzrost']." cm || ".$tab['waga']." kg " ?></p></center>
                                </div>
                            <?php endforeach; ?> 
                            </div>
                        </div>

                        <!-- kolejne zapytanie z inną zmienna niz tab_poz i te same zapytanie z inna pozycja -->

                        <div class ="tab-pane fade" id = "SG">
                            <div class="row">
                            <?php
                            $tab_poz = $db->zap_get('SELECT * FROM zawodnicy WHERE pozycja="SG"');
                             foreach($tab_poz as $tab) : ?>
                                <div class ="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <center><img src = "<?php echo $tab['zdjecie']; ?>" class ="img-responsive img-circle"></center>
                                    <center><h3><?php echo '#'.$tab['numer']." ".$tab['imie']." ".$tab['nazwisko']; ?></h3></center>
                                    <center><p><?php echo $tab['wzrost']." cm || ".$tab['waga']." kg " ?></p></center>
                                </div>
                            <?php endforeach; ?> 
                            </div>
                        </div>


                        <div class ="tab-pane fade" id = "SF">
                            <div class="row">
                            <?php
                            $tab_poz = $db->zap_get('SELECT * FROM zawodnicy WHERE pozycja="SF"');
                             foreach($tab_poz as $tab) : ?>
                                <div class ="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <center><img src = "<?php echo $tab['zdjecie']; ?>" class ="img-responsive img-circle"></center>
                                    <center><h3><?php echo '#'.$tab['numer']." ".$tab['imie']." ".$tab['nazwisko']; ?></h3></center>
                                    <center><p><?php echo $tab['wzrost']." cm || ".$tab['waga']." kg " ?></p></center>
                                </div>
                            <?php endforeach; ?> 
                            </div>
                        </div>


                        <div class ="tab-pane fade" id = "PF">
                            <div class="row">
                            <?php
                            $tab_poz = $db->zap_get('SELECT * FROM zawodnicy WHERE pozycja="PF"');
                             foreach($tab_poz as $tab) : ?>
                                <div class ="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <center><img src = "<?php echo $tab['zdjecie']; ?>" class ="img-responsive img-circle"></center>
                                    <center><h3><?php echo '#'.$tab['numer']." ".$tab['imie']." ".$tab['nazwisko']; ?></h3></center>
                                    <center><p><?php echo $tab['wzrost']." cm || ".$tab['waga']." kg " ?></p></center>
                                </div>
                            <?php endforeach; ?> 
                            </div>
                        </div>


                        <div class ="tab-pane fade" id = "C">
                            <div class="row">
                            <?php
                            $tab_poz = $db->zap_get('SELECT * FROM zawodnicy WHERE pozycja="C"');
                             foreach($tab_poz as $tab) : ?>
                                <div class ="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <center><img src = "<?php echo $tab['zdjecie']; ?>" class ="img-responsive img-circle"></center>
                                    <center><h3><?php echo '#'.$tab['numer']." ".$tab['imie']." ".$tab['nazwisko']; ?></h3></center>
                                    <center><p><?php echo $tab['wzrost']." cm || ".$tab['waga']." kg " ?></p></center>
                                </div>
                            <?php endforeach; ?> 
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>