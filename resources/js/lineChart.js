import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);

document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('lineChart')?.getContext('2d');
    if (!ctx) return;

    const data = {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'],
        datasets: [{
            label: 'Vendas',
            data: [10, 20, 15, 25],
            fill: false,
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.5)',
            tension: 0.4
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'Gráfico de Vendas Mensais' }
            },
            scales: { y: { beginAtZero: true } }
        }
    };

    const myLineChart = new Chart(ctx, config);

    // Exemplo de atualização de dados depois de 3s
    setTimeout(() => {
        myLineChart.data.datasets[0].data = [5, 15, 10, 20];
        myLineChart.update();
    }, 3000);
});
