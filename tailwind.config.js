const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'mark' : ['Maven Pro', 'sans-serif']},
        extend: {
            fontFamily: {
                'sans': ['Montserrat', 'sans-serif'],
            },
            fontSize: {
                '1xs': '.50rem',
            },
            backgroundColor: {
                chart: {
                    default: '#131722'
                }
            },
            borderRadius: {
            'none': '0',
               'sm': '0.125rem',
               'md': '0.375rem',
               'lg': '2rem',
               'full': '9999px',
               'large': '12px',
            },
            borderColor: {
                'mark': '#F07721'
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
            },
            screens: {
                'xssm': {'min': '300px', 'max': '474px'},
                'xsm': {'min': '475px', 'max': '639px'}
            },
            height: {
                '98' :  '28rem',
                '100' : '48rem',
                '120' : '53rem',
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
