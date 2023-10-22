<?php include 'header.php'; ?>
<!-- @_d.ID-->
<div class="container-corso d-flex flex-grow-1 rotation-required">
    <article style="text-align:center">
            <a href="/myarea/mycorsi/next">
                <img src="../slides/1.jpg" alt="@_d.Titolo" style="margin-top:0px;width:100%" id="immaginislide">
            </a>

    <div>
        <h3>Pagine correlate</h3>
        <div class="d-flex">
        <a href="presentazione.php" class="btn btn-secondary" id="guardaEsempio">Introduzione</a>
        <a href="presentazionepp.php" class="btn btn-secondary" id="introPratica">Intro parte pratica</a>
        <a href="quiz.php" class="btn btn-secondary" id="introPratica">Quiz</a>
        <a href="finecorso.php" class="btn btn-secondary" id="introPratica">Fine corso</a>
        <a href="sondaggio.php" class="btn btn-secondary" id="introPratica">Sondaggio</a>
        </div>
    </div>
    
    
    
    </article>
    
    <aside id="sidebarCorsi">
        <?php include 'sidebar.php'; ?>
    </aside>
</div>


    <script type='text/javascript'>
        document.getElementById('video-corso').addEventListener('ended', passaavantiHandler, false);
        function passaavantiHandler(e) {
            $.ajax({
                url: "/myarea/mycorsi/salvafine/?i=@_d.ID", success: function () {
                    $('#next-lesson').show();
                }
            });
        }
    </script>

<?php include 'footer.php'; ?>