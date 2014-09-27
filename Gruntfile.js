module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    watch: {
		compile: {
			files: ['scss/*'],
			tasks: ['default']
		}
	},
	compass: {
		options:{
			sassDir: 'scss/',
			imagesDir: 'img',
			require: []
		},
		build: {
			options:{
				cssDir: '.',
				outputStyle: 'expanded'
				//outputStyle: 'compressed'
			}
		},
		dev: {
			options:{
				cssDir: 'scss/css/',
				outputStyle: 'expanded',
				noLineComments: true
			}
		}
	}
    
  });

  // Load the plugin that provides the "watch" and "compass" tasks.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');

  // Default task(s).
  grunt.registerTask('default', ['compass:build']);
  grunt.registerTask('build', ['compass:build', 'compass:dev']);

};