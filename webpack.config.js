const path = require('path');

module.exports = {
    mode: "production",
    entry: './src/app.js',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.txt$/i,
                loader: "raw-loader"
            },
            {
                test: /\.css$i/i,
                use: ['style-loader', 'css-loader']

            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    'style-loader',
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.php$/i,
                use: 'file-loader'
            }
        ]
    }
}