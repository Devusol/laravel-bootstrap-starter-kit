import './bootstrap';
import * as bootstrap from 'bootstrap';
import { initializeSidebar } from './components/sidebar';

window.bootstrap = bootstrap; // Makes Bootstrap JS available globally

document.addEventListener('DOMContentLoaded', function() {
    initializeSidebar();
});
