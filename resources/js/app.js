
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
import Vue from 'vue'
import VueRouter from 'vue-router';
import App from './views/App';
import Bienvenido from './views/bienvenido';
import Hijo from './views/hijo';
import Listado from './views/listado';
import Insertar from './views/insertado';
import Modificar from './views/modificar';
import 'element-ui/lib/theme-chalk/index.css';


Vue.use(VueRouter)
Vue.use(ElementUI);
Vue.component('my-switch', require('./components/my-switch.vue').default);


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'inicio',
            component: Bienvenido
        },
        {
            path: '/hijo',
            name: 'hijo',
            component: Hijo
        },
        {
            path: '/listado',
            name: 'listado',
            component: Listado
        },
        {
            path: '/registro',
            name: 'registrar',
            component: Insertar
        },
        {
            path: '/modificar',
            name: 'modificar',
            component: Modificar
        },
    ],
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    components: { App },
    router,
});