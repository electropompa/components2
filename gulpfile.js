const { src, dest, watch } = require('gulp'),
    concat          = require('gulp-concat'),
    sass            = require('gulp-sass')(require('sass')),
    autoprefixer    = require('gulp-autoprefixer'),
    cssnano         = require('gulp-cssnano'),
    sourcemaps      = require('gulp-sourcemaps'),
    livereload      = require('gulp-livereload');


function styles(){
    return src( "components/vars/styles.sass")
       .pipe(sourcemaps.init())
       .pipe(sass())
       .pipe(autoprefixer())
       // .pipe(cssnano())
       .pipe(sourcemaps.write())
       .pipe(dest("components/"))
       .pipe(livereload())
}
exports.styles = styles;

function startWatch() {
    livereload.listen();
    watch( '**/*.php' ).on('change', livereload.changed);
    watch( '**/*.html' ).on('change', livereload.changed);
    watch( ['./*/*.sass', './*/**/*.sass'], styles );
}
exports.default = startWatch;
