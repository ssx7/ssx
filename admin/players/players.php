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
              <a href="?controller=players&action=add" class="btn btn-info">Dodaj zawodnika</a> <br /><br />
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Nr</th>
                  <th>Imię</th>
                  <th>Nazwisko</th>
                  <th>Wzrost</th>
                  <th>Waga</th>
                  <th></th>
                </tr>
                <?php foreach($new->get() as $tab) : ?>
                <tr>
                  <td><?php echo $tab['numer']; ?></td>
                  <td><?php echo $tab['imie']; ?></td>
                  <td><?php echo $tab['nazwisko']; ?></td>
                  <td><?php echo $tab['wzrost']; ?></td>
                  <td><?php echo $tab['waga']; ?></td>
                  <td><center><a href="?controller=players&action=edit&id=<?php echo $tab['id'];?>" class="btn btn-info fa fa-edit"></a>
                  <a href="?controller=players&action=delete&id=<?php echo $tab['id'];?>" class="btn btn-danger fa fa-times"></a> </center> </td>
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