require('./bootstrap');
import Vue from 'vue';
import App from './app/App';
import { routes } from './app/routes';
import VueRouter from 'vue-router';
import { store } from './app/store';
import VueFilterDateParse from '@vuejs-community/vue-filter-date-parse';
import VueFilterDateFormat from 'vue-filter-date-format';
import Vuelidate from 'vuelidate'

Vue.use(VueRouter);
Vue.use(VueFilterDateParse);
Vue.use(VueFilterDateFormat);
Vue.use(Vuelidate);


const router = new VueRouter({
    routes : routes,
    mode : 'history',

});


const app = new Vue({
    el: '#app',
    router: router,
    store : store,
    render : app => app(App),
});
