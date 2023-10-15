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

    <title>@ViewBag.Title | EducaJudo.it</title>
    <meta name="author" content="EducaJudo.it" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
    <header>
    <div class="container d-flex align-items-center">
        <div class="flex-grow-1">
            <a href="/educajudo"><img src="../images/edutraining-green.png" id="logo" alt="Logo Fijlkam ed Educajudo"></a>
        </div>
        <nav class="navbar navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse d-flex" id="navbarCollapse">
                        <ul class="navbar-corsi navbar-nav mb-md-0">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    Corsi
                                </a>
                                <div class="dropdown-menu">
                                    <a href="/myarea/mycorsi/esegui/" class="dropdown-item">OPERATORE FIJLKAM PER L'INFANZIA</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../relatori.php">Relatori</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    Il mio percorso di studi
                                    <!-- <img src="images/$" id="immagine-profilo" alt=""> -->
                                </a>
                                <div class="dropdown-menu">
                                    <a href="../myarea/esegui.php" class="dropdown-item"><i class="bi bi-play-btn-fill"></i> Riprendi il corso</a>
                                    <a href="../myarea/apprendimento.php" class="dropdown-item"><i class="bi bi-speedometer2"></i> La mia Dashboard</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/@lingua/auth/logout" class="dropdown-item">Esci</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    Assistenza
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Regolamento</a>
                                    <a href="#" class="dropdown-item">Guida alla navigazione</a>
                                    <a href="#" class="dropdown-item">FAQ</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    Risorse
                                </a>
                                <div class="dropdown-menu">
                                    <a href="/docs/form-tirocinio.pdf" class="dropdown-item" target="_blank">Diario di Bordo del Tirocinio</a>

                                    <a href="/docs/bibliografia.pdf" class="dropdown-item" target="_blank">Bibliografia</a>
                                </div>
                            </li>

                            <!-- admin -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin Gestione</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Utenti</a>
                                    <a href="/admin/adminrelatori" class="dropdown-item">Relatori</a>
                                </div>
                            </li>
                            <!-- /admin -->

                        </ul>
                    </div>
            </nav>
        </div>
        </header>
        </div>

        <main id="main">
