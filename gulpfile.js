let gulp = require('gulp');

function generateCatalog() {
    console.log('This is task');
}

gulp.task('style', generateCatalog);