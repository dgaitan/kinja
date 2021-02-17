const gulp = require('gulp');
const sass = require('gulp-sass');
const cssmin = require('gulp-cssmin');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const jsImport = require('gulp-js-import');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const babel = require('gulp-babel');
const gulpJsImport = require('gulp-js-import');
;

function css() {
    return gulp.src('assets/sass/styles.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(cssmin())
        .pipe(gulp.dest('assets/dist/css/'));
}

function gutenberg() {
  return gulp.src('assets/sass/gutenberg/gutenberg.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(cssmin())
    .pipe(gulp.dest('assets/dist/css/'));
}

function js() {
    const vendors = [
        'node_modules/jquery-slim/dist/jquery.slim.min.js',
        'node_modules/lazyload/lazyload.min.js',
    ]

    let scripts = vendors.concat([
        'assets/js/main.js'
    ])

    return gulp.src(scripts)
        .pipe(plumber())
        .pipe(concat('app.min.js'))
        .pipe(babel({
          presets: [
            [
              '@babel/env',
              {
                modules: false
              }
            ]
          ]
        }))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/dist/js/'));
}

exports.default = function () {
    gulp.watch('assets/sass/**/*.scss', css)
    gulp.watch('assets/sass/gutenberg/**/*.scss', gutenberg)
    gulp.watch('assets/js/*.js', js)
}
