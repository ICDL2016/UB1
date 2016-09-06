var gulp = require('gulp'),
  jade = require('gulp-jade'),
  plumber = require('gulp-plumber'),
  livereload = require('gulp-livereload');


gulp.task('jade', function () {
  gulp.src('build/templates/*.jade')
    .pipe(plumber())
    .pipe(jade())
    .pipe(gulp.dest('public'))
    .pipe(livereload());
});