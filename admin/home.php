<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    <?php
        $db = new Database();
        $db->table='odwiedziny';
        $cooki = $db->zap_get('SELECT MONTH(data) m, YEAR(data) y, SUM(ilosc) suma FROM odwiedziny GROUP BY YEAR(data), MONTH(data)');

        $miesiace = [];
        $ilosc = [];
        $sumuj = 0;
        foreach($cooki as $cook)
        {
              $miesiace [] = $cook['y'].'-'.$cook['m'];
              $ilosc[] = $cook['suma'];
              $sumuj += $cook['suma'];
        }
        ?>
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content"">
              <h4><center>Liczba wszystkich wyświetleń strony wynosi:</center></h4>
              <h3><center><?php echo $sumuj; ?></center></h3> 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <script>
        var tabelka_miesiace = <?php echo json_encode($miesiace); ?> ;
        var ilosc = <?php echo json_encode($ilosc); ?> ;
        </script>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper --> 