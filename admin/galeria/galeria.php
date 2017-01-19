<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      	<div class="row">
	        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	          <!-- general form elements disabled -->
		          	<div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Dodaj zdjęcie</h3>
			            </div>
			            <!-- /.box-header -->
                  <form role="form" method="POST" action="?controller=galeria&action=store" enctype="multipart/form-data">
  			            <div class="box-body">
                      <div class="form-group">
                      <label>Zdjęcie</label>
                      <input type="file" name="zdjecie" class="form-control" placeholder="zdjecie">
                    </div>
			                <!-- textarea -->
			                <div class="form-group">
			                  <label>Opis</label>
			                  <textarea class="form-control" name="opis" rows="3" placeholder="Opis do zdjęcia"></textarea>
			                </div>
  			           	</div>
  			           	<div class="box-footer text-center">
  			                <button type="submit" class="btn btn-success">Dodaj zdjęcie</button>
  			            </div>
                  </form>
			        </div>
	          <!-- /.info-boxik -->
	        </div>

	        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	          	<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Zdjęcia</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Nr</th>
                  <th>Zdjęcie</th>
                  <th></th>
                </tr>
                <?php foreach($new->get() as $tab) : ?>
                <tr>
                  <td><?php echo $tab['id']; ?></td>
                  <td> <img src="http://phpszymon.dev/<?php echo $tab['zdjecie']; ?>" style="height: 140px; width: 200px"></td>
                  <td>
                    <a href="?controller=galeria&action=edit&id=<?php echo $tab['id'];?>" class="btn btn-info fa fa-edit"></a>
                    <a href="?controller=galeria&action=delete&id=<?php echo $tab['id'];?>" class="btn btn-danger fa fa-times"></a>
                  </td>
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