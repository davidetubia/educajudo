<?php include 'header.php'; ?>


    <div class="container">
        <div class="row">
            <h2>Completa i tuoi dati</h2>
            <p>Caro studente, ti invitiamo a compilare il presente modulo utile al fine dell'attestato o della qualifica di fine corso.</p>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Nome*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
                <div class="col">
                    <label for="">Cognome*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Data di nascita*</label>
                    <input type="date" class="form-control" id="" name="" required>
                </div>
                <div class="col">
                    <label for="">Luogo di nascita*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col-6 col-md-3">
                    <label for="">Domicilio*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
                <div class="col-6 col-md-3">
                    <label for="">Città*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
                <div class="col-6 col-md-3">
                    <label for="">Provincia*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
                <div class="col-6 col-md-3">
                    <label for="">Stato*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Telefono*</label>
                    <input type="text" class="form-control" id="" name="" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Titolo di studio*</label>
                    <select class="form-control" name="" id="" required>
                        <option value="">Laurea</option>
                        <option value="">Diploma scuole superiori</option>
                        <option value="">Licenza media</option>
                        <option value="">Licenza elementare</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Professione*</label>
                    <select class="form-control" name="" id="" required>
                        <option value="">chinesiologo</option>
                        <option value="">fisioterapista/osteopata</option>
                        <option value="">medico</option>
                        <option value="">educatore</option>
                        <option value="">tnpee</option>
                        <option value="">docente scuola infanzia</option>
                        <option value="">docente scuola primaria</option>
                        <option value="">insegnante di sostegno</option>
                        <option value="">oss</option>
                        <option value="">psicologo</option>
                        <option value="">logopedista</option>
                        <option value="">altro (specificare)</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Studente*</label>
                    <select class="form-control" name="" id="" required>
                        <option value="">scienze motorie</option>
                        <option value="">fisioterapia </option>
                        <option value="">medicina</option>
                        <option value="">scienza della formazione</option>
                        <option value="">scienza dell'educazione</option>
                        <option value="">psicologia</option>
                        <option value="">logopedia</option>
                        <option value="">tnpee</option>
                        <option value="">altro (specificare)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Tesserato Fijlkam*</label>
                    <select class="form-control" name="tesserato" id="tesserato" required>
                        <option value="">---Seleziona---</option>
                        <option value="1" data-show="tesseratoFijlkam" data-hide="altroOrganismo">Si</option>
                        <option value="0" data-show="altroOrganismo" data-hide="tesseratoFijlkam">No</option>
                    </select>
                </div>
            </div>
        </div>

        <script>
            $('.hidden').hide();
            $(document).on('change', '#tesserato', function(){
                var val = $(this).val();
                var show = '#'+$(this).children('option[value="'+val+'"]').attr('data-show');
                var hide = '#'+$(this).children('option[value="'+val+'"]').attr('data-hide');
                console.log('Mostra ' + show);
                console.log('Nascondi ' + hide);
                $(show).show();
                $(hide).hide();
            });
        </script>
        <div id="tesseratoFijlkam" class="hide">
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <label for="">Disciplina*</label>
                        <select class="form-control" name="" id="" required>
                            <option value="">judo</option>
                            <option value="">lotta </option>
                            <option value="">karate</option>
                            <option value="">aikido</option>
                            <option value="">ju jutsu</option>
                            <option value="">sumo</option>
                            <option value="">capoeira</option>
                            <option value="">grappling</option>
                            <option value="">bjj</option>
                            <option value="">pancrazio</option>
                            <option value="">s'istrumpa</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="">Profilo / qualifica*</label>
                        <select class="form-control" name="" id="" required>
                            <option value="">Praticante > 18 anni</option>
                            <option value="">Aspirante allenatore</option>
                            <option value="">Allenatore</option>
                            <option value="">Istruttore</option>
                            <option value="">Maestro</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="">Grado</label>
                        <select class="form-control" name="" id="" required>
                            <option value="">6° kyu</option>
                            <option value="">5° kyu</option>
                            <option value="">4° kyu</option>
                            <option value="">3° kyu</option>
                            <option value="">2° kyu</option>
                            <option value="">1° kyu</option>
                            <option value="">1° dan</option>
                            <option value="">2° dan</option>
                            <option value="">3° dan</option>
                            <option value="">4° dan</option>
                            <option value="">5° dan</option>
                            <option value="">6° dan</option>
                            <option value="">7° dan</option>
                            <option value="">8° dan</option>
                            <option value="">9° dan</option>
                            <option value="">10° dan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col">
                        <label for="">Società di appartenenza*</label>
                        <input type="text" class="form-control" id="" name="" required>
                    </div>
                    <div class="col">
                        <label for="">Località*</label>
                        <input type="text" class="form-control" id="" name="" required>
                    </div>
                </div>
            </div>
        </div>

        <div id="altroOrganismo" class="hide">
        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Tesserato altra federazione sportiva italiana</label>
                    <select class="form-control" name="" id="" required>
                        <option value="">L'Aero Club d'Italia (AECI)</option>
                        <option value="">L'Automobile Club d'Italia (ACI)</option>
                        <option value="">Federazione Italiana Atletica Leggera (FIDAL)</option>
                        <option value="">Federazione Italiana Badminton (FIBA)</option>
                        <option value="">Federazione Italiana Baseball Softball (FIBS)</option>
                        <option value="">Federazione Italiana Bocce (FIB)</option>
                        <option value="">Federazione Italiana Danza Sportiva (FIDS)</option>
                        <option value="">Federazione Italiana Discipline Armi Sportive da Caccia (FIDASC)</option>
                        <option value="">Federazione Italiana Giuoco Calcio (FIGC)</option>
                        <option value="">Federazione Italiana Canoa Kayak (FICK)</option>
                        <option value="">Federazione Italiana Canottaggio (FIC)</option>
                        <option value="">Federazione Ciclistica Italiana (FCI)</option>
                        <option value="">Federazione Italiana Cronometristi (FICr)</option>
                        <option value="">Federazione Ginnastica d'Italia (FGdI)</option>
                        <option value="">Federazione Italiana Golf (FIG)</option>
                        <option value="">Federazione Italiana Giuoco Handball (FIGH)</option>
                        <option value="">Federazione Italiana Giuoco Squash (FIGS)</option>
                        <option value="">Federazione Italiana Hockey (FIH)</option>
                        <option value="">Federazione Italiana Hockey e Pattinaggio (FIHP)</option>
                        <option value="">Federazione Medico Sportiva Italiana (FMSI)</option>
                        <option value="">Federazione Motociclistica Italiana (FMI)</option>
                        <option value="">Federazione Italiana Motonautica (FIM)</option>
                        <option value="">Federazione Italiana Nuoto (FIN)</option>
                        <option value="">Federazione Italiana Palcanestro (FIP)</option>
                        <option value="">Federazione Italiana Palvolo (FIPAV)</option>
                        <option value="">Federazione Italiana Pentathlon Moderno (FIPM)</option>
                        <option value="">Federazione Italiana Pesca Sportiva ed Attività Subacquee (FIPSAS)</option>
                        <option value="">Federazione Italiana Pesistica (FIPE)</option>
                        <option value="">Federazione Pugilistica Italiana (FPI)</option>
                        <option value="">Federazione Italiana Rugby (FIR)</option>
                        <option value="">Federazione Italiana Scherma (FIS)</option>
                        <option value="">Federazione Italiana Sci Nautico e Wakeboard (FISW)</option>
                        <option value="">Federazione Italiana Sport del Ghiaccio (FISG)</option>
                        <option value="">Federazione Italiana Sport Equestri (FISE)</option>
                        <option value="">Federazione Italiana Sport Invernali (FISI)</option>
                        <option value="">Federazione Italiana Taekwondo (FITA)</option>
                        <option value="">Federazione Italiana Tennis (FIT)</option>
                        <option value="">Federazione Italiana Tennistavolo (FITET)</option>
                        <option value="">L'Unione Italiana Tiro a Segno (UITS)</option>
                        <option value="">Federazione Italiana Tiro a Volo (FITAV)</option>
                        <option value="">Federazione Italiana Tiro con l'arco (FITARCO)</option>
                        <option value="">Federazione Italiana Triathlon (FITRI)</option>
                        <option value="">Federazione Italiana Vela (FIV)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Tesserato presso organismi sportivi non italiani (specificare sport ed ente)*</label>
                    <select class="form-control" name="" id="" required>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col-12 col-md-4">
                    <label for="">Sport*</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-12 col-md-4">
                    <label for="">Nome federazione o ente*</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-12 col-md-4">
                    <label for="">Nazione*</label>
                    <input type="text" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Tesserato ente promozione sportiva (selezionare solo se no federazione)*</label>
                    <select class="form-control" name="" id="" required>
                        <option value="">Acsi</option>
                        <option value="">Aics</option>
                        <option value="">Asc</option>
                        <option value="">Asi</option>
                        <option value="">Libertas </option>
                        <option value="">Csain</option>
                        <option value="">Csen</option>
                        <option value="">Csi</option>
                        <option value="">Cusi</option>
                        <option value="">Msp</option>
                        <option value="">Opes</option>
                        <option value="">Pgs</option>
                        <option value="">Uis</option>
                        <option value="">Usacli</option>
                        <option value="">Endas</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Tesserato ente promozione sportiva (selezionare solo se no federazione)*</label>
                    <select class="form-control" name="" id="" required>
                        <option value="">Federazione Arrampicata Sportiva Italiana (FASI)</option>
                        <option value="">Federazione Italiana Biliardo Sportivo (FIBiS)</option>
                        <option value="">Federazione Italiana Sport Bowling (FISB)</option>
                        <option value="">Federazione Italiana Gioco Bridge (FIGB)</option>
                        <option value="">Federazione Italiana Tiro Dinamico Sportivo (FITDS)</option>
                        <option value="">Federazione Cricket Italiana (FCrI)</option>
                        <option value="">Federazione Italiana Dama (FID)</option>
                        <option value="">Federazione Italiana Giochi e Sport Tradizionali (FIGEST)</option>
                        <option value="">Federazione Italiana Sport Orientamento (FISO)</option>
                        <option value="">Federazione Italiana Pal Tamburello (FIPT)</option>
                        <option value="">Federazione Italiana Palpugno (FIPAP)</option>
                        <option value="">Federazione Scacchistica Italiana (FSI)</option>
                        <option value="">Federazione Italiana Canottaggio Sedile Fisso (FICSF)</option>
                        <option value="">Federazione Italiana Wushu-Kung Fu (FIWuK)</option>
                        <option value="">Federazione Italiana Kickboxing Muay Thai Savate Shoot Boxe (FIKBMS)</option>
                        <option value="">Federazione Italiana Twirling (FITw)</option>
                        <option value="">Federazione Italiana Turismo Equestre Trec - Ante (FITETREC-ANTE)</option>
                        <option value="">Federazione Italiana Rafting (FIRaft)</option>
                        <option value="">Federazione Italiana di American Football (FIDAF)</option>
                    </select>
                </div>
            </div>
        </div>
        </div>

        <a href="index.php" class="btn btn-primary btn-block btn-lg mt-3">Inizia il corso</a>
    </div>
</section>
<script>
</script>
<?php include 'footer.php'; ?>
