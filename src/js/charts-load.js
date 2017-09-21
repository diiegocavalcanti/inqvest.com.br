function loadCharts() {

    var Meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];


    var RadarChart = new Chart(document.getElementById("grafico-radar"), {
        type: 'radar',
        data: {
            labels: ['Banca 1', 'Banca 2', 'Banca 3', 'Banca 4', 'Banca 5', 'Banca 6', 'Banca 7'],
            datasets: [{
                label: 'Menos Acertos',
                data: [17, 8, 19, 13, 20, 29, 31],
                backgroundColor: 'rgba(153, 102, 255, 0.4)',
                borderColor: 'rgb(153, 102, 255)'

            }, {
                label: 'Sua Média',
                data: [48, 31, 45, 50, 70, 45, 20],
                backgroundColor: 'rgba(74, 191, 191, 0.4)',
                borderColor: 'rgb(74, 191, 191)'

            }, {
                label: 'Média Geral',
                data: [28, 21, 55, 60, 40, 35, 30],
                backgroundColor: 'rgba(53, 161, 234, 0.4)',
                borderColor: 'rgb(53, 161, 234)'

            }, {
                label: 'Mais Acertos',
                data: [88, 71, 95, 70, 80, 95, 60],
                backgroundColor: 'rgba(255, 204, 85, 0.4)',
                borderColor: 'rgb(255, 204, 85)'

            }]
        },
        options: {
            responsive: true
        }
    });

    window.myMixedChart = new Chart(document.getElementById("grafico-bar").getContext("2d"), {
        type: 'bar',
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"],
            datasets: [{
                type: 'line',
                label: 'Resultados',
                borderColor: '#3399DD',
                borderWidth: 1,
                fill: false,
                data: [10, 13, 4, 7, 9, 14]
            }, {
                type: 'bar',
                label: 'Sua média',
                backgroundColor: '#FF6384',
                data: [10, 13, 4, 7, 9, 14],
                borderColor: 'white',
                borderWidth: 2
            }, {
                type: 'bar',
                label: 'Média Alunos',
                backgroundColor: '#4BC0C0',
                data: [10, 13, 4, 7, 9, 14]
            }]

        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: ''
            },
            tooltips: {
                mode: 'index',
                intersect: true
            }
        }
    });



    window.myLine = new Chart(document.getElementById("grafico-line").getContext("2d"), {
        type: 'line',
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
            datasets: [{
                label: "Sua Média",
                backgroundColor: '#FF6384',
                borderColor: '#FF6384',
                data: [10, 2, 34, 56, 12, 9],
                fill: false,
            }, {
                label: "Média Geral",
                fill: false,
                backgroundColor: '#35A2EB',
                borderColor: '#35A2EB',
                data: [30, 22, 4, 6, 22, 19],
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Chart.js Line Chart'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Mês'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            }
        }
    });


    window.grafico_line_2 = new Chart(document.getElementById("grafico-line2").getContext("2d"), {
        type: 'line',
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
            datasets: [{
                label: "Sua Média",
                data: [30, 23, 50, NaN, 19, 32, 10, 30],
                borderColor: '#FF6384',
                backgroundColor: 'rgba(0, 0, 0, 0)',
                fill: false,
                cubicInterpolationMode: 'monotone'
            }, {
                label: "Média Geral",
                data: [10, 43, 60, NaN, 29, 12, 10, 30],
                borderColor: '#36A2EB',
                backgroundColor: 'rgba(0, 0, 0, 0)',
                fill: false,
            }]
        },
        options: {
            responsive: true,
            title: {
                display: false
            },
            tooltips: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    },
                    ticks: {
                        suggestedMin: -10,
                        suggestedMax: 200,
                    }
                }]
            }
        }
    });




    window.posicao_geral = new Chart(document.getElementById("posicao-geral").getContext("2d"), {
        type: 'line',
        data: {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgb(255, 61, 103)',
                borderColor: 'rgb(255, 61, 103)',
                data: [10, 23, 5, 99, 67, 43, 0],
                fill: false,
                pointRadius: 10,
                pointHoverRadius: 15,
                showLine: false // no line shown
            }]
        },
        options: {
            responsive: true,
            title: {
                display: false
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    pointStyle: 'circle'
                }
            }
        }
    });





    window.acerto_banca = new Chart(document.getElementById("acerto-banca").getContext("2d"), {
        type: 'radar',
        data: {
            labels: ['Banca 1', 'Banca 2', 'Banca 3', 'Banca 4', 'Banca 5', 'Banca 6', 'Banca 7', 'Banca 8'],
            datasets: [{
                backgroundColor: 'rgba(74, 191, 191, 0.5)',
                borderColor: 'rgb(74, 191, 191)',
                data: [30, 20, 30, 24, 39, 25, 40, 20],
                label: 'Menos Acertos'
            }, {
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgb(255, 99, 132)',
                data: [70, 65, 60, 73, 61, 80, 65, 74],
                label: 'Você'
            }, {
                backgroundColor: 'rgba(255, 183, 111, 0.5)',
                borderColor: 'rgb(255, 183, 111)',
                data: [68, 79, 68, 77, 50, 49, 66, 70],
                label: 'Média Geral'
            }, {
                backgroundColor: 'rgba(255, 205, 86, 0.5)',
                borderColor: 'rgb(255, 205, 86)',
                data: [88, 88, 72, 96, 81, 75, 70, 82],
                label: 'Mais Acertos',
                fill: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            spanGaps: false,
            elements: {
                line: {
                    tension: 0.000001
                }
            },
            plugins: {
                filler: {
                    propagate: false
                },
                samples_filler_analyser: {
                    target: 'chart-analyser'
                }
            }
        }
    });



    window.acertos_questao = new Chart(document.getElementById("acertos-questao").getContext("2d"), {
        type: 'horizontalBar',
        data: {
            labels: ["Português", "Matemática", "Química", "Lógica", "Informática"],
            datasets: [{
                label: "Sua Média",
                backgroundColor: '#FF6384',
                borderColor: '#FF6384',
                data: [10, 2, 34, 56, 12, 9],
                fill: false,
            }, {
                label: "Média Geral",
                fill: false,
                backgroundColor: '#35A2EB',
                borderColor: '#35A2EB',
                data: [30, 22, 4, 6, 22, 19],
            }]
        },
        options: {
            responsive: true,
            title: {
                display: false
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: '%'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Disciplina'
                    }
                }]
            }
        }
    });

}

$(document).ready(function() {
    loadCharts();
});