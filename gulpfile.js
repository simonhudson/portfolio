var gulp        = require('gulp'),
    concat      = require('gulp-concat'),
    csslint     = require('gulp-csslint'),
    data        = require('gulp-data'),
    del         = require('del'),
    gutil       = require('gulp-util'),
    imagemin    = require('gulp-imagemin'),
    jade        = require('gulp-jade'),
    jshint      = require('gulp-jshint'),
    minifyCss   = require('gulp-minify-css'),
    path        = require('path'),
    rename      = require('gulp-rename'),
    sass        = require('gulp-ruby-sass'),
    uglify      = require('gulp-uglify'),
    uncss       = require('gulp-uncss'),
    wait        = require('gulp-wait'),
    watch       = require('gulp-watch');

var dir = {};

    dir.src             = './';
    dir.src_templates   = dir.src + 'templates/';
    dir.src_pages       = dir.src_templates + 'pages/';
    dir.src_assets      = dir.src + 'assets/';
    dir.src_css         = dir.src_assets + 'css/';
    dir.src_js          = dir.src_assets + 'js/';
    dir.src_imgs        = dir.src_assets + 'imgs/';

    dir.dist            = 'dist/';
    dir.dist_assets     = dir.dist + 'assets/';
    dir.dist_css        = dir.dist_assets + 'css/';
    dir.dist_js         = dir.dist_assets + 'js/';
    dir.dist_imgs       = dir.dist_assets + 'imgs/';

    dir.watch_css           = dir.src_css + '**/*.scss';
    dir.watch_js            = dir.src_js + '**/*.js';
    dir.watch_templates     = dir.src_templates + '**/*.jade';
    dir.watch_data          = dir.src + 'data/**/*.json';

/***
Clean output dirs
***/
gulp.task(
    'del', [
        'delcss',
        'deljs',
        'delimgs'
    ]
);
gulp.task('delcss', function() {
    del(dir.dist_css + '*.css');
});
gulp.task('deljs', function() {
    del(dir.dist_js + 'application.js');
    del(dir.dist_js + 'application.min.js');
});
gulp.task('delimgs', function() {
    del(dir.dist_imgs + '**/*.{gif,jpg,jpeg,png,svg}');
});

/***
CSS
***/
gulp.task('minifycss', ['uncss'], function() {
    gulp.src(dir.dist_css + 'main.css')
        .pipe(rename('main.min.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest(dir.dist_css));
});

gulp.task('uncss', ['sass'], function () {
    return gulp.src(dir.dist_css + '*.css')
        .pipe(uncss({
            html: [dir.dist + '**/*.html']
        }))
        .pipe(gulp.dest(dir.dist_css));
});

gulp.task('sass', ['delcss'], function () {
    return sass(dir.src_css + 'main.scss')
        .on('error', function (err) {
            console.error('Error!', err.message);
        })
        .pipe(rename('main.css'))
        .pipe(gulp.dest(dir.dist_css));
});

/***
Jade templates
***/
gulp.task('jade', function() {
  gulp.src(dir.src_pages + '**/*.jade')
    .pipe(data(function(file) {
        var fileName = path.basename(file.path).replace('.jade', '');
        return require('./data/' + fileName + '.json');
    }))
    .pipe(jade())
    .pipe(gulp.dest(dir.dist));
});

/**
Minify images
***/
gulp.task('imagemin', ['delimgs'], function () {
    return gulp.src(dir.src_imgs + '**/*.{gif,jpg,jpeg,png,svg}')
        .pipe(imagemin())
        .pipe(gulp.dest(dir.dist_imgs));
});

/***
Tasks
***/
gulp.task('default', ['jade', 'minifycss', 'imagemin']);

gulp.task('serve', ['default'], function () {
    gutil.log('Initiating watch');
    gulp.watch(dir.watch_css, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_js, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_imgs, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_templates, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_data, { interval: 1000 }, ['default']);
});