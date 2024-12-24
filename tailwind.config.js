/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors');

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ["Manrope", "system-ui", "sans-serif"],
        },
        extend: {
            fontFamily: {
                exo: ['"Exo"', "system-ui", "sans-serif"],
            },
            fontSize: {
                h1: ["clamp(2.5rem, 5vw, 4rem)", { lineHeight: "1.1" }],
                "h2-large": [
                    "clamp(1.875rem, 3.5vw, 2.5rem)",
                    { lineHeight: "1.2" },
                ],
                "h2-medium": [
                    "clamp(1.5rem, 3vw, 2.25rem)",
                    { lineHeight: "1.2" },
                ],
            },
            colors: {
                blue: colors.blue,
                zinc: colors.zinc,
                bg: {
                    primary: "rgba(20, 20, 20, 0.7)", // Original: #141414/70
                    secondary: "rgba(23, 23, 23, 1)", // Original: #171717
                    accent: "rgba(27, 27, 27, 1)", // Original: #1b1b1b
                    tertiary: "rgba(44, 44, 44, 0.4)", // Original: #2c2c2c/40
                },
                accent: {
                    blue: "#177FF0",
                    red: "#FF4B4B",
                    yellow: "#FFBA08",
                    green: "#00B746",
                },
                text: {
                    primary: "#FFFFFF",
                    secondary: "#666666",
                    muted: "#444444",
                },
                gauge: {
                    red: "#FF004D",
                    orange: "#FF540B",
                    yellow: "#FFD600",
                    green: "#90FF00",
                    blue: "#03EBF3",
                },
                border: {
                    light: "rgba(255, 255, 255, 0.1)",
                    toggle: "rgba(50, 50, 50, 1)",
                },
            },
            backdropBlur: {
                custom: "15px",
            },
            zIndex: {
                '9999': '9999',
            }
        },
    },
    plugins: [],
};
