module.exports = function(grunt) {

// Project configuration.
grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),

	//MADE DIRECTORY
	// mkdir: {
	//     all: {
	//       options: {
	//         create: ['production', 'production/css','production/js']
	//       }
	//     }
	//   },

	//SASS
	sass: {
		dist:{
			files:{
				'style.css': 'css/style.scss'
			},
			options:{
				banner: '/\*Theme Name: WW Theme \nTheme URI: http://winterwei.com\nDescription: Cutsom theme for my portfolio site, based on the HY theme built by Wes Bos. \nVersion: 1.0\nAuthor: Winter Wei \nAuthor URI: http://winterwei.com \*/',
				style: 'compressed'
			}
		}
	},

	//AUTOPREFIXER
	autoprefixer: {
		options: {
			browsers:['last 3 version','ie 8','ie 9']
		},
		no_dest: {
			src: 'style.css'
		}
	},

	//SVG INJECT
	// svginject: {
	//    all : {
	//      options: {},
	//      files: {
	//         'js/SVGinject.js': ['images/*.svg'],
	//      }
	//    }
	//  },

	//CONCATENATE FILES
	// concat: {
	// 	options: {
	// 		separator: ';'
	// 	},
	//   js: {
	//     src: ['js/*.js'],
	//     dest: 'production/js/main.js'   
	//    }
	//  },

	//CSS MINIFY
	cssmin: {
	  minify: {
	    files:{
	    	'style.css': 'style.css'
	    }
	  }
	},

	//JS UGLIFY
	// uglify: {
	//     my_target: {
	//       files: {
	//         'production/js/main.min.js': ['production/js/*.js']
	//       }
	//     }
	//   },

	//COPY
	// copy: {
	//   main: {
	//     src: 'index.html',
	//     dest: 'production/',
	//   }
	// },	  

	//WATCH
	watch: {
		css: {
			files: ['css/*.scss'],
			tasks: ['sass','autoprefixer']
		},
		options: {
			livereload:true
		}
	}

}); //end

//STARTER
grunt.loadNpmTasks('grunt-mkdir');

//WATCH
grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-autoprefixer');
grunt.loadNpmTasks('grunt-svginject');
grunt.loadNpmTasks('grunt-contrib-connect');
grunt.loadNpmTasks('grunt-contrib-watch');

//PRODUCTION
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-copy');


// Default task(s).
grunt.registerTask('default', ['watch']);
grunt.registerTask('mkprod',['cssmin']);

};