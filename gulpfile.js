const { src, dest, watch } = require('gulp'),
    sass            = require('gulp-sass')(require('sass')),
    sourcemaps      = require('gulp-sourcemaps'),
    livereload      = require('gulp-livereload');


function styles(){
    return src( "components/vars/styles.sass")
       // .pipe(sourcemaps.init())
       .pipe(sass())
       // .pipe(sourcemaps.write())
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
