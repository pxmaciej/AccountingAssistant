import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './Dashboard';
import Login from './Login';
import Fupload from './Fupload';
import Profile from './Profile';


Vue.use(VueRouter);


export const routes = [

    {
        path : '/login',
        component : Login,
    },
    {
        path : '/dashboard',
        component: Dashboard,
    },
    {
        path : '/f-upload',
        component: Fupload,
    },
    {
        path : '/profile',
        component: Profile,
    },
];
