<?php include 'header.php'; ?>

    <section id="home" class="d-flex align-items-start flex-column home-bg-1">
        <div class="container-home container d-flex flex-column mb-auto h-100">
            <div class="caption mt-auto mb-auto">
                <h1>EduTraining Class</h1>
                <p>
                La piattaforma di formazione H24<br>
                sulla didattica delle Arti Marziali<br>
                e delle attività motorie per l'infanzia
                </p>
                <a href="iscriviti.php" class="btn btn-primary">Iscriviti ai corsi</a>
            </div>

            <div class="adopted-by d-flex flex-row loghi">
                <div class="d-flex flex-column">
                    <span>Adopted by</span>
                    <div class="d-flex flex-row p-0 align-items-center">
                        <img src="images/logo-fijlkam.png" id="logo-fijlkam" alt="Logo Fijlkam">
                        <img src="assets/images/logo-ijf.png" id="logo-ijf" alt="Logo IJF Academy">
                    </div>
                </div>
            </div>
            <div class="adopted-by d-flex flex-row loghi">
                <div class="d-flex flex-column">
                    <span>Powered by</span>
                    <img src="images/logo-educajudo_2.png" id="educajudo" alt="Logo Educajudo.it">
                </div>
                <div class="d-flex flex-column logo-anupi">
                    <span>In partnership with</span>
                    <img src="images/logo-anupi-tnpee.png" id="logo-anupi">
                </div>
            </div>

        </div>
    </section>

    <script>
    var classes = [
    'home-bg-1',
    'home-bg-2',
    'home-bg-3'
    ]

    var classIndex = 0;

    function loopClasses() {
    var currentClass = classes[classIndex];

    for (var i = 0; i < classes.length; i++) {
        $('#home').removeClass(classes[i]);
    }

    $('#home').addClass(currentClass);

    classIndex = (classIndex + 1) % classes.length

    }

    setInterval(loopClasses, 5000);
    </script>

    <section id="anupi-welcome" class="p-section bg-gray text-white text-center">
        <div class="container">
            <span>Inizia da qui il percorso di formazione adottato dalla <br><b>Federazione Italiana Judo Lotta Karate e Arti Marziali<br>IJF Academy</b><br> Con il paternariato della <b><br>Commissione Tecnico Scientifica della Associazione Nazionale dei Terapisti della Neuro e Psicomotricità dell'età evolutiva</b><br>Powered by Educajudo</span>
        </div>
    </section>

    <section id="perche" class="p-section bg-light-gray">
        <div class="container">
            <div class="d-flex flex-md-row flex-column align-items-center">
                <div class="d-none d-md-block w-50 p-5">
                    <div class="img-perche">
                        <img src="images/abuso-devices.jpeg" alt="">
                    </div>
                    <div class="img-perche">
                        <img src="images/effetti-della-pandemia.jpg" alt="">
                    </div>
                </div>
                <div class="d-flex flex-column w-100">
                    <h2 class="text-violet">Fabbisogno e<br>domanda di mercato</h2>
                    <div class="img-perche d-block d-md-none">
                        <img src="images/abuso-devices.jpeg" alt="">
                    </div>
                    <p>A seguito delle limitazioni e degli effetti della pandemia, le famiglie hanno fortemente avvertito la <b>necessità di anticipare il momento di esordio dell’attività motoria dei bambini, già a partire dai 3 anni,</b> determinando un <b>aumento imponente delle richieste di iscrizione</b> in palestra, nei centri sportivi e ludico-ricreativi.</p>
                    <div class="img-perche d-block d-md-none">
                        <img src="images/effetti-della-pandemia.jpg" alt="">
                    </div>
                    <p><b>La fascia prescolare (3-5 anni)</b> rappresenta un periodo evolutivo estremamente delicato su cui è essenziale intervenire con <b>competenze specifiche</b>, in funzione educativa e preventiva delle <b>crescenti vulnerabilità</b>, con un approccio idoneo a <b>stimolare gli aspetti motori al pari di quelli cognitivi ed emozionali.</b></p>
                    <!-- <p>Il ruolo dell’<strong>insegnante di arti marziali, esperto in area infantile,</strong> assume un valore di supporto alla genitorialità, al sistema scolastico e socio-sanitario, capace di accompagnare il bambino in un percorso di <strong>maturazione psicofisica equilibrata</strong>, che transita attraverso la motricità, il potenziamento dei <strong>prerequisiti di apprendimento</strong>, della <strong>socializzazione</strong> e della <strong>disciplina</strong>.</p> -->
                </div>
            </div>
        </div>
    </section>
    
    <section id="perche" class="p-section">
        <div class="container">
            <div class="d-flex flex-md-row flex-column align-items-center">
                <div class="d-flex flex-column w-100">
                    <h2 class="text-violet">Risposta all'esigenza<br/>e linee di intervento</h2>
                    <p><b>L’operatore esperto in area infantile</b> assume un ruolo <b>di supporto alla genitorialità, al sistema scolastico e socio-sanitario</b>, capace di accompagnare il bambino in un percorso di <b>maturazione psicofisica equilibrata</b>, che transita attraverso la riconquista del contatto, del movimento, delle relazioni e della disciplina.</p>
                    <div class="img-perche d-block d-md-none">
                        <img src="images/bambino-per-mano.jpg" class="img-fluid" alt="Bambino per mano">
                    </div>
                    <p>E’ necessario che il bagaglio didattico venga calzato sulle <b>caratteristiche peculiari della seconda infanzia</b> e si arricchisca di <b>competenze trasversali</b> che affondano le radici nell’<b>area pedagogica, neuropsicomotoria e comunicativa.</b></p>
                </div>
                <div class="p-md-5 d-none d-md-block">
                    <div class="img-perche">
                        <img src="images/bambino-per-mano.jpg" class="img-fluid" alt="Bambino per mano">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="piattaforma" class="p-section text-center bg-light-gray">
        <div class="container">
        <div class="row">
            <div class="col">
            <h2 class="text-violet">La piattaforma</h2>
            <p>Edutraining Class è la <strong>prima piattaforma di formazione Evidence Based</strong>, accessibile h/24, dedicata agli <strong>insegnanti di arti marziali e agli operatori di area motoria ed educativa</strong> che intendano acquisire <strong>elevate competenze professionali</strong> nella didattica per i <strong>bambini dai 3 ai 5 anni.</strong> 
<br>Offre ai corsisti i seguenti contenuti:</p>
            </div>
        </div>
        <div class="grid">
            <div class="grid-item" style="background-image:url('images/piattaforma-1.png');">
                <div class="overlay">
                    <h3>Animazioni grafiche e slide</h3>
                </div>
            </div>
            <div class="grid-item" style="background-image:url('images/piattaforma-2.jpeg');">
                <div class="overlay">
                    <h3>Video intervento dei relatori</h3>
                </div>
            </div>
            <div class="grid-item" style="background-image:url('images/piattaforma-3.jpeg');">
                <div class="overlay">
                    <h3>Test di verifica</h3>
                </div>
            </div>
            <div class="grid-item" style="background-image:url('images/piattaforma-4.jpeg');">
                <div class="overlay">
                    <h3>Archivio video in 4K</h3>
                </div>
            </div>
            
            <div class="grid-item" style="background-image:url('images/piattaforma-5.jpeg');">
                <div class="overlay">
                    <h3>Dashboard percorso di studi</h3>
                </div>
            </div>
            <div class="grid-item" style="background-image:url('images/piattaforma-6.jpeg');">
                <div class="overlay">
                    <h3>Masterclass tematiche</h3>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <p class="text-center">Il materiale didattico resterà a disposizione dello studente e sarà accessibile in ogni momento, su qualsiasi device</p>
            <div class="icons">
                <i class="bi bi-laptop"></i>
                <i class="bi bi-tablet-landscape"></i>
                <i class="bi bi-phone"></i>
            </div>
            <a href="iscriviti.php" class="btn btn-primary margin-auto">Iscriviti ai corsi</a>
        </div>

        </div>
    </section>

    <!-- SEZIONE RELATORI -->
    <section id="relatori" class="p-section bg-dark-gray text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex flex-column justify-content-center text-left mb-2 mb-md-0">
                    <h2>I relatori</h2>
                    <p>I più grandi esperti in ambito scientifico, sportivo, sanitario e pedagogico, per un'osservazione multi-dimensionale del bambino</p>
                    <a href="relatori.php" class="btn btn-primary">Conosci i relatori</a>
                </div>
                <div class="col-md-4 text-center">
                <video id="video-relatori" autoplay loop muted playsinline >
                    <source src="assets/video/video-relatori.mp4" type="video/mp4" mute>
                    Your browser does not support the video tag.
                </video>
                </div>
            </div>
        </div>
    </section>
    <!-- /SEZIONE RELATORI -->

    <!-- SEZIONE A CHI SONO RIVOLTI I CORSI -->
    <section id="chi" class="p-section">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-md-center">
                <div class="w-md-50 p-4 d-none d-md-block">
                    <img src="images/partecipanti.jpeg" class="img-fluid"  alt="">
                </div>
                <div class="w-md-50 ml-md-4">
                    <h2 class="text-violet title-rivolti mt-3 mt-md-0">A chi sono rivolti i corsi</h2>
                    <img src="images/partecipanti.jpeg" class="d-block d-md-none img-fluid mb-3"  alt="">
                    <div class="d-flex flex-column check">
                        <div class="d-flex flex-row align-items-center">
                            <img src="images/check.png" alt="Icona compreso" />
                            <p>Insegnanti tecnici di tutte le discipline della FIJLKAM</p>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <img src="images/check.png" alt="Icona compreso" />
                            <p>Tesserati con la Fijlkam, maggiori di 18 anni</p>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <img src="images/check.png" alt="Icona compreso" />
                            <p>Insegnanti e tesserati (>18 anni) di altre Federazioni Sportive, Enti di Promozione Sportiva e Discipline Sportive Associate</p>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <img src="images/check.png" alt="Icona compreso" />
                            <p>Corpo docente scolastico</p>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <img src="images/check.png" alt="Icona compreso" />
                            <p>Insegnanti di sostegno</p>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <img src="images/check.png" alt="Icona compreso" />
                            <p>Operatori di area educativa / riabilitativa</p>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <img src="images/check.png" alt="Icona compreso" />
                            <p>Studenti e docenti di area motoria, educativa, socio-psicopedagogica</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /SEZIONE A CHI SONO RIVOLTI I CORSI -->

    <!-- SEZIONE OBIETTIVI -->
    <section id="obiettivi" class="p-section text-center bg-dark-gray text-white">
        <div class="container">
            <div class="row">
                <div class="col mb-3">
                    <h2>Obiettivi del percorso formativo</h2>
                    <p class="text-center">Il percorso di formazione conferisce ai corsisti gli strumenti pratici e teorici utili a:</p>
                </div>
            </div>
            <!-- GRIGLIA PERCORSO -->
            <div class="grid">
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-child"></i></div>
                    <p>Acquisire specifiche competenze nella didattica, la gestione e l’organizzazione di corsi e classi di bambini in eta’ prescolare (3-5 anni)</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <p>Rilevare gli indicatori di eventuali fragilità del bambino</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-gears"></i></div>
                    <p>Pianificare strategie di intervento preventivo / educativo</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <p>Ampliare la propria offerta formativa e il bacino di utenza della propria società sportiva</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-location-crosshairs"></i></div>
                    <p>Distinguersi sul mercato</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-rocket"></i></div>
                    <p>Aumentare il numero di iscritti della propria società sportiva</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                    <p>Costituire il vivaio a supporto delle successive classi giovanili</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-handshake"></i></div>
                    <p>Favorire sinergie interprofessionali tra le aree sport, scuola, sanità</p>
                </div>
                <div class="d-flex grid-item">
                    <div class="icon"><i class="fa-solid fa-money-bill-trend-up"></i></div>
                    <p>Ottenere finanziamenti per lo sviluppo delle progettualità</p>
                </div>
            </div>
            <!-- /GRIGLIA PERCORSO -->
        </div>
    </section>
    <!-- /SEZIONE OBIETTIVII -->


<!-- SEZIONE PERCORSO FORMATIVO -->
<section id="percorso">
    <div class="container p-section-top">
        <div class="row text-center">
            <h2 class="text-green">Struttura del corso</h2>
            <p class="text-center">
                Il corso prevede le seguenti frasi
            </p>
        </div>

        <div class="metodi text-center d-flex flex-column flex-md-row justify-items-center">
            <div class="d-flex flex-column align-items-center">
                <i class="fa-solid fa-laptop"></i>
                <h3>E-LEARNING</h3>
                <p>Formazione a distanza, asincrona, con accesso riservato h24 e test di sbarramento</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="images/icona-bimbi.png">
                <h3>TIROCINIO</h3>
                <p>10 lezioni pratiche con i bambini in età prescolare, applicando le metodologie apprese nella parte on line</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <i class="fa-solid fa-book"></i>
                <h3>DIARIO DI BORDO</h3>
                <p>Report delle 10 lezioni, su form precompilato</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <i class="fa-solid fa-users"></i>
                <h3>CLINIC</h3>
                <p>Full immersion in presenza, di sabato, in uno degli eventi laboratoriali suddivisi per macroaree territoriali </p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="images/icona-esame.png">
                <h3>ESAME</h3>
                <p>Svolgimento di un esame teorico-pratico, a conclusione della Clinic</p>
            </div>
        </div>

        <div id="percorso-timeline">
            <div class="tl p-section">
                <div class="timeline px-5 px-md-0">
                    <h2 class="mb-5">Aggiornamento permanente</h2>
                    <p>Il percorso formativo conferirà ai corsisti la possibilità di tenersi sempre aggiornati attraverso:</p>
                    <span class="spacer"></span>
                    <p>
                        Webinar specialistici on line su piattaforma EduTraining Class
                    </p>
                    <span class="spacer"></span>
                    <p>
                        Corsi di aggiornamento tematici presso i Comitati Regionali
                    </p>
                    <span class="spacer"></span>
                    <p>
                        Eventi e Lab tematici
                    </p>
                    <a href="iscriviti.php" class="btn btn-primary mt-3">Inizia il tuo percorso</a>
                </div>
            </div>
            <div class="judoka">
                <img src="images/judoka.png" class="sticky-bottom" alt="">
            </div>
        </div>
    </div>
</section>
<!-- /SEZIONE PERCORSO FORMATIVO -->
<!-- SEZIONE AREE TEMATICHE -->
<section id="aree" class="p-section text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-violet">Aree tematiche</h2>
            </div>
        </div>

        <div class="area-didattica">
            <div class="area-desc">
                <h3>SKILL DIDATTICHE</h3>
                <p>Partendo dall'analisi della <strong>struttura psico-fisiologica del bambino di 3-5 anni,</strong> saranno illustrate le <strong>materie teoriche e le abilità pratiche</strong> che l'insegnante di arti marziali deve acquisire dal punto di vista <strong>neuropsicomotorio, pedagogico e comunicativo,</strong> per accogliere i bambini di età prescolare nella propria società sportiva / centro infanzia / ludico-ricreativo, con <strong>professionalità e competenza.</strong></p>
            </div>
            <div class="area-img">
                <img src="images/classejudo.jpeg" alt="">
            </div>
        </div>

        <div class="area-didattica">
            <div class="area-desc">
                <h3>AREA MOTORIA, APPRENDIMENTO E FUNZIONI ESECUTIVE</h3>
                <p>Verranno descritti gli ambiti e le modalità di intervento finalizzati a favorire lo sviluppo dei <strong>prerequisiti di apprendimento</strong> del bambino e delle <strong>funzioni esecutive</strong> attraverso le esperienze motorie che questi vive sul tatami e che potra’ spendere nel suo successivo percorso sportivo, a scuola e nella vita.</p>
            </div>
            <div class="area-img">
                <img src="images/areamotoria.jpeg" alt="">
            </div>
        </div>

        <div class="area-didattica">
            <div class="area-desc">
                <h3>BISOGNI EDUCATIVI SPECIALI</h3>
                <p>Il percorso si estenderà gradualmente alla conoscenza dei <strong>bisogni educativi speciali</strong>, alla <strong>rilevazione precoce degli indicatori</strong> di rischio e alle tecniche di individualizzazione dell’intervento didattico, basate <strong>un’osservazione multidimensionale</strong> e calzate sulle specifiche caratteristiche ed esigenze del bambino.</p>
            </div>
            <div class="area-img">
                <img src="images/BES.jpeg" alt="">
            </div>
        </div>

        <div class="area-didattica">
            <div class="area-desc">
                <h3>PROFILI D'IMPRESA</h3>
                <p>In ultimo, verranno forniti contenuti di natura imprenditoriale diretti allo <strong>sviluppo di progettualità, alla ricerca di finanziamenti, all'acquisizione di competenze di marketing, comunicazione e promozione</strong> calzate sul target in esame.</p>
            </div>
            <div class="area-img">
                <img src="images/impresa.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- /SEZIONE PERCORSO FORMATIVO -->
<!-- SEZIONE QUALIFICHE -->
<section id="qualifiche" class="p-section">
    <div class="container">
        <div class="row text-center">
            <h2 class="text-green">Abilitazioni, riconoscimenti, crediti formativi</h2>
        </div>

        <div class="row">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            INSEGNANTI TECNICI DELLA FIJLKAM
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Attestato nazionale di Specializzazione nella Didattica delle Discipline Federali per l’Infanzia
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Inserimento nel registro Nazionale Indicizzato degli specialisti di area infantile (sez. Insegnanti Tecnici)
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Diritto di prelazione per la partecipazione a bandi e progetti federali di area educativa/infantile
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                5 Crediti formativi Fijlkam
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            TESSERATI FIJLKAM > 18 ANNI
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                Attestato nazionale di partecipazione, dal titolo: «Approccio neuropsicomotorio e metodologia didattica per bambini di 3-5 anni». Tale attestato, su richiesta del soggetto interessato da inoltrarsi all’ufficio formazione della Fijlkam, potrà essere convertito nell’attestato di SPECIALIZZAZIONE una volta acquisita la qualifica minima di aspirante allenatore federale.
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Inserimento nel registro Nazionale Indicizzato dei corsisti, sez. tesserati FIJLKAM
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    5 Crediti formativi Fijlkam che saranno caricati sull’area personale riservata solo successivamente all’acquisizione della qualifica minima di aspirante allenatore federale.
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ALTRI CORSISTI*
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <small  style="font-size:10px">*Partecipanti che, al momento dell’iscrizione al corso, non sono tesserati fijlkam.
L’iscrizione comporta l’acquisizione del ruolo di associato all’asd Educajudo e di tesserato Fijlkam</small>
                            <div class="riconoscimento mt-2">
                                <div class="riconoscimento-desc">
                                Attestato di partecipazione rilasciato da Educajudo, dal titolo: «Approccio neuropsicomotorio e metodologia didattica per bambini di 3-5 anni»
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                Inserimento nel registro Nazionale Indicizzato dei corsisti, sez. ALTRI CORSISTI (solo parte online)
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <a href="iscriviti.php" class="btn btn-primary m-auto mt-5">Iscriviti ai corsi</a>
        </div>
    </div>
</section>
<!-- /SEZIONE QUALIFICHE -->


<section id="assistenza" class="p-section text-center">
    <div class="container">
        <h2 class="text-white">Assistenza e risorse</h2>
        <div class="link-assistenza d-flex flex-column flex-md-row align-items-center">
            <a href="#">Programma e regolamento</a>
            <a href="#">Guida alla navigazione</a>
            <a href="#">FAQ</a>
            <a href="#">Diario di bordo del tirocinio</a>
            <a href="#">Domanda di iscrizione alla Clinic</a>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>