<?php include 'header.php'; ?>
<script>
    $(document).ready(function(){
        $('aside').hide();
        $('article').css('width', '100%');
        $('.disclaimer').css('width', '100%');
    });
</script>

<div>
<div class="container-quiz">
    <!-- pre quiz
    da mostrare prima di ogni quiz
    -->
    <div class="quiz-alert p-5">
        <div class="container">
        <h1 class="mt-3">
            Stai per accedere al test di verifica a sbarramento.
        </h1>
        <h2>
        Il test è a risposta multipla, di cui una sola corretta.<br>
        Avrai a disposizione al massimo 60 secondi per rispondere a ciascuna domanda.
        </h2>
            
        <p>Dovrai prima selezionare la risposta e poi confermarla. Il sistema indicherà immediatamente se l’opzione che hai scelto è giusta o meno.
        Cliccando “VAI ALLA DOMANDA SUCCESSIVA” potrai continuare il test fino al suo completamento.
        Una volta ultimate tutte le domande, potrai accedere alla sezione successiva del modulo solo se avrai risposto correttamente <strong>all’80% delle domande</strong>.<br>
        In caso contrario non potrai rifare il test prima di %%%</p>
        <a href="#" class="btn btn-primary btn-start-test">PARTI CON IL TEST</a>
        </div>
    </div>
    <!-- /pre quiz -->

    <!-- contenuto quiz-->
	<article style="background-color:red">
        <div id="question">
        <div id="countdown"></div>
            <?php
                $nd = rand(1,8);
                $dom = 'd'.$nd;
            ?>
            <div class="domanda">
                <h2>Domanda</h2>
            </div>
            <div class="answers">
                <div><span>Risposta</span></div>
                <div><span>Risposta</span></div>
                <div><span>Risposta</span></div>
            </div>

        <a href="#" class="btn-conferma confirm">Conferma risposta</a>
        <a href="quiz.php" class="btn-conferma next hide">Vai alla domanda successiva ></a>
        <a href="risultati.php" class="btn-conferma next vedi-risultati hide">Vedi i risultati ></a>

        </div>

        <script>
            $(document).on('click', '.answers div', function(){
                if(!$(this).hasClass('disabled')){
                    $(this).css('border', '5px solid yellow').addClass('response');
                    $('.answers div').not(this).css('border', 'none').removeClass('response');
                }
            });

            $(document).on('click', '.confirm', function(){
                var risposte = $('.response');
                if(risposte.length > 0){
                    $(this).hide();
                    $('.next').show();
                    $('.answers div').addClass('disabled');
                    var random_boolean = Math.random() < 0.5;
                    if(random_boolean < 0.5){
                        $('.response').css('backgroundColor', 'red').css('color', 'white');
                        $('.response').css('backgroundColor', 'red').css('color', 'white');
                    } else {
                        $('.response').css('backgroundColor', 'green').css('color', 'white');
                        $('.response').css('backgroundColor', 'green').css('color', 'white');
                    }
                } else {
                    alert('Devi selezionare una risposta');
                }
            });
        </script>

    </article>
    <!-- / contenuto quiz -->

    <script>
        $('.btn-start-test').click(function(){
            $('.quiz-alert').hide();
            // parte timer
            var timeLeft = 60;
            var elem = document.getElementById('countdown');
            
            var timerId = setInterval(countdown, 1000);
            
            function countdown() {
                if (timeLeft == -1) {
                    alert('tempo scaduto');
                    clearTimeout(timerId);
                    doSomething();
                } else {
                    elem.innerHTML = timeLeft;
                    if(timeLeft < 29){
                        elem.style.boderColor = "orange";
                    } else if(timeLeft < 28){
                        elem.style.boderColor = "red";
                    }
                    timeLeft--;
                }
            }
        });
    </script>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
<?php include '../footer.php'; ?>
</div>
