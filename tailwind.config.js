/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // this is how i can add new style as w-22 (other w-.. will not be deleted out of extend ) 
      // width:{
      //   '22' : '5.5rem',
      // },
      width:{
        '44' : '12rem',
        
      },
      margin:{
        '15' : '6rem',
        '15' : '4rem',
        '33' : '5.5rem',
        '34' : '2.8rem',
      },

      // when we want container center of page 
      // container : {
      //  center : true,
      //  padding: 2rem,
      // },

      // this code use like 
      // inset:{
      //   '18' : '4,5rem',
      // },

    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
