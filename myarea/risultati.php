<?php include 'header.php'; ?>

<div id="svolgimento-corso">
    <div class="container-corso d-flex flex-grow-1">
        <article id="question" class="risultati-quiz">
            @if (ViewBag.Risultato >= 80)
            {
            <div class="alert congratulazioni">
                <h1>Congratulazioni</h1>
                <h2>Hai risposto con successo al @string.Format("{0:N0}", ViewBag.Risultato)% delle domande e puoi quindi procedere con la prossima lezione</h2>
                <a href="/educajudo/myarea/esegui.php" class="btn btn-primary">Lezione successiva</a>
            </div>
            }
            else
            { 
            <div class="alert riprova">
                <h1>Riprova</h1>
                <h2>
                    Hai risposto al @string.Format("{0:N0}", ViewBag.Risultato)%. L'esito non è sufficiente ad accedere alla fase successiva del modulo.<br>
                    Approfondisci meglio le aree di studio sulle quali sei risultato carente.<br>
                    Potrai ripetere il test tra: 24 ore
                </h2>
                <a href="/educajudo/myarea/esegui.php" class="btn btn-primary">Ripeti l'ultima sezione</a>
            </div>
            }
        </article>
    </div>
</div>

<?php include 'footer.php'; ?>