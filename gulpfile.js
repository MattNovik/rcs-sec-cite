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

gulp.task("html-documents", function() {
    return gulp.src("src/html/documents/*.html")
    .pipe(gulp.dest("dist/html/documents"));
});

gulp.task("html-vacancy", function() {
    return gulp.src("src/html/vacancy/*.html")
    .pipe(gulp.dest("dist/html/vacancy"));
});

gulp.task("html-services", function() {
    return gulp.src("src/html/services/*.html")
    .pipe(gulp.dest("dist/html/services"));
});

gulp.task("html-aboutUs", function() {
    return gulp.src("src/html/aboutUs/*.html")
    .pipe(gulp.dest("dist/html/aboutUs"));
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
  gulp.watch("dist/html/documеnts/*.html").on('change', browserSync.reload);
  gulp.watch("dist/html/documеnts/css/*.css").on('change', browserSync.reload);
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

gulp.task('sass_documents', function() { // Создаем таск "sass"
  return gulp.src(['src/html/documents/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/documents/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_vacancy', function() { // Создаем таск "sass"
  return gulp.src(['src/html/vacancy/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/vacancy/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_services', function() { // Создаем таск "sass"
  return gulp.src(['src/html/services/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/services/css')) // Выгружаем результата в папку css
    .pipe(browserSync.stream());
});

gulp.task('sass_aboutUs', function() { // Создаем таск "sass"
  return gulp.src(['src/html/aboutUs/scss/**/*.scss']) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/html/aboutUs/css')) // Выгружаем результата в папку css
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


gulp.task('watch', function() {
    gulp.watch('src/scss/**/*.scss', gulp.parallel('sass'));
    gulp.watch('src/html/documents/scss/**/*.scss', gulp.parallel('sass_documents'));
    gulp.watch('src/html/vacancy/scss/**/*.scss', gulp.parallel('sass_vacancy'));
    gulp.watch('src/html/services/scss/**/*.scss', gulp.parallel('sass_services'));
    gulp.watch('src/html/aboutUs/scss/**/*.scss', gulp.parallel('sass_aboutUs'));
    gulp.watch("src/*.html", gulp.parallel('html'));
	gulp.watch("src/html/documents/*.html", gulp.parallel('html-documents'));
	gulp.watch("src/html/vacancy/*.html", gulp.parallel('html-vacancy'));
	gulp.watch("src/html/services/*.html", gulp.parallel('html-services')); 
	gulp.watch("src/html/aboutUs/*.html", gulp.parallel('html-aboutUs'));   
    gulp.watch("src/js/*.js", gulp.parallel('scripts'));
     
});

gulp.task("default", gulp.parallel("html","html-documents","html-vacancy","html-services","html-aboutUs","html-cert","html-cert2", "sass","sass_documents","sass_vacancy","sass_services", "sass_aboutUs", "sass_cert","sass_cert2","scripts","browserSync", "watch"));