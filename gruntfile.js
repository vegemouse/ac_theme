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
    cssmin: {
      target: {
        files: {
          'style.css': ['style.css']
        }
      },
      options: {
        keepSpecialComments: 1
      }
    },
    browserify: {
      dist: {
        files: {
          'js/bundle.js': ['js/scripts.js']
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'js/bundle.js': ['js/bundle.js']
        }
      }
    },
    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass', 'cssmin'],
      },
      js: {
        files: 'js/scripts.js',
        tasks: ['browserify', 'uglify']
      }
    }
  });
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browserify');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.registerTask('default', ['watch']);
}
