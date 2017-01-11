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
          <form role="form" method="POST" action="?controller=calendar&action=store">
          <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Gospodarze</label>
                  <input type="text" name="gospodarze" class="form-control" placeholder="Gospodarze">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Goście</label>
                  <input type="text" name="goscie" class="form-control" placeholder="Goście">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Wynik</label>
                  <input type="text" name="wynik" class="form-control" placeholder="wynik gospodarze - wynik goscie">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Data</label>
                  <input type="text" name="dat" class="form-control" placeholder="Data">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Liderzy CAVS</label>
                  <input type="text" name="lid" class="form-control" placeholder="Liderzy CAVS">
                </div>
                <div class="form-group">
                  <label>Opis meczu</label>
                  <textarea name="opis" class="form-control" rows="7" required="required" placeholder="Opis meczu"></textarea>
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