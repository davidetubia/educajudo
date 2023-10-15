
@{
    ViewBag.Title = "Introduzione al corso";
    Layout = "~/Views/Shared/_LayoutMyArea.cshtml";
}
<style>
    .container {
        max-width: 1000px;
    }
</style>

<div class="pt-2 h-100" style="margin-top: 75px;">
    <div class="d-flex align-items-center">
        <div class="container">
            <h1>Introduzione</h1>
            <hr>
            <div class="text-center">
                <video id="video-corso" autoplay style="margin-top:20px;width:100%" controls>
                    <source src="https://www.dropbox.com/s/jxebidn8mb59gi0/presentazione.mp4?raw=1" type="video/mp4">
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
                    <a href="/myarea/mycorsi/esegui/1" class="btn btn-primary btn-lg">Inizia il corso <i class="bi bi-arrow-right"></i></a><br>
                    <div class="mt-3">
                        oppure <a href="/myarea/mycorsi/presentazione">Riguarda il video <i class="bi bi-arrow-clockwise"></i></a>
                    </div>
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