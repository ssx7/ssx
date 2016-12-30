<!-- LOGOWANIE -->
    <div class="modal fade" id="logowanie" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel1">Logowanie</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form id="formularz-logowania" action="http://localhost/phpszymon/app/Login.php" method="POST">
                                <div class="form-group">
                                    <label for= "login" class ="control-label">Nazwa użytkownika</label>
                                    <input type="text" class="form-control" name="login" placeholder="Nazwa użytkownika" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="control-label">Hasło</label>
                                    <input type="password" name="pass" class ="form-control" placeholder="Hasło" required>
                                    <span class="help-block zly-user" style="color:red; font-size: 80%">
                                    Login lub hasło są nieprawidłowe
                                    </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" >Zaloguj się</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- REJESTRACJA -->
    <div class="modal fade" id="rejestracja" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Rejestracja</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form method="POST" id="formularz" action="http://localhost/phpszymon/app/Register.php">
                                <div class="form-group">
                                    <label for="login1" class="control-label">Nazwa użytkownika</label>
                                    <input type="text" name="login1" class="form-control" placeholder="Nazwa użytkownika" required>
                                </div>
                                <div class = row>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="pass" class="control-label" >Hasło</label>
                                            <input type="password" name="pass" class="form-control" placeholder="Hasło" id="pass1" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="pass2" class="control-label">Powtórz hasło</label>
                                            <input type="password" name="pass2" class="form-control" placeholder="Powtórz hasło" id="pass2" required>
                                        </div>
                                    </div>
                                    <div id="wrong_pass" class="alert col-xs-12 text-center">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Adres email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" id="zajerestruj">Zarejestruj się</button>
                                </div>
                            </form>

                            <div class="chk">
                                <span class="check_user"></span>
                                <span class="check_pass"></span>
                                <span class="check_email"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Zostałeś prawidłowo zarejestrowany</h4>
            </div>
            <div class="modal-body">
                Możesz teraz przejść do logowania.
            </div>
            <div class="text-center" style="padding-bottom: 10px">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
