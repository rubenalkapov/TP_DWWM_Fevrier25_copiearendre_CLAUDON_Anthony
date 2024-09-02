/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      backgroundColor: {
        "forest-green": "var(--forest-green)",
        "ocean-blue": "var(--ocean-blue)",
      },
      colors: {
        "sand-text": "var(--sand-text)",
      },
      fontFamily: {
        "bubbles-font": "var(--bubbles-font)",
        "normal-font": "var(--normal-font)"
      }
    },
  },
  plugins: [],
}

