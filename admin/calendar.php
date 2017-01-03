<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Mecze</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <button type="button" class="btn btn-info">Dodaj mecz</button> <br /><br />
              <table class="table table-bordered">
              <!-- SPYTAJ KRYSTIANA CZY MOŻNA ZROBIĆ OPCJE, W KTÓREJ CAVS WCZYTUJĄ SIĘ SAMI I JEST OPCJA CZY GRAJĄ U SIEBIE CZY NA WYJEŹDZIE-->
                <tr>
                  <th>Gospodarze</th>
                  <th>Goście</th>
                  <th>Wynik</th>
                  <th>Data</th>
                </tr>
                <tr>
                  <td>CAVS</td>
                  <td>NYK</td>
                  <td>117 - 88</td>
                  <td>25 październik 2016</td>
                  <td><center><button type="button" class="btn btn-info fa fa-edit"></button></center></td>
                </tr>
                <!-- <?php foreach($new->get() as $tab) : ?> 
                <tr>
                  <td><?php echo $tab['id']; ?></td>
                  <td><?php echo $tab['tytul']; ?></td>
                  <td>
                    <button type="button" class="btn btn-block btn-info">Zobacz</button>
                  </td>
                </tr>
                <?php endforeach; ?> -->
              <tr>
                <td></td>
              </tr>
      
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





<!-- NOWA STRONA W Kalendarzu -->
<div class="content-wrapper">
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- general form elements disabled -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Dodaj mecz</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" method="POST" action="tutaj">
          <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Gospodarze</label>
                  <input type="text" name="subject" class="form-control" placeholder="Gospodarze">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Goście</label>
                  <input type="text" name="subject" class="form-control" placeholder="Goście">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Wynik</label>
                  <input type="text" name="subject" class="form-control" placeholder="Wynik">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Data</label>
                  <input type="text" name="subject" class="form-control" placeholder="Data">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Liderzy CAVS</label>
                  <input type="text" name="subject" class="form-control" placeholder="Liderzy CAVS">
                </div>
                <div class="form-group">
                  <label>Opis meczu</label>
                  <textarea name="Opis meczu" id="inputOpis Meczu" class="form-control" rows="7" required="required" placeholder="Opis meczu"></textarea>
                </div>
          </div>
          <div class="box-footer text-center">
              <button type="submit" class="btn btn-success">Dodaj mecz</button>
          </div>
          </form>
        </div>
        <!-- /.info-boxik -->
      </div>
    </div>
  </section>
</div>