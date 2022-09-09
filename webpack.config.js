/* jshint ignore:start */

const defaultConfig = require( './node_modules/@wordpress/scripts/config/webpack.config.js' );
const path = require( 'path' );
const postcssPresetEnv = require( 'postcss-preset-env' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const IgnoreEmitPlugin = require( 'ignore-emit-webpack-plugin' );

const production = process.env.NODE_ENV === '';

module.exports = {
  ...defaultConfig,
  entry: {
    themejs: path.resolve( process.cwd(), 'src', 'js', 'theme.js' ),
    editorjs: path.resolve( process.cwd(), 'src', 'js', 'editor.js' ),
    theme: path.resolve( process.cwd(), 'src', 'scss', 'theme.scss' ),
    bootstrap: path.resolve( process.cwd(), 'src', 'scss', 'bootstrap.scss' ),
    editor: path.resolve( process.cwd(), 'src', 'scss', 'editor.scss' ),
  },
  output: {
    path: path.resolve(__dirname, '_assets'),
    publicPath: '_assets'
  },
  optimization: {
    ...defaultConfig.optimization,
    splitChunks: {
      cacheGroups: {
        editor: {
          name: 'editor',
          test: /editor\.(sc|sa|c)ss$/,
          chunks: 'all',
          enforce: true,
        },
        theme: {
          name: 'theme',
          test: /theme\.(sc|sa|c)ss$/,
          chunks: 'all',
          enforce: true,
        },
        default: false,
      },
    },
  },
  module: {
    ...defaultConfig.module,
    rules: [
      ...defaultConfig.module.rules,
      {
        test: /\.(sc|sa|c)ss$/,
        exclude: /node_modules/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: 'css-loader',
            options: {
              sourceMap: ! production,
            },
          },
          {
            loader: 'postcss-loader',
            options: {
              ident: 'postcss',
              plugins: () => [
                postcssPresetEnv( {
                  stage: 3,
                  features: {
                    'custom-media-queries': {
                      preserve: false,
                    },
                    'custom-properties': {
                      preserve: true,
                    },
                    'nesting-rules': true,
                  },
                } ),
              ],
            },
          },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: ! production,
            },
          },
        ],
      },
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'fonts/'
            }
          }
        ]
      }
    ],
  },
  plugins: [
    ...defaultConfig.plugins,
    new MiniCssExtractPlugin( {
      filename: '[name].css',
    } ),
    new IgnoreEmitPlugin( [ 'editor.js', 'theme.js' ] ),
  ],
  optimization: {
    minimizer: [
      new CssMinimizerPlugin(),
    ],
    minimize: true,
  }
};
