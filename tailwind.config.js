/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Geist: [ "Geist-Regular", "sans-serif" ],
            },
            colors: {

                primary: "#3861FB",
                'primary-light': "#4F6EF7",
                secondary: "#2d3748",
                trinary: '#222531',
                accent: "#e2e8f0",
                light: "#f7fafc",
                dark: "#1a202c",
                success: "#16C784",
                info: "#63b3ed",
                warning: "#faf089",
                danger: "#EA3943",
                'dark-black': "#0d1421",
                'light-black': "#222531",




            },
            spacing: {
                128: "32rem",
                144: "36rem",
            },
            borderRadius: {
                "4xl": "2rem",
            },
            boxShadow: {
                "2xl": "0 25px 50px -12px rgba(0, 0, 0, 0.25)",
            },

            width: {
                '8xl': '88rem',
            },
            maxWidth: {
                '8xl': '88rem',
            },

        },
    },
    plugins: [],
}
