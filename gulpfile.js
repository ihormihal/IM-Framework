'use strict';
//var lr = require('tiny-lr');
var gulp      = require('gulp'),
	//livereload= require('gulp-livereload'),
	sass      = require('gulp-sass'),
	rename    = require('gulp-rename'),
	concat    = require('gulp-concat'),
	concatCss = require('gulp-concat-css'),
	minifycss = require('gulp-minify-css'),
	uglify    = require('gulp-uglifyjs');

var framework_libs = ['fileinput','im-gmap','im-dropdown','im-parallax','im-select','navbar','owl','ripple'];
var vendor_libs = ['code','fancybox','owl2','spin','toastr','wow'];
var fonts = ['font-awesome','material-icons'];

gulp.task('fontsDist', function() {
	return gulp.src('app/fonts/+('+fonts.join('|')+')/**')   
	.pipe(gulp.dest('assets/fonts'));
});

gulp.task('jqueryDist', function() {
  	return gulp.src('app/vendor/jquery/jquery-2.1.4.min.js') 
  	.pipe(rename("jquery.min.js"))  
    .pipe(gulp.dest('assets/js'));
});

gulp.task('vendorCss', function () {
  return gulp.src('app/vendor/+('+vendor_libs.join('|')+')/*.css')
    .pipe(concatCss("vendor.css"))   
    .pipe(minifycss('')) 
    .pipe(rename("vendor.min.css"))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('vendorJs', function() {
  return gulp.src('app/vendor/+('+vendor_libs.join('|')+')/*.js')
    .pipe(concat('vendor.min.js'))
    .pipe(uglify(''))
    .pipe(gulp.dest('assets/js'));
});

gulp.task('frameworkJs', function() {
  return gulp.src('app/libs/+('+framework_libs.join('|')+').js')
    .pipe(concat('imf.min.js'))
    //.pipe(uglify(''))
    .pipe(gulp.dest('assets/js'));
});

gulp.task('scripts', function() {
	return gulp.src('app/js/*.js')
	.pipe(concat('scripts.min.js'))
	//.pipe(uglify(''))
	.pipe(gulp.dest('assets/js'));
});



gulp.task('vendor', ['fontsDist','jqueryDist','vendorCss','vendorJs']);

gulp.task('sass', function () {
	gulp.src('app/sass/**/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(concatCss("style.css"))
		.pipe(minifycss(''))
		.pipe(rename("style.min.css"))
		.pipe(gulp.dest('assets/css'));
});
 
gulp.task('watch', function () {
	gulp.watch('app/sass/**/*.scss', ['sass']);
	gulp.watch('app/js/*.js', ['scripts']);
	gulp.watch('app/libs/*.js', ['frameworkJs']);
});

gulp.task('default', ['fontsDist','jqueryDist','vendorCss','vendorJs','frameworkJs','scripts','sass']);