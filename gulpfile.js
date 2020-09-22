const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');

gulp.task('sass', function(){
	return gulp.src('../articlesAndAboutMe/sass/**/*.sass')
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(gulp.dest('app/css'))
		.pipe(browserSync.reload({stream: true}))
});

gulp.task('js', function(){
	return gulp.src('app/js/*.js')
	  .pipe(browserSync.reload({stream: true}))
});

gulp.task('jsLibs', function(){
	return gulp.src([
		'node_modules/jquery/dist/jquery.js',
		'node_modules/bootstrap/dist/js/bootstrap.js'
	])
		.pipe(concat('jsLibs.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('app/js/jsLibs'))
});

gulp.task('php', function(){
	return gulp.src('app/**/*.php')
		.pipe(browserSync.reload({stream: true}))
});

gulp.task('watch', function(){
	gulp.watch('../articlesAndAboutMe/sass/**/*.sass', gulp.parallel('sass'));
	gulp.watch('app/js/*.js', gulp.parallel('js'));
	gulp.watch('app/**/*.php', gulp.parallel('php'));
});

gulp.task('browserSync', function(){
	browserSync.init({
		proxy: 'petProject/articlesAndAboutMe/app'
	})
});

gulp.task('default', gulp.parallel('sass', 'js', 'jsLibs', 'php', 'watch', 'browserSync'));