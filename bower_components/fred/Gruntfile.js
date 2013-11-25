module.exports = function(grunt) {

    grunt.initConfig({
        concat: {
            sass: {
                src: [
                    "scss/_variables.scss",
                    "scss/helpers/*.scss",
                    "scss/objects/_core.scss",
                    "scss/objects/_grid.scss",
                    "scss/objects/_typography.scss",
                    "scss/objects/_arrows.scss",
                    "scss/objects/_badge.scss",
                    "scss/objects/_blocks.scss",
                    "scss/objects/_breadcrumbs.scss",
                    "scss/objects/_buttons.scss",
                    "scss/objects/_forms.scss",
                    "scss/objects/_headings.scss",
                    "scss/objects/_icon-text.scss",

                    "scss/objects/_images.scss",
                    "scss/objects/_lists.scss",
                    "scss/objects/_media.scss",
                    "scss/objects/_radii.scss",
                    "scss/objects/_spacing.scss"
                ],
                dest: "dist/fred.scss"
            }
        },
        sass: {
            dist: {
                options: {
                    outputStyle: 'nested'
                },
                files: {
                    'dist/fred.css': 'scss/fred.scss'
                }
            }
        },
        watch: {
            sass: {
                files: ['scss/**/*.scss'],
                tasks: ['sass', 'concat:sass'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['sass', 'concat:sass']);

};
