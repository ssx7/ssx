<div id="statystyki">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <?php include('../app/Database.php');
                include('../admin/StatController.php');
                $new = new Database();
                $new->table='mecz_statystyki';
                $art2 = new StatController(); 
                $pokaz = $new->zap_get('SELECT * FROM mecz_statystyki st JOIN zawodnicy stat ON ( st.id_zawodnika = stat.id ) '); ?>
                    <div class="table-responsive">
                        <h2><center>Statystyki sezon 2016/2017</center></h2>
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th title = "Zawodnik">Zawodnik</th>
                                <th title = "Rozegrane Gry">GP</th>
                                <th title = "Minuty na boisku">MIN</th>
                                <th title = "Punkty na mecz">PPG</th>
                                <th title = "Asysty na mecz">APG</th>
                                <th title = "Zbiorki na mecz">RPG</th>
                                <th title = "Odbiory na mecz">SPG</th>
                                <th title = "Bloki na mecz">BPG</th>
                                <th title = "Faule na mecz ">FPG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($art2->tabela() as $tab) : ?>
                                <tr>
                                  <td><?php echo $tab['imie']." ".$tab['nazwisko']; ?></td>
                                  <td><?php echo $tab['ilosc_meczow']; ?></td>
                                  <td><?php echo round(($tab['ilosc_minut'])/($tab['ilosc_meczow']),1); ?></td>
                                  <td><?php echo round(($tab['punkty'])/($tab['ilosc_meczow']),1); ?></td>
                                  <td><?php echo round(($tab['asysty'])/($tab['ilosc_meczow']),1); ?></td>
                                  <td><?php echo round(($tab['zbiorki'])/($tab['ilosc_meczow']),1); ?></td>
                                  <td><?php echo round(($tab['odebrania_pilki'])/($tab['ilosc_meczow']),1); ?></td>
                                  <td><?php echo round(($tab['bloki'])/($tab['ilosc_meczow']),1); ?></td>
                                  <td><?php echo round(($tab['faule'])/($tab['ilosc_meczow']),1); ?></td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>