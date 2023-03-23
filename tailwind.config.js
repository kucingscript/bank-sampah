/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "576px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                dark: "#15191F",
                green: "#80ed99",
            },
            backgroundImage: {
                linearGreen: "linear-gradient(to right, #a8ff78, #78ffd6)",
            },
        },
    },
    plugins: [],
};
