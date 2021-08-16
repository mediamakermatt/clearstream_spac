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
        'light-green': '#57BC90',
        'sky-blue': '#79B3E5'
      },
      fontSize: {
        'xs':   '.75rem',
        'sm':   '.875rem',
        'tiny': '.875rem',
        'base': '1rem',
        'lg':   '1.125rem',
        'xl':   '1.25rem',
        '2xl':  '1.5rem',
        '3xl':  '1.875rem',
        '4xl':  '2.25rem',
        '5xl':  '3rem',
        '6xl':  '4rem',
        '7xl':  '5rem',
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
