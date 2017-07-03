var themename = 'wotm';

var gulp = require('gulp'),
	// Prepare and optimize code etc
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync').create(),
	image = require('gulp-image'),
	jshint = require('gulp-jshint'),
	postcss = require('gulp-postcss'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),

	// Only work with new or updated files
	newer = require('gulp-newer'),

	// Name of working theme folder
	root = './',
	scss = root + 'sass/',
	js = root + 'js/',
	img = root + 'images/',
	languages = root + 'languages/';


// CSS via Sass and Autoprefixer
gulp.task('sass', function() {
	return gulp.src('./sass/style.scss')
	// .pipe(sourcemaps.init())
	.pipe(sass({
		outputStyle: 'expanded',
		indentType: 'tab',
		indentWidth: '1',
		includePaths: 'node_modules/foundation-sites/scss'
	}).on('error', sass.logError))
	.pipe(autoprefixer({
		browsers: ['last 5 versions'],
		cascade: false
	}))
	// .pipe(sourcemaps.write(scss + 'maps'))
	.pipe(gulp.dest('./'))
	.pipe(browserSync.stream());
});

gulp.task('autoprefixer', function () {
    return gulp.src('./*.css')
        // .pipe(sourcemaps.init())
        .pipe(autoprefixer({
			browsers: ['last 3 versions'],
			cascade: false
		}))
        // .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css/'));
});

// Optimize images through gulp-image
// gulp.task('images', function() {
// 	return gulp.src(img + 'RAW/**/*.{jpg,JPG,png}')
// 	.pipe(newer(img))
// 	.pipe(image())
// 	.pipe(gulp.dest(img));
// });

// JavaScript
gulp.task('javascript', function() {
	return gulp.src('./js/*.js')
	.pipe(jshint())
	.pipe(jshint.reporter('default'))
	.pipe(gulp.dest('./js/'));
});


// Watch everything
gulp.task('watch', function() {
	browserSync.init({
		open: 'external',
		proxy: 'wordpress.dev',
		port: 8080
	});
	gulp.watch('./sass/*.scss', ['sass']);
	// gulp.watch('./*.css', ['autoprefixer']);
	// gulp.watch('./js/*.js', ['javascript']);
	// gulp.watch(img + 'RAW/**/*.{jpg,JPG,png}', ['images']);
	gulp.watch(['./**/*.php', './js/*.js']).on('change', browserSync.reload);
});


// Default task (runs at initiation: gulp --verbose)
gulp.task('default', ['watch']);
