var gulp = require('gulp'),
// sass = require('gulp-compass'),
  sass = require('gulp-sass'),
  autoprefixer = require('gulp-autoprefixer'),
  plumber = require('gulp-plumber'),
  livereload = require('gulp-livereload')

gulp.task('sass', function () {
  gulp.src('build/styles/**/*.scss')
    .pipe(plumber())
    .pipe(sass({
      sass  : 'build/styles/',
      style : 'compressed'
    }))
    .pipe(autoprefixer({
      browsers : ['last 2 versions']
    }))
    .pipe(gulp.dest('public/assets/css'))
    .pipe(livereload())
})

