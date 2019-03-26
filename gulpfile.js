// let concat = require('gulp-concat');
let gulp = require('gulp'),
    importCSS = require('gulp-import-css'),
    cleanCSS = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch');

function generateCatalog() {
    return gulp.src('styles/catalog.css')
                .pipe(importCSS()) // Build catalog.css file with all @imports
                .pipe(autoprefixer({
                    browsers : ['< 0.1%'],
                    cascade : false
                })) // Add prefixes for css-property
                .pipe(cleanCSS({
                    compatibility: 'ie8', 
                    level : 2
                })) // Minify CSS, совместимость с IE8, второй уровень сжатия файла
                .pipe(gulp.dest('styles/dest/'));
}
function generateMain() {
    return gulp .src('styles/main.css')
                .pipe(importCSS())
                .pipe(autoprefixer({
                    browsers: ['< 0.1%'],
                    cascade: false
                }))
                .pipe(cleanCSS({
                    compatibility: 'ie8', 
                    level : 2
                }))
                .pipe(gulp.dest('styles/dest/'));
}

function watchCssFiles() {
    watch('styles/blocks/**/*.css', generateCatalog);
    watch('styles/catalog.css', generateCatalog);
    watch('styles/blocks/**/*.css', generateMain);
    watch('styles/main.css', generateMain);
    // gulp.watch('styles/blocks/**/*.css', gulp.series('style'));
}

// Задание на сборку единого css файла
gulp.task('style', generateCatalog);
// Задание на отслеживание изменений файлов
gulp.task('watch', watchCssFiles);