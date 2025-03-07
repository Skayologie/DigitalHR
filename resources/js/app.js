import './bootstrap';

import Alpine from 'alpinejs';
import {document} from "postcss";

window.Alpine = Alpine;

Alpine.start();


// Toggle sidebar
document.getElementById('toggle-sidebar').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar.classList.contains('w-64')) {
        sidebar.classList.replace('w-64', 'w-20');
        // Hide text in sidebar links
        document.querySelectorAll('.sidebar-link span, .sidebar-link + span, #sidebar div').forEach(el => {
            el.classList.add('hidden');
        });
    } else {
        sidebar.classList.replace('w-20', 'w-64');
        // Show text in sidebar links
        document.querySelectorAll('.sidebar-link span, .sidebar-link + span, #sidebar div').forEach(el => {
            el.classList.remove('hidden');
        });
    }
});

// Toggle user dropdown
document.getElementById('user-menu-button').addEventListener('click', function() {
    const dropdown = document.getElementById('user-dropdown');
    dropdown.classList.toggle('hidden');
});

// Handle mobile sidebar toggle
document.getElementById('mobile-toggle').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
});

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('user-dropdown');
    const userMenu = document.getElementById('user-menu-button');

    if (!userMenu.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});


