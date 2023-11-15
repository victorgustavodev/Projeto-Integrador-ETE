function toggleTheme() {
    const body = document.body;
    const themeToggle = document.getElementById("themeToggle");

    // Alterna entre as classes de tema
    body.classList.toggle("dark-theme", themeToggle.checked);
    body.classList.toggle("light-theme", !themeToggle.checked);

    // Salva o tema atual no armazenamento local (opcional)
    localStorage.setItem("isDarkTheme", themeToggle.checked.toString());
}

// Aplica o tema salvo no carregamento da página (opcional)
document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("themeToggle");
    const isDarkTheme = localStorage.getItem("isDarkTheme") === "true";
    themeToggle.checked = isDarkTheme;
    toggleTheme(); // Para aplicar o tema inicial
});
