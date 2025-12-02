import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: './',
    plugins: [
        laravel({
            input: ['resources/css/app2.css', 'resources/js/sidebarmenu.js', 'resources/js/dashboard.js','resources/css/app.css', 'resources/js/app.js', 'resources/js/scripts.js'],
            refresh: true,
        }),
    ],
});
