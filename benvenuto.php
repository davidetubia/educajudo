
@{
    ViewBag.Title = "Benvenuto";
    Layout = "~/Views/Shared/_Layout.cshtml";
    string lingua = HttpContext.Current.Request.RequestContext.RouteData.Values["lingua"].ToString().ToLower();
}

<div id="checkout" class="d-flex align-items-center">
    <div class="container">
        <h1>
            Diventa ora<br>
            un esperto nella<br>
            didattica infantile
        </h1>
    </div>
</div>
<div>
    <p>Hai effettuato il pagamento tramite il sito web Fijlkam?</p>
    <p>Inserisci il tuo codice fiscale e la tua email.</p>
    <p>Riceverai via email la password per l'accesso.<br />
    Queste credenziali non vanno confuse con quelle relative all'area riservata del sito della Fijlkam.</p>
</div>
<form action="/@lingua/benvenuto/" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Codice Fiscale</label>
        <input type="text" class="form-control" required aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">email</label>
        <input type="email" class="form-control" required>
    </div>
   
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">
            Dichiaro di aver letto e di aver accettato la
            <a href="/@CUser.Lingua/home/privacy" target="_blank">Privacy policy</a>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Richiedi la password per l'accesso</button>
</form>

<div>
    Errore:<br />
    Non abbiamo trovato sul portale Fijlkam un utente con questo codice fiscale abilitato all'accesso.
    Vai sul sito Fijlkam e completa il processo di acquisto.
</div>