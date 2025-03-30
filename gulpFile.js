const { src, dest, series, parallel, watch, lastRun } = require("gulp");
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
  return src("src/fonts/*.ttf", { since: lastRun(fonts) }) // Виключаємо повторну генерацію
    .pipe(fonter({ formats: ["woff"] }))
    .pipe(dest(isProd ? "build/fonts" : "dist/fonts"))
    .pipe(src("src/fonts/*.ttf", { since: lastRun(fonts) }))
    .pipe(ttf2woff2())
    .pipe(dest(isProd ? "build/fonts" : "dist/fonts"));
}

function copyCssLibs() {
  return src([
    "node_modules/swiper/swiper-bundle.min.css",
    "node_modules/intl-tel-input/build/css/intlTelInput.min.css",
  ]).pipe(dest("dist/css/libs"));
}

function copyFlags() {
  return src("node_modules/intl-tel-input/build/img/*").pipe(dest("dist/css/img"));
}

// Копіювання бібліотек
function copyLibs() {
  return src([
    "node_modules/swiper/swiper-bundle.min.js",
    "node_modules/intl-tel-input/build/js/intlTelInput.min.js",
    "node_modules/intl-tel-input/build/js/intlTelInputWithUtils.min.js",
    "node_modules/imask/dist/imask.min.js",
  ]).pipe(dest("dist/js/libs"));
}

// Копіювання відео
function copyVideos() {
  return src("src/videos/**/*.*").pipe(dest("dist/videos"));
}

// Конвертація зображень
function images() {
  // Обробка всіх зображень, крім SVG, з конвертацією у WebP
  src(["src/images/*.{png,jpg,jpeg,gif}"], { encoding: false }).pipe(webp()).pipe(dest("dist/images/"));

  // Копіювання SVG без змін
  return src("src/images/*.svg").pipe(dest("dist/images/"));
}

// HTML-компоненти
function components() {
  return src("src/*.html")
    .pipe(fileinclude({ prefix: "@@", basepath: "@file" }))
    .pipe(dest("dist/"));
}

// Очищення dist перед новим білдом
function clean() {
  return deleteAsync(["dist/**", "!dist/fonts", "!dist/fonts/**"]);
}

// Сервер для розробки
function serve() {
  browserSync.init({
    server: { baseDir: "./dist" },
    open: true,
  });

  watch("src/**/*.html", series(components, injectFiles, replaceImageExtensionsInCSS, replaceImageExtensions, reload));
  watch("src/css/**/*.css", series(styles, replaceImageExtensionsInCSS, reload));
  watch("src/js/**/*.js", series(scripts, reload));
  watch("src/images/**/*.{jpg,png, svg}", series(images, reload));
  watch("src/fonts/*.ttf", series(fonts, reload));
  watch("src/videos/**/*.*", series(copyVideos, reload));
}

// **Автоматичне підключення скриптів та стилів**
function injectFiles() {
  return src("dist/*.html")
    .pipe(
      inject(
        src(["dist/css/libs/*.css", "dist/css/style.css", "dist/js/libs/*.js", "dist/js/main.js"], { read: false }),
        {
          relative: true,
        }
      )
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
        return `url("${p1.replace(/\.(jpg|png)$/, ".webp")}")`;
      })
    )
    .pipe(dest("dist/css"));
}

function copyLibsBuild() {
  return src([
    "node_modules/swiper/swiper-bundle.min.js",
    "node_modules/intl-tel-input/build/js/intlTelInput.min.js",
  ]).pipe(dest("build/js/libs"));
}

function copyCssLibsBuild() {
  return src(["node_modules/swiper/swiper-bundle.min.css"]).pipe(dest("build/css/libs"));
}

function imagesBuild() {
  src(["src/images/*.{png,jpg,jpeg,gif}"]).pipe(webp()).pipe(dest("build/images/"));
  return src("src/images/*.svg").pipe(dest("build/images/"));
}

function copyVideosBuild() {
  return src("src/videos/**/*.*").pipe(dest("build/videos"));
}

function stylesBuild() {
  return src("src/css/style.css").pipe(cleanCSS()).pipe(dest("build/css"));
}
function scriptsBuild() {
  return src("src/js/*.js")
    .pipe(isProd ? terser() : uglify())
    .pipe(dest("build/js"));
}
function injectFilesBuild() {
  return src("build/*.html")
    .pipe(
      inject(
        src(["build/css/libs/*.css", "build/css/style.css", "build/js/libs/*.js", "build/js/main.js"], { read: false }),
        { relative: true }
      )
    )
    .pipe(dest("build"));
}

exports.fonts = fonts;

// Запуск у режимі розробки
exports.dev = series(
  clean,
  parallel(styles, scripts, copyLibs, copyCssLibs, copyFlags, images, components, copyVideos),
  injectFiles,
  replaceImageExtensions,
  replaceImageExtensionsInCSS,
  serve
);

function componentsBuild() {
  return src("src/*.html")
    .pipe(fileinclude({ prefix: "@@", basepath: "@file" }))
    .pipe(dest("build/"));
}

function replaceImageExtensionsBuild() {
  return src("build/*.html")
    .pipe(replace(/src="([^"]+\.(jpg|png))"/g, (match, p1) => `src="${p1.replace(/\.(jpg|png)$/, ".webp")}"`))
    .pipe(dest("build"));
}

function replaceImageExtensionsInCSSBuild() {
  return src("build/css/*.css")
    .pipe(
      replace(/url\(["']?([^"']+\.(jpg|png))["']?\)/g, (match, p1) => `url("${p1.replace(/\.(jpg|png)$/, ".webp")}")`)
    )
    .pipe(dest("build/css"));
}

// Білд для продакшену
exports.build = series(
  cleanBuild,
  clean,
  fonts,
  parallel(stylesBuild, scriptsBuild, copyLibsBuild, copyCssLibsBuild, imagesBuild, copyVideosBuild),
  componentsBuild,
  injectFilesBuild,
  replaceImageExtensionsBuild,
  replaceImageExtensionsInCSSBuild
);
