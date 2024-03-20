const { src, dest, watch } = require( 'gulp' ),
    sass            = require( 'gulp-sass' )(require('sass')),
    csso            = require( 'gulp-csso' ),
    autoprefixer    = require( 'autoprefixer' ),
    postcss         = require( 'gulp-postcss' ),
    gcmq            = require( 'gulp-group-css-media-queries' ),
    clean           = require( 'gulp-clean' ),
    sourcemaps      = require( 'gulp-sourcemaps' ),
    livereload      = require( 'gulp-livereload' );

let processors = [
    autoprefixer({ overrideBrowserslist:[ 'last 2 version' ]})
];

const sassEntry = "public/src/styles.sass";

function styles(){
    return src( sassEntry )
       .pipe( sourcemaps.init() )
       .pipe( sass() )
       .pipe( sourcemaps.write('.') )
       .pipe( dest("public/") )
       .pipe( livereload() )
}
exports.styles = styles;

const productionStyles = () => {
    src('public/styles.css.map').pipe(clean());
    return src( sassEntry )
       .pipe( sass().on( 'error', sass.logError ) )
       .pipe( postcss(processors) )
       .pipe( gcmq() )
       .pipe( csso() )
       .pipe( dest( "public/" ) );
}
exports.productionStyles = productionStyles;

function startWatch() {
    livereload.listen();
    watch( '**/*.php' ).on('change', livereload.changed);
    watch( '**/*.html' ).on('change', livereload.changed);
    watch( ['./*/*.sass', './*/**/*.sass'], styles );
}
exports.default = startWatch;


const exampleStyles = () => {
    return src( "public/example/for-example-page.sass" )
        .pipe( sass().on( 'error', sass.logError ) )
        .pipe( postcss(processors) )
        .pipe( gcmq() )
        .pipe( csso() )
        .pipe( dest( "public/" ) );
}
exports.exampleStyles = exampleStyles;
