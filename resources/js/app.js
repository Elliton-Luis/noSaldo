import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

const files = import.meta.glob('./Components/**/*.vue', {eager: true});

Object.entries(files).forEach(([path, definition]) => {
    const name = path.split('/').pop().replace(/\.\w+$/,'');

    app.component(name, definition.default);
});

app.mount('#app');
