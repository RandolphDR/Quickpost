function setupThemeToggle() {
    if (window.__themeToggleInitialized) return;
    window.__themeToggleInitialized = true;

    function applyTheme() {
        const theme = localStorage.getItem("color-theme");
        if (theme === "dark") {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    }

    function setupIcons() {
        const DarkIcon = document.getElementById("theme-toggle-dark-icon");
        const LightIcon = document.getElementById("theme-toggle-light-icon");

        if (!DarkIcon || !LightIcon) return;

        DarkIcon.classList.add("hidden");
        LightIcon.classList.add("hidden");

        if (localStorage.getItem("color-theme") === "dark") {
            LightIcon.classList.remove("hidden");
        } else {
            DarkIcon.classList.remove("hidden");
        }
    }

    function setupThemeButtonListener() {
        const ThemeButton = document.getElementById("theme-toggle");
        const DarkIcon = document.getElementById("theme-toggle-dark-icon");
        const LightIcon = document.getElementById("theme-toggle-light-icon");

        if (!ThemeButton || !DarkIcon || !LightIcon) return;

        ThemeButton.removeEventListener("click", handleThemeToggle);
        ThemeButton.addEventListener("click", handleThemeToggle);
    }

    function handleThemeToggle() {
        const currentTheme = localStorage.getItem("color-theme");

        if (currentTheme === "dark") {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }

        setupIcons();
    }

    function initialize() {
        applyTheme();
        setupIcons();
        setupThemeButtonListener();
    }

    window.addEventListener("DOMContentLoaded", initialize);
    document.addEventListener("livewire:navigated", initialize);
}

setupThemeToggle();
