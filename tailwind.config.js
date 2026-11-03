import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './config/landing.php',
        './app/**/*.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', '"Abc Diatype"', ...defaultTheme.fontFamily.sans],
                'serif-display': ['"Abc Marist"', '"Source Serif 4"', 'ui-serif', 'Georgia', 'serif'],
                serif: ['"Abc Marist"', '"Source Serif 4"', 'ui-serif', 'Georgia', 'serif'],
                heading: ['"Abc Marist"', '"Source Serif 4"', 'ui-serif', 'Georgia', 'serif'],
                'sans-heading': ['"Abc Marist"', '"Source Serif 4"', 'ui-serif', 'Georgia', 'serif'],
                mono: ['"JetBrains Mono"', ...defaultTheme.fontFamily.mono],
            },
            colors: {
                paper: '#f6f6f4',
                ink: '#1d2125',
                charcoal: '#23272b',
                brand: {
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#15803d',
                    800: '#166534',
                    900: '#14532d',
                    950: '#052e16',
                    DEFAULT: '#16a34a',
                    accent: '#87ed82',
                    olive: '#8a9a5b',
                    over: '#ffffff',
                },
            },
            maxWidth: {
                '8xl': '88rem',
                'container': '77.5rem', // 1240px desktop container target
            },
            borderRadius: {
                '2xl': '1rem',
                '3xl': '1.5rem',
                '4xl': '2rem',
            },
            boxShadow: {
                'subtle': '0 1px 3px 0 rgba(0, 0, 0, 0.04), 0 1px 2px 0 rgba(0, 0, 0, 0.02)',
                'card': '0 4px 20px -2px rgba(15, 23, 42, 0.05), 0 2px 6px -1px rgba(15, 23, 42, 0.02)',
                'card-hover': '0 20px 35px -10px rgba(15, 23, 42, 0.08), 0 10px 15px -5px rgba(15, 23, 42, 0.04)',
                'glow': '0 0 50px -10px rgba(34, 197, 94, 0.25)',
                'cta': '0 10px 25px -5px rgba(22, 163, 74, 0.3)',
            },
            animation: {
                'marquee': 'marquee var(--marquee-duration, 35s) linear infinite',
                'marquee-reverse': 'marquee-reverse var(--marquee-duration, 35s) linear infinite',
            },
            keyframes: {
                marquee: {
                    '0%': { transform: 'translateX(0%)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
                'marquee-reverse': {
                    '0%': { transform: 'translateX(-50%)' },
                    '100%': { transform: 'translateX(0%)' },
                },
            },
        },
    },

    plugins: [forms],
};
