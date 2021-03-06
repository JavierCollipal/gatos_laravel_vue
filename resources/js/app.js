
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import ElementUI from 'element-ui';
import Vue from 'vue';
import VueRouter from 'vue-router';
import VeeValidate from 'vee-validate';
import VeeElement from 'vee-element';
import App from './views/App';
import Routes from './routes';
import 'element-ui/lib/theme-chalk/index.css';

// configure validator
const rules = {
    // add custom rules
}

const options = {
    // add custom options
}

const validator = new VeeValidate.Validator(rules, options);

Vue.use(VueRouter);
Vue.use(ElementUI);
Vue.use(VeeElement, validator);
Vue.component('my-switch', require('./components/my-switch.vue').default);


const router = new VueRouter({
    mode: 'history',
    routes: Routes
});


const app = new Vue({
    el: '#app',
    render: h => h(App),
    components: { App },
    router,
});
