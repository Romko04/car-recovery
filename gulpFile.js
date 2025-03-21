const { src, dest, series, parallel, watch } = require("gulp");
const cssnano = require("gulp-cssnano");
const uglify = require("gulp-uglify");
const browserSync = require("browser-sync").create();
const cleanCSS = require("gulp-clean-css");
const terser = require("gulp-terser");
const fileinclude = require("gulp-file-include");
const { deleteAsync } = require("del");
const inject = require("gulp-inject");
const webp = require("gulp-webp");
const imagemin = require("gulp-imagemin");
const replace = require("gulp-replace");
const fonter = require("gulp-fonter");
const ttf2woff2 = require("gulp-ttf2woff2");

const isProd = process.env.NODE_ENV === "production";

// Мінімізація стилів
function styles() {
  return src("src/css/style.css")
    .pipe(isProd ? cssnano() : cleanCSS())
    .pipe(dest("dist/css"));
}

// Мінімізація скриптів
function scripts() {
  return src("src/js/*.js")
    .pipe(isProd ? terser() : uglify())
    .pipe(dest("dist/js"));
}

// Конвертація шрифтів
function fonts() {
  return src("src/fonts/*.ttf") // Беремо тільки TTF
    .pipe(fonter({ formats: ["woff"] })) // Конвертуємо в WOFF
    .pipe(dest("dist/fonts")) // Зберігаємо WOFF
    .pipe(src("src/fonts/*.ttf")) // Знову беремо TTF (оригінал)
    .pipe(ttf2woff2()) // Конвертуємо в WOFF2
    .pipe(dest("dist/fonts")); // Зберігаємо WOFF2
}
// Копіювання бібліотек
function copyLibs() {
  return src([
    "node_modules/swiper/swiper-bundle.min.js",
    "node_modules/gsap/dist/gsap.min.js",
    "node_modules/scrolltrigger/scrolltrigger-umd.js",
    "node_modules/lenis/dist/lenis.min.js",
  ]).pipe(dest("dist/js/libs"));
}

// Конвертація зображень
function images() {
  return src(["src/images/*.*"], { encoding: false }).pipe(imagemin()).pipe(webp()).pipe(dest("dist/images/"));
}

// HTML-компоненти
function components() {
  return src("src/*.html")
    .pipe(fileinclude({ prefix: "@@", basepath: "@file" }))
    .pipe(dest("dist/"));
}

// Очищення dist перед новим білдом
function clean() {
  return deleteAsync(["dist"]);
}

// Сервер для розробки
function serve() {
  browserSync.init({
    server: { baseDir: "./dist" },
    open: true,
  });

  watch("src/**/*.html", series(components, injectFiles, reload));
  watch("src/css/**/*.css", series(styles, reload));
  watch("src/js/**/*.js", series(scripts, reload));
  watch("src/images/**/*.{jpg,png}", series(images, reload));
  watch("src/fonts/*.ttf", series(fonts, reload));
}

// **Автоматичне підключення скриптів та стилів**
function injectFiles() {
  return src("dist/*.html")
    .pipe(
      inject(src(["dist/css/style.css", "dist/js/libs/*.js", "dist/js/main.js"], { read: false }), {
        relative: true,
      })
    )
    .pipe(dest("dist"));
}

function reload(done) {
  browserSync.reload();
  done();
}

// 🔥 Фінальний білд (build)
function copyToBuild() {
  return src("dist/**/*").pipe(dest("build/"));
}

function cleanBuild() {
  return deleteAsync(["build"]);
}

// Заміна jpg, png на webp в HTML
function replaceImageExtensions() {
  return src("dist/*.html")
    .pipe(
      replace(/src="([^"]+\.(jpg|png))"/g, (match, p1) => {
        // Замінюємо jpg або png на webp
        return `src="${p1.replace(/\.(jpg|png)$/, ".webp")}"`;
      })
    )
    .pipe(dest("dist"));
}

// Заміна jpg, png на webp в CSS
function replaceImageExtensionsInCSS() {
  return src("dist/css/*.css")
    .pipe(
      replace(/url\(["']?([^"']+\.(jpg|png))["']?\)/g, (match, p1) => {
        // Замінюємо jpg або png на webp
        return `url("${p1.replace(/\.(jpg|png)$/, ".webp")}")`;
      })
    )
    .pipe(dest("dist/css"));
}

// Запуск у режимі розробки
exports.dev = series(
  clean,
  parallel(styles, scripts, copyLibs, images, components, fonts),
  injectFiles,
  replaceImageExtensions,
  replaceImageExtensionsInCSS,
  serve
);

// Білд для продакшену
exports.build = series(
  clean,
  parallel(styles, scripts, copyLibs, images, components, fonts),
  injectFiles,
  replaceImageExtensions,
  replaceImageExtensionsInCSS,
  cleanBuild,
  copyToBuild
);
