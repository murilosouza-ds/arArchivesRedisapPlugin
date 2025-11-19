const root = document.documentElement;
const toggle = document.getElementById('theme-toggle');
const storageKey = 'site-theme'; // 'light' | 'dark' | 'auto'

// aplica uma preferência (light/dark)
function applyTheme(theme) {
  if (theme === 'dark') {
    root.setAttribute('data-bs-theme', 'dark');
  } else if (theme === 'light') {
    root.setAttribute('data-bs-theme', 'light');
  } else { // 'auto' -> remove atributo e deixa o browser decidir via prefers-color-scheme
    root.removeAttribute('data-bs-theme');
  }
}

// carregar preferência ao iniciar
const saved = localStorage.getItem(storageKey) || 'auto';
applyTheme(saved);

// alternating manualmente ao clicar (exemplo simples light <-> dark)
toggle.addEventListener('click', () => {
  const current = localStorage.getItem(storageKey) || 'auto';
  const next = current === 'dark' ? 'light' : 'dark';
  localStorage.setItem(storageKey, next);
  applyTheme(next);
});