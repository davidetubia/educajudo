
@{
    ViewBag.Title = "Presentazione Parte Pratica";
    Layout = "~/Views/Shared/_LayoutMyArea.cshtml";
}

<div class="pt-2" style="margin-top: 75px;">
    <div class="d-flex align-items-center">
        <div class="container">
            <h1>Intro parte pratica</h1>
            <hr>
            <div class="text-center">
                <video id="video-corso" autoplay controls style="margin-top:20px;width:1000px">
                    <source src="https://www.dropbox.com/s/adoecblnthlxcep/presentazionepp.mp4?raw=1" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
<div id="next-lesson" class="overlay text-center" style="display:none;">
    <div class="w-100">
        <h2>Video completato</h2>
        <div class="d-flex justify-content-center align-items-center hide">
            <div class="text-center">
                <a href="/myarea/mycorsi/esegui/27" class="btn btn-primary btn-lg">Vai alla prossima slide<i class="bi bi-arrow-right"></i></a><br>
            </div>
        </div>
    </div>
</div>
@section scripts{
    <script type='text/javascript'>
        document.getElementById('video-corso').addEventListener('ended', passaavantiHandler, false);
        function passaavantiHandler(e) {
            $('#next-lesson').show();
        }
    </script>
}