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
        'default': ['"Roboto Condensed"'],
        'new-rocker': ['"New Rocker"'],
        'oswald': ['Oswald'],
        'roboto-condensed': ['"Roboto Condensed"'],
      },
    },
  },
  plugins: [],
}
