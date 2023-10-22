<?php include 'header.php'; 
$header = 1;
$corso = 1;
?>

<script>
    $(document).ready(function(){
        $('aside').hide();
        $('article').css('width', '100%');
        $('.disclaimer').css('width', '100%');
    });
</script>
<div class="video-container">
    <video autoplay muted loop>
        <source src="../assets/img/confetti.mp4" type="video/mp4" />
    </video>
    <div class="caption">
      <h2>Complimenti!<br>Hai completato il percorso di studi online</h2>
      <h3>La tua formazione proseguirà con una full immersion in presenza.<br>
      Completa ora il questionario che segue ed invia la tua valutazione.<br>
      Riceverai successivamente una comunicazione con i dettagli dello svoglimento della parte pratica.</h3>
      <a href="sondaggio.php" class="btn btn-primary">Completa il questionario</a>
    </div>
</div>

<?php include '../footer.php'; ?>
<?php include 'footer.php'; ?>
</div>

