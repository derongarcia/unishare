document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('[data-sidebar-toggle]')?.addEventListener('click', () => {
        document.body.classList.toggle('sidebar-open');
    });

    document.querySelectorAll('[data-sidebar-close]').forEach((element) => {
        element.addEventListener('click', () => {
            document.body.classList.remove('sidebar-open');
        });
    });
});
