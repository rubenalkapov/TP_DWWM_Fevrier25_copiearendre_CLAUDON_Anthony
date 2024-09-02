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
        "hover-ocean-blue": "var(--hover-ocean-blue)",
      },
      colors: {
        "sand-text": "var(--sand-text)",
      },
      fontFamily: {
        "bubbles-font": "var(--bubbles-font)",
        "normal-font": "var(--normal-font)"
      }
    },
    screens: {
      'iphonese': {
        'raw': '(min-height: 665px)',
      },
      'xs': '320px',
      // => @media (min-width: 320px) { ... }

      '2s': '375px',
      // => @media (min-width: 375px) { ... }

      's': '425px',
      // => @media (min-width: 425px) { ... }

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '2440px',
      // => @media (min-width: 2440px) { ... }
    }
  },
  plugins: [
    require("@tailwindcss/forms")
  ],
}

