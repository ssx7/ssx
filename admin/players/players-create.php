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
          <form role="form" method="POST" action="?controller=players&action=store" enctype="multipart/form-data">
          <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Numer zawodnika</label>
                  <input type="text" name="numer" class="form-control" placeholder="Numer zawodnika">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Imię</label>
                  <input type="text" name="imie" class="form-control" placeholder="Imię">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Nazwisko</label>
                  <input type="text" name="nazwisko" class="form-control" placeholder="Nazwisko">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Wzrost</label>
                  <input type="text" name="wzrost" class="form-control" placeholder="Wzrost">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Waga</label>
                  <input type="text" name="waga" class="form-control" placeholder="Waga">
                </div>
                <div class="form-group">
                  <label>Zdjęcie</label>
                  <input type="file" name="zdjecie" class="form-control" placeholder="zdjecie">

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