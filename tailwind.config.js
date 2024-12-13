/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    theme: {
      fontFamily: {
        'sans': ['"Exo"', 'system-ui', 'sans-serif'],
      }
    },
    extend: {},
  },
  plugins: [],
}

