const path = require('path');

module.exports = {
    mode: "production",
    entry: './app.js',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            {
                test: [/\.txt$/],
                loader: "raw-loader"
            }
        ]
    }
}