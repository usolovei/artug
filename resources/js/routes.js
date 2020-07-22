import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        name: 'home',
        component: require('./views/Home').default
    },
];

export default new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'is-active',
});
