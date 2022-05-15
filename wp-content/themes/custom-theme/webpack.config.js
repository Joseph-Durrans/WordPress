const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    entry: ["./assets/js/index.js", "./assets/scss/index.scss"],
    output: {
        filename: "app.js",
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "app.css",
        }),
    ],
    module: {
        rules: [
            {
                test: /.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"],
                    },
                },
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    {
                        loader: "postcss-loader",
                        options: {
                            postcssOptions: {
                                plugins: ["postcss-preset-env"],
                            },
                        },
                    },
                    "sass-loader",
                ],
            },
        ],
    },
    devtool: "source-map",
};
