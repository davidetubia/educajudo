@using EducaJudoLearn.Models;
@{
    MCorso _d = CDati.CorsoScheda();
    int _ultimaslide = CUser.UltimaSlide;
    int _progress = _ultimaslide * 100 / 13;
    //         <video id="video-corso" autoplay playsinline style="pointer-events: none;margin-top:42px">
}
<!-- SEZIONI CORSO -->

<div class="section-container accordion" id="accordionExample">

    @foreach (MCorso a in CDati.CorsoLista(0))
    {
        <div class="section-single accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sezione-@a.ID" aria-expanded="true" aria-controls="sezione-@a.ID">
                    <div class="info-sezione">
                        <span class="titolo-sezione">@a.Titolo</span>
                        <span class="info-corso">
                            <span class="lezioni"><i class="bi bi-book"></i> @a.Quanti</span> <span class="divider">|</span> <span class="durata"><i class="bi bi-clock-history"></i> @CUtils.Durata(a.DurataSotto)</span>
                        </span>
                    </div>
                </button>
            </h2>
            <div id="sezione-1" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        @foreach (MCorso b in CDati.CorsoLista(a.ID))
                        {
                            if (_ultimaslide >= b.ID)
                            {
                                <li @if (b.Quiz) { <text> class="quiz" </text> }><a href="/myarea/mycorsi/esegui/@b.ID">@b.Titolo</a></li>
                            }
                            else
                            {
                                <li @if (b.Quiz) { <text> class="quiz" </text> }>@b.Titolo</li>
                            }
                        }

                    </ul>
                </div>
            </div>
        </div>
    }

    <!-- AVANZAMENTO -->
    <div class="avanzamento p-3">
        <h6>Stato di avanzamento</h6>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: @_progress%;" aria-valuenow="@_progress" aria-valuemin="0" aria-valuemax="100">@_progress% completato</div>
        </div>
        <h6 class="mt-3"><a href="/myarea/myapprendimento">Guarda la dashboard dei tuoi progressi ></a></h6>
    </div>
    <!-- /AVANZAMENTO -->

</div>

<!-- /SEZIONI CORSO -->
