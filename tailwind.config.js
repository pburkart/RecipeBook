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
                'kanit': ['Kanit', ...defaultTheme.fontFamily.sans]
            },
            boxShadow: {
                'custom-footer': '0 -2px 2px rgba(0,0,0,0.25)',
            },
        },
    },

    plugins: [forms],
};
