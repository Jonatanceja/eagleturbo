module.exports = {
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        rojo: {
          light: '#FF576B',
          DEFAULT: '#DF3348',
          dark: '#8C1725',
        },
        azul: {
          light: '#4F60A7',
          DEFAULT: '#26336C',
          dark: '#131E4B',
        },
        gris: {
          light: '#F0F0F0',
          DEFAULT: '#9B9B9B',
          dark: '#4E4E4E',
        },
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
  purge: {
    content: [
      'site/templates/**/*.html',
      'site/templates/**/*.php',
      'resources/**/*.js',
      'resources/**/*.vue'
    ],
  },
}
