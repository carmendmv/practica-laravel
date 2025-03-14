import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            height: {
                "10v": "10vh;",
                "15v": "15vh",
                "65v": "65vh",
            },
            colors: {
                header: "#574B66",
                nav: "#968BA6",
                main: "#BCB7C2",
                footer: "#F3F2F4",
            },
        },
    },

    plugins: [forms, require("daisyui")],
};
