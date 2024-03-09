/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      fontFamily: { "inter": "Inter, sans-serif" },
      backgroundColor: {
        'main': '#252525',
        'header': '#c09578',
      },
      textColor: {
        '': '',
      }
    },
  },
  plugins: [],
}

