/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        width:{
            "1213": "1213px",
            "700": "700px",
            "748": "748px",
            "54" : '54px',
            "15": "15px",
        },
        height: {
            '400': '400px',
            '500': '500px',
        },
        margin: {
            "169": "169px",
            "228": "228px",
        },
        gap: {
            "65": "65px",
        },
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}

