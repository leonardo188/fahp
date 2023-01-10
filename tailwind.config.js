/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'red-primary': '#FF0000',
            },
            fontFamily: {
                body: ['DM Sans'],
            },
        },
    },
    plugins: [],
}
