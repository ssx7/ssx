<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Zawodnicy</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <button type="button" class="btn btn-info">Dodaj zawodnika</button> <br /><br />
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Nr</th>
                  <th>Imię</th>
                  <th>Nazwisko</th>
                  <th>Wzrost</th>
                  <th>Waga</th>
                  <th></th>
                </tr>
                <tr>
                  <td>#2</td>
                  <td>Kyrie</td>
                  <td>Irving</td>
                  <td>191 cm</td>
                  <td>88 kg</td>
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





<!-- NOWA STRONA W ZAWODNIKACH -->
<div class="content-wrapper">
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- general form elements disabled -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Dodaj zawodnika</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" method="POST" action="tutaj">
          <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Numer zawodnika</label>
                  <input type="text" name="subject" class="form-control" placeholder="Numer zawodnika">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Imię</label>
                  <input type="text" name="subject" class="form-control" placeholder="Imię">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Nazwisko</label>
                  <input type="text" name="subject" class="form-control" placeholder="Nazwisko">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Wzrost</label>
                  <input type="text" name="subject" class="form-control" placeholder="Wzrost">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Waga</label>
                  <input type="text" name="subject" class="form-control" placeholder="Waga">
                </div>
                <div class="form-group">
                  <label>Zdjęcie zawodnika</label> <br />
                  <button type="button" class="btn btn-info">Dodaj</button>
                </div>
          </div>
          <div class="box-footer text-center">
              <button type="submit" class="btn btn-success">Dodaj zawodnika</button>
          </div>
          </form>
        </div>
        <!-- /.info-boxik -->
      </div>
    </div>
  </section>
</div>