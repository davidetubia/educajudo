<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@ViewBag.Title | EducaJudo.it</title>

    <meta name="author" content="EducaJudo.it" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/lp.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header>
        <div class="container d-flex align-items-center">
            <div class="flex-grow-1">
                <a href="/educajudo"><img src="images/edutraining-green.png" id="logo" alt="Logo Fijlkam ed Educajudo"></a>
            </div>

                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="bi bi-person-fill"></i> Accedi
                </button>

                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i> Il tuo account
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="myarea/apprendimento.php"><i class="bi bi-speedometer2"></i> La tua dashboard</a></li>
                        <li><a class="dropdown-item" href="myarea/myio.php"><i class="bi bi-person-fill"></i> Profilo</a></li>
                        <li><a class="dropdown-item" href="myarea/profilazione.php"><i class="bi bi-person-fill"></i> Completa il tuo profilo</a></li>
                        <li><a class="dropdown-item" href="myarea/esegui.php"><i class="bi bi-play-btn-fill"></i> Riprendi il corso</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="admin/adminrelatori"><i class="bi bi-person"></i> Amministrazione</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/@lingua/auth/logout"><i class="bi bi-door-open-fill"></i> Esci</a></li>
                    </ul>
                </div>

            <nav>
                <a href="#menu" id="toggle"><span></span></a>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="index.php#perche">Perchè edu-training class</a></li>
                        <li><a class="dropdown-item" href="index.php#piattaforma">La piattaforma</a></li>
                        <li><a class="dropdown-item" href="index.php#relatori">Relatori</a></li>
                        <li><a class="dropdown-item" href="index.php#chi">Destinatari</a></li>
                        <li><a class="dropdown-item" href="index.php#obiettivi">Obiettivi</a></li>
                        <li><a class="dropdown-item" href="index.php#percorso">Percorso formativo</a></li>
                        <li><a class="dropdown-item" href="index.php#aree">Aree tematiche</a></li>
                        <li><a class="dropdown-item" href="index.php#qualifiche">Qualifiche e riconoscimenti</a></li>
                        <li><a class="dropdown-item" href="index.php#regolamento">Regolamento e programma</a></li>
                        <li><a class="dropdown-item" href="index.php#contatti">Contatti</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>





