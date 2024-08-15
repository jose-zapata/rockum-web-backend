/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'default': ['"Open Sans"'],
        'open-sans': ['"Open Sans"'],
        'bebas-neue': ['"Bebas Neue"'],
      },
    },
  },
  plugins: [],
}
