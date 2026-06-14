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
            colors: {
                brand: '#2563eb', // Your primary brand color (e.g., blue-600)
                'brand-strong': '#1d4ed8', // Darker variant for hover states (e.g., blue-700)
                'brand-medium': '#93c5fd', // For focus ring states
            },
        },
    },

    plugins: [forms],
};
