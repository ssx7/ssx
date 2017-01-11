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
			              <h3 class="box-title">Dodaj artykuł</h3>
			            </div>
			            <!-- /.box-header -->
                  <form role="form" method="POST" action="?controller=articles&action=store">
			            <div class="box-body">
				                <!-- text input -->
				                <div class="form-group">
				                  <label>Tytuł</label>
				                  <input type="text" name="subject" class="form-control" placeholder="Tytuł...">
				                </div>
				                <!-- textarea -->
				                <div class="form-group">
				                  <label>Opis</label>
				                  <textarea class="form-control" name="opis" rows="3" placeholder="Opis..."></textarea>
				                </div>
			           	</div>
			           	<div class="box-footer text-center">
			                <button type="submit" class="btn btn-success">Dodaj artykuł</button>
			            </div>
                  </form>
			        </div>
	          <!-- /.info-boxik -->
	        </div>

	        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	          	<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Artykuły</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Nr</th>
                  <th>Tytuł</th>
                  <th>Active</th>
                  <th></th>
                </tr>
                <?php foreach($new->get() as $tab) : ?>
                <tr>
                  <td><?php echo $tab['id']; ?></td>
                  <td><?php echo $tab['tytul']; ?></td>
                  <td>
                    <?php if($tab['active']) : ?> 
                      <span class="label label-success"><i class="fa fa-check"></i></span>
                    <?php else : ?>
                      <span class="label label-danger"><i class="fa fa-times"></i></span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <a href="?controller=articles&action=edit&id=<?php echo $tab['id'];?>" class="btn btn-info">Edytuj</a>
                    <a href="?controller=articles&action=delete&id=<?php echo $tab['id'];?>" class="btn btn-warning"> Usuń</a>

                    <?php if($tab['active']) : ?> 
                    <a class="btn btn-danger" href="?controller=articles&action=active&id=<?php echo $tab['id'];?>&active=0">Zaablokuj</a>
                    <?php else : ?>
                    <a class="btn btn-success" href="?controller=articles&action=active&id=<?php echo $tab['id'];?>&active=1">Zaakceptuj</a>
                    <?php endif; ?>

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

