import { createRouter, createWebHistory } from 'vue-router'

import DepartementsIndex from '../components/departements/DepartementsIndex.vue'

const routes = [
    {
        path: '/departement',
        name: 'departements.index',
        component: DepartementsIndex
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})