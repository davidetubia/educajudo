@using EducaJudoLearn.Models;
@{
    ViewBag.Title = "Parte pratica";
    Layout = "~/Views/Shared/_LayoutMyArea.cshtml";
    string tipo = Request.QueryString["t"];
    string slide = HttpContext.Current.Request.RequestContext.RouteData.Values["id"].ToString();
    MPratica _d = CDati.PartePratica(slide, tipo);

    string urltarget = string.Format("/myarea/mycorsi/partepratica/{0}/?t=L", slide);
    string testolink = "Guarda l'esempio pratico<br>Contenuti Lotta, Karate e Arti Marziali";
    if (_d.Prossimo == -1) // quiz
    {
        urltarget = "/myarea/mycorsi/test/?i=39";
        testolink = "Esegui il test di fine sezione";
    }
    else if (tipo == "L" || _d.Prossimo != 0)
    {
        urltarget = "/myarea/mycorsi/next/";
        testolink = "Vai alla lezione successiva";
    }


}
<div class="pt-2" style="margin-top: 80px;">
    <h1>@_d.Titolo: Parte pratica</h1>
</div>
<div class="container-corso d-flex flex-grow-1">

    <article style="text-align:center">
        <video id="video-corso" autoplay controls style="width:1000px">
            <source src="@_d.Url" type="video/mp4">
        </video>
    </article>

    <aside>
        @Html.Partial("SideBarPP")
    </aside>
</div>
<div id="next-lesson" class="overlay text-center" style="display:none;">
    <div class="w-100">
        <div class="d-flex justify-content-center align-items-center hide">
            <div class="text-center">
                <a href="@urltarget" class="btn btn-primary btn-lg">@Html.Raw(testolink)<i class="bi bi-arrow-right"></i></a><br>
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
