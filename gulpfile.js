'use strict';

var gulp = require('gulp'),
    fs = require('fs'),
    del = require('del'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    less = require('gulp-less');

// Minified names
var applicationJs = 'application.min.js',
    applicationCss = 'styles.min.css',
    frontendApplicationCss = 'style.css';



// LESS Backend
gulp.task('less', function(){

    // Backend
    return gulp.src([
            './less/style.less'
        ])
        .pipe(concat('compiled.less'))
        .pipe(less())
        .pipe(rename('style.css'))
        .pipe(gulp.dest('./web/css'));
});