import { defineConfig } from 'vite';
import autoprefixer from 'autoprefixer';

export default defineConfig({
  // public/ содержит PHP-страницы, а не статику Vite
  base: './',
  publicDir: false,
  css: {
    postcss: {
      plugins: [autoprefixer({ overrideBrowserslist: ['last 2 version'] })],
    },
    preprocessorOptions: {
      scss: { api: 'modern-compiler' },
    },
  },
  build: {
    // собранные стили кладём туда, где их ждут PHP-страницы и index.html
    outDir: 'public',
    emptyOutDir: false,
    cssMinify: true,
    rollupOptions: {
      input: {
        styles: 'src/styles.scss',
        'for-example-page': 'public/example/for-example-page.scss',
      },
      output: {
        entryFileNames: '.vite-[name].js',
        assetFileNames: '[name][extname]',
      },
    },
  },
});
