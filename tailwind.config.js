import preset from "./vendor/filament/support/tailwind.config.preset";
import daisyui from "daisyui";
export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    plugins: [daisyui],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#1f2b5d",
                    secondary: "#5400fe",
                    accent: "#198754",
                    muted: "#8492a6 ",
                    neutral: "#e5e7eb",
                    info: "#1e448d",
                    success: "#00ff00",
                    warning: "#f2e900",
                    error: "#ff0000",
                },
            },
        ],
    },
    theme: {
        extend: {
            colors: {
                perhati: {
                    50: "#f0f5fe",
                    100: "#dde9fc",
                    200: "#c3d9fa",
                    300: "#9ac2f6",
                    400: "#69a1f1",
                    500: "#467feb",
                    600: "#3162df",
                    700: "#284dcd",
                    800: "#2740a6",
                    900: "#253a83",
                    950: "#1f2b5d",
                },
            },
        },
    },
};
