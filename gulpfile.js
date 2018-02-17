var gulp = require('gulp');
var sass = require('gulp-sass');

var dir = {
  src: {
    css     : 'resources/src/css',
    js      : 'resources/src/js',
    img     : 'resources/src/img',
    packages: 'node_modules'
  },
  dist: {
    css     : 'resources/assets/css',
    js      : 'resources/assets/js',
    img     : 'resources/assets/img',
    packages: 'resources/assets/packages'
  }
}

// SassとCssの保存先を指定
gulp.task('css', function(){
  gulp.src(dir.src.css + '/*.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest(dir.dist.css + '/'));
});

gulp.task('default',  function() {
  gulp.watch([dir.src.css + '/**/*.scss'], ['css']);
});
