const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

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
            fontSize: {
                'xxs': '.6rem',
               },
            colors: {
                transparent: 'transparent',
                white: {
                    DEFAULT: '#FFF',
                    laravel: '#F3F4F6',
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
                'pizzaHome': "url('/images/homepage_images/bg-pizza.jpg')",
                'newsletter': "url('/images/homepage_images/Screenshot_2.png')",
            }),
            padding:{
                input:'1.25rem 1.5rem',
            },
            height:{
                "10v": "10vh",
                "20v": "20vh",
                "30v": "30vh",
                "40v": "40vh",
                "50v": "50vh",
                "60v": "60vh",
                "70v": "70vh",
                "80v": "80vh",
                "90v": "90vh",
                "100v": "100vh",
            },
            width: {
                checkoutLarge: '1200px',
                checkoutMedium: '1020px',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/forms'),
        plugin(function({ addBase, theme }) {
            addBase({
            })
        })
    ],
};
