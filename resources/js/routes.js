const login = () => import('./components/Login.vue')
const register = () => import('./components/Register.vue')
const dashBoard = () => import('./components/Home1.vue')
const home = () => import('./components/Home1.vue')

export const routes = [
    {   
        path: '/',
        component: home,
        name: "home"
    },
    {   
        path: '/home',
        component: home,
        name: "home"
    },
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