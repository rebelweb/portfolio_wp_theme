const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    mode: "production",
    entry: './src/app.js',
    output: {
        path: path.resolve(__dirname, 'assets'),
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
                use: [{
                    loader: MiniCssExtractPlugin.loader,
                    options: {
                        publicPath: '',
                    }
                }, 'css-loader', 'sass-loader']
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css',
            chunkFilename: '[id].css'
        })
    ]
}