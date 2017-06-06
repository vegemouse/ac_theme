module.exports = function(grunt){
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      options: {
        sourceMap: true
      },
      dist: {
        files: {
          'style.css' : 'scss/main.scss'
        }
      }
    },
    watch: {
      css: {
        files: 'scss/main.scss',
        tasks: ['sass'],
      }
    }
  });
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);
}
