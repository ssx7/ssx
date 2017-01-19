<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    <?php 
      $art2 = new StatController();  
    ?>
      <!-- Info boxes -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Zawodnicy</h3>
            </div>
            <!-- /.box-header -->
            <?php $pokaz = $new->zap_get('SELECT * FROM mecz_statystyki st JOIN zawodnicy stat ON ( st.id_zawodnika = stat.id ) '); ?> 
            <div class="box-body">
              <table class="table table-bordered">
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
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
            <!-- /.info-box -->
          </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->