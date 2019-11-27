module.exports = function(grunt){
    grunt.initConfig({

      csslint: {
          strict: {
            options: {
              import: 2,
              quiet: true
            },
            src: ['assets/css/style.css', '!assets/css/*.min.css']
          },
        },
        sass: {
			dist: {
                options: {
                  sourcemap: false,
                  style:'expanded',
                },
				files: {
			    	'assets/css/style.css': 'assets/scss/style.scss'
				}
			}
		},
        cssmin: {
		  target: {
		    files: [{
		      expand: true,
              cwd: 'assets/css',
		      src: ['*.css', '!*.min.css'],
		      dest: 'assets/css',
		      ext: '.min.css'
		    }]
		  }
		},
        jshint: {
            files: ['assets/js/*.js','!assets/js/*.min.js'],
            options: {
                globals: {
                    jQuery: true
                },
                esversion: 6
            }
        },
        uglify:{
          my_target:{
              files: {
  	          'assets/js/script.min.js': ['assets/js/script.js']
  	        }
          }
        },
        watch: {
            scss: {
  	        files: ['assets/scss/*.scss'],
  	        tasks: ['sass', 'cssmin', 'csslint']
  	      },
  	      csslint: {
  	        files: ['assets/css/*.css', '!assets/css/*.min.css'],
  	        tasks: ['csslint']
  	      },
  	      js: {
  	        files: ['assets/js/*.js', '!assets/js/*.min.js'],
  	        tasks: ['jshint', 'uglify']
  	      }
        }
    });
    // load plugins

    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify-es');

    // register tasks
    grunt.registerTask('setup',['sass','cssmin']);
    grunt.registerTask('compile',['sass'] );
    grunt.registerTask('check',['csslint','jshint']);
    grunt.registerTask('minify', ['cssmin','uglify']);
    grunt.registerTask('default', ['watch']);
};
