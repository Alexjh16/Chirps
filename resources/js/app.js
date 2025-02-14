import './bootstrap';

import Alpine from 'alpinejs';
// Importa el plugin @alpinejs/focus
import focus from '@alpinejs/focus';
// Registra el plugin en Alpine.js
Alpine.plugin(focus);
window.Alpine = Alpine;

Alpine.start();
