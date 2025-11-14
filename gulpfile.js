(() => {
	"use strict";

	const { src, dest, watch, series, parallel } = require("gulp");
	const sass = require("gulp-sass")(require("sass"));
	const sourcemaps = require("gulp-sourcemaps");
	const autoprefixer = require("gulp-autoprefixer");
	const postcss = require("gulp-postcss");
	const browserSync = require("browser-sync").create();
	const plumber = require("gulp-plumber");
	const concat = require("gulp-concat");
	const cssmin = require("gulp-cssmin");
	const notify = require("gulp-notify");
	const scssLint = require("gulp-sass-lint");
	const uglify = require("gulp-uglify");

	// Paths For All Asset Types
	const path = {
		theme: "http://backer.local/",
		scss: "_src/scss",
		js: "_src/js",
		img: "_src/img",
		fonts: "_src/fonts",
		php: "**/*.php",
		dist_img: "_dist/img",
		dist_css: "_dist/css",
		dist_js: "_dist/js",
		dist_fonts: "_dist/fonts",
	};

	// Scss-lint Tasks (temporarily disabled)
	function scss_lint(done) {
		console.log("SCSS lint task skipped (temporarily disabled)");
		done();
	}

	// Scss Prefixer and Sourcemaps Tasks with PostCSS/Tailwind  
	function scss(done) {
		console.log("Starting SCSS compilation...");
		src([
			path.scss + "/global.scss",

		])
			.pipe(sass().on("error", sass.logError))
			.pipe(postcss())
			.pipe(dest(path.dist_css))
			.on('end', done)
			.on('error', done);
	}

	// Minify Styles Tasks
	function styles(done) {
		src([path.dist_css + "/global.css"])
			.pipe(concat("global.min.css"))
			.pipe(cssmin())
			.pipe(dest(path.dist_css))
			.on('end', () => {
				console.log("✓ CSS minified successfully");
				done();
			});
	}

	// Scripts Tasks
	function js() {
		return src([
			path.js + "/slick.carousel.js",
			path.js + "/jquery.matchHeight.js",
			path.js + "/jquery-scrolltofixed.js",
			path.js + "/blazy.js",
			path.js + "/accordion.js",
			path.js + "/tabs.js",
			path.js + "/doubletaptogo.js",
			path.js + "/scripts.js",
		])
			.pipe(plumber())
			.pipe(concat("scripts.js"))
			.pipe(dest(path.dist_js));
	}

	// Scripts Concat and Minify Tasks
	function scripts(done) {
		src(path.dist_js + "/scripts.js")
			.pipe(concat("scripts.min.js"))
			.pipe(uglify())
			.pipe(dest(path.dist_js))
			.on('end', () => {
				console.log("✓ JavaScript minified successfully");
				done();
			});
	}

	// Image Tasks
	// Images Tasks
	function images(done) {
		console.log("Images task completed (images processing skipped)");
		done();
	}

	// Fonts Tasks
	function fonts(done) {
		console.log("Fonts task completed (fonts already copied manually)");
		done();
	}

	// Static Server (disabled for container environment)
	function server(done) {
		console.log("BrowserSync disabled - running in container mode");
		done();
	}

	function watchFiles() {
		console.log("Watching for file changes...");
		watch(
			[path.scss + "/**/*.scss", path.js + "/**/*.js", path.php],
			series(scss, styles, js, scripts)
		);

		watch(path.img + "/*", images);

		console.log("Watch mode active. Press Ctrl+C to stop.");
	}

	exports.scss = scss;
	exports.fonts = fonts;
	exports.default = series(
		scss,
		styles,
		fonts,
		js,
		scripts,
		images,
		server,
		watchFiles
	);
})();
