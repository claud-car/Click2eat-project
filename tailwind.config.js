const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                white: {
                    DEFAULT: '#FFF',
                },
                blue: {
                    DEFAULT: '#22262F',
                },
                gray: {
                    shuttle: '#5D6978'
                },
                orange: {
                    DEFAULT: '#E89240'
                },
                yellow: {
                    DEFAULT: '#D8AB37'
                },
                selago: {
                    DEFAULT: '#F4F7FD'
                }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/forms')],
};
