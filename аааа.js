
gulp.task('imgs', function() {
    return gulp.src("src/images/**/*.+(jpg|jpeg|png|gif|svg)")
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true
        }))
        .pipe(gulp.dest("dist/images"))
});

gulp.task('imgs-to', function() {
    return gulp.src("src/html/to/images/**/*.+(jpg|jpeg|png|gif|svg)")
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true
        }))
        .pipe(gulp.dest("dist/html/to/images"))
});

gulp.task('imgs-sved', function() {
    return gulp.src("src/html/sved/images/**/*.+(jpg|jpeg|png|gif|svg)")
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true
        }))
        .pipe(gulp.dest("dist/html/sved/images"))
});

gulp.task('imgs-obsled', function() {
    return gulp.src("src/html/obsled/images/**/*.+(jpg|jpeg|png|gif|svg)")
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true
        }))
        .pipe(gulp.dest("dist/html/obsled/images"))
});

gulp.task('imgs-cert', function() {
    return gulp.src("src/html/cert/images/**/*.+(jpg|jpeg|png|gif|svg)")
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true
        }))
        .pipe(gulp.dest("dist/html/cert/images"))
});

gulp.task('imgs-cert2', function() {
    return gulp.src("src/html/cert2/images/**/*.+(jpg|jpeg|png|gif|svg)")
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true
        }))
        .pipe(gulp.dest("dist/html/cert2/images"))
});

gulp.watch("src/images/*.+(jpg|jpeg|png|gif|svg)", gulp.parallel('imgs'));

 "imgs","imgs-to","imgs-sved","imgs-obsled","imgs-cert","imgs-cert2",