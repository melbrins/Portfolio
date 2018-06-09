module.exports = function(grunt) {
	
	grunt.config('sass', {
		
		components: {

			files: {
				'css/components.css' : 'node_modules/owl.carousel/src/scss/owl.carousel.scss'
			}
		},

		custom: {

			options: {
				style		: 'expanded',
				compass		: true,
				lineNumber	: true
			},

			files: {
				'css/main.css': 'scss/stylesheet.scss'
			}
		}
		
	});
	
	grunt.loadNpmTasks('grunt-contrib-sass');
};