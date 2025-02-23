import Vue from 'vue'
import Settings from './Settings.vue'
Vue.mixin({ methods: { t, n } })

const View = Vue.extend(Settings)
new View().$mount('#hitobitologin')
