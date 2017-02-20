'use strict';
//var lr = require('tiny-lr');
const gulp  = require('gulp'),
	//livereload= require('gulp-livereload'),
	sass      = require('gulp-sass'),
	rename    = require('gulp-rename'),
	concat    = require('gulp-concat'),
	concatCss = require('gulp-concat-css'),
	minifycss = require('gulp-minify-css'),
	uglify    = require('gulp-uglifyjs'),
	autoprefixer = require('gulp-autoprefixer');

const srcDir  = 'design/source/';
const vendorDir  = 'design/source/vendor/';
const distDir = 'design/';

const framework_libs = [
	'fileinput',
	'im-gmap',
	'im-dropdown',
	'im-parallax',
	'im-select',
	'im-header',
	'navbar',
	'owl',
	'ripple'
];
const vendor_libs = [
	'code',
	'fancybox',
	'owl2',
	'spin',
	'toastr',
	'wow',
	'sektor'
];


gulp.task('jqueryDist', function() {
  	return gulp.src(srcDir+'vendor/jquery/jquery-2.1.4.min.js')
  	.pipe(rename("jquery.min.js"))
    .pipe(gulp.dest(distDir+'js'));
});

gulp.task('vendorCss', function () {
  return gulp.src(vendorDir+'('+vendor_libs.join('|')+')/*.css')
    .pipe(concatCss("vendor.css"))
    .pipe(minifycss(''))
    .pipe(rename("vendor.min.css"))
    .pipe(gulp.dest(distDir+'css'));
});

gulp.task('vendorJs', function() {
  return gulp.src(vendorDir+'('+vendor_libs.join('|')+')/*.js')
    .pipe(concat('vendor.min.js'))
    //.pipe(uglify(''))
    .pipe(gulp.dest(distDir+'js'));
});

gulp.task('frameworkJs', function() {
  return gulp.src(srcDir+'libs/+('+framework_libs.join('|')+').js')
    .pipe(concat('imf.min.js'))
    .pipe(uglify(''))
    .pipe(gulp.dest(distDir+'js'));
});

gulp.task('scripts', function() {
	return gulp.src(srcDir+'js/*.js')
	.pipe(concat('scripts.min.js'))
	.pipe(uglify(''))
	.pipe(gulp.dest(distDir+'js'));
});



gulp.task('vendor', ['jqueryDist','vendorCss','vendorJs']);

gulp.task('sass', function () {
	gulp.src(srcDir+'sass/**/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(concatCss("style.css"))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
		}))
		.pipe(minifycss(''))
		.pipe(rename("style.min.css"))
		.pipe(gulp.dest(distDir+'css'));
});

gulp.task('watch', function () {
	gulp.watch(srcDir+'sass/**/*.scss', ['sass']);
	gulp.watch(srcDir+'js/*.js', ['scripts']);
	gulp.watch(srcDir+'libs/*.js', ['frameworkJs']);
});

gulp.task('default', ['jqueryDist','vendorCss','vendorJs','frameworkJs','scripts','sass']);
