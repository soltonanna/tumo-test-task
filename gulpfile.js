const {src, dest, watch, series} = require('gulp');

const sass = require('gulp-sass')(require('sass'));
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
const terser = require('gulp-terser');
const rename = require('gulp-rename');
const concat = require('gulp-concat');

function compilerSass ()
{
    return src([
      './styles/styles.scss'
    ])
      .pipe(sass())
      .pipe(prefix())
      .pipe(minify())
      .pipe(rename('styles.min.css'))
      .pipe(dest('./dist/css'));
}

function jsMin()
{
    return src([
      './scripts/*.js',
      './scripts/main.js'
    ])
      .pipe(terser())
      .pipe(concat('main.js'))
      .pipe(rename('main.min.js'))
      .pipe(dest('./dist/script'));
}

function watchTask(){
    watch("./styles/**/*.scss", compilerSass);
    watch("./scripts/**/*.js", jsMin);
}

exports.default = series(
    compilerSass,
    jsMin,
    watchTask
);
