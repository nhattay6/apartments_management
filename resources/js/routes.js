const login = () => import('./auth/Login.vue')
const register = () => import('./auth/Register.vue')
const verify = () => import('./auth/Verify.vue')

const dashBoard = () => import('./components/DashBoard.vue')
const header = () => import('./layout/Header.vue')
const home = () => import('./components/Home.vue')
const homeTemp = () => import('./components/HomeTemp.vue')
const apartment = () => import('./components/Apartment.vue')

const test = () => import('./layout/Test.vue')

// apartment
const listApartment = () => import('./pages/apartment/ListApartment.vue')
const addApartment = () => import('./pages/apartment/AddApartment.vue')
const editApartment = () => import('./pages/apartment/EditApartment.vue')

// const searchApartment = () => import('./pages/apartment/SearchApartment.vue')
// room fee
const listFee = () => import('./pages/fee_room/ListFee.vue') 

export const routes = [
    {   
        path: '/home',
        component: home,
        children: [
            { 
                path: '/home/apartment', 
                name: 'apartment-list', 
                component: listApartment, 
                // children: [
                //     {
                //         path: '/home/apartment/add', 
                //         name: 'apartment-add', 
                //         component: addApartment, 
                //     },
                 
                // ] 
            },
            { path: '/home/apartment-add', name: 'apartment-add', component: addApartment },
            { path: '/home/apartment-edit/:id', name: 'apartment-edit', component: editApartment },
            // { path: '/room', name: 'room-list', component: listApartment },
            { path: '/home/fee-list', name: 'fee-list', component: listFee },
        ],
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
    // {
    //     path: '/apartment',
    //     component: apartment,
    //     name: "apartment"
    // },
    {
        path: "/verify/:hash",
        name: "Verify",
        props: true,
        component: verify,
        // beforeEnter: auth,
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
    {
        path: '/test',
        component: test,
        name: "test"
    },
    // { path: '/apartment/add', name: 'add-apartment', component: addApartment },
    // { path: '/apartment/edit', name: 'edit-apartment', component: editApartment },
    // { path: '/apartment/search', name: 'search-apartment', component: searchApartment },
];