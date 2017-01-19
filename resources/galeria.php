<!-- GALERIA  -->
<div id="galeria">
    <div class="container">
        <div class ="row">
            <div class ="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <center><h2>Galeria</h2></center>
            </div>
        </div>
    </div>
<!-- OPIS CONTENERA LISTY -->
<div class="container">
        <div class="row">
    <?php
    include('../app/Database.php');
    $db = new Database; ?>

    <?php foreach($db->getMain('galeria') as $tab) :?>
    
            <div class ="col-xs-12 col-sm-3 col-md-3 col-lg-3 galeriaa">
                <a href="#zdj<?php echo $tab['id']; ?>" data-toggle="modal"><img src="<?php echo $tab['zdjecie']; ?>" class = "img-responsive img-rounded" style="height: 200px; width: 300px"></a>
            </div>

    <?php endforeach; ?>
        </div>
    </div>
<?php foreach($db->getMain('galeria') as $tab) :?>

    <div id="zdj<?php echo $tab['id']; ?>" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>
                        <img src="http://phpszymon.dev/<?php echo $tab['zdjecie']; ?>" class="img-responsive">
                        <br>
                        <?php echo $tab['opis']; ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Zamknij </button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div> 