import 'chart.js/auto';
import ChartDataLabels from 'chartjs-plugin-datalabels';
Chart.register(ChartDataLabels);
// Registrasi global plugin
window.ChartJS = {
  Chart: window.Chart,
  plugins: {
    datalabels: ChartDataLabels
  }
};

// Inisialisasi untuk Filament
window.filamentChartJsPlugins = window.filamentChartJsPlugins || [];
window.filamentChartJsPlugins.push(ChartDataLabels);