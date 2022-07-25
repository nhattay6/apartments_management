const adminLogin = () => import('./components/Login1.vue')
const adminDashboard = () => import('./components/Home1.vue')
const home = () => import('./components/Home1.vue')

export const routes = [
    {   
        path: '/',
        component: home,
        name: "home"
    },
    {   
        path: '/login',
        component: adminLogin,
        name: "adminLogin"
    },
    {
        path: '/dashboard',
        component: adminDashboard,
        name: "adminDashboard"
    },
];