var gulp        = require('gulp'),
    concat      = require('gulp-concat'),
    csslint     = require('gulp-csslint'),
    del         = require('del'),
    gutil       = require('gulp-util'),
    harp        = require('gulp-harp'),
    imagemin    = require('gulp-imagemin'),
    jshint      = require('gulp-jshint'),
    minifyCss   = require('gulp-minify-css'),
    rename      = require('gulp-rename'),
    uglify      = require('gulp-uglify'),
    uncss       = require('gulp-uncss'),
    wait        = require('gulp-wait'),
    watch       = require('gulp-watch');

var dir = {};
    dir.src            = './';
    dir.src_assets     = dir.src + 'assets/';
    dir.src_css        = dir.src_assets + 'css/';
    dir.src_js         = dir.src_assets + 'js/';
    dir.src_imgs       = dir.src_assets + 'imgs/';
    dir.dist           = 'www/';
    dir.dist_assets    = dir.dist + 'assets/';
    dir.dist_css       = dir.dist_assets + 'css/';
    dir.dist_js        = dir.dist_assets + 'js/';
    dir.dist_imgs      = dir.dist_assets + 'imgs/';

gulp.task('default', function() {
    return gulp.src(dir.src)
        .pipe(harp());
});