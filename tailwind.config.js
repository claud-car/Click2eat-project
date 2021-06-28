const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            inset: {
               '-top-1/5': 'top:-20%;',
              },
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
                    footer: '#141519',
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
                },
                gray_text: {
                    DEFAULT: '#C1C1C1'
                },
                gray_card: {
                    DEFAULT: '#282C35'
                }               
            },
            backgroundImage: theme => ({
                'jumbo-home': "url('/images/click2eat-jumbo-home.jpg')",
                'jumbo-others': "url('/images/click2eat-jumbo-others.jpg')",
                'footer': "url('/images/click2eat-footer.jpg')",
            }),            
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/forms')],
};
