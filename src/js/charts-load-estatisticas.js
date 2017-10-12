function loadChartsEstatisticas() {

        var estatistica = document.getElementById("grafico-estatistica").getContext("2d");
        window.myPie = new Chart(estatistica, {
        type: 'pie',
        data: {
            labels: ['Pessoas Erraram','Pessoas Acertaram'],
            datasets: [{
                data: [35, 65],
                backgroundColor: ['rgb(226, 6, 19)', 'rgb(57, 169, 53)'],
                label: 'Dataset 1'
            }]

        },
        options: {
            responsive: true,
            legend: {
                display: false
            }

        }
    });

}

$(document).ready(function() {
    loadChartsEstatisticas();
});
