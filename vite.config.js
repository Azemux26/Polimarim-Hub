import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

// import { viteStaticCopy } from 'vite-plugin-static-copy';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/main.css', 'resources/css/custom.css',  
                'resources/sass/main.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        viteStaticCopy({
            targets: [
                {
                    // Mengambil file sprite asli dari node_modules
                    src: 'node_modules/bootstrap-icons/bootstrap-icons.svg',
                    // Disimpan ke public/assets/bootstrap-icons.svg
                    dest: 'assets'
                }
            ]
        })
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
