/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      'primary': '#ffaebc',
      'primary-focus': '#d98493',
      'secondary': '#a0e7e5',
      'secondary-focus': '#82cfcc',
      'accent': '#b4f8c8',
      'accent-focus': '#88d19e',
      'black': '#011627',
      'gray': '#777777',
      'gray-focus': '#4a4949',
      'white': '#fdfffc',
      'info': '#5bc0de',
      'success': '#5cb85c',
      'warning': '#f0ad4e',
      'error': '#d9534f',
    },
  },
  plugins: [],
}
