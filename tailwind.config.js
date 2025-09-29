import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Roboto', ...defaultTheme.fontFamily.sans],
      },
      // keyframes:{
      //   appear:{
      //     '0%': {opacity: 0, transform: 'scale(0.5)'},
      //     '100%': {opacity:1, transform:'scale(1)'}
      //   }
      // },
      // animation: {
      //   appear: 'appear 0.5s ease-out forwards'
      // }
    },
  },
  plugins: [forms],
};
