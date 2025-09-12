import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/welcome.js',
            ],
            refresh: true,
        }),
        vue(),
        tailwindcss(),
    ],
    resolve:{
        alias:{
            vue: 'vue/dist/vue.esm-bundler.js'
        }
    }
});
