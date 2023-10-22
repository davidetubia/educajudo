<?php include 'header.php'; ?>
<div class="bg-texture">
<div class="container py-5">
    <div class="row py-5 d-md-flex align-items-md-center login-register">
        <div class="col-12 col-md-4">
            <h2 class="text-violet">Accedi</h2>
            <p>Effettua l'accesso per accedere alle sue funzionalità</p>
        </div>
        <div class="col-12 col-md-8">
            <div class="rounded-box-shadow p-4 p-md-5">
                <form action="myarea/apprendimento.php" method="post">
                    <div class="form-group">
                        <label for="email">Indirizzo e-mail</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Indirizzo e-mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password">
                    </div>

                    <input type="submit" value="Accedi" class="btn btn-primary mt-3"><br>
                    <div class="mt-5 mb-4">
                            Hai dimenticato la password?<br>
                            <a href="recupera-password.php">Recupera la tua password</a>
                        </div>
                    <div class="mt-5 mb-4">Non sei ancora registrato? <a href="registrati.php">Registrati ora</a></div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>