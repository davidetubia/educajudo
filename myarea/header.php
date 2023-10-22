<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="manifest" href="/manifest.json">
    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/lp.css">
    <link rel="stylesheet" href="../assets/css/colors.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="../assets/js/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>@ViewBag.Title | EducaJudo.it</title>
    <meta name="author" content="EducaJudo.it" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<header class="fixed-top">
    <div class="container-md d-flex align-items-center">
        <div class="flex-grow-1">
            <a href="/educajudo"><img src="../images/edutraining-green.png" id="logo" alt="Logo Fijlkam ed Educajudo"></a>
        </div>
        <div id="pulsantiCorso" class="hide">
            <a href="" class="pulsante-corso pulsante-multimedia" data-open="#video" data-close="#sezioni-corso"><i class="bi bi-camera-video"></i> Multimedia</a>
            <a href="" class="pulsante-corso pulsante-sezioni" data-open="#sezioni-corso" data-close="#video"><i class="bi bi-card-checklist"></i> Sezioni</a>
        </div>
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i> Il tuo account
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="apprendimento.php"><i class="bi bi-speedometer2"></i> La tua dashboard</a></li>
                    <li><a class="dropdown-item" href="myio.php"><i class="bi bi-person-fill"></i> Profilo</a></li>
                    <li><a class="dropdown-item" href="profilazione.php"><i class="bi bi-person-fill"></i> Completa il tuo profilo</a></li>
                    <li><a class="dropdown-item" href="esegui.php"><i class="bi bi-play-btn-fill"></i> Riprendi il corso</a></li>
                    <!-- amministrazione
                    <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="admin/adminrelatori"><i class="bi bi-person"></i> Amministrazione</a></li>
                    <li><hr class="dropdown-divider"></li>
                    -->

                    <li><a class="dropdown-item" href="/@lingua/auth/logout"><i class="bi bi-door-open-fill"></i> Esci</a></li>
                </ul>
            </div>
    </div>
</header>


<main id="main" class="min-vh-100 d-flex flex-column justify-content-center align-items-center" style="padding-top: 40px">