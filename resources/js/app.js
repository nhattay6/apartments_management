/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
// import store from './store';


Vue.use(VueRouter);
Vue.use(VueAxios, axios);
import { routes } from './routes.js';

// import App from './App.vue'
const App = () => import('./App.vue')

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

// Vue.config.productionTip = false;

// axios.interceptors.response.use(
//   response => response,
//   error => {
//     if (error.response.status === 422) {
//      // store.commit("setErrors", error.response.data.errors);
//     } else if (error.response.status === 401) {
//     //  store.commit("auth/setUserData", null);
//       localStorage.removeItem("token");
//       router.push({ name: "login" });
//     } else {
//       return Promise.reject(error);
//     }
//   }
// );

// axios.interceptors.request.use(function(config) {
//   config.headers.common = {
//     Authorization: `Bearer ${localStorage.getItem("token")}`,
//     "Content-Type": "application/json",
//     Accept: "application/json"
//   };

//   return config;
// });

const app = new Vue({
    el: '#app',
    router: router,
    // stote: store,
    render: (h) => h(App),
});

export default app;