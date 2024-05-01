/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      maxWidth: {
        none: "none",
      },
      colors: {
        lightgreen: "#6FAE55",
        darkgreen: "#33673C",
        tintgreen: "#8CBE77",
      },
      fontFamily: {
        primary: ["itc-avant-garde-gothic-pro", "sans-serif"],
        secondary: ["Helvetica", "Arial", "sans-serif"],
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
