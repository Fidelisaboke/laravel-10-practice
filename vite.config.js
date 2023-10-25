import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS files
                'resources/css/app.css', 
                'resources/css/welcome.css',
                
                // JavaScript files
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
