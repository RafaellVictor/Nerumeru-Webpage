/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },

    extend: {
      backgroundImage: {
        'offcanvas': "url('../img/Trolly-Footer.png')",
        'bed-catalog': "url('../img/card-item-bg.png')",
        'toys-catalog': "url('../img/card-item-bg-toys.png')",
        'sanitize-catalog': "url('../img/card-item5.png')",
        'trolly-catalog': "url('../img/card-item-bg-trolly.png')",
        'pillow-catalog': "url('../img/pillow-bg.png')",
        'forest': "url('../img/bg-forest.jpg')",
      },

      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'translateX(7%)' },
          '50%': { transform: 'translateX(-7%)' },
        },

        bgSlider: {
          '0%, 100%': { transform: '-translateX(full)' },
          '50%': { transform: 'translateX(0)' },
        },

        mousebc: {
          "0%, 100%": {
            transform: "translateY(0)",
          },
          "50%": {
            transform: "translateY(2.5px)",
          },
        },
        
      },

      animation: {
        wiggle: 'wiggle 1s ease-in-out infinite',
        mosueBounce: "mousebc 1s infinite",
      },

      fontFamily: {
        Poppins: ["Poppins", "sans-serif"],
      },

      colors: {
        "blue-water": "#F6F8FD",
        "blue-Neru": "#255DB4",
        "black-neru": "#42454A",
        "white-neru": "#F5F5F5",
        "grey-neru": "#ACA9A9",
        "blue-Login-Form" : "#C5D9EB"
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
