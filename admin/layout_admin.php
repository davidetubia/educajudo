@{
    string controller = HttpContext.Current.Request.RequestContext.RouteData.Values["controller"].ToString().ToLower();
    string action = HttpContext.Current.Request.RequestContext.RouteData.Values["action"].ToString().ToLower();
}
<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" media="screen and (min-width: 900px) and (max-width: 3600px)" href="/css/deskscreen.css">
    <link rel="stylesheet" media="screen and (min-width: 300px) and (max-width: 899px)" href="/css/smartscreen.css">

    <title>@ViewBag.Title | QuickerMenu</title>
    <meta name="author" content="EducaJudo.it" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    @RenderSection("style", required: false)

</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
                <div class="container-fluid d-flex">
                    <a class="navbar-brand flex-grow-1" href="/"><img src="images/educa-fijlkam-gray.png" id="logo" alt="" style="width:300px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse d-flex" id="navbarCollapse">
                        <ul class="navbar-corsi navbar-nav mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            @if (CUser.Admin)
                            {
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin Gestione</a>
                                    <div class="dropdown-menu dropdown-menu-lg-end">
                                        <a href="#" class="dropdown-item">Utenti</a>
                                        <a href="/admin/adminrelatori" class="dropdown-item">Relatori</a>
                                    </div>
                                </li>
                            }

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main id="main" class="mt-5 pt-5">
            @RenderBody()
        </main>
        <div class="disclaimer">
            <p>
                © All right reserved. <br>
                La struttura del corso e i relativi contenuti testo-audio-video-grafica sono proprietà di Educajudo.<br>
                La riproduzione non autorizzata, così come la trasmissione, il riutilizzo e quant’altro legato all’impiego non consentito, sono perseguiti ai sensi di legge.
            </p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @RenderSection("scripts", required: false)

</body>
</html>







