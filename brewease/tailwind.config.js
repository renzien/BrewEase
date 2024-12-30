import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'Lexend': ['Lexend', 'serif'],
                'Quicksand': ['Quicksand', 'sans-serif'],
            },
            colors: {
                'cream': '#f0d4a1',
            },
            textUnderlineOffset: {
                10: '10px', 
            },
        },
    },
    plugins: [],
};
