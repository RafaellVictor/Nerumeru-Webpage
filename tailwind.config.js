/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**.{html,js}"],
  theme: {
    container: {
      center: true,
    },

    extend: {
      backgroundImage: {
        offcanvas: "url('../img/Trolly-Footer.png')",
      },

      keyframes: {
        mousebc: {},
      },

      animation: {},

      fontFamily: {
        Poppins: ["Poppins", "sans-serif"],
      },

      colors: {
        "blue-water": "#F6F8FD",
        "blue-Neru": "#255DB4",
        "black-neru": "#42454A",
        "grey-neru": "#ACA9A9",
      },

      screens: {
        xl: "1200px",
        "2xl": "1320px",
        "3xl": "1600px",
      },
    },
  },
  plugins: [],
};
