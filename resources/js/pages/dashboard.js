// Mengganti teks sapaan sesuai jam di perangkat pengguna
document.addEventListener('DOMContentLoaded', () => {
    const greetingElement = document.getElementById('greeting');
    if (!greetingElement) return;

    const hour = new Date().getHours();
    let greeting = 'Good night';

    if (hour < 11) {
        greeting = 'Good morning';
    } else if (hour < 15) {
        greeting = 'Good afternoon';
    } else if (hour < 19) {
        greeting = 'Good evening';
    }

    greetingElement.textContent = greeting;
});
