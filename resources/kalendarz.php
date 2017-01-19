<!-- KALENDARZ  -->
<?php
include('../app/Database.php'); ?>
    <div id="kalendarz">
        <div class="container">
            <div class = "row">
                <div class= "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2><center>Kalendarz rozgrywek</center></h2>
                </div>
            </div>
            <div class="row">
                <div class="panel-group" id="mecze">
                    <?php
                    $new = new Database();
                    $new->table='kalendarz';
                    foreach($new->zap_get('SELECT ka.id, ka.gospodarze, ka.goscie, ka.wynik, ka.dat, ka.lid, ka.opis, dr.id druzyna_p_id, dr.druzyna druzyna_pierwsza, dru.id druzyna_d_id, dru.druzyna  druzyna_druga FROM kalendarz ka JOIN druzyny dr ON ( ka.gospodarze = dr.id ) JOIN druzyny dru ON (ka.goscie = dru.id ) ') as $tab) : ?>
                    <!-- 1 MECZ -->
                    <div class= "col-xs-12 col-sm-12 col-md-12 col-lg-12 panel">
                        <div class="panel-heading">
                            <a href="#mecz<?php echo $tab['id']; ?>" data-toggle="collapse" data-parent="#mecze">
                                <h3><?php echo $tab['druzyna_pierwsza']." ".$tab['wynik']." ".$tab['druzyna_druga']; ?></h3>
                                <h5><?php echo "Data: ".$tab['dat']." ".$tab['lid']; ?></h5>
                            </a>
                        </div>
                        <div id="mecz<?php echo $tab['id']; ?>" class="panel-collapse collapse">
                            <div class = "panel-body">
                                <?php echo $tab['opis']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>