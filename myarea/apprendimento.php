<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="mb-3">
        <h2>Il mio percorso di studi</h2>
        <a href="esegui.php" class="btn btn-primary">Riprendi gli studi</a>
    </div>

    <div class="row">
    <div class="col-12 col-md-6 h-100 mb-3 mb-md-0">
        <div class="chart">
            <h5>Le tue ore di studio</h5>
            <canvas id="lezioniCompletate"></canvas>
        </div>
    </div>

    <div class="col-12 col-md-6 h-100">   
        <div class="row h-100">
            <div class="col-12 col-md-6 h-100 mb-3 mb-md-0">
                <div class="chart">
                    <h5>Stato avanzamento</h5>
                    <canvas id="statoAvanzamento"></canvas>
                </div>
            </div>
            <div class="col-12 col-md-6 h-100 mb-3 mb-md-0">
                <div class="chart">
                    <h5>Minuti di video visti</h5>
                    <canvas id="statoAvanzamento2"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="row mt-4 mb-5">
        <div class="col-12 col-md-5 mb-3 mb-md-0">
            <div class="chart">
                <h5>Competenze acquisite</h5>
                <canvas id="polar"></canvas>
            </div>
        </div>
        <div class="col-12 col-md-7 mb-3 mb-md-0">
            <div class="chart">
                <h5>Esito dei test</h5>
                <canvas id="bar"></canvas>-
            </div>
        </div>
    </div>

</div>




<script>
    const labels = [
        'Gennaio',
        'Febbraio',
        'Marzo',
        'Aprile',
        'Maggio',
        'Giugno',
        'Luglio',
        'Agosto',
        'Settembre',
        'Ottobre',
        'Novembre',
        'Dicembre'
    ];

    const data = {
        labels: labels,
        datasets: [{
        label: 'Ore di studio',
        backgroundColor: '#8cc547',
        borderColor: '#8cc547',
        data: [0, 10, 5, 2, 8, 15, 22, 16, 14, 18, 21, 28],
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {}
    };

    const lezioniCompletate = new Chart(
        document.getElementById('lezioniCompletate'),
        config
    );
</script>

<script>
    const avanzamento = {
    labels: [
        'Lezioni fatte',
        'Totali',
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [25, 70],
        backgroundColor: [
        '#8cc547',
        'rgb(200,200,200)',
        ],
        hoverOffset: 4
    }]
    };

    const statoAv = {
        type: 'doughnut',
        data: avanzamento
    };

    const statoAvanzamento = new Chart(
        document.getElementById('statoAvanzamento'),
        statoAv
    );
</script>

<script>
    const avanzamento2 = {
    labels: [
        'Minuti visti',
        'Minuti totali',
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [10, 190],
        backgroundColor: [
        '#8cc547',
        'rgb(200,200,200)',
        ],
        hoverOffset: 4
    }]
    };

    const statoAv2 = {
        type: 'pie',
        data: avanzamento2
    };

    const statoAvanzamento2 = new Chart(
        document.getElementById('statoAvanzamento2'),
        statoAv2
    );
</script>


<script>
const dataPolar = {
    labels: [
        'Area motorio-prassica',
        'Area cognitiva',
        'Area neuropsicologica',
        'Comunicazione e linguaggio',
        'Affettivo-relazionale',
    ],
    datasets: [{
        label: 'Competenze acquisite',
        data: [180, 180, 141, 127, 121],
        fill: true,
        backgroundColor: 'rgb(140, 197, 71, 0.2)',
        borderColor: '#8cc547',
        pointBackgroundColor: '#8cc547',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: '#8cc547'
    }]
    };

    const configPolar = {
    type: 'radar',
    data: dataPolar,
    options: {
        elements: {
        line: {
            borderWidth: 3
        }
        }
    },
    };

    const polarChart = new Chart(
        document.getElementById('polar'),
        configPolar
    );
</script>

<script>
const dataBar = {
    labels: [
        'Sezione 1',
        'Sezione 2',
        'Sezione 3',
        'Sezione 4',
    ],
    datasets: [{
        label: 'Le tue risposte',
        data: [75, 59, 90, 81],
        fill: true,
        backgroundColor: 'rgb(140, 197, 71, 0.2)',
        borderColor: '#8cc547',
        pointBackgroundColor: '#8cc547',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: '#8cc547'
    }]
    };

    const configBar = {
    type: 'bar',
    data: dataBar,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    };

    const barChart = new Chart(
        document.getElementById('bar'),
        configBar
    );
</script>

<?php include 'footer.php'; ?>