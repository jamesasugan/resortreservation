/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './src/**/*.{html,js,php}', // Include all HTML, JS, and PHP files in src
    './node_modules/flowbite/**/*.js', // Include Flowbite JS files
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('daisyui'), // DaisyUI plugin
    require('flowbite/plugin'), // Flowbite plugin
  ],
};
