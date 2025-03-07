import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const html = document.documentElement;
const isDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
const themeMenu = document.getElementById("theme-menu");
const themeOption = document.querySelectorAll("[data-theme-option]");
if (themeMenu) {
    const icons = {
        light: document.getElementById("light-icon"),
        dark: document.getElementById("dark-icon"),
        system: document.getElementById("system-icon"),
    };

    let currentTheme = localStorage.getItem("theme") || "system";

    const updateThemeUI = (theme) => {
        // hide all icons
        Object.entries(icons).forEach(([key, icon]) =>
            key === theme
                ? icon.classList.remove("hidden")
                : icon.classList.add("hidden")
        );

        // hide theme menu
        themeMenu.classList.add("hidden");
        localStorage.setItem("theme", theme);
    };

    const updateTheme = (theme) => {
        if (theme === "dark" || (theme === "system" && isDarkMode.matches)) {
            html.classList.add("dark");
        } else if (
            theme === "light" ||
            (theme === "system" && !isDarkMode.matches)
        ) {
            html.classList.remove("dark");
        }
        currentTheme = theme;
    };

    updateTheme(currentTheme);
    updateThemeUI(currentTheme);

    isDarkMode.addEventListener("change", ({ matches }) => {
        if (currentTheme === "system") {
            matches
                ? html.classList.add("dark")
                : html.classList.remove("dark");
        }
    });

    themeOption.forEach((option) => {
        option.addEventListener("click", () => {
            const theme = option.dataset.themeOption;

            updateThemeUI(theme);
            updateTheme(theme);
        });
    });

    document
        .getElementById("toggle-theme-menu")
        .addEventListener("click", () => themeMenu.classList.toggle("hidden"));

    const toggleMobileMenu = document.getElementById("toggle-mobile-menu");

    toggleMobileMenu.addEventListener("click", () => {
        document.getElementById("mobile-menu").classList.toggle("hidden");
        document.getElementById("open-menu-icon").classList.toggle("hidden");
        document.getElementById("close-menu-icon").classList.toggle("hidden");
    });
}
