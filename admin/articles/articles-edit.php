<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      	<div class="row">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	          <!-- general form elements disabled -->
		          	<div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Edytuj artykuł</h3>
			            </div>
			            <!-- /.box-header -->
                  <form role="form" method="POST" action="?controller=articles&action=update">
			            <div class="box-body">
				                <!-- text input -->
				                <div class="form-group">
				                  <label>Tytuł</label>
				                  <input type="text" name="subject" class="form-control" value="<?php echo $nazwa['tytul']; ?>">
				                </div>
				                <!-- textarea -->
				                <div class="form-group">
				                  <label>Opis</label>
				                  <textarea class="form-control" name="opis" rows="3" ><?php echo $nazwa['opis']; ?></textarea>
				                </div>
			           	</div>
			           	<div class="box-footer text-center">
			                <button type="submit" class="btn btn-success">Edytuj artykuł</button>
			            </div>
                  </form>
			        </div>
	          <!-- /.info-boxik -->
		        </div>
		    </div>
		</section>
	</div>