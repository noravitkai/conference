/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      maxWidth: {
        none: "none",
      },
      colors: {
        darkgreen: "#6FAE55",
        lightgreen: "#8CBE77",
      },
      fontFamily: {
        primary: ["Proxima Nova", "sans-serif"],
        secondary: ["Helvetica", "Arial", "sans-serif"],
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
