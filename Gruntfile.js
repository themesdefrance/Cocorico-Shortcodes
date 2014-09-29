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
		dev: {
			options:{
				cssDir: 'scss/css/',
				outputStyle: 'expanded'
				//outputStyle: 'compressed'
			}
		},
		build: {
			options:{
				cssDir: '.',
				outputStyle: 'compressed',
				noLineComments: true
			}
		}
	}
    
  });

  // Load the plugin that provides the "watch", "compass" & "uglify" tasks.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['compass:dev']);
  grunt.registerTask('build', ['compass:build', 'compass:dev']);

};