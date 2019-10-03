// required for my gulp file
var gulp = require("gulp"),
    sass = require("gulp-sass"),
    prefix = require("gulp-autoprefixer"),
    minify = require("gulp-clean-css"),
    rename = require("gulp-rename");

// target paths
var paths = {
    styles: {
      // check all folders in /scss/ for scss files
      src: "css/scss/**/*.scss",

      // path for ugly css
      ugly: "css/scss",

      // min css destination
      dest: "css/scss/min"
    }

    // ,html: {}
}

function style() {
  return(
    gulp
      .src(paths.styles.src)

      // use sass with the files found, log any errors 
      .pipe(sass())
      .on("error", sass.logError)

      // destination for compiled ugly file
      .pipe(gulp.dest(paths.styles.ugly))

      // autoprefix file
      .pipe(prefix({
        browsers: ['last 2 versions'],
        cascade: false
      }))

      // minify file
      .pipe(minify({
        compatibility: 'ie8'
      }))

      // rename min file
      .pipe(rename("styles.min.css"))

      // destination for min file
      .pipe(gulp.dest(paths.styles.dest))
      
  );
}

// $ gulp style 
exports.style = style;

// automation
function watch() {
  gulp.watch("css/scss/*.scss", style)
}

// $ gulp watch
exports.watch = watch;