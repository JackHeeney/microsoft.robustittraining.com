module.exports = {
  plugins: [
    require("postcss-import"),
    require("postcss-preset-env"),
    require("cssnano"),
  ],
};

// can comment out cssnano and run npm run postcss:watch to un-minify
