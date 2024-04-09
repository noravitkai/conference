/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        lightgreen: "#6FAE55",
        darkgreen: "#33673C",
      },
      fontFamily: {
        primary: ["itc-avant-garde-gothic-pro", "sans-serif"],
        secondary: ["Helvetica", "Arial", "sans-serif"],
      },
    },
  },
  plugins: [],
};
