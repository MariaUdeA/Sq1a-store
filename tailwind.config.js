import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                roboto: ['"Roboto"', "sans-serif"],
                jost: ['"Jost"', "sans-serif"],
                poppins: ['"Poppins"', "sans-serif"],
                volkhov: ['"Volkhov"', "sans-serif"],
                // Add more custom font families as needed
            },
            colors: {
                black: '#191919',
                primary: '#ED1C24'
            },
            screens: {
                'xs': '375px'
            },
            keyframes: {
                "full-tl": {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                "full-tr": {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(100%)" },
                },
            },
            animation: {
                "full-tl": "full-tl 25s linear infinite",
                "full-tr": "full-tr 25s linear infinite",
            },
        },
    },

    plugins: [forms],
};
