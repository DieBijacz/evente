import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/scss/main.scss',
        'resources/scss/event-page.scss',
        'resources/scss/home-page.scss',
        'resources/scss/carousel.scss',
        'resources/js/app.js'
      ],
      refresh: true,
    }),
  ],
});
