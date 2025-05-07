import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    // Aktifkan JIT mode untuk development
    mode: "jit",

    // Daftar semua file yang menggunakan Tailwind
    content: [
        "./resources/**/*.{html,js,css}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            // Tambahkan custom colors/spacing jika perlu
            colors: {
                laravel: "#ff2d20",
            },
        },
    },

    plugins: [
        forms,
        // Tambahkan plugin lain jika diperlukan
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio"),
    ],
};
