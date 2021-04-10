const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['Montserrat', 'sans-serif'],
            },
            borderRadius: {
                'none': '0',
               'sm': '0.125rem',
               'md': '0.375rem',
               'lg': '2rem',
               'full': '9999px',
               'large': '12px',
            },
            colors: {
                cms: {
                    primary: '#EB2D34',
                    secondary: '#7F141C',
                    danger: '#f7b7b9'
                },
                mark: {
                    dark: '#954914',
                    default: '#F07721',
                },
                hitam: '#0F0F0F'
            },
            width: {
                '10.5': '2.625rem',
            }

        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/line-clamp')],
};
