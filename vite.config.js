import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/css/auth.css', 
                'resources/js/auth.js',

                'resources/css/layout.css',
                'resources/js/layout.js',

                'resources/css/pages/dashboard.css',
                'resources/js/pages/dashboard.js',
                'resources/css/pages/transactions.css',
                'resources/js/pages/transactions.js',
                'resources/css/pages/skills.css',
                'resources/js/pages/skills.js',
                'resources/css/pages/borrowing.css',
                'resources/js/pages/borrowing.js',
                'resources/css/pages/profile.css',
                'resources/js/pages/profile.js',
            ],
            refresh: [`resources/views/**/*`],
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});