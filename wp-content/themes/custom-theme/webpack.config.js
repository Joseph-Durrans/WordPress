const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = {
    entry: ["./src/js/index.js", "./src/scss/index.scss"],
    output: {
        filename: "app.js",
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "app.css",
        }),
        new BrowserSyncPlugin({
            host: "localhost",
            port: 3000,
            files: ["**/*.php", "./dist/*.css", "./dist/*.js"],
            proxy: "wordpress.test",
            notify: false,
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
