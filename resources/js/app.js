import './bootstrap';
import { createApp } from 'vue';
import PortfolioComponent from './components/PortfolioComponent.vue';

const app = createApp({});
app.component('portfolio-component', PortfolioComponent);
app.mount('#app');