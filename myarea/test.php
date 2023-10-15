
@{
    ViewBag.Title = "test";
    Layout = "~/Views/Shared/_LayoutMyArea.cshtml";
    int sezione = 0;
    switch (Convert.ToInt32(Request.QueryString["i"]))
    {
        case 13: sezione = 1; break;
        case 22: sezione = 2; break;
        case 39: sezione = 3; break;
        case 57: sezione = 4; break;
    }
}


<div id="svolgimento-corso">
    <div class="container-corso d-flex flex-grow-1">
        <!-- pre quiz
        da mostrare prima di ogni quiz
        -->
        <div class="quiz-alert">
            <div class="container text-center">
                <h1>Stai per accedere al test di verifica a sbarramento.</h1>
                <h2>Il test è a risposta multipla, di cui una sola corretta.</h2>
                <h2>Avrai a disposizione al massimo 60 secondi per rispondere a ciascuna domanda.</h2>
                <hr>
                <p style="text-align:center!important; line-height:45px;">
                    Dovrai prima selezionare la risposta e poi confermarla. Il sistema indicherà immediatamente se l’opzione che hai scelto è giusta o meno.<br>
                    Cliccando “VAI ALLA DOMANDA SUCCESSIVA” potrai continuare il test fino al suo completamento.<br>
                    Una volta ultimate tutte le domande, potrai accedere alla sezione successiva del modulo solo se avrai risposto correttamente <strong>all’80% delle domande</strong>.<br>
                </p>
                <h2>In caso contrario non potrai rifare il test prima di 24 ore</h2>

                @if (CDati.OreTest(sezione) > 24)
                {
                    <div>
                        <a href="/myarea/mycorsi/testesegui/?i=@sezione" class="btn btn-primary btn-start-test" style="margin-top:50px;">PARTI CON IL TEST</a>
                    </div>
                }
                else
                {
                    <div>Sono passate meno di 24 ore dal tuo ultimo tentativo. Riprova piu' tardi.</div>
                }
                <div>
                    <a href="/myarea/mycorsi/testesegui/?i=@sezione" class="btn btn-primary" style="margin-top:50px;">PARTI CON IL TEST</a>
                </div>

            </div>
        </div>
        <!-- /pre quiz -->

    </div>

</div>
@section scripts{
    <script>
        $(document).ready(function () {
            $('article').css('width', '100%');
            $('.disclaimer').css('width', '100%');
        });
    </script>
    }