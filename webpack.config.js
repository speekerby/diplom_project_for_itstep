const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");


let conf = {
    entry: './public/index.js',
    output: {
        path: path.resolve(__dirname, './build'),
        filename: 'build.js',
        publicPath: 'bundle/'
    },
    devServer: {
        overlay: true
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: "babel-loader"
            }, {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                })
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin("style.css"),
    ]
};

module.exports = (env, options) => {
    let production = options.mode === 'production';

    conf.devtool = production
        ? 'source-map'
        : 'eval-sourcemap';
    return conf;
}