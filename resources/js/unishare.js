// Buka/tutup sidebar di layar kecil (HP/tablet)
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('[data-sidebar-toggle]');
    const closeElements = document.querySelectorAll('[data-sidebar-close]');

    toggleButton?.addEventListener('click', () => {
        document.body.classList.toggle('sidebar-open');
    });

    closeElements.forEach((element) => {
        element.addEventListener('click', () => {
            document.body.classList.remove('sidebar-open');
        });
    });
});
