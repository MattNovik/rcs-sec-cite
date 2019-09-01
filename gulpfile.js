var gulp = require('gulp'), // Подключаем Gulp
    sass = require('gulp-sass'),
    cssnano = require("gulp-cssnano"), // Минимизация CSS
    autoprefixer = require('gulp-autoprefixer'), // Проставлет вендорные префиксы в CSS для поддержки старых браузеров
    imagemin = require('gulp-imagemin'), // Сжатие изображений
    concat = require("gulp-concat"), // Объединение файлов - конкатенация
    uglify = require("gulp-uglify"), // Минимизация javascript
    rename = require("gulp-rename") // Переименование файлов
    browserSync = require('browser-sync');// Создаю сервер на браузере

gulp.task("html", function() {
    return gulp.src("src/index.html")
    .pipe(gulp.dest("dist"));
});

gulp.task("html-to", function() {
    return gulp.src("src/html/to/*.html")
    .pipe(gulp.dest("dist/html/to"));
});

gulp.task("html-sved", function() {
    return gulp.src("src/html/sved/*.html")
    .pipe(gulp.dest("dist/html/sved"));
});

gulp.task("html-obsled", function() {
    return gulp.src("src/html/obsled/*.html")
    .pipe(gulp.dest("dist/html/obsled"));
});

gulp.task("html-cert", function() {
    return gulp.src("src/html/cert/*.html")
    .pipe(gulp.dest("dist/html/cert"));
});

gulp.task("html-cert2", function() {
    return gulp.src("src/html/cert2/*.html")
    .pipe(gulp.dest("dist/html/cert2"));
});



gulp.task('browserSync', function() {
  browserSync({
    server: {
      baseDir: 'dist'
    },
    port: 8090,
    open: true,
    notify: false
  });
  gulp.watch("dist/*.html").on('change', browserSync.reload);
  gulp.watch("dist/css/*.css").on('change', browserSync.reload);
  gulp.watch("dist/images/*.+(jpg|jpeg|png|gif|svg)").on('change', browserSync.reload);
  gulp.watch("dist/js/*.js").on('change', browserSync.reload);
});


gulp.task('sass', function() { // Создаем таск "sass"
  return gulp.src(['src/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_to', function() { // Создаем таск "sass"
  return gulp.src(['src/html/to/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/to/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_sved', function() { // Создаем таск "sass"
  return gulp.src(['src/html/sved/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/sved/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_obsled', function() { // Создаем таск "sass"
  return gulp.src(['src/html/obsled/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/obsled/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_cert', function() { // Создаем таск "sass"
  return gulp.src(['src/html/cert/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/cert/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_cert2', function() { // Создаем таск "sass"
  return gulp.src(['src/html/cert2/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/cert2/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task("scripts", function() {
    return gulp.src("src/js/*.js") // директория откуда брать исходники

        .pipe(uglify()) // вызов плагина uglify - сжатие кода
        .pipe(rename({ suffix: '.min' })) // вызов плагина rename - переименование файла с приставкой .min
        .pipe(gulp.dest("dist/js")); // директория продакшена, т.е. куда сложить готовый файл
});

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

gulp.task('watch', function() {
    gulp.watch('src/scss/**/*.scss', gulp.parallel('sass'));
    gulp.watch("src/*.html", gulp.parallel('html'));
    gulp.watch("src/js/*.js", gulp.parallel('scripts'));
    gulp.watch("src/images/*.+(jpg|jpeg|png|gif|svg)", gulp.parallel('imgs'));
});

gulp.task("default", gulp.parallel("html","html-to","html-sved","html-obsled","html-cert","html-cert2", "sass","sass_to","sass_sved", "sass_obsled", "sass_cert","sass_cert2","scripts", "imgs","imgs-to","imgs-sved","imgs-obsled","imgs-cert","imgs-cert2","browserSync", "watch"));