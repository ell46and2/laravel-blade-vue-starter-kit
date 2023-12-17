import './bootstrap';
import { createApp } from 'vue';
import IncrementCounter from '@/components/IncrementCounter.vue';

const app = createApp({});

app.component('IncrementCounter', IncrementCounter);

app.mount('#app');
