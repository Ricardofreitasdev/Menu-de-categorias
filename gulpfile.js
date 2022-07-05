const { src, dest, watch } = require('gulp');
const minify = require('gulp-minify');
const concat = require('gulp-concat');
const minifyCSS = require('gulp-cssmin');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');

function minifyJs() {
  return src('app/layout/js/*.js', { allowEmpty: true })
    .pipe(concat('scripts.js'))
    .pipe(minify({ noSource: true }))
    .pipe(dest('public'));
}

function minifySass() {
  return src('app/layout/scss/main.scss')
    .pipe(sass())
    .pipe(autoprefixer({ overrideBrowserslist: ['last 2 version', 'ie 9', 'ios 6', 'android 4'], remove: false }))
    .pipe(concat('style.min.css'))
    .on('error', sass.logError)
    .pipe(minifyCSS())
    .pipe(dest('public'));
}

exports.default = () => {
  watch('app/layout/js/*.js', minifyJs);
  watch('app/layout/scss/*.scss', minifySass);
};
