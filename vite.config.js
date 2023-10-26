import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS files

                //Root
                'resources/css/app.css', 
                'resources/css/welcome.css',
                'resources/css/overview.css',
                'resources/css/home.css',
                'resources/css/sign_in.css',
                'resources/css/register.css',

                //*/universals
                'resources/css/universals/footer.css',
                
                // JavaScript files
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
