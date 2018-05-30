const path = require('path');

module.exports = {
    entry: './public/index.js',
    output: {
        path: path.resolve(__dirname, './bundle'),
        filename: 'bundle.js',
        publicPath: 'dist/'
    },
    devServer: {
        overlay: true
    }
};

