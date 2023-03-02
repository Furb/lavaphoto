module.exports = {
  content: ["./**/*.php", "./js/*.js"],
  theme: {
    extend: {
      fontFamily: {
        display: "'Cormorant', serif",
        body: "'Heebo', sans-serif;",
      },

      colors: {
        dark: "#121212",
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
