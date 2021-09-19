import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './Dashboard';
import Login from './Login';
import Fupload from './Fupload';
import Profile from './Profile';
import Payment from './Payment';
import Erning from './Erning';
import Expense from './Expense';

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
    {
        path : '/payment',
        component: Payment,
    },
    {
        path : '/erning',
        component: Erning,
    },
    {
        path : '/expense',
        component: Expense,
    }
];
