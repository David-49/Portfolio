const { src, dest, series, parallel, watch } = require("gulp");
const del = require("del");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const rename = require("gulp-rename");
const modifyHREF = require("gulp-processhtml");
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const uglify = require("gulp-uglify");
const gulpIf = require("gulp-if");

function processFiles() {
  return src("src/**/*.php").pipe(modifyHREF()).pipe(dest("dist"));
}

function hiddenFiles() {
  return src("src/htaccess_file/**/.*").pipe(dest("dist/htaccess_file"));
}

function processIMG() {
  return src("src/img/**/*.+(png|jpg|jpeg|svg|gif)")
    .pipe(
      cache(
        imagemin({
          interlaced: true,
        })
      )
    )
    .pipe(dest("dist/img"));
}

function css() {
  return src("src/css/*.css")
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(dest("dist/css"));
}

function js() {
  return src("src/js/*.js")
    .pipe(gulpIf("*.js", uglify()))
    .pipe(dest("dist/js"));
}

function clean() {
  return del("dist");
}

exports.default = function () {
  watch(
    ["src/*.php", "src/css/*.css"],
    { ignoreInitial: false },
    series(clean, parallel(processFiles, hiddenFiles, css, js, processIMG))
  );
};
