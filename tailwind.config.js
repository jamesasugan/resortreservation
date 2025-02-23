/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './src/**/*.{html,js,php}', 
  ],
  theme: {
   extend: {
      colors: {
        scrollbar: {
          track: 'transparent', 
          thumb: '#c0c0c0', 
        }
      }
    }
  },
  plugins: [
    require('daisyui'), 
  ],
};
