import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            publicDirectory: '../backend/public',
            buildDirectory: 'build',
            hotFile: '../backend/public/hot',
        }),
    ],
    build: {
        outDir: '../backend/public/build',
        emptyOutDir: false,
    },
});
