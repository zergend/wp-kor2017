module.exports = function(grunt) {
  grunt.loadNpmTasks("grunt-contrib-less");
  grunt.loadNpmTasks("grunt-browser-sync");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-postcss");

    grunt.initConfig({
      less: {
        style: {
          files: {
            "style.css": "less/style.less"
          }
        }
      }
      postcss: {
        options: {
          processors: [
            require("autoprefixer")({browsers:
            [
            "last 1 version",
            "last 2 Chrome versions",
            "last 2 Firefox versions",
            "last 2 Opera versions",
            "last 2 Edge versions"
            ]})
            ]
        },
        style: {src: "style.css"}
      }
      watch: {
        style: {
          files: ["less/**/*.less"],
          tasks: ["less", "postcss"]
        }
      }
      browserSync: {
        server: {
          bsFiles: {
            src: ["*.php", "style.css", "js/*.js", "**/*.php"]
          },
          options: {
            server: "."
          }
        }
      }
    });
};
