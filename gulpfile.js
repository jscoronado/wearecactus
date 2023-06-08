'use strict';
import gulp from 'gulp';
import autoprefixer from 'gulp-autoprefixer';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import concat from 'gulp-concat';
import sourcemaps from 'gulp-sourcemaps';
import minifycss from 'gulp-cssnano';
import beep from 'beepbeep';
import util from 'gulp-util';

const sass = gulpSass( dartSass );
const SCSS_SRC = 'sass/**/*.scss';
const SCSS_DST = 'css/';

gulp.task('browser-sync', function() {

    var files = [
    './style.css',
    './js/*.js',
    './*.php'
    ];

    browserSync.init(files, {
        proxy: "localhost/wearecactus/",
        notify: false
    });
});

const minifyConfig = {
    safe: true,
    zindex: false,
    autoprefixer: {
        add: true,
        browsers: [
            'Edge 12',
            'Chrome 46',
            'Firefox ESR',
            'Safari 8',
            'Android 4.4',
            'ie 11',
            'iOS 8.1'
        ]
    }
};

if (util.env.production) {
    minifyConfig.discardComments = {
        removeAll: false
    };
}

/* Compile scss files*/
gulp.task('scss', () => {
    return gulp.src([SCSS_SRC], 'node_modules/bootstrap/dist/css/bootstrap.min.css')
        .pipe(sourcemaps.init())
        .pipe(sass({
          outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(concat('main.min.css'))
        .pipe(minifycss(minifyConfig))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(SCSS_DST))
        .on('end', () => {
            beep();
        });
});

//gulp.task('watch-scss', () => gulp.parallel(SCSS_SRC, ['scss']));
gulp.task('watch-scss', gulp.series('scss'));