/**
 * Gulpfile.js
 *
 * Global install:
 * @commandline Run as administrator
 * @commandline # npm install -g gulp
 *
 * Install for this project only:
 * @commandline Run as administrator
 * @commandline # npm install --save-dev gulp gulp-if gulp-uglify gulp-sourcemaps gulp-uglifycss gulp-sass gulp-compass gulp-watch gulp-livereload gulp-imagemin gulp-bless gulp-ng-annotate
 *
 */

'use strict';

var gulp = require('gulp'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    uglifycss = require('gulp-uglifycss'),
    imagemin = require('gulp-imagemin'),
    less = require('gulp-less'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    livereload = require('gulp-livereload'),
    watch = require('gulp-watch'),
    env = process.env.SYMFONY_ENV;

/**
 * @Task Javascript
 * Run task js
 *
 * Render one js file out of all js files
 */
gulp.task('js', function () {
    return gulp.src([
        'public/components/jquery/dist/jquery.js',
        'public/components/bootstrap/dist/js/bootstrap.min.js',
        'public/components/picturefill/dist/picturefill.min.js',
        'public/js/*.js'
    ])
        .pipe(gulpif(env !== 'prod', sourcemaps.init()))
        .pipe(concat('app.js'))
        .pipe(gulpif(env === 'prod', uglify()))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('web/js'));
});

/**
 * @Task Less
 * Run task Less
 *
 * Render one css file out of all less files
 */
gulp.task('less', function () {
    return gulp.src([
        'public/less/main.less'])
        .pipe(gulpif(env !== 'prod', sourcemaps.init()))
        .pipe(gulpif(/[.]less/, less()))
        .pipe(concat('main.css'))
        .pipe(gulpif(env === 'prod', uglifycss()))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('web/css'));
});

/**
 * @Task Image
 * Run task img
 *
 * Just pipe all images from project folder to public assets folder
 */
gulp.task('img', function () {
    return gulp.src('public/img/*.*')
        .pipe(imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        }))
        .pipe(gulp.dest('web/img'));
});

/**
 * @Task Fonts
 * Run task font
 *
 * Just pipe all fonts from project folder to public assets folder
 */
gulp.task('font', function () {
    return gulp.src([
        'public/fonts/*.*',
        'public/components/fontawesome/fonts/*.*'
    ])
        .pipe(gulp.dest('web/fonts'));
});

/**
 * @Task HTML
 * Run task html
 */
gulp.task('html', function () {
    return gulp.src([
        'web/**/*.html'
    ]).pipe(gulp.dest('web'));
});

/**
 * @Task Default
 * Run task default
 *
 * define executable tasks when running "gulp" command
 */
gulp.task('default', ['html', 'js', 'less', 'img', 'font']);

/**
 * @Task Watch
 * Run task watch
 *
 * watch files for changes
 */
gulp.task('watch', function () {

    gulp.watch('public/less/**', ['less']);
    gulp.watch('public/js/**', ['js']);
    gulp.watch('public/img/**', ['img']);
    gulp.watch('public/fonts/**', ['font']);
    gulp.watch('web/*.html', ['html']);

    /**
     * Create LiveReload Server
     */
    //livereload.listen();

    /**
     * Watch any files in dist/, reload on change
     */
    gulp.watch(['web/js/**']).on('change', livereload.changed);
    gulp.watch(['web/img/**']).on('change', livereload.changed);
    gulp.watch(['web/css/**']).on('change', livereload.changed);
    gulp.watch(['web/*.html']).on('change', livereload.changed);
});
