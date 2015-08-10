// Require gulp to get started
var gulp   = require('gulp');

// Require other packages
var sass         = require('gulp-sass');
var minCSS       = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var concat       = require('gulp-concat');
var rename       = require('gulp-rename');
var concat       = require('gulp-concat');

var themePath = '.';

var paths = {
  scss : themePath + '/scss/**/*.scss',
  scripts : themePath + '/js/src/**/*.js'
};


// Compile SCSS + Minify output
gulp.task('sass', function(){
  gulp.src(themePath + '/scss/app.scss')
    .pipe(sass({errLogToConsole: true}))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    // .pipe(minCSS())
    .pipe(rename('style.css'))
    .pipe(gulp.dest( themePath ));
});

// Compile scripts in the src directory
gulp.task('scripts', function(){
    gulp.src(paths.scripts)
    // .pipe(uglify())
    .pipe(concat('app.js'))
    .pipe(gulp.dest( themePath + '/js/' ));
});


gulp.task('default', function(){
    gulp.watch(paths.scss, ['sass']);
    gulp.watch(paths.scripts, ['scripts']);
});