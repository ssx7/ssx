<header id="menu" class="navbar-fixed-top">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <nav class="navbar navbar-inverse" role="navigation" id="pasek_nawi">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu1">
                            <span class="sr-only">Nawigacja</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div id="logo">
                            <a class="navbar-brand" ><img src= "public/image/cc logo1.png" class="img-responsive" ></a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="menu1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a class="click" onclick="wyswietlZawartosc('sklad')"  style="cursor:pointer; outline:none;">Skład</a></li>
                            <li><a class="click" onclick="wyswietlZawartosc('tabela')"  style="cursor:pointer; outline:none;">Tabela</a></li>
                            <li><a class="click" onclick="wyswietlZawartosc('historia')" style="cursor:pointer; outline:none;" >Historia</a></li>
                            <li><a class="click" onclick="wyswietlZawartosc('galeria')" style="cursor:pointer; outline:none;">Galeria</a></li>
                            <li><a class="click" onclick="wyswietlZawartosc('statystyki')" style="cursor:pointer; outline:none;" >Statystyki</a></li>
                            <li><a class="click" onclick="wyswietlZawartosc('kalendarz')" style="cursor:pointer; outline:none;">Kalendarz</a></li>
                            <?php if( !isset($_SESSION['check']) ): ?>
                                <li><a href="#logowanie" data-toggle="modal" style="outline: none;">Logowanie</a></li>
                                <li><a href="#rejestracja" data-toggle="modal" style="outline: none;">Rejestracja</a></li>
                            <?php else : ?>
                                <li><?php echo $_SESSION['name']; ?></li>
                                <li><a href="app/Logout.php" class="btn btn-danger"><i class="fa fa-sign-out"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>