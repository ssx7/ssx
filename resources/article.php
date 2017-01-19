<!-- ARTYKUŁY  -->


    <div id="article">
        <div class="container">
            <div class = "row">
                <div class= "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2><center>Artykuły</center></h2>
                </div>
            </div>
            <div class="row">
                <div class="panel-group" id="artykuly">

                    <?php foreach($db->getMain('artykuly') as $tab) : ?>
                    <!-- 1 ARTYKUL -->
                    <div class= "col-xs-12 col-sm-12 col-md-12 col-lg-12 panel">
                        <div class="panel-heading">
                            <a href="#artykul<?php echo $tab['id']; ?>" data-toggle="collapse" data-parent="#artykuly">
                                <h3><?php echo $tab['tytul']; ?></h3>
                                <h5><?php echo $tab['created_at']; ?></h5>
                            </a>
                        </div>
                        <div id="artykul<?php echo $tab['id']; ?>" class="panel-collapse collapse">
                            <div class = "panel-body">
                                <?php echo $tab['opis']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>



                    <?php if( isset($_SESSION['check']) ): ?>
                    <div class= "col-xs-12 col-sm-12 col-md-12 col-lg-12 panel dodaj">
                        <div class="panel-heading">
                            <a href="#artykul6" data-toggle="collapse" data-parent="#artykuly">
                                <button type="submit" class="btn btn-warning btn-lg btn-block" id="dodaj_art">Dodaj artykuł</button>
                            </a>
                        </div>
                        <div id="artykul6" class="panel-collapse collapse">
                            <div class = "panel-body">
                                <form method="POST" id="dodaj_art2" action="index.php?action=addArticle">

                                <div class="form-group">
                                  <label>Tytuł</label>
                                  <input type="text" name="subject" class="form-control" placeholder="Tytuł...">
                                </div>

                                <div class="form-group">
                                   <textarea name="opis" id="a1" class="form-control" rows="20" required="required" placeholder="Dodaj artykuł"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success">ZAPISZ</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div> 