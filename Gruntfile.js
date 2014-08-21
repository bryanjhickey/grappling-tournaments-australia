module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('Package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'nested'
        },
        files: {
          'css/app.css': 'scss/app.scss'
        }        
      }
    },
    
    copy: {
      main: {
        files: [
          {
            src: 'bower_components/slick-carousel/slick/slick.scss',
            dest: 'scss/custom/_slick.scss'
          }
        ]
      }
    },
    //       {
    //         src: 'bower_components/fastclick/lib/fastclick.js',
    //         dest: 'js/vendor/fastclick.js'
    //       },
    //       {
    //         src: 'bower_components/jquery-placeholder/jquery.placeholder.js',
    //         dest: 'js/vendor/jquery-placeholder.js'
    //       },
    //     ]
    //    },
    // },    



    uglify: {
      dist: {
        files: [
          {'js/vendor/jquery.min.js': ['bower_components/jquery/dist/jquery.min.js']},
          {'js/vendor/fastclick.js': ['bower_components/fastclick/lib/fastclick.js']},
          {'js/vendor/jquery-placeholder.js': ['bower_components/jquery-placeholder/jquery.placeholder.js']},
          {'js/vendor/modernizr.js': ['bower_components/modernizr/modernizr.js']},
          {'js/vendor/slick.js': ['bower_components/slick-carousel/slick/slick.min.js']},
          {'js/core.js': ['bower_components/foundation/js/foundation.min.js']},
        ]
      }
    },

    watch: {
      options: {
        livereload: true
      },
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['copy', 'uglify', 'watch']);

}