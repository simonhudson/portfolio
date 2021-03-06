var gulp        = require('gulp'),
    concat      = require('gulp-concat'),
    csslint     = require('gulp-csslint'),
    data        = require('gulp-data'),
    del         = require('del'),
    filesize    = require('gulp-filesize'),
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
    dir.src_assets      = dir.src + 'assets/src/';
    dir.src_css         = dir.src_assets + 'css/';
    dir.src_js          = dir.src_assets + 'js/';
    dir.src_imgs        = dir.src_assets + 'imgs/';
    dir.src_fonts       = dir.src_assets + 'fonts/**/';

    dir.dist            = dir.src + './';
    dir.dist_assets     = dir.dist + 'assets/';
    dir.dist_css        = dir.dist_assets + 'css/';
    dir.dist_js         = dir.dist_assets + 'js/';
    dir.dist_imgs       = dir.dist_assets + 'imgs/';
    dir.dist_fonts      = dir.dist_assets + 'fonts/';

    dir.watch_css           = dir.src_css + '**/*.scss';
    dir.watch_js            = dir.src_js + '**/*.js';

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
    // return gulp.src(dir.dist_css + '*.css')
    //     .pipe(uncss({
    //         html: [dir.dist + '**/*.php']
    //     }))
    //     .pipe(gulp.dest(dir.dist_css));
});

gulp.task('sass', ['delcss'], function () {
    return sass(dir.src_css + 'main.scss')
        .on('error', function (err) {
            console.error('Error!', err.message);
        })
        .pipe(rename('main.css'))
        .pipe(gulp.dest(dir.dist_css));
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
Copy Fonts
***/
gulp.task('copyfonts', function() {
    return gulp.src(dir.src_fonts)
        .pipe(gulp.dest(dir.dist_fonts));
});

/***
Copy Images
***/
gulp.task('copyimgs', ['delimgs'], function() {
    return gulp.src(dir.src_imgs)
        .pipe(imagemin())
        .pipe(filesize())
        .pipe(gulp.dest(dir.dist_imgs));
});

/***
Tasks
***/
gulp.task('default', ['copyfonts', 'minifycss', 'imagemin']);

gulp.task('serve', ['default'], function () {
    gutil.log('Initiating watch');
    gulp.watch(dir.watch_css, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_js, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_imgs, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_templates, { interval: 1000 }, ['default']);
    gulp.watch(dir.watch_data, { interval: 1000 }, ['default']);
});