/** @type {import('tailwindcss').Config} */
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
                h2: ["clamp(1.875rem, 3.5vw, 2.5rem)", { lineHeight: "1.2" }],
                h3: ["clamp(1.5rem, 3vw, 2.25rem)", { lineHeight: "1.2" }],
            },
            colors: {
                background: {
                    base: "",
                    primary: "rgba(20, 20, 20, 0.7)",
                    secondary: "rgba(23, 23, 23, 1)",
                    tertiary: "rgba(44, 44, 44, 0.4)",
                    pillButton: "rgba(27, 27, 27, 1)",
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
        },
    },
    plugins: [],
};
