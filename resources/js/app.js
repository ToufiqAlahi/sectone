


require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';

import VueRouter from 'vue-router';
('admin-home', require('./admin/AdminHome.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = VueRouter({
    routes
})
const app = new Vue({
    el: '#app',
    routes,
});
