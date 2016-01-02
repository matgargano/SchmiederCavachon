module.exports = function (grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		watch : {
			options: {
				livereload: true
			},
			sass   : {
				files: [
					'sass/*.scss',
					'sass/**/*.scss'
				],
				tasks: ['default']
			},
			js     : {
				files: [
					'js/*.js'
				],
				tasks: ['default']
			}

		},
		cssmin: {
			options: {
				keepSpecialComments: true
			},
			target : {
				files: {
					'css/style.min.css': ['css/style.css']
				}
			}


		},
		sass  : {

			production: {
				options: {
					style    : 'expanded',
					sourcemap: 'auto',
					precision: 4
				},
				files  : {
					'css/style.css': 'sass/main.scss'
				}
			}
		},

		autoprefixer: {
			multiple_files: {
				src: "css/style.css"
			}
		},

		uglify: {
			theme: {
				options: {
					preserveComments: "some"
				},
				files  : {

					"js/script.min.js": [
						"node_modules/jquery/dist/jquery.js",
						"node_modules/bootstrap/dist/js/bootstrap.js",
						"node_modules/masonry-layout/dist/masonry.pkgd.js",
						"node_modules/imagesloaded/imagesloaded.js",
						"node_modules/readmore.js/readmore.min.js",
						"js/script.js"


					]
				}
			}
		}


	});


	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks("grunt-contrib-imagemin");
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks("grunt-contrib-jshint");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-contrib-cssmin");


	grunt.registerTask('default', ['sass:production', 'uglify:theme', 'autoprefixer', 'cssmin']);


};