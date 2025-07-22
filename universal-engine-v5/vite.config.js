import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    assetsDir: '',
    rollupOptions: {
      input: {
        app: './assets/js/app.js',
        main: './assets/scss/main.scss',
      },
      output: {
        entryFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
  },
});