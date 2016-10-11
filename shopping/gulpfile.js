var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var jade = require('gulp-jade')
// var plumber = require('gulp-plumber');

gulp.task('sass', function() {
    return gulp.src('src/sass/main.sass')
        .pipe(sass({outputStyle: 'compressed'}).on('error',sass.logError))
        .pipe(gulp.dest('./dist/css/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: 'dist',
            open: "external"
        },
    })
});



gulp.task('js', function() {
    return gulp.src('src/js/*')
        .pipe(gulp.dest('dist/js/'))
})


gulp.task('jade',function() {
    return gulp.src('src/jade/*.jade')
        .pipe(jade({ pretty: true }))
        .pipe(gulp.dest('dist/'))
});


// gulp.task('fonts', function() {
//     return gulp.src('src/fonts/**/*')
//         .pipe(gulp.dest('dist/fonts'))
// })


gulp.task('watch', ['browserSync', 'sass', 'jade','js'], function() {
    gulp.watch('src/sass/**/*.sass', ['sass']);
    gulp.watch('src/jade/*.jade', ['jade']);
    gulp.watch('src/jade/**/*.jade', ['jade']);
    gulp.watch('src/js/*.js', ['js']);
    gulp.watch('dist/*.html', browserSync.reload);
    gulp.watch('dist/js/*.js', browserSync.reload);
    // gulp.watch('src/fonts/**/*', ['fonts']);
});
