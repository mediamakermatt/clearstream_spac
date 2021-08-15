module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: { // allows adding on to default instead of overriding
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'teal': '#0D978A',
        'green': '#07524B',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
