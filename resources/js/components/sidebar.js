export function initializeSidebar() {
    // Handle submenu toggles
    const hasArrowItems = document.querySelectorAll('.has-arrow');
    hasArrowItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            this.parentElement.classList.toggle('active');
        });
    });

    // Set active menu item based on current route
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('.sidebar-nav a');
    menuItems.forEach(item => {
        if (item.getAttribute('href') === currentPath) {
            item.classList.add('active');
            // Expand parent menu if exists
            const parent = item.closest('ul');
            if (parent) {
                parent.style.display = 'block';
                const parentItem = parent.previousElementSibling;
                if (parentItem && parentItem.classList.contains('has-arrow')) {
                    parentItem.parentElement.classList.add('active');
                }
            }
        }
    });
} 