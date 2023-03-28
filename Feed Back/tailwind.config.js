/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./components/**/*.{html,js,php}",
    "./pages/**/*.{html,js,php}",
    "./index.html",
    // watch all tailwind class update to all specific file types (**.file_extension) as seen below
    "**.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
