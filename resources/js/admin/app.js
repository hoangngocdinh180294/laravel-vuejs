require('./bootstrap');

window.Vue = require('vue');

import App from './App.vue'
import router from './router.js'

const app = new Vue({
    el: '#app',
    components: {
        App,
    },
    template: '<App></App>',
    router
});