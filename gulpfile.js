const { src, dest, parallel, series, watch } = require('gulp'),
    concat          = require('gulp-concat'),
    sass            = require('gulp-sass'),
    autoprefixer    = require('gulp-autoprefixer'),
    cssnano         = require('gulp-cssnano'),
    pug             = require('gulp-pug'),
    sourcemaps      = require('gulp-sourcemaps'),
    livereload      = require('gulp-livereload');


function buildHtml(){
    return src('**/*.pug')
        .pipe(pug({ pretty: true }))
        .pipe(dest(function(file){
            file.basename = file.basename.split('.')[0] + '.php';
            return file.base;
        }))
        .pipe(livereload())
}
exports.buildHtml = buildHtml;

function styles(){
    return src( "components/vars/styles.sass")
       .pipe(sourcemaps.init())
       .pipe(sass())
       .pipe(autoprefixer())
       .pipe(cssnano())
       .pipe(sourcemaps.write())
       .pipe(dest("components/"))
       .pipe(livereload())
}
exports.styles = styles;

function scripts() {
    return src([
        '../node_modules/jquery/dist/jquery.min.js',
        '../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
        './*/*.js',
    ])
    .pipe(concat('script.min.js'))
    .pipe(dest('build/js/'))
    .pipe(livereload());
}
exports.scripts = scripts;

function startWatch() {
    livereload.listen();
    watch( ['./*/*.pug', './*/**/*.pug'], buildHtml );
    watch( '**/*.php' ).on('change', livereload.changed);
    // watch( './*/*.js', scripts );
    watch( ['./*/*.sass', './*/**/*.sass'], styles );
}
exports.default = startWatch;
