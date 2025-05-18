import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/filament/admin/theme.css',
        'resources/js/filament/widgets/grafik-indeks-aspek.js'
      ],
      refresh: [
        'app/Filament/**',
        'resources/views/filament/**'
      ]
    }),
    vue()
  ],
  optimizeDeps: {
    include: [
      'chart.js',
      'chartjs-plugin-datalabels'
    ]
  }
});