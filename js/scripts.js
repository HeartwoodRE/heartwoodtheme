import Vue from 'vue'
import VueInstagram from 'vue-instagram'

Vue.use(VueInstagram.default)

export default {
  name: 'App',

  components: {
    VueInstagram
  }
}

new Vue({
      el: '#app',
      data: {
        token: 'b2999556dcaa40e68374ef657ac660b7'
      }
})
