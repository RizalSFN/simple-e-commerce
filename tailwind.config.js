/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/**/**/*.blade.php",
        "./resources/views/**/**/**/*.blade.php",
        "./resources/views/**/**/**/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        colors: {
            primary: "#ffa217",
            secondary: "#0f172b",
        },
    },
    plugins: [require("flowbite/plugin")],
};
