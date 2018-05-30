const path = require('path');

module.exports = {
    entry: './public/index.js',
    output: {
        path: path.resolve(__dirname, './bundle'),
        filename: 'bundle.js',
        publicPath: 'bundle/'
    },
    devServer: {
        overlay: true
    }
};

