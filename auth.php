<section id="home" style="height:60vh; min-height:800px; background-image: url('/assetsimages/bg-primary.jpeg');" class="d-flex flex-column justify-content-center">
    <div class="container">
        <h1>Accedi</h1>
    </div>
</section>

<div class="container py-5">
    <main class="form-signin" style="max-width:600px; margin: 0 auto; text-align:center">
    </main>
</div>

<div style="background-color:green;padding:5px">
    Ti abbiamo inviato via email la password per l'accesso.<br />
    Se non l'hai ricevuta controlla nello spam.
</div>

<form id="login">

    <input type="email" name="email" class="form-control" placeholder="email" required autofocus>

    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <div class="alert alert-warning  mt-3" role="alert" id="errore" style="display:none">
        I dati inseriti non sono corretti.
    </div>
    <button class="w-50 btn btn-lg btn-primary mt-2" type="submit">Entra</button>
</form>

<script>
    var request;
    $("#login").submit(function (event) {

        event.preventDefault();
        if (request) { request.abort(); }
        var $form = $(this);
        var $inputs = $form.find("input, select");
        var serializedData = $form.serialize();
        $inputs.prop("disabled", true);

        request = $.ajax({
            url: "/@lingua/auth/",
            type: "post",
            data: serializedData
        });

        request.done(function (response, textStatus, jqXHR) {
            window.location = "/myarea/";
        });

        request.fail(function (jqXHR, textStatus, errorThrown) {
            $("#errore").show();
        });

        request.always(function () {
            $inputs.prop("disabled", false);
        });

    });
</script>
