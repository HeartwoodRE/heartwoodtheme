const fixedHeader = new Vue({
      el: '#headerBlock',

      data: {
        scrollY: null,
        isfixed: false,
      },

      mounted() {
        window.addEventListener('scroll', (event) => {
          this.scrollY = Math.round(window.scrollY);
        });
      },

      computed: {
        'container-headerInner': {
          props: ['top', 'scrollY'],
          function () {
          return {
            style: {},
            originalTop: 0
            }
          }
        },

          mounted() {
            this.originalTop = this.$el.getBoundingClientRect().top;
          },
          watch: {
            scrollY(newValue) {
              const rect = this.$el.getBoundingClientRect();
              const newTop = this.scrollY + +this.top - this.originalTop;

              if (newTop > 0) {
                this.$set(this.style, 'top', `${newTop}px`);
              } else {
                this.$delete(this.style, 'top');
              }
            }
          }
      }
    });
