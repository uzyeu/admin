import Chart from 'chart.js/auto';
import ChartDataLabels from 'chartjs-plugin-datalabels';

Chart.register(ChartDataLabels);

window.renderFilamentChart = function(elementId, data, options) {
    return new Chart(
        document.getElementById(elementId),
        {
            type: data.type,
            data: data.data,
            options: options
        }
    );
};