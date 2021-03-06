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

              <a href="?controller=calendar&action=add" class="btn btn-info">Dodaj mecz</a> <br /><br />
              <table class="table table-bordered">
                <tr>
                  <th>Gospodarze</th>
                  <th>Goście</th>
                  <th>Wynik</th>
                  <th>Data</th>
                  <th></th>
                </tr>
                <?php foreach($new->zap_get('SELECT ka.id, ka.gospodarze, ka.goscie, ka.wynik, ka.dat, ka.lid, ka.opis, dr.id druzyna_p_id, dr.druzyna druzyna_pierwsza, dru.id druzyna_d_id, dru.druzyna  druzyna_druga FROM kalendarz ka JOIN druzyny dr ON ( ka.gospodarze = dr.id ) JOIN druzyny dru ON (ka.goscie = dru.id ) ') as $tab) : ?>
                <tr>
                  <td><?php echo $tab['druzyna_pierwsza']; ?></td>
                  <td><?php echo $tab['druzyna_druga']; ?></td>
                  <td><?php echo $tab['wynik']; ?></td>
                  <td><?php echo $tab['dat']; ?></td>
                  <td><center><a href="?controller=calendar&action=edit&id=<?php echo $tab['id'];?>"" class="btn btn-info fa fa-edit"></a>
                  <a href="?controller=calendar&action=delete&id=<?php echo $tab['id'];?>" class="btn btn-danger fa fa-times"></a></center></td>
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