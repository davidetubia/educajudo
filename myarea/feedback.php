
@{
    ViewBag.Title = "feedback";
    Layout = "~/Views/Shared/_LayoutMyArea.cshtml";
}

    <form class="rating">

<div class="container mt-100">
    <h1>VALUTA LA TUA ESPERIENZA DI FORMAZIONE</h1>

<style>
    h3 small{
        font-weight: normal;
        font-size: 14px;
        clear: both;
    }
</style>
<div class="card">
    <div class="card-header">Valutazione</div>
    <div class="card-body p-3">
    <div class="pb-3">
        <h3>Piattaforma <small>(qualità video/grafica, semplicità di utilizzo)</small></h3>
        <p></p>
        <div class="row">
            <div class="col"><input type="radio" name="" id=""><br>Scarso</div>
            <div class="col"><input type="radio" name="" id=""><br>Insufficiente</div>
            <div class="col"><input type="radio" name="" id=""><br>Sufficiente</div>
            <div class="col"><input type="radio" name="" id=""><br>Buono</div>
            <div class="col"><input type="radio" name="" id=""><br>Ottimo</div>
        </div>
    </div>

    <div class="pb-3">
    <h3>Strumenti per l'apprendimento <small>(slide con video/commento dei relatori, test di sbarramento, parte teorica/metodologica/applicativa, video pratici)</small></h3>
    <div class="row">
        <div class="col"><input type="radio" name="" id=""><br>Scarso</div>
        <div class="col"><input type="radio" name="" id=""><br>Insufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Sufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Buono</div>
        <div class="col"><input type="radio" name="" id=""><br>Ottimo</div>
    </div>
    </div>

    <div class="pb-3">
    <h3>Argomenti trattati <small>(risposta all’esigenza, sviluppo competenze, proiezioni professionali)</small></h3></h3>
    <div class="row">
        <div class="col"><input type="radio" name="" id=""><br>Scarso</div>
        <div class="col"><input type="radio" name="" id=""><br>Insufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Sufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Buono</div>
        <div class="col"><input type="radio" name="" id=""><br>Ottimo</div>
    </div>
    </div>

    <div class="pb-3">
    <h3>Relatori <small>(preparazione, chiarezza, linguaggio, doti comunicative):</small></h3>
    <div class="row">
        <div class="col"><input type="radio" name="" id=""><br>Scarso</div>
        <div class="col"><input type="radio" name="" id=""><br>Insufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Sufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Buono</div>
        <div class="col"><input type="radio" name="" id=""><br>Ottimo</div>
    </div>
    </div>

    <div class="pb-3">
    <h3>Servizi di tutoraggio/assistenza <small>(faq, chiarezza, info-grafica e tutorial per utilizzo piattaforma, etc.)</small></h3>
    <div class="row">
        <div class="col"><input type="radio" name="" id=""><br>Scarso</div>
        <div class="col"><input type="radio" name="" id=""><br>Insufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Sufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Buono</div>
        <div class="col"><input type="radio" name="" id=""><br>Ottimo</div>
    </div>
    </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">Suggerimenti</div>
    <div class="card-body p-3">
<h3>Nell’ottica del miglioramento della formazione, cosa potremmo migliorare?</h3>
<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Scrivi qui i tuoi suggerimenti..."></textarea>
    </div>
</div>

<div class="card mt-3 mb-3">
    <div class="card-header">In definitiva</div>
    <div class="card-body p-3 ">
<h3>Sulla base dei voti che hai espresso, valuta complessivamente la tua esperienza di formazione:</h3>
    <div class="row">
        <div class="col"><input type="radio" name="" id=""><br>Scarso</div>
        <div class="col"><input type="radio" name="" id=""><br>Insufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Sufficiente</div>
        <div class="col"><input type="radio" name="" id=""><br>Buono</div>
        <div class="col"><input type="radio" name="" id=""><br>Ottimo</div>
    </div>
</div>
</div>
</div>
<div class="text-center">
<a href="" class="btn btn-primary mb-3">Invia la tua votazione</a>

</div>

</form>


<script>
    document.getElementByClassName("disclaimer").style.width = "100%";
</script>