import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            textColor:{
                textSideNav: "rgb(107,42,58)",
                textNaranja: "rgb(255, 114, 0)", // Ejemplo de color RGBA
                textHeader: "rgb(27,57,106)", 
                textLogo: "rgb(255, 183, 27)",
                textnuevo: "rgb(176,147,94)", // Ejemplo de color RGBA
                textDorado: "rgb(212,175, 55)",
                textGrisOscuro: "rgb(78,78, 78)",
                textGrispalido: "rgb(245,241,241)",
              },
        },
    },

    plugins: [forms],
};
