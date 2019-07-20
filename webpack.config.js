const FixStyleOnlyEntriesPlugin = require( 'webpack-fix-style-only-entries' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const path = require( 'path' );

const main = () => {
	const plugins = [ new FixStyleOnlyEntriesPlugin(), new MiniCssExtractPlugin( '[name].css' ) ];

	return {
		plugins,
		entry: {
			admin: [
				path.resolve( __dirname, 'src/js/admin/core.js' ),
				path.resolve( __dirname, 'src/sass/admin/main.scss' ),
			],
			frontend: [
				path.resolve( __dirname, 'src/js/frontend/core.js' ),
				path.resolve( __dirname, 'src/sass/frontend/main.scss' ),
			],
		},
		module: {
			rules: [
				{
					test: /\.s?css$/,
					use: [
						MiniCssExtractPlugin.loader,
						'css-loader',
						'postcss-loader',
						'sass-loader',
					],
				},
				{
					test: /\.js$/,
					exclude: /(node_modules)/,
					use: {
						loader: 'babel-loader',
					},
				},
			],
		},
	};
};

module.exports = main;
