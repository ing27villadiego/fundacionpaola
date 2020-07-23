import VueRouter from 'vue-router'

import store from "./store";

// componentes frontend
import Home from './components/frontend/Home'
import Contacto from './components/frontend/Contacto'
import NotFound from './components/frontend/shared/NotFound'

// componentes backend
import Tablero from './components/backend/App'
import Login from './components/backend/Login'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/contactanos',
        name: 'contacto',
        component: Contacto
    },
    {   path: '/404', name: '404', component: NotFound },
    {   path: '*', redirect: '/404' },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/admin',
        name: 'admin',
        component: Tablero,
        /*children: [
            {
                path: 'categorias',
                name: 'categorias',
                component: Categoria
            }
        ],*/
    },
];

const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
            resolve({ x: 0, y: 0 })
            }, 0)
        })
    }
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!store.user) {
          next({
            name: "login"
          });
        } else {
          next();
        }
    } else {
        next();
    }
})

export default router
