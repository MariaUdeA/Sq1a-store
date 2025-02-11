import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
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
                primary: '#ED1C24',
                offWhite: '#FAFAFA',
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
            content: {
                'arrowDownIcon': 'url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'none\' viewBox=\'0 0 24 24\' stroke-width=\'1.5\' stroke=\'currentColor\' class=\'size-6\'%3E%3Cpath stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'m19.5 8.25-7.5 7.5-7.5-7.5\' /%3E%3C/svg%3E%0A")',
                'arrowUpIcon': 'url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'none\' viewBox=\'0 0 24 24\' stroke-width=\'1.5\' stroke=\'currentColor\' class=\'size-6\'%3E%3Cpath stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'m4.5 15.75 7.5-7.5 7.5 7.5\' /%3E%3C/svg%3E%0A")',
            }
        },
    },

    plugins: [forms({
        strategy: 'class',
    }),
    ]
};
