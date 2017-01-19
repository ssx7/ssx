<!-- NOWA STRONA W Kalendarzu -->
<div class="content-wrapper">
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- general form elements disabled -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edytuj mecz</h3>
          </div>
          <?php $pokaz = $new->zap_get('SELECT ka.id, ka.gospodarze, ka.goscie, ka.wynik, ka.dat, ka.lid, ka.opis, dr.id druzyna_p_id, dr.druzyna druzyna_pierwsza, dru.id druzyna_d_id, dru.druzyna  druzyna_druga FROM kalendarz ka JOIN druzyny dr ON ( ka.gospodarze = dr.id ) JOIN druzyny dru ON (ka.goscie = dru.id ) WHERE ka.id ='.$_GET['id'].' ');  ?>
          <!-- /.box-header -->
          <form role="form" method="POST" action="?controller= calendar&action=update">
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $nazwa['id']; ?>">
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control" name="gospodarze">
                    <?php foreach($new->get() as $druzyna) : ?>


                    <option value="<?php echo $druzyna['id']; ?>" <?php if($pokaz[0]['druzyna_p_id'] == $druzyna['id']) : ?> selected <?php endif; ?> >
                      <?php echo $druzyna['druzyna']; ?>
                    </option>


                    <?php endforeach; ?>
                   
                  </select>
                </div>
                <!-- text input -->

                <div class="form-group">
                  <label>Goście</label>
                  <select class="form-control" name="goscie">
                  <?php foreach($new->get() as $druzyna) : ?>
                    <option value="<?php echo $druzyna['id']; ?>"  <?php if($pokaz[0]['druzyna_d_id'] == $druzyna['id']) : ?> selected <?php endif; ?> ><?php echo $druzyna['druzyna']; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Wynik</label>
                  <input type="text" name="wynik" class="form-control" value="<?php echo $nazwa['wynik']; ?>">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Data</label>
                  <input type="date" name="dat" class="form-control" value="<?php echo $nazwa['dat']; ?>">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Liderzy CAVS</label>
                  <input type="text" name="lid" class="form-control" value="<?php echo $nazwa['lid']; ?>">
                </div>
                <div class="form-group">
                  <label>Opis meczu</label>
                  <textarea name="opis" class="form-control" rows="7" required="required"><?php echo $nazwa['opis']; ?></textarea>
                </div>
          </div>
          <div class="box-footer text-center">
              <button type="submit" class="btn btn-success">Edytuj mecz</button>
          </div>
          </form>
        </div>
        <!-- /.info-boxik -->
      </div>
    </div>
  </section>
</div>