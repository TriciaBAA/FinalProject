import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'
import path from 'path';

export default defineConfig({
    resolve: {
        alias: {
          '@': path.resolve(__dirname, 'resources/js'),
        },
      },
    plugins: [
        tailwindcss(),
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
