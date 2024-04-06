/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",

    ],
    theme: {
        extend: {
            animation: {
                'gradient': 'gradient 8s linear infinite',
                'infinite-scroll': 'infinite-scroll 6s linear infinite',
            },
            keyframes: {
                'gradient': {
                    to: {
                        'background-position': '200% center'
                    },
                },
                'infinite-scroll': {
                    from: {
                        transform: 'translateX(0)'
                    },
                    to: {
                        transform: 'translateX(-100%)'
                    },
                },
            }
        },
    },
    plugins: [
        require('tailwindcss-animated')
    ],
}
