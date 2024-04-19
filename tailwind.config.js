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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                "950px": {
                    "max": "950px"
                },
                "930px": {
                    "max": "920px"
                },
                "800px": {
                    "max": "800px"
                },
                "650px": {
                    "max": "650px"
                },
                "600px": {
                    "max": "600px"
                },
                "480px": {
                    "max": "480px"
                },
                "400px": {
                    "max": "400px"
                }
            },
            colors: {
                "dark": "#161617",
                "main": "#8170F2",
                "light": "#18181A",
            }
        },
    },

    plugins: [forms],
};
