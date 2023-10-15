<?php include 'header.php'; ?>

    <section id="home" class="home-slider d-flex flex-column justify-content-center home-bg-1">
        <div class="container">
            <div class="caption">
                <h1>EduTraining Class</h1>
                <p>
                La piattaforma di formazione H24<br>
                sulla didattica delle Arti Marziali<br>
                e delle attività motorie per l'infanzia
                </p>
                <a href="iscriviti.php" class="btn btn-primary">Iscriviti ai corsi</a>
            </div>
            <div class="adopted-by d-flex flex-row m-auto">
            <div class="d-flex flex-column" style="margin-right: 50px;">
                <span>Powered by</span>
                <img src="images/logo-educajudo_2.png" style="max-width: 220px;" style="margin-top:30px;" alt="">
            </div>
            <div class="d-flex flex-column">
                <span>Adopted by</span>
                <img src="assets/images/logo-ijf.png" style="max-width: 220px;" alt="">
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

    // loop through classes and remove from element
    for (var i = 0; i < classes.length; i++) {
        $('#home').removeClass(classes[i]);
    }

    // add current class to element
    $('#home').addClass(currentClass);

    // advance or reset loop counter
    classIndex = (classIndex + 1) % classes.length

    }

    setInterval(loopClasses, 5000);
    </script>

    <section id="perche" class="p-section bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="img-perche">
                        <img src="images/abuso-devices.jpeg" alt="">
                    </div>
                    <div class="img-perche">
                        <img src="images/effetti-della-pandemia.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="text-violet">Perchè EduTraining Class</h2>
                    <p>L'esigenza di potenziamento dell'<strong>attività motoria per i bambini in età prescolare</strong>, in risposta alle misure restrittive per il contenimento del coronavirus e all’abuso precoce dello strumento digitale, rappresenta lo scenario che si sta presentando agli occhi di genitori, educatori, personale sanitario ed insegnanti dello sport.</p>
                    <p>Una fascia di eta’ che mostra crescenti valori di vulnerabilità e sulla quale è necessario intervenire con <strong>competenze specialistiche</strong>, in funzione educativa e preventiva delle fragilita’ legate alla sedentarietà, alle problematiche comportamentali e relazionali, con un approccio che sappia <strong>stimolare gli aspetti motori al pari di quelli cognitivi, emozionali e personologici.</strong></p>
                    <p>Il ruolo dell’<strong>insegnante di arti marziali, esperto in area infantile,</strong> assume un valore di supporto alla genitorialità, al sistema scolastico e socio-sanitario, capace di accompagnare il bambino in un percorso di <strong>maturazione psicofisica equilibrata</strong>, che transita attraverso la motricità, il potenziamento dei <strong>prerequisiti di apprendimento</strong>, della <strong>socializzazione</strong> e della <strong>disciplina</strong>.</p>
                </div>
            </div>
        </div>
    </section>
    

    <section id="piattaforma" class="p-section text-center">
        <div class="container">
        <div class="row">
            <div class="col">
            <h2 class="text-violet">La piattaforma</h2>
            <p class="text-center">Edu-Training Class è la <strong>prima piattaforma di formazione Evidence based</strong>, accessibile h/24, dedicata agli <strong>insegnanti di arti marziali e agli operatori di area motoria ed educativa</strong>, che intendano acquisire <strong>elevate competenze professionali</strong> nella didattica per i <strong>bambini dai 3 ai 5 anni.</strong> 
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
                <div class="col-md-6 d-flex flex-column justify-content-center text-left">
                    <h2>I relatori</h2>
                    <p>I più grandi esperti in ambito scientifico, sportivo, sanitario e pedagogico, per un'osservazione multi-dimensionale del bambino</p>
                    <a href="relatori.php" class="btn btn-primary">Conosci i relatori</a>
                </div>
                <div class="col-md-6 p-5 text-center">
                <video id="video-relatori" autoplay muted>
                    <source src="https://www.dropbox.com/s/2cod0rhyizna2oh/relatori-home.mp4?raw=1#t=0.5" type="video/mp4">
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
            <div class="row">
                <div class="col-md-6">
                    <img src="images/partecipanti.jpeg" class="img-fluid" style="width:100%" alt="">
                </div>
                <div class="col-md-6 p-5 pl-5 p-md-0" style="padding-left: 50px!important;">
                    <h2 class="text-violet title-rivolti">A chi sono rivolti i corsi</h2>
                    <ul style="list-rivolti">
                        <li>Insegnanti e tesserati (>18 anni) della FIJLKAM</li>
                        <li>Insegnanti e tesserati di altre Federazioni sportive, Enti di promozione sportiva e discipline sportive associate</li>
                        <li>Corpo docente scolastico</li>
                        <li>Insegnanti di sostegno</li>
                        <li>Operatori di area educativa / riabilitativa</li>
                        <li>Studenti e docenti di area motoria, educativa, socio-psicopedagogica</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /SEZIONE A CHI SONO RIVOLTI I CORSI -->

    <!-- SEZIONE OBIETTIVI -->
    <section id="obiettivi" class="p-section text-center bg-dark-gray text-white">
        <div class="container">
            <div class="row">
                <div class="col mb-5">
                    <h2>Obiettivi del percorso formativo</h2>
                    <p class="text-center">Il percorso di formazione conferisce ai corsisti gli strumenti pratici e teorici utili a:</p>
                </div>
            </div>
            <!-- GRIGLIA PERCORSO -->
            <div class="grid">
                <div class="grid-item">
                    <i class="fa-solid fa-child"></i>
                    <p>Acquisire competenze specialistiche nella didattica, la gestione e l’organizzazione di corsi e classi di bambini in eta’ prescolare (3-5 anni)</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <p>Rilevare gli indicatori di eventuali fragilità/disturbi del bambino</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-gears"></i>
                    <p>Pianificare strategie di intervento preventivo / educativo</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-lightbulb"></i>
                    <p>Ampliare la propria offerta formativa e il bacino di utenza della propria società sportiva</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-location-crosshairs"></i>
                    <p>Distinguersi sul mercato</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-rocket"></i>
                    <p>Aumentare il numero di iscritti della propria società sportiva</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-leaf"></i>
                    <p>Costituire precocemente il vivaio a supporto delle successive classi giovanili</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-handshake"></i>
                    <p>Favorire sinergie interprofessionali tra le aree sport, scuola, sanità, welfare</p>
                </div>
                <div class="grid-item">
                    <i class="fa-solid fa-money-bill-trend-up"></i>
                    <p>Ottenere finanziamenti per lo sviluppo delle progettualità</p>
                </div>
            </div>
            <!-- /GRIGLIA PERCORSO -->
        </div>
    </section>
    <!-- /SEZIONE OBIETTIVII -->


<!-- SEZIONE PERCORSO FORMATIVO -->
<section id="percorso" class="pb-0">
    <div class="container p-section--top">
        <div class="row text-center">
            <h2 class="text-green">Il percorso formativo</h2>
            <p class="text-center">
                Il percorso di formazione è strutturato in modalità mista.<br>
                Si compone di <strong>due moduli progressivi</strong> e da <strong>Master Class di aggiornamento tematico:</strong>
            </p>
        </div>

        <div class="metodi row text-center">
            <div class="col-md-3">
                <i class="fa-solid fa-laptop"></i>
                <h3>E-LEARNING</h3>
                <p>Formazione a distanza, asincrona, con accesso 24 ore su 24, con password personale e test di sbarramento</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-child-reaching"></i>
                <h3>METODO</h3>
                <p>Descrizione delle aree e della metodologia di intervento, con ampio archivio - video dei giochi</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-book"></i>
                <h3>APPLICAZIONE</h3>
                <p>Applicazione pratica dei contenuti e compilazione di un diario di bordo.</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-users"></i>
                <h3>FULL IMMERSION</h3>
                <p>Un weekend Full immersion presso il Centro Olimpico Federale o inter-centri Regionali, in base alle disposizioni della FIJLKAM</p>
            </div>
        </div>

        <div id="percorso-timeline">
            <div class="tl p-section">
                <div class="timeline">
                    <span class="cap">1</span>
                    <h4>OPERATORE DELLE DISCIPLINE FEDERALI PER L'INFANZIA</h4>
                    <span class="spacer"></span>
                    <p>
                        1° anno di pratica<br>
                        +<br>
                        1° modulo di aggiornamento
                    </p>
                    <span class="spacer"></span>
                    <p>
                        2° anno di pratica<br>
                        +<br>
                        2° modulo di aggiornamento
                    </p>
                    <span class="spacer"></span>
                    <span class="cap">2</span>
                    <h4>EDUCATORE DELLE DISCIPLINE FEDERALI PER L'INFANZIA E I BES</h4>
                    <span class="spacer"></span>
                    <p>Long life practicing and learning: Aggiornamento permanente e pratica continua</p>
                    <span class="spacer"></span>
                    <a href="iscriviti.php" class="btn btn-primary">Inizia il tuo percorso</a>
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
                <p>Partendo dall'analisi della <strong>struttura psico-fisiologica del bambino di 3-5 anni,</strong> saranno illustrate le <strong>materie teoriche e le abilità pratiche</strong> che l'insegnante di arti marziali deve acquisire dal punto di vista <strong>neuropsicomotorio, pedagogico e comunicativo,</strong> per accogliere i bambini di età prescolare nella propria società sportiva, con <strong>professionalità e competenza.</strong></p>
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
            <h2 class="text-green">Abilitazioni, riconoscimenti, agevolazioni</h2>
        </div>

        <div class="row">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            PER GLI INSEGNANTI FIJLKAM
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5>Abilitazioni e attestati</h5>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Abilitazione di "Operatore delle discipline federali per l'infanzia"
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Abilitazione di "Educatore delle discipline federali per l'infanzia e i BES"
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <h5>Ottieni anche...</h5>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Inserimento nei quadri degli insegnanti specializzati nella didattica infantile
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Crediti formativi Fijlkam validi per corsi regionali e nazionali
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Scontistica e diritto di prelazione nell'accesso alle graduatorie dei bandi federali
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Crediti universitari con facoltà aderenti ai protocolli d'intesa
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
                            PER GLI ALTRI CORSISTI
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5>Attestati</h5>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    <h6>Attestato di partecipazione:</h6>
                                    "Approccio psicomotorio e metodologia didattica per bambini di 3-5 anni"
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    <h6>Attestato di partecipazione:</h6>
                                    "Approccio psicomotorio e metodologia didattica per bisogni educativi in età prescolare"
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <h5>Ottieni anche...</h5>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Crediti formativi Fijlkam validi per corsi regionali e nazionali
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Scontistica e diritto di prelazione nell'accesso alle graduatorie dei bandi federali
                                </div>
                                <div class="riconoscimento-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                            </div>
                            <div class="riconoscimento">
                                <div class="riconoscimento-desc">
                                    Crediti universitari con facoltà aderenti ai protocolli d'intesa
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


<section class="regolamento p-section text-center pb-0" id="regolamento" style="background-color: #515664;">
    <h2 class="text-white;">Regolamento e programma</h2>
    <p class="text-white text-center" style="text-align:center!important;">Sfoglia e/o scarica il PDF</p>
    <iframe style="min-height:500px; width: 100%;" src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=fzh96mpx2" class="embed-responsive embed-responsive-1by1 h-100" seamless="seamless" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
</section>


<?php include 'footer.php'; ?>