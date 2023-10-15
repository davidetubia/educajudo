@using EducaJudoLearn.Models
@{
    string lingua = HttpContext.Current.Request.RequestContext.RouteData.Values["lingua"].ToString().ToLower();

    ViewBag.Title = "Scheda Relatore";
    Layout = "~/Views/Shared/_Layout.cshtml";
    string id = HttpContext.Current.Request.RequestContext.RouteData.Values["id"].ToString();
    MRelatore r = CDati.RelatoreScheda(id);
}


<script>
    document.getElementById("down").style.backgroundColor = "black";
</script>

<div class="container py-5 mt-100">
    <div class="row">  
        <div class="col-md-3">
            <img src="/assets/relatori/@(CUtils.Slugify(r.Nome)).jpg" alt="@r.Nome">
            <div class="mt-2 p-3 bg-secondary text-center text-white">
                <h5>@r.Nome &egrave; relatore di EduTraining Class</h5>
                <p style="font-size:16px; line-height: 16px!important;" class="text-center">La piattaforma di formazione H24 sulla didattica delle Arti Marziali e delle attività motorie per l'infanzia</p>
                <a href="/@lingua/iscriviti" class="btn btn-primary margin-auto" style="margin-top: -10px;">Iscriviti ai corsi</a>
            </div>
        </div>
        <div class="col-md-9">
            <h1>@r.Nome</h1>
            <p>@r.Titolo</p>
            <hr>
            <p>@Html.Raw(r.Scheda.Replace(Environment.NewLine, "<br />"))</p>
        </div>
    </div>
</div>
