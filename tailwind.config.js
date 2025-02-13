import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: "#4285f4",
                    50: "#F4F8FF",
                    100: "#dbeafe",
                    200: "#c0dbfd",
                    300: "#94c5fc",
                    400: "#62a5f8",
                    500: "#4285f4",
                    600: "#2763e9",
                    700: "#1f4ed6",
                    800: "#2041ad",
                    900: "#1f3b89",
                    950: "#182553",
                },
                abbey: {
                    DEFAULT: "#484848",
                    50: "#f6f6f6",
                    100: "#e7e7e7",
                    200: "#d1d1d1",
                    300: "#b0b0b0",
                    400: "#888888",
                    500: "#6d6d6d",
                    600: "#5d5d5d",
                    700: "#4f4f4f",
                    800: "#484848",
                    900: "#3d3d3d",
                    950: "#262626",
                },
            },
        },
    },
    plugins: [],
};
