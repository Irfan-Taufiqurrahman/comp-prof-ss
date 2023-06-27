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
                "biru-muda": "#BBE1FA",
                "biru-joss": "#3282B8",
                "biru-ss": "#2C05FB",
            },
        },
    },

    plugins: [],
};
