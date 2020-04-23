// Initialize modules
// Importing specific gulp API functions lets us write them below as series() instead of gulp.series()
const { src, dest, watch, series, parallel } = require("gulp");
// Importing all the Gulp-related packages we want to use
const imageMin = require("gulp-imagemin");
const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
var replace = require("gulp-replace");

// File paths
const files = {
  scssPath: "src/sass/**/*.scss",
  jsPath: "src/js/**/*.js",
  imgPath: "src/img/*",
};

// Sass task: compiles the style.scss file into app.css
function scssTask() {
  return src(files.scssPath)
    .pipe(sourcemaps.init()) // initialize sourcemaps first
    .pipe(sass()) // compile SCSS to CSS
    .pipe(postcss([autoprefixer(), cssnano()])) // PostCSS plugins
    .pipe(sourcemaps.write(".")) // write sourcemaps file in current directory
    .pipe(dest("dist/css")); // put final CSS in dist folder
}

// JS task: concatenates and uglifies JS files to app.js
function jsTask() {
  return src([
    files.jsPath,
    //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
  ])
    .pipe(concat("app.js"))
    .pipe(babel())
    .pipe(uglify())
    .pipe(dest("dist/js"));
}

function imgTask() {
  return src(files.imgPath)
  .pipe(imageMin())
  .pipe(dest("dist/img"));
}

// Cachebust
// function cacheBustTask() {
//   var cbString = new Date().getTime();
//   return src(["index.php"])
//     .pipe(replace(/cb=\d+/g, "cb=" + cbString))
//     .pipe(dest("."));
// }

// Watch task: watch SCSS and JS files for changes
// If any change, run scss and js tasks simultaneously
// function watchTask() {
//   watch(
//     [files.scssPath, files.jsPath],
//     { interval: 1000, usePolling: true }, //Makes docker work
//     series(parallel(scssTask, jsTask), cacheBustTask)
//   );
// }

function watchTask() {
  watch(
    [files.scssPath, files.jsPath],
    { interval: 1000, usePolling: true }, //Makes docker work
    series(parallel(scssTask, jsTask, imgTask))
  );
}

// Export the default Gulp task so it can be run
// Runs the scss and js tasks simultaneously
// then runs cacheBust, then watch task
exports.default = series(parallel(scssTask, jsTask, imgTask), watchTask);
