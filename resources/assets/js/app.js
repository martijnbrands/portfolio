
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

import posts from './components/Posts.vue';
import detail from './components/Detail.vue';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', component: posts},
        {path: '/posts/:slug', component: detail}
    ]
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('posts', require('./components/Posts.vue'));
Vue.component('detail', require('./components/Detail.vue'));

const app = new Vue({
    el: '#app',
    router,
});


