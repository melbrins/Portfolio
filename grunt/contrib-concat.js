module.exports = function(grunt) {
	
	grunt.config('concat', {
		
		jquery: {
			
			options: {
				
			},
			
			src: [
				'js/src/jquery.min.js',
				'js/src/jquery.easing.min.js',
				'js/src/jquery.ba-cond.min.js',
				'js/src/jquery.lazy.min.js',
				],

			dest: 'js/jquery.js'
			
		},

		addons:{

			options:{

			},

			src: [
				'node_modules/owl.carousel/dist/owl.carousel.min.js',
				'js/src/classie.js',
				'js/src/snap.svg-min.js',
				'js/src/mobile-menu.js'
			],

			dest: 'js/addons.js'
		},

		custom:{

			options: {
				sourceMap: true
			},

			src: [
				'script/*.js'
			],

			dest: 'js/main.js'
		}

		
	});
	
	grunt.loadNpmTasks('grunt-contrib-concat');
};