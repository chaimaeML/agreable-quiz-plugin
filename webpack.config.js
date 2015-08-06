var nib = require('nib')
var path = require('path')
var webpack = require('webpack')
var ExtractTextPlugin = require("extract-text-webpack-plugin")

var buildPath = path.resolve(__dirname, 'resources', 'assets');
var mainPath = path.resolve(__dirname, 'src', 'main.js');

module.exports = {
  entry: {
    app     : mainPath
  },
  output: {
    path: buildPath,
    filename: '[name].js'
  },
  module: {
    loaders: [
      { test: /\.styl$/, loader: ExtractTextPlugin.extract("style", "css!stylus")},
      { test: /\.js$/, exclude:'node_modules', loader: 'babel' },
      { test: /backbone/, exclude:'node_modules', loader: "imports?define=>false&this=>window" }
    ]
  },

  plugins: [
    new ExtractTextPlugin('styles.css'),
    new webpack.optimize.UglifyJsPlugin()
  ],

  resolve: {
    context: __dirname,
    extensions: ['','.js', '.json', '.styl'],
    modulesDirectories: [
      'widgets', 'javascripts', 'web_modules', 'style-atoms', 'node_modules'
    ]
  },

  stylus: {
    use: [nib()]
  }
}
