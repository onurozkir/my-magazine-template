module.exports = function (grunt) {
    grunt.initConfig({
        concat: {
            options: {
                separator: ';',
            },
            dist: {
                src: [
                    'assets/js/vendor/jquery-2.2.4.min.js',
                    'assets/js/popper.min.js',
                    'assets/js/vendor/bootstrap.min.js',
                    'assets/js/sweetalert2.all.js',
                    'assets/js/jquery.ajaxchimp.min.js',
                    'assets/js/jquery.validate.js',
                    'assets/js/owl.carousel.min.js',
                    'assets/js/jquery.magnific-popup.min.js',
                    'assets/js/main.js',
                ],
                dest: 'assets/js/build/app.js',
                nonull: true
            }
        },
        comments: {
            js: {
                options: {
                    keepSpecialComments: false,
                    singleline: true,
                    multiline: true
                },
                src: ['assets/js/build/app.js']
            }
        },
        uglify: {
            my_target: {
                options: {
                    sourceMap: true,
                    sourceMapName : 'assets/js/build/app.sourcemap.js'
                },
                files: {
                    'assets/js/build/app.min.js': ['assets/js/build/app.js']
                }
            }
        },

    });
    /**
     * Grunt Combine
     */
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-stripcomments');
    /** Grunt Minifier */
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('default', ['concat', 'comments','uglify']);

};