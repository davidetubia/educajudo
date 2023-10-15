@using EducaJudoLearn.Models;
@{
    string sezione = Request.QueryString["i"];
    MQuiz _d = CDati.Quiz(sezione);
    if (_d.Ultima) { Response.Redirect("/myarea/mycorsi/risultati/?i=" + sezione); }
    ViewBag.Title = "Esegui il test";
    Layout = "~/Views/Shared/_LayoutMyArea.cshtml";
}


<div id="svolgimento-corso">
    <div class="container-corso d-flex flex-grow-1">
        <!-- contenuto quiz-->
        <article>
            <div id="question">
                <div id="countdown"></div>
                <div class="domanda">
                    <h2>
                        @_d.Domanda
                    </h2>
                </div>
                <div class="answers">
                    <div id="r1">
                        <span>
                            @_d.Risposta1
                        </span>
                    </div>
                    <div id="r2">
                        <span>
                            @_d.Risposta2
                        </span>
                    </div>

                    <div id="r3">
                        <span>
                            @_d.Risposta3
                        </span>
                    </div>
                </div>

                <a href="#" class="btn-conferma confirm hide" id="idconferma">Conferma risposta</a>
                <a href="/myarea/myCorsi/testesegui?i=@sezione" class="btn-conferma next hide">Vai alla domanda successiva ></a>

            </div>

        </article>
    </div>

</div>
@section scripts{
    <script>
        $(document).ready(function () {
            $('aside').hide();
            $('article').css('width', '100%');
            $('.disclaimer').css('width', '100%');
        });



        $(document).on('click', '.answers div', function () {
            $(this).css('border', '5px solid yellow').addClass('response');
            $('.answers div').not(this).css('border', 'none').removeClass('response');
            $('.confirm').show();
        });

        $(document).on('click', '.confirm', function () {
            var risposte = $('.response');
            if (risposte.length > 0) {
                $(this).hide();
                clearInterval(interval);
                $('.next').show();


                $.ajax({
                    url: "/myarea/mycorsi/testcheck/?i=@_d.IDRisposta&r=" + $('.response').attr('id'),
                    context: document.body
                }).done(function (ritorno) {

                    if (ritorno == "0")
                        $('.response').css('backgroundColor', 'green').css('color', 'white');
                    else
                        $('.response').css('backgroundColor', 'red').css('color', 'white');
                });

            } else {
                alert('Devi selezionare una risposta');
            }
        });

        var secondi = 60;
        var interval = setInterval(function () {
            secondi--;
            $('#countdown').html(secondi);
            if (secondi < 2)
                self.location = '@HttpContext.Current.Request.Url.AbsoluteUri';
        }, 1000);
        /*
        window.onbeforeunload = function () {
            if (secondi < 2) return true;
            return confirm('Ricaricando la pagina consideriamo questa risposta come errata.');
        }*/
    </script>
}