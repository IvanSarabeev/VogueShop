/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      fontFamily: { "inter": "Inter, sans-serif" },
      backgroundImage: {
        'hero': "url('../../public/images/hero.jpg')",
        'main-banner': "url('../../public/images/main-banner-1.jpg')",
        'banner-two': "url('../../public/images/catbanner-01.jpg')",
        'banner-three': "url('../../public/images/catbanner-03.jpg')",
        'banner-four': "url('../../public/images/catbanner-02.jpg')",
        'banner-five': "url('../../public/images/catbanner-04.jpg')",
      },
      backgroundColor: {
        'main': '#fffffd',
        'header': '#c09578',
      },
      textColor: {
        '': '',
      }
    },
  },
  plugins: [],
}

