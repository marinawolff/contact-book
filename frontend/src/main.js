import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.min.css'

import { createRouter, createWebHashHistory } from 'vue-router'

import Contacts from './views/Contacts.vue'
import Contact from './views/Contact.vue'
import Create from './views/Create.vue'
import Edit from './views/Edit.vue'

const routes = [
    {
        path: '/',
        component: Contacts
    },
    {
        path: '/contact/:id',
        component: Contact,
        props: true
    },
    {
        path: '/create',
        component: Create
    },
    {
        path: '/contact/:id/edit',
        component: Edit,
        props: true
    }
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes
})

createApp(App).use(router).mount('#app')
