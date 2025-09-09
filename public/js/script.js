// Effet fade-out pour les messages flash
document.addEventListener("DOMContentLoaded", () => {
    const alert = document.querySelector(".alert");
    if (alert) {
        setTimeout(() => {
            alert.classList.add("fade");
            setTimeout(() => alert.remove(), 500);
        }, 3000);
    }
});
