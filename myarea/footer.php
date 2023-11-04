</main>
<div id="disclaimer" class="bg-black py-3">
    <div class="container text-white text-center">
        <div>
            <p class="text-small">
                2023 All right reserved. <br>
                La struttura del corso e i relativi contenuti testo-audio-video-grafica sono proprietà di Educajudo.<br>
                La riproduzione non autorizzata, così come la trasmissione, il riutilizzo e quant’altro legato all’impiego non consentito, sono perseguiti ai sensi di legge.
            </p>
        </div>
    </div>
</div>




    <!-- 
    Non riconosco questi script ma li ho lasciati nel caso ti servissero.
    
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/jquery.main.js"></script>
    <script src="../js/init.js" type="text/javascript"></script>
    <script src="/node_modules/move-js/move.min.js"></script> 
    -->
    <script>

        // if($('aside').length){
        //     @* $('header, .disclaimer').hide(); *@
        // }

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

    <!-- 
        Check se siamo in una pagina corsi
        in tal caso aggiunge i pulsanti mostra multimedia e mostra sezioni
        inoltre aggiunge lo script Pleaserotate.
    -->
    <script>
        $(document).ready(function(){
            const isCoursePage = $('.rotation-required').length;
            if(isCoursePage == 1){
                $('#pulsantiCorso').show();
                // mostro ruota il dispositivo
                $.getScript("/educajudo/assets/js/pleaserotate.min.js");
            }
        });
    </script>

    <script>
        $(document).ready(function(){
            const hasSidebar = $('#sidebarCorsi').length;
            const sidebarWidth = $('#sidebarCorsi').width();
            console.log(sidebarWidth)
            if(hasSidebar == 1){
                $('#disclaimer').addClass('shrink-disclaimer');
            }
        });
    </script>


    <!-- 
        Questo script nasconde e mostra sezione relatori
        e sezione 
    -->
    <script>
        $('#pulsantiCorso').children('a').on('click', function(e){
            e.preventDefault();
            var open = $(this).attr('data-open');
            var close = $(this).attr('data-close');
            $(open).show();
            $(close).hide();
        })
    </script>


</body>
</html>







