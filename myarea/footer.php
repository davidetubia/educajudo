</main>
        <div class="disclaimer">
            <p class="text-small">
                2023 All right reserved. <br>
                La struttura del corso e i relativi contenuti testo-audio-video-grafica sono proprietà di Educajudo.<br>
                La riproduzione non autorizzata, così come la trasmissione, il riutilizzo e quant’altro legato all’impiego non consentito, sono perseguiti ai sensi di legge.
            </p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/jquery.main.js"></script>
    <script src="../js/init.js" type="text/javascript"></script>
    <script src="/node_modules/move-js/move.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="/assets/js/pleaserotate.min.js"></script>
    <script>

        if($('aside').length){
            @* $('header, .disclaimer').hide(); *@
        }

        if($('.domanda').length){
            $('#questionario').width('100%');
        }

        if($('.congratulazioni').length){
            $('#question').width('100%');
        }

        if($('.quiz-alert').length){
            $('header, .disclaimer').hide();
        }
    </script>
    <script>
        var PleaseRotateOptions = {
            onlyMobile: false,
            forceLandscape: true,
            message: "Ruota il dispositivo",
            subMessage: "per partecipare al corso",
            startOnPageLoad: true,
            onlyMobile: true,
            allowClickBypass: false,
        }
    </script>


</body>
</html>







