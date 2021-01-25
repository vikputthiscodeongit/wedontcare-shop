module.exports = (env) => ({
    plugins: [
        require("autoprefixer")({
            grid: "autoplace"
        }),
        env === "production" ? require("cssnano")({
            preset: "default"
        })() : false
    ]
})
