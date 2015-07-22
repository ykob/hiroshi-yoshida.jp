var gulp = require('gulp');
var rubySass = require('gulp-ruby-sass');
var CONFIG = require('../package.json').projectConfig;

var path = [
  './' + CONFIG.SRC + '/scss/style.scss'
];

gulp.task('sass', function() {
  return rubySass(path, {
    style: 'compressed'
  })
    .pipe(gulp.dest('./' + CONFIG.DST + '/css/', {
      cwd: './'
    }));
});
