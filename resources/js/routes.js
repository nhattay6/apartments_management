const login = () => import('./auth/Login.vue')
const register = () => import('./auth/Register.vue')

const dashBoard = () => import('./components/Home.vue')
const header = () => import('./layout/Header.vue')
const home = () => import('./components/Home.vue')

const apartment = () => import('./components/Apartment.vue')

export const routes = [
    {   
        path: '/',
        component: home,
        name: "home"
    },
    // {   
    //     path: '/home',
    //     component: home,
    //     name: "home"
    // },
    {   
        path: '/login',
        component: login,
        name: "login"
    },
    {   
        path: '/register',
        component: register,
        name: "register"
    },
    {
        path: '/dashboard',
        component: dashBoard,
        name: "dashBoard"
    },
    {
        path: '/header',
        component: header,
        name: "header"
    },
        {
        path: '/apartment',
        component: apartment,
        name: "apartment"
    },
    // {
    //     path: '/apartment-list',
    //     component: ,
    //     name: ""
    // },
    // {
    //     path: '/room-list',
    //     component: ,
    //     name: ""
    // },
     
];