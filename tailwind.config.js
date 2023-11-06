import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Georgia', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'french-grey': '#c8ced9',
                'cool-grey': '#8d98ae',
                'off-white': '#fbfbfb',
            },
        },
    },

    plugins: [forms],
};

