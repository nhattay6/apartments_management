const login = () => import('./auth/Login.vue')
const register = () => import('./auth/Register.vue')
const verify = () => import('./auth/Verify.vue')

const dashBoard = () => import('./components/Home.vue')
const header = () => import('./layout/Header.vue')
const home = () => import('./components/Home.vue')

const homeTemp = () => import('./components/HomeTemp.vue')

const apartment = () => import('./components/Apartment.vue')

export const routes = [
    {   
        path: '/',
        component: home,
        name: "home"
    },
    {   
        path: '/home-temp',
        component: homeTemp,
        name: "homeTemp"
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
    {
        path: "/verify/:hash",
        name: "Verify",
        props: true,
        component: verify,
        beforeEnter: auth,
      }
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