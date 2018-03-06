module.exports = function(grunt){

grunt.initConfig({
  sass: {
    dist: {
      files: [{
        expand: true,
        cwd: 'css',
        src: ['*.scss'],
        dest: 'css',
        ext: '.css'
      }]
    }
  }
});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.registerTask('default', ['sass']);
	
}


