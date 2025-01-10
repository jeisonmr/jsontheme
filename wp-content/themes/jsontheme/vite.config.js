import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: './src', // Carpeta donde estarán tus archivos fuente.
  build: {
    outDir: '../dist', // Carpeta donde se generarán los archivos para producción.
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, './assets/js/main.js'), // Tu archivo principal JS.
        style: path.resolve(__dirname, './assets/css/style.css'), // Tu archivo principal CSS.
      },
    },
  },
  server: {
    watch: {
      usePolling: true, // Necesario para entornos como Local.
    },
    proxy: {
      '/wp-content': 'http://localhost:10001', // Ajusta el puerto al de tu sitio en Local.
    },
  },
});
