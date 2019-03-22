const { src, dest, parallel, series, watch } = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

function browser() {
    browserSync.init({
        proxy: '2019.wcus.test',
        files: [
            '*.php'
        ]
    });

    watch('./sass/**/*.scss', css);
    watch('./js/*.js', js).on('change', browserSync.reload);
}

function css() {
    return src('./sass/*.scss', { sourcemaps: true })
		.pipe(sass())
		// .pipe(minifyCSS())
        .pipe(dest('./'), { sourcemaps: true })
		.pipe(browserSync.stream());
}

function js() {
    return src('./js/*.js', { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
		.pipe(concat('build.min.js'))
		.pipe(dest('./js/min', { sourcemaps: true }));
}

exports.css = css;
exports.js = js;
exports.default = browser;
