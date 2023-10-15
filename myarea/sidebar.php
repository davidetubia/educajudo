<source src="/corsi/video/@(_d.ID).mp4" type="video/mp4">

<div id="video">
        <video id="video-corso" autoplay controls>
        <source src="https://www.dropbox.com/s/f2ofkng6t7hek1p/3.%20BENSO%20-%20SVILUPPO%20NEUROCEREBRALE%20Fabio%20Della%20Moglie.mp4?raw=1" type="video/mp4">
        </video>
</div>
    <div class="info-redattore p-3">
        <h5>Informazioni sul relatore</h5>
        <div class="d-flex align-items-center">
            <div class="redattore-image">
                <img src="/assets/relatori/@(CUtils.Slugify(r.Nome)).jpg" alt="@r.Nome">
            </div>
            <div class="flex-grow-1">
                <h6><strong>@r.Nome</strong></h6>
                <p>@r.Titolo</p>

                <a href="/@CUser.Lingua/relatori/@r.ID/@(CUtils.Slugify(r.Nome))/" target="_blank" class="mr-3">leggi la sua scheda</a>
            </div>
        </div>
    </div>



<div id="next-lesson" class="overlay text-center" style="display:none;">
    <div class="w-100">

            <h2>Lezione completata</h2>
            <div class="d-flex justify-content-center align-items-center hide">
                <div class="text-center">
                    <a href="/myarea/mycorsi/next" class="btn btn-primary btn-lg">Vai alla lezione successiva <i class="bi bi-arrow-right"></i></a><br>
                    <div class="mt-3">
                        oppure <a href="/myarea/mycorsi/esegui/@_d.ID">Riguarda questa lezione <i class="bi bi-arrow-clockwise"></i></a>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-center align-items-center hide">
                <div class="text-center">
                    <a href="/myarea/mycorsi/partepratica/@(_d.ID)/?t=J" class="btn btn-primary btn-lg">Guarda l'esempio pratico<br>Parte generale (Judo) <i class="bi bi-arrow-right"></i></a><br>
                    <div class="mt-3">
                        oppure <a href="/myarea/mycorsi/esegui/@_d.ID">Riguarda questa lezione <i class="bi bi-arrow-clockwise"></i></a>
                    </div>
                </div>
            </div>



            <div class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <a href="/myarea/mycorsi/test/?i=@(_d.ID)" class="btn btn-primary btn-lg">Esegui il test di fine sezione <i class="bi bi-arrow-right"></i></a><br>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <a href="/myarea/mycorsi/presentazionepp" class="btn btn-primary btn-lg">Vedi intro parte pratica <i class="bi bi-arrow-right"></i></a><br>
                </div>
            </div>

    </div>
</div>

<!-- SEZIONI CORSO -->

<div class="section-container accordion" id="accordionExample">

        <div class="section-single accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sezione-@a.ID" aria-expanded="true" aria-controls="sezione-@a.ID">
                    <div class="info-sezione">
                        <span class="titolo-sezione">Titolo sezione</span>
                        <span class="info-corso">
                            <span class="lezioni">
                                <i class="bi bi-book"></i>
                                12/13
                            </span> <span class="divider">|</span>
                            <span class="durata"><i class="bi bi-clock-history"></i> 18.00</span>
                        </span>
                    </div>
                </button>
            </h2>
            <div id="sezione-@a.ID" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>

                                <li>
                                    <a href="/myarea/mycorsi/esegui/@b.ID">Titolo lezione</a>
                                    <span>Durata</span>
                                </li>

                                <li>
                                    Titolo
                                    <span>Durata</span>
                                </li>
                                <li class="quiz">Quiz</li>
                    </ul>
                </div>
            </div>
        </div>
    

    <!-- AVANZAMENTO -->
    <div class="avanzamento p-3">
        <h6>Stato di avanzamento</h6>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="@_progress" aria-valuemin="0" aria-valuemax="100">50% completato</div>
        </div>
        <h6 class="mt-3"><a href="/myarea/myapprendimento">Guarda la dashboard dei tuoi progressi ></a></h6>
    </div>
    <!-- /AVANZAMENTO -->

</div>

<!-- /SEZIONI CORSO -->
