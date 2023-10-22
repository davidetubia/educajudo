<?php include 'header.php'; ?>
<div class="bg-texture">
<div class="container py-5">
    <div class="row py-5 d-md-flex align-items-md-center login-register">
        <div class="col-12 col-md-4">
            <h2 class="text-violet">Completa l'acquisto</h2>
            <p>Sei a un passo dal diventare un un esperto nella didattica infantile</p>
        </div>
        <div class="col-12 col-md-8">
            <div class="rounded-box-shadow p-3 p-md-5">
                <form action="stripeok.php" method="post">
                    <div class="d-flex flex-row">
                        <div class="flex-grow-1" style="text-align:left;">
                            <h3>Esperto nella didattica infantile</h3>
                            € 249,00
                        </div>
                        
                        <input type="number" style="width:50px" class="form-control" value="1">
                    </div>
                    <hr>
                    <div class="text-right">
                        Totale: 
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Completa l'acquisto">
            </form>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>