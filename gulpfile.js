var gulp = require('gulp');
var compass = require('gulp-simple-compass');

gulp.task('default',function(){



	gulp.src('app/')

	.pipe(compass());

})
