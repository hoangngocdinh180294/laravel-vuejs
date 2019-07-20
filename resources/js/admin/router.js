import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
const router = new VueRouter({
    routes: [
        { path: '/admin/customer', components: require('./views/customer/index.vue') },
        { path: '/admin/customer/show', components: require('./views/customer/show.vue') }

    ]
});
export default router
