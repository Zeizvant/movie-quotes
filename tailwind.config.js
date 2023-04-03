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
            "54" : '54px',
            "15": "15px",
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
  plugins: [],
}

