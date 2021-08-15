module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: { // allows adding on to default instead of overriding
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'spac-teal': '#0D978A',
        'spac-green': '#07524B',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
