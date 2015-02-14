var gulp = require('gulp');
var less = require('gulp-less');
var minifycss = require('gulp-minify-css')
var path = require('path');
var gulptutil = require('gulp-util');
var notify = require('gulp-notify');
var autoprefix = require('gulp-autoprefixer');
var livereload = require('gulp-livereload')

var lessSource = 'assets/less';
var lessTarget = 'public/css';

gulp.task('css', function() {
    return gulp.src(lessSource + '/**/*.less')
        .pipe(less({
            paths: [ path.join(lessSource, 'less', 'includes') ]
        }))
        .on('error', notify.onError(function(error) { return 'Error: ' + error.message; }))
        .pipe(autoprefix('last 10 version'))
        .pipe(minifycss())
        .pipe(gulp.dest(lessTarget))
        .on('error', notify.onError(function(error) { return 'Error: ' + error.message; }))
       // .pipe(notify('CSS compiled, prefixed and minified.  You rock!'))
});

gulp.task('watch', function() {
    gulp.watch(lessSource + '/*.less', ['css'])
});

gulp.task('default', ['watch', 'css'])