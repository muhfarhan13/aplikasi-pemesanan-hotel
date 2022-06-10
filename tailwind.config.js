module.exports = {
    important: true,
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                bluebery: "#012C94",
            },
            margin: {
                "30rem": "30rem",
            },
            screens: {
                xbl: "380px",
                mbl: "490px",
            },
        },
    },
    variants: {
        extend: {
            inset: ["group-hover"],
        },
    },
    plugins: [],
    stats: {
        children: true,
    },
};
