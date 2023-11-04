<?php include 'header.php'; ?>
<div class="bg-texture">
<div class="container py-5">
    <div class="row py-5 d-md-flex align-items-md-center login-register">
        <div class="col-12 col-md-4">
            <h2 class="text-violet">Registrati</h2>
            <p>Inserisci le credenziali per accedere alla piattaforma</p>
        </div>
        <div class="col-12 col-md-8">
            <div class="rounded-box-shadow p-4 p-md-5">
                <form action="carrello.php" method="post">
                    <div class="form-group">
                        <label for="email">Indirizzo e-mail</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Indirizzo e-mail">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="email">Nome</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="email">Cognome</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Cognome">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password">Conferma password</label>
                        <input type="password" id="conferma-password" name="password" class="form-control form-control-lg" placeholder="Password">
                    </div>

                    <!-- da aggiungere solo per altri corsisti -->
                    <div class="form-group my-3">
                        <div class="row">
                            <div class="col">
                                <label for="email">Intendi svolgere unicamente la formazione online senza le fasi pratiche?</label>
                                <select name="" id="" class="form-select form-control">
                                    <option value="">--- Seleziona la tua preferenza ---</option>
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- da aggiungere solo per altri corsisti -->

                        <input type="submit" value="Registrati ora" class="btn btn-primary mt-3"><br>
                        <div class="mt-5 mb-4">Sei già registrato? <a href="accedi.php">Esegui l'accesso</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>