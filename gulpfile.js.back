var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass',function(){
    return gulp.src('./fesrc/sass/main.sass')
            .pipe(sass({outputStyle: 'compressed'}).on('error',sass.logError))
            .pipe(gulp.dest('./public/customer/css/'))
})

gulp.task('js', function() {
    return gulp.src('./fesrc/js/*')
        .pipe(gulp.dest('./public/customer/js/'))
})


gulp.task('watch',['sass','js'],function(){
    gulp.watch('./fesrc/sass/**/*',['sass'])
    gulp.watch('./fesrc/js/*',['js'])
})
