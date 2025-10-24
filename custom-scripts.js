document.addEventListener("DOMContentLoaded", () => {
    const darkModeIcon = document.getElementById("darkModeIcon");

    // Função para aplicar o modo
    const applyMode = (mode) => {
      if (mode === "light") {
        document.body.classList.remove("dark-mode");
        darkModeIcon.className = "fas fa-2x fa-fw bi bi-brightness-high-fill px-0 px-lg-2 py-2";
        localStorage.setItem("dark-mode", "false");
      } else if (mode === "dark") {
        document.body.classList.add("dark-mode");
        darkModeIcon.className = "fas fa-2x fa-fw bi bi-moon-stars-fill px-0 px-lg-2 py-2";
        localStorage.setItem("dark-mode", "true");
      } else if (mode === "system") {
        // Reseta para o sistema (aqui, removemos o estado salvo)
        const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        document.body.classList.toggle("dark-mode", prefersDark);
        // darkModeIcon.className = prefersDark ? "fas fa-2x fa-fw bi bi-moon-stars-fill px-0 px-lg-2 py-2" : "fas fa-2x fa-fw bi bi-brightness-high-fill px-0 px-lg-2 py-2";
        darkModeIcon.className = "fas fa-2x fa-fw bi bi-circle-half px-0 px-lg-2 py-2";
        localStorage.removeItem("dark-mode");
      }
    };

    // Aplica o modo salvo no LocalStorage
    const isDarkMode = localStorage.getItem("dark-mode");
    if (isDarkMode === "true") {
      applyMode("dark");
    } else if (isDarkMode === "false") {
      applyMode("light");
    } else {
      applyMode("system");
    }

    // Adiciona evento aos itens do dropdown
    document.querySelectorAll(".dropdown-item").forEach((item) => {
      item.addEventListener("click", (event) => {
        // event.preventDefault();
        const mode = event.currentTarget.getAttribute("data-mode");
        applyMode(mode);
      });
    });
  });
  
  