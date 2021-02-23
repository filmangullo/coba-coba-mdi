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
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
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
            },
            // backgroundColor: theme => ({
            //     'cms-first': '#f7f8f9',
            //     'cms-second': '#fdbe11',
            //     'cms-third': '#212021'
            // }),
            // colors: {
            //     seindo: {
            //       default: '#EB2D34',
            //       dark: '#7F141C',
            //       bright: '#F47A86'
            //     },
            // }

        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
